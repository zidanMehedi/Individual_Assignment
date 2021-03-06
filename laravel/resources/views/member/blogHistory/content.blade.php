@extends('member/vehicleList/index')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="padding:0px;">
               <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                  <a class="navbar-brand" href="{{route('home.member')}}"><strong>Rent A Vehicle</strong></a>
                  <ul class="nav justify-content-end">
                      <li class="nav-item">
                          <a class="nav-link active" href="{{route('home.member')}}">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="{{route('profile.member')}}">Profile</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="{{route('update.mcarlist')}}">Vehicle List</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="{{url('order/create')}}">My Orders</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url('blog')}}">Post Blog</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{url('blog/create')}}">Blog</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('logout.index')}}">Logout</a>
                      </li>
                  </ul>
              </nav>
        </div>
        <div class="container justify-content-lg-center">
            <div class="row">
                <div class="col">
                    <div class="mt-4" style="text-align:center;font-size:30px"><strong>Blog List</strong></div>
                    <!-- <table class="table table-sm table-light table-hover mt-4" style="text-align:center; vertical-align: bottom;">
                        <thead class="thead-light">
                            <tr>
                                <th>Username</th>
                                <th>Post</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($blog as $v)
                            <tr>
                                <td>{{$v->username}}</td>
                                <td>{{$v->post}}</td>
                                <td><a class="nav-link" href="">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> -->
                     <div class="row">
                     @if(count($blog)==0)
                      <div class="row mt-5">
                          <div class="col" style="text-align: center">
                              <h2>No Blogs Available</h2>
                          </div>
                      </div>
                      @else   
                        @foreach($blog as $v)
                        <div class="col col-lg-3 mt-5">
                          <div class="card border-secondary mb-3" style="max-width: 18rem;">
                              <h5 class="card-header"><small>@</small>{{$v->username}}</h5>
                              <div class="card-body text-secondary">
                                <p class="card-text">{{$v->post}}</p>
                              </div>
                            </div>
                            </div>
                          @endforeach
                    </div>
                    @endif
                    <div class="row">
                        <div class="col mt-5 mb-5" style="text-align: center">
                            <div class="btn btn-outline-primary btn-sm"><a class="alert alert-link" href="{{route('blog.myBlog')}}" style="color: black">My Blogs</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title')
Vehicle List
@endsection
