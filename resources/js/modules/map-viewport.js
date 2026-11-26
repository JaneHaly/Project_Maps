const MIN_SCALE = 0.9;
const MAX_SCALE = 1.4;

/**
 * Zoom peta. Setiap peta = elemen [data-map] yang berisi
 * [data-map-viewport] dan tombol [data-map-action="zoom-in|zoom-out|reset"].
 */
export function initMapViewport() {
    document.querySelectorAll('[data-map]').forEach((root) => {
        const viewport = root.querySelector('[data-map-viewport]');
        if (!viewport) return;

        const step = parseFloat(root.dataset.zoomStep || '0.1');
        let scale = 1;

        const apply = (value) => {
            scale = Math.round(Math.min(MAX_SCALE, Math.max(MIN_SCALE, value)) * 100) / 100;
            viewport.style.transform = `scale(${scale})`;
        };

        root.addEventListener('click', (e) => {
            const action = e.target.closest('[data-map-action]')?.dataset.mapAction;
            if (action === 'zoom-in') apply(scale + step);
            if (action === 'zoom-out') apply(scale - step);
            if (action === 'reset') apply(1);
        });
    });
}
