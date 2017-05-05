@if(Session::has("success"))

<div class="alert alert-success" style="background:#ddd;color:green;font-size:20px;" role="alert">
  <strong>*</strong> {{Session::get("success")}}
</div>

@endif


@if(count($errors)>0)

<div class="alert alert-danger" style="color:red;" role="alert">
  <strong>Xəta: </strong>
  <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
  </ul>
</div>

@endif
