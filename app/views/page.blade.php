@extends('layouts.master')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-sm-12" id="pageContent">
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
    $("#pageContent pre").addClass('prettyprint linenums');
    $("#pageContent a").attr('target', '_blank').append(" ").append($("<span/>").addClass('fa fa-external-link'));
  });
  </script>
@stop