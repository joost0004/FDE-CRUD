@extends ('formLayout')

@section ('content')

<div class="content">
    <section class="section">
    <h1>{{$article->title}}</h1>

    <h4>{{$article->excerpt}}</h4>

    <p>{{$article->body}}</p>
</div>

@endsection
