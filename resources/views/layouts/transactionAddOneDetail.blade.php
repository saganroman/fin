@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cтраница добавления транзакций для пользователя {{$user->name}} </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form action="addTransactionHandler" method="get">
            <div class="row">
                <div class="col-md-12 ">
                    <table class="table table-striped ">
                        <thead>
                        <tr>
                            <th class="col-md-3 ">Партнерка</th>
                            <th class="col-md-3 ">Дата</th>
                            <th class="col-md-3 ">Сумма</th>
                            <th class="col-md-3 ">Валюта</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($partners as $partner)
                            <tr>
                                <input type='hidden' value="{{$user->id}}" name="user[]"/>
                                <td><input type='text' class="form-control" value="{{$partner->name}}" readonly/></td>
                                <input type='hidden' value="{{$partner->id}}" name="partner[]"/>
                                <td><input type='text' class="form-control" value="{{$date}}" name="date[]" readonly/>
                                </td>
                                <td><input type='text' class="form-control sum" name="sum[]"/></td>
                                <td><select class="form-control" name="currency[]">
                                        <option value="1">pуб</option>
                                        <option value="2">$</option>

                                    </select></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class='col-md-12 '>
                    <button class=" btn btn-primary pull-right" type="submit">Добавить бонус</button>
                    {{--<button class="btn btn-primary  pull-right" type="button">Смотреть статистику</button>--}}
                </div>
            </div>
        </form>

    </div>
    <!-- /#page-wrapper -->


@endsection