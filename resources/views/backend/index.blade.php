@extends('backend.master.master')
@section('content')
	  <!--main-->
	  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Tổng quan</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tổng quan</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-6">
                <div class="panel panel-blue panel-widget ">
                    <div class="row no-padding">
                        <div class="col-sm-3 col-lg-4 widget-left">
                            <span class="fa fa-comment icon-50" aria-hidden="true"></span>
                        </div>
                        <div class="col-sm-9 col-lg-8 widget-right">
                            <div class="large">5646 lượt</div>
                            <div class="text-muted">Lượng views</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-6">
                <div class="panel panel-teal panel-widget">
                    <div class="row no-padding">
                            <div class="col-sm-3 col-lg-4 widget-left">
                                    <span class="fa fa-file icon-50" aria-hidden="true"></span>
                                </div>
                        <div class="col-sm-9 col-lg-7 widget-right">
                            <div class="large">24</div>
                            <div class="text-muted">Số Bài viết</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/.row-->

   

    </div>
    <!--end main-->
@stop