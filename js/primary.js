// Pastor Modal Data
var primary_modal = document.getElementById("primary-modal");
var primary_btn = document.getElementById("primary-btn");

primary_btn.onclick = function() {
    primary_modal.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == primary_modal) {
      primary_modal.style.display = "none";
    }
}
  
  