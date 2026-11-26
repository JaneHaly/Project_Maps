<?php

namespace App\Http\Controllers;

use App\Services\BuildingService;
use Illuminate\Contracts\View\View;

class MapController extends Controller
{
    public function index(BuildingService $buildings): View
    {
        return view('pages.map.index', [
            'buildings'        => $buildings->all(),
            'sidebarBuildings' => $buildings->forSidebar(),
            'selected'         => $buildings->default(),
            'clientPayload'    => $buildings->clientPayload(),
        ]);
    }
}
