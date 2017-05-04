<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Surucu;
use Image;
class SurucuController extends Controller
{

  /*public function __construct(){
    $this->middleware('auth');
  }*/

    public function index()
    {
        $suruculer=Surucu::all();
        return view('suruculer.index')->withSuruculer($suruculer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suruculer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'ad' => 'required|max:255',
        'soyad'    =>  'required|max:255',
        'sheher'  => 'required|max:30',
        'haqqinda' => 'required|min:5|max:500'
      ]);
      $surucu = new Surucu;
      $surucu->ad=$request->ad;
      $surucu->soyad=$request->soyad;
      $surucu->sheher = $request->sheher;
      $surucu->haqqinda = $request->haqqinda;

      if($request->hasFile('shekil_url')){
        $shekil = $request->file('shekil_url');
        $file_adi = time() . '.' . $shekil->getClientOriginalExtension();
        $location = public_path('surucu-images/'.$file_adi);
        Image::make($shekil)->resize(300,300)->save($location);
        $surucu->shekil_url = $file_adi;
      }

      $surucu->save();
      //Session::flash('success' , 'Surucu uğurla əlavə olundu..');
      return redirect()->route('suruculer');
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
