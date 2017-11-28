@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Изменение кармы </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <form action="storeKarma" method="get">

            <div class="form-group">
                <label for="userKarma">Выберите пользователя:</label>
                <select class="form-control" id="userKarma" name="userKarma">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="karma">Значение кармы</label>
                <input type="text" class="form-control" id="karma" placeholder="Значение кармы" name="karmaValue" value="{{$karma}}">
            </div>
           {{-- <div class="form-group">
                <label for="description">Oписание</label>

                <textarea class="form-control" id="description">
</textarea>
            </div>--}}

            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>

    </div>
    <!-- /#page-wrapper -->


@endsection