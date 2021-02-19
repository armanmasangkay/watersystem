@extends('layout.main_layout')

@section('content')
<div class="content mt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                   
                    <div class="card-body"> 
                        <div class="d-flex justify-content-between mt-3">
                            <form class="form-inline" action="">
                                <div class="input-group">
                                    <div class="row justify-content-between ml-0 mr-0 border pt-2 pb-1 pr-1">
                                        <span class="pt-1 pl-2">Date From:</span>
                                        <input type="date" name='date_from' value="" class="border-0 small ml-1 rounded-0 p-1 text-gray" placeholder="dd/mm/yyyy" style="font-size: 14px !important;">
                                    </div>
                                    <div class="row justify-content-between ml-1 border pt-2 pb-1 pr-1">
                                        <span class="pt-1 pl-2">Date To:</span>
                                        <input type="date" name='date_to' value=""  class="border-0 small ml-1 rounded-0 p-1 text-gray" placeholder="dd/mm/yyyy" style="font-size: 14px !important;">
                                    </div>
                                    <div class="ml-3">
                                        <button class="btn btn-warning pt-3 pb-3 ml-1" type="submit">
                                        <i class="fas fa-search fa-sm pr-2"></i> View
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="btn-wrapper">
                                <button class="btn btn-warning pt-3 pb-3"><i class="fas fa-print fa-sm pr-2"></i> Print</button>
                            </div>
                        </div>
                        @if($customers->count()>0)
                        <div class="table-responsive mt-2 mb-2">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td class="text-center border-bottom-0 border-top text-uppercase text-bold"><strong>Account No</strong></td>
                                        <td class="text-center border-bottom-0 border-top text-uppercase text-bold"><strong>Client Name</strong></td>
                                        <td class="text-center border-bottom-0 border-top text-uppercase text-bold"><strong>Address</strong></td>
                                        <td class="text-center border-bottom-0 border-top text-uppercase text-bold"><strong>Type</strong></td>
                                        <td class="text-center border-bottom-0 border-top text-uppercase text-bold"><strong>Status</strong></td>
                                        <td class="text-center border-bottom-0 border-top text-uppercase text-bold"><strong>Date Registered</strong></td>
                                        <td class="text-center border-bottom-0 border-top text-uppercase text-bold" colspan="2"><strong>Actions</strong></td>
                                    </tr>
                                </thead>
                                <tbody class="border-top">
                                    @foreach ($customers as $customer)
                                    <tr>
                                        <th class="pt-1 pb-1 text-center">{{$customer->account_number}}</th>
                                        <td class="pt-1 pb-1 text-center">{{$customer->lastname}}, {{$customer->firstname}}</td>
                                        <td class="pt-1 pb-1 text-center">{{$customer->purok}}, {{$customer->brgy}}</td>
                                        <td class="pt-1 pb-1 text-center">{{$customer->connection_type}}</td>
                                        <td class="pt-1 pb-1 text-center">{{$customer->connection_status}}</td>
                                        <td class="pt-1 pb-1 text-center">{{$customer->created_at}}</td>
                                        <td class="pt-1 pb-1 text-center" colspan="2">
                                            <a href="" class="text-info pr-2"><i class="fas fa-edit fa-sm pr-2"></i>Edit</a> |
                                            <a href="" class="text-danger pl-2 delete" data-account-number="{{$customer->account_number}}">
                                                <i class="fas fa-times fa-sm pr-2"></i>Delete
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$customers->links()}}
                        @else
                            <p class="mt-5 text-center text-muted">No data to show</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('custom_js')
<script>

    $(document).ready(function(){
        
        $(".delete").click(function(e){
            e.preventDefault()
            let accountNumber=$(this).data('account-number')

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                   alert('delete')
                }
            })
           

        })

    })



</script>

@endsection