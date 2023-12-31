$(document).ready(function(){
    $('#commentForm').on('submit', function(event){
        event.preventDefault();
        console.log("Form submitted!")
        var formData = $(this).serialize();
        console.log("Form Data:", formData);
        $.ajax({
            url: "comments.php",
            method: "POST",
            data: formData,
            dataType: "JSON",
            success:function(response) {
                if(!response.error) {
                    $('#commentForm')[0].reset();
                    $('#commentId').val('0');
                    $('#message').html(response.message);
                    showComments();
                } else if(response.error){
                    $('#message').html(response.message);
                }
            }
        })
    });
    $(document).ready(function() {
        // Gọi hàm showComments để hiển thị các comment
        showComments();
    });
});
function showComments() {
    $.ajax({
        url:"show_comments.php",
        method:"POST",
        success:function(response) {
            $('#showComments').html(response);
        }
    })
}

