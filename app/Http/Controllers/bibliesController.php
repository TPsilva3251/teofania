<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bibles;
use App\Models\imagesbiblesModel;

class bibliesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $biblia;
    private $imagem;
    public function __construct(bibles $biblia, imagesbiblesModel $imagem)
    {
        $this->biblia=$biblia;
        $this->imagem=$imagem;
    }
    public function index()
    {
         dd("index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biblies_create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_forn=$request->all();
        // dd($data_forn['img1'], $data_forn['img2'], $data_forn['img3']);
        // $data_forn=$this->biblia->create($data_forn);
        $bibles = bibles::create($data_forn);
        // $data_forn['id'] = $bibles->id();
        // dd($$data_forn['id']);
        // if($data_forn['img1'] || $data_forn['img2'] || $data_forn['img3'] !=null)
        // {
        //     $imagem=$this
        // }
        return redirect()->route('biblia.index', compact('request'));

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
