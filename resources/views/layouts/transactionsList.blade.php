@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Просмотр транзакций </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-12 ">
                <table class="table table-striped " id="dataTableLong">
                    <thead>
                    <tr>
                        <th class="col-md-1 ">#</th>
                        <th class="col-md-2 ">Пользователь</th>
                        <th class="col-md-1 ">Сумма</th>
                        <th class="col-md-2 ">Валюта</th>
                        <th class="col-md-2 ">Партнерка</th>
                        <th class="col-md-3 ">Описание</th>
                        <th class="col-md-2 ">Дата</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$transaction->user->name}}</td>
                            <td>{{$transaction->sum}}</td>
                            <td>{{$transaction->type ==1?"Руб":"$"}}</td>
                            <td>{{$transaction->partner->name}}</td>
                            <td>{{$transaction->description}}</td>
                            <td>{{$transaction->date}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>


    </div>
    <!-- /#page-wrapper -->


@endsection