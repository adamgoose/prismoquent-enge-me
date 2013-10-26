@extends('layouts.master')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h2>Contents</h2>
        //links
      </div>
      <div class="col-sm-9">
        <h2>{{$page->get('doc.title')->asText()}}</h2>
        
        {{$page->get('doc.content')->asHtml()}}
      </div>
    </div>
  </div>

@stop