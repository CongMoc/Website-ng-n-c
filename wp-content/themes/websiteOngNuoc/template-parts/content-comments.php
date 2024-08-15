<section class="comments">
    <h2>Khách hàng nói gì về dịch vụ của chúng tôi</h2>
    <div class="scroll-slideshow service-mobile">
        <h1 id="index-mobile"></h1>
        <p id="length-mobile"></p>
        <?php
            $image_url = get_asset_image_url('top.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" onclick="plusSlides(-1)" />';
            }
            ?>
            <?php
            $image_url = get_asset_image_url('bottom.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" onclick="plusSlides(1)"/>';
            }
            ?>
        <div class="dots">
            <span class="dot-mobile active" onclick="currentSlide(0)"></span> 
            <span class="dot-mobile" onclick="currentSlide(1)"></span> 
            <span class="dot-mobile" onclick="currentSlide(2)"></span> 
            <span class="dot-mobile" onclick="currentSlide(3)"></span> 
            <span class="dot-mobile" onclick="currentSlide(4)"></span> 
            <span class="dot-mobile" onclick="currentSlide(5)"></span> 
            <span class="dot-mobile" onclick="currentSlide(6)"></span> 
            <span class="dot-mobile" onclick="currentSlide(7)"></span> 
        </div>
    </div>
    <div class="comments-list">
        <div class="comment-detail" onclick="currentSlide(0)">
            <p>
            "I was hesitant to try a new freelance platform, 
            but GigNation exceeded my expectations. 
            The quality of the work and the professionalism of the 
            freelancers was impressive. I was able to find a freelancer 
            to help me with my project within hours of posting it. 
            I highly recommend GigNation!"
            </p>
            <div class="author">
            <?php
            $image_url = get_asset_image_url('comment-2.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
                <div class="author-infor">
                    <h5>Sarah</h5>
                    <p>Small Business Owner</p>
                </div>
            </div>
        </div>
        <div class="comment-detail" onclick="currentSlide(1)">
            <p>
            “Công ty AQ luôn chú trọng việc đào tạo và cập nhật kiến thức 
            mới nhất cho đội ngũ nhân viên, đảm bảo luôn nắm bắt được những 
            công nghệ tiên tiến nhất trong lĩnh vực xây dựng”
            </p>
            <div class="author">
            <?php
            $image_url = get_asset_image_url('comment-1.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
                <div class="author-infor">
                    <h5>Trần Thị Peached</h5>
                    <p>Cát Bà, Hải Phòng</p>
                </div>
            </div>
        </div> 
        <div class="comment-detail" onclick="currentSlide(2)">
            <p>
            "As a freelancer, I've used several different platforms to find work, 
            but GigNation stands out as one of the best. The projects are high-quality 
            and the support team is very helpful. I've been able to build a great 
            portfolio and find steady work through GigNation."
            </p>
            <div class="author">
            <?php
            $image_url = get_asset_image_url('comment-3.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
                <div class="author-infor">
                    <h5>John</h5>
                    <p>Web Developer</p>
                </div>
            </div>
        </div>
        <div class="comment-detail" onclick="currentSlide(3)">
            <p>
            "This feedback can take various forms, including comments, 
            suggestions, complaints, ratings, and reviews, and it plays 
            a crucial role in understanding user satisfaction and making 
            data-driven decisions for enhancement."
            </p>
            <div class="author">
            <?php
            $image_url = get_asset_image_url('comment-4.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
                <div class="author-infor">
                    <h5>John</h5>
                    <p>Web Developer</p>
                </div>
            </div>
        </div>
        <div class="comment-detail" onclick="currentSlide(4)">
            <p>
            "As a freelancer, I've used several different platforms to find work, 
            but GigNation stands out as one of the best. The projects are high-quality 
            and the support team is very helpful. I've been able to build a great 
            portfolio and find steady work through GigNation."
            </p>
            <div class="author">
            <?php
            $image_url = get_asset_image_url('comment-5.jpg');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
                <div class="author-infor">
                    <h5>John</h5>
                    <p>Web Developer</p>
                </div>
            </div>
        </div>
        <div class="comment-detail" onclick="currentSlide(5)">
            <p>
            "As a freelancer, I've used several different platforms to find work, 
            but GigNation stands out as one of the best. The projects are high-quality 
            and the support team is very helpful. I've been able to build a great 
            portfolio and find steady work through GigNation."
            </p>
            <div class="author">
            <?php
            $image_url = get_asset_image_url('comment-6.jpg');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
                <div class="author-infor">
                    <h5>John</h5>
                    <p>Web Developer</p>
                </div>
            </div>
        </div>
        <div class="comment-detail" onclick="currentSlide(6)">
            <p>
            "As a freelancer, I've used several different platforms to find work, 
            but GigNation stands out as one of the best. The projects are high-quality 
            and the support team is very helpful. I've been able to build a great 
            portfolio and find steady work through GigNation."
            </p>
            <div class="author">
            <?php
            $image_url = get_asset_image_url('comment-7.jpg');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
                <div class="author-infor">
                    <h5>John</h5>
                    <p>Web Developer</p>
                </div>
            </div>
        </div>
        <div class="comment-detail" onclick="currentSlide(7)">
            <p>
            "As a freelancer, I've used several different platforms to find work, 
            but GigNation stands out as one of the best. The projects are high-quality 
            and the support team is very helpful. I've been able to build a great 
            portfolio and find steady work through GigNation."
            </p>
            <div class="author">
            <?php
            $image_url = get_asset_image_url('comment-8.jpg');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" />';
            }
            ?>
                <div class="author-infor">
                    <h5>John</h5>
                    <p>Web Developer</p>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-slideshow service-desktop">
        <h1 id="index"></h1>
        <p id="length"></p>
        <?php
            $image_url = get_asset_image_url('prev.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" onclick="plusSlides(-1)" />';
            }
            ?>
            <?php
            $image_url = get_asset_image_url('next.png');
            if ($image_url) {
                echo '<img src="' . esc_url($image_url) . '" alt="Custom Image" onclick="plusSlides(1)"/>';
            }
            ?>
        <div class="dots">
            <span class="dot active" onclick="currentSlide(0)"></span> 
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
            <span class="dot" onclick="currentSlide(4)"></span> 
            <span class="dot" onclick="currentSlide(5)"></span> 
            <span class="dot" onclick="currentSlide(6)"></span> 
            <span class="dot" onclick="currentSlide(7)"></span> 
        </div>
    </div>
</section>

<script>
// Slide shows comments
    let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
    slideIndex = n;
  let slides = document.getElementsByClassName("comment-detail");
  let dots = document.getElementsByClassName("dot");
  let dots_mobile =  document.getElementsByClassName("dot-mobile");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    slides[i].className = "comment-detail";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  for (i = 0; i < dots_mobile.length; i++) {
    dots_mobile[i].className = dots_mobile[i].className.replace(" active", "");
  }

  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  } 
  else if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  
  if (slideIndex < 1 || slideIndex == 0) {
    slides[slides.length - 1].style.display = "block";
    slides[slides.length - 1].className += " deactivate slide-left";
    slides[slideIndex].style.display = "block";
    slides[slideIndex].className += " activate"
    slides[slideIndex+1].style.display = "block";
    slides[slideIndex+1].className += " deactivate slide-right";
  }
  else if (slideIndex + 1 >= slides.length) {
    slides[slideIndex-1].style.display = "block";
    slides[slideIndex -1].className += " deactivate slide-left";
    slides[slideIndex].style.display = "block";
    slides[slideIndex].className += " activate"
    slides[0].style.display = "block";
    slides[0].className += " deactivate slide-right";
  }
  else {
    slides[slideIndex+1].style.display = "block";
    slides[slideIndex+1].className += " deactivate slide-right";
    slides[slideIndex].style.display = "block";
    slides[slideIndex].className += " activate"
    slides[slideIndex-1].style.display = "block";
    slides[slideIndex-1].className += " deactivate slide-left";
  }
  dots[slideIndex].className += " active";
  dots_mobile[slideIndex].className += " active";
  document.getElementById("index").innerText = "0" + (slideIndex + 1);
  document.getElementById("length").innerText = "/0" + slides.length;
  document.getElementById("index-mobile").innerText = "0" + (slideIndex + 1);
  document.getElementById("length-mobile").innerText = "/0" + slides.length;
}
</script>