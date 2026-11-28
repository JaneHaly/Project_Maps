<?php

/*
|--------------------------------------------------------------------------
| Konfigurasi CampusMap
|--------------------------------------------------------------------------
| Data statis sementara. Saat database sudah siap, ganti sumber data di
| App\Services\BuildingService (view & controller tidak perlu diubah).
*/

return [

    'default_campus' => 'Kampus A',

    'campuses' => ['Kampus A', 'Kampus B', 'Kampus C'],

    'map' => [
    'center' => [
        'lat' =>   -7.313624, 
        'lng' => 112.727149,
    ],

    'zoom' => 17,
    'max_zoom' => 19,

    'tile_url' => 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',

    'attribution' => '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    ],

    // route = nama route Laravel. null = halaman belum dibuat (link jadi "#").
    'navigation' => [
        ['label' => 'Map',             'mobile_label' => 'Map',        'icon' => 'map',      'route' => 'map'],
        ['label' => 'Indoor Explorer', 'mobile_label' => 'Indoor',     'icon' => 'layers',   'route' => null],
        ['label' => 'Food Court',      'mobile_label' => 'Food Court', 'icon' => 'utensils', 'route' => null],
        ['label' => 'Profile',         'mobile_label' => 'Profile',    'icon' => 'user',     'route' => null, 'desktop' => false],
    ],

    // 'building' = gedung yang dipilih saat chip diklik (versi mobile).
    'categories' => [
        ['label' => 'Gedung',       'icon' => 'building-2',    'icon_class' => '',             'building' => 'fakultas-teknik'],
        ['label' => 'Parkir',       'icon' => 'parking-circle', 'icon_class' => 'text-accent',  'building' => 'parkir'],
        ['label' => 'Masjid',       'icon' => 'moon-star',     'icon_class' => 'text-success', 'building' => 'masjid'],
        ['label' => 'Perpustakaan', 'icon' => 'book-open',     'icon_class' => 'text-primary', 'building' => 'perpustakaan'],
        ['label' => 'Food Court',   'icon' => 'utensils',      'icon_class' => 'text-warning', 'building' => 'food-court'],
    ],

    // Key array = id gedung (dipakai di URL/JS). Foto ada di public/images/buildings/.
    'buildings' => [

        'fakultas-teknik' => [
            'name'         => 'Fakultas Teknik',
            'campus'       => 'Kampus A',
            'distance_m'   => 320,
            'walk_minutes' => 4,
            'description'  => 'Gedung perkuliahan, laboratorium teknik, Wi-Fi kampus, dan area parkir terpadu.',
            'badge'        => ['label' => 'Buka', 'variant' => 'success'],
            'facilities'   => [
                ['icon' => 'bike',      'label' => 'Parkir'],
                ['icon' => 'wifi',      'label' => 'Wi-Fi'],
                ['icon' => 'moon-star', 'label' => 'Masjid'],
                ['icon' => 'bath',      'label' => 'Toilet'],
            ],
            'floors'     => 3,
            'photo'      => 'fakultas-teknik.jpg',
            'in_sidebar' => true,
            'lat' => -7.315705, 
            'lng' => 112.726982,
            'marker' => [
                'icon' => 'building-2',
                'tone' => 'featured',
            ],
        ],

        'perpustakaan' => [
            'name'         => 'Danau Unesa Ketintang',
            'campus'       => 'Kampus A',
            'distance_m'   => 410,
            'walk_minutes' => 5,
            'description'  => 'Ruang baca tenang, coworking space, dan Wi-Fi cepat.',
            'summary'      => 'Ruang baca tenang, coworking space, dan Wi-Fi cepat.',
            'badge'        => ['label' => 'Indoor', 'variant' => 'accent'],
            'in_sidebar'   => true,
            'lat' =>  -7.314178, 
            'lng' => 112.725980,
            'marker' => [
                'icon' => 'waves',
                'tone' => 'info',
            ],
        ],

        'gedung-a1' => [
            'name'         => 'Gedung A1 · Rektorat',
            'campus'       => 'Kampus A',
            'distance_m'   => 480,
            'walk_minutes' => 6,
            'description'  => 'Pusat administrasi mahasiswa dan auditorium utama.',
            'summary'      => 'Pusat administrasi mahasiswa dan auditorium utama.',
            'badge'        => ['label' => 'Indoor', 'variant' => 'accent'],
            'in_sidebar'   => true,
            'lat' => -7.317183, 
            'lng' => 112.725734,
            'marker' => [
                'icon' => 'graduation-cap',
                'tone' => 'primary',
            ],
        ],

        'food-court' => [
            'name'         => 'Food Court G1',
            'campus'       => 'Kampus A',
            'distance_m'   => 160,
            'walk_minutes' => 2,
            'description'  => 'Sentra kuliner mahasiswa dengan 12 tenant terjangkau.',
            'summary'      => '12 tenant makanan & minuman kampus.',
            'badge'        => ['label' => 'Kuliner', 'variant' => 'warning'],
            'in_sidebar'   => true,
            'lat' => -7.314301, 
            'lng' => 112.726751,
            'marker' => [
                'icon' => 'utensils',
                'tone' => 'warning',
            ],
        ],

        'masjid' => [
            'name'         => 'Masjid Kampus',
            'campus'       => 'Kampus A',
            'distance_m'   => 240,
            'walk_minutes' => 3,
            'description'  => 'Tempat ibadah utama dengan area wudhu terpisah.',
            'lat' => -7.313768, 
            'lng' => 112.725260,

            'marker' => [
                'icon' => 'moon-star',
                'tone' => 'success',
            ],
        ],

        'parkir' => [
            'name'         => 'Area Parkir FT',
            'campus'       => 'Kampus A',
            'distance_m'   => 390,
            'walk_minutes' => 5,
            'description'  => 'Area parkir motor dan mobil beratap.',
            'lat' => -7.316140, 
            'lng' => 112.727477,

            'marker' => [
                'icon' => 'parking-circle',
                'tone' => 'warning',
            ],
        ],
    ],
];
