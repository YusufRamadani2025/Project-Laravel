<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePenulisRequest;
use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penulis = Penulis::all();
        

        // $cariid = Category::find(1);
        // $carinama = Category::where('nama', 'Like', '$rama$');

        return view('admin.penulis', ['pen' => $penulis]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenulisRequest $request)
    {
        try {
            $param = $request->validated();
    
    
            Penulis::create($param);
    
            return redirect()
                    ->route('admin.penulis')
                    ->with('success', 'WES MELEBU DATANE👍🏿!');
            }
            catch (\Exception $e)
            {
                return redirect()
                    ->route('admin.penulis')
                    ->with('error', $e->getMessage());
            }
    
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
