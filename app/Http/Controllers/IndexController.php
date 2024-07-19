<?php

namespace App\Http\Controllers;

use App\Models\Create_prod;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
    //     dd(Create_prod::all());

    //    dd($request->prod_name);
        return inertia(

            'Index/Index',
        [
            // 'listings' => FacadesDB::table('listings')->get()
            'create_prods' => Create_prod::all()
            // 'listings' => Listing::orderByDesc('created_at')
            // ->paginate(10)
            
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Index/SignUp');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
