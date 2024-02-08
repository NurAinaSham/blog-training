@extends('layout.app', ['nav' => 'read'])

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
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                </h3>

                <div class="blog-post">
                    <h2 class="blog-post-title">{{ $article-> tajuk}}</h2>
                    <p class="blog-post-meta">{{$article-> tarikh_publish}} <a href="#">{{ $article-> penulis}}</a></p>

                    {{-- <p>{{ strip_tags($article-> content)  }}</p>  --}}
                    <p>{!! $article->content!!}</p>
                    
                </div><!-- /.blog-post -->
                
                {{---navbar---}}
                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="{{ route('landing') }}">Kembali</a>
                    @if(Auth::check())
                    <a class="btn btn-outline-success" href="{{ route('edit', $article->id) }}" target="_blank">Kemaskini</a>
                    @endif
                </nav>
                </br>
            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-3 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">{{ $article->about }}</p>
                </div>

                <div class="p-3">
                    <h4 class="font-italic">Social Media</h4>
                    <ol class="list-unstyled">
                        @foreach($article->socialMedia as $key => $value)
                            <li><a target="_blank"href="{{ $value->url }}">{{ $value->jenis }}</a></li>
                        @endforeach
                       
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection