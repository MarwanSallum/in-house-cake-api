<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>In House Cake Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .php-example code { display: none; }
                    body .content .javascript-example code { display: none; }
                    body .content .python-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://inhousecake.co";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.11.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.11.0.js") }}"></script>

</head>

<body data-languages="[&quot;php&quot;,&quot;javascript&quot;,&quot;python&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                            <button type="button" class="lang-button" data-language-name="python">python</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-branches">
                                <a href="#endpoints-GETapi-v1-branches">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-branches">
                                <a href="#endpoints-POSTapi-v1-branches">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-branches--id-">
                                <a href="#endpoints-GETapi-v1-branches--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-branches--id-">
                                <a href="#endpoints-PUTapi-v1-branches--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-branches--id-">
                                <a href="#endpoints-DELETEapi-v1-branches--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-categories">
                                <a href="#endpoints-GETapi-v1-categories">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-categories">
                                <a href="#endpoints-POSTapi-v1-categories">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-categories--id-">
                                <a href="#endpoints-GETapi-v1-categories--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-v1-categories--id-">
                                <a href="#endpoints-PUTapi-v1-categories--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-categories--id-">
                                <a href="#endpoints-DELETEapi-v1-categories--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-product-management" class="tocify-header">
                <li class="tocify-item level-1" data-unique="product-management">
                    <a href="#product-management">Product management</a>
                </li>
                                    <ul id="tocify-subheader-product-management" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="product-management-GETapi-v1-products">
                                <a href="#product-management-GETapi-v1-products">Get a list of All Products.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="product-management-POSTapi-v1-products">
                                <a href="#product-management-POSTapi-v1-products">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="product-management-GETapi-v1-products--id-">
                                <a href="#product-management-GETapi-v1-products--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="product-management-PUTapi-v1-products--id-">
                                <a href="#product-management-PUTapi-v1-products--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="product-management-DELETEapi-v1-products--id-">
                                <a href="#product-management-DELETEapi-v1-products--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: January 9, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://inhousecake.co</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-v1-branches">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-branches">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://inhousecake.co/api/v1/branches',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/branches"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/branches'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-branches">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;982b3290-4282-42e1-a756-82a44909f7e4&quot;,
            &quot;name&quot;: &quot;Prof. Maci Strosin&quot;,
            &quot;address&quot;: &quot;7819 Rath Cape Suite 158\nKeshaunshire, AR 42700&quot;,
            &quot;status&quot;: &quot;suspended&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-4361-4275-99a5-aed1ccb019a1&quot;,
            &quot;name&quot;: &quot;Mr. Pete Nolan V&quot;,
            &quot;address&quot;: &quot;76544 Cremin River\nSouth Nilsville, TN 18835-6911&quot;,
            &quot;status&quot;: &quot;closed&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-43b1-4cf7-9efd-a81ba7d09bdc&quot;,
            &quot;name&quot;: &quot;Roxane Miller&quot;,
            &quot;address&quot;: &quot;65575 Jared Shoals\nNorth Izaiah, NC 32443&quot;,
            &quot;status&quot;: &quot;incorporation&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-43f5-4fb0-bda1-ef22ae709d01&quot;,
            &quot;name&quot;: &quot;Cindy Legros&quot;,
            &quot;address&quot;: &quot;32126 Delphia Dale Suite 361\nEast Odellchester, ME 59707&quot;,
            &quot;status&quot;: &quot;incorporation&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-4444-4d51-905e-5a1803f66327&quot;,
            &quot;name&quot;: &quot;Blaze Bartell&quot;,
            &quot;address&quot;: &quot;2884 Roob Forge Apt. 685\nSouth Quinn, ND 89725&quot;,
            &quot;status&quot;: &quot;suspended&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-448a-435d-918a-58850c63cffb&quot;,
            &quot;name&quot;: &quot;Prof. Thelma O&#039;Kon Jr.&quot;,
            &quot;address&quot;: &quot;578 Jones Junctions Apt. 364\nLake Luciuston, NE 41644-5904&quot;,
            &quot;status&quot;: &quot;suspended&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-44e2-434e-854f-cd001df34abf&quot;,
            &quot;name&quot;: &quot;Jerrell Veum III&quot;,
            &quot;address&quot;: &quot;5921 Jeramy Parks\nGerlachfurt, PA 08229-0954&quot;,
            &quot;status&quot;: &quot;closed&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-4522-4ec2-abb5-73cb63143903&quot;,
            &quot;name&quot;: &quot;Prof. Skye Bauch&quot;,
            &quot;address&quot;: &quot;322 Althea Locks\nWest Dallinfurt, ID 72384&quot;,
            &quot;status&quot;: &quot;closed&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://inhousecake.co/api/v1/branches?page=1&quot;,
        &quot;last&quot;: &quot;http://inhousecake.co/api/v1/branches?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://inhousecake.co/api/v1/branches?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://inhousecake.co/api/v1/branches&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 8,
        &quot;total&quot;: 8
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-branches" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-branches"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-branches" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-branches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-branches"></code></pre>
</span>
<form id="form-GETapi-v1-branches" data-method="GET"
      data-path="api/v1/branches"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-branches', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-branches"
                    onclick="tryItOut('GETapi-v1-branches');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-branches"
                    onclick="cancelTryOut('GETapi-v1-branches');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-branches" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/branches</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-branches"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-branches"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-branches">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-branches">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://inhousecake.co/api/v1/branches',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/branches"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/branches'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-branches">
