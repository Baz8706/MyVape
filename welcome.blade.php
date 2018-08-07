@extends('layouts.master')

@section('title')
    MyVape    
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
                @if(count($errors) > 0)
                <div class="row">
                    <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
                 @endif   
            <form action=" {{ route('signup') }} " method="post">
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="first_name">First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
                </div>
                <div class="form-group {{ $errors->has('surname') ? 'has-error' : ''}}">
                    <label for="surname">Surname</label>
                    <input class="form-control" type="text" name="surname" id="surname" value="{{ Request::old('surname') }}">
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                    <input class="btn btn-primary" type="submit" name="Submit" value="Submit">
                    <input type="hidden" name="_token" value=" {{  Session::token() }} ">
            </form>
        </div>
            
        <div class="col-md-4">
            <h3>Sign In</h3>
            <form action=" {{ route('signin') }} " method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                    <input class="btn btn-primary" type="submit" name="Submit" value="Submit">
                    <input type="hidden" name="_token" value=" {{  Session::token() }} ">
            </form>    
        </div>
    </div> 
@endsection


