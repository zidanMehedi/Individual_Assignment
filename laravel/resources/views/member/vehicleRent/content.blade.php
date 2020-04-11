@extends('admin/home/index')


@section('content')
<div class="container">
    <div class="row">
        <div class="mt-3 mb-5">
            <div style="border:1px solid #D3D3D3; border-radius:5px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                <div style="width:100%; text-align:center; padding:10px; font-family:arial; font-size:25px; font-style:bold; background-color:#D3D3D3">
                    <label for="title"><strong>Vehicle Info</strong></label>
                </div>
                <div style="padding:10px;">
                    <form action="{{url('/vehicle/final')}}" method="post">
                        @csrf()
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$data['vname']}} " readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="cost">Time(Hour)</label>
                                    <input type="text" class="form-control" name="time" value="{{$data['time']}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="contact">Category</label>
                                    <input type="text" class="form-control" name="category" value="{{$data['category']}}" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="contact">Total Cost</label>
                                    <input type="text" class="form-control" name="tcost" value="{{$data['cost']*$data['time']}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="hidden" name="vid" value="{{$data['vid']}}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="form-group mt-4" style=" width:100%">
                                    <input class="btn btn-danger btn-sm" type="button" name="back" value="Cancel" onclick="backToMemberList()">&emsp;
                                    <input class="btn btn-success btn-sm" type="submit" name="rent" value="Final">
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
Filalize Order
@endsection