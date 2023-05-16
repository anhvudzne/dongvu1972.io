<?php
include_once 'set.php';
$_title = "NRO VŨ TRỤ 1 - Đăng Ký";
include_once 'head.php';
include('connect.php');

$_alert = '';

// Giới hạn số lượng tài khoản đăng ký từ cùng một địa chỉ IP
$max_accounts_per_ip = 15;
$num_accounts = count_accounts_by_ip($_SERVER['REMOTE_ADDR']);
if ($num_accounts >= $max_accounts_per_ip) {
    $_alert = '<div class="alert alert-danger">Bạn đã đăng ký quá số lượng tài khoản cho phép từ cùng địa chỉ IP!</div>';
}

if ($_login == null && isset($_POST['username'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, trim($_POST['password']));
    $repassword = mysqli_real_escape_string($conn, trim($_POST['repassword']));

    if ($num_accounts < $max_accounts_per_ip) {
        if (strcmp($password, $repassword) == 0) {
            // Kiểm tra xem username này đã tồn tại hay chưa
            $read = _select("*", 'account', "username='$username'");
            $existing_account = _fetch($read);
            if (is_array($existing_account)) {
                $_alert = '<div class="alert alert-danger">Tài khoản này đã tồn tại, vui lòng chọn tài khoản khác!</div>';
            } else {
                // Thực hiện INSERT tài khoản vào CSDL
                $txt = _insert('account', 'username,password,ip_address', "'$username','$password','{$_SERVER['REMOTE_ADDR']}'");
                $kiemtra = _query($txt);
                if ($kiemtra) {
                    $_alert = '<div class="alert alert-success">Đăng kí thành công!!</div>';
                }
            }
        } else {
            $_alert = '<div class="alert alert-danger">Hai mật khẩu không khớp nhau, vui lòng kiểm tra lại!</div>';
        }
    } else {
        $_alert = '<div class="alert alert-danger">Bạn đã đăng ký quá số lượng tài khoản cho phép từ cùng địa chỉ IP!</div>';
    }
}


function count_accounts_by_ip($ip_address) {
    global $conn;
    $count = 0;
    $result = _select("COUNT(*) as count", "account", "ip_address='$ip_address'");
    if ($row = _fetch($result)) {
        $count = $row['count'];
    }
    return $count;
}

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Ngọc Rồng PANDA</title>
<link rel="icon" href="assets/images/nro.png" type="image/png">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css" />
<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../www.google.com/recaptcha/api.js" async defer></script>
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
</style><body>
<div class="container py-3">
<header>
</header>

<main>
<form class="form-signin" method="POST">
<h1 class="h3 mb-3 font-weight-normal text-center">Nhập thông tin đăng ký</h1>
 <input type="hidden" name="_token" value="JEGpj39vMoqzUAPDoHWTY8Y4jJiy4t0mhPST9nds">
 <?php
if (!empty($_alert)) {
    echo $_alert;
}
?>
			<div class="form-group">
                <label>Tài khoản</label>
                <input type="text" class="form-control" placeholder="Tài khoản" required="" name="username" value="">
            </div>

            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="password">
            </div>
            <div class="form-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="repassword">
            </div><br>
<button class="btn btn-primary w-100" type="submit">Đăng ký</button>
<div class="text-center pt-2">
Bạn đã có tài khoản? <a href="login.php">Đăng nhập ngay</a>
</div>
<div class="text-center pt-2">
<a href="#">Quên mật khẩu</a>
</div>
</form>
<style>
        .form-signin {
                width: 100%;
                max-width: 400px;
                padding: 15px;
                margin: 0 auto;
            }

            .form-signin .checkbox {
                font-weight: 400;
            }
    </style>
</main>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/appa368.js?_=1668687096"></script>
		<?php
include_once 'end.php';
?>
</div>
