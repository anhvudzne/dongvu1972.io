<?php
include('set.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start(); //khởi động phiên làm việc
}

$_alert = null;
$_title = "NRO VŨ TRỤ 1 - Thanh Toán";
include_once 'head.php';
include_once('connect.php');
if($_login == null) {header("location:/login.php");}
?>

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
		<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
		<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" /> -->
		<link rel="stylesheet" href="https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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

    .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
        background-color: #f44336;
    }

    .nav-link {
        color: #f44336;
    }

    .nav-link:focus, .nav-link:hover {
        color: #cd3a2f;
    }

</style>
<main class="flex-grow-1 flex-shrink-1">
<script type="text/javascript"> new WOW().init(); </script>
</br>
    <div class="container py-3">
         <main>    
                <div class="row">
        <div class="col-md-3 pb-3 pt-2">
        <div class="list-group d-none d-sm-block">
                        <a href="profile.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-user me-2"></i> Thông tin tài khoản
                        </a>
                        <a href="nap-tien.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-coins me-2"></i> Nạp thẻ cào
                        </a>


                        <a href="lich-su-nap.php" class="list-group-item list-group-item-action active">
                            <i class="fas fa-credit-card me-2"></i> Lịch sử nạp
                        </a>
                        <a href="/?out" class="list-group-item list-group-item-action ">
                            <i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
                        </a>

                    </div>
        </div>
                  <div class="col-md-9 pb-3 pt-2">
                    <h3>Lịch Sử Nạp Thẻ</h3>
                        <table class="table">
	<div class="row">
                </div>
                <div class="col-4 text-right">
                </div>
              </div>
            </div>
    <div class="py-3 text-center">
        <div class="table-responsive">
           
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>LOẠI</th>
                        <th>TRẠNG THÁI</th>
                        <th>MỆNH GIÁ</th>
                        <th>THỜI GIAN</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php 
    $data = _query(_select("*", "recharge_card", "player_id='" . mysqli_real_escape_string($conn, $_username) . "' ORDER BY account_id DESC"));
    if(mysqli_num_rows($data) == 0){ ?>
        <tr>
            <td colspan="5" class="text-center">Lịch sử nạp trống</td>
        </tr>
    <?php } else {
        $i = 1; 
        while ($row = mysqli_fetch_assoc($data)) {
    ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo htmlspecialchars($row['card_detail_id']); ?></td>
                <td><?php echo get_string_tinhtrangthe($row['status']); ?></td>
                <td><?php echo number_format($row['recharge_card_id']); ?>đ</td>
                <td><?php echo date("H:i - d/m/Y", $row['create']); ?></td>
            </tr>
    <?php 
        }
    }
?>

                </tbody>
            </table>
        </div>

        <div id="status"></div>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
         <!-- Code made in tui 127.0.0.1 -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
			<?php
include_once 'end.php';
?>
		</div>
	</main>
