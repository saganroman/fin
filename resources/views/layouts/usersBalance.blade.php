@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Просмотр баланса пользователей</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <div class="row">
            <div class="col-md-12 ">
                <table class="table table-striped " id="dataTableShort">
                    <thead>
                    <tr>
                        <th class="col-md-2 ">#</th>
                        <th class="col-md-5 ">Пользователь</th>
                        <th class="col-md-5 ">Баланс</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usersBalance as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user['user_name']}}</td>
                            <td>{{$user['balanceR']}}Руб/{{$user['balanceD']}}$</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- /#page-wrapper -->


@endsection