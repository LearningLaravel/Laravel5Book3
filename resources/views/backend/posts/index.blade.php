@extends('master')
@section('title', 'All posts')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2> All posts </h2>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($posts->isEmpty())
                <p> There is no post.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Updated At</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{!! $post->id !!}</td>
                            <td>
                                <a href="{!! action('Admin\PostsController@edit', $post->id) !!}">{!! $post->title !!} </a>
                            </td>
                            <td>{!! $post->slug !!}</td>
                            <td>{!! $post->created_at !!}</td>
                            <td>{!! $post->updated_at !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection