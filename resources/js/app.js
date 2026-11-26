//import './bootstrap';
import { renderIcons } from './lib/icons';
import { initCampusSelector } from './modules/campus-selector';
import { initMapViewport } from './modules/map-viewport';
import { initBuildingSelector } from './modules/building-selector';
import { initSidebar } from './modules/sidebar';
import { initSearch } from './modules/search';

//Tunggu sampai browser selesai membaca dan membentuk struktur HTML, baru jalankan kode di dalam fungsi ini.
document.addEventListener('DOMContentLoaded', () => {
    initCampusSelector();
    initMapViewport();
    initBuildingSelector();
    initSidebar();
    initSearch();
    renderIcons(); // paling akhir: ubah semua <i data-lucide> menjadi SVG
});
