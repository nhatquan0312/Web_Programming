const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");
const wrapper = document.querySelector(".wrapper")

cookieButton.addEventListener("click", () => {
  wrapper.classList.remove("active");
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
    wrapper.classList.add("active")
  }
}, 2000);