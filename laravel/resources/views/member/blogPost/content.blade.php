@extends('admin/home/index')


@section('content')
<div class="container">
    <div class="row mt-5 justify-content-lg-center justify-content-md-center justify-content-sm-center">
        <div class="col-lg-6 col-md-6 col-sm-6 mt-3 mb-5">
            <div style="border:1px solid #D3D3D3; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:25px; font-style:bold; background-color:#D3D3D3">
                    <label for="title"><strong>Vehicle Info</strong></label>
                </div>
                <div style="padding:10px;">
                    <form method="post">
                        @csrf()
                        <div class="form-group">
                            <label for="address">Blog</label>
                            <textarea name="post" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="form-group mt-4" style=" width:100%">
                                    <input class="btn btn-danger btn-sm" type="submit" name="submit" value="Submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title')
Blog Post
@endsection
