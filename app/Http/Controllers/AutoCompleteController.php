<?php

namespace App\Http\Controllers;

use App\Models\Aeroport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutoCompleteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $response = $request->all();
        $search = $response['q'];
        $aeroport = DB::table('aeroports')
            ->select('acronyms', 'aeroport')
            ->where('aeroport', 'LIKE' , '%' . "$search" . '%')
            ->get();

        return response()->json($aeroport);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AutoComplete  $autoComplete
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AutoComplete  $autoComplete
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AutoComplete  $autoComplete
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
