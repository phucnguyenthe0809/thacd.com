@extends('frontend.master.master')
@section('content')

<main class="container">
    <div class="row">
        <!-- menu sidebar -->
        <div class="col-lg-3">

            <ul>
                <div class="head-menu"> ▶ DANH MỤC Sản phẩm</div>
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
        <div class="col-lg-9">
            <!-- search -->
            <div id="search">
                <input type="text" placeholder="Tìm kiếm sản phẩm"> <button type="submit"> Tìm kiếm</button>
            </div>
            <!-- content -->
            <p class="link align-self-center">Trang chủ » Sản phẩm » BỘ NGUỒN THỦY LỰC XĂNG</p>
            <section class="category">
                <div class="product">
                    <img src="img/product.jpg" alt="">

                </div>
                <p>
                    Hãng sản xuất: TRITORC - USA <br>
                    Số lượng có sẵn: 1 <br>
                    Bảo hành: 12 tháng <br>
                </p>
                <span>
                    CHI TIẾT SẢN PHẨM
                </span>
                <p class="describe">
                    THÔNG TIN CỜ LÊ THỦY LỰC TRÒNG TRITORC:
                    Cờ lê thủy lực hay còn gọi là Hydraulic torque của TRITORC / USA được chế tạo bằng thép hợp kim.
                    Cờ lê thủy lực có sai số lực siết: +/-3%.
                    Dòng cờ lê thủy lực tròng này dùng siết bulon-đai ốc trong các trường hợp không gian siết chật hẹp
                    với lực siết chính xác.
                    Mỗi model cờ lê thủy lực có thể dùng cho nhiều size bulon/đai ốc khác nhau bằng cách thay đổi
                    Ratchet Link hoặc dùng Reducer giảm size.
                    Đảo chiều cờ lê thủy lực đơn giản giúp thao tác tháo siết/mở đai ốc một cách dễ dàng.
                    Sử dụng với bơm điện thủy lực hoặc bơm khí nén, điều chỉnh lực bằng cách cài đặt lực áp suất thông
                    qua van điều áp trên bơm thủy lực.
                    Quy cách đóng gói: hộp nhựa.

                </p>

            </section>
        </div>
    </div>
</main>
<!-- footer -->
@endsection
