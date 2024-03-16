<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\CustomerData;
use App\Http\Resources\CustomerDataResource;

class CustomerDataController extends Controller
{
    //
    /**
     * index
     *
     * @return void
     */
    // public function index()
    // {
    //get all posts
    // $posts = CustomerData::latest()->paginate(5);

    //return collection of posts as a resource
    // return new CustomerDataResource(true, 'List Data Posts', $posts);
    // }

    public function index(Request $request)
    {
        $query = $request->input('q');
        // Proses pencarian berdasarkan $query dan kirim saran sebagai respons
        $suggestions = CustomerData::where('name', 'LIKE', "%$query%")->select('name', 'phone', 'address')->get();
        return response()->json(['data' => $suggestions]);
    }
}
