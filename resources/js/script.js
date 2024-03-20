// Get the button and the form
var openFormBtn = document.getElementById("openFormBtn");
var closeFormBtn = document.getElementById("closeFormBtn");
var formPopup = document.getElementById("myForm");

// Function to open the form
function openForm() {
    formPopup.style.display = "block";
}

// Function to close the form
function closeForm() {
    formPopup.style.display = "none";
}

// Event listeners for button clicks
openFormBtn.addEventListener("click", openForm);
closeFormBtn.addEventListener("click", closeForm);
