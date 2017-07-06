<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label  label-bold text-center" for="textinput"> In </label>
    <div class="col-md-8">
        <input  type="text" placeholder="foo,bar,..." data-rule="in" class="form-control input-md">
    </div>
</div>
<h4>in:foo,bar,...</h4>
<p>The field under validation must be included in the given list of values. Since this rule often requires you to <code class=" language-php">implode</code> an array, the <code class=" language-php"><span class="token scope">Rule<span class="token punctuation">::</span></span>in</code> method may be used to fluently construct the rule:</p>