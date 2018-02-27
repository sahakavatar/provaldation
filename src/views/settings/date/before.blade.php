<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label label-bold text-center" for="textinput">Select Date</label>
    <div class="col-md-8">
        <input name="contain" type="date" data-rule="before" class="form-control input-md">
    </div>
</div>
<h4>before:<em>date</em></h4>
<p>The field under validation must be a value preceding the given date. The dates will be passed into the PHP <code
            class=" language-php">strtotime</code> function.</p>