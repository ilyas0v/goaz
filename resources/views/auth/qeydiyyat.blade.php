@extends("main")

@section("content")
<div class="page-title-style01 page-title-negative-top pt-bkg08" style="margin-bottom:1px;">
<div class="container">
  @include('partials.messages')
<div class="row">
    <div class="col-md-4 col-md-offset-4" style="border:1px solid white;padding:50px;">
        {!! Form::open() !!}
			{{ Form::label('name','Ad:') }}
            {{ Form::text('name',null,['class'=>'form-control']) }}
      {{ Form::label('surname','Soyad:') }}
            {{ Form::text('surname',null,['class'=>'form-control']) }}
			{{ Form::label('email','Email:') }}
            {{ Form::email('email',null,['class'=>'form-control']) }}
			{{ Form::label('password','Şifrə:') }}
            {{ Form::password('password',['class'=>'form-control']) }}
			{{ Form::label('password_confirmation','Şifrənin təkrarı:') }}
            {{ Form::password('password_confirmation',['class'=>'form-control']) }}<br>
            {{ Form::submit('Qeyd ol',['class'=>'btn btn-primary btn-block','style'=>'border-radius:5px;color:white;padding:5px;']) }}
      {!! Form::close() !!}
    </div>
</div>
</div>
</div>
@endsection
