@extends('layouts.main')
@section('container')
    <div class="container my-3">
        <h1 class="my-3">Add a Post</h1>

        <div class="container">
            <form action="/store" method="post">
                <input type="hidden" name="user_id" value="2">
                @csrf
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>
                                <label for="name">Title</label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="title" placeholder="Write Your Title" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="content">Content</label>
                            </td>
                            <td>
                                <textarea class="form-control" name="content" rows="3" placeholder="Write Your Content" required></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-primary">Reset</button>
                <a href="/" class="btn btn-dark">Back</a>
            </form>
        </div>
    </div>
@endsection
