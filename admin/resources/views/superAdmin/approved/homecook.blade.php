@extends('home')
@section('css')
{{--    <link rel="stylesheet" href="{{url('public/backend/css/data-table/bootstrap-table.css')}}">--}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <!-- Static Table Start -->
    <div class="data-table-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Banner</h1>
                            </div>
                            <div class="" style="float: right;margin-top: -3%;">
                                <a href="{{route('slider.add')}}"><button class="float-right btn btn-sm btn-primary"> Create</button></a>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="table table-responsive">
                                    <table id="resid" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th >Picture</th>
                                            <th>Author name</th>
                                            <th >Restaurant Name</th>
                                            <th >City</th>
                                            <th >Address</th>
                                             <th >Postal code</th>
                                            <th >Phone</th>
                                            <th >Email</th>
                                           
                                            <th >Total restuarent</th>
                                            <th >Average cost</th>
                                           <!--  <th>Action</th> -->

                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>


        $(document).ready( function () {
            $('#resid').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('homelist') }}",
                columns: [
                    {
                        "name": "food_menu",
                        "data": "food_menu",
                        "render": function (data, type, full, meta) {
                            return "<img src=\"/../public/assets/frontend/restaurantImages/" + data + "\" height=\"50\" width=\"50\"/>";}
                    },
                    { data: 'firstName', name: 'firstName',orderable: true, searchable:true },
                    { data: 'kitchen_name', name: 'kitchen_name',orderable: true, searchable:true },
                    { data: 'kitchen_city', name: 'kitchen_city',orderable: true, searchable:true },
                    { data: 'kitchen_address', name: 'kitchen_address',orderable: true, searchable:true },
                    { data: 'postal_code', name: 'postal_code',orderable: true, searchable:true },
                     { data: 'phone_name', name: 'phone_name',orderable: true, searchable:true },
                     { data: 'email', name: 'email',orderable: true, searchable:true },
                      { data: 'total_restuarent', name: 'total_restuarent',orderable: true, searchable:true },
                       { data: 'average_cost', name: 'average_cost',orderable: true, searchable:true },
                 /*
                    { "data": function(data){

                            return '<a class="btn btn-info btn-sm" data-panel-id="'+data.userId+'" onclick="removed(this)">Remove</a>'+
                                ' <button type="button" class="btn btn-primary btn-sm" data-panel-id="'+data.userId+'" onclick="approved(this)">Approved Now</button>'
                                ;},
                        "orderable": false, "searchable":false, "name":"selected_rows" },*/


                    // { title: 'Action', data: 'action', orderable: false, searchable:false },
                ]
            });
        });

        function removed(x) {
            userId = $(x).data('panel-id');
            // alert(jobId);
            if(!confirm("Are you sure to approved..!!")){
                return false;
            }
            // location.reload();
            $.ajax({
                type: 'POST',
                url: "{!! route('remove.home') !!}",
                cache: false,
                data: {_token: "{{csrf_token()}}",'userId': userId},
                success: function (data) {
                    // location.reload();
                    // console.log(data);
                    // categoryTable.ajax.reload();
                    // location.reload();
                    $('#resid').DataTable().clear().draw();


                }

            });


        }

        function approved(x) {
            userId = $(x).data('panel-id');
            // alert(jobId);
            if(!confirm("Are you sure to approved..!!")){
                return false;
            }
            // location.reload();
            $.ajax({
                type: 'POST',
                url: "{!! route('approved.home') !!}",
                cache: false,
                data: {_token: "{{csrf_token()}}",'userId': userId},
                success: function (data) {
                    // location.reload();
                    // console.log(data);
                    // categoryTable.ajax.reload();
                    // location.reload();
                    $('#resid').DataTable().clear().draw();


                }

            });


        }





    </script>
@endsection
