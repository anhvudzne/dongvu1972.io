<?php
   include_once 'set.php';
   include_once 'head.php';
   ?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Ngọc Rồng Vũ Trụ 1</title>
<link rel="icon" href="/img/nro.png" type="img/png">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css" />
<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
<script src="https://kit.fontawesome.com/c79383dd6c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-baUM7KUwZ0zgwyrYbMvPzuz9X2Qn1GK68WvZQT19xJpBbbwTHe8A7WgjvJPmjG9LbRrLR8dO+ZjhgzIhFq3tHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
<!--  -->
</head>
 
<style>
    .btn-primary {
        border-color: #f44336 !important;
        color: #fff !important;
    }

    .border-primary {
        border-color: #f44336 !important;
    }

    .bg-primary,
    .btn-primary {
        background-color: #f44336 !important;
    }

    .btn-outline-primary:hover {
        background-color: #f44336;
        border-color: #f44336;
    }

    .btn-outline-primary {
        color: #f44336;
        border-color: #f44336;
    }

    .feature-box {
        padding: 38px 30px;
        position: relative;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 29px 0 rgb(18 66 101 / 8%);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
        width: 100%;
    }

    .feature-icon {
        font-size: 1.8em;
        margin-bottom: 1rem;
    }

    .feature-title {
        font-size: 1.2em;
        font-weight: 500;
        padding-bottom: 0.25rem;
        text-decoration: none;
        color: #212529;
    }

    .list-group-item.active {
        background-color: #f44336;
        border-color: #f44336;
    }

    a {
        text-decoration: none;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #f44336;
    }

    .nav-link {
        color: #f44336;
    }

    .nav-link:focus,
    .nav-link:hover {
        color: #cd3a2f;
    }
    .copy-text{
        cursor: pointer;
    }
    .fa {
    font-size: 1.5em; /* Thay đổi giá trị này để điều chỉnh kích thước của icon */
}

    
</style>
<!-- Modal -->
<div class="modal fade" id="thongbao" tabindex="-1" role="dialog" aria-labelledby="thongbaolable" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="thongbaolable">Thông báo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p><b style="color:orange">Thông Báo : Chào Mừng Bạn Đến Với Trang Chủ Ngọc Rồng Vũ Trụ 1</b></p>
            <b><p class="mb-0">Sét Kích Hoạt Hoàn Toàn Miễn Phí Và Nhanh Chóng</p></b>
            <b><p class="mb-0" style="color:red">Nhóm Tin Tức Từ Đội Ngũ ADMIN NRO Vũ Trụ 1</p></b>
            <b><p class="mb-0" style="color:blue">Thân ái, Ngọc Rồng Vũ Trụ 1</p></b>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        </div>
    </div>
  </div>
</div>
<script>
    $(document).ready(function(){
    // Hiển thị thông báo
    $("#thongbao").modal('show');

    // Đóng modal popup khi nút 'Đóng' được nhấn
    $("#thongbao .close, #thongbao button[data-dismiss='modal']").click(function(){
        $("#thongbao").modal('hide');
    });

    // Đóng modal popup sau 2 giờ
    setTimeout(function(){
        $("#thongbao").modal('hide');
    }, 1000 * 60 * 120); // 1000ms * 60s * 120ph = 7200000ms
});



</script>

</style>
 
<div class="container py-3">
<main>
<section class="text-center container">
<div class="row py-md-3">
<div class="col-lg-6 col-md-8 mx-auto">
<h2 class="fw-light">Ngọc Rồng Vũ Trụ 1</h2>
 <?php if($_login == null) { ?>
  <p class="lead text-muted">
Đăng ký tài khoản nhận quà tân thủ và nhiều phần thưởng hấp dẫn.
</p>
            <nav class="my-2 my-md-0 mr-md-3">
               <a class="btn btn-outline-primary" href="/login.php" style="font-weight: 500">Đăng nhập</a>
              <a class="btn btn-outline-primary" href="/register.php" style="font-weight: 500">Đăng ký</a>
               <?php } else { ?>
              <?php
                             if($_status == "0") {
   echo '<div "lead text-muted">Mở Tính Năng Giao Dịch, Thách Đấu <a href="/active.php">Nhấn Vào Đây</a> (Phí: 10,000 VND = 10,000 COIN).</div>';
   }
   elseif($_status == "-1") {
   echo '<div "lead text-muted">Tài khoản đang bị khóa, để mở lại bạn cần phải <a href="/active.php">mở khóa tài khoản</a> (Phí: 20,000 VND = 20,000 VND).</div>';
   }
   elseif($_status == "1") {
      echo '<div "lead text-muted">Bạn Đã Nạp Lần Đầu Rồi Nhé, Chúc Các Bạn Chơi Game Vui Vẻ !</div>';
      }
                             ?>
               <?php } ?>
