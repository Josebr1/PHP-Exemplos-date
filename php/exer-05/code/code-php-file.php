<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><table><tr><td><pre style="margin: 0; line-height: 125%"> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span>
<span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">validate_date</span>(<span style="color: #996633">$date</span>)
{
<span style="color: #996633">$format</span> <span style="color: #333333">=</span> <span style="background-color: #fff0f0">&#39;Y-m-d&#39;</span>;
<span style="color: #996633">$d</span> <span style="color: #333333">=</span> DateTime<span style="color: #333333">::</span><span style="color: #0000CC">createFromFormat</span>(<span style="color: #996633">$format</span>, <span style="color: #996633">$date</span>);
<span style="color: #996633">$return</span> <span style="color: #333333">=</span> <span style="color: #996633">$d</span> <span style="color: #333333">&amp;&amp;</span> <span style="color: #996633">$d</span><span style="color: #333333">-&gt;</span><span style="color: #0000CC">format</span>(<span style="color: #996633">$format</span>) <span style="color: #333333">==</span> <span style="color: #996633">$date</span>;
    <span style="color: #008800; font-weight: bold">if</span>(<span style="color: #996633">$return</span> <span style="color: #333333">==</span> <span style="color: #0000DD; font-weight: bold">1</span>){
        <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;Verdadeiro&quot;</span>;
    }<span style="color: #008800; font-weight: bold">else</span>{
        <span style="color: #008800; font-weight: bold">echo</span> <span style="background-color: #fff0f0">&quot;Falso&quot;</span>;
    }
}

<span style="color: #996633">$dataUrl</span> <span style="color: #333333">=</span> <span style="color: #996633">$_GET</span>[<span style="background-color: #fff0f0">&quot;data&quot;</span>];

validate_date(<span style="color: #996633">$dataUrl</span>);
<span style="color: #557799">?&gt;</span>
</pre></td></tr></table></div>
