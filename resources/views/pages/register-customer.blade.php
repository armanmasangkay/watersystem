@extends('layout.main_layout')

@section('registerCustomer_content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Register New Client</h4>
                        <p class="card-category">Complete all the required informations</p>
                    </div>
                    <div class="card-body"> 
                        <form class="mt-5 pl-3 pr-3" action="" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control">
                                    </div>
                                    <small id="last_name_err" class="text-danger" style="position: relative; top:-5px" ></small>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control">
                                    </div>
                                    <small id="first_name_err" class="text-danger" style="position: relative; top:-5px" ></small>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Middle Name</label>
                                        <input type="text" name="middle_name" id="middle_name" class="form-control">
                                    </div>
                                    <small id="middle_name_err" class="text-danger" style="position: relative; top:-5px" ></small>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Civil Status</label>
                                        <select name="civil_status" class="form-control" id="civil_status">
                                            <option></option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                    </div>
                                    <small id="civil_status_err" class="text-danger" style="position: relative; top:-5px" ></small>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Sitio/Purok</label>
                                        <input type="text" name="sitio_purok" id="sitio_purok" class="form-control">
                                    </div>
                                    <small id="sitio_purok_err" class="text-danger" style="position: relative; top:-5px" ></small>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Barangay</label>
                                        <input type="text" name="barangay" id="barangay" class="form-control">
                                    </div>
                                    <small id="brgy_err" class="text-danger" style="position: relative; top:-5px" ></small>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Contact Number</label>
                                        <input type="text" name="contact" id="contact" class="form-control">
                                    </div>
                                    <small id="contact_err" class="text-danger" style="position: relative; top:-5px" ></small>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Connection Type</label>
                                        <select name="connection_type" class="form-control" id="select1">
                                            <option></option>
                                            <option>Residential</option>
                                            <option>Commercial</option>
                                            <option>Institutional</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <small id="connection_type_err" class="text-danger" style="position: relative; top:-5px" ></small>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Others (if type is other, please specify)</label>
                                        <input type="text" name="connection_type_other" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Connection Status</label>
                                        <select name="connection_status" class="form-control" id="select1">
                                            <option></option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Others (if status is other, please specify)</label>
                                        <input type="text" name="connection_status_other" class="form-control">
                                    </div>
                                    <small id="connection_status_err" class="text-danger" style="position: relative; top:-5px" ></small>
                                </div>
                            </div>
                            <button type="button" class="btn btn-warning pull-left mt-5" id="registerClient">Register Client</button>
                            <div class="clearfix mb-4"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
