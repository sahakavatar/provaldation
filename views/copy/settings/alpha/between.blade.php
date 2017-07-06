<div class="form-group  m-b-10 clearfix">
    <label class="col-md-4 control-label label-bold text-center" for="textinput">Minimum</label>
    <div class="col-md-8">
        <input name="textinput" type="number" min="1" data-rule="between" class="form-control input-md">
    </div>
</div>
<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label label-bold text-center" for="textinput">Maximum</label>
    <div class="col-md-8">
        <input name="textinput" type="number" min="1" data-rule="between" class="form-control input-md">
    </div>
</div>
<h4>between:<em>min</em>,<em>max</em></h4>
<p>The field under validation must have a size between the given <em>min</em> and <em>max</em>. Strings, numerics, and files are evaluated in the same fashion as the <a href="https://laravel.com/docs/5.4/validation#rule-size" target="_blank"><code class=" language-php">size</code></a> rule.</p>