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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
    
</style>
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
   echo '<div "lead text-muted">Mở Tính Năng Giao Dịch, Thách Đấu <a href="/active.php">Nhấn Vào Đây</a> (Phí: 20,000 VND = 20,000 VND).</div>';
   }
   elseif($_status == "1") {
   echo '<div "lead text-muted">Tài khoản đã được kích hoạt</a> (Phí: 10,000 VND = 10,000 VND).</div>';
   }
                             ?>
               <?php } ?>
</div>
</div>
<div class="center">
    <div class="title-behavior">
        <marquee behavior="scroll" direction="left">Chào mừng bạn đến với máy chủ Ngọc Rồng Vũ Trụ 1, Đội ngũ ADMIN chúc các bạn có những trải nghiệm tuyệt vời khi tham gia vào máy chủ của PANDA</marquee>
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
                    <td><div>Nhận VNĐ <a href="/add_balance.php">Nhấn Vào Đây</a></div></td>
                    </tr>
</section>
 
<div class="row g-4 py-4 row-cols-1 row-cols-md-4">
<div class="col d-flex align-items-stretch">
  <div class="feature-box">
    <div class="text-dark">
    <i class="fa fa-donate"></i>
    </div>
    <div>
      <a href="top-nap.php" class="feature-title">TOP NẠP</a>
      <p>Kiểm Tra đua top Xem</p>
      <a href="top-nap.php" class="btn btn-primary">
        Xem ngay
      </a>
    </div>
  </div>
</div>

<div class="col d-flex align-items-stretch">
<div class="feature-box">
<div class="text-dark">
<i class="fa fa-trophy"></i>
</div>
<div>
<a href="top-suc-manh.php" class="feature-title">TOP SỨC MẠNH</a>
<p>Kiểm tra đua top sức mạnh.</p>
<a href="top-suc-manh.php" class="btn btn-primary">
Xem ngay
</a>
</div>
</div>
</div>
<div class="col d-flex align-items-stretch">
<div class="feature-box">
<div class="text-dark">
<i class="fas fa-star" aria-hidden="true"></i>
</div>
<div>
<a href="top-su-kien.php" class="feature-title">TOP SỰ KIỆN</a>
<p>Kiểm tra đua top sự kiện.</p>
<a href="top-su-kien.php" class="btn btn-primary">
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
<i class="fa fa-check-circle-o" aria-hidden="true" style="color:red"></i> <a id="modal-body">Xem Thẻ Tích Lũy
</a>
</b>
<div class="box_name_eman">bởi <b><b><font style="color:red">ADMIN</font></b></b> - <span> Xem chi tiết tại đây !!! </span> </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Xem Thẻ Tích Lũy</h5>
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