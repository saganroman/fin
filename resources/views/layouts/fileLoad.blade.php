@extends('layouts.app')
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Load data</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <form action="{{url('/fileHandler')}}"  method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class='col-md-12 '>
                            <label for="file">Choose file to upload (only CSV!)</label>
                            <input id="file" name="fileCSV" type="file" accept=".csv">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class='col-md-12 '>
                            <button class=" btn btn-primary pull-left" type="submit">Load data</button>
                            {{--<button class="btn btn-primary  pull-right" type="button">Смотреть статистику</button>--}}
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @if(Session::has('wrongFormat'))
            <p class="alert alert-danger">{{ Session::get('wrongFormat') }}</p>
        @endif
    </div>
    <!-- /#page-wrapper -->


@endsection