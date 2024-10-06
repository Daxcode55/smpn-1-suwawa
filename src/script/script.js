// console.log("rifki")

document.querySelector("#dropdown").addEventListener("click", () => {
    let dropdownLink = document.querySelector(".dropdown-link");

    if(dropdownLink.style.display === "block") {
        dropdownLink.style.display = "none";
    } else {
        dropdownLink.style.display = "block"
    }
})


document.querySelector('#hamburgerMenu').addEventListener("click", () => {
    console.log("rifki")
    let nav = document.querySelector(".navbar");

    if (nav.style.left === "0%") {
        nav.style.left = "-75%";
    } else {
        nav.style.left = "0%";
    }
})