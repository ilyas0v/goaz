@extends('main')

@section('content')


<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-bottom:1px;">
<div class="container">

    <div class="row">
      @if(Auth::check())
      <div class="col-md-8 col-md-offset-2">
        <img src="{{asset('user-images').'/'.Auth::user()->shekil_url}}" style="margin:0 auto;width:20%;border-radius:50%;border:2px solid white;">
        <hr><h1>{{Auth::user()->name . " " . Auth::user()->surname}}</h1>
        <hr>
        <p></p>
      </div>
      @else
        <h1 style="margin:0 auto;">Bu user mövcud deyil.</h1>
      @endif
    </div>
  </div>

</div>


@endsection
