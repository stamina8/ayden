@extends('layouts.nav')
@section('content')
        <link rel="stylesheet" href="{{asset('css/registration.css')}}">
        <div class="background-container2">

            <div class="shadow-white"></div>
          
            <!--form-->
               <form method="POST" action='{{url("manager_add/add")}}' class="form-row">
               @csrf
               <h1>ADD</h1>
                <label for="fname">computer_id:</label>
                <input type="text" id="name" name="computer_id"   placeholder="Type your Name"><br>

                <label for="Email">remark:</label>
                <input type="text" id="Email" name="remark"  placeholder="Type Email address"><br>


                <input type="submit" value="ADD">


            </form>
        </div>
@endsection