@extends('layouts.main')
@section('container')
    <div class="container mt-3">
        <h1 class="my-3">Blog Lists</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <a href="/create" class="btn btn-primary">Insert New Post</a>

        <table class="table table-bordered table-hover table-striped my-3">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Action</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $p)
                    <tr>
                    <th scope="row">{{ $p->id }}</th>
                    <td>
                       <a href="/edit/{{ $p->id }}" class="badge text-bg-success text-decoration-none">Edit</a>
                       <a href="/show/{{ $p->id }}" class="badge text-bg-primary text-decoration-none">Detail</a>
                       <form action="/destroy/{{ $p->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                           <button type="submit" class="badge text-bg-danger text-decoration-none">Delete</button>
                       </form>
                    </td>
                    <td>{{ $p->title }}</td>
                    <td>{{ $p->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
@endsection
