@extends('main')

@section('content')

<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-bottom:1px;">
            <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="custom-heading02">
                          <h2 style="color:white;padding-bottom: 10px;">Bütün maşınlar</h2>
                          @if (Auth::check() and  Auth::user()->id===1)

                          <p><a href="{{url('/masinlar/elave_et')}}">Yeni maşın əlavə et (+)</a></p>
                          @endif
                      </div><!-- .custom-heading02 end -->
                  </div><!-- .col-md-12 end -->
              </div><!-- .row end -->


            <div class="row">
              @foreach($masinlar as $masin)
              <div class="col-md-4 col-sm-4" style="margin-top:30px;">
                  <div class="service-feature-box">
                    @if(Auth::check() and  Auth::user()->id===1)
                    <a href="{{url('masinlar').'/'.$masin->slug.'/duzelish_et'}}" style="padding:10px;position:absolute;top:5px;right:20px;color:white;background:green;z-index:200;">
                      Düzəliş et >>
                    </a>
                    @endif
                    <img class="surucu-avatar" data-surucu="{{$masin->id}}" style="border:1px solid black;
                      border-radius:50%;position: absolute;z-index: 100;
                      left: 20px;top: 5px;cursor:pointer;"
                      src="{{url('surucu-images')}}/{{$masin->surucu()->shekil_url}}"
                      title="{{$masin->surucu()->ad . " " . $masin->surucu()->soyad}}">

                      <div class="surucu-ad" data-surucu="{{$masin->id}}" style="position: absolute;
    top: 0px;
    right: 20px;
    z-index: 100;
    border: 1px solid white;
    width: 90%;
    padding: 5px;
    text-align: center;
        background: #fecc00;
    border-radius: 20px 20px 20px 20px;
    color: black;
    font-weight:bold;
    font-family: 'Raleway', 'Open Sans', Arial, sans-serif;

                      ">
                      <strong>{{$masin->surucu()->ad . " " . $masin->surucu()->soyad}}</strong>-<a href="{{url('suruculer').'/'.$masin->id}}">Profil</a>
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
            <div class="row">
              <div class="text-center">
                {!! $masinlar->links() !!}</div>
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
