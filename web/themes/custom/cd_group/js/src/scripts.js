!(function ($) {
  $(function () {

    // GLOBAL LANG VARIABLE
    // **************************

    var currentSiteLang = $('html').attr('lang');

    // MAIN NAVIGATION TOGGLE
    // **************************
    $('.navbar-toggler').on('click', function (e) {
      console.log('open main menu')
      var $pageBody = $('body');
      $('#allMainNavigationLinks').toggleClass('show');
      $pageBody.toggleClass('main-menu-opened');
    })

    // MAIN NAVIGATION (mobile) DROPDOWNS
    // **************************
    /* Prevent dropdown from closing when a link clicked */
    $(document).on('click', '.nav-main-full .dropdown-menu', function (e) {
      e.stopPropagation();
    });

    // NOTIFICATION BAR
    // **************************

    $.fn.notificationBar = function() {
      return this.each(function () {
        var $dismissBtn = $(this).find('.btn-dismiss');
        var $notificationBar = $(this);

        $dismissBtn.click(function (e) {
          e.preventDefault();

          $notificationBar
            .animate({ opacity: 0 }, 500)
            .animate({ height: '0px' }, 500, function() {
              $notificationBar.css('display', 'none');
            });

          var notificationDismissed = true;

          var d = new Date();
          d.setTime(d.getTime() + (24*60*60*1000));

          document.cookie =
            'CDGNotificationDismissed=' + notificationDismissed +
            '; expires=' + d.toUTCString() +
            '; path=/';
        });
      });
    };

    $('.notification-bar').notificationBar();

    var cdgNotificationDismissed = (document.cookie.match(/^(?:.*;)?\s*CDGNotificationDismissed\s*=\s*([^;]+)(?:.*)?$/)||[,null])[1]

    if(!cdgNotificationDismissed) {
      $('.notification-bar').show();
    }

    // ACCORDIONS
    // **************************

    // We want the page to scroll to the accordion item when it's opened
    $('.collapse').on('show.bs.collapse', function(e) {
      var $card = $(this).closest('.bp-accordion-item');
      var $open = $($(this).data('parent')).find('.collapse.show');

      var additionalOffset = 0;
      if($card.prevAll().filter($open.closest('.bp-accordion-item')).length !== 0)
      {
        additionalOffset =  $open.height();
      }

      var $navbarHeight = $('.navbar-main').outerHeight();

      if (window.innerWidth < 768) {
        $navbarHeight = 0;
      }

      $('html,body').animate({
        scrollTop: $card.offset().top - additionalOffset - $navbarHeight
      }, 500);
    });

    // TEAM MEMBER INFO MODAL
    // **************************

    $('#memberInfoModal').on('show.bs.modal', function (event) {
      var $button = $(event.relatedTarget); // Button that triggered the modal

      var memberImage = $button.find('.person-image').html();
      var memberInfo = $button.find('.person-info').html();

      var modal = $(this);
      modal.find('.person-image').html(memberImage);
      modal.find('.person-info').html(memberInfo);
    })

    // PAGE ANIMATIONS
    // **************************

    /*if (!!window.IntersectionObserver) {

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
    }*/

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

  });

})(window.jQuery);
