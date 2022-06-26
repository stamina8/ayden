@extends('layouts.nav')
@section('content')

        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <!--css-->
        <link rel="stylesheet" href="{{asset('css/registration.css')}}">
        <title>UCR Services</title>
    
    <body>

        <!--background-->
        <div class="background-container2">
            <img class="com" src="img/p3.jpeg">
            <div class="shadow-white"></div>
            <h1><span class=heading style="color:dimgray" >UCR Services</span></h1><br>
            <!--form-->
               <form method="POST" action="{{ url('update') }}" class="form-row">
               @csrf
                <label for="fname">Name:</label>
                <input type="text"  name="name" value="{{ Auth::user()->name }}" placeholder="Type your First Name"><br>

                <label for="Email">Email:</label>
                <input type="text" name="email" value="{{ Auth::user()->email }}" placeholder="Type Email address"><br>

                <label for="Phone number">Phone number:</label>
                <input type="text" name="phone_number" value="{{ Auth::user()->phone_number }}" placeholder="Type your Phone number"><br>

                <label for="Phone number">Balance:</label>
                <input type="text" name="balance" value="{{ Auth::user()->balance }}" placeholder="Type your Phone number"><br>

                
                <label for="confirm password">Are you a student?</label>
                <select name="is_student" >
                  <option value="0" @if(Auth::user()->is_student == 0) selected @endif>No</option>
                  <option value="1" @if(Auth::user()->is_student == 1) selected @endif>Yes</option>
                </select>
                <br>
                <label for="confirm password">Identity:</label>
                <select name="type" >
                  <option value="customers" @if(Auth::user()->type == 'customers') selected @endif>customers</option>
                  <option value="staff" @if(Auth::user()->type == 'staff') selected @endif>staff</option>
                  <option value="web_manager" @if(Auth::user()->type == 'web_manager') selected @endif>web_manager</option>
                </select>
                <br>
                <span id='message'></span><br>
    
                <input type="submit" value="Update">
                <a href="{{url('/')}}" style="color: inherit; text-decoration: none;">Cancel</a>
                    <span id='message'></span><br>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"intgrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
        <!--javascript-->
        <!-- <script type="text/javascript" src="{{asset('js/registration.js')}}"></script> -->
    </body>
</html>
@endsection