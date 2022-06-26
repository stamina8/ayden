
@extends('layouts.nav')
@section('content')
        <link rel="stylesheet" href="{{asset('css/registration.css')}}">
        <div class="background-container2">

            <div class="shadow-white"></div>

            <!--form-->
               <form class="form-row">
               @csrf
                <label for="fname">Name:</label>
                <input type="text" id="name" name="name"  placeholder="Type your Name"><br>

                <label for="Email">Email:</label>
                <input type="text" id="Email" name="Email" " placeholder="Type Email address"><br>
   				<label for="Email">Message:</label>
                <input type="text" id="Email" name="Message" " placeholder="Message"><br>

                <input type="submit" value="submit">


            </form>
        </div>
@endsection