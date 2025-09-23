function openModal() {
  document.getElementById("authModal").style.display = "flex";
}
function closeModal() {
  document.getElementById("authModal").style.display = "none";
}
function switchForm(form) {
  if (form === "register") {
    document.getElementById("loginBox").classList.remove("active");
    document.getElementById("registerBox").classList.add("active");
  } else {
    document.getElementById("registerBox").classList.remove("active");
    document.getElementById("loginBox").classList.add("active");
  }
}
// close modal when clicking outside
window.onclick = function(e) {
  const modal = document.getElementById("authModal");
  if (e.target === modal) {
    closeModal();
  }
};