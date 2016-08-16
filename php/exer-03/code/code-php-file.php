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
17
18
19</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span>

<span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">array_date</span>(<span style="color: #996633">$date</span>)
{
<span style="color: #996633">$arrayData</span> <span style="color: #333333">=</span> <span style="color: #008800; font-weight: bold">array</span>(<span style="background-color: #fff0f0">&quot;Ano: &quot;</span> <span style="color: #333333">=&gt;</span> <span style="color: #007020">date</span>(<span style="background-color: #fff0f0">&#39;y&#39;</span>, <span style="color: #007020">strtotime</span>(<span style="color: #996633">$date</span>)), <span style="background-color: #fff0f0">&quot;Mês: &quot;</span> <span style="color: #333333">=&gt;</span> <span style="color: #007020">date</span>(<span style="background-color: #fff0f0">&#39;m&#39;</span>, <span style="color: #007020">strtotime</span>(<span style="color: #996633">$date</span>)),
<span style="background-color: #fff0f0">&quot;Dia: &quot;</span> <span style="color: #333333">=&gt;</span> <span style="color: #007020">date</span>(<span style="background-color: #fff0f0">&#39;d&#39;</span>, <span style="color: #007020">strtotime</span>(<span style="color: #996633">$date</span>)), <span style="background-color: #fff0f0">&quot;Horas: &quot;</span> <span style="color: #333333">=&gt;</span> <span style="color: #007020">date</span>(<span style="background-color: #fff0f0">&#39;H&#39;</span>, <span style="color: #007020">strtotime</span>(<span style="color: #996633">$date</span>)),
<span style="background-color: #fff0f0">&quot;Minutos: &quot;</span> <span style="color: #333333">=&gt;</span> <span style="color: #007020">date</span>(<span style="background-color: #fff0f0">&#39;i&#39;</span>, <span style="color: #007020">strtotime</span>(<span style="color: #996633">$date</span>)), <span style="background-color: #fff0f0">&quot;Segundos: &quot;</span> <span style="color: #333333">=&gt;</span> <span style="color: #007020">date</span>(<span style="background-color: #fff0f0">&#39;s&#39;</span>, <span style="color: #007020">strtotime</span>(<span style="color: #996633">$date</span>)));

<span style="color: #008800; font-weight: bold">return</span> <span style="color: #996633">$arrayData</span>;
}


<span style="color: #996633">$dataUrl</span> <span style="color: #333333">=</span> <span style="color: #996633">$_GET</span>[<span style="background-color: #fff0f0">&quot;data&quot;</span>];

<span style="color: #996633">$return</span> <span style="color: #333333">=</span> array_date(<span style="color: #996633">$dataUrl</span>);

<span style="color: #007020">print_r</span>(<span style="color: #996633">$return</span>);

<span style="color: #557799">?&gt;</span>
</pre></td></tr></table></div>
