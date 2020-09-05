<style>
    table{
        text-align: center;
        position: absolute;
        left: 300px;
    }
    
    .border{
        border-style:ridge;
        background-color:#fbe9e7;
    }
    
    .font{
        font-size:25px;
        font-style:bold;
        font-family: 'Cinzel', serif;
        background-color:#ffcdd2 ;
    }

    </style>
@extends('layouts.app')
@section('content')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>	
<h1>Edit Pages</h1>
<div style="padding-top: 10px;">
    <table>
    <div>
        <tr class="border">
            <td class="font">FoodID</td>
            <td class="font">FoodName</td>
            <td class="font">FoodPrice</td>
            <td class="font">FoodImage</td>
            <td class="font">FoodCategory</td>
            <td class="font">Settings</td>

        </tr>
        @foreach($SFoods as $MFood)
        <tr class="border">
            <td>{{$MFood->id}}</td>
            <td>{{$MFood->FoodName}}</td>
            <td>RM{{$MFood->FoodPrice}}</td>
            <td>{{$MFood->FoodImage}}</td>
            <td>{{$MFood->CatName}}</td>
            <td>
            <a href="{{ route('edit.food', ['id' => $MFood->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
            <a href="{{ route('delete.food', ['id' => $MFood->id]) }}" class="btn btn-danger" onclick="return confirm('Sure You Want Delete?')"><i class="fas fa-trash"></i>Delete</a>
            </td>
        </tr>
        @endforeach
        </div>
    </table>
</div>

@endsection