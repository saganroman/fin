<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">Main page</a>
    </div>


    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                   {{-- <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                    <!-- /input-group -->--}}
                </li>
                <li>
                    <a href="{{ url('/fileUpload') }}"><i class="fa fa-files-o fa-fw"></i> Upload data CSV</a>
                </li>    <li>
                    <a href="{{ url('/getData') }}"><i class="fa fa-files-o fa-fw"></i> Get data from period</a>
                </li>
                   <li>
                    <a href="{{ url('/adminPage') }}"><i class="fa fa-sitemap fa-fw"></i> some page<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('/ownBalance') }}">some page</a>
                        </li>
                        <li>
                            <a href="{{ url('/usersBalance') }}">some page</a>
                        </li>

                        <li>
                            <a href="{{ url('/balacePeriod') }}">some page</a>
                        </li>

                    </ul>
                    <!-- /.nav-second-level -->
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>