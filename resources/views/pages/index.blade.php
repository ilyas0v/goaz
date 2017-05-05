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
    <div class="col-md-4 col-sm-4" style="margin-top:30px;box-shadow: 2px 2px 5px #888888;">
        <div class="service-feature-box">
          <img class="surucu-avatar" data-surucu="{{$masin->id}}" style="border:1px solid black;
            border-radius:50%;position: absolute;z-index: 100;
            left: 20px;top: 5px;cursor:pointer;"
            src="{{url('surucu-images')}}/{{$masin->surucu()}}"
            title="">

            <div class="surucu-ad" data-surucu="{{$masin->id}}" style="position: absolute;
top: 5px;
right: 20px;
z-index: 100;
border: 1px solid white;
padding: 15px;
text-align: center;
background: #fecc00;
border-radius: 20px 20px 20px 20px;
color: black;
font-weight:bold;
font-family: 'Raleway', 'Open Sans', Arial, sans-serif;
            ">
            <strong>{{'a'}}</strong>-<a href="{{url('suruculer').'/'.$masin->id}}">Profil</a>
          </div>
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

@section('JS')
<script>
$(document).ready(function(){
  $(".surucu-avatar").click(function(){
    $(this).toggleClass('surucu-avatar-boyuk');
    $('.surucu-ad').filter('[data-surucu='+($(this).data('surucu'))+']').toggle('slow');
  });
});
</script>
@endsection