</span>
<span id="execution-results-POSTapi-v1-branches" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-branches"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-branches" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-branches" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-branches"></code></pre>
</span>
<form id="form-POSTapi-v1-branches" data-method="POST"
      data-path="api/v1/branches"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-branches', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-branches"
                    onclick="tryItOut('POSTapi-v1-branches');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-branches"
                    onclick="cancelTryOut('POSTapi-v1-branches');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-branches" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/branches</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-branches"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-branches"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-branches--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-branches--id-">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://inhousecake.co/api/v1/branches/982b3290-4282-42e1-a756-82a44909f7e4',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/branches/982b3290-4282-42e1-a756-82a44909f7e4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/branches/982b3290-4282-42e1-a756-82a44909f7e4'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-branches--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;982b3290-4282-42e1-a756-82a44909f7e4&quot;,
        &quot;name&quot;: &quot;Prof. Maci Strosin&quot;,
        &quot;address&quot;: &quot;7819 Rath Cape Suite 158\nKeshaunshire, AR 42700&quot;,
        &quot;status&quot;: &quot;suspended&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-branches--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-branches--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-branches--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-branches--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-branches--id-"></code></pre>
</span>
<form id="form-GETapi-v1-branches--id-" data-method="GET"
      data-path="api/v1/branches/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-branches--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-branches--id-"
                    onclick="tryItOut('GETapi-v1-branches--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-branches--id-"
                    onclick="cancelTryOut('GETapi-v1-branches--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-branches--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/branches/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-branches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-branches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="GETapi-v1-branches--id-"
               value="982b3290-4282-42e1-a756-82a44909f7e4"
               data-component="url">
    <br>
<p>The ID of the branch. Example: <code>982b3290-4282-42e1-a756-82a44909f7e4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-branches--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-branches--id-">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://inhousecake.co/api/v1/branches/982b3290-4282-42e1-a756-82a44909f7e4',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/branches/982b3290-4282-42e1-a756-82a44909f7e4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/branches/982b3290-4282-42e1-a756-82a44909f7e4'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-branches--id-">
</span>
<span id="execution-results-PUTapi-v1-branches--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-branches--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-branches--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-branches--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-branches--id-"></code></pre>
</span>
<form id="form-PUTapi-v1-branches--id-" data-method="PUT"
      data-path="api/v1/branches/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-branches--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-branches--id-"
                    onclick="tryItOut('PUTapi-v1-branches--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-branches--id-"
                    onclick="cancelTryOut('PUTapi-v1-branches--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-branches--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/branches/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/branches/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-v1-branches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-v1-branches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="PUTapi-v1-branches--id-"
               value="982b3290-4282-42e1-a756-82a44909f7e4"
               data-component="url">
    <br>
