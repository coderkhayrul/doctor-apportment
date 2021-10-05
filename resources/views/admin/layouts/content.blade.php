<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>Patients</h6>
                            <h2>{{ App\Models\User::where('role_id', 3)->count() }}</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-users"></i>
                        </div>
                    </div>
                    <small class="text-small mt-10 d-block">6% higher than last month</small>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0"
                        aria-valuemax="100" style="width: 62%;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>Doctors</h6>
                            <h2>{{ App\Models\User::where('role_id', 1)->count() }}</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-user-plus"></i>
                        </div>
                    </div>
                    <small class="text-small mt-10 d-block">61% higher than last month</small>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="78" aria-valuemin="0"
                        aria-valuemax="100" style="width: 78%;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>Roles</h6>
                            <h2>{{ App\Models\Role::count() }}</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-user-check"></i>
                        </div>
                    </div>
                    <small class="text-small mt-10 d-block">Total Events</small>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="31" aria-valuemin="0"
                        aria-valuemax="100" style="width: 31%;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>Booking</h6>
                            <h2>{{ App\Models\Booking::count() }}</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-message-square"></i>
                        </div>
                    </div>
                    <small class="text-small mt-10 d-block">Total Booking</small>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                        aria-valuemax="100" style="width: 20%;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>Prescription</h6>
                            <h2>{{ App\Models\Prescription::count() }}</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-align-justify"></i>
                        </div>
                    </div>
                    <small class="text-small mt-10 d-block">Total Prescription</small>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                        aria-valuemax="100" style="width: 20%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
