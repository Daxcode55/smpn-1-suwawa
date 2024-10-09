// console.log("rifki")

const dropdown = document.querySelector("#dropdown");
const dropdownLink = document.querySelector(".dropdown-link");

dropdown.addEventListener("click", () => {
  if (window.innerWidth < 1024) {
    dropdownLink.classList.toggle("hidden");
    dropdownLink.classList.toggle("block");
  }
});


document.querySelector('#hamburgerMenu').addEventListener("click", () => {
    console.log("rifki")
    let nav = document.querySelector(".navbar");

    if (nav.style.left === "0%") {
        nav.style.left = "-75%";
    } else {
        nav.style.left = "0%";
    }
})