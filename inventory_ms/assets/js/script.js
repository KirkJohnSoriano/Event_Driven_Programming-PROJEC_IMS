
function toggleSidebar() {
  const sidebar = document.getElementById("sidebar");
  const content = document.getElementById("content");
  
  sidebar.classList.toggle("open-sidebar");
  content.classList.toggle("open-sidebar");
}