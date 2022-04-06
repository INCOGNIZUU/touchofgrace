// Profile Modal Data
var profile_modal = document.getElementById("profile-modal");
var profile_btn = document.getElementById("edit-profile");
var close_profile = document.getElementsByClassName("close")[0];

// Create Account Modal Data
var create_modal = document.getElementById("create-modal");
var create_btn = document.getElementById("create-account");
var close_create = document.getElementsByClassName("close")[1];

// Submit Report Modal Data
var submit_modal = document.getElementById("submit-modal");
var submit_btn = document.getElementById("submit-report");
var close_submit = document.getElementsByClassName("close")[2];

// Generate Report Modal Data
var generate_modal = document.getElementById("generate-modal");
var generate_btn = document.getElementById("generate-report");
var close_generate = document.getElementsByClassName("close")[3];

// Basic Training Modal
var basic_modal = document.getElementById("basic-modal");
var basic_btn = document.getElementById("basic-training");

// Life Class Training Modal
var life_modal = document.getElementById("life-modal");
var life_btn = document.getElementById("life-training");

// Sol 1 Training Modal
var sol1_modal = document.getElementById("sol1-modal");
var sol1_btn = document.getElementById("sol1-training");

// Sol 2 Training Modal
var sol2_modal = document.getElementById("sol2-modal");
var sol2_btn = document.getElementById("sol2-training");

// Sol 3 Training Modal
var sol3_modal = document.getElementById("sol3-modal");
var sol3_btn = document.getElementById("sol3-training");

// Cell Group Training Modal
var cell_modal = document.getElementById("cell-training-modal");
var cell_btn = document.getElementById("cell-training");



// Open modal
profile_btn.onclick = function() {
  profile_modal.style.display = "block";
}
create_btn.onclick = function() {
  create_modal.style.display = "block";
}
submit_btn.onclick = function() {
  submit_modal.style.display = "block";
}
generate_btn.onclick = function() {
  generate_modal.style.display = "block";
}
basic_btn.onclick = function() {
  basic_modal.style.display = "block";
}
life_btn.onclick = function() {
  life_modal.style.display = "block";
}
sol1_btn.onclick = function() {
  sol1_modal.style.display = "block";
}
sol2_btn.onclick = function() {
  sol2_modal.style.display = "block";
}
sol3_btn.onclick = function() {
  sol3_modal.style.display = "block";
}
cell_btn.onclick = function() {
  cell_modal.style.display = "block";
}

// Close the modal with X
close_profile.onclick = function() {
  profile_modal.style.display = "none";
}
close_create.onclick = function() {
    create_modal.style.display = "none";
}
close_submit.onclick = function() {
  submit_modal.style.display = "none";
}
close_generate.onclick = function() {
  generate_modal.style.display = "none";
}


// Close the modal with window touch
window.onclick = function(event) {
  if (event.target == profile_modal) {
    profile_modal.style.display = "none";
  }
  if (event.target == create_modal) {
    create_modal.style.display = "none";
  }
  if (event.target == submit_modal) {
    submit_modal.style.display = "none";
  }
  if (event.target == generate_modal) {
    generate_modal.style.display = "none";
  }
  if (event.target == basic_modal) {
    basic_modal.style.display = "none";
  }
  if (event.target == life_modal) {
    life_modal.style.display = "none";
  }
  if (event.target == sol1_modal) {
    sol1_modal.style.display = "none";
  }
  if (event.target == sol2_modal) {
    sol2_modal.style.display = "none";
  }
  if (event.target == sol3_modal) {
    sol3_modal.style.display = "none";
  }
  if (event.target == cell_modal) {
    cell_modal.style.display = "none";
  }

}



