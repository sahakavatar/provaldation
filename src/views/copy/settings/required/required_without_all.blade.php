<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label  label-bold text-center" for="textinput"> values </label>
    <div class="col-md-8">
        <input name="contain" type="text" placeholder="foo,bar,..." data-rule="required_without_all"
               class="form-control input-md">
    </div>
</div>
<h4>required_without_all:foo,bar,...</h4>
<p>
    The field under validation must be present and not empty only when all of the other specified fields are not
    present.
</p>