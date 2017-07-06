<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label label-bold text-center" for="textinput">Select Date</label>
    <div class="col-md-8">
        <input name="contain" type="date"  data-rule="after" class="form-control input-md">
    </div>
</div>
<h4>after:date</h4>
<p>The field under validation must be a value after a given date. The dates will be passed into the <code class=" language-php">strtotime</code> PHP function:</p>