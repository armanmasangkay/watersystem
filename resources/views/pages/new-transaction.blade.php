@extends('layout.main_layout')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="card-title">Add New Transaction</h4>
                                <p class="card-category">Complete all the required informations</p>
                            </div>
                            <form action="{{route('new_transaction.search')}}" method="get" class="d-flex justify-content-between">
                                <input type="text" name="customerId" class="form-control mt-1 p-2" placeholder="Customer ID" style="height: 41px; background-color: white; border-radius: 3px; margin-top: 5px">
                                <button type="submit" class="btn btn-default ml-2">Search</button>
                            </form>
                        </div>
                        
                    
                    
                    </div>
                    

                    <div class="card-body"> 
                        @if(session('status')=="success")
                        <form class="mt-5 pl-3 pr-3" action="" method="post">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <h4>Account Number : <span>{{session('customer')->account_number}}</span></h4>
                                    <h4>Account Name : <span>{{session('customer')->firstname}} {{session('customer')->lastname}}</span></h4>
                                    <h4>Address : <span>{{session('customer')->purok}}, Brgy. {{session('customer')->brgy}}, Macrohon</span></h4>
                                    <h4>Contact : <span>{{session('customer')->contact_number}}</span></h4>
                                </div>
                            </div>
                            <div class="row mt-5">
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
                                    <div class="form-group bmd-form-group sub_services_2" style="display: block;">
                                        <label class="bmd-label-static" id="service_1">Select type of service first</label>
                                        <select name="sub_service_2" class="form-control" id="select3">
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Connection Type (Information based on account)</label>
                                        <input type="text" name="connection_type" class="form-control" value="{{session('customer')->connection_type}}" disabled>

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
                        @else
                        <p class="text-center text-muted mt-4"><i class="fas fa-exclamation-circle"></i> 
                        @if(session('message'))
                        {{session('message') }} 
                        @else 
                        Please search a Customer ID
                        @endif</p>
                            

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
        var select = document.getElementById("select");
        select.addEventListener("focus", myFocusFunction, true);
        select.addEventListener("blur", myBlurFunction, true);

        var select1 = document.getElementById("select2");
        select1.addEventListener("focus", myFocusFunction1, true);
        select1.addEventListener("blur", myBlurFunction1, true);

        function myFocusFunction() {
            $('#select').parent().addClass('is-focused')
        }

        function myBlurFunction() {
            $('#select').parent().removeClass('is-focused')
        }

        function myFocusFunction1() {
            $('#select1').parent().addClass('is-focused')
        }

        function myBlurFunction1() {
            $('#select1').parent().removeClass('is-focused')
        }

        $(document).on('change', '.select-sub', function(){
        var html = ''

            if($(this).val() == 'Transfer of Meter Location')
            {
                $('.sub_services_1').css('display', 'block')
                $('.sub_services_2').css('display', 'none')

                html += '<option>--Please Select--</option>'
                html += '<option>Same household</option>'
                html += '<option>Different household</option>'

                $('#select2').html(html);
                $('#service').html('Meter Location')

                $(this).parent().parent().addClass('col-md-4')
                $(this).parent().parent().removeClass('col-md-6')
            }
            else if($(this).val() == 'Transfer of Ownership')
            {
                $('.sub_services_1').css('display', 'block')
                $('.sub_services_2').css('display', 'none')

                html += '<option>--Please Select--</option>'
                html += '<option>Hereditary</option>'
                html += '<option>Non-Hereditary</option>'

                $('#select2').html(html);
                $('#service').html('Transfer Ownership')

                $(this).parent().parent().addClass('col-md-4')
                $(this).parent().parent().removeClass('col-md-6')
            }
            else if($(this).val() == 'Disconnection')
            {
                $('.sub_services_1').css('display', 'block')

                html += '<option>--Please Select--</option>'
                html += '<option>Voluntary Request from account holder</option>'
                html += '<option>Disconnection Order from waterworks</option>'

                $('#select2').html(html);
                $('#service').html('Reason for Disconnection')

                $(this).parent().parent().addClass('col-md-4')
                $(this).parent().parent().removeClass('col-md-6')
            }
            else if($(this).val() == 'Other')
            {
                $('.sub_services_1').css('display', 'block')
                $('.sub_services_2').css('display', 'block')

                html += '<option>--Please Select--</option>'
                html += '<option>Details of request</option>'

                $('#select2').html(html);
                $('#service').html('Other request')
                $('#service_1').html('Request details')

                $(this).parent().parent().addClass('col-md-4')
                $(this).parent().parent().removeClass('col-md-6')
            }
            else
            {
                $(this).parent().parent().addClass('col-md-6')
                $(this).parent().parent().removeClass('col-md-4')

                $('.sub_services_1').css('display', 'none')
                $('.sub_services_2').css('display', 'none')
            }
        })

        $(document).on('change', '.sub_service_1', function(){
            var html = ''
            if($(this).val() == 'Disconnection Order from waterworks')
            {
                $('.sub_services_2').css('display', 'block')

                html += '<option>--Please Select--</option>'
                html += '<option>Long overdue</option>'
                html += '<option>Unattended leaking</option>'
                html += '<option>Others/Etc.</option>'

                $('#select3').html(html);
                $('#service_1').html('Disconnection Type')
            }
            else if($(this).val() == "Details of request")
            {
                $('.sub_services_2').css('display', 'block')

                html += '<option>--Please Select--</option>'
                html += '<option>Leaking/damage line</option>'
                html += '<option>No water</option>'
                html += '<option>Low pressure</option>'
                html += '<option>Others/Etc.</option>'

                $('#select3').append(html);
                $('#service_1').html('Request details')
            }
            else{
                $('.sub_services_2').css('display', 'none')
            }
        })
    })
</script>
@endsection