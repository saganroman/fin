@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Изменение процента </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form action="" method="get">
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="incomeFrom">Доход за неделю от</label>
                    <input type="text" class="form-control" id="incomeFrom" placeholder="От $">
                </div>
                <div class="form-group col-lg-3">
                    <label for="incomeTo">до</label>
                    <input type="text" class="form-control" id="incomeTo" placeholder="До $">
                </div>
                <div class="form-group col-lg-3">
                    <label for="karma">Карма</label>
                    <input type="text" class="form-control" id="karma" placeholder="Карма">
                </div>
                <div class="form-group col-lg-3">
                    <label for="percent">Процент</label>
                    <input type="text" class="form-control" id="percent" placeholder="Процент">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="incomeFrom">Доход за неделю от</label>
                    <input type="text" class="form-control" id="incomeFrom" placeholder="От $">
                </div>
                <div class="form-group col-lg-3">
                    <label for="incomeTo">до</label>
                    <input type="text" class="form-control" id="incomeTo" placeholder="До $">
                </div>
                <div class="form-group col-lg-3">
                    <label for="karma">Карма</label>
                    <input type="text" class="form-control" id="karma" placeholder="Карма">
                </div>
                <div class="form-group col-lg-3">
                    <label for="percent">Процент</label>
                    <input type="text" class="form-control" id="percent" placeholder="Процент">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="incomeFrom">Доход за неделю от</label>
                    <input type="text" class="form-control" id="incomeFrom" placeholder="От $">
                </div>
                <div class="form-group col-lg-3">
                    <label for="incomeTo">до</label>
                    <input type="text" class="form-control" id="incomeTo" placeholder="До $">
                </div>
                <div class="form-group col-lg-3">
                    <label for="karma">Карма</label>
                    <input type="text" class="form-control" id="karma" placeholder="Карма">
                </div>
                <div class="form-group col-lg-3">
                    <label for="percent">Процент</label>
                    <input type="text" class="form-control" id="percent" placeholder="Процент">
                </div>
            </div>


            <button type="submit" class="btn btn-primary pull-right">Изменить</button>
        </form>

    </div>
    <!-- /#page-wrapper -->


@endsection