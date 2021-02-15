@extends('layout.main_layout')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Lists of System Users</h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="card-body"> 
                        <div class="table-responsive mt-4">
                            <table class="table table-bordered border">
                                <thead>
                                    <tr>
                                        <th class="pt-2 pb-2"><strong>ID</strong></th>
                                        <th class="pt-2 pb-2"><strong>USERNAME</strong></th>
                                        <th colspan="2" class="pt-2 pb-2"><strong>ACTIONS</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pt-1 pb-1">&nbsp;</td>
                                        <td class="pt-1 pb-1"></td>
                                        <td colspan="2" class="pt-1 pb-1">
                                            <a href="#" class="text-warning pr-2"><i class="far fa-edit"></i></a> |
                                            <a href="" class="text-danger pl-2"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection