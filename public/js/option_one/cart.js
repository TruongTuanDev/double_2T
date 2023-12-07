$(document).ready(function(){
  $('#addtocart').click(function(e){
      e.preventDefault();
      var postId = $(this).data('post-id');

      $.ajax({
          url: 'add-to-favorites',
          type: 'POST',
          data: { id: postId },
          success: function(response) {
              // Xử lý phản hồi từ server (nếu cần)
          }
      });
  });
});
 