<p>The ID of the branch. Example: <code>982b3290-4282-42e1-a756-82a44909f7e4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-branches--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-branches--id-">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://inhousecake.co/api/v1/branches/982b3290-4282-42e1-a756-82a44909f7e4',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/branches/982b3290-4282-42e1-a756-82a44909f7e4"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/branches/982b3290-4282-42e1-a756-82a44909f7e4'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-branches--id-">
</span>
<span id="execution-results-DELETEapi-v1-branches--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-branches--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-branches--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-branches--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-branches--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-branches--id-" data-method="DELETE"
      data-path="api/v1/branches/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-branches--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-branches--id-"
                    onclick="tryItOut('DELETEapi-v1-branches--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-branches--id-"
                    onclick="cancelTryOut('DELETEapi-v1-branches--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-branches--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/branches/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-branches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-branches--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-branches--id-"
               value="982b3290-4282-42e1-a756-82a44909f7e4"
               data-component="url">
    <br>
<p>The ID of the branch. Example: <code>982b3290-4282-42e1-a756-82a44909f7e4</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-categories">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-categories">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://inhousecake.co/api/v1/categories',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;982b3290-3b17-40c2-992d-3ec31475acc5&quot;,
            &quot;name&quot;: &quot;Kathlyn Hermann&quot;,
            &quot;status&quot;: &quot;inactive&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-3dc2-41dd-8428-479a23a4ad50&quot;,
            &quot;name&quot;: &quot;Prof. Davion Goyette&quot;,
            &quot;status&quot;: &quot;inactive&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-3e13-47cb-9298-7d73171d2182&quot;,
            &quot;name&quot;: &quot;Edmond Larson&quot;,
            &quot;status&quot;: &quot;active&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-3e6c-49e0-96b8-15391774ae09&quot;,
            &quot;name&quot;: &quot;Miss Gracie Rippin IV&quot;,
            &quot;status&quot;: &quot;active&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-3eb5-4d6c-800a-346596bafdc2&quot;,
            &quot;name&quot;: &quot;Ms. Elta Ullrich II&quot;,
            &quot;status&quot;: &quot;active&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-3efc-4371-a9ef-59c371f232f4&quot;,
            &quot;name&quot;: &quot;Emory Barton&quot;,
            &quot;status&quot;: &quot;active&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-3f42-4bed-8710-81d82959eadf&quot;,
            &quot;name&quot;: &quot;Emely Grant&quot;,
            &quot;status&quot;: &quot;active&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-3f87-4c90-ad3e-e52dfbcf68a4&quot;,
            &quot;name&quot;: &quot;Riley Stark Jr.&quot;,
            &quot;status&quot;: &quot;stopped&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-3fe6-443b-a464-28295302bd2c&quot;,
            &quot;name&quot;: &quot;Maeve Nitzsche Jr.&quot;,
            &quot;status&quot;: &quot;active&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-402a-462f-a224-800e88a30a09&quot;,
            &quot;name&quot;: &quot;Courtney Gaylord&quot;,
            &quot;status&quot;: &quot;stopped&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-4066-4107-b27e-110ed654f4f4&quot;,
            &quot;name&quot;: &quot;Kaycee Ebert&quot;,
            &quot;status&quot;: &quot;inactive&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-40a4-4437-bf9d-0a3c1db878af&quot;,
            &quot;name&quot;: &quot;Dr. Eden Gerlach&quot;,
            &quot;status&quot;: &quot;active&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://inhousecake.co/api/v1/categories?page=1&quot;,
        &quot;last&quot;: &quot;http://inhousecake.co/api/v1/categories?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://inhousecake.co/api/v1/categories?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://inhousecake.co/api/v1/categories&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 12,
        &quot;total&quot;: 12
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories"></code></pre>
</span>
<form id="form-GETapi-v1-categories" data-method="GET"
      data-path="api/v1/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-categories"
                    onclick="tryItOut('GETapi-v1-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-categories"
                    onclick="cancelTryOut('GETapi-v1-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-categories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-v1-categories">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-categories">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://inhousecake.co/api/v1/categories',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-categories">
