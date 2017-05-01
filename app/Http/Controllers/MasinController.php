<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masinlar;
use Image;
use Session;
use Auth;
class MasinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $masinlar  = Masinlar::orderBy('id', 'DESC')->paginate(15);
        return view('masinlar.index')->withMasinlar($masinlar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masinlar.create');
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
        'bashliq' => 'required|max:255',
        'slug'    => 'required|alpha_dash|min:5|max:255|unique:masinlars,slug',
        'surucu'  => 'required|max:255',
        'sheher'  => 'required|max:30',
        'qiymet'  => 'required|integer',
        'dashiya_bileceyi_yuk' => 'required|integer',
        'haqqinda' => 'required|min:5|max:500'
      ]);
      $masin = new Masinlar;
      $masin->bashliq = $request->bashliq;
      $masin->slug = $request->slug;
      $masin->surucu = $request->surucu;
      $masin->sheher = $request->sheher;
      $masin->qiymet = $request->qiymet;
      $masin->dashiya_bileceyi_yuk = $request->dashiya_bileceyi_yuk;
      $masin->haqqinda = $request->haqqinda;

      if($request->hasFile('shekil_url')){
        $shekil = $request->file('shekil_url');
        $file_adi = time() . '.' . $shekil->getClientOriginalExtension();
        $location = public_path('images/'.$file_adi);
        Image::make($shekil)->resize(300,216)->save($location);
        $masin->shekil_url = $file_adi;
      }

      $masin->save();
      Session::flash('success' , 'Maşın uğurla əlavə olundu..');
      return redirect()->route('masinlar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        if($slug=="elave_et"){
          if (Auth::check()) {
              return view("masinlar.create");
          }else{
            $masin=null;
             return view('masinlar.single')->withMasin($masin);
          }
        }
        $masin = Masinlar::where('slug', '=', $slug)->first();
        return view('masinlar.single')->withMasin($masin);
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
