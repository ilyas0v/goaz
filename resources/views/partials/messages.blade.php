@if(Session::has("success"))

<div class="success_mesaj"  style="color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;font-size:15px;" role="alert">
  <strong>*</strong> {{Session::get("success")}}

  <p  class="mesaji_bagla" style="float: right;font-size: 30px;cursor:pointer;">&times;</p>
</div>

@endif


@if(count($errors)>0)

<div class="xeta_mesaj" style="    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;" role="alert">
  <div class="row"><div class="col-md-11"><strong>Xəta: </strong>
  <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
  </ul></div>
  <div class="col-md-1">
  <p  class="mesaji_bagla" style="float: right;font-size: 30px;cursor:pointer;">&times;</p>
</div>
</div>
</div>

@endif
