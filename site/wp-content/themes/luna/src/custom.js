
AOS.init();
 //Menu
function toggleMenu() {
            document.querySelector('.menu').classList.toggle('open');
        }
 $('.menu-toggle').click(function() {
  $(this).toggleClass("is-active");
  $('nav').toggleClass('active');
  $('body').toggleClass('menu-bg');
});
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('active');
  navMenu.classList.toggle('active');
});

$(window).scroll(function() {
  if ($(this).scrollTop() > 50) {
      $('header').addClass('bgcolor');
  } else {
      $('header').removeClass('bgcolor');
  }
});
$(window).scroll(function() {
  var scrollTop = $(this).scrollTop();
  
  // Parallax effect for image 1 (slower scroll)
  $('.bg-head').css({
    'transform': 'translateY(' + (scrollTop * 0.2) + 'px)'
  });

  // Parallax effect for image 2 (faster scroll)
  $('.img-pos').css({
    'transform': 'translateY(' + (scrollTop * 0.3) + 'px)'
  });
    
});
const lerp = (current, target, factor) => current * (1 - factor) + target * factor;

class LoopingText {
  constructor(el) {
    this.el = el;
    this.lerp = {current: 0, target: 0};
    this.interpolationFactor = 0.1;
    this.speed = 0.1;
    this.direction = -1; // -1 (to-left), 1 (to-right) 
    
    // Init
    this.el.style.cssText = `position: relative; display: inline-flex; white-space: nowrap;`;
    this.el.children[1].style.cssText = `position: absolute; left: ${100 * -this.direction}%;`;
    this.events();
    this.render();
  }

  events() {
    window.addEventListener("scroll", () => this.lerp.target += this.speed * 5);
  }

  animate() {
    this.lerp.target += this.speed;
    this.lerp.current = lerp(this.lerp.current, this.lerp.target, this.interpolationFactor);
    
    if (this.lerp.target > 100) {
      this.lerp.current -= this.lerp.target;
      this.lerp.target = 0;
    }

    const x = this.lerp.current * this.direction;
    this.el.style.transform = `translateX(${x}%)`;
  }

  render() {
    this.animate();
    window.requestAnimationFrame(() => this.render());
  }
}

document.querySelectorAll(".loop-container").forEach(el => new LoopingText(el));




const targetDivs = document.querySelectorAll('.animation-rotate');

// Create an IntersectionObserver with 20% visibility threshold
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.intersectionRatio >= 0.2) {
      entry.target.classList.add('visible-class');
    } else {
      entry.target.classList.remove('visible-class');
    }
  });
}, { threshold: 0.2 }); // 0.2 means 20% of the element is visible

// Observe each div element
targetDivs.forEach(div => {
  observer.observe(div);
});

 $(document).ready(function() {
            $(window).on('scroll', function() {
                var scrollTop = $(this).scrollTop();  // Get scroll position
                var parallaxSpeed = 0.02;  // Adjust this to increase or decrease parallax speed

                // Update the background position to create the parallax effect
                $('.footer').css({
                    'background-position': 'center ' + (scrollTop * parallaxSpeed) + 'px',
                });
            });
        });

$(window).on('scroll', function() {
    // Get the div you want to watch
    var $targetDiv = $('.about-sec');

    // Get the bottom position of the div relative to the document
    var divBottom = $targetDiv.offset().top + $targetDiv.outerHeight();

    // Get the scroll position of the window (bottom of the viewport)
    var windowMiddle = $(window).scrollTop() + $(window).height() / 1.5                                                                                 ;

    // Check if the bottom of the div has reached the middle of the viewport
    if (windowMiddle >= divBottom) {
        // Add the class when the bottom of the div reaches the middle of the viewport
        $targetDiv.addClass('active');
    } else {
        // Remove the class if you scroll up and the div is not at the middle anymore
        $targetDiv.removeClass('active');
    }
});

