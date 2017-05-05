@extends('main')

@section('content')

<div class="page-title-style01 page-title-negative-top pt-bkg08" style="margin-bottom:1px;">
      <div class="container">
        <div class="row" >
            <div style="border:1px solid #fff;padding:50px;" class="col-md-4 col-md-offset-4">
              @include('partials.login_error')
                {!! Form::open() !!}
                    {{ Form::label('email','Email:') }}
                    {{ Form::email('email',null,['class'=>'form-control']) }}
                    {{ Form::label('password','Şifrə:') }}
                    {{ Form::password('password',['class'=>'form-control']) }}<br>
                    <a href="#">Şifrəmi unutdum</a>
                    {{ Form::submit('Giriş',['class'=>'btn btn-success btn-block','style'=>'border-radius:5px;color:white;padding:5px;']) }}
                {!! Form::close() !!}
            </div>
        </div>
      </div>
</div>

@endsection
