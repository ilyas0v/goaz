@extends('main')

@section('content')


<div class="page-title-style01 page-title-negative-top pt-bkg02" style="margin-bottom:1px;">
<div class="container">

    <div class="row">

      @if(Auth::check() and Auth::user()->id===1)
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Email</th>
            <th>Verified</th>
            <th>Is admin?</th>
          </tr>
        </thead>
        <tbody>
          @foreach($istifadeciler as $i)
            <tr>
              <td>{{$i->id}}</td>
              <td>{{$i->name}}</td>
              <td>{{$i->surname}}</td>
              <td>{{$i->email}}</td>
              <td>@if($i->isVerified==="NO")
                <a href="#" style="background:green;color:white;padding:5px;">Testiqle</a>
                @else
                Testiqlenib
                @endif
              </td>
              <td>{{$i->isAdmin}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
      @else
      <!--  @foreach($istifadeciler as $i)
          <div class="col-md-3" style="border-radius:10px;border:1px solid white;margin:10px;background: #006db7;">
            <img style="border:2px solid white;border-radius:50%;margin-top:10px;" src="{{asset('user-images') . '/'  . $i->shekil_url}}">
            <hr>
            <h3 style="text-align:center;color:white;">{{$i->name . " " . $i->surname}}</h3>
          </div>
        @endforeach -->
        <h1>Bu səhifə mövcud deyil.</h1>
      @endif
    </div>
  </div>

</div>


@endsection
