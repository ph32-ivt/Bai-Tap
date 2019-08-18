$(document).ready(function (e) {
 

  $('#upload').on('click', function () {
    var vidFileLength = $("#files")[0].files.length;
    if(vidFileLength === 0){
      $('.green').addClass('chay');
      setTimeout(function(){
        alert("Xin lỗi! Phần này bạn chưa chọn ảnh")
         window.location.reload();
        
      },3000)

    }else{
     var form_data = new FormData();
     var length = document.getElementById('files').files.length;
     for (var i = 0; i < length; i++) {
      form_data.append("file[]", document.getElementById('files').files[i]);
    }
    $.ajax({
                        url: 'upload.php',  
                        dataType: 'text', 
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',

                        success: function (data) {
                          $('.green').addClass('chay');
                          setTimeout(function(){
                            alert('Thành công')
                            window.location.reload();
                          }, 5000);
                        },
                        error: function (data) {
                           alert(); // display error response from the PHP script
                         }
                       });

  }
});
});
$(document).on('click', '#_btnremove', function () {

  $(this).parent().remove();
   
    
});