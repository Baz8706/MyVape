@extends('layouts.master')

@section('title')
    MyVape
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="#" metohd="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="fname" id="fname" placeholder="Forename">
                </div>
                    <div class="form-group">
                    <input class="form-control" type="text" name="sname" id="sname" placeholder="Surname">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="email" placeholder="Password">
                </div>
                    <input class="btn btn-primary" type="submit" name="Submit" value="Submit">
            </form>    
        </div>
        <div class="col-md-6">
            <h3>Sign In</h3>
            <form action="#" metohd="post">
                <div class="form-group">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                </div>
                    <input class="btn btn-primary" type="submit" name="Submit" value="Submit">
            </form>    
        </div>
        
    </div>   
@endsection
