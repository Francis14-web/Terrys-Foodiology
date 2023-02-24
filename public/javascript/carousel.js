const carousel = document.querySelector("#carouselExampleSlidesOnly");
const carouselItems = carousel.querySelectorAll("[data-te-carousel-item]");

let activeIndex = 0;

setInterval(() => {
  // Hide the current active item
  carouselItems[activeIndex].classList.remove("relative", "float-left", "-mr-[100%]", "transition-transform", "duration-[600ms]", "ease-in-out", "motion-reduce:transition-none");
  carouselItems[activeIndex].classList.add("hidden");

  // Increment the active index or reset it to 0 if it exceeds the number of items
  activeIndex = (activeIndex + 1) % carouselItems.length;

  // Show the new active item
  carouselItems[activeIndex].classList.remove("hidden");
  carouselItems[activeIndex].classList.add("relative", "float-left", "-mr-[100%]", "w-full", "transition-transform", "duration-[600ms]", "ease-in-out", "motion-reduce:transition-none");
}, 5000);
