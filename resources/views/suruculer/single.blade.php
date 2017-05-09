@extends("main")

@section("content")

<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-bottom:1px;">
<div class="container">

    <div class="row">
      @if(isset($surucu))
      <div class="col-md-6">
        <img src="{{asset('surucu-images').'/'.$surucu->shekil_url}}"  style="width:100%">
      </div>
      <div class="col-md-6">
        <h1>{{$surucu->ad . " " . $surucu->soyad}}</h1>
      </div>
      @else
        <h1 style="margin:0 auto;">Bu sürücü mövcud deyil.</h1>
      @endif
    </div>
  </div>

</div>

@endsection
