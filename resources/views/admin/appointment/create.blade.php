@extends('admin.layouts.master')

@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-edit bg-blue"></i>
                <div class="d-inline">
                    <h5>Appointment</h5>
                    <span>appointment time</span>
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
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-header">
            Choose Date
        </div>
        <div class="card-body">
            {{-- <input class="form-control" type="date" name="date" id="date"> --}}
            <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker">
        </div>
    </div>
    <!-- Doctor Apportment Date AM -->
    <div class="card">
        <div class="card-header">
            Choose AM Time
            <span>
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
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="6am">
                                <label class="border-checkbox-label" for="checkbox1">6am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="6.20am">
                                <label class="border-checkbox-label" for="checkbox1">6.20am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="6.40am">
                                <label class="border-checkbox-label" for="checkbox1">6.40am</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="7am">
                                <label class="border-checkbox-label" for="checkbox1">7am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="7.20am">
                                <label class="border-checkbox-label" for="checkbox1">7.20am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="7.40am">
                                <label class="border-checkbox-label" for="checkbox1">7.40am</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="8am">
                                <label class="border-checkbox-label" for="checkbox1">8am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="8.20am">
                                <label class="border-checkbox-label" for="checkbox1">8.20am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="8.40am">
                                <label class="border-checkbox-label" for="checkbox1">8.40am</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="9am">
                                <label class="border-checkbox-label" for="checkbox1">9am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="9.20am">
                                <label class="border-checkbox-label" for="checkbox1">9.20am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="9.40am">
                                <label class="border-checkbox-label" for="checkbox1">9.40am</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">5</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="10am">
                                <label class="border-checkbox-label" for="checkbox1">10am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="10.20am">
                                <label class="border-checkbox-label" for="checkbox1">10.20am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="10.40am">
                                <label class="border-checkbox-label" for="checkbox1">10.40am</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">6</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="11am">
                                <label class="border-checkbox-label" for="checkbox1">11am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="11.20am">
                                <label class="border-checkbox-label" for="checkbox1">11.20am</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" name="time[]" id="time" value="11.40am">
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
                                <input class="border-checkbox" type="checkbox" id="time[]" value="12pm">
                                <label class="border-checkbox-label" for="checkbox1">12pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="12.20pm">
                                <label class="border-checkbox-label" for="checkbox1">12.20pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="12.40pm">
                                <label class="border-checkbox-label" for="checkbox1">12.40pm</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">8</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="1pm">
                                <label class="border-checkbox-label" for="checkbox1">1pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="1.20pm">
                                <label class="border-checkbox-label" for="checkbox1">1.20pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="1.40pm">
                                <label class="border-checkbox-label" for="checkbox1">1.40pm</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">9</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="2pm">
                                <label class="border-checkbox-label" for="checkbox1">2pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="2.20pm">
                                <label class="border-checkbox-label" for="checkbox1">2.20pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="2.40pm">
                                <label class="border-checkbox-label" for="checkbox1">2.40pm</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">10</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="3pm">
                                <label class="border-checkbox-label" for="checkbox1">3pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="3.20pm">
                                <label class="border-checkbox-label" for="checkbox1">3.20pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="3.40pm">
                                <label class="border-checkbox-label" for="checkbox1">3.40pm</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">11</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="4pm">
                                <label class="border-checkbox-label" for="checkbox1">4pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="4.20pm">
                                <label class="border-checkbox-label" for="checkbox1">4.20pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="4.40pm">
                                <label class="border-checkbox-label" for="checkbox1">4.40pm</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">12</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="5pm">
                                <label class="border-checkbox-label" for="checkbox1">5pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="5.20pm">
                                <label class="border-checkbox-label" for="checkbox1">5.20pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="5.40pm">
                                <label class="border-checkbox-label" for="checkbox1">5.40pm</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">13</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="6pm">
                                <label class="border-checkbox-label" for="checkbox1">6pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="6.20pm">
                                <label class="border-checkbox-label" for="checkbox1">6.20pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="6.40pm">
                                <label class="border-checkbox-label" for="checkbox1">6.40pm</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">14</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="7pm">
                                <label class="border-checkbox-label" for="checkbox1">7pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="7.20pm">
                                <label class="border-checkbox-label" for="checkbox1">7.20pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="7.40pm">
                                <label class="border-checkbox-label" for="checkbox1">7.40pm</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">15</th>
                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="8pm">
                                <label class="border-checkbox-label" for="checkbox1">8pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="8.20pm">
                                <label class="border-checkbox-label" for="checkbox1">8.20pm</label>
                            </div>
                        </td>

                        <td>
                            <div class="border-checkbox-group border-checkbox-group-primary">
                                <input class="border-checkbox" type="checkbox" id="time[]" value="8.40pm">
                                <label class="border-checkbox-label" for="checkbox1">8.40pm</label>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
@endsection
@section('custrom_style')
<style type="text/css">
    input[type="checkbox"]{
        zoom: 1.5;
    }
    body{
        font-size: 20px;
    }
</style>
@endsection
@section('custrom_script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datepicker').datetimepicker({format: 'YYYY-MM-DD'});
        });

        // All Time Selector Function
        $(document).ready(function() {
            $('#select_all').click(function() {
                var checked = this.checked;
                $('input[type="checkbox"]').each(function() {
                this.checked = checked;
            });
            })
        });
    </script>
@endsection
