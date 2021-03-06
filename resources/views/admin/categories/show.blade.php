@extends('admin.categories.layout')
@section('content')
    <div class="row">
      <div class="col-lg-12 margin-tb">
        <div class="float-left">
          <h2>Show category</h2>
        </div>
        <div class="float-right">
          <a class="btn btn-primary" href="{{ route('categories.index') }}">Back</a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Title:</strong>
          {{ $category->title }}
        </div>
        <div class="form-group">
          <strong>Slug:</strong>
          {{ $category->slug }}
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Short description:</strong>
          {{ $category->short_description }}
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Description:</strong>
          {{ $category->description }}
        </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Img:</strong>
          {{ $category->img_url }}
        </div>
      </div>

    </div>
@endsection