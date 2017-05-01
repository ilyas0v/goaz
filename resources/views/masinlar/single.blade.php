@extends("main")

@section("content")

<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-bottom:1px;">
<div class="container">

    <div class="row">
      @if(isset($masin))
      <div class="col-md-8 col-md-offset-2">
        <h1>{{$masin->bashliq}}</h1>
        <p>{{$masin->haqqinda}}</p>
        <hr>
        <img src="{{asset('images').'/'.$masin->shekil_url}}"  style="width:100%">
        <p><b>Qiymet: </b>{{$masin->qiymet}}</p>
      </div>
      @else
        <h1 style="margin:0 auto;">Bu maşın mövcud deyil.</h1>
      @endif
    </div>
  </div>

</div>

@endsection
