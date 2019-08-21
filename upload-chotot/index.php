<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title Page</title>
	<link rel="stylesheet" href="styles/all.min.css">
	<link rel="stylesheet" href="styles/_style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="js/all.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="row menu">
				<div class="col-md-2">
					<a class="logo" href=""><img src="images/logo.PNG" alt=""></a>
				</div>
				<div class="col-md-10 text-right">
					<ul>
						<li>
							<a href=""><i class="fas fa-search"></i><span>Tin rao vặt</span></a>
						</li>
						<li>
							<a href=""><i class="far fa-bell"></i><span>Thông báo</span></a>
						</li>
						<li>
							<a href=""><i class="far fa-comments"></i><span>Chat</span></a>
						</li>
						<li>
							<a href=""><i class="fas fa-user-tie"></i><span>Tôi bán</span></a>
						</li>
						<li>
							<a href=""><i class="fas fa-ellipsis-h"></i><span>Thêm</span></a>
						</li>
						<li>
							<a href=""><button  style="background: #d49b02; color:#ffffff;">Đăng tin</button></a>
						</li>
					</ul>
				</div>
			</div>
		</div><!-- end menu -->
		
			<section class="title">
				<div class="container">
				<div class="row">
					<div class="col-md-2 arrow-left">
						<a href=""><i class="fas fa-arrow-left"></i></a>							</div>

						<div class="col-md-8 title-hinhanh ">
							<h4>Hình ảnh</h4>
						</div>

						<div class="col-md-2 text-right  xemtruoc">
							<a href="#">Xem trước</a>
						</div>
					</div>
					<div class="green">

					</div>
					</div>
				</section>
				 <!-- end title -->
				<div class="container">
				<div class="row alert-danger ml-1 mr-1" >
					<span style="padding:20px; display:none; " id="masseges"></span>
				</div>
				<section class="upload">
					<div class="row">
						<div id="preview-item-images">
						</div>
						<div class="input">
							<form action="" method="post" enctype="multipart/form-data">
								<input style="display:none; "  type="file" id="file" name="files[]" style="" multiple>
								<a  href="javascript:void(0)" onclick="$('#file').click(); $('.s-span').remove();" ><i style=" margin-top:20px;font-size: 90px;" class="fas fa-camera"></i></a>
							</form>
						</div>
						<span class="s-span"><i class="far fa-hand-point-left"></i>Đăng ít nhất 1 hình để nhận được nhiều cuộc gọi hơn</span>
					</div>
				</section> <!-- end upload -->

				<section class="decription">
					<h4>Để nhanh tìm được sản phẩm mong muốn:</h4>
					<ul>
						<li>Đăng ảnh minh hoạ sản phẩm cần mua</li>
						<li>Đăng ảnh rõ nét, góc đẹp</li>
					</ul>
					<h4>Không nên:</h4>
					<ul>
						<li>Không chèn số điện thoại / website/ logo</li>
						<li>Không đăng hình không liên quan</li>
					</ul>
				</section>
				<footer class="end-button">
					<button class=" btn btn-default" style="width: 100%;height: 100%; font-size: 20px; font-weight: bold;color:#ffffff;" id='upload' type="submit">Tiếp tục</button>
				</footer>
			</div> 
		</div>
		
		<!-- <script>
			function changProfiles(){
				$('#file').click();
				$('.span').remove();
			}
		</script> -->
		<script src="js/jquery-3.4.1.js"></script>
		<script src="js/script.js"></script>
		<?php include('upload.php'); ?>
	</body>
	</html>