</span>
<span id="execution-results-POSTapi-v1-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-categories" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-categories"></code></pre>
</span>
<form id="form-POSTapi-v1-categories" data-method="POST"
      data-path="api/v1/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-categories"
                    onclick="tryItOut('POSTapi-v1-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-categories"
                    onclick="cancelTryOut('POSTapi-v1-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-categories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-categories--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-categories--id-">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://inhousecake.co/api/v1/categories/982b3290-3b17-40c2-992d-3ec31475acc5',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/categories/982b3290-3b17-40c2-992d-3ec31475acc5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/categories/982b3290-3b17-40c2-992d-3ec31475acc5'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-categories--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;982b3290-3b17-40c2-992d-3ec31475acc5&quot;,
        &quot;name&quot;: &quot;Kathlyn Hermann&quot;,
        &quot;status&quot;: &quot;inactive&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories--id-"></code></pre>
</span>
<form id="form-GETapi-v1-categories--id-" data-method="GET"
      data-path="api/v1/categories/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-categories--id-"
                    onclick="tryItOut('GETapi-v1-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-categories--id-"
                    onclick="cancelTryOut('GETapi-v1-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-categories--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="GETapi-v1-categories--id-"
               value="982b3290-3b17-40c2-992d-3ec31475acc5"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>982b3290-3b17-40c2-992d-3ec31475acc5</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-v1-categories--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-categories--id-">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://inhousecake.co/api/v1/categories/982b3290-3b17-40c2-992d-3ec31475acc5',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/categories/982b3290-3b17-40c2-992d-3ec31475acc5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/categories/982b3290-3b17-40c2-992d-3ec31475acc5'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-categories--id-">
</span>
<span id="execution-results-PUTapi-v1-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-categories--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-categories--id-"></code></pre>
</span>
<form id="form-PUTapi-v1-categories--id-" data-method="PUT"
      data-path="api/v1/categories/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-categories--id-"
                    onclick="tryItOut('PUTapi-v1-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-categories--id-"
                    onclick="cancelTryOut('PUTapi-v1-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-categories--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/categories/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="PUTapi-v1-categories--id-"
               value="982b3290-3b17-40c2-992d-3ec31475acc5"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>982b3290-3b17-40c2-992d-3ec31475acc5</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-categories--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-categories--id-">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://inhousecake.co/api/v1/categories/982b3290-3b17-40c2-992d-3ec31475acc5',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/categories/982b3290-3b17-40c2-992d-3ec31475acc5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/categories/982b3290-3b17-40c2-992d-3ec31475acc5'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-categories--id-">
</span>
<span id="execution-results-DELETEapi-v1-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-categories--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-categories--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-categories--id-" data-method="DELETE"
      data-path="api/v1/categories/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-categories--id-"
                    onclick="tryItOut('DELETEapi-v1-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-categories--id-"
                    onclick="cancelTryOut('DELETEapi-v1-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-categories--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-categories--id-"
               value="982b3290-3b17-40c2-992d-3ec31475acc5"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>982b3290-3b17-40c2-992d-3ec31475acc5</code></p>
            </div>
                    </form>

                <h1 id="product-management">Product management</h1>

    <p>APIs for managing products</p>

                                <h2 id="product-management-GETapi-v1-products">Get a list of All Products.</h2>

<p>
</p>

<p>This endpoint allows you to list all products .</p>
<aside class="notice">We mean it; you really should.😕</aside>

