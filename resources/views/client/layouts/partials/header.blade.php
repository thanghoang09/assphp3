<div class="container">
    <nav class="navbar navbar-expand-lg navbar-white">
        <a class="navbar-brand order-1" href="{{route('home')}}">
            <img class="img-fluid" width="100px" src="/client/images/logo.png"
                alt="Reader | Hugo Personal Blog Template" />
        </a>
        <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
            <ul class="navbar-nav mx-auto">
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" href="{{ route('home') }}" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Trang chủ 
                    </a>
                </li> --}}
                @foreach ($categories as $category)
                    <li class="nav-item dropdown">
                        <a class="nav-link"
                            href="{{ route('category', ['id' => $category->id]) }}">{{ $category->name }}</a>
                    </li>
                @endforeach

                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Liên hệ</a>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Tài khoản</a>
                </li>

            </ul>
        </div>

        <div class="order-2 order-lg-3 d-flex align-items-center">
            <!-- search -->
            <form class="search-bar" action="{{ route('search') }}" method="get">
                @csrf
                <input id="search-query" name="keyword" type="search" placeholder="Từ khóa &amp; Tìm kiếm..." />

                {{-- <a type="button" href="{{route('search') }}">TÌm</a> --}}
                <input type="submit" value="Tìm kiếm">

            </form>

        </div>
    </nav>
</div>
