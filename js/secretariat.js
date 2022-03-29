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
}



// Smooth Scrolling when Clicking Nav Section Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth',
          block: 'center' 
      });

  });
});
