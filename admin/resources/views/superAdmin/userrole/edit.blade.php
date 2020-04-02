@extends('home')

@section('css')

@endsection
@section('content')
    <div class="data-table-area mg-tb-15">
        <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline12-list">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>All Form Element</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="all-form-element-inner">
                                    <form method="post" action="{{route('role.update')}}" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <label class="login2 pull-right pull-right-pro">Role name</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                    <input type="text" name="typeName" class="form-control" value="{{$role->typeName}}" />
                                                    <input type="hidden" name="userTypeId" class="form-control" value="{{$role->userTypeId}}" />
                                                    <span class="text-danger"> <b>{{ $errors->first('typeName') }}</b></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="form-group-inner">
                                            <div class="login-btn-inner">
                                                <div class="row">
                                                    <div class="col-lg-3"></div>
                                                    <div class="col-lg-9">
                                                        <div class="login-horizental cancel-wp pull-left">
                                                            <button class="btn btn-white" type="submit">Cancel</button>
                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
 @endsection
