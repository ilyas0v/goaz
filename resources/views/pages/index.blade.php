@extends('main')

@section('content')



@include('partials.slider')





<div class="page-content custom-bkg bkg-grey mb-70">
<div class="container">

  <div class="row">
      <div class="col-md-12">
          <div class="custom-heading02">
              <h2 style="font-family:tahoma;">Ən son maşınlar</h2>
              <p>şşşş</p>
          </div><!-- .custom-heading02 end -->
      </div><!-- .col-md-12 end -->
  </div><!-- .row end -->

<div class="row">


    @for($i=0;$i<5;$i++)

    <div class="col-md-4 col-sm-4">
        <div class="service-feature-box">
            <div class="service-media">
                <img src="http://www.somossanpedro.cl/wp-content/uploads/2015/06/Camion-Tipo-360x216.jpg" alt="Trucking">
                <a href="#" class="read-more02">
                    <span>
                        {{'$50'}}
                        <i class="fa fa-chevron-right"></i>
                    </span>
                </a>
            </div><!-- .service-media end -->

            <div class="service-body">
                <div class="custom-heading">
                    <h4>Yük maşını.şşööqüöıəüç</h4>
                </div><!-- .custom-heading end -->

                <p>
                    çş.ıəöğidsjfhşqüeqüıüeörıfsdfpsdpfldckvlçcoskd0fj0sidj9 j9uh8uh jigj9jh 9uh 8u9h
                </p>
            </div><!-- .service-body end -->
        </div><!-- .service-feature-box-end -->
    </div><!-- .col-md-4 end -->
    @endfor
</div><!-- .row end -->

</div>

</div>
@endsection
