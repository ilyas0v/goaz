@extends('main')

@section('content')

<div class="page-title-style01 page-title-negative-top pt-bkg08">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Bizimlə əlaqə</h1>

                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-title-style01.page-title-negative-top end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-heading">
                            <h3>Təkliflərinizi ve suallarızı bizə göndərin</h3>
                        </div><!-- .custom-heading.left end -->

                        <p>
                            <!-- bura yazi yazmaq da olar -->
                        </p>

                        <br />

                        <!-- .contact form start -->
                        <form class="wpcf7 clearfix">


                            <fieldset>
                                <label>
                                    <span class="required">*</span>Ad və soyad
                                </label>

                                <input type="text" class="wpcf7-text" id="contact-last-name">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> Email:
                                </label>

                                <input type="email" class="wpcf7-text" id="contact-email">
                            </fieldset>

                            <fieldset>
                                <label>
                                    <span class="required">*</span> İsmarıcınız:
                                </label>

                                <textarea rows="8" class="wpcf7-textarea" id="contact-message"></textarea>
                            </fieldset>

                            <input type="submit" class="wpcf7-submit" value="Göndər" />
                        </form><!-- .wpcf7 end -->
                    </div><!-- .col-md-6 end -->

                    <div class="col-md-6">


                        <div class="custom-heading">
                            <h4>Şirkət məlumatları:</h4>
                        </div><!-- .custom-heading end -->

                        <address>
                            Xırdalan, <br />
                            Qafqaz Universiteti
                        </address>

                        <span class="text-big colored">
                            +994*********
                        </span>
                        <br />

                        <a href="mailto:">info@******.com</a>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

@endsection
