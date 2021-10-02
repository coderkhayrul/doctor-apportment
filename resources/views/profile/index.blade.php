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
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">Update Profile</div>

                <div class="card-body">
                    <form action="{{ route('profile.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" placeholder="" value="{{ Auth::user()->name }}">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="" value="{{ Auth::user()->address }}">
                        </div>
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" placeholder="" value="{{ Auth::user()->phone_number }}">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender"  id="" class="form-control  @error('gender') is-invalid @enderror">
                                <option disabled selected value="">SELECT OPTION</option>
                                <option {{ Auth::user()->gender == 'male' ? 'selected' : '' }} value="male">MALE</option>
                                <option {{ Auth::user()->gender == 'female' ? 'selected' : '' }} value="female">FEMALE</option>
                                <option {{ Auth::user()->gender == 'other' ? 'selected' : '' }} value="other">OTHER</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Bio</label>
                            <textarea class="form-control" name="description" id="" rows="3">{{ Auth::user()->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
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
