<?php

namespace App\Http\Controllers;

use App\Models\Create;
use App\Models\Create_prod;
use GuzzleHttp\Promise\Create as PromiseCreate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Index/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // Create::create(
        // dd($request->prod_name);
        // $request->user()->listings()->create(
            // $create_prods = new Create_prod();

            // $create_prods->prod_name = $request->prod_name;
            // $create_prods->brand = $request->brand;
            // $create_prods->sel = $request->sel;
            // $create_prods->weight = $request->weight;
            // $create_prods->price = $request->price;

            // $create_prods->save();

            // $request->Create_prod()->create(        
            // $request->validate([
            //     'prod_name' => 'required',
            //     'brand' => 'required',
            //     'sel' => 'required',
            //     'weight' => 'required|integer',
            //     'price' => 'required|integer',
            // ])
            // );
            // );
            // Create_prod::create([
            $request->validate([
                'prod_name' => 'required',
                'brand' => 'required',
                'sel' => 'required',
                'weight' => 'required|integer',
                'price' => 'required|integer',
            ]);
            DB::table('create_prods')
            ->insert([
                'created_at' => now(),
                'updated_at' => now(),
                 'prod_name' => $request->prod_name,
                 'brand' => $request->brand,
                 'sel' => $request->sel,
                 'weight' => $request->weight,
                 'price' => $request->price,
            ]);
        return redirect()->route('index.index')
        ->with('success', 'Product was created');
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
