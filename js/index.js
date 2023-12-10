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
const cartTable = document.querySelector(".cart-content-table")
const checkBoxItemAll = document.querySelector("#check-item-all");
const checkboxItems = document.querySelectorAll(".cart-item-checkbox-check")

if(cartItems.length && checkBoxItemAll && checkboxItems.length) {
  const cartTbody = document.querySelector('.cart-content-table-items');
  const selectAllBtn = document.querySelector(".remove-cont-text");
  const removeBtn = document.querySelector('.remove-cont-btn');

  Array.from(cartItems).forEach((cartItem) => {
    const cartItemTr = cartItem.children
    // CHECKBOX 
    const checkBoxItem = cartItemTr[0].firstElementChild
    checkBoxItem.addEventListener("change", () => {
      if(checkBoxItem.checked) {
        removeBtn.classList.remove("disabled")
      } else {
        removeBtn.classList.add("disabled")
      }
    })
    
    // QTY Buttons
    const qtyTd = cartItemTr[2].children
    const qtyTdChildrens = qtyTd
    const qtyCont = qtyTdChildrens[0].children
    // REMOVE BTN
    qtyTdChildrens[1].addEventListener('click', () => {
      cartTbody.removeChild(cartItem)
      if(cartTbody.children.length === 1) {
        cartTable.setAttribute("data-cart-table", "no-items")
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

  checkBoxItemAll.addEventListener('change', () => {
    if(checkBoxItemAll.checked) {
      checkboxItems.forEach(checkbox => {
        checkbox.checked = true;
      })
      removeBtn.classList.remove("disabled")
    } else {
      removeBtn.classList.add("disabled")
      checkboxItems.forEach(checkbox => checkbox.checked = false)
    }

    if(cartTbody.children.length === 1) {
      checkBoxItemAll.click();
    }
  })


  selectAllBtn.addEventListener("click", () => {
    cartTbody.children.length !== 1 && checkBoxItemAll.click();
  })


  removeBtn.addEventListener('click', () => {
    if(!removeBtn.classList.contains("disabled")) {
      const temp = []
      Array.from(cartTbody.children).forEach(cartItem => {
        if(cartItem.children[0].firstElementChild.checked) {
          temp.push(cartItem);
        }
      })
      temp.forEach(item => {
        cartTbody.removeChild(item);
      })
      if(cartTbody.children.length === 1) {
        checkBoxItemAll.click();
        cartTable.setAttribute("data-cart-table", "no-items")
      }
    }
  })
}

// For checkout modal
const sdcaModal = document.querySelector(".sdca-modal");
const termsConditionCheckbox = document.getElementById("termscondition")

if(sdcaModal && termsConditionCheckbox) {
  termsConditionCheckbox.addEventListener('click', () => {
    termsConditionCheckbox.checked = false;
    sdcaModal.classList.add("open");
  })

  const checkoutModalBtnGroup = document.querySelector(".checkout-modal-content-button-group");
  const agreeBtn = checkoutModalBtnGroup.children[0];
  const disagreeBtn = checkoutModalBtnGroup.children[1];

  agreeBtn.addEventListener("click", () => {
    termsConditionCheckbox.checked = true;
    sdcaModal.classList.remove("open");
  })

  disagreeBtn.addEventListener("click", () => {
    termsConditionCheckbox.checked = false;
    sdcaModal.classList.remove("open");
  })
}

// Product Page prompt, increment and decrement page
const sizeChartModal = document.querySelector(".size-chart");
const sizeChartModalBg = document.querySelector(".sdca-modal-bg");
const promptModal = document.querySelector(".prompt-message");
const promptModalBg = promptModal && promptModal.firstElementChild;
const sizechartbtn = document.querySelector('.size-chart-text')
const checkoutbtn = document.querySelector('.add-to-cart');

if(sizechartbtn && sizeChartModal && sizeChartModalBg) {
  sizechartbtn.addEventListener('click', () => {
    sizeChartModal.classList.add("open");
  })

  checkoutbtn.addEventListener('click', () => {
    promptModal.classList.add("open");
  })

  sizeChartModalBg.addEventListener("click", () => {
    sizeChartModal.classList.remove("open");
  })
  
  promptModalBg.addEventListener("click", () => {
    promptModal.classList.remove("open");
  })

  const inputQty = document.getElementById("count");
  let count = parseInt(inputQty.innerHTML || 1);

  const increment = () => {
    count++;
    if(count <= 99) {
      inputQty.value = count;
    } else {
      count = 99
    }
  }  

  const decrement = () => {
    count --;
    if(count >= 1) {
      inputQty.value = count;
    } else {
      count = 1
    }
  }

  document.getElementById("increase").addEventListener("click", increment);
  document.getElementById("decrease").addEventListener("click", decrement);

  //For Product Size buttons
  let productSize = document.getElementsByClassName("product-sizing-container")[0];
  let btnSize = productSize.getElementsByClassName("product-item");
  for (let i = 0; i < btnSize.length; i++) {
    btnSize[i].addEventListener("click", function () {
      let current = document.getElementsByClassName("active");
      if (current.length > 0) {
        current[0].classList.remove("active")
      }
      btnSize[i].classList.add("active")
    });
  }

  //For Optional Products Image
  let optionItems = document.querySelectorAll('.option-items');
  if(optionItems.length) {
    optionItems.forEach(function(item) {
      item.addEventListener('click', function(event) {
          let currentSource = event.target.src;
          const mainProduct = document.querySelector('.main-product');
          mainProduct.src = currentSource;
      });
    });
  }

  //For Model Products Image
  let optionItemsModel = document.querySelectorAll(".main-product-model");
  if (optionItemsModel.length) {
    optionItemsModel.forEach(function (item) {
      item.addEventListener("click", function (event) {
        let currentSource = event.target.src;
        const mainProduct = document.querySelector(".main-product");
        mainProduct.src = currentSource;
      });
    });
  }
}

//For Active Border in Options in Product Page
let optionsItemsContainer = document.querySelectorAll(".options-items-container");
for (let j = 0; j < optionsItemsContainer.length; j++) {
  optionsItemsContainer[j].addEventListener("click", function () {
    let addBorder = document.getElementsByClassName("active-border");
    if (addBorder.length > 0) {
      addBorder[0].className = addBorder[0].className.replace(" active-border", "");
    }
    this.className += " active-border";
  });
}