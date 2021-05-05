const productImage = document.querySelectorAll(".item-box");

const productsContainer = document.querySelector(".new-products");


const pronextBtn = document.querySelector(".pronext-btn");
const proprevBtn = document.querySelector(".proprev-btn");


let numberOfproImages = productImage.length;
let productWidth = productImage[0].clientWidth;
let currentProduct = 0;

// Set up the slider
function inproduct() {
    productImage.forEach((img, i) => {
        img.style.left = i * 100 + "%";
    });
    productImage[0].classList.add("active");
}
inproduct();


pronextBtn.addEventListener("click", () => {
    if (currentProduct >= numberOfproImages - 1) {
        goToProduct(0);
        return;
    }
    currentProduct++;
    goToProduct(currentProduct);
});

// Prev Button

proprevBtn.addEventListener("click", () => {
    if (currentProduct <= 0) {
        goToProduct(numberOfproImages - 1);
        return;
    }
    currentProduct--;
    goToProduct(currentProduct);
});
// Go to Product

function goToProduct(productNumber) {
    var productpercent = 270 * productNumber
    productsContainer.style.transform = "translateX(-" + productpercent + "px)";
    currentProduct = productNumber;
    setproActiveClass();
}

// Set Active Class

function setproActiveClass() {
    // Set active classs for store image
    let currentproActive = document.querySelector(".item-box.active");
    currentproActive.classList.remove("active");
    productImage[currentProduct].classList.add("active");
}

var hover = false
productsContainer.addEventListener('mouseover', function () {
    hover = true
})
productsContainer.addEventListener('mouseout', function () {
    hover = false
})


// var imgtag = document.getElementById("str-img");
// var i = 0;
function auto_product_slide() {
    if (!hover) {
        currentProduct++;
        if (currentProduct == numberOfproImages) currentProduct = 0;
        hover = false
        goToProduct(currentProduct);
    } else {

    }
}

setInterval(auto_product_slide, 2000);


