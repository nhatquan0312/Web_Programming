const storeImage = document.querySelectorAll(".ftstore-image");

const storesContainer = document.querySelector(".ftstores-container");

const nextBtn = document.querySelector(".ftnext-btn");
const prevBtn = document.querySelector(".ftprev-btn");

const navigationDots = document.querySelector(".ftnavgation-dots");


let numberOfImages = storeImage.length;
let storeWidth = storeImage[0].clientWidth;
let currentStore = 0;

// Set up the slider

function init() {
    /*
    storeImage[0] = 0
    storeImage[1] = 100%
    storeImage[2] = 200%
    */

    storeImage.forEach((img, i) => {
        img.style.left = i * 100 + "%";
    });

    storeImage[0].classList.add("active");

}

init();

//Create navigation dots 

function createNavigationDots() {
    for (let i = 0; i < numberOfImages; i++) {
        const dot = document.createElement("div");
        dot.classList.add("single-dot");
        navigationDots.appendChild(dot);

        dot.addEventListener("click", () => {
            goToStore(i);
        })
    }

    navigationDots.children[0].classList.add("active");
}
// Next Button
nextBtn.addEventListener("click", () => {
    if(currentStore >= numberOfImages -1) {
        goToStore(0);
        return;
    }
    currentStore++;
    goToStore(currentStore);
});

// Prev Button

prevBtn.addEventListener("click", () => {
    if(currentStore <= 0) {
        goToStore(numberOfImages - 1);
        return;
    }
    currentStore--;
    goToStore(currentStore);
});

// Go to Store

function goToStore(storeNumber) {
    storesContainer.style.transform = "translateX(-" + storeWidth * storeNumber + "px)";

    currentStore = storeNumber;

    setActiveClass();
}

// Set Active Class

function setActiveClass() {
    // Set active classs for store image

    let currentActive = document.querySelector(".ftstore-image.active");
    currentActive.classList.remove("active");
    storeImage[currentStore].classList.add("active");

    //set active class for navigation dots

    let currentDot = document.querySelector(".ftsingle-dot.active");
    currentDot.classList.remove("active");
    navigationDots.children[currentStore].classList.add("active");
}

var imgtag = document.getElementById("str-img");
var imgarr = ["img/Uniqlo-logo(1).jpg", "img/MLB-OG(1).png", "img/990__1511456189_555_McDonalds.png"];

var i = 0;
function auto_slide() {
    imgtag.setAttribute("src", imgarr[i]);
    i++;
    if (i==imgarr.length) i = 0; 
}

setInterval(auto_slide,3000);

