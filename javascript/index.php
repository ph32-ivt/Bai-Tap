<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title Page</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="ex3.css">
	<!-- jQuery -->
	<script src="//code.jquery.com/jquery.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<!-- <script src="Hello World"></script> -->
	<script src="ex3.js"></script>
	
</head>
<body>
	<div class="wrapper">	
		<div class="container">
			<header>
				<div class="top-menu">
					<div class="row">
						<div class="col-md-4">
							<div class="logo">
								<img src="images/6.png" alt="">
							</div>
						</div>
						<div class="col-md-8">
							<div class="menu">
								<ul>
									<li>
										<img src="images/8.png" alt="">
										<a href="#">Tìm rao vặt</a>
									</li>
									<li>
										<img src="images/3.png" alt="">
										<a href="#">Thông báo</a>
									</li>
									<li>
										<img src="images/4.png" alt="">
										<a href="#">Chat</a>
									</li>
									<li>
										<img src="images/9.png" alt="">
										<a href="#">Tôi bán</a>
									</li>
									<li>
										<img src="images/7.png" alt="">
										<a href="#">Thêm</a>
									</li>
									<li>
										<button class="dangtin">ĐĂNG TIN</button>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</header>
			<div class="view">
				<div class="row">
					<div class="col-md-4 align">
						<i class="fa fa-chevron-left" aria-hidden="true"></i>
					</div>
					<div class="col-md-4 text-center align">
						<strong>Hình ảnh</strong>
					</div>
					<div class="col-md-4 align" style="text-align: right;">
						Xem trước
					</div>
				</div>
				<div class="green">
					
				</div>
			</div>

			<div class="content">
				<section class="image">
					<div class="row">
						<div class="img" id="preview">
						</div>
						<form action="" method="POST" enctype="multipart/form-data">

							<input style="display: none" type="file" id="files" name="file[]" multiple />
							<div id="list">

							</div>

							<div class="button-change">
								<a id="change"  href="javascript:changeProfile(this)"><img src="icon-camera.png" alt=""></a>
							</div>

						</form>
					</div>
					<div class="col-sm-10"></div>
					<div class="col-sm-2">
						<button class="btn btn-info mb-4" name="upload" id="upload">next</button>
					</div>
				</section>
				<section class="alert-info" style="width: 100%; height: 35px">
					
				</section>
				<section class="decription alert-info mt-5" style="padding:50px; margin-top: 40px;">
					<h4 style="color:black">Để bán nhanh hơn, nên chụp:</h4>
					<ul>
						<li>Khổ ngang để hình đẹp hơn</li>
						<li>Ngoại thất: đầu, đuôi, ngang hông xe, mâm xe, khoang động cơ, ...</li>
						<li>Nội thất: ghế, loa, ngăn chứa đồ...</li>
						<li>Đặc điểm cần chú ý: vết trầy, xước (nếu có)</li>
					</ul>
					<h4 style="color:black">Không nên</h4>
					<ul>
						<li>Không dùng hình từ internet</li>
						<li>Không chèn số điện thoại/ website/ logo</li>
					</ul>
				</section>
			</div>
		</div>
	</div>
	<script>
		function changeProfile() {
			$('#files').click();
		}
		function handleFileSelect(evt) {
			var files = evt.target.files;
			var t = 1;
			for (var i = 0, f; f = files[i]; i++) {
				if (f.type.match('image/jpg')||f.type.match('image/jpeg')||f.type.match('image/png')||f.type.match('image/git')) {
					var reader = new FileReader();
					reader.onload = (function(theFile) {
						return function(e) {
							var span = document.createElement('span');
							span.innerHTML = ['<img id="image" style="width:250px; height:250px; border-width:3px; border-style:solid; border-color:#000; margin:8px;" src="', e.target.result, '" title="', escape(theFile.name), '"/>','<button    id="_btnremove">x</button>'].join('');
							span.classList.add('item-image');
							document.getElementById('list').insertBefore(span, null);
						};
					})(f);

					reader.readAsDataURL(f);

				}else{
					alert('Xin lỗi! Chương trình chỉ hỗ trợ những file có đuôi *.jpg, *.git, *.jpeg, *.png')
				}

			}
		}
		document.getElementById('files').addEventListener('change', handleFileSelect, false);

		// function removeImage(abc){
		// // 	var img = document.getElementById('image');
		// // 	img.parentNode.removeChild(img);
		// // 	var btnRemove = document.getElementById('btn-remove');
		// // 	btnRemove.parentNode.removeChild(btnRemove);
		// // }

	</script>
	
</body>
</html>