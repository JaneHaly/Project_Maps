/**
 * Klik elemen dengan [data-select-building="id-gedung"] -> semua kartu detail
 * ([data-detail="..."]) diperbarui. Data berasal dari <script id="campusmap-buildings">.
 */
export function initBuildingSelector() {
    const source = document.getElementById('campusmap-buildings');
    if (!source) return;

    const buildings = JSON.parse(source.textContent);

    const setText = (key, value) =>
        document.querySelectorAll(`[data-detail="${key}"]`).forEach((el) => (el.textContent = value));

    document.addEventListener('click', (e) => {
        const trigger = e.target.closest('[data-select-building]');
        const building = trigger && buildings[trigger.dataset.selectBuilding];
        if (!building) return;

        setText('title', building.name);
        setText('campus', building.meta_detail);
        setText('description', building.description);
        setText('indoor', building.indoor_label);

        document.querySelectorAll('[data-detail="photo"]').forEach((img) => {
            img.src = building.photo_url;
            img.alt = building.name;
        });
    });
}
