<div class="form-group m-b-10 clearfix">
    <label class="col-md-4 control-label label-bold text-center" for="textinput">MIME Types</label>
    <div class="col-md-8">
        <input name="contain" type="text" placeholder="text/plain,..." data-rule="mimetypes"
               class="form-control input-md">
    </div>
</div>
<h4>mimetypes:<em>text/plain</em>,...</h4>
<p>The file under validation must match one of the given MIME types:</p>
<pre class=" language-php"><code class=" language-php"><span class="token string">'video'</span> <span
                class="token operator">=</span><span class="token operator">&gt;</span> <span class="token string">'mimetypes:video/avi,video/mpeg,video/quicktime'</span></code></pre>
<p>To determine the MIME type of the uploaded file, the file's contents will be read and the framework will attempt to
    guess the MIME type, which may be different from the client provided MIME type.</p>