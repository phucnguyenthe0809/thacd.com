@extends('frontend.master.master')
@section('content')
<main class="container">
    <div class="row">
        <!-- menu sidebar -->
        <div class="col-lg-3">

            <ul>
                <div class="head-menu"> ▶ DANH MỤC Sản phẩm</div>
                
                @foreach ($categories as $cate)
                   @if ($cate->id_parent==3)
                    <li><a href="{{ $cate->slug }}">{{ $cate->name }}</a></li>
                   @endif
                @endforeach
              
            </ul>
        </div>
        <div class="col-lg-9">
            <!-- search -->
            <div id="search">
                <input type="text" placeholder="Tìm kiếm sản phẩm"> <button type="submit"> Tìm kiếm</button>
            </div>
            <!-- content -->
            <!-- <p class="link align-self-center">Trang chủ » Sản phẩm » BỘ NGUỒN THỦY LỰC XĂNG</p> -->
            <section class="list-product">

                <h4>SẢN PHẨM NỔI BẬT</h4>
                <div class="row  text-center">
                    @foreach ($featuredPosts as $post)
                    <div class="col-lg-3 col-md-6">
                            <div class="product">
                                <a href="/{{ $post->slug }}.html">
                                    <img src="/backend/img/images/{{ $post->img }}" alt="{{ $post->title }}">
                                    <p>{{ $post->title }}</p>
                                </a>
                            </div>
                    </div>
                    @endforeach
                   
                
                </div>
                <div class="text-center"> {{ $featuredPosts->links() }}</div>
            </section>
        </div>
    </div>
</main>
@endsection