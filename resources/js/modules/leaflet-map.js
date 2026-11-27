
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';
import 'leaflet-routing-machine';
import 'leaflet-routing-machine/dist/leaflet-routing-machine.css';
import { renderIcons } from '../lib/icons';

console.log(
    'Leaflet Routing Machine tersedia:',
    Boolean(L.Routing)
);

// Warna marker berdasarkan konfigurasi tone.
const TONE_COLORS = {
    featured: '#1d4ed8',
    primary: '#2563eb',
    warning: '#d97706',
    success: '#059669',
};

/**
 * Membuat tampilan ikon marker menggunakan Lucide.
 */
function createBuildingIcon(building, active = false) {
    const tone = building.marker?.tone || 'primary';
    const color = TONE_COLORS[tone] || TONE_COLORS.primary;
    const iconName = building.marker?.icon || 'map-pin';

    const background = active ? color : '#ffffff';
    const iconColor = active ? '#ffffff' : color;
    const size = active ? 46 : 40;

    return L.divIcon({
        className: 'campus-marker-container',
        html: `
            <div style="
                width: ${size}px;
                height: ${size}px;
                display: flex;
                align-items: center;
                justify-content: center;
                background: ${background};
                color: ${iconColor};
                border: 2px solid ${active ? '#ffffff' : color};
                border-radius: 50%;
                box-shadow: 0 3px 10px rgba(0,0,0,0.25);
                transform: ${active ? 'scale(1.08)' : 'scale(1)'};
                transition: all 0.2s ease;
            ">
                <i data-lucide="${iconName}"
                   style="width: 21px; height: 21px;"></i>
            </div>
        `,
        iconSize: [size, size],
        iconAnchor: [size / 2, size / 2],
    });
}

/**
 * Menginisialisasi peta dan marker gedung.
 */
export function initLeafletMap() {
    const source = document.getElementById('campusmap-buildings');
    if (!source) return;

    const data = JSON.parse(source.textContent);
    const mapConfig = data.map;
    const buildings = data.buildings || [];

    if (!mapConfig) {
        console.error('Konfigurasi peta tidak ditemukan.');
        return;
    }

    const containers = document.querySelectorAll('[data-leaflet-map]');

    containers.forEach((container) => {
        const center = mapConfig.center;

        // Membuat peta.
        const map = L.map(container, {
            zoomControl: false,
        }).setView(
            [center.lat, center.lng],
            mapConfig.zoom
        );

        // Memasang layer OpenStreetMap.
        L.tileLayer(mapConfig.tile_url, {
            maxZoom: mapConfig.max_zoom,
            attribution: mapConfig.attribution,
        }).addTo(map);

        // Menyimpan marker berdasarkan ID gedung.
        const markers = new Map();

        buildings.forEach((building) => {
            if (
                !Number.isFinite(Number(building.lat)) ||
                !Number.isFinite(Number(building.lng))
            ) {
                return;
            }

            const marker = L.marker(
                [Number(building.lat), Number(building.lng)],
                {
                    icon: createBuildingIcon(
                        building,
                        building.id === data.selected_id
                    ),
                }
            ).addTo(map);

            // Ubah ikon Lucide menjadi SVG.
            renderIcons(marker.getElement());

            // Klik marker akan memilih gedung.
            marker.on('click', () => {
                document.dispatchEvent(
                    new CustomEvent('building:select', {
                        detail: { id: building.id },
                    })
                );
            });

            markers.set(building.id, marker);
        });

        // Ketika gedung dipilih, perbarui marker.
        document.addEventListener('building:selected', (event) => {
            const selectedId = event.detail.id;

            markers.forEach((marker, id) => {
                const building = buildings.find((b) => b.id === id);

                if (building) {
                    marker.setIcon(
                        createBuildingIcon(
                            building,
                            id === selectedId
                        )
                    );

                    renderIcons(marker.getElement());
                }
            });

            // Geser peta hanya jika wadah sedang terlihat.
            if (container.getClientRects().length > 0) {
                const selected = buildings.find(
                    (b) => b.id === selectedId
                );

                if (selected) {
                    map.panTo(
                        [Number(selected.lat), Number(selected.lng)],
                        { animate: true, duration: 0.5 }
                    );
                }
            }
        });

        // Menyesuaikan ukuran peta saat wadah berubah.
        const observer = new ResizeObserver(() => {
            map.invalidateSize();
        });

        observer.observe(container);

        // Simpan objek peta.
        container._leafletMap = map;
    });

    // Menghubungkan tombol zoom dengan Leaflet.

    // Menghubungkan tombol zoom dan GPS dengan Leaflet.
    document.querySelectorAll('[data-map-action]').forEach((button) => {
        button.addEventListener('click', () => {
            const action = button.dataset.mapAction;

            // Cari peta yang sedang terlihat.
            const visibleContainer = [...containers].find(
                (container) => container.getClientRects().length > 0
            );

            const map = visibleContainer?._leafletMap;
            if (!map) return;

            if (action === 'zoom-in') {
                map.zoomIn();
            }

            if (action === 'zoom-out') {
                map.zoomOut();
            }

            // Fitur lokasi pengguna.
            if (action === 'reset') {
                if (!navigator.geolocation) {
                    alert('Browser kamu tidak mendukung GPS.');
                    return;
                }

                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const lat = position.coords.latitude;
                        const lng = position.coords.longitude;

                        // Pindahkan peta ke posisi pengguna.
                        map.flyTo([lat, lng], 18, {
                            animate: true,
                            duration: 1.5,
                        });

                        // Buat titik biru lokasi pengguna.
                        if (!map._userLocationMarker) {
                            map._userLocationMarker = L.circleMarker(
                                [lat, lng],
                                {
                                    radius: 9,
                                    color: '#ffffff',
                                    weight: 3,
                                    fillColor: '#2563eb',
                                    fillOpacity: 1,
                                }
                            ).addTo(map);
                        } else {
                            map._userLocationMarker.setLatLng([lat, lng]);
                        }

                        // Tambahkan lingkaran akurasi GPS.
                        if (!map._userAccuracyCircle) {
                            map._userAccuracyCircle = L.circle(
                                [lat, lng],
                                {
                                    radius: position.coords.accuracy,
                                    color: '#2563eb',
                                    weight: 1,
                                    fillColor: '#2563eb',
                                    fillOpacity: 0.1,
                                }
                            ).addTo(map);
                        } else {
                            map._userAccuracyCircle.setLatLng([lat, lng]);
                            map._userAccuracyCircle.setRadius(
                                position.coords.accuracy
                            );
                        }
                    },
                    (error) => {
                        let message = 'Gagal mendapatkan lokasi.';

                        if (error.code === 1) {
                            message = 'Izin lokasi ditolak. Izinkan akses lokasi di browser.';
                        } else if (error.code === 2) {
                            message = 'Lokasi perangkat tidak tersedia.';
                        } else if (error.code === 3) {
                            message = 'Permintaan lokasi terlalu lama.';
                        }

                        alert(message);
                    },
                    {
                        enableHighAccuracy: true,
                        timeout: 10000,
                        maximumAge: 0,
                    }
                );
            }
        });
    });

}
