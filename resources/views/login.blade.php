@extends('master')
@section('content')

<div class="container custom-login">
    <h3>Login</h3>
    <div class="row">
        <div class="col-sm-4 col-sm-offset">
            <form action="">
                <div class="form-group">
                    <label for="inputEmail1">Email Address</label>
                    <input type="email" class="form-control" id="inputEmail1" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="inputPassword1">Password</label>
                    <input type="password" class="form-control" id="inputPassword1" placeholder="Enter Your Password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
