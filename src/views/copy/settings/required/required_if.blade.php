<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label label-bold text-center" for="textinput">anotherfield value </label>
    <div class="col-md-8">
        <input name="contain" type="text" placeholder="anotherfield,value,..." data-rule="required_if"
               class="form-control input-md">
    </div>
</div>
<h4>required_if:anotherfield,value,...</h4>
<p>
    The field under validation must be present and not empty if the anotherfield field is equal to any value.
</p>