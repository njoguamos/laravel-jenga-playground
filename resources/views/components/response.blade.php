<div class="mt-6 bg-white rounded-lg p-4 bg-[#2E3440]">
@if(session()->has('response'))
        <pre><code class="language-json">{{ json_encode(json_decode(session()->get('response') ), JSON_PRETTY_PRINT) }}</code></pre>
@else
    <pre><code class="language-json">{
    "info": "Fill the form and submit. API response will show here"
}</code></pre>
@endif
</div>
