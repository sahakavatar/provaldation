{!! HTML::style($tplPath.'/css/styles.css') !!}
<header class="{!! $settings['newcontainer'] or 'new_header' !!}">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src={!! BBgetSiteLogo() !!}  alt="{!! BBgetSiteName() !!}" class="logo newlogo" >
                    <span class="{!! $settings['sitenametextstyle'] or 'site_name' !!} ">{!! BBgetSiteName() !!}</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li class="soc_icons">
                        {!! isset($settings['socialiconswidget_1'])? BBRenderWidget($settings['socialiconswidget_1']):null!!}
                    </li>

                    <li class="{!! $settings['main_menu'] or 'main_menu' !!}">
                        {!! isset($settings['my-menu'])? BBRenderMenu($settings['my-menu']):'<ul><li><a href="#">Home</a></li><li><a href="#">About</a></li><li><a href="#">Blog</a></li> <li><a href="#">Contact</a></li></ul>'!!}
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    {{--<div class=" {!! $settings['my-menu'] or 'my_menu_right_1' !!}">--}}
                    {!! isset($settings['loginbutton'])? BBRenderWidget($settings['loginbutton']):null!!}
                    {{--</div>--}}
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>

