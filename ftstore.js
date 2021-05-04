const ftstoreImage = document.querySelectorAll(".ftstore-image");

const ftstoresContainer = document.querySelector(".ftstores-container");

const ftnextBtn = document.querySelector(".ftnext-btn");
const ftprevBtn = document.querySelector(".ftprev-btn");

const ftnavigationDots = document.querySelector(".ftnavgation-dots");


let numberOfftImages = ftstoreImage.length;
let ftstoreWidth = ftstoreImage[0].clientWidth;
let currentftStore = 0;

// Set up the slider
function initft() {
    ftstoreImage.forEach((img, i) => {
        img.style.left = i * 100 + "%";
    });
    ftstoreImage[0].classList.add("active");
}
initft();

ftnextBtn.addEventListener("click", () => {
    if (currentftStore >= numberOfftImages - 1) {
        goToftStore(0);
        return;
    }
    currentftStore++;
    goToftStore(currentftStore);
});

// Prev Button

ftprevBtn.addEventListener("click", () => {
    if (currentftStore <= 0) {
        goToStore(numberOfftImages - 1);
        return;
    }
    currentftStore--;
    goToftStore(currentftStore);
});

// Go to Store

function goToftStore(ftstoreNumber) {
    var percent = 100 * ftstoreNumber
    ftstoresContainer.style.transform = "translateX(-" + percent + "%)";
    currentftStore = ftstoreNumber;
    setftActiveClass();
}

// Set Active Class

function setftActiveClass() {
    // Set active classs for store image
    let currentftActive = document.querySelector(".ftstore-image.active");
    currentftActive.classList.remove("active");
    ftstoreImage[currentftStore].classList.add("active");
}


var hover = false
ftstoresContainer.addEventListener('mouseover', function () {
    hover = true
})
ftstoresContainer.addEventListener('mouseout', function () {
    hover = false
})


// var imgtag = document.getElementById("str-img");
// var i = 0;
function auto_ftslide() {
    if (!hover) {
        currentftStore++;
        if (currentftStore == numberOfftImages) currentftStore = 0;
        hover = false
        goToftStore(currentftStore);
    } else {

    }
}

setInterval(auto_ftslide, 4000);

















// Featured store


