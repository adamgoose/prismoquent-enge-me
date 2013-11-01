@extends('layouts.master')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h3>Contents</h3>
        <ul>
          <li><a href="#top">{{$page->get('doc.title')->asText()}}</a></li>
      @foreach($page->get('doc.content')->getBlocks() as $block)
        @if($block instanceof \Prismic\Fragment\Block\HeadingBlock)
          <li style="margin-left: {{$block->getLevel()*15-30}}px;">
            <a href="#{{str_replace('`', '', $block->getText())}}">{{preg_replace('/\`(.*?)\`/', '<code>$1</code>', $block->getText())}}</a>
          </li>
        @endif
      @endforeach
        </ul>
      </div>
      <div class="col-sm-9" id="pageContent">
        <h2>{{$page->get('doc.title')->asText()}}</h2>
        
        {{preg_replace('/\`(.*?)\`/', '<code>$1</code>', $page->get('doc.content')->asHtml())}}
      </div>
    </div>
  </div>

@stop

@section('scripts')
  <script>
  $(function()
  {
    $("h1, h2, h3", $("#pageContent")).prepend(function() {
      return $("<a/>").attr('name', $(this).text().replace('<code>', '').replace('</code>', ''));
    });
    $("#pageContent pre").addClass('prettyprint linenums');
    $("#pageContent a[href]").attr('target', '_blank').append(" ").append($("<span/>").addClass('fa fa-external-link'));
  });
  </script>
@stop