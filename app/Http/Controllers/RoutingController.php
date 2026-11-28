<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RoutingController extends Controller
{
    public function getWalkingRoute(Request $request)
    {
        // 1. Validasi koordinat dari pengguna dan gedung tujuan
        $validated = $request->validate([
            'start_lat' => ['required', 'numeric', 'between:-90,90'],
            'start_lng' => ['required', 'numeric', 'between:-180,180'],
            'end_lat' => ['required', 'numeric', 'between:-90,90'],
            'end_lng' => ['required', 'numeric', 'between:-180,180'],
        ]);

        // 2. Ambil API key dari konfigurasi Laravel
        $apiKey = config('services.openrouteservice.api_key');

        if (!$apiKey) {
            return response()->json([
                'message' => 'API key OpenRouteService belum dikonfigurasi.',
            ], 500);
        }

        // 3. Kirim permintaan rute pejalan kaki ke ORS
        $response = Http::withHeaders([
            'Authorization' => $apiKey,
            'Content-Type' => 'application/json',
        ])->timeout(20)->post(
            'https://api.heigit.org/openrouteservice/v2/directions/foot-walking/geojson',
            [
                'coordinates' => [
                    [(float) $validated['start_lng'], (float) $validated['start_lat']],
                    [(float) $validated['end_lng'], (float) $validated['end_lat']],
                ],
            ]
        );

        // 4. Tangani jika ORS mengembalikan error
        if ($response->failed()) {
            return response()->json([
                'message' => 'Gagal mendapatkan rute dari OpenRouteService.',
                'provider_status' => $response->status(),
                'provider_error' => $response->json(),
            ], 502);
        }

        // 5. Kembalikan data rute ke frontend
        return response()->json($response->json());
    }
}
