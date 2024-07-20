@extends('client.index')

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 mb-4">
                    <h1 class="h2 mb-4">
                        {{-- @php
                            $cat = '';
                            if ($articles->category_id == 1) {
                                $cat = 'Bóng đá';
                            }
                            else if($articles->category_id == 2) {
                                $cat = 'Tin tức'; 
                            }
                        @endphp
                        Danh mục {{ $cat }} --}}
                    </h1>
                </div>
                <div class="col-lg-10">

                    @foreach ($articles as $art)
                        <article class="card mb-4">
                            <div class="row card-body">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <div class="post-slider slider-sm">
                                        <img src="/client/images/post/{{$art->image}}" class="card-img" alt="post-thumb"
                                            style="
                                            height: 200px;
                                            object-fit: cover;
                                        " />
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="h4 mb-3">
                                        <a class="post-title" href="{{ route('detail', ['id' => $art->id]) }}">{{$art->title}}</a>
                                    </h3>
                                    <ul class="card-meta list-inline">
                                        <li class="list-inline-item">
                                            <i class="ti-timer"></i>3 Min To
                                            Read
                                        </li>
                                        <li class="list-inline-item">
                                            <i style="color: #585454" class="ti-calendar">{{$art->created_at}}</i>
                                        </li>
                                        
                                    </ul>
                                    <p>
                                        {{$art->description}}
                                    </p>
                                    <a href="{{ route('detail', ['id' => $art->id]) }}" class="btn btn-outline-primary">Đọc thêm</a>
                                </div>
                            </div>
                        </article>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </section>
@endsection
