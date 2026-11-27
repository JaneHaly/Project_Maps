<?php

namespace App\Http\Controllers;

use App\Services\BuildingService;
use Illuminate\Contracts\View\View;

class MapController extends Controller
{
    public function index(BuildingService $buildings): View
    {
        // Ambil seluruh data gedung
        $allBuildings = $buildings->all();

        // Ambil gedung yang dipilih secara default
        $selected = $allBuildings->first();

        return view('pages.map.index', [
            'buildings'        => $allBuildings,
            'sidebarBuildings' => $buildings->forSidebar(),
            'selected'         => $selected,

            // Kirim ID gedung default ke JavaScript
            'clientPayload'    => $buildings->clientPayload($selected['id']),
        ]);
    }
}
