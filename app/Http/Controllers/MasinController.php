<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masinlar;
use Image;
use Session;
use Auth;
use App\Surucu;
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
        $suruculer = Surucu::all();
        return view('masinlar.create')->withSuruculer($suruculer);
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
        'surucu_id'  => 'required|integer',
        'sheher'  => 'required|max:30',
        'qiymet'  => 'required|integer',
        'dashiya_bileceyi_yuk' => 'required|integer',
        'haqqinda' => 'required|min:5|max:500'
      ]);
      $masin = new Masinlar;
      $masin->bashliq = $request->bashliq;
      $masin->slug = $request->slug;
      $masin->surucu_id = $request->surucu_id;
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
          if (Auth::check() and  Auth::user()->id===1) {
            $suruculer = Surucu::all();
            return view('masinlar.create')->withSuruculer($suruculer);
              return view("masinlar.create");
          }else{
             return view('errors.404');
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
    public function edit($slug)
    {
        if(Auth::check() and  Auth::user()->id===1){
          $masin=Masinlar::where('slug','=',$slug)->first();
        $suruculer=Surucu::all();
        $suruculers = [];
        foreach($suruculer as $s){
          $suruculers[$s->id] = $s->ad." ".$s->soyad;
        }
        return view('masinlar.edit')->withMasin($masin)->withSuruculers($suruculers);
      }else{
        return view('errors.404');
      }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        /*$masin=Masinlar::where('slug','=',$slug)->first();
        if($request->input('slug')===$masin->slug){
          $this->validate($request , array(
            'bashliq' => 'required|max:255',
            'surucu_id'  => 'required|integer',
            'sheher'  => 'required|max:30',
            'qiymet'  => 'required|integer',
            'dashiya_bileceyi_yuk' => 'required|integer',
            'haqqinda' => 'required|min:5|max:500'
          ));
        }else{
          $this->validate($request , array(
            'bashliq' => 'required|max:255',
            'slug'    => 'required|alpha_dash|min:5|max:255|unique:masinlars,slug',
            'surucu_id'  => 'required|integer',
            'sheher'  => 'required|max:30',
            'qiymet'  => 'required|integer',
            'dashiya_bileceyi_yuk' => 'required|integer',
            'haqqinda' => 'required|min:5|max:500'
          ));
        }

        $masin->bashliq = $request->input('bashliq');
        $masin->surucu_id = $request->input('surucu_id');
        $masin->sheher = $request->input('sheher');
        $masin->qiymet = $request->input('qiymet');
        $masin->dashiya_bileceyi_yuk = $request->input('dashiya_bileceyi_yuk');
        $masin->haqqinda = $request->input('haqqinda');

        $masin->save();
        return redirect()->route('masinlar');*/
        return "<h1>Sehife hazir deyil..<a href='/masinlar/'>Geri qayit</a></h1>";
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
