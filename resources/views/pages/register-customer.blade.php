@extends('layout.main_layout')

@section('registerCustomer_content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Registration Successful!</strong> {{session('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Register New Client</h4>
                        <p class="card-category">Complete all the required informations</p>
                    </div>
                    <div class="card-body"> 

                   

                        <form class="mt-5 pl-3 pr-3" action="{{route('admin.register_customer')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-static">Last Name <small class="text-danger">*</small></label>
                                        <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror"required>
                                        @error('last_name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">First Name <small class="text-danger">*</small></label>
                                        <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" required>
                                        @error('first_name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
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
                                        <label class="bmd-label-static">Civil Status <small class="text-danger">*</small></label>
                                        <select name="civil_status" class="form-control @error('civil_status') is-invalid @enderror" id="civil_status" required>
                                            <option value="">--Please select--</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                        @error('civil_status')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                   
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Sitio/Purok <small class="text-danger">*</small></label>
                                        <input type="text" name="sitio_purok" id="sitio_purok" class="form-control @error('sitio_purok') is-invalid @enderror" required>
                                        @error('sitio_purok')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Barangay <small class="text-danger">*</small></label>
                                        <input type="text" name="barangay" id="barangay" class="form-control @error('barangay') is-invalid @enderror" required>
                                        @error('barangay')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Contact Number <small class="text-danger">*</small></label>
                                        <input type="text" name="contact" id="contact" class="form-control @error('contact') is-invalid @enderror" required>
                                        @error('contact')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Connection Type <small class="text-danger">*</small></label>
                                        <select name="connection_type" class="form-control @error('connection_type') is-invalid @enderror" id="select" required>
                                            <option value="">--Please select--</option>
                                            <option value="residential">Residential</option>
                                            <option value="commercial">Commercial</option>
                                            <option value="institutional">Institutional</option>
                                            <option value="other">Other</option>
                                        </select>
                                        @error('connection_type')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Others (Please specify)</label>
                                        <input type="text" name="connection_type_other @error('connection_type_other') is-invalid @enderror" class="form-control">
                                        @error('connection_type_other')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Connection Status <small class="text-danger">*</small></label>
                                        <select name="connection_status" class="form-control @error('connection_status') is-invalid @enderror" id="select1" required>
                                            <option value="">--Please select--</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                            <option value="other">Other</option>
                                        </select>
                                        @error('connection_status')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="">Others (Please specify)</label>
                                        <input type="text" name="connection_status_other" class="form-control @error('connection_status_other') is-invalid @enderror">
                                        @error('connection_status_other')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                  
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning pull-left mt-5" id="registerClient">Register Client</button>
                            <div class="clearfix mb-4"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
