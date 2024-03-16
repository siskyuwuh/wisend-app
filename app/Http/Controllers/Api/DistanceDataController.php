<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\DistanceLocationResource;
use App\Models\DistanceLocation;

class DistanceDataController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    // public function index(DistanceLocation $distanceLocation)
    // {
    //get all posts


    //return collection of posts as a resource
    //     return new DistanceLocationResource(true, 'List Data', $distanceLocation->get());
    // }

    public function index(Request $request)
    {
        $query = $request->input('q');
        // Proses pencarian berdasarkan $query dan kirim saran sebagai respons
        $suggestions = DistanceLocation::where('kelurahan', 'LIKE', "%$query%")->select('id', 'kelurahan', 'kecamatan', 'kabupaten', 'jarak')->get();
        return response()->json(['data' => $suggestions]);
    }
}
