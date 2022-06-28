@extends('layouts.nav')
@section('content')

        <link rel="stylesheet" href="{{asset('css/registration.css')}}">
        <title>Services</title>

        <!--background-->
        <div class="background-container2">
            <img class="com" src="img/p3.jpeg">
            <div class="shadow-white"></div>
            <h1><span class=heading style="color:dimgray" >Services</span></h1><br>
            <!--form-->
               <form method="POST" action="{{ route('register') }}" class="form-row">
               @method('post')
               @csrf
                <label for="fname">Name:</label>
                <input type="text" id="name" name="name" placeholder="Type your Name"><br>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror<!-- 
                <label for="lname">Last name:</label>
                <input type="text" id="lname" name="lname" placeholder="Type your Last Name"><br>
     -->
                <label for="Email">Email:</label>
                <input type="text" id="Email" name="email" placeholder="Type Email address"><br>

                <label for="Phone number">Phone number:</label>
                <input type="text" id="pnumber" name="phone_number" placeholder="Type your Phone number"><br>
    
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Set password"><br>
   <!--              <input type="password" id="password" name="password" 
                pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!#])[A-Za-z\d@$!#]{5,10}$"
                title="Notice:Password should be 5-10 characters in length contains at least 1 lowercase letter, 1 uppercase letter, 1 number and one of the following special characters such as !,@,#,$."
                placeholder="Set password"><br> -->
    
                <label for="confirm password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Set password">

                <label>Are you a student?</label>
                <select name="is_student" >
                  <option value="0">No</option>
                  <option value="1">Yes</option>
                </select>
                <br>
                <label for="confirm password">Identity:</label>
                <select name="type" >
                  <option value="customers">customers</option>
                  <option value="staff">staff</option>
                  <option value="web_manager">web_manager</option>
                </select>
                <br>
                <span id='message'></span><br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <!--  <label for="terms" style="font-size: 15px;">Agreed the terms and conditions: </label> -->
               <!--  <input type="checkbox" id="terms" name="terms"><br><br> -->
    
                <input type="submit" value="Register">
                <a href="{{url('/')}}" style="color: inherit; text-decoration: none;">Cancel</a>
                    <span id='message'></span><br>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"intgrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"crossorigin="anonymous"></script>
        <!--javascript-->
        <script type="text/javascript" src="{{asset('js/registration.js')}}"></script>
    </body>
</html>
@endsection
