const ftstoreImage = document.querySelectorAll(".ftstore-image");

const ftstoresContainer = document.querySelector(".ftstores-container");

const ftnextBtn = document.querySelector(".ftnext-btn");
const ftprevBtn = document.querySelector(".ftprev-btn");

const ftnavigationDots = document.querySelector(".ftnavgation-dots");


let numberOfImages = ftstoreImage.length;
let storeWidth = ftstoreImage[0].clientWidth;
let currentStore = 0;

// Set up the slider

function init() {
    /*
    storeImage[0] = 0
    storeImage[1] = 100%
    storeImage[2] = 200%
    */

    ftstoreImage.forEach((img, i) => {
        img.style.left = i * 100 + "%";
    });

    ftstoreImage[0].classList.add("active");

}

init();

//Create navigation dots 

function createNavigationDots() {
    for (let i = 0; i < numberOfImages; i++) {
        const ftdot = document.createElement("div");
        ftdot.classList.add("single-dot");
        ftnavigationDots.appendChild(dot);

        ftdot.addEventListener("click", () => {
            goToStore(i);
        })
    }

    ftnavigationDots.children[0].classList.add("active");
}
// Next Button
ftnextBtn.addEventListener("click", () => {
    if(currentStore >= numberOfImages -1) {
        goToStore(0);
        return;
    }
    currentStore++;
    goToStore(currentStore);
});

// Prev Button

ftprevBtn.addEventListener("click", () => {
    if(currentStore <= 0) {
        goToStore(numberOfImages - 1);
        return;
    }
    currentStore--;
    goToStore(currentStore);
});

// Go to Store

function goToStore(storeNumber) {
    ftstoresContainer.style.transform = "translateX(-" + storeWidth * storeNumber + "px)";

    currentStore = storeNumber;

    setActiveClass();
}

// Set Active Class

function setActiveClass() {
    // Set active classs for store image

    let currentActive = document.querySelector(".ftstore-image.active");
    currentActive.classList.remove("active");
    ftstoreImage[currentStore].classList.add("active");

    //set active class for navigation dots

    let currentDot = document.querySelector(".ftsingle-dot.active");
    currentDot.classList.remove("active");
    ftnavigationDots.children[currentStore].classList.add("active");
}



