const dropdown = document.getElementById("dropdown");
const dropdownBtn = document.getElementById("dropdownBtn");
const exitNotip = document.getElementById("exitNotip");
const notip = document.getElementById("notip");

exitNotip.addEventListener("click", () => {
  notip.classList.remove('block');
  notip.classList.add('hidden')
});

let isOpen = false;

dropdownBtn.addEventListener("click", () => {
  isOpen = !isOpen;
  toggleDropdown(isOpen);
});

document.addEventListener("click", (e) => {
  if (!dropdownBtn.contains(e.target) && !dropdown.contains(e.target)) {
    isOpen = false;
    toggleDropdown(isOpen);
  }
});

const toggleDropdown = (show) => {
  if (show) {
    dropdown.classList.remove("hidden");
    dropdown.classList.add("flex");
    requestAnimationFrame(() => {
      dropdown.classList.remove("opacity-0", "scale-95");
      dropdown.classList.add("opacity-100", "scale-100");
    });
  } else {
    dropdown.classList.add("opacity-100", "scale-100");
    dropdown.classList.remove("opacity-0", "scale-95");
  }

  setTimeout(() => {
    if (!isOpen) {
      dropdown.classList.remove("flex");
      dropdown.classList.add("hidden");
    }
  }, 75);
};
