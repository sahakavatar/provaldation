<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label  label-bold text-center" for="textinput"> Regular Expression </label>
    <div class="col-md-8">
        <input type="text" placeholder="[0-9]" data-rule="regex" class="form-control input-md">
    </div>
</div>
<h4>regex:<em>pattern</em></h4>
<p>The field under validation must match the given regular expression.</p>
<p><strong>Note:</strong> When using the <code class=" language-php">regex</code> pattern, it may be necessary to specify rules in an array instead of using pipe delimiters, especially if the regular expression contains a pipe character.</p>