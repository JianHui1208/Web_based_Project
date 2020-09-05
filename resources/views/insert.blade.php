<link href='https://fonts.googleapis.com/css?family=Boogaloo' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
<style>

    table{
        
        position: absolute;
        left: 340px;
        width: 50%;
    }
    tr{
        vertical-align: bottom;
        
    }
    table,tr,td{
        text-align:center;   
        padding: 10px;
        border: 3px solid black;
    }
    
    h1{
        font-family: 'Boogaloo';
    }
    
    </style>

@extends('layouts.app')
@section('content')
<script>
@if(Session::has('success'))
	toastr.success('{{ Session::get('success')}}')
@endif
</script>

    <h1 style="font-size:50px">Insert Menu</h1>
    <br>
    <form class="subform"  method="post" action="{{ route('addFood.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <table id="myTable">
            <tr>
                <!-- <td>FoodID</td> -->
                <td style="background-color:DarkOrange; font-family: 'Archivo Black';">FoodName</td>
                <td style="background-color:DarkOrange;"><input type="text" name="FoodName" id="" /></td>

                <!-- <td><button type="button" onclick="myFunction()">Insert Row</button></td> -->
            </tr>
            <tr>
                <!-- <td><input type="text" name="FoodID" id="" /></td> -->
                <td style="background-color:DarkOrange;font-family: 'Archivo Black';">FoodPrice</td>
                <td style="background-color:DarkOrange;"> <input type="text" name="FoodPrice" id="" /></td>
                
    
            <tr>
                <td style="background-color:DarkOrange;font-family: 'Archivo Black';">FoodImage</td>
                <td style="background-color:DarkOrange;"><input type="file" name="FoodImage" id="" /></td>
            </tr>
                <td style="background-color:DarkOrange;font-family: 'Archivo Black';">FoodCategory</td>
                <td style="background-color:DarkOrange;">
                <select name="FoodCategory">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
					<option  value="{{ $category->id }}">{{ $category->FoodCategory }}</option>
				    @endforeach
                </select>
                </td>
            <tr>
            
            </tr>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!-- <button type="button" onclick="myFunction()">Insert Row</button> -->
        <input type="submit" value="Submit" name="submit[]" style="background-color:DarkOrange;border:2px solid Black;padding:10px 20px;">
    </form>
    <script>
    //     function myFunction() {
    //     var table = document.getElementById("myTable");
    //     // var row = table.insertRow(1);
    //     var cell1 = row.insertCell(0);
    //     var cell2 = row.insertCell(1);
    //     var cell3 = row.insertCell(2);
    //     var cell4 = row.insertCell(3);
    //     cell1.innerHTML = "<input type='text' name='FoodName' id='' />";
    //     cell2.innerHTML = "<input type='text' name='FoodPrice' id='' />";
    //     cell3.innerHTML = "<input type='file' name='FoodImage' id='' />";
    //     cell4.innerHTML =
    //       "<select name='FoodCategory'><option value=''>Select Category</option>@foreach($categories as $category)<option  value='{{ $category->id }}'>{{ $category->FoodCategory }}</option>@endforeach</select>";
    //   }
    </script>
@endsection