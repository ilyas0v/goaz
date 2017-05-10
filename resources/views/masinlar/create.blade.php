@extends("main")

@section("content")
<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-bottom:1px;">
  <div class="container">
    @include('partials.messages')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Yeni maşın əlavəsi</h1>
        <hr>
        {!! Form::open(['route' => 'masinlar.store' , 'files'=>true]) !!}
          {{ Form::label("bashliq", "Başlıq:") }}
          {{ Form::text("bashliq",null ,array("class"=>"form-control" , "required"=>"")) }}

          {{ Form::label("slug","Slug:" , ["style"=>"margin-top:10px;"]) }}
          {{ Form::text("slug",null,["class"=>"form-control" , "required"=>""]) }}

          {{ Form::label("surucu_id","Sürücünün ad və soyadı:" , ["style"=>"margin-top:10px;"]) }}
          <select class="form-control" name="surucu_id">
            @foreach($suruculer as $surucu)
              <option value="{{$surucu->id}}">{{$surucu->ad." ".$surucu->soyad}}</option>
            @endforeach
          </select>

          {{ Form::label("sheher","Fəaliyyət göstərdiyi şəhər:" , ["style"=>"margin-top:10px;"]) }}
          {{ Form::text("sheher",null,["class"=>"form-control" , "required"=>""]) }}

          {{ Form::label('qiymet' ,'Günlük qiymət (Manat ilə)' , ["style"=>"margin-top:10px;"] )}}
          {{ Form::number('qiymet',null,['class'=>'form-control','required'=>''])}}

          {{ Form::label('dashiya_bileceyi_yuk' ,'Daşıya biləcəyi yük (Kub metr ilə)' , ["style"=>"margin-top:10px;"] )}}
          {{ Form::number('dashiya_bileceyi_yuk',null,['class'=>'form-control','required'=>''])}}

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
