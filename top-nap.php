<?php
$_alert = null;
$_title = "NRO PANDA - TOP NAP";
include_once 'head.php';
include 'connect.php';
include_once('config.php');
?>
<style>
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
</style>
<section class="text-center container">
<h2 class="fw-light">TOP NẠP THẺ</h2>
</section>
<main class="c-layout-page custom-slide mt-header">
    </br>
        <main>
        <div class="container py-3">
    <div class="row">
        <div class="col-md-3 pb-3 pt-2">
            <div class="list-group d-none d-sm-block">
                <a href="index.php" class="list-group-item list-group-item-action ">
                    <i class="fas fa-user me-2"></i> Trang Chủ
                </a>
                <a href="Top-nap.php" class="list-group-item list-group-item-action active">
                    <i class="fas fa-coins me-2"></i> Top Nạp
                </a>
                <a href="Top-suc-manh.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-trophy me-2"></i> Sức Mạnh
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    <i class="fas fa-sign-out-alt me-2"></i> Top Sự Kiện
                </a>
            </div>
        </div>   
<div class="col-md-9 pb-3 pt-2">
<div class="card-body">
<table class="table table-bordered blueTable my-table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Game</th>
            <th>Tổng Nạp</th>
        </tr>
    </thead>  
    <tbody>
    <?php 
include("./api/config.php");
include('connect.php');

$query = "SELECT username, SUM(tongnap) AS tongnap FROM `account` GROUP BY username ORDER BY tongnap DESC LIMIT 10";
$result = $conn->query($query);

$stt = 1;
if ($result === false) {
    echo 'Lỗi truy vấn SQL: '.$conn->error;
} elseif ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <td>'.$stt.'</td>
            <td>'.$row['username'].'</td>
            <td>'.number_format($row['tongnap']).'đ</td>
        </tr>
        ';
        $stt++;
    }
} else {
    echo '
    <tr>
        <td colspan="3" align="center"><span style="font-size:100%;"><< Lịch Sử Trống >></span></td>
    </tr>
    ';
}

// Đóng kết nối
$conn->close();
?>


    </tbody>
</table>
</div>
</div>
</div>
    </div>
    </div>
<?php   
include_once('end.php');
?>