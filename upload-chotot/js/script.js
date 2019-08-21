$(document).ready(function() {
	document.getElementById('file').addEventListener('change', readImage, false);

	$(document).on('click', '.remove-img', function() {
		var no = $(this).data('no');
		$(".item-image.preview-show-"+no).remove();
	});
});

var num = 3;
function readImage(){
	if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $("#preview-item-images");
        for (var i = 0; i < files.length; i++) {
          var file = files[i];
          if (file.type.match('image/png')||file.type.match('image/jpg')||file.type.match('image/pjeg')){ 

           var picReader = new FileReader();

           picReader.addEventListener('load', function (event) {
            var picFile = event.target;
            var html =  '<div style="float: left;width: 140px;height: 140px;margin-left: 10px;position: relative;" class="item-image preview-show-' + num + '">' +
            '<div style="position: absolute;top: -5px;right: -5px;z-index: 2;width: 20px;height: 20px;border-radius: 50%;background: black;color: #ffffff;font-weight: bold;cursor: pointer;" class="remove-img" data-no="' + num + '"><span style="margin-top: -5px;	margin-left: 5px;display: block;">x</span></div>' +
            '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
            '</div>';

            output.append(html);

            num = num + 1;
        });
           picReader.readAsDataURL(file);
       }else{
          $('#masseges').css('display','block');
          $('#masseges').text('Website chỉ hổ trợ nhưng hình anh có đuôi *.png, *.jpg, *.pjeg');
      }

  } 

}

}

$(document).ready(function (e) {
    $('#upload').on('click', function () {
        if($('#file').val() == ''){
            $('#masseges').css('display','block');
            $('#masseges').text('Mời bạn chọn hình ảnh'); 
        }else{      
            var image = $('#file').val();
            var form_data = new FormData();
            var ins = document.getElementById('file').files.length;
            for (var x = 0; x < ins; x++) {
                form_data.append("files[]", document.getElementById('file').files[x]);
            }
            $.ajax({
                        url: 'upload.php', // point to server-side PHP script 
                        dataType: 'text', // what to expect back from the PHP script
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        success: function (data) {
                        $('.green').addClass('chay');
                        setTimeout(function(){
                            alert('Thành công');
                        window.location.reload();
                          }, 5000);
                            // display success response from the PHP script
                        },
                        error: function (data) {
                            $('#masseges').css('display','block');
                        $('#masseges').text('Thất bại');  // display error response from the PHP script
                        }
                    });


        }
    });
});
