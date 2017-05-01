@extends('main')

@section('content')



@include('partials.slider')





<div class="page-content custom-bkg bkg-grey mb-70">
<div class="container">

  <div class="row">
      <div class="col-md-12">
          <div class="custom-heading02">
              <h2 style="font-family:tahoma;">Ən son maşınlar</h2>
              <p>---</p>
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

</div>

</div>
@endsection
