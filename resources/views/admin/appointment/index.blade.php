@extends('admin.layouts.master')

@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Appointment</h5>
                    <span>appointment time Check</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Appointment</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Check</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    @if (Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </div>
    @endif
    <form action="{{ route('appointment.check') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                Choose Date
            </div>
            <div class="card-body">
                @if (isset($date)) <h4>Your Apportment Date : {{ $date }}</h4> @endif

                <input type="text" name="date" class="form-control datetimepicker-input" id="datepicker"
                    data-toggle="datetimepicker" data-target="#datepicker">
                <br>
                <button type="submit" class="btn btn-primary">Check</button>
            </div>
        </div>
    </form>

    @if (Route::is('appointment.check'))
    <form action="{{ route('appointment.time.update') }}" method="post">
        @csrf
        <input type="hidden" name="appointmentId" value="{{ $appointmentId}}">
        <!-- Doctor Apportment Date AM -->
        <div class="card">
            <div class="card-header">
                Choose AM Time
                <span style="margin-left: 700px">Select All
                    <input type="checkbox" id="select_all">
                </span>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="6am"
                                    @if (isset($times)){{ $times->contains('time', '6am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">6am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="6.20am" @if (isset($times)){{ $times->contains('time', '6.20am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">6.20am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="6.40am" @if (isset($times)){{ $times->contains('time', '6.40am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">6.40am</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="7am"
                                    @if (isset($times)){{ $times->contains('time', '7am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">7am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="7.20am" @if (isset($times)){{ $times->contains('time', '7.20am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">7.20am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="7.40am" @if (isset($times)){{ $times->contains('time', '7.40am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">7.40am</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="8am"
                                    @if (isset($times)){{ $times->contains('time', '8am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">8am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="8.20am" @if (isset($times)){{ $times->contains('time', '8.20am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">8.20am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="8.40am" @if (isset($times)){{ $times->contains('time', '8.40am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">8.40am</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="9am"
                                    @if (isset($times)){{ $times->contains('time', '9am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">9am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="9.20am" @if (isset($times)){{ $times->contains('time', '9.20am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">9.20am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="9.40am" @if (isset($times)){{ $times->contains('time', '9.40am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">9.40am</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">5</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="10am"
                                    @if (isset($times)){{ $times->contains('time', '10am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">10am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="10.20am" @if (isset($times)){{ $times->contains('time', '10.20am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">10.20am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="10.40am" @if (isset($times)){{ $times->contains('time', '10.40am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">10.40am</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">6</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="11am"
                                    @if (isset($times)){{ $times->contains('time', '11am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">11am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="11.20am" @if (isset($times)){{ $times->contains('time', '11.20am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">11.20am</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time"
                                        value="11.40am" @if (isset($times)){{ $times->contains('time', '11.40am') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">11.40am</label>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- Doctor Apportment Date PM -->
        <div class="card">
            <div class="card-header">
                Choose PM Time
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th scope="row">7</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="12pm" @if (isset($times)){{ $times->contains('time', '12pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">12pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="12.20pm" @if (isset($times)){{ $times->contains('time', '12.20pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">12.20pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="12.40pm" @if (isset($times)){{ $times->contains('time', '12.40pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">12.40pm</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">8</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="1pm" @if (isset($times)){{ $times->contains('time', '1pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">1pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="1.20pm" @if (isset($times)){{ $times->contains('time', '1.20pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">1.20pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="1.40pm" @if (isset($times)){{ $times->contains('time', '1.40pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">1.40pm</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">9</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="2pm" @if (isset($times)){{ $times->contains('time', '2pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">2pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="2.20pm" @if (isset($times)){{ $times->contains('time', '2.20pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">2.20pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="2.40pm" @if (isset($times)){{ $times->contains('time', '2.40pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">2.40pm</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">10</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="3pm" @if (isset($times)){{ $times->contains('time', '3pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">3pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="3.20pm" @if (isset($times)){{ $times->contains('time', '3.20pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">3.20pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="3.40pm" @if (isset($times)){{ $times->contains('time', '3.40pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">3.40pm</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">11</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="4pm" @if (isset($times)){{ $times->contains('time', '4pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">4pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="4.20pm" @if (isset($times)){{ $times->contains('time', '4.20pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">4.20pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="4.40pm" @if (isset($times)){{ $times->contains('time', '4.40pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">4.40pm</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">12</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="5pm" @if (isset($times)){{ $times->contains('time', '5pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">5pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="5.20pm" @if (isset($times)){{ $times->contains('time', '5.20pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">5.20pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="5.40pm" @if (isset($times)){{ $times->contains('time', '5.40pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">5.40pm</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">13</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="6pm" @if (isset($times)){{ $times->contains('time', '6pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">6pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="6.20pm" @if (isset($times)){{ $times->contains('time', '6.20pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">6.20pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="6.40pm" @if (isset($times)){{ $times->contains('time', '6.40pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">6.40pm</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">14</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="7pm" @if (isset($times)){{ $times->contains('time', '7pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">7pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="7.20pm" @if (isset($times)){{ $times->contains('time', '7.20pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">7.20pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="7.40pm" @if (isset($times)){{ $times->contains('time', '7.40pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">7.40pm</label>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <th scope="row">15</th>
                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="8pm" @if (isset($times)){{ $times->contains('time', '8pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">8pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="8.20pm" @if (isset($times)){{ $times->contains('time', '8.20pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">8.20pm</label>
                                </div>
                            </td>

                            <td>
                                <div class="border-checkbox-group border-checkbox-group-primary">
                                    <input class="border-checkbox" type="checkbox" name="time[]" id="time[]"
                                        value="8.40pm" @if (isset($times)){{ $times->contains('time', '8.40pm') ? 'checked' : '' }} @endif>
                                    <label class="border-checkbox-label" for="checkbox1">8.40pm</label>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- Doctor Appointment Submit -->
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @else
    <h3>Your Appointment Time List: {{ count($myappointments) }}</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Creator</th>
                <th scope="col">Date</th>
                <th scope="col">View/Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($myappointments as $key => $appointment)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $appointment->doctor->name }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>
                        <form action="{{ route('appointment.check') }}" method="post">
                            @csrf
                            <input type="hidden" name="date" value="{{ $appointment->date }}">
                            <button type="submit" class="btn btn-primary">View/Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection



@section('custrom_style')
<style type="text/css">
    input[type="checkbox"] {
        zoom: 1;
    }

    body {
        font-size: 20px;
    }

</style>
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
