@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white">User Profile</div>

                <div class="card-body">
                    <p>Name: {{ auth()->user()->name }}</p>
                    <p>Email: {{ auth()->user()->email }}</p>
                    <p>Address: {{ auth()->user()->address }}</p>
                    <p>Phone Number: {{ auth()->user()->phone_number }}</p>
                    <p>Gender: {{ auth()->user()->gender }}</p>
                    <p>Bio: {{ auth()->user()->description }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Profile</div>

                <div class="card-body">
                    <form action="{{ route('profile.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender" id="" class="form-control">
                                <option class="selected" value="">SELECT OPTION</option>
                                <option value="male">MALE</option>
                                <option value="female">FEMALE</option>
                                <option value="other">OTHER</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Bio</label>
                            <textarea class="form-control" name="description" id="" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Information Update</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Update Image</div>

                <div class="card-body">
                    <img src="{{ asset('upload/default.jpg') }}" alt="" width="120px">
                    <br><br>
                    <form action="" method="post" enctype="multipart/form">
                        <div class="form-group">
                            {{-- <label class="control-label" for="">Profile Image</label> --}}
                            <input type="file" name="image" class="form-control" id="image">
                        </div>
                        <button type="submit" class="btn btn-success">Image Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
