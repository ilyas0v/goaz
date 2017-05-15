@extends("main")

@section("content")

<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-bottom:1px;">
<div class="container" style="background:white;">

    <div class="row" style="margin-top:50px;">

      @if(isset($surucu))
      <img src="{{asset('surucu-images').'/'.$surucu->shekil_url}}"  style="width:20%;border-radius:50%;margin:0 auto;margin-bottom:20px;">
      <h1 style="color:black;margin-bottom:0px;">{{$surucu->ad . " " . $surucu->soyad}}</h1>
      <div  style="padding: 10px;text-align: center;">
        <img src="http://nursing.jhu.edu/sebin/n/z/blue-star.png" style="width:30px;display:inline;vertical-align:middle;">
        <span style="display:inline;font-size:20px;vertical-align:middle;">&nbsp;4.9</span>
      </div>
      <div class="col-md-6">
        <p style="font-size:16px;color:black">{{""}}</p>
      </div>
      @else
        <h1 style="margin:0 auto;">Bu sürücü mövcud deyil.</h1>
      @endif
    </div>
  </div>

</div>

@endsection
