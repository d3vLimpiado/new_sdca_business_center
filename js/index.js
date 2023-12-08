// For Home Hero Carousel
let currentIdx = 0;
const carouselImgs = document.getElementsByClassName("carousel-cont-img");
const controllerCont = document.querySelector(".carousel-controller");

const controllerRight = document.querySelector(".carousel-right");
const controllerLeft = document.querySelector(".carousel-left");

const previewContainer = document.querySelector(".carousel-preview");
const previewContainerBg = document.querySelector(".carousel-preview-bg");

carouselImgs[currentIdx].classList.add("active");

const handleCarouselTrans = (direction = 1) => {
  if(direction) {
    currentIdx++;
    if(currentIdx === carouselImgs.length) {
      currentIdx = 0;
    }
  } else {
    currentIdx--;
    if(currentIdx < 0) {
      currentIdx = carouselImgs.length - 1;
    }
  }
  Array.from(carouselImgs).forEach((carouselImg, idx) => {
    carouselImg.classList.remove("active");
    if(idx === currentIdx) {
      carouselImg.classList.add("active");
    }
  })
}

controllerRight.addEventListener('click', () => {
  handleCarouselTrans(1);
})

controllerLeft.addEventListener('click', () => {
  handleCarouselTrans(0)
})

const handleSetPreview = () => {
  previewContainer.classList.add("active");
  const img = document.createElement("img");
  img.classList.add('carousel-preview-img')
  img.src = carouselImgs[currentIdx].firstElementChild.src;
  previewContainer.appendChild(img);
}

Array.from(carouselImgs).forEach((carouselImg) => {
  carouselImg.addEventListener("click", handleSetPreview)
})

previewContainerBg.addEventListener('click', () => {
  previewContainer.classList.remove("active");
  previewContainer.removeChild(document.querySelector('.carousel-preview-img'))
})

const increase = document.getElementById("increase").addEventListener("click", increment);
const decrease = document.getElementById("decrease").addEventListener("click", decrement);

const increment = (count) => {
  count ++;
  document.getElementById("count").innerHTML = count;
  return count;
}

const decrement = (count) => {
  count --;
  document.getElementById("count").innerHTML = count;
  return count;
}