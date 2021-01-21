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
                        <form class="mt-5 pl-3 pr-3"  >
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Middle Name</label>
                                        <input type="text" name="middle_name" id="middle_name" class="form-control">
                                    </div>
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Sitio/Purok</label>
                                        <input type="text" name="sitio_purok" id="sitio_purok" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Barangay</label>
                                        <input type="text" name="barangay" id="barangay" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Contact Number</label>
                                        <input type="text" name="contact" id="contact" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Type of Connection</label>
                                        <select name="connection_type" class="form-control" id="connection_type">
                                            <option></option>
                                            <option value="Resedential">Resedential</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Connection Status</label>
                                        <input type="text" name="connection_status" id="connection_status" class="form-control">
                                    </div>
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
