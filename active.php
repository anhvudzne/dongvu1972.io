<?php
include_once 'set.php';
$_title = "NRO Vũ Trụ 1 - Thanh toán";
include_once 'head.php';
if($_login == null) {header("location:/");}
$_alert = null;

if($_status == '1') {
	echo '
	<script type="text/javascript">
	
	$(document).ready(function(){
	
	  swal({
			title: "Thất bại",
			text: "Tài khoản của bạn đã được kích hoạt!",
			type: "error",
			confirmButtonText: "OK",
	  })
	});
	
	</script>
	';
}
else if($_status == '0' && $_coin < 10000)
{
	echo '
	<script type="text/javascript">
	
	$(document).ready(function(){
	
	  swal({
			title: "Số dư không đủ",
			text: "Bạn không đủ 10.000 VND. Vui lòng nạp thêm tiền vào tài khoản để mở tài khoản!",
			type: "error",
			confirmButtonText: "OK",
	  })
	});
	
	</script>
	';
}
else if($_status == '0' && $_coin >= 10000) {
	$coin = $_coin - 10000;
	$query = _query(_update('account',"active='1',vnd='$coin'","username='$_username'"));
	if($query)
	{
		echo '
		<script type="text/javascript">
		
		$(document).ready(function(){
		
		  swal({
				title: "Thành công",
				text: "Kích hoạt tài khoản thành công. Bây giờ bạn đã có thể đăng nhập vào game!",
				type: "success",
				confirmButtonText: "OK",
		  })
		});
		
		</script>
		';
	}
	else
	{
		echo '
		<script type="text/javascript">
		
		$(document).ready(function(){
		
		  swal({
				title: "Thất bại",
				text: "Có lỗi gì đó xảy ra. Vui lòng liên hệ Admin!",
				type: "error",
				confirmButtonText: "OK",
		  })
		});
		
		</script>
		';
	}
	header('location:/index.php');
	exit();
}
include_once 'index.php';
?>
