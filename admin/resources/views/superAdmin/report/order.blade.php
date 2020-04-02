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
                                <h1>Order report</h1>
                            </div>
                            <div class="">
                                <form action="{{route('get.order.report')}}" method="post" >
                                   @csrf
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <label class="login2">Start Date</label>
                                            <input type="text" name="startdate" class="form-control date" required/>
                                            <span class="text-danger"> <b>{{ $errors->first('title') }}</b></span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        	<label class="login2">End Date</label>
                                            <input type="text" name="enddate" class="form-control date" required/>
                                            <span class="text-danger"> <b>{{ $errors->first('title') }}</b></span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                           <button class="btn btn-primary" type="submit" style="margin-top:35px">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        <?php if(isset($order) && !empty($order)){?>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div class="table table-responsive">
                                    <table id="resid" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th >Kitchen name</th>
                                            <th>Order charge</th>
                                            <th >Delivery charge</th>
                                            <th >Service provider</th>
                                            <th >Restaurant charge</th>
                                            <!-- <th >Drder date</th> -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php $ordch=0;
                                                $dvc=0;
                                                $ser=0;
                                                $res=0;
                                            ?>
                                            @foreach($order as $ord)
                                            <tr>
                                                <td>{{ $ord->kitchen_name}}</td>
                                                <td>{{ $ord->order_charge}}</td>
                                                <td>{{ $ord->delivery_charge}}</td>
                                                <td>{{ $ord->service_provider}}</td>
                                                <td>{{ $ord->restaurant_charge}}</td>
                                            </tr>
                                            <?php $ordch+=$ord->order_charge;
                                                $dvc+=$ord->delivery_charge;
                                                $ser+=$ord->service_provider;
                                                $res+=$ord->restaurant_charge;
                                            ?>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr style="font-weight: bold">
                                                <td>Total</td>
                                                <td>{{$ordch}}</td>
                                                <td>{{$dvc}}</td>
                                                <td>{{$ser}}</td>
                                                <td>{{$res}}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
@endsection
@section('js')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    
@endsection
