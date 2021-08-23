@extends('welcome')

@push('css-scripts')
    <style>

body {
    /* background-color: #eee; */
    background: url('{{asset("img/genshin-impact-plain.jpg")}}') top right;
    background-size: cover;
    position: relative;
  }

    .container {
    height: 100%;
  }

  .container h1 {
    font-size: 50px;
  }

  .overlay {
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: -1;
    position: absolute;
  }

  .soc i{
    margin-right: 4px;
    font-size: 20px;
  }

  .main {
    height: 100%;
  }
    </style>
@endpush

@section('overlay')
<div class="overlay">
</div>
    
@endsection

@section('content')
<div class="container d-flex align-items-center ">
  <div>
    <h1>
      <strong>
        Reyhan Renaldy Chasan
      </strong>
    </h1>
    <h4>
      Web Developer
    </h4>
    <div class="soc">
      <i class="fab fa-facebook"></i>
      <i class="fab fa-instagram"></i>
      <i class="fab fa-linkedin"></i>

    </div>
  </div>
</div>
@endsection