</div>
</div>
<div class="center">
    <div class="title-behavior">
        <marquee behavior="scroll" direction="left">Chào mừng bạn đến với máy chủ Ngọc Rồng Vũ Trụ 1, Đội ngũ ADMIN chúc các bạn có những trải nghiệm tuyệt vời khi tham gia vào máy chủ của NRO PANDA</marquee>
    </div>
</div>
<style>
    .center {
    display: flex;
    justify-content: center;
    align-items: center;
}

.title-behavior {
    width: 50%;
}
</style>
<tr>
                    <!-- <td><div>Nhận VNĐ <a href="/add_balance.php">Nhấn Vào Đây</a></div></td> -->
                    </tr>
</section>
<div class="row g-4 py-4 row-cols-1 row-cols-md-4">
<div class="col d-flex align-items-stretch">
<div class="feature-box">
<div class="text-dark">
<i class="fa fa-sharp fa-solid fa-coins"></i>
</div><br>
<div>
<a href="nap-tien.php" class="feature-title">Nạp Coin</a>
<p>Thanh toán hoàn toàn tự động, xử lý nhanh sau 1 - 5 phút.</p>
<a href="nap-tien.php" class="btn btn-primary">
Nạp ngay
</a>
</div>
</div>
</div>
<div class="col d-flex align-items-stretch">
  <div class="feature-box">
    <div class="text-dark">
    <i class="fa fa-sharp fa-solid fa-trophy"></i>
    </div><br>
    <div>
      <a href="danh-sach-top.php" class="feature-title">TOP Máy Chủ</a>
      <p>Kiểm Tra các mục top trong máy chủ</p>
      <a href="danh-sach-top.php" class="btn btn-primary">
        Xem ngay
      </a>
    </div>
  </div>
</div>

<div class="col d-flex align-items-stretch">
<div class="feature-box">
<div class="text-dark">
<i class="fa fa-solid fa-sack-dollar"></i>
</div><br>
<div>
<a href="huong-dan.php" class="feature-title">Nạp vàng</a>
<p>Thanh toán hoàn toàn tự động, xử lý ngay lập tức.</p>
<a href="huong-dan.php" class="btn btn-primary">
Nạp ngay
</a>
</div>
</div>
</div>
<div class="col d-flex align-items-stretch">
<div class="feature-box">
<div class="text-dark">
<i class="fa fa-solid fa-user-check"></i>
</div><br>
<div>
<a href="kich-hoat.php" class="feature-title">Mở thành viên</a>
<p>Mở thành viên nhận quà vip ngay nào.</p>
<a href="kich-hoat.php" class="btn btn-primary">
Mở ngay
</a>
</div>
</div>
</div>
</div>



<div class="alert alert-warning" style="background-color: #fdf8da;">
<div class="topic_name">
<div style="width: 55px; float:left; margin-right: 10px;">
<b data-bs-toggle="modal" data-bs-target="#exampleModal">
<img src="/img/avatar1.png" style="border-color:red; width: 50px; height: 55px;">
</div>
<i class="fa fa-check-circle-o" aria-hidden="true" style="color:red"></i> <a id="modal-body">Nạp Thẻ Tích Lũy
</a>
</b>
<div class="box_name_eman">bởi <b><b><font style="color:red">ADMIN</font></b></b> - <span> Xem chi tiết tại đây !!! </span> </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Nạp Thẻ Tích Lũy</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
 <div class="#modal-body">
   <div class="box_ndung_bviet"><b>CHƯA CẬP NHẬT.....</b><br>
<br></div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</main>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/app3007.js?_=1668687090"></script>
<?php
      include_once 'end.php';
      ?>
</div>