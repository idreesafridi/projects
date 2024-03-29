//for view comment in model
function loadComments(postId) {
    $.ajax({
        url: "/posts/" + postId + "/comments",
        method: "GET",
        success: function (response) {
            // Process the comments and display them in the modal or any other container
            console.log(response);
            // Example: display comments in a modal
            $("#commentModalBody").empty(); // Clear existing comments
            $.each(response.data, function (index, comment) {
                $("#commentModalBody").append("<p>" + comment.content + "</p>");
            });
            $("#commentModal").modal("show"); // Show the modal
        },
        error: function (xhr, status, error) {
            console.error(error);
        },
    });
}

//for close the model
function closeModal() {
    $("#commentModal").modal("hide");
}

// $(document).ready(function () {
//     $(".delete-post").on("click", function (event) {
//         event.preventDefault();
//         // dd($(this).clicked());
//         var postId = $(this).data("post-id"); // Get the post ID from data attribute
//         var deleteUrl = $(this).data("delete-url"); // Get the delete URL from data attribute
//         if (confirm("Are you sure you want to delete this post?")) {
//             $.ajax({
//                 url: deleteUrl,
//                 type: "DELETE", // Use DELETE method
//                 headers: {
//                     "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
//                         "content"
//                     ),
//                 },
//                 success: function (data) {
//                     if (data.success) {
//                         // Remove the deleted post from the UI
//                         $("#post-" + postId).remove();
//                     } else {
//                         alert("Failed to delete post.");
//                     }
//                 },
//                 error: function (xhr, status, error) {
//                     console.error(error);
//                     alert("An error occurred while deleting the post.");
//                 },
//             });
//         }
//     });
// });

function deletepost(id) {
    if (confirm("Are you sure you want to delete this post?")) {
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        // Send the POST request
        $.ajax({
            url: "delete_post/" + id,
            type: "DELETE",

            success: function (result) {
                $("#" + result["tr"]).hide();
            },
        });
    }
}
