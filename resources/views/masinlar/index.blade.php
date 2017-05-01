@extends('main')

@section('content')

<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-bottom:1px;">
            <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="custom-heading02">
                          <h2 style="color:white;">Bütün maşınlar</h2>
                          @if (Auth::check())

                          <p><a href="{{url('/masinlar/elave_et')}}">Yeni maşın əlavə et (+)</a></p>
                          @endif
                      </div><!-- .custom-heading02 end -->
                  </div><!-- .col-md-12 end -->
              </div><!-- .row end -->


            <div class="row">
              @foreach($masinlar as $masin)
              <div class="col-md-4 col-sm-4" style="margin-top:30px;">
                  <div class="service-feature-box">
                      <div class="service-media">
                          <img src="{{asset('images').'/'.$masin->shekil_url}}" alt="">
                          <a href="{{route('masinlar') .'/'. $masin->slug }}" class="read-more02">
                              <span>
                                {{$masin->qiymet}} manat
                                  <i class="fa fa-chevron-right"></i>
                              </span>
                          </a>
                      </div>

                      <a href="{{route('masinlar') .'/'. $masin->slug }}">
                        <div class="service-body">
                          <div class="custom-heading">
                              <h4>{{$masin->bashliq}}</h4>
                          </div>

                          <p>
                            {{$masin->haqqinda}}
                          </p>
                      </div></a>
                  </div>
              </div>
              @endforeach
            </div>
            <div class="row">
              <div class="text-center">
                {!! $masinlar->links() !!}</div>
            </div>

            </div>
</div>

@endsection
