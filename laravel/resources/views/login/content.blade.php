@extends('login/index')


@section('content')
<div class="container">
    <div class="row justify-content-lg-center justify-content-md-center justify-content-sm-center">
        <div class="col-lg-4 col-md-4 col-sm-4 mt-5">
           @if(session()->has('success'))
               <div class="alert alert-success alert-dismissible fade show alert-sm">{{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
               </div>
           @endif
            <div style="border:1px solid #D3D3D3; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:25px; font-style:bold; background-color:#D3D3D3">
                    <label for="title"><strong>Login</strong></label>
                </div>
                <div style="padding:10px;">
                    <form action="" method="post">
                        @csrf()
                        @if(session()->has('msg'))
                        <div class="alert alert-warning" role="alert" style="text-align:center">
                            {{session('msg')}}
                        </div>
                        @endif
                         @if($errors->has('username'))
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username"  style="border-color:red">
                            <small class="form-text"><font color='red'>* {{$errors->first('username')}}</font></small>   
                        </div>
                         @else
                         <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" value="{{old('username')}}">
                        </div>
                        @endif
                        @if($errors->has('password'))
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password"  style="border-color:red">
                            <small class="form-text"><font color='red'>* {{$errors->first('password')}}</font></small>   
                        </div>
                        @else
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password"> 
                        </div>
                        @endif
                        <div class="form-group">
                            <input class="btn btn-primary btn-sm" type="submit" name="login" value="Login">
                        </div>
                    </form>
                </div>
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:14px; color:#7D8989">
                    <label for="title">Not Registered Yet?</label>
                    <a class="alert-link" href="{{url('user')}}">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title')
Login
@endsection
