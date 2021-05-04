const storeImage = document.querySelectorAll(".store-image");

const storesContainer = document.querySelector(".stores-container");

const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");

const navigationDots = document.querySelector(".navgation-dots");


let numberOfImages = storeImage.length;
let storeWidth = storeImage[0].clientWidth;
let currentStore = 0;

// Set up the slider
function init() {
    storeImage.forEach((img, i) => {
        img.style.left = i * 100 + "%";
    });
    storeImage[0].classList.add("active");
}
init();

nextBtn.addEventListener("click", () => {
    if (currentStore >= numberOfImages - 1) {
        goToStore(0);
        return;
    }
    currentStore++;
    goToStore(currentStore);
});

// Prev Button

prevBtn.addEventListener("click", () => {
    if (currentStore <= 0) {
        goToStore(numberOfImages - 1);
        return;
    }
    currentStore--;
    goToStore(currentStore);
});

// Go to Store

function goToStore(storeNumber) {
    var percent = 100 * storeNumber
    storesContainer.style.transform = "translateX(-" + percent + "%)";
    currentStore = storeNumber;
    setActiveClass();
}

// Set Active Class

function setActiveClass() {
    // Set active classs for store image
    let currentActive = document.querySelector(".store-image.active");
    currentActive.classList.remove("active");
    storeImage[currentStore].classList.add("active");
}


var hover = false
storesContainer.addEventListener('mouseover', function () {
    hover = true
})
storesContainer.addEventListener('mouseout', function () {
    hover = false
})


// var imgtag = document.getElementById("str-img");
// var i = 0;
function auto_slide() {
    if (!hover) {
        currentStore++;
        if (currentStore == numberOfImages) currentStore = 0;
        hover = false
        goToStore(currentStore);
    } else {

    }
}

setInterval(auto_slide, 2000);

















// Featured store


