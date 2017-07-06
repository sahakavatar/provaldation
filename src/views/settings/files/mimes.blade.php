<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label label-bold text-center" for="textinput">MIME Types</label>
    <div class="col-md-8">
        <input name="contain" type="text" placeholder="foo,bar" data-rule="mimes" class="form-control input-md">
    </div>
</div>
<h4>mimes:<em>foo</em>,<em>bar</em>,...</h4>
<p>The file under validation must have a MIME type corresponding to one of the listed extensions.</p>
<h4>Basic Usage Of MIME Rule</h4>
<pre class=" language-php"><code class=" language-php"><span class="token string">'photo'</span> <span class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'mimes:jpeg,bmp,png'</span></code></pre>
<p>Even though you only need to specify the extensions, this rule actually validates against the MIME type of the file by reading the file's contents and guessing its MIME type.</p>
<p>A full listing of MIME types and their corresponding extensions may be found at the following location: <a href="https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types"></a><a href="https://svn.apache.org/repos/asf/httpd/httpd/trunk/docs/conf/mime.types" target="_blank">mime.types</a></p>