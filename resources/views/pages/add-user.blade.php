@extends('layout.main_layout')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Add New System User</h4>
                        <p class="card-category">Complete all the required informations</p>
                    </div>
                    <div class="card-body"> 

                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Great!</strong> {{session('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>                                
                        </div>
                        @endif

                        <form class="mt-5 pl-3 pr-3" action="{{ route('add_user') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Username <small class="text-danger">*</small></label>
                                        <input type="text" name="username" class="form-control">
                                    </div>
                                    @error('username')
                                    <p class="text-danger ml-3"><small>{{ $message }}</small></p>
                                    @enderror
                                </div>
                                <div class="col-md-8 offset-md-2">
                                    <div class="form-group bmd-form-group">
                                        <label class="">Password <small class="text-danger">*</small></label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    @error('password')
                                    <p class="text-danger ml-3"><small>{{ $message }}</small></p>
                                    @enderror
                                </div>
                                <!-- <div class="col-md-12">
                                    <select type="text" class="form-control">

                                    </select>
                                </div> -->
                            </div>
                            <center>
                                <button type="submit" class="btn btn-warning mt-5">Save Transaction</button>
                            </center>
                            
                            <div class="clearfix mb-4"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection