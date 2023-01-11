@extends('common.master')

@section('title', ('Register'))

@section('script')
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/contact.css">
@endsection

@section('content')
    <section class="section">
        <div class="columns">
            <div class="column is-4 is-offset-4">
                <div class="field">
                    <h1 class="title">Sign Up</h1>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="field">
                        <label class="label" for="name">Name</label>
                        <div class="control">
                            <input class="input @error('name') is-danger @enderror" type="text" name="name"
                                   placeholder="Text input" value="{{ old('name') }}">
                            @error('name')
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="email">Email</label>
                        <div class="control">
                            <input class="input @error('email') is-danger @enderror" type="email" name="email"
                                   placeholder="Email input" {{ old('email') }}>
                            @error('email')
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="password">Password</label>
                        <div class="control">
                            <input class="input @error('password') is-danger @enderror" type="password" name="password"
                                   placeholder="*******">
                            @error('password')
                            <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <label class="label" for="password_confirmation">Repeat Password</label>
                        <div class="control">
                            <input class="input @error('password_confirmation') is-danger @enderror" type="password"
                                   name="password_confirmation" placeholder="Confirm Password">
                            @error('password_confirmation')
                            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox">
                                I agree to the <a href="#">terms and conditions</a>
                            </label>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection