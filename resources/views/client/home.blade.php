@extends('client.index')

@section('content')
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Tin trong ngày</h2>
                    <article class="card">
                        <div class="post-slider slider-sm">
                            <img src="/client/images/post/{{ $articles[0]->image }}" class="card-img-top" alt="post-thumb" />
                        </div>

                        <div class="card-body">
                            <h3 class="h4 mb-3">
                                <a class="post-title"
                                    href="{{ route('detail', ['id' => $articles[0]->id+1]) }}">{{ $articles[0]->title }}</a>
                            </h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>2 Min To Read
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>{{ $articles[0]->created_at }}
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item">
                                            <a href="tags.html">{{ $articles[0]->name }}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <p>
                                {{ $articles[0]->description }}
                            </p>
                            <a href="{{ route('detail', ['id' => $articles[0]->id+1]) }}" class="btn btn-outline-primary">Đọc
                                thêm</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Xu hướng</h2>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="/client/images/post/post-3.jpg" />
                            <div class="ml-3">
                                <h4>
                                    <a href="post-details.html" class="post-title">Advice From a Twenty Something</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan,
                                        2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To
                                        Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="/client/images/post/post-2.jpg" />
                            <div class="ml-3">
                                <h4>
                                    <a href="post-details.html" class="post-title">The Design Files - Homes
                                        Minimalist</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan,
                                        2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To
                                        Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <article class="card mb-4">
                        <div class="card-body d-flex">
                            <img class="card-img-sm" src="/client/images/post/post-4.jpg" />
                            <div class="ml-3">
                                <h4>
                                    <a href="post-details.html" class="post-title">The Skinny Confidential</a>
                                </h4>
                                <ul class="card-meta list-inline mb-0">
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-calendar"></i>14 jan,
                                        2020
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <i class="ti-timer"></i>2 Min To
                                        Read
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Phổ biến</h2>

                    <article class="card">
                        <div class="post-slider slider-sm">
                            <img src="/client/images/post/post-5.jpg" class="card-img-top" alt="post-thumb" />
                        </div>
                        <div class="card-body">
                            <h3 class="h4 mb-3">
                                <a class="post-title" href="post-details.html">How To Make Cupcakes and Cashmere
                                    Recipe At Home</a>
                            </h3>
                            <ul class="card-meta list-inline">
                                <li class="list-inline-item">
                                    <a href="author-single.html" class="card-meta-author">
                                        <img src="/client/images/kate-stone.jpg" alt="Kate Stone" />
                                        <span>Kate Stone</span>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-timer"></i>2 Min To Read
                                </li>
                                <li class="list-inline-item">
                                    <i class="ti-calendar"></i>14 jan, 2020
                                </li>
                                <li class="list-inline-item">
                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item">
                                            <a href="tags.html">City</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="tags.html">Food</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="tags.html">Taste</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <p>
                                It’s no secret that the digital industry is
                                booming. From exciting startups to …
                            </p>
                            <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </article>
                </div>
                <div class="col-12">
                    <div class="border-bottom border-default"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 mb-5 mb-lg-0">
                    <h2 class="h5 section-title">Tin gần đây</h2>
                    <div class="row">

                        @foreach ($articles as $art)
                            <div class="col-lg-6 col-sm-6">
                                <article class="card mb-4">
                                    <div class="post-slider slider-sm">
                                        <img style="height: 235px" src="/client/images/post/{{ $art->image }}" class="card-img-top"
                                            alt="post-thumb" />
                                    </div>
                                    <div class="card-body">
                                        <h3 class="h4 mb-3">
                                            <a class="post-title"
                                                href="{{ route('detail', ['id' => $art->id+1]) }}">{{ $art->title }}</a>
                                        </h3>
                                        <ul class="card-meta list-inline">
                                            <li class="list-inline-item">
                                                <i class="ti-timer"></i>3 Min To Read
                                            </li>
                                            <li class="list-inline-item">
                                                <i class="ti-calendar"></i>{{ $art->created_at }}
                                            </li>
                                            <li class="list-inline-item">
                                                <ul class="card-meta-tag list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="tags.html">{{ $art->name }}</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <p>{{ $art->description }}</p>
                                        <a href="{{ route('detail', ['id' => $art->id+1]) }}" class="btn btn-outline-primary">Read More</a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>


                <aside class="col-lg-4 @@sidebar">
                    <!-- categories -->
                    <div class="widget widget-categories">
                        <h4 class="widget-title">
                            <span>Danh mục</span>
                        </h4>
                        <ul class="list-unstyled widget-list">
                            @foreach ($articles as $cat)
                                <li>
                                    <a href="tags.html" class="d-flex">{{ $cat->name }}<small
                                            class="ml-auto">(4)</small></a>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                    <!-- tags -->
                    {{-- <div class="widget">
                        <h4 class="widget-title"><span>Tags</span></h4>
                        <ul class="list-inline widget-list-inline widget-card">
                            <li class="list-inline-item">
                                <a href="tags.html">City</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Color</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Creative</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Decorate</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Demo</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Elements</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Fish</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Food</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Nice</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Recipe</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Season</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Taste</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Tasty</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Vlog</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="tags.html">Wow</a>
                            </li>
                        </ul>
                    </div> --}}
                    <!-- recent post -->
                    <div class="widget">
                        <h4 class="widget-title">Bài đăng gần đây</h4>

                        <!-- post-item -->

                        @foreach ($articles as $art)
                            <article class="widget-card">
                                <div class="d-flex">
                                    <img class="card-img-sm" src="/client/images/post/{{$art->image}}" />
                                    <div class="ml-3">
                                        <h5>
                                            <a class="post-title" href="{{ route('detail', ['id' => $art->id+1]) }}"> {{$art->title}} </a>
                                        </h5>
                                        <ul class="card-meta list-inline mb-0">
                                            <li class="list-inline-item mb-0">
                                                <i class="ti-calendar"></i>{{$art->created_at}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </article>

                        @endforeach

                        
                    </div>

                    <!-- Social -->
                    <div class="widget">
                        <h4 class="widget-title">
                            <span>Social Links</span>
                        </h4>
                        <ul class="list-inline widget-social">
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-twitter-alt"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-github"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
