export function initSearch() {
    // Form pencarian belum mengirim ke server -> cegah reload halaman
    document.addEventListener('submit', (e) => {
        if (e.target.matches('form[role="search"]')) e.preventDefault();
    });

    // Filter kartu di sidebar
    const input = document.querySelector('[data-sidebar-search]');
    if (!input) return;

    input.addEventListener('input', () => {
        const query = input.value.trim().toLowerCase();
        document.querySelectorAll('[data-sidebar-card]').forEach((card) => {
            card.classList.toggle('hidden', query !== '' && !card.textContent.toLowerCase().includes(query));
        });
    });
}
