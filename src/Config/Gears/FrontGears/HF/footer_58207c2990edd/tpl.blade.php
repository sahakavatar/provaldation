<div class="{!! $settings['footerstyle_12'] or '' !!} new_footer_template_22">
    <footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

            {!! isset($settings['new_widget_1'])? BBRenderWidget($settings['new_widget_1']):null!!}

        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

            {!! isset($settings['new_widget_2'])? BBRenderWidget($settings['new_widget_2']):null!!}

        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

            {!! isset($settings['new_widget_3'])? BBRenderWidget($settings['new_widget_3']):null!!}

        </div>
    </footer>

</div>
{!! HTML::style($tplPath."/css/style.css") !!}
