@extends('admin.pages.layout')
@section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="float-left">
          <h2>Show Page</h2>
        </div>
        <div class="float-right">
          <a class="btn btn-primary" href="{{ route('pages.index') }}">Back</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Title:</strong>
          {{ $page->title }}
        </div>
        <div class="form-group">
          <strong>Slug:</strong>
          {{ $page->slug }}
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Content:</strong>
          {{ $page->content }}
        </div>
      </div>

    </div>
@endsection