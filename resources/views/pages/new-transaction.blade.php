@extends('layout.main_layout')

@section('newTransactions_content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Add New Transaction</h4>
                        <p class="card-category">Complete all the required informations</p>
                    </div>
                    <div class="card-body"> 
                        <form class="mt-5 pl-3 pr-3" action="" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Type of Services</label>
                                        <select name="type_of_service" class="form-control select-sub" id="select">
                                            <option>--Please Select--</option>
                                            <option>Transfer of Meter Location</option>
                                            <option>Transfer of Ownership</option>
                                            <option>Reconnection</option>
                                            <option>Disconnection</option>
                                            <option>Change of Meter</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group sub_services_1">
                                        <label class="bmd-label-static" id="service">Select type of service first</label>
                                        <select name="sub_service_1" class="form-control sub_service_1" id="select2">
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group sub_services_2">
                                        <label class="bmd-label-static" id="service_1">Select type of service first</label>
                                        <select name="sub_service_2" class="form-control" id="select3">
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Connection Type</label>
                                        <select name="connection_type" class="form-control" id="select1">
                                            <option></option>
                                            <option>Residential</option>
                                            <option>Commercial</option>
                                            <option>Institutional</option>
                                            <option>Other</option>
                                            <option>Mainline</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="">Scheduled Date</label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="">Scheduled Time</label>
                                        <input type="time" name="time" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="">Remarks</label>
                                        <input type="text" name="remarks" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning pull-left mt-5">Save Transaction</button>
                            <div class="clearfix mb-4"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection