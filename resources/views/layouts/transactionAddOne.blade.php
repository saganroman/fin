@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Страница добавления транзакций (1 вариант) </h1>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <form action="/addOne" method="get">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="users">Выберите пользователя:</label>
                        <select class="form-control" id="users" name="user">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="parthners">Выберите партнера:</label>
                        <select class="form-control" id="parthners" name="parthner">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2  balance"> Текущий баланс:</div>
                <div class="col-md-4 "> <button class=" btn btn-success pay" type="button">Выплатить</button></div>
            </div>
            <div class="row">
                <div class='col-md-4'>
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker'>
                            <input type='text' class="form-control" placeholder="Выберите дату" name="date" readonly/>
                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 "> <button class=" btn btn-primary " type="button">Выплатить</button></div>

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