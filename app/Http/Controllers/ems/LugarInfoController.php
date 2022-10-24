<?php

namespace App\Http\Controllers\ems;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LugarInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug, $slug1)
    {
        $regiones = DB::Select("SELECT * FROM region");
        $lugares = DB::Select("SELECT * FROM lugar");
        $region = DB::Select('SELECT * FROM region WHERE r_description LIKE "'.$slug.'"');
        $lugares_rg = DB::Select('SELECT lg.lg_id, lg.lg_nombre, lg.lg_description, lg.lg_image FROM region rg INNER JOIN LUGAR lg ON rg.r_id = lg.r_id WHERE rg.r_description LIKE "'.$slug.'"');
        $images = DB::Select('SELECT lg.lg_id, lg.lg_nombre, lg.lg_description, img.img_uri FROM lugar lg INNER JOIN images img ON lg.lg_id = img.lg_id WHERE lg.lg_nombre LIKE "'.$slug1.'"');
        $lugarinfo = DB::Select('SELECT * FROM lugar WHERE lg_nombre LIKE "'.$slug1.'"');
        return view('lugarinfo', ["regiones" => $regiones, "lugares" => $lugares, "region" => $region, "lugares_rg" => $lugares_rg, "images" => $images, "lugarinfo" => $lugarinfo]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
