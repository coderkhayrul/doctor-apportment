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
    <div class="col-md-12">
        @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">Your Appointments: {{ count($bookings) }}</div>

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
                            <th scope="col">Prescription</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $key => $booking)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>
                                <img src="upload/{{ $booking->doctor->image }}" alt="" width="80"
                                    style="border-radius: 50%;">
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
                                <a href="{{ route('update.status',$booking->id) }}">
                                    <button class="btn btn-primary">Pending</button>
                                </a>
                                @else
                                <a href="{{ route('update.status',$booking->id) }}">
                                    <button class="btn btn-success">Checked</button>
                                </a>
                                @endif
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Write Prescription
                                </button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Prescription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="user_id" id="user_id" value="{{ $booking->user_id }}">
                <input type="hidden" name="doctor_id" id="doctor_id" value="{{ $booking->doctor_id }}">
                <input type="hidden" name="date" id="date" value="{{ $booking->date }}">
                <div class="form-group">
                    <label for="">Disease</label>
                    <input type="text" name="name_of_disease" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Symptoms</label>
                    <textarea name="symptoms" class="form-control" id="" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Procedure to use Medicine</label>
                    <textarea name="procedure_to_use_medicine" class="form-control" id="" rows="3"></textarea>

                </div>
                <div class="form-group">
                    <label for="">Feedback</label>
                    <textarea name="feedback" class="form-control" id="" rows="3"></textarea>

                </div>
                <div class="form-group">
                    <label for="">Signature</label>
                    <input type="text" name="signature" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
