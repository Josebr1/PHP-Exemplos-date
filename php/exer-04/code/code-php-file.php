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
19
20
21
22
23
24
25
26</pre></td><td><pre style="margin: 0; line-height: 125%"><span style="color: #557799">&lt;?php</span>

<span style="color: #008800; font-weight: bold">function</span> <span style="color: #0066BB; font-weight: bold">verifica_date</span>(<span style="color: #996633">$dateUm</span>, <span style="color: #996633">$fragUm</span>, <span style="color: #996633">$dateDois</span>, <span style="color: #996633">$fragDois</span>)
{

<span style="color: #008800; font-weight: bold">if</span> (<span style="color: #996633">$fragUm</span> <span style="color: #333333">==</span> <span style="background-color: #fff0f0">&quot;br&quot;</span> <span style="color: #333333">||</span> <span style="color: #996633">$fragUm</span> <span style="color: #333333">==</span> <span style="background-color: #fff0f0">&quot;BR&quot;</span> <span style="color: #333333">&amp;&amp;</span> <span style="color: #996633">$fragDois</span> <span style="color: #333333">==</span> <span style="background-color: #fff0f0">&quot;br&quot;</span> <span style="color: #333333">||</span> <span style="color: #996633">$fragDois</span> <span style="color: #333333">==</span> <span style="background-color: #fff0f0">&quot;BR&quot;</span>) {
<span style="color: #996633">$intervalo</span> <span style="color: #333333">=</span> <span style="color: #007020">date_diff</span>(<span style="color: #007020">date_create</span>(<span style="color: #996633">$dateDois</span>), <span style="color: #007020">date_create</span>(<span style="color: #996633">$dateUm</span>));
<span style="color: #008800; font-weight: bold">return</span> <span style="background-color: #fff0f0">&quot;A diferença é de </span><span style="background-color: #eeeeee">{</span><span style="color: #996633">$intervalo</span> <span style="color: #333333">-&gt;</span> <span style="color: #0000CC">d</span><span style="background-color: #eeeeee">}</span><span style="background-color: #fff0f0"> dias, </span><span style="background-color: #eeeeee">{</span><span style="color: #996633">$intervalo</span> <span style="color: #333333">-&gt;</span> <span style="color: #0000CC">h</span><span style="background-color: #eeeeee">}</span><span style="background-color: #fff0f0"> horas, </span><span style="background-color: #eeeeee">{</span><span style="color: #996633">$intervalo</span> <span style="color: #333333">-&gt;</span> <span style="color: #0000CC">i</span><span style="background-color: #eeeeee">}</span><span style="background-color: #fff0f0"> minutos e </span><span style="background-color: #eeeeee">{</span><span style="color: #996633">$intervalo</span> <span style="color: #333333">-&gt;</span> <span style="color: #0000CC">s</span><span style="background-color: #eeeeee">}</span><span style="background-color: #fff0f0"> segundos&quot;</span>;
} <span style="color: #008800; font-weight: bold">else</span> {

<span style="color: #996633">$newDateUm</span> <span style="color: #333333">=</span> <span style="color: #007020">date</span>(<span style="background-color: #fff0f0">&#39;d-m-y H:i:s&#39;</span>, <span style="color: #007020">strtotime</span>(<span style="color: #996633">$dateUm</span>));
<span style="color: #996633">$newDateDois</span> <span style="color: #333333">=</span> <span style="color: #007020">date</span>(<span style="background-color: #fff0f0">&#39;d-m-y H:i:s&#39;</span>, <span style="color: #007020">strtotime</span>(<span style="color: #996633">$dateDois</span>));

<span style="color: #996633">$intervalo</span> <span style="color: #333333">=</span> <span style="color: #007020">date_diff</span>(<span style="color: #007020">date_create</span>(<span style="color: #996633">$newDateDois</span>), <span style="color: #007020">date_create</span>(<span style="color: #996633">$newDateUm</span>));
<span style="color: #008800; font-weight: bold">return</span> <span style="background-color: #fff0f0">&quot;A diferença é de </span><span style="background-color: #eeeeee">{</span><span style="color: #996633">$intervalo</span> <span style="color: #333333">-&gt;</span> <span style="color: #0000CC">d</span><span style="background-color: #eeeeee">}</span><span style="background-color: #fff0f0"> dias, </span><span style="background-color: #eeeeee">{</span><span style="color: #996633">$intervalo</span> <span style="color: #333333">-&gt;</span> <span style="color: #0000CC">h</span><span style="background-color: #eeeeee">}</span><span style="background-color: #fff0f0"> horas, </span><span style="background-color: #eeeeee">{</span><span style="color: #996633">$intervalo</span> <span style="color: #333333">-&gt;</span> <span style="color: #0000CC">i</span><span style="background-color: #eeeeee">}</span><span style="background-color: #fff0f0"> minutos e </span><span style="background-color: #eeeeee">{</span><span style="color: #996633">$intervalo</span> <span style="color: #333333">-&gt;</span> <span style="color: #0000CC">s</span><span style="background-color: #eeeeee">}</span><span style="background-color: #fff0f0"> segundos&quot;</span>;
}
}

<span style="color: #996633">$dataUmUrl</span> <span style="color: #333333">=</span> <span style="color: #996633">$_GET</span>[<span style="background-color: #fff0f0">&quot;dataUm&quot;</span>];
<span style="color: #996633">$flagUm</span> <span style="color: #333333">=</span> <span style="color: #996633">$_GET</span>[<span style="background-color: #fff0f0">&quot;flagUm&quot;</span>];

<span style="color: #996633">$dataDoisUrl</span> <span style="color: #333333">=</span> <span style="color: #996633">$_GET</span>[<span style="background-color: #fff0f0">&quot;dataDois&quot;</span>];
<span style="color: #996633">$flagDois</span> <span style="color: #333333">=</span> <span style="color: #996633">$_GET</span>[<span style="background-color: #fff0f0">&quot;flagDois&quot;</span>];

<span style="color: #008800; font-weight: bold">echo</span> verifica_date(<span style="color: #996633">$dataUmUrl</span>, <span style="color: #996633">$flagUm</span>, <span style="color: #996633">$dataDoisUrl</span>, <span style="color: #996633">$flagDois</span>);
<span style="color: #557799">?&gt;</span>
</pre></td></tr></table></div>
