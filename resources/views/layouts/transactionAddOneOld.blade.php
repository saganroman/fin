@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Страница добавления транзакций (1 вариант) </h1>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <form action="{{url('addOne/')}}" method="get">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="users">Выберите пользователя:</label>
                        <select class="form-control" id="users" name="user">
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="parthners">Выберите партнера:</label>
                        <select class="form-control" id="parthners" name="parthner">
                            @foreach($partners as $partner)
                                <option value="{{$partner->id}}">{{$partner->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{--<div class="col-md-2  balance"> Текущий баланс:</div>
                <div class="col-md-4 ">
                    <button class=" btn btn-success pay" type="button">Выплатить</button>
                </div>--}}
            </div>
            <div class="row">
                <div class='col-md-4'>
                    <div class="form-group">
                        <label for="amount">Сумма:</label>
                       <input type='text' class="form-control" name="amount" id="amount" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-md-4'>
                    <div class="form-group">
                        <label for="currency">Валюта:</label>
                        <select class="form-control"  name="currency">
                            <option value="1">pуб</option>
                            <option value="2">$</option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class='col-md-4'>
                    <div class="form-group"><label for="date">Выберите дату:</label>
                        <div class='input-group date' id='datetimepicker'>

                            <input type='text' class="form-control" id="date" placeholder="Выберите дату" name="date"required  />
                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                    </div>
                </div>
               {{-- <div class="col-md-4 col-md-offset-2 ">
                    <button class=" btn btn-primary " type="button">Выплатить</button>
                </div>--}}

            </div>
            <div class="row">
                <div class='col-md-4'>
                    <button class=" btn btn-primary" type="submit">Добавить бонус</button>
                    <button class="btn btn-primary  pull-right" type="button">Смотреть статистику</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /#page-wrapper -->


@endsection