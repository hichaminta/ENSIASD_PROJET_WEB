
      $(document).ready(function(){
        $('.menu-toggle').click(function(){
          $('.menu-toggle').toggleClass('active')
          $('.menu').toggleClass('active')
        });
      });

      $( () => {
    
        //On Scroll Functionality
        $(window).scroll( () => {
          var windowTop = $(window).scrollTop();
          windowTop > 50 ? $('header').addClass('og-hf') : $('header').removeClass('og-hf');
        });
      });

      $('.counting').each(function() {
        var $this = $(this),
        countTo = $this.attr('data-count');
  
      $({ countNum: $this.text()}).animate({
        countNum: countTo
        },

      {

      duration: 3000,
      easing:'linear',
      step: function() {
      $this.text(Math.floor(this.countNum));
    },
      complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

    });  
  
  });

  $(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      loop: true,
      margin: 10,
      navRewind: false,
      responsive: {
        0: {
          items: 1
        },

        440:{
          items: 2
        },
        600: {
          items: 3
        },
        1000: {
          items: 4
        }
      }
    })
  })

   // Function to scroll to the top
   function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Function to toggle button visibility based on scroll position
window.onscroll = function () {
    var scrollBtn = document.getElementById("scrollTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollBtn.style.display = "block";
    } else {
        scrollBtn.style.display = "none";
    }
};
