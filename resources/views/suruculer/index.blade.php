@extends('main')

@section('content')

<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-bottom:1px;">
            <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="custom-heading02">
                          <h2 style="color:white;padding-bottom: 10px;">Sürücülər:</h2>
                          @if (Auth::check() and  Auth::user()->id===1)
                          <p><a href="{{url('/suruculer/elave_et')}}">Yeni sürücü əlavə et (+)</a></p>
                          @endif
                      </div><!-- .custom-heading02 end -->
                  </div><!-- .col-md-12 end -->
              </div><!-- .row end -->


            <div class="row" style="margin-top:10px;">
              @foreach($suruculer as $surucu)
              <div class="col-md-3 col-sm-3" style="margin-top:30px;">
                  <div class="service-feature-box">

                      <div class="service-media">
                          <img src="{{asset('surucu-images').'/'.$surucu->shekil_url}}" alt="">
                      </div>

                      <a href="#">
                        <div class="service-body">
                          <div class="custom-heading" style="margin-bottom:0px;">
                              <h4>{{$surucu->ad." ".$surucu->soyad}}</h4>
                          </div>
                      </div></a>
                  </div>
              </div>
              @endforeach
            </div>
            <div class="row">
              <div class="text-center"></div>
            </div>

            </div>
</div>

@endsection
