@extends('admin.layouts.master')

@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctors</h5>
                    <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-10">
        @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Edit Doctor</h3>
            </div>
            <div class="card-body">
                <form class="forms-sample" method="post" action="{{ route('doctor.update', $user->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
                                    id="name" placeholder="Doctor Name" value="{{ $user->name }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Email" value="{{ $user->email }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="Password" value="{{ old('password') }}">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select name="gender" id="gender"
                                    class="form-control @error('gender') is-invalid @enderror" id="gender">
                                    <option selected value="" disabled>Select Gender</option>
                                    <option {{ $user->gender == 'male' ? ' selected' : '' }} value="male">Male</option>
                                    <option {{ $user->gender == 'female' ? 'selected' : '' }} value="female">Female
                                    </option>
                                    <option {{ $user->gender == 'other' ? ' selected' : '' }} value="other">Other
                                    </option>
                                </select>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="education">Education</label>
                                <input type="text" class="form-control @error('education') is-invalid @enderror"
                                    id="education" placeholder="Doctor Highest Degree" name="education"
                                    value="{{ $user->education }}">
                                @error('education')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    id="address" placeholder="Address" name="address" value="{{ $user->address }}">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="department">Specialist</label>
                                <input type="text" class="form-control @error('department') is-invalid @enderror"
                                    id="department" placeholder="Department" name="department"
                                    value="{{ $user->department }}">
                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    id="phone_number" placeholder="Phone Number" name="phone_number"
                                    value="{{ $user->phone_number }}">
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Role</label>
                                <select name="role_id" id="role_id"
                                    class="form-control @error('role_id') is-invalid @enderror">
                                    <option selected value="" disabled>Select Role</option>
                                    @foreach ($roles as $role)
                                    <option {{ $user->role_id == $role->id ? 'selected' : '' }} value="{{ $role->id }}">
                                        {{ Str::upper($role->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="description">About</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                    id="description" rows="4" name="description">{{ $user->description }}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
