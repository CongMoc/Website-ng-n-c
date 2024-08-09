let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  slideIndex = n;
  let slides = document.getElementsByClassName("comment-detail");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    slides[i].className = "comment-detail";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  } else if (slideIndex >= slides.length) {
    slideIndex = 0;
  }

  if (slideIndex < 1 || slideIndex == 0) {
    slides[slides.length - 1].style.display = "block";
    slides[slides.length - 1].className += " deactivate slide-left";
    slides[slideIndex].style.display = "block";
    slides[slideIndex].className += " activate";
    slides[slideIndex + 1].style.display = "block";
    slides[slideIndex + 1].className += " deactivate slide-right";
  } else if (slideIndex + 1 >= slides.length) {
    slides[slideIndex - 1].style.display = "block";
    slides[slideIndex - 1].className += " deactivate slide-left";
    slides[slideIndex].style.display = "block";
    slides[slideIndex].className += " activate";
    slides[0].style.display = "block";
    slides[0].className += " deactivate slide-right";
  } else {
    slides[slideIndex + 1].style.display = "block";
    slides[slideIndex + 1].className += " deactivate slide-right";
    slides[slideIndex].style.display = "block";
    slides[slideIndex].className += " activate";
    slides[slideIndex - 1].style.display = "block";
    slides[slideIndex - 1].className += " deactivate slide-left";
  }
  dots[slideIndex].className += " active";
  console.log(slideIndex);
}
