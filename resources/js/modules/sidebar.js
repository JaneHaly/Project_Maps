const CHIP_ACTIVE = ['bg-primary', 'text-on-primary'];
const CHIP_IDLE = ['bg-surface', 'border', 'border-border', 'text-on-surface'];

export function initSidebar() {
    const sidebar = document.querySelector('[data-sidebar]');
    const expandBtn = document.querySelector('[data-sidebar-expand]');
    if (!sidebar) return;

    // Sembunyikan / tampilkan sidebar
    document.querySelectorAll('[data-sidebar-toggle], [data-sidebar-expand]').forEach((btn) =>
        btn.addEventListener('click', () => {
            const hide = !sidebar.classList.contains('hidden');
            sidebar.classList.toggle('hidden', hide);
            expandBtn?.classList.toggle('hidden', !hide);
            expandBtn?.classList.toggle('flex', hide);
        })
    );

    // Chip kategori (hanya mengubah tampilan aktif)
    const chips = document.querySelectorAll('[data-category-chip]');
    chips.forEach((chip) =>
        chip.addEventListener('click', () => {
            chips.forEach((c) => { c.classList.remove(...CHIP_ACTIVE); c.classList.add(...CHIP_IDLE); });
            chip.classList.remove(...CHIP_IDLE);
            chip.classList.add(...CHIP_ACTIVE);
        })
    );
}
