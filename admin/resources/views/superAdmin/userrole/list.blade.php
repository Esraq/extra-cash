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
                                <h1>User role</h1>
                            </div>
                            <div class="" style="float: right;margin-top: -3%;">
                                <a href="{{route('role.add')}}"><button class="float-right btn btn-sm btn-primary"> add new role</button></a>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="table table-responsive">
                                    <table id="roleid" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Action</th>

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
            $('#roleid').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('userrole') }}",
                columns: [
                    
                    { data: 'typeName', name: 'typeName',orderable: true, searchable:true },
                    { "data": function(data){

                            return '<a class="btn btn-info btn-sm" data-panel-id="'+data.userTypeId+'" onclick="editRole(this)"><i class="fa fa-edit"></i></a>'+
                                ' <button type="button" class="btn btn-danger btn-sm" data-panel-id="'+data.userTypeId+'" onclick="deleteSlider(this)"> <i class="fa fa-trash"></i> </button>'
                                ;},
                        "orderable": false, "searchable":false, "name":"selected_rows" },


                    // { title: 'Action', data: 'action', orderable: false, searchable:false },
                ]
            });
        });

       function editRole(x) {
            btn = $(x).data('panel-id');
            var url = '{{route("role.edit", ":id") }}';
            var newUrl=url.replace(':id', btn);
            window.location.href = newUrl;

        }

        function deleteSlider(x) {
            userTypeId = $(x).data('panel-id');
            // alert(jobId);
            if(!confirm("Delete This data?")){
                return false;
            }
            location.reload();
            $.ajax({
                type: 'POST',
                url: "{!! route('role.delete') !!}",
                cache: false,
                data: {_token: "{{csrf_token()}}",'userTypeId': userTypeId},
                success: function (data) {
                    // location.reload();
                    // console.log(data);
                    // categoryTable.ajax.reload();
                    location.reload();
                    //$('#roleid').DataTable().clear().draw();


                }

            });


        }





    </script>
@endsection
