@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Изменение кармы </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form action="/storeKarma" method="get">

            <div class="form-group">
                <label for="user">Выберите пользователя:</label>
                <select id="user" class="form-control">
                    <option value=""> 1</option>
                </select>
            </div>
            <div class="form-group">
                <label for="karma">Значение кармы</label>
                <input type="text" class="form-control" id="karma" placeholder="Значение кармы">
            </div>
            <div class="form-group">
                <label for="description">Oписание</label>

                <textarea class="form-control" id="description">
</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>

    </div>
    <!-- /#page-wrapper -->


@endsection