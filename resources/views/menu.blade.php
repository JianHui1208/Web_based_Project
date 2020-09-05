@extends('layouts.app')
@section('content')
<style>
.nav{
    margin:center;
    word-spacing:0.1em;
    font-size:40px;
    text-indent: 50px;
    width:100%;
    display:block;
    

}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<section style="background-color: #e53935;">
<h2 style="font-size:5em; text-align: center; background-color: #e53935;">Menu</h2>
    <div style="padding-left: 400px; font-size:36px; ;" class="nav" >
    @foreach($CTLCate as $Cate)
        <a href="{{ route('food.Category', ['id' => $Cate->id]) }}" style="color:#ffff00; padding:15px; 
            text-decoration:none; background-color:#b39ddb; position:center;word-spacing:0.2em;">{{$Cate->FoodCategory}}</a>
    @endforeach
    </div>
</section>

<section class="our-webcoderskull padding-lg" style="text-align:center; background-color: #e53935; padding-top:50px;"> 
    <div class="container">
        <div style="text-align:center; padding-bottom: 60px;">
            <div style="text-align:right;">
                <form action="{{ route('search.food') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="text" name="searchFood" id="searchFood">
                        <button class="btn btn-info" type="submit">Search</button>
                </form>
            </div>
        </div>
        <ul class="row" style="list-style:none;">
        @foreach($SFoods as $MFood)
        <li class="col-12 col-md-6 col-lg-3" style="text-align:center">
            <div class="cnt-block equal-hight" style="height: 349px;">
                <figure><img src="{{ asset('images/')}}/{{$MFood->FoodImage}}" style="width: 70%;"></figure>
                <h3>{{$MFood->FoodName}}</h3>
                <p>RM{{$MFood->FoodPrice}}</p>
                <p>{{$MFood->CatName}}</p>
            </div>
        </li>
        @endforeach
        </ul>
    </div>
</section>
@endsection