import {
    createIcons,
    Map as MapIcon, // alias supaya tidak bentrok dengan Map bawaan JavaScript
    Layers, Utensils, MapPin, ChevronDown, ChevronRight, User,
    PanelLeftClose, PanelLeftOpen, Search, Bike, Wifi, MoonStar, Bath,
    DoorOpen, Navigation, Plus, Minus, LocateFixed, GraduationCap,
    BookOpen, Building2, SlidersHorizontal, ParkingCircle,
} from 'lucide';

// Hanya ikon yang dipakai yang ikut di-bundle (lebih ringan).
// Tambah ikon baru: import di atas, lalu daftarkan di sini.
const icons = {
    Map: MapIcon,
    Layers, Utensils, MapPin, ChevronDown, ChevronRight, User,
    PanelLeftClose, PanelLeftOpen, Search, Bike, Wifi, MoonStar, Bath,
    DoorOpen, Navigation, Plus, Minus, LocateFixed, GraduationCap,
    BookOpen, Building2, SlidersHorizontal, ParkingCircle,
};

export function renderIcons(root = document.body) {
    createIcons({ icons, root });
}
