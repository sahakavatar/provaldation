<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label label-bold text-center" for="textinput">Size</label>
    <div class="col-md-8">
        <input  type="number" min="1" data-rule="size" class="form-control input-md">
    </div>
</div>
<h4>size:<em>value</em></h4>
<p>The field under validation must have a size matching the given <em>value</em>. For string data, <em>value</em> corresponds to the number of characters. For numeric data, <em>value</em> corresponds to a given integer value. For an array, <em>size</em> corresponds to the <code class=" language-php">count</code> of the array. For files, <em>size</em> corresponds to the file size in kilobytes.</p>