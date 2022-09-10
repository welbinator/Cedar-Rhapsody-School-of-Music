// jQuery(function () {
//   jQuery(document).scroll(function () {
//     var jQuerynav = jQuery(".navbar");
//     jQuerynav.toggleClass(
//       "scrolled",
//       jQuery(this).scrollTop() > jQuerynav.height()
//     );
//   });
// });

// jQuery(function () {
//   jQuery("#navcol-1").on("show.bs.collapse", function () {
//     jQuery(".navbar").addClass("open");
//   });
//   jQuery("#navcol-1").on("hide.bs.collapse", function () {
//     jQuery(".navbar").removeClass("open");
//   });
// });

const widgetButtons = document.querySelectorAll(".fons-book");

function openWidget() {
  const width = 800;
  const height = 600;
  const left = screen.width / 2 - width / 2;
  const top = screen.height / 2 - height / 2;

  window.open(
    `https://fons.app/@cedarrhapsody/book`,
    "",
    `toolbar=no, width=${width}, height=${height}, top=${top}, left=${left}`
  );
}
widgetButtons.forEach((button) => {
  button.addEventListener("click", openWidget);
});

// parallax hero section
window.addEventListener("scroll", function (e) {
  const targets = document.querySelectorAll(".scroll");
  targets.forEach((target) => {
    target.removeAttribute("data-aos");
  });

  var index = 0,
    length = targets.length;
  for (index; index < length; index++) {
    var pos = window.pageYOffset * targets[index].dataset.rate;

    if (targets[index].dataset.direction === "vertical") {
      targets[index].style.transform = "translate3d(0px," + pos + "px, 0px)";
    } else {
      var posX = window.pageYOffset * targets[index].dataset.ratex;
      var posY = window.pageYOffset * targets[index].dataset.ratey;

      targets[index].style.transform =
        "translate3d(" + posX + "px, " + posY + "px, 0px)";
    }
  }
});



    jQuery(window).scroll(function () {
        if(jQuery(document).scrollTop() > 75){
            jQuery(".navbar").addClass('scrolled');
        }
        else{
            jQuery(".navbar").removeClass('scrolled');
        }
    });

    jQuery("#navcol-1").on('show.bs.collapse', function () {
        jQuery(".navbar").addClass('open');
    });
    jQuery("#navcol-1").on('shown.bs.collapse', function () {
        jQuery(".navbar").addClass('open');
    });
    jQuery("#navcol-1").on('hide.bs.collapse', function () {
        jQuery(".navbar").removeClass('open');
    });
    jQuery("#navcol-1").on('hidden.bs.collapse', function () {
        jQuery(".navbar").removeClass('open');
    });



if (jQuery(window).width() > 1200) {
    jQuery('.navbar .dropdown > a').click(function() {
        location.href = this.href;
    });
    jQuery('.dropdown').mouseover(function() {
        jQuery('.nav-dropdown-menu').css('display', 'block');
    });
    jQuery('.dropdown').mouseleave(function () {
        jQuery('.nav-dropdown-menu').css('display', 'none');
    });
    jQuery('.dropdown > .dropdown-toggle:active').css('pointer-events', "none");
}

jQuery(window).resize(function() {
    if (jQuery(window).width() > 1200) {
        jQuery('.navbar .dropdown > a').click(function () {
            location.href = this.href;
        });
        jQuery('.dropdown').mouseover(function () {
            jQuery('.nav-dropdown-menu').css('display', 'block');
        });
        jQuery('.dropdown').mouseleave(function () {
            jQuery('.nav-dropdown-menu').css('display', 'none');
        });
        jQuery('.dropdown > .dropdown-toggle:active').css('pointer-events', "none");
    }
}); 