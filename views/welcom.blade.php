@extends('main')

@section('css')

<link rel="stylesheet" href="http://localhost:8000/public/assets/css/style.css">

@endsection

@section('js')

<script src="http://localhost:8000/public/assets/js/jquery-1.12.4.min.js"></script>
@endsection

@section('content')
<center style="
    margin-top: 91px;
    font-size: 34px;
    color: #9f7a4e;
"><p class="welcom">welcom To Anubis world!</p></center>
  <center><img src="http://localhost:8000/public/assets/images/1557621659120.png" style="
    margin-top: 13px;
    border-radius: 11px;
    width: 273px;
    "></center>
@endsection


@section('footer')
<hr>
<style> a img{
     cursor: pointer;
    margin-right: 10px;
}</style>
<center><div><a hrf="https://web.facebook.com/hossam.pharaoh.5"><img src="public/assets/images/facebook.png" style="
    width: 20px;
"></a><a hrf="https://github.com/hossam20520"><img src="public/assets/images/github.png" style="
    width: 20px;
"></a><a hrf="#"><img src="public/assets/images/whatsapp.png" style="
    width: 20px;
"></a><a hrf="https://www.linkedin.com/in/hossam-hassan-b60936159"><img src="public/assets/images/linkedin.png" style="
    width: 20px;
"></a></div></center>


 
@endsection