!(function ($) {
  $(function () {

    // GLOBAL LANG VARIABLE
    // **************************

    var currentSiteLang = $('html').attr('lang');

    // MAIN NAVIGATION TOGGLE

    $('.navbar-toggler').on('click', function (e) {
      console.log('open main menu')
      var $pageBody = $('body');
      $('#allMainNavigationLinks').toggleClass('show');
      $pageBody.toggleClass('main-menu-opened');
    })


    // PAGE ANIMATIONS
    // **************************

    if (!!window.IntersectionObserver) {

      document.getElementsByTagName('html')[0].classList.add("animation-enabled");

      let observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("section-visible");
            observer.unobserve(entry.target);
          }
          else {
            //entry.target.classList.remove("section-visible");
          }
        });
      }, {rootMargin: "0px 0px -30% 0px"});
      document.querySelectorAll('.page-section').forEach(section => {
        observer.observe(section)
      });
    }

    // VIDEO MODAL
    // **************************

    let $videoModal = $("#videoModal");

    $videoModal.on("show.bs.modal", function (event) {
      let button = $(event.relatedTarget); // Button that triggered the modal
      let url = button.data("video");      // Extract url from data-video
                                           // attribute
      $(this).find("iframe").attr({
        src: url,
        allow: "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
      });
    });

    // Remove iframe attributes when the modal has finished being hidden from
    // the user
    $videoModal.on("hidden.bs.modal", function () {
      $("#videoModal iframe").removeAttr("src allow");
    });

    // SCROLL TO PAGE SECTION
    // **************************

    function scrollToSection(targetSec) {
      $('html, body').animate({
        scrollTop: $(targetSec).offset().top
      }, 1000)
    }

    $('.btn-scrolltosection').on('click', function (e) {
      e.preventDefault()
      if ($(this).attr('href')) {
        scrollToSection($(this).attr('href'))
      }
    })

    // ENROLLMENT FORM VALIDATION
    // **************************


    var $form = $('.proceed-to-payment-form')
    $form.on('submit', function (event) {
      event.preventDefault();
      event.stopPropagation();
      if ($form.get(0).checkValidity()) {
        var stripe = Stripe(drupalSettings.stripe.public_key);
        var startPaymentUrl = $(this).attr('action')
        $.ajax({
          type: 'POST',
          url: startPaymentUrl,
          data: $form.serialize(),
          dataType: 'json',
          success: function (data) {
            stripe.redirectToCheckout({
              sessionId: data.session_id
            }).then(function (result) {
              result.error && alert(result.error.message)
            })
          },
          error: function (xhr, statusText) {
            alert(xhr.responseText)
          }
        });
      }
      $form.addClass('was-validated');
      return false;
    })
  });

})(window.jQuery);
