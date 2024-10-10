// console.log("rifki")

const dropdown = document.querySelector("#dropdown");
const dropdownLink = document.querySelector(".dropdown-link");

dropdown.addEventListener("click", () => {
  if (window.innerWidth < 1024) {
    dropdownLink.classList.toggle("hidden");
    dropdownLink.classList.toggle("block");
  }
});


let hamburger = document.querySelector('#hamburgerMenu');
let navbar = document.querySelector(".navbar");
hamburger.onclick = () => {
  navbar.classList.toggle("active");
}

let containerSliders = document.querySelector(".slideShow");

window.onscroll = () => {
  if (window.innerWidth > 1024) {
    if (window.pageYOffset >= 149) {
      if (!navbar.classList.contains("navsticky")) {
        navbar.classList.add("navsticky");
        containerSliders.style.marginTop = "4rem";
      }
    } else {
      if (navbar.classList.contains("navsticky")) {
        navbar.classList.remove("navsticky");
        containerSliders.style.marginTop = "0";
      }
    }
  }
};


