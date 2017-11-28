@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Просмотр баланса пользователей за период</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form action="/getBalanceByPeriod" method="get">
            <div class="row">
                <div class='col-md-6'>
                    <div class="form-group">
                        <div class='input-group date' id='dateBegin'>
                            <input type='text' class="form-control"/>
                            <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                        </div>
                    </div>
                </div>

                <div class='col-md-6'>
                    <div class="form-group">
                        <div class='input-group date' id='dateEnd'>
                            <input type='text' class="form-control"/>
                            <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-md-12'>
                    <button type="button"  id="getPeriod" class="btn btn-primary pull-right">Показать</button>
                </div>
            </div>
        </form>
        <br>
        <div class="row">
            <div class="col-md-12 ">
                <table class="table table-striped " id="balancePeriod">
                    <tr>
                        <th class="col-md-2 ">#</th>
                        <th class="col-md-5 ">Пользователь</th>
                        <th class="col-md-5 ">Баланс</th>


                    </tr>


                </table>
            </div>
        </div>


    </div>
    <!-- /#page-wrapper -->


@endsection