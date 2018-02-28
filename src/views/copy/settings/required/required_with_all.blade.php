<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label  label-bold text-center" for="textinput"> values </label>
    <div class="col-md-8">
        <input name="contain" type="text" placeholder="foo,bar,..." data-rule="required_with_all"
               class="form-control input-md">
    </div>
</div>
<h4>required_with_all:foo,bar,...</h4>
<p>
    The field under validation must be present and not empty only if all of the other specified fields are present.
</p>