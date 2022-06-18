@extends('formLayout')

@section('content')

<div id='wrapper'>
    <div id='page' class='container'>
        <section class="section"></section>
        <h1 class='has-text-weight-bold is-size-4'>New Article</h1>
        <section class="section"></section>

        <form method='POST' action="/articles/{{$article->id}}">
            @method('PUT')
            @csrf

            <div class='field'>
                <p class='title is-4 star' for='title' data-end=" *">Title</p>

                <div class='control'>
                <input
                class='input @error('title') is-danger @enderror'
                type='text'
                name='title'
                id='title'
                value='{{$article->title}}'
                placeholder='Enter a title for your article'>

                @error('title')
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                @enderror
            </div>
            </div>



            <div class='field'>
                <p class='title is-4 star' for='excerpt' data-end=" *">Excerpt</p>

                <div class='control'>
                <textarea
                class='textarea @error('excerpt') is-danger @enderror'
                name='excerpt'
                id='excerpt'
                placeholder='Enter an excerpt for your article'
                >{{$article->excerpt}}</textarea>

                @error('excerpt')
                    <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                @enderror
            </div>
            </div>



            <div class='field'>
                <p class='title is-4 star' for='body' data-end="*">
                    Body
                </p>

                <div class='control'>
                <textarea
                class='textarea @error('body') is-danger @enderror'
                name='body'
                id='body'
                placeholder='Enter the main text for your article'
                >{{$article->body}}</textarea>

                @error('body')
                    <p class="help is-danger">{{$errors->first('body')}}</p>
                @enderror
            </div>
            </div>

            <div classs='field is-grouped'>
                <div class="control">
                    <button class='button is-link' type='submit'>Submit</button>
                </div>
            </div>

        </form>

        <form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('DELETE')
            <button class='button is-link' type="submit">Delete</button>
        </form>
        <br>
        <p class="help is-danger is-large">
            * This field is required.
        </p>

    </div>
</div>

@endsection
