@extends("main")

@section("content")
<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-bottom:1px;">
  <div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Yeni sürücü əlavəsi</h1>
        <hr>
        {!! Form::open(['route' => 'suruculer.store' , 'files'=>true]) !!}
          {{ Form::label("ad", "Ad:") }}
          {{ Form::text("ad",null ,array("class"=>"form-control" , "required"=>"")) }}

          {{ Form::label("soyad","Soyad:" , ["style"=>"margin-top:10px;"]) }}
          {{ Form::text("soyad",null,["class"=>"form-control" , "required"=>""]) }}

          {{ Form::label("sheher","Fəaliyyət göstərdiyi şəhər:" , ["style"=>"margin-top:10px;"]) }}
          {{ Form::text("sheher",null,["class"=>"form-control" , "required"=>""]) }}

          {{ Form::label('shekil_url', "Şəkil:", ["style"=>"margin-top:10px;"]) }}
          {{ Form::file('shekil_url') }}

          {{ Form::label("haqqinda","Haqqında:" , ["style"=>"margin-top:10px;"]) }}
          {{ Form::textarea("haqqinda", null , array("class"=>"form-control","required"=>"")) }}


          {{ Form::submit("Əlavə et" , array("class"=>"btn btn-success btn-lg btn-block",
          "style"=>"margin-top:15px;color:white;")) }}
        {!! Form::close() !!}
    </div>
  </div>
</div>
</div>
@endsection
