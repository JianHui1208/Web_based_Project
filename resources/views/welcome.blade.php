<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                color:#ffee58;
                align-items: center;
                display: flex;
               justify-content: center;
              /*   background-image: url(https://www.mcdonalds.com.my/storage/articles/July2020/McDip_Promo_Mobile2.jpg);
                background-repeat: no-repeat;
                background-size: 70%;
                background-position: center;*/
                
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                
            }

            .title {
                font-size: 84px;
                
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                
            }

            table{
                width:100%;
            }

            .navigator{
                border:none;
                font-size:30px;
                border-collapse: separate;
                border-spacing: 20px;
            }

            tr{
                position:relative;
                display:flex;
                flex-direction:row;
            }
            
            td a{
                list-style:none;
                
            }

            tr td a{
                position:relative;
                display:inline block;
                padding:6px 15px;
                text-decoration:none;
                background:#f9fbe7;
                color:black;
                text-transform:uppercase;
                letter-spacing:2px;
                overflow:hidden;
                transition:0.5s;
                z-index:1;
                border-radius: 8px;
                cursor:pointer;
                margin:5px;
            }
            
            tr td:before{
                content:attr(data-text);
                position:absolute;
                top:50%;
                left:50%;
                transform: translate(-50%,-50%);
                color:#fff;
                font-size:6em;
                font-weight:700;
                pointer-events:none;
                opacity:0;
                Letter-spacing:20px;
                transition:0.5s;
                white-space:nowrap;
                text-decoration:none;
            }

            tr td:hover:before{
               
                opacity:0.05;
                Letter-spacing:0px;
                transition:0.5s;
                white-space:nowrap;
            }

            tr:hover td a{
                opacity:0;
            }

            tr td a:hover{
                transform: scale(1.4);
                z-index:1000;
                background:#f5f5f5;
                opacity:1;
                border:2px solid black;
                text-decoration:none;
            }

            tr td a:before{
                content:'';
                position:absolute;
                top:0;
                left:-100;
                width:80px;
                height:100%;
                background: linear-gradient(90deg,transparent,rgba(255,255,255,0.8),transparent);
                transform: skewX(10deg);
                transition:0s;

            }

            tr td a:after{
               left:calc(100%+100px);
               transition:0.5s;
               transition-delay:0.2s;

            }


        </style> 
@extends('layouts.app')
@section('content')
        <div class="flex-center position-ref" style="height:80vh; ">
            <div class="content">
                <div class="title m-b-md">
                    <b>McDonald's</b>
                </div>

                <br>

                <div class="links">
                    <table class="navigator">
                    <tr >
                    <td data-text="Main Pages"><a href="{{url('/main')}}">Main Pages</a></td>
                    <td data-text="Menu"><a href="{{url('/menu')}}">Menu</a></td>
                    <td data-text="Insert Menu"><a href="{{url('/insertFood')}}">Insert Menu</a></td>
                    <td data-text="Menu Controller"><a href="{{url('/control')}}">Menu Controller</a></td>
                    <td data-text="Login"><a href="{{url('/login')}}">Login</a></td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
@endsection