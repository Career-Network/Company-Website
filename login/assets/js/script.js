function dropdown() {
    const dropdown = document.getElementById("toggle-service");
    dropdown.classList.toggle("fa-angle-up");
  }
  document
    .getElementById("navbarDropdown")
    .addEventListener("click", dropdown);