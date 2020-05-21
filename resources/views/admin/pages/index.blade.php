@extends('admin.pages.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>All pages here</h2>
                <p>You can manage them..</p>
            </div>
            <div class="float-right">
                <a href="{{ route('pages.create') }}" class="btn btn-success">Create new page</a>
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
            <th>Content</th>
            <th>Is draft</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pages as $page)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $page->title }}</td>
            <td>{{ $page->content }}</td>
            <td>{{ $page->is_draft }}</td>
            <td>
                <form action="{{ route('pages.destroy', $page->id) }}" method="post">
                <a href="{{ route('pages.show', $page->id) }}" class="btn btn-info">Show</a>
                <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $pages->links() !!}
@endsection
