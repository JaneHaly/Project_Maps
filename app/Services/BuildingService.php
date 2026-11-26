<?php

namespace App\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

/**
 * Satu-satunya tempat yang tahu dari mana data gedung berasal.
 * Sekarang: config/campusmap.php. Nanti: ganti ke Eloquent (Building::all()).
 */
class BuildingService
{
    /** @return Collection<string, array> key = id gedung */
    public function all(): Collection
    {
        return collect(config('campusmap.buildings'))
            ->map(fn (array $building, string $id) => $this->present($id, $building));
    }

    public function forSidebar(): Collection
    {
        return $this->all()->filter(fn (array $b) => $b['in_sidebar']);
    }

    public function default(): array
    {
        return $this->all()->first();
    }

    /** Data minimal yang dikirim ke JavaScript (dipakai saat gedung dipilih). */
    public function clientPayload(): Collection
    {
        return $this->all()->map(fn (array $b) => Arr::only($b, [
            'name', 'meta_detail', 'description', 'photo_url', 'indoor_label',
        ]));
    }

    protected function present(string $id, array $b): array
    {
        $b += [
            'summary'    => null,
            'badge'      => null,
            'facilities' => [],
            'floors'     => null,
            'photo'      => null,
            'marker'     => null,
            'in_sidebar' => false,
        ];

        $walk = $b['walk_minutes'] . ' menit jalan';
        $km   = number_format($b['distance_m'] / 1000, 1) . ' km';

        return $b + [
            'id'           => $id,
            'meta'         => "{$km} · {$walk}",
            'meta_detail'  => "{$b['campus']} · {$walk} ({$b['distance_m']} m)",
            'photo_url'    => asset('images/buildings/' . ($b['photo'] ?? 'placeholder.svg')),
            'indoor_label' => 'Explore Indoor Map' . ($b['floors'] ? " · {$b['floors']} Lantai" : ''),
        ];
    }
}
