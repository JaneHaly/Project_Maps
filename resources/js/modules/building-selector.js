
/**
 * Mengatur pemilihan gedung.
 * Memperbarui kartu detail dan memberi tahu Leaflet
 * ketika pengguna memilih gedung.
 */
export function initBuildingSelector() {
    const source = document.getElementById('campusmap-buildings');
    if (!source) return;

    const data = JSON.parse(source.textContent);
    const buildings = data.buildings;

    // Mencari data gedung berdasarkan ID.
    const findBuilding = (id) =>
        buildings.find((building) => building.id === id);

    // Memperbarui informasi pada kartu detail.
    const updateDetail = (building) => {
        const setText = (key, value) => {
            document.querySelectorAll(`[data-detail="${key}"]`)
                .forEach((el) => {
                    el.textContent = value ?? '';
                });
        };

        setText('title', building.name);
        setText('campus', building.meta_detail);
        setText('description', building.description);
        setText('indoor', building.indoor_label);

        document.querySelectorAll('[data-detail="photo"]')
            .forEach((img) => {
                img.src = building.photo_url;
                img.alt = building.name;
            });
    };

    // Mengatur tampilan kartu sidebar yang aktif.
    const updateActiveCard = (selectedId) => {
        document.querySelectorAll('[data-sidebar-card]')
            .forEach((card) => {
                const active = card.dataset.selectBuilding === selectedId;

                card.classList.toggle('border-accent', active);
                card.classList.toggle('shadow-sm', active);
                card.classList.toggle('border-border', !active);
            });
    };

    // Satu fungsi untuk semua cara memilih gedung.
    const selectBuilding = (id) => {
        const building = findBuilding(id);
        if (!building) return;

        updateDetail(building);
        updateActiveCard(id);

        document.dispatchEvent(
            new CustomEvent('building:selected', {
                detail: { id, building },
            })
        );
    };

    // Klik kartu gedung di sidebar.
    document.addEventListener('click', (event) => {
        const trigger = event.target.closest('[data-select-building]');
        if (!trigger) return;

        selectBuilding(trigger.dataset.selectBuilding);
    });

    // Pemilihan gedung dari marker Leaflet.
    document.addEventListener('building:select', (event) => {
        selectBuilding(event.detail.id);
    });

    // Pilih gedung awal ketika halaman dibuka.
    selectBuilding(data.selected_id);
}
