@extends('layouts.master')

@section('content')
<div class="container math-header text-center">
  <div class="row text-center">
    <div class="col-sm-3">
      <img src="/assets/img/prismic.png" alt="Prismic.io">
      <h3><a href="http://prismic.io" target="_blank">Prismic.io</a></h3>
    </div>
    <div class="col-sm-1 math">+</div>
    <div class="col-sm-3">
      <img src="/assets/img/laravel.png" alt="Laravel">
      <h3><a href="http://laravel.com" target="_blank">Laravel</a></h3>
    </div>
    <div class="col-sm-2 math">=</div>
    <div class="col-sm-3">
      <img src="/assets/img/prismoquent.png" alt="Prismoquent">
      <h3><a href="/">Prismoquent</a></h3>
    </div>
  </div>
</div>

<div class="row text-center alt">
  <p class="lead">Combining two phenomenal technologies in an effort to re-define the CMS.</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>The Model</h3>
      <pre class="prettyprint"><code>&lt;?php
use Adamgoose\PrismicIo\Model;
class Document extends Model {

  protected $endpoint = 'my-endpoint-url';
  
  protected $token = 'my-api-token';

}</code></pre>
    </div>
    <div class="col-sm-4">
      <h3>The Call</h3>
      <pre class="prettyprint"><code>&lt;?php

Route::get('{slug}', function($slug)
{
  $document = Document::findSlug($slug);

  return View::make('document')
         ->with(compact('document'));
});</code></pre>
    </div>
    <div class="col-sm-4">
      <h3>The Object</h3>
      <pre class="prettyprint"><code>&lt;h1&gt;
  &#123;&#123;$document->title&#125;&#125;
&lt;/h1&gt;

&#123;&#123;$document->body&#125;&#125;

&#64;if($document->allow_comments == 'yes')
  &lt;div id="disqus"&gt;&lt;/div&gt;
&#64;endif</code></pre>
    </div>
  </div>
</div>

@stop
