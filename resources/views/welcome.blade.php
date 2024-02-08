@extends('layout.app', ['nav' => 'index'])

@section('content')
<style>
/*
 * Footer
 */
.blog-footer {
  padding: 2.5rem 0;
  color: #999;
  text-align: center;
  background-color: #f9f9f9;
  border-top: .05rem solid #e5e5e5;
}
.blog-footer p:last-child {
  margin-bottom: 0;
}
</style>
<div class="container">
    <div class="row mb-4">

    @foreach($articles as $key => $article)
        <div class="col-md-4">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">{{$article->kategori}}</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="{{ route('read', $article->id) }}">{{ $article-> tajuk }}</a>
                    </h3>
                    <div class="mb-1 text-muted">{{ $article->tarikh_publish}}</div>
                    <p class="card-text mb-auto">{{Str::limit(strip_tags($article->content), 100, '...')}}</p>
                    <a href="{{ route('read', $article->id) }}">Continue reading</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection