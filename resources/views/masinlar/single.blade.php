@extends("main")

@section("content")

<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-bottom:1px;">
<div class="container">

    <div class="row">
      @if(isset($masin))
      <div class="col-md-6">
        <img src="{{asset('images').'/'.$masin->shekil_url}}"  style="width:100%">
      </div>
      <div class="col-md-6" style="background:rgba(0,0,0,0.3);border-radius:0 20px 0 0">
        <h1 style="margin-top:15px;">{{$masin->bashliq}}</h1>
        <p style="font-size:15px;"><strong>Haqqında: </strong><span style='color:lightblue;'>{{$masin->haqqinda}}</span></p>
        <p style="font-size:15px;"><strong>Günluk qiymət: </strong><span style='color:lightblue;'>{{$masin->qiymet}} AZN</span></p>
        <p style="font-size:15px;"><strong>Fəaliyyət göstərdiyi şəhər: </strong><span style='color:lightblue;'>{{$masin->sheher}}</span></p>
        <p style="font-size:15px;"><strong>Daşıya biləcəyi maksimum yük: </strong><span style='color:lightblue;'>{{$masin->dashiya_bileceyi_yuk}} kub-metr</span></p>
        <p style="font-size:15px;"><strong>Sürücü: </strong><a style='color:lightblue;' href="{{url('suruculer') . '/' . $masin->surucu()->id}}">{{$masin->surucu()->ad . " " . $masin->surucu()->soyad}}</a></p>
        <hr>
      </div>
      @else
        <h1 style="margin:0 auto;">Bu maşın mövcud deyil.</h1>
      @endif
    </div>
  </div>

</div>

@endsection
