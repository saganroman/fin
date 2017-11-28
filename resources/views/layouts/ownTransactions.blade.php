@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Просмотр транзакций администратора</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>


        <div class="row">
            <div class="col-md-12 ">
                <table class="table table-striped ">
                    <tr>
                        <th class="col-md-1 ">#</th>
                        <th class="col-md-2 ">Пользователь</th>
                        <th class="col-md-1 ">Сумма</th>
                        <th class="col-md-2 ">Валюта</th>
                        <th class="col-md-2 ">Партнерка</th>
                        <th class="col-md-3 ">Описание</th>
                        <th class="col-md-2 ">Дата</th>

                    </tr>
                    @foreach($adminTransactions as $transaction)
                        <tr>
                            <td>{{$loop->iteration + $start }}</td>
                            <td>{{$transaction->user->name}}</td>
                            <td>{{$transaction->sum}}</td>
                            <td>{{$transaction->type ==1?"Руб":"$"}}</td>
                            <td>{{$transaction->partner->name}}</td>
                            <td>{{$transaction->description}}</td>
                            <td>{{$transaction->date}}</td>

                        </tr>
                    @endforeach

                </table>
                {{ $adminTransactions->links() }}
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 ">
                Баланс: {{$ownBalanceInR}} Руб/  {{$ownBalanceInD}}$
            </div>
        </div>


    </div>
    <!-- /#page-wrapper -->


@endsection