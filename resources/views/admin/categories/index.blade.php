@extends('admin.categories.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>All categories here</h2>
                <p>You can manage them..</p>
            </div>
            <div class="float-right">
                <a href="{{ route('categories.create') }}" class="btn btn-success">Create new category</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Short description</th>
            <th>Description</th>
            <th>Is draft</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $category->title }}</td>
            <td>{{ $category->short_description }}</td>
            <td>{{ $category->description }}</td>
            <td>{{ $category->is_draft }}</td>
            <td>{{ $category->img_url }}</td>
            <td>
                <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-info">Show</a>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $categories->links() !!}
@endsection