<span id="example-requests-GETapi-v1-products">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://inhousecake.co/api/v1/products',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/products'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;982b3290-562e-41dd-8654-777c4c51ac61&quot;,
            &quot;name&quot;: &quot;Teresa Schroeder&quot;,
            &quot;description&quot;: &quot;Eligendi qui nihil temporibus autem veritatis et minus. Sed molestiae aut mollitia dolorem perspiciatis ipsa quis. Dolorum sapiente sequi tempore autem molestiae et est.&quot;,
            &quot;price&quot;: &quot;135.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;seasonal&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-568a-4880-b927-987ea19285f3&quot;,
            &quot;name&quot;: &quot;Ms. Lilyan Okuneva DVM&quot;,
            &quot;description&quot;: &quot;Quo voluptatibus quisquam nihil tenetur est. Vero magni ut expedita qui. Architecto quia tempore aliquid sit omnis. Omnis tempora et voluptate nihil aliquam consequatur veritatis.&quot;,
            &quot;price&quot;: &quot;516.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;published&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-56cf-4a43-aa1d-99567969601b&quot;,
            &quot;name&quot;: &quot;Steve Hauck Sr.&quot;,
            &quot;description&quot;: &quot;Voluptatem ut ipsa laborum ut deleniti est. Ut eaque assumenda qui eos cupiditate. Molestiae impedit alias cum sapiente tempora.&quot;,
            &quot;price&quot;: &quot;644.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;seasonal&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-5727-4128-9a76-79ad8355331d&quot;,
            &quot;name&quot;: &quot;Cleve Kutch III&quot;,
            &quot;description&quot;: &quot;Omnis excepturi unde adipisci sit. Hic fugiat occaecati magnam quis.&quot;,
            &quot;price&quot;: &quot;527.00&quot;,
            &quot;sale_price&quot;: &quot;459.00&quot;,
            &quot;sale_expire_date&quot;: &quot;2023-01-14&quot;,
            &quot;status&quot;: &quot;discounted&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-576c-4694-9f84-02b4e2d13c0c&quot;,
            &quot;name&quot;: &quot;Dr. Jefferey Huel&quot;,
            &quot;description&quot;: &quot;Non tenetur aperiam cupiditate nostrum dolorum dolorum. Ea aut similique adipisci fuga officia ea. Assumenda error praesentium labore exercitationem omnis sed.&quot;,
            &quot;price&quot;: &quot;329.00&quot;,
            &quot;sale_price&quot;: &quot;169.00&quot;,
            &quot;sale_expire_date&quot;: &quot;2023-02-02&quot;,
            &quot;status&quot;: &quot;discounted&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-57ac-4061-8a0f-0c11e2f0a908&quot;,
            &quot;name&quot;: &quot;Mrs. Lulu Kshlerin&quot;,
            &quot;description&quot;: &quot;Nihil occaecati eum totam repellendus consequatur. Itaque perferendis et sunt qui id vel animi. Et exercitationem eius labore ut temporibus dicta sed. Nisi minus unde et vel alias omnis asperiores.&quot;,
            &quot;price&quot;: &quot;446.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;seasonal&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-57f0-46d7-ad40-3859a9776f55&quot;,
            &quot;name&quot;: &quot;Jacky Schuster&quot;,
            &quot;description&quot;: &quot;Distinctio in quasi possimus quisquam. Quasi nihil sint accusantium vero sed possimus est. Ipsum et saepe impedit. Nisi sunt ratione ipsum voluptatem impedit voluptas accusamus.&quot;,
            &quot;price&quot;: &quot;311.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;stopped&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-5833-476d-95e4-fb96951d7bf2&quot;,
            &quot;name&quot;: &quot;Wilmer Schaefer&quot;,
            &quot;description&quot;: &quot;Vero non atque illum unde exercitationem vitae. Totam omnis dolorem iusto incidunt ut. Deserunt ipsum accusantium nesciunt delectus nihil.&quot;,
            &quot;price&quot;: &quot;337.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;sold-out&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-5872-4806-b197-58c5a98e16e9&quot;,
            &quot;name&quot;: &quot;Lorenzo Blanda&quot;,
            &quot;description&quot;: &quot;Temporibus quis repudiandae praesentium dolores eum. Doloremque dolorum nihil et neque cumque odit. Veritatis non et doloremque numquam vitae dolorem inventore sint.&quot;,
            &quot;price&quot;: &quot;138.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;sold-out&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-58be-4f09-903e-1a83ff6d6ce1&quot;,
            &quot;name&quot;: &quot;Constantin Rodriguez&quot;,
            &quot;description&quot;: &quot;Ut et debitis qui voluptas ea. Autem minus rerum quasi qui quod eos. Animi eos sed delectus non magnam tempora porro voluptatibus. Ipsum rerum similique est explicabo dolor quisquam.&quot;,
            &quot;price&quot;: &quot;417.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;seasonal&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-591d-46ca-8867-1db3ca91e6f3&quot;,
            &quot;name&quot;: &quot;Carrie Adams&quot;,
            &quot;description&quot;: &quot;Doloribus voluptatibus aut quod totam aperiam. Quia nesciunt nam aliquid dolorem minus suscipit necessitatibus. Vel delectus ut magnam eveniet nesciunt. Voluptatem aut ut aut.&quot;,
            &quot;price&quot;: &quot;357.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;sold-out&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-596c-4efb-b21f-6807652e78ca&quot;,
            &quot;name&quot;: &quot;Friedrich Feeney&quot;,
            &quot;description&quot;: &quot;Minima provident consectetur ut mollitia consequatur omnis est. Explicabo debitis voluptatem facilis et.&quot;,
            &quot;price&quot;: &quot;413.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;seasonal&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-59b0-44a0-98cf-2d4e221d15d8&quot;,
            &quot;name&quot;: &quot;Annie Kunze V&quot;,
            &quot;description&quot;: &quot;Voluptatibus repellat pariatur aliquid omnis libero iure quod. Molestiae at corrupti voluptatem est. Rerum omnis veniam tempora ea.&quot;,
            &quot;price&quot;: &quot;576.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;stopped&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-59ee-46d2-946c-67954f2370f5&quot;,
            &quot;name&quot;: &quot;Prof. Peyton Leuschke&quot;,
            &quot;description&quot;: &quot;Recusandae magni illum dolor excepturi incidunt fugit ratione. Eum perferendis facilis in quisquam. Laboriosam enim vitae veniam totam veniam aut doloribus. Incidunt in deserunt doloremque amet.&quot;,
            &quot;price&quot;: &quot;250.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;stopped&quot;
        },
        {
            &quot;id&quot;: &quot;982b3290-5a36-4086-ae03-bad4c3c9dfbf&quot;,
            &quot;name&quot;: &quot;Mozell Jenkins&quot;,
            &quot;description&quot;: &quot;Deserunt quam officia aut sequi sunt beatae facere. Laudantium inventore consequuntur enim. Iusto excepturi sapiente voluptatem aperiam eius sint. Ipsa voluptatum alias iure commodi dolores possimus.&quot;,
            &quot;price&quot;: &quot;283.00&quot;,
            &quot;sale_price&quot;: &quot;0.00&quot;,
            &quot;sale_expire_date&quot;: null,
            &quot;status&quot;: &quot;published&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://inhousecake.co/api/v1/products?page=1&quot;,
        &quot;last&quot;: &quot;http://inhousecake.co/api/v1/products?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://inhousecake.co/api/v1/products?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://inhousecake.co/api/v1/products?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://inhousecake.co/api/v1/products?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://inhousecake.co/api/v1/products?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://inhousecake.co/api/v1/products&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 15,
        &quot;total&quot;: 28
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products"></code></pre>
</span>
<form id="form-GETapi-v1-products" data-method="GET"
      data-path="api/v1/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-products"
                    onclick="tryItOut('GETapi-v1-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-products"
                    onclick="cancelTryOut('GETapi-v1-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-products" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="product-management-POSTapi-v1-products">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-products">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://inhousecake.co/api/v1/products',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'category_id' =&gt; 'officiis',
            'branch_id' =&gt; 'deleniti',
            'name' =&gt; 'aliquam',
            'description' =&gt; 'Exercitationem esse facere et inventore quas inventore praesentium veritatis.',
            'price' =&gt; 'at',
            'sale_expire_date' =&gt; '2023-01-09T17:36:33',
            'status' =&gt; 'seasonal',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": "officiis",
    "branch_id": "deleniti",
    "name": "aliquam",
    "description": "Exercitationem esse facere et inventore quas inventore praesentium veritatis.",
    "price": "at",
    "sale_expire_date": "2023-01-09T17:36:33",
    "status": "seasonal"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/products'
payload = {
    "category_id": "officiis",
    "branch_id": "deleniti",
    "name": "aliquam",
    "description": "Exercitationem esse facere et inventore quas inventore praesentium veritatis.",
    "price": "at",
    "sale_expire_date": "2023-01-09T17:36:33",
    "status": "seasonal"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-products">
</span>
<span id="execution-results-POSTapi-v1-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-products" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-products"></code></pre>
</span>
<form id="form-POSTapi-v1-products" data-method="POST"
      data-path="api/v1/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-products"
                    onclick="tryItOut('POSTapi-v1-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-products"
                    onclick="cancelTryOut('POSTapi-v1-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-products" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTapi-v1-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="POSTapi-v1-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="category_id"                data-endpoint="POSTapi-v1-products"
               value="officiis"
               data-component="body">
    <br>
<p>Example: <code>officiis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>branch_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="branch_id"                data-endpoint="POSTapi-v1-products"
               value="deleniti"
               data-component="body">
    <br>
<p>Example: <code>deleniti</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTapi-v1-products"
               value="aliquam"
               data-component="body">
    <br>
<p>Example: <code>aliquam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="description"                data-endpoint="POSTapi-v1-products"
               value="Exercitationem esse facere et inventore quas inventore praesentium veritatis."
               data-component="body">
    <br>
<p>Example: <code>Exercitationem esse facere et inventore quas inventore praesentium veritatis.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="price"                data-endpoint="POSTapi-v1-products"
               value="at"
               data-component="body">
    <br>
<p>Example: <code>at</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sale_price</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="sale_price"                data-endpoint="POSTapi-v1-products"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sale_expire_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="sale_expire_date"                data-endpoint="POSTapi-v1-products"
               value="2023-01-09T17:36:33"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-01-09T17:36:33</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="status"                data-endpoint="POSTapi-v1-products"
               value="seasonal"
               data-component="body">
    <br>
<p>Must be one of <code>created</code>, <code>published</code>, <code>stopped</code>, <code>seasonal</code>, <code>discounted</code>, or <code>sold-out</code>. Example: <code>seasonal</code></p>
        </div>
        </form>

                    <h2 id="product-management-GETapi-v1-products--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-products--id-">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://inhousecake.co/api/v1/products/982b3290-562e-41dd-8654-777c4c51ac61',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/products/982b3290-562e-41dd-8654-777c4c51ac61"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/products/982b3290-562e-41dd-8654-777c4c51ac61'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-products--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;982b3290-562e-41dd-8654-777c4c51ac61&quot;,
        &quot;name&quot;: &quot;Teresa Schroeder&quot;,
        &quot;description&quot;: &quot;Eligendi qui nihil temporibus autem veritatis et minus. Sed molestiae aut mollitia dolorem perspiciatis ipsa quis. Dolorum sapiente sequi tempore autem molestiae et est.&quot;,
        &quot;price&quot;: &quot;135.00&quot;,
        &quot;sale_price&quot;: &quot;0.00&quot;,
        &quot;sale_expire_date&quot;: null,
        &quot;status&quot;: &quot;seasonal&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-products--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-products--id-"></code></pre>
</span>
<form id="form-GETapi-v1-products--id-" data-method="GET"
      data-path="api/v1/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-products--id-"
                    onclick="tryItOut('GETapi-v1-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-products--id-"
                    onclick="cancelTryOut('GETapi-v1-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-products--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETapi-v1-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="GETapi-v1-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="GETapi-v1-products--id-"
               value="982b3290-562e-41dd-8654-777c4c51ac61"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>982b3290-562e-41dd-8654-777c4c51ac61</code></p>
            </div>
                    </form>

                    <h2 id="product-management-PUTapi-v1-products--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-v1-products--id-">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://inhousecake.co/api/v1/products/982b3290-562e-41dd-8654-777c4c51ac61',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'category_id' =&gt; 'laboriosam',
            'branch_id' =&gt; 'et',
            'name' =&gt; 'voluptates',
            'description' =&gt; 'Cumque ipsam provident voluptas dolores atque et.',
            'price' =&gt; 'ut',
            'sale_expire_date' =&gt; '2023-01-09T17:36:33',
            'status' =&gt; 'sold-out',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/products/982b3290-562e-41dd-8654-777c4c51ac61"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": "laboriosam",
    "branch_id": "et",
    "name": "voluptates",
    "description": "Cumque ipsam provident voluptas dolores atque et.",
    "price": "ut",
    "sale_expire_date": "2023-01-09T17:36:33",
    "status": "sold-out"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/products/982b3290-562e-41dd-8654-777c4c51ac61'
payload = {
    "category_id": "laboriosam",
    "branch_id": "et",
    "name": "voluptates",
    "description": "Cumque ipsam provident voluptas dolores atque et.",
    "price": "ut",
    "sale_expire_date": "2023-01-09T17:36:33",
    "status": "sold-out"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre></div>

</span>

<span id="example-responses-PUTapi-v1-products--id-">
</span>
<span id="execution-results-PUTapi-v1-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-v1-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-v1-products--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-v1-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-v1-products--id-"></code></pre>
</span>
<form id="form-PUTapi-v1-products--id-" data-method="PUT"
      data-path="api/v1/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-v1-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-v1-products--id-"
                    onclick="tryItOut('PUTapi-v1-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-v1-products--id-"
                    onclick="cancelTryOut('PUTapi-v1-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-v1-products--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/v1/products/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/v1/products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTapi-v1-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="PUTapi-v1-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="PUTapi-v1-products--id-"
               value="982b3290-562e-41dd-8654-777c4c51ac61"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>982b3290-562e-41dd-8654-777c4c51ac61</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="category_id"                data-endpoint="PUTapi-v1-products--id-"
               value="laboriosam"
               data-component="body">
    <br>
<p>Example: <code>laboriosam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>branch_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="branch_id"                data-endpoint="PUTapi-v1-products--id-"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="PUTapi-v1-products--id-"
               value="voluptates"
               data-component="body">
    <br>
<p>Example: <code>voluptates</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="description"                data-endpoint="PUTapi-v1-products--id-"
               value="Cumque ipsam provident voluptas dolores atque et."
               data-component="body">
    <br>
<p>Example: <code>Cumque ipsam provident voluptas dolores atque et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="price"                data-endpoint="PUTapi-v1-products--id-"
               value="ut"
               data-component="body">
    <br>
<p>Example: <code>ut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sale_price</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="sale_price"                data-endpoint="PUTapi-v1-products--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sale_expire_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="sale_expire_date"                data-endpoint="PUTapi-v1-products--id-"
               value="2023-01-09T17:36:33"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2023-01-09T17:36:33</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="status"                data-endpoint="PUTapi-v1-products--id-"
               value="sold-out"
               data-component="body">
    <br>
<p>Must be one of <code>created</code>, <code>published</code>, <code>stopped</code>, <code>seasonal</code>, <code>discounted</code>, or <code>sold-out</code>. Example: <code>sold-out</code></p>
        </div>
        </form>

                    <h2 id="product-management-DELETEapi-v1-products--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-v1-products--id-">
<blockquote>Example request:</blockquote>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://inhousecake.co/api/v1/products/982b3290-562e-41dd-8654-777c4c51ac61',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://inhousecake.co/api/v1/products/982b3290-562e-41dd-8654-777c4c51ac61"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="python-example">
    <pre><code class="language-python">import requests
import json

url = 'http://inhousecake.co/api/v1/products/982b3290-562e-41dd-8654-777c4c51ac61'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-products--id-">
</span>
<span id="execution-results-DELETEapi-v1-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-products--id-" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-products--id-"></code></pre>
</span>
<form id="form-DELETEapi-v1-products--id-" data-method="DELETE"
      data-path="api/v1/products/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-products--id-"
                    onclick="tryItOut('DELETEapi-v1-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-products--id-"
                    onclick="cancelTryOut('DELETEapi-v1-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-products--id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEapi-v1-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Accept"                data-endpoint="DELETEapi-v1-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="id"                data-endpoint="DELETEapi-v1-products--id-"
               value="982b3290-562e-41dd-8654-777c4c51ac61"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>982b3290-562e-41dd-8654-777c4c51ac61</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="python">python</button>
                            </div>
            </div>
</div>
</body>
</html>
