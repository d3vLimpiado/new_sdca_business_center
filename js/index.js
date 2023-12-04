// For Home Hero Carousel
const carouselImgs = document.getElementsByClassName("carousel-cont-img");
if(carouselImgs.length) {
  const controllerRight = document.querySelector(".carousel-right");
  const controllerLeft = document.querySelector(".carousel-left");

  const previewContainer = document.querySelector(".carousel-preview");
  const previewContainerBg = document.querySelector(".carousel-preview-bg");
  
  let currentIdx = 0;

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
}

// For Cart Page
const cartItems = document.getElementsByClassName("cart-content-table-items-item");
const noItemTr = document.querySelector(".cart-content-table-items-no")

if(cartItems.length) {
  const cartTbody = document.querySelector('.cart-content-table-items');
  Array.from(cartItems).forEach((cartItem) => {
    const cartItemTr = cartItem.children

    const qtyTd = cartItemTr[1].children
    const qtyTdChildrens = qtyTd
    const qtyCont = qtyTdChildrens[0].children
    // REMOVE BTN
    qtyTdChildrens[1].addEventListener('click', () => {
      cartTbody.removeChild(cartItem)
      if(cartTbody.children.length === 1) {
        noItemTr.style.display = "table-row";
        console.log('display none')
      }
    })
    // VALUE
    const val = qtyCont[1]
    // BTN INCREMENT
    qtyCont[0].addEventListener('click', () => {
      if(parseInt(val.innerHTML) !== 10) {
        val.innerHTML = parseInt(val.innerHTML) + 1
      }
    })
    // BTN DECREMENT
    qtyCont[2].addEventListener('click', () => {
      if(parseInt(val.innerHTML) !== 1) {
        val.innerHTML = parseInt(val.innerHTML) - 1;
      }
    })
  })
}