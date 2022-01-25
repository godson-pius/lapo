(function ($) {
  "use strict";

  var $window = $(window);
  var didScroll,
    lastScrollTop = 0,
    delta = 5,
    $mainNav = $("#sticky"),
    $mainNavHeight = $mainNav.outerHeight(),
    scrollTop;

  $window.on("scroll", function () {
    didScroll = true;
    scrollTop = $(this).scrollTop();
  });

  setInterval(function () {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 200);

  function hasScrolled() {
    if (Math.abs(lastScrollTop - scrollTop) <= delta) {
      return;
    }
    if (scrollTop > lastScrollTop && scrollTop > $mainNavHeight) {
      $mainNav.css("top", -$mainNavHeight);
    } else {
      if (scrollTop + $(window).height() < $(document).height()) {
        $mainNav.css("top", 0);
      }
    }
    lastScrollTop = scrollTop;
  }

  //sticky header
  function navbarFixed() {
    if ($("#sticky").length) {
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll) {
          $("#sticky").addClass("navbar_fixed");
        } else {
          $("#sticky").removeClass("navbar_fixed");
        }
      });
    }
  }
  navbarFixed();

  $(".navbar-nav > li .mobile_dropdown_icon").on("click", function (e) {
    $(this).parent().find("ul").first().toggle(300);
    $(this).parent().siblings().find("ul").hide(300);
  });

  if ($(".submenu").length) {
    $(".submenu > .dropdown-toggle").on("click", function () {
      var location = $(this).attr("href");
      window.location.href = location;
      return false;
    });
  }

  //initialize smmothscroll
  if ($("header").length) {
    $("header").smoothScroll();
  }

  if ($("#banner_animation").length > 0) {
    $("#banner_animation").parallax({
      scalarX: 10.0,
      scalarY: 7.0,
    });
  }
  if ($("#banner_animation2").length > 0) {
    $("#banner_animation2").parallax({
      scalarX: 10.0,
      scalarY: 0.0,
    });
  }
  if ($("#card_area_animation").length > 0) {
    $("#card_area_animation").parallax({
      scalarX: 10.0,
      scalarY: 0.0,
    });
  }
  if ($("#MouseMoveAnimation").length > 0) {
    $("#MouseMoveAnimation").parallax({
      scalarX: 5.0,
      scalarY: 10.0,
    });
  }

  if ($("#readOnlyClose").length) {
    $("#readOnlyClose").on("click", function () {
      $("#locationSelect").val("");
      $("#locationSelect").focus();
    });
  }

  // === Back to Top Button
  var back_top_btn = $("#back-to-top");

  $(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
      back_top_btn.addClass("show");
    } else {
      back_top_btn.removeClass("show");
    }
  });

  back_top_btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: 0 }, "300");
  });

  //initialize wow js
  new WOW({}).init();

  //initialize counterUp
  if ($(".counter span").length) {
    $(".counter span").counterUp();
  }
  if ($(".stat-counter").length) {
    $(".stat-counter").counterUp();
  }

  //initialize niceselect
  if ($("#select-lang").length) {
    $("#select-lang").niceSelect();
  }
  if ($("#select-loan-type").length) {
    $("#select-loan-type").niceSelect();
  }
  if ($("#loandetails01").length) {
    $("#loandetails01").niceSelect();
  }
  if ($("#loandetails02").length) {
    $("#loandetails02").niceSelect();
  }
  if ($("#dob-d").length) {
    $("#dob-d").niceSelect();
  }
  if ($("#dob-m").length) {
    $("#dob-m").niceSelect();
  }
  if ($("#dob-y").length) {
    $("#dob-y").niceSelect();
  }
  if ($("#sort-select").length) {
    $("#sort-select").niceSelect();
  }

  //ediatable location select
  if ($("#locationSelect").length) {
    $("#locationSelect").editableSelect();
  }

  //initialize fencybox
  if ($("[data-fancybox]").length) {
    $("[data-fancybox]").fancybox({
      animationEffect: "zoom-in-out",
    });
  }

  //initialize slick slider
  if ($(".testimonial-slider").length) {
    $(".testimonial-slider").slick({
      dots: false,
      arrows: true,
      prevArrow:
        '<button type="button" class="slick-prev"><i class="arrow_carrot-left"></i></button>',
      nextArrow:
        '<button type="button" class="slick-next"><i class="arrow_carrot-right"></i></button>',
      slidesToShow: 1,
      centerMode: true,
      autoplay: true,
      infinite: true,
      autoplaySpeed: 7000,
      slidesToScroll: 1,
      variableWidth: true,
      responsive: [
        {
          breakpoint: 576,
          settings: {
            centerMode: false,
            variableWidth: false,
          },
        },
      ],
    });
  }

  if ($(".testimonial-slider-2").length) {
    $(".testimonial-slider-2").slick({
      dots: false,
      arrows: true,
      prevArrow:
        '<button type="button" class="slick-prev"><i class="arrow_left"></i></button>',
      nextArrow:
        '<button type="button" class="slick-next"><i class="arrow_right"></i></button>',
      slidesToShow: 3,
      centerMode: false,
      autoplay: false,
      infinite: true,
      autoplaySpeed: 7000,
      slidesToScroll: 1,
      asNavFor: ".testimonial-slider-3",
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    });
  }

  if ($(".testimonial-slider-3").length) {
    $(".testimonial-slider-3").slick({
      dots: false,
      asNavFor: ".testimonial-slider-2",
      arrows: false,
      slidesToShow: 1,
      centerMode: false,
      autoplay: false,
      infinite: true,
      slidesToScroll: 1,
      fade: true,
    });
  }
  if ($(".feature-slider").length) {
    $(".feature-slider").slick({
      dots: true,
      arrows: false,
      slidesToShow: 3,
      autoplay: true,
      infinite: true,
      autoplaySpeed: 5000,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }
  if ($(".statistics-slider").length) {
    $(".statistics-slider").slick({
      dots: true,
      arrows: false,
      slidesToShow: 1,
      autoplay: true,
      infinite: true,
      autoplaySpeed: 3000,
      slidesToScroll: 1,
    });
  }
  if ($(".client-slider").length) {
    $(".client-slider").slick({
      dots: true,
      arrows: false,
      centerMode: false,
      slidesToShow: 3,
      autoplay: true,
      infinite: true,
      autoplaySpeed: 5000,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }
  if ($(".news-slider").length) {
    $(".news-slider").slick({
      dots: true,
      arrows: false,
      centerMode: false,
      slidesToShow: 3,
      autoplay: false,
      infinite: true,
      autoplaySpeed: 7500,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  }

  //initilalize Telephone Input Country
  if ($("#inputPhoneNumber").length) {
    $("#inputPhoneNumber").intlTelInput({
      separateDialCode: false,
      utilsScript: "js/utils.js",
    });
  }

  //initilalize DropeZone
  if ($("#dropzone").length) {
    $("#dropzone").dropzone({
      paramName: "file",
      url: "upload-target",
    });
  }

  // ------- Emi Calculator --------- //
  var SelectedAmount,
    selectedTime = {},
    RateOfInterestTime,
    RateOfInterestAmount;

  if (typeof wNumb !== "undefined") {
    var AmountFormat = wNumb({
      decimals: 0,
      thousand: ",",
      prefix: "$ ",
    });

    var TimeFormatMonths = wNumb({
      prefix: " months",
    });
    var TimeFormatYears = wNumb({
      prefix: " months",
    });
  }

  //Slider Elements
  var mySlider = document.getElementById("RangeSlider");
  var mySliderMonth = document.getElementById("MonthRangeSlider");
  var mySliderYear = document.getElementById("YearRangeSlider");
  //-----home page 1
  var SliderAmount = document.getElementById("SliderAmount");
  var SliderPeriod = document.getElementById("SliderPeriod");

  function clickOnPip(sliderName, This) {
    var value = Number(This.getAttribute("data-value"));
    sliderName.noUiSlider.set(value);
  }

  function SetPipsOnSlider(PipsName, sliderName) {
    for (var i = 0; i < PipsName.length; i++) {
      PipsName[i].style.cursor = "pointer";
      PipsName[i].addEventListener("click", function () {
        clickOnPip(sliderName, this);
      });
    }
  }

  //   Activate Range Sliders

  if (mySlider && mySliderMonth && mySliderYear) {
    noUiSlider.create(mySlider, {
      start: [15000],
      connect: "lower",
      range: {
        min: 5000,
        max: 150000,
      },
      format: wNumb({
        decimals: 0,
        thousand: ",",
        prefix: "$ ",
      }),
      pips: {
        mode: "values",
        density: 100,

        values: [5000, 25000, 50000, 75000, 100000, 125000, 150000],
        stepped: true,
        format: wNumb({
          encoder: function (a) {
            return a / 1000;
          },
          decimals: 0,
          prefix: "$",
          suffix: "k",
        }),
      },
    });
    noUiSlider.create(mySliderMonth, {
      start: [18],
      connect: "lower",
      range: {
        min: 12,
        max: 48,
      },
      format: wNumb({
        decimals: 0,
        suffix: " Months",
      }),
      pips: {
        mode: "values",
        density: 100,

        values: [12, 18, 24, 30, 36, 42, 48],
        stepped: true,
        format: wNumb({
          decimals: 0,
        }),
      },
    });
    noUiSlider.create(mySliderYear, {
      start: [2],
      connect: "lower",
      range: {
        min: 2,
        max: 8,
      },
      format: wNumb({
        decimals: 0,
        suffix: " Years",
      }),
      pips: {
        mode: "values",
        density: 100,

        values: [2, 3, 4, 5, 6, 7, 8],
        stepped: true,
        format: wNumb({
          decimals: 0,
        }),
      },
    });
    //Slider Pips
    var pips = mySlider.querySelectorAll(".noUi-value");
    var pipsMonth = mySliderMonth.querySelectorAll(".noUi-value");
    var pipsYear = mySliderYear.querySelectorAll(".noUi-value");

    //Slider Input Element
    var inputMonthFormat = document.getElementById("SetMonthRange");
    var inputFormat = document.getElementById("SetRange");

    SetPipsOnSlider(pips, mySlider);
    SetPipsOnSlider(pipsMonth, mySliderMonth);
    SetPipsOnSlider(pipsYear, mySliderYear);
    mySlider.noUiSlider.on("update", function (values, handle) {
      inputFormat.value = values[handle];
      SelectedAmount = AmountFormat.from(values[handle]);
      CalculateAmount();
    });

    inputFormat.addEventListener("change", function () {
      mySlider.noUiSlider.set(this.value);
    });

    if ($("#monthTab.active").length > 0) {
      mySliderMonth.noUiSlider.on("update", function (values, handle) {
        inputMonthFormat.value = values[handle];
        selectedTime = {
          type: "month",
          value: TimeFormatMonths.from(values[handle]),
        };

        CalculateAmount();
      });

      inputMonthFormat.addEventListener("change", function () {
        mySliderMonth.noUiSlider.set(this.value);
      });
    } else if ($("#yearTab.active").length > 0) {
      mySliderYear.noUiSlider.on("update", function (values, handle) {
        inputMonthFormat.value = values[handle];

        selectedTime = {
          type: "year",
          value: TimeFormatYears.from(values[handle]),
        };
        CalculateAmount();
      });
    }

    inputMonthFormat.addEventListener("change", function () {
      if ($("#monthTab.active").length > 0) {
        mySliderMonth.noUiSlider.set(this.value);
      } else if ($("#yearTab.active").length > 0) {
        mySliderYear.noUiSlider.set(this.value);
      }
    });

    $("#yearTab").on("click", function () {
      mySliderMonth.noUiSlider.off("update", function (values, handle) {
        inputMonthFormat.value = values[handle];
        selectedTime = {
          type: "month",
          value: TimeFormatMonths.from(values[handle]),
        };
        CalculateAmount();
      });
      mySliderYear.noUiSlider.on("update", function (values, handle) {
        inputMonthFormat.value = values[handle];
        selectedTime = {
          type: "year",
          value: TimeFormatYears.from(values[handle]),
        };
        CalculateAmount();
      });
    });
    $("#monthTab").on("click", function () {
      mySliderYear.noUiSlider.off("update", function (values, handle) {
        inputMonthFormat.value = values[handle];
        selectedTime = {
          type: "year",
          value: TimeFormatYears.from(values[handle]),
        };
        CalculateAmount();
      });
      mySliderMonth.noUiSlider.on("update", function (values, handle) {
        inputMonthFormat.value = values[handle];
        selectedTime = {
          type: "month",
          value: TimeFormatMonths.from(values[handle]),
        };
        CalculateAmount();
      });
    });
  }

  if (SliderAmount && SliderPeriod) {
    noUiSlider.create(SliderAmount, {
      start: [100000],
      connect: "lower",
      range: {
        min: 5000,
        max: 250000,
      },
      format: wNumb({
        decimals: 0,
        thousand: ",",
        prefix: "$ ",
      }),
    });
    noUiSlider.create(SliderPeriod, {
      start: [3],
      connect: "lower",
      range: {
        min: 1,
        max: 5,
      },
      format: wNumb({
        decimals: 0,
        suffix: " year",
      }),
    });

    var SliderAmountFormat = document.getElementById("SetSliderAmount");
    var SliderPeriodFormat = document.getElementById("SetSliderPeriod");

    SliderAmount.noUiSlider.on("update", function (values, handle) {
      SliderAmountFormat.value = values[handle];
    });
    SliderPeriod.noUiSlider.on("update", function (values, handle) {
      SliderPeriodFormat.value = values[handle];
    });

    SliderAmountFormat.addEventListener("change", function () {
      SliderAmount.noUiSlider.set(this.value);
    });
    SliderPeriodFormat.addEventListener("change", function () {
      SliderPeriod.noUiSlider.set(this.value);
    });
  }

  function CalculateAmount() {
    if (selectedTime.type === "month") {
      var LoanTime = selectedTime.value;
      switch (true) {
        case LoanTime >= 48:
          RateOfInterestTime = 2.4;
          break;
        case LoanTime >= 42:
          RateOfInterestTime = 2.55;
          break;
        case LoanTime >= 32:
          RateOfInterestTime = 2.7;
          break;
        case LoanTime >= 25:
          RateOfInterestTime = 2.9;
          break;
        case LoanTime >= 20:
          RateOfInterestTime = 3;
          break;
        case LoanTime >= 12:
          RateOfInterestTime = 3.15;
          break;
        default:
          RateOfInterestTime = 0;
      }
    }
    if (selectedTime.type === "year") {
      var LoanTime = selectedTime.value;
      switch (true) {
        case LoanTime >= 8:
          RateOfInterestTime = 2;
          break;
        case LoanTime >= 7:
          RateOfInterestTime = 2.2;
          break;
        case LoanTime >= 6:
          RateOfInterestTime = 2.3;
          break;
        case LoanTime >= 5:
          RateOfInterestTime = 2.5;
          break;
        case LoanTime >= 4:
          RateOfInterestTime = 2.7;
          break;
        case LoanTime >= 3:
          RateOfInterestTime = 2.9;
          break;
        case LoanTime >= 2:
          RateOfInterestTime = 3.1;
          break;

        default:
          RateOfInterestTime = 0;
      }
    }
    if (typeof SelectedAmount === "number") {
      var LoanAmount = SelectedAmount;
      switch (true) {
        case LoanAmount >= 13e4:
          RateOfInterestAmount = 2.9;
          break;
        case LoanAmount >= 115e3:
          RateOfInterestAmount = 3.1;
          break;
        case LoanAmount >= 1e5:
          RateOfInterestAmount = 3.3;
          break;
        case LoanAmount >= 8e4:
          RateOfInterestAmount = 3.5;
          break;
        case LoanAmount >= 65e3:
          RateOfInterestAmount = 3.7;
          break;
        case LoanAmount >= 5e4:
          RateOfInterestAmount = 3.8;
          break;
        case LoanAmount >= 25e3:
          RateOfInterestAmount = 3.95;
          break;
        case LoanAmount >= 1e4:
          RateOfInterestAmount = 4;
          break;
        default:
          RateOfInterestAmount = 4.09;
      }
    }

    var TotalRateOfInterest = (RateOfInterestAmount + RateOfInterestTime) / 100;
    var TotalInterest = SelectedAmount * TotalRateOfInterest;
    var InterestAndPrincipal = TotalInterest + SelectedAmount;

    $("#TotalAmount").text(AmountFormat.to(InterestAndPrincipal) + "*");
    $("#emiAmount").text(
      AmountFormat.to(InterestAndPrincipal / selectedTime.value) + "*"
    );
    $("#InterestPayable").text(AmountFormat.to(TotalInterest) + "*");
    $("#InterestAmount").text((TotalRateOfInterest * 100).toFixed(2) + " %");

    var percent, graphRadius, circumference, strokeDashOffset;
    var GraphEl = $("#LoanGraph");
    percent = (100 * TotalInterest) / InterestAndPrincipal;
    graphRadius = GraphEl.find($("circle.complete")).attr("r");
    circumference = 2 * Math.PI * graphRadius;
    strokeDashOffset = circumference - (percent * circumference) / 100;
    GraphEl.find($("circle.complete"))
      .css({ "stroke-dashoffset": "0", opacity: "0.1" })
      .animate({ "stroke-dashoffset": strokeDashOffset, opacity: "1" }, 1250);

    if ($("#monthTab").hasClass("active")) {
      $(".active_bar").addClass("left");
    } else {
      $(".active_bar").removeClass("left");
    }
  }
  // End of Calculator
})(jQuery);
