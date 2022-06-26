@extends('layouts.nav')
@section('content')
        <link rel="stylesheet" href="{{asset('css/registration.css')}}">
        <div class="background-container2">

            <div class="shadow-white"></div>

            <!--form-->
               <form method="POST" action='{{url("update/$rental->id")}}' class="form-row">
               @csrf
               <h1>Edit</h1>
                <label for="fname">computer_id:</label>
                <input type="text" id="name" name="computer_id" value="{{$rental->computer_id}}"  placeholder="Type your Name"><br>

                <label for="Email">remark:</label>
                <input type="text" id="Email" name="remark" value="{{$rental->remark}}" placeholder="Type Email address"><br>


                <input type="submit" value="submit">


            </form>
        </div>
@endsection
