<!-- sidebar left-->
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form id="search" action="/admin/post" role="search" method="GET">
                <div class="form-group">
                    <input id="txt_search" name="search" type="text" class="form-control" placeholder="Tìm Sản phẩm" value="{{ request()->search }}">
                </div>
        </form>
                   <ul class="nav menu">
        <li class="active"><a href="/admin"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Tổng quan</a></li>
        <li><a href="/admin/category"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper" /></svg> Danh Mục</a></li>
        <li><a href="/admin/post"><i class="fas fa-file"></i> Sản Phẩm</a></li>
        <li><a href="/admin/post"><i class="fas fa-file"></i> Giới thiệu</a></li>
        <li><a href="/admin/post"><i class="fas fa-file"></i> Liên Hệ</a></li>
        <li><a href="/admin/setting"><i class="fas fa-cogs"></i> Cài đặt </a></li>
        <li role="presentation" class="divider"></li>
      
    </ul>

</div>
<script>
        var input = document.getElementById("txt_search");
        input.addEventListener("keyup", function(event) {
          if (event.keyCode === 13) {
            document.getElementById('search').submit();
          }
        });
</script>
<!--/. end sidebar left-->