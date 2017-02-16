@extends('master')
@section('title', 'View a post')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <div class="content">
                <h2 class="header">{!! $post->title !!}</h2>
                <p> {!! $post->content !!} </p>
            </div>
            <div class="clearfix"></div>
        </div>

        @foreach($comments as $comment)
            <div class="well well bs-component">
                <div class="content">
                    {!! $comment->content !!}
                </div>
            </div>
        @endforeach

        <div class="well well bs-component">
            <form class="form-horizontal" method="post" action="/comment">

                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <input type="hidden" name="post_id" value="{!! $post->id !!}">
                <input type="hidden" name="post_type" value="App\Post">

                <fieldset>
                    <legend>Comment</legend>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

@endsection
