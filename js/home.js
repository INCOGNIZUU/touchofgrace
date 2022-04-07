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
var close_basic = document.getElementsByClassName("close-train")[0];

// Life Class Training Modal
var life_modal = document.getElementById("life-modal");
var life_btn = document.getElementById("life-training");
var close_life = document.getElementsByClassName("close-train")[1];

// Sol 1 Training Modal
var sol1_modal = document.getElementById("sol1-modal");
var sol1_btn = document.getElementById("sol1-training");
var close_sol1 = document.getElementsByClassName("close-train")[2];

// Sol 2 Training Modal
var sol2_modal = document.getElementById("sol2-modal");
var sol2_btn = document.getElementById("sol2-training");
var close_sol2 = document.getElementsByClassName("close-train")[3];

// Sol 3 Training Modal
var sol3_modal = document.getElementById("sol3-modal");
var sol3_btn = document.getElementById("sol3-training");
var close_sol3 = document.getElementsByClassName("close-train")[4];

// Cell Group Training Modal
var cell_modal = document.getElementById("cell-training-modal");
var cell_btn = document.getElementById("cell-training");
var close_cells = document.getElementsByClassName("close-train")[5];

// Baptism Training Modal
var baptism_modal = document.getElementById("baptism-modal");
var baptism_btn = document.getElementById("baptism-training");
var close_baptism = document.getElementsByClassName("close-train")[6];

// Weddings Training Modal
var weddings_modal = document.getElementById("weddings-modal");
var weddings_btn = document.getElementById("weddings-training");
var close_weddings = document.getElementsByClassName("close-train")[7];

// CD Training Modal
var cd_modal = document.getElementById("cd-modal");
var cd_btn = document.getElementById("cd-training");
var close_cd = document.getElementsByClassName("close-train")[8];



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
baptism_btn.onclick = function() {
  baptism_modal.style.display = "block";
}
weddings_btn.onclick = function() {
  weddings_modal.style.display = "block";
}
cd_btn.onclick = function() {
  cd_modal.style.display = "block";
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
close_basic.onclick = function() {
  basic_modal.style.display = "none";
}
close_life.onclick = function() {
  life_modal.style.display = "none";
}
close_sol1.onclick = function() {
  sol1_modal.style.display = "none";
}
close_sol2.onclick = function() {
  sol2_modal.style.display = "none";
}
close_sol3.onclick = function() {
  sol3_modal.style.display = "none";
}
close_cells.onclick = function() {
  cell_modal.style.display = "none";
}
close_baptism.onclick = function() {
  baptism_modal.style.display = "none";
}
close_weddings.onclick = function() {
  weddings_modal.style.display = "none";
}
close_cd.onclick = function() {
  cd_modal.style.display = "none";
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
  if (event.target == baptism_modal) {
    baptism_modal.style.display = "none";
  }
  if (event.target == weddings_modal) {
    weddings_modal.style.display = "none";
  }
  if (event.target == cd_modal) {
    cd_modal.style.display = "none";
  }

}



