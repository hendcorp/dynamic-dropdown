# dynamic-dropdown
Dynamic Dropdown with jQuery and PHP

Live demo http://livedemo.hendrasetiawan.net/dynamic-dropdown/

This project show you how to create dynamic dropdown with jQuery and PHP.

<h4>1. index.php</h4>
This is a master file. First, we need to create the master dropdown :
<pre><code>&lt;select name=&quot;jenis&quot; id=&quot;jenis&quot;&gt;<br />
&nbsp;&nbsp; &nbsp;&lt;option value=&#39;&#39;&gt;- PILIH -&lt;/option&gt;<br />
&nbsp;&nbsp; &nbsp;&lt;option value=&quot;BUAH&quot;&gt;BUAH&lt;/option&gt;<br />
&nbsp;&nbsp; &nbsp;&lt;option value=&quot;SAYUR&quot;&gt;SAYUR&lt;/option&gt;<br />
&lt;/select&gt;
</code></pre>

And we need to create an empty dropdown :
<pre><code>&lt;select name=&quot;nama&quot; id=&quot;nama&quot;&gt;<br />
&lt;option value=&#39;&#39;&gt;- PILIH -&lt;/option&gt;<br />
&lt;/select&gt;
</code></pre>

Next step, include jquery :
<pre><code>&lt;script src=&quot;js/jquery.min.js&quot;&gt;&lt;/script&gt;</code></pre>

And then, we create function to load dynamic data from <code>helper.php</code> :

<pre><code>&lt;script&gt;<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$(&quot;#jenis&quot;).change(function() {<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$(&quot;#nama&quot;).load(encodeURI(&quot;helper.php?jenis=&quot; + $(&quot;#jenis&quot;).val()));<br />
&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;});<br />
&lt;/script&gt;
</code></pre>

<h4>2. helper.php</h4>
This file contain <i>array data</i> that we want to load via function in <code>index.php</code>. Here is the example :
<pre><code>$array = array(<br />
&nbsp; &nbsp; &#39;PISANG&#39; =&gt; &#39;BUAH&#39;,<br />
&nbsp; &nbsp; &#39;MANGGA&#39; =&gt; &#39;BUAH&#39;,<br />
&nbsp; &nbsp; &#39;APEL&#39; =&gt; &#39;BUAH&#39;,<br />
&nbsp; &nbsp; &#39;BAYAM&#39; =&gt; &#39;SAYUR&#39;,<br />
&nbsp; &nbsp; &#39;KANGKUNG&#39; =&gt; &#39;SAYUR&#39;,<br />
&nbsp; &nbsp; &#39;BUNCIS&#39; =&gt; &#39;SAYUR&#39;);
</code></pre>

And finally, we just need to fetch the data and show it to the world :
<pre><code>while ($fruit_name = current($array)) {<br />
&nbsp; &nbsp; if ($fruit_name == $jenis) {<br />
&nbsp; &nbsp; &nbsp; &nbsp; echo &quot;&lt;option value = &#39;&quot;.key($array).&quot;&#39;&gt;&quot;.key($array).&quot;&lt;/option&gt;&quot;;<br />
&nbsp; &nbsp; }<br />
&nbsp; &nbsp; next($array);<br />
}
</code></pre>
