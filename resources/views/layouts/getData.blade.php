@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header"> Select period, please</h1>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <form action="{{url('getData/')}}" method="get">
            <div class="row">
                <div class='col-md-6'>
                    <div class="form-group">
                        <div class='input-group date' id='dateBegin'>
                            <input type='text' class="form-control" placeholder="Enter date" name="startData"
                                   @if (isset($start)) value="{{$start}}" @endif
                                   readonly/>
                            <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                        </div>
                    </div>
                </div>

                <div class='col-md-6'>
                    <div class="form-group">
                        <div class='input-group date' id='dateEnd'>
                            <input type='text' class="form-control" placeholder="Enter date" name="endData"
                                   @if (isset($end)) value="{{$end}}" @endif
                                   readonly/>
                            <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-md-12'>
                    <button type="submit" id="getPeriod" class="btn btn-primary pull-right">Show</button>
                </div>
            </div>
        </form>
        <br><br>
        @if(!empty($list))
            <div class="row">
                <div class="col-md-12 ">
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    <br><br>
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12 ">
                <table class="table table-striped " id="dataTableLong">
                    <thead>
                    <tr>
                        <th class="col-md-1 ">Date</th>
                        {{-- <th class="col-md-1 ">Time</th>--}}
                        <th class="col-md-2 ">Open</th>
                        <th class="col-md-2 ">High</th>
                        <th class="col-md-2 ">Low</th>
                        <th class="col-md-2 ">Close</th>
                        <th class="col-md-1 ">Volume</th>

                    </tr>
                    </thead>
                    <tbody>

                    @if(!empty($list))
                        @foreach($list as $key=>$transaction)
                            <tr>
                                <td>{{$transaction->Date}}</td>
                                {{--<td>{{$key}}</td>
                                <td>555</td>--}}
                                <td>{{$transaction->Open}}</td>
                                <td>{{$transaction->High}}</td>
                                <td>{{$transaction->Low}}</td>
                                <td>{{$transaction->Close}}</td>
                                <td>{{$transaction->Volume}}</td>

                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>

            </div>
        </div>

    </div>
    <!-- /#page-wrapper -->

    <script>
        var a = <?php if (isset($list)) {
            echo json_encode($list);
        }?>
    </script>
    {{$r}}
@endsection