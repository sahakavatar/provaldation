<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label label-bold text-center" for="textinput">value </label>
    <div class="col-md-8">
        <input name="contain" type="text" placeholder="users,email" data-rule="unique"
               class="form-control input-md">
    </div>
</div>
<h4>unique:<em>table</em>,<em>column</em>,<em>except</em>,<em>idColumn</em></h4>
<p>The field under validation must be unique in a given database table. If the <code class=" language-php">column</code> option is not specified, the field name will be used.</p>
<pre class=" language-php"><code class=" language-php"><span class="token string">'email'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'unique:users,email_address'</span></code></pre>