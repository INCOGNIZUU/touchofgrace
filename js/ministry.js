// Pastor Modal Data
var ministry_modal = document.getElementById("ministry-modal");
var ministry_btn = document.getElementById("ministry-btn");

ministry_btn.onclick = function() {
    ministry_modal.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == ministry_modal) {
      ministry_modal.style.display = "none";
    }
}
  
  