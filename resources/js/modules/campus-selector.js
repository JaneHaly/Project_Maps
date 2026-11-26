const STORAGE_KEY = 'campusmap_campus';

export function initCampusSelector() {
    const dropdowns = document.querySelectorAll('[data-campus]');
    if (!dropdowns.length) return;

    const closeAll = () => {
        document.querySelectorAll('[data-campus-menu]').forEach((m) => m.classList.add('hidden'));
        document.querySelectorAll('[data-campus-toggle]').forEach((b) => b.setAttribute('aria-expanded', 'false'));
    };

    const setCampus = (name, persist = true) => {
        document.querySelectorAll('[data-campus-label]').forEach((el) => (el.textContent = name));
        document.querySelectorAll('[data-campus-option]').forEach((li) => {
            const selected = li.dataset.campusOption === name;
            li.classList.toggle('bg-accent-container/60', selected);
            li.classList.toggle('hover:bg-background', !selected);
        });
        if (persist) {
            try { localStorage.setItem(STORAGE_KEY, name); } catch (e) { /* storage tidak tersedia */ }
        }
    };

    // Pulihkan pilihan terakhir
    try {
        const saved = localStorage.getItem(STORAGE_KEY);
        if (saved) setCampus(saved, false);
    } catch (e) { /* abaikan */ }

    document.addEventListener('click', (e) => {
        const toggle = e.target.closest('[data-campus-toggle]');
        const option = e.target.closest('[data-campus-option]');

        if (toggle) {
            const menu = toggle.closest('[data-campus]').querySelector('[data-campus-menu]');
            const willOpen = menu.classList.contains('hidden');
            closeAll();
            menu.classList.toggle('hidden', !willOpen);
            toggle.setAttribute('aria-expanded', String(willOpen));
            return;
        }

        if (option) setCampus(option.dataset.campusOption);
        closeAll(); // klik opsi atau klik di luar dropdown
    });
}
