@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cтраница добавления транзакций (2 вариант) </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form action="/addFew" method="get">
            <div class="row">
                <div class="col-md-12 ">
                    <table class="table table-striped ">
                        <tr>
                            <th class="col-md-3 ">Партнерка</th>
                            <th class="col-md-3 ">Дата</th>
                            <th class="col-md-3 ">Сумма</th>
                            <th class="col-md-3 ">#</th>
                        </tr>
                        <tr>
                            <td>ParthnetName</td>
                            <td> <input type='text' class="form-control" id='datetimepicker' name="date" /></td>
                            <td> <input type='text' class="form-control" name="amount" pattern="[0-9]{3}"  id="amount"/></td>
                            <td>   <select class="form-control"  name="currency">
                                    <option value="1">pуб</option>
                                    <option value="2">$</option>

                                </select> </td>
                        </tr>

                    </table>
                </div>
            </div>

            <div class="row">
                <div class='col-md-4 pull-right'>
                    <button class=" btn btn-primary" type="submit">Добавить бонус</button>
                    <button class="btn btn-primary  pull-right" type="button">Смотреть статистику</button>
                </div>
            </div>
        </form>

    </div>
    <!-- /#page-wrapper -->


@endsection