@extends('layouts.nav')
@section('content')

    <link rel="stylesheet" href="{{asset('css/registration.css')}}">
    <title>Services</title>

    <!--background-->
    <div class="background-container2">
        <img class="com" src="img/p3.jpeg">
        <div class=""></div>
        <h1><span class=heading style="color:dimgray" >Services</span></h1><br>
        <!--form-->
        <form method="POST" action="{{ route('register') }}" class="form-row">
            @method('post')
            @csrf
            {{--            old--}}
            {{--            <label for="fname">Name:</label>--}}
            {{--            <input type="text" id="name" name="name" placeholder="Type your Name">--}}
            {{--            @if ($errors->has('name'))--}}
            {{--                <span class="text-danger">{{ $errors->first('name') }}</span>--}}
            {{--            @endif--}}

            {{--            <label for="Email">Email:</label>--}}
            {{--            <input type="text" id="Email" name="email" placeholder="Type Email address">--}}
            {{--            @if ($errors->has('email'))--}}
            {{--                <span class="text-danger">{{ $errors->first('email') }}</span>--}}
            {{--            @endif--}}
            {{--            <label for="Phone number">Phone number:</label>--}}
            {{--            <input type="text" id="pnumber" name="phone_number" placeholder="Type your Phone number">--}}
            {{--            @if ($errors->has('phone_number'))--}}
            {{--                <span class="text-danger">{{ $errors->first('phone_number') }}</span>--}}
            {{--            @endif--}}
            {{--            <label for="password">Password:</label>--}}
            {{--            <input type="password" id="password" name="password" placeholder="Set password">--}}
            {{--            @if ($errors->has('password'))--}}
            {{--                <span class="text-danger">{{ $errors->first('password') }}</span>--}}
            {{--            @endif--}}
            {{--            --}}
            {{--            <label for="confirm password">Confirm Password:</label>--}}
            {{--            <input type="password" id="confirm_password" name="confirm_password" placeholder="Set password">--}}
            {{--            @if ($errors->has('confirm_password'))--}}
            {{--                <span class="text-danger">{{ $errors->first('confirm_password') }}</span>--}}
            {{--            @endif--}}
            {{--            old end--}}


            {{--            new--}}

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                <div class="col-md-6">
                    <input type="text" id="name" class="form-control" name="name" value="{{old('name')}}"  autofocus>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                <div class="col-md-6">
                    <input type="text" id="email_address" class="form-control" name="email"  autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email_address" class="col-md-4 col-form-label text-md-right">phone_number</label>
                <div class="col-md-6">
                    <input type="text" id="email_address" class="form-control" name="phone_number"  autofocus>
                    @if ($errors->has('phone_number'))
                        <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                    @endif
                </div>
            </div>



            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                <div class="col-md-6">
                    <input type="password" id="password" class="form-control" name="password" >
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">confirm_password</label>
                <div class="col-md-6">
                    <input type="password" id="password" class="form-control" name="confirm_password" >
                    @if ($errors->has('confirm_password'))
                        <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                    @endif
                </div>
            </div>

            {{--            new end--}}
            <br>
            <label for="fname">Are you a student?</label>
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

    </body>
    </html>
@endsection
