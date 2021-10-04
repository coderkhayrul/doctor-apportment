
@extends('admin.layouts.master')
@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-inbox bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctors</h5>
                    <span>list Of All Doctors</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Doctors</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">View</li>
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
                <div class="card-header">Your Appointments: {{ count($bookings) }}</div>
                <div class="card-header">
                    <form action="{{ route('patient') }}" method="GET">
                        Filter:
                        <div class="row">
                            <div class="card-md-10">
                                <input type="text" name="date" class="form-control datetimepicker-input" id="datepicker"
                                    data-toggle="datetimepicker" data-target="#datepicker">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date</th>
                                <th scope="col">User</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Time </th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bookings as $key => $booking)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>
                                        <img src="upload/{{ $booking->doctor->image }}" alt="" width="80" style="border-radius: 50%;">
                                    </td>
                                    <td>{{ $booking->date }}</td>
                                    <td>{{ $booking->user->name }}</td>
                                    <td>{{ $booking->user->email }}</td>
                                    <td>{{ $booking->user->phone_number }}</td>
                                    <td>{{ $booking->user->gender }}</td>
                                    <td>{{ $booking->time}}</td>
                                    <td>{{ $booking->doctor->name }}</td>
                                    <td>
                                        @if ($booking->status == 0)
                                        <button class="btn btn-primary">Pending</button>
                                        @else
                                        <button class="btn btn-success">Checked</button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <td>You Have No Appointment Today</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>
@endsection

@section('custrom_script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#datepicker').datetimepicker({
            format: 'YYYY-MM-DD'
        });
    });

    // All Time Selector Function
    $(document).ready(function () {
        $('#select_all').click(function () {
            var checked = this.checked;
            $('input[type="checkbox"]').each(function () {
                this.checked = checked;
            });
        })
    });

</script>
@endsection
