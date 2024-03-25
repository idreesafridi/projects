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

//for deleting the post
function deletePost(postId) {
    if (confirm("Are you sure you want to delete this post?")) {
        $.ajax({
            url: "/posts/" + postId,
            method: "DELETE",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
            },
            success: function (response) {
                // Optionally, perform any actions after successful deletion
                // For example, you can redirect to another page
                window.location.href = "/posts";
            },
            error: function (xhr, status, error) {
                console.error(error);
                alert("An error occurred while deleting the post.");
            },
        });
    }
}
