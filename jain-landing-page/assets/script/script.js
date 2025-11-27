$(window).scroll(function () {
  if ($(this).scrollTop() > 200) {
    $("#toTop").fadeIn();
  } else {
    $("#toTop").fadeOut();
  }
});
$("#toTop").click(function (e) {
  e.preventDefault();
  $("html, body").animate({ scrollTop: 0 }, 600);
});
document.addEventListener("DOMContentLoaded", function () {
  var myModal = new bootstrap.Modal(
    document.getElementById("applyOnlineModal")
  );
  setInterval(function () {
    myModal.show();
  }, 60000);
  const applyNowButton = document.querySelector(".apply-now");
  const formSection = document.querySelector(".form-section");
  function toggleApplyNowButton() {
    const formRect = formSection.getBoundingClientRect();
    const isFormVisible =
      formRect.top < window.innerHeight && formRect.bottom > 0;
    if (isFormVisible) {
      applyNowButton.style.display = "none";
    } else {
      applyNowButton.style.display = "block";
    }
  }
  toggleApplyNowButton();
  window.addEventListener("scroll", toggleApplyNowButton);
});
function disableButton() {
  var submitButton = document.getElementById("submitButton");
  submitButton.disabled = !0;
  submitButton.value = "Submitting...";
  return !0;
}
$(document).ready(function () {
  fetch_states();
  $(".state").on("change", function () {
    fetch_city($(this));
  });
  $("#otpModal").modal({ backdrop: "static", keyboard: !1 });
  fetch_states2();
  $(".state2").on("change", function () {
    fetch_city2();
  });
  $("#otpModal2").modal({ backdrop: "static", keyboard: !1 });

  $(".lead-form").on("submit", handleLeadFormSubmit);

  var $cards = $(".elective-item");
  var total = $cards.length;
  var initialCount = 6; // first visible
  var step = 3; // each click adds 3
  var visibleCount = initialCount;

  // 1. Initial state – show only first 6
  $cards.hide();
  $cards.slice(0, initialCount).show();

  // 2. Button click handler
  $(".load-more-btn").on("click", function () {
    var $btn = $(this);
    var state = $btn.data("state"); // "more" or "less"

    if (state === "more") {
      // Show +3 cards
      var nextVisible = Math.min(visibleCount + step, total);
      $cards.slice(visibleCount, nextVisible).slideDown(200);
      visibleCount = nextVisible;

      // If all cards now visible → switch to "Load less"
      if (visibleCount >= total) {
        $btn.data("state", "less");
        $btn.html('Load less <i class="ti ti-arrow-up"></i>');
      }
    } else {
      // State = "less" → collapse back to first 6
      $cards.slice(initialCount).slideUp(200);
      visibleCount = initialCount;
      $btn.data("state", "more");
      $btn.html('Load more <i class="ti ti-arrow-right"></i>');
    }
  });

  $(".otp-form .phone").on("input", function () {
    let form = $(this).closest(".otp-form");
    let phone = $(this).val();

    if (phone.length === 10) {
      generateOTP(form, phone);
    }
  });

  $(".otp-form .otp").on("input", function () {
    let form = $(this).closest(".otp-form");
    let otp = $(this).val();

    if (otp.length === 6) {
      otp_verify(form, otp);
    }
  });
});
function fetch_states() {
  $.ajax({
    type: "POST",
    url: "https://insityapp.com/dbFiles/fetch_states.php",
    dataType: "json",
    success: function (response) {
      var names = response.states || [];
      var $states = $(".state");
      $states
        .empty()
        .append($("<option>", { text: "Select State", value: "" }));

      for (var i = 0; i < names.length; i++) {
        var name = names[i];
        $states.append($("<option>", { value: name, text: name }));
      }
    },
    error: function (error) {
      console.error("Error fetching states:", error);
    },
  });
}
function fetch_city($stateSelect) {
  var state = $stateSelect.val(); // ✅ only this select's value
  console.log("Selected state:", state);

  if (!state) {
    return;
  }
  var $wrapper = $stateSelect.closest("form"); // or .closest('.lead-form') / .closest('.form-wrapper')
  var $city = $wrapper.find(".city"); // ✅ only related city dropdown

  $.ajax({
    type: "POST",
    url: "https://insityapp.com/dbFiles/fetch_cities.php",
    data: { state: state },
    dataType: "json",
    success: function (response) {
      var names = response.cities || [];
      $city.empty().append('<option value="">Select City</option>');
      for (var i = 0; i < names.length; i++) {
        var name = names[i];
        $city.append($("<option>", { value: name, text: name }));
      }
    },
    error: function (error) {
      console.error("Error fetching cities:", error);
    },
  });
}
function fetch_states2() {
  $.ajax({
    type: "POST",
    url: "https://insityapp.com/dbFiles/fetch_states.php",
    dataType: "json",
    success: function (response) {
      var names = response.states;
      var state2 = $(".state2");
      state2.empty();
      state2.append($("<option>", { text: "Select State" }));
      for (var i = 0; i < names.length; i++) {
        var name = names[i];
        state2.append($("<option>", { value: name, text: name }));
      }
    },
    error: function (error) {
      console.error("Error fetching states:", error);
    },
  });
}
function fetch_city2() {
  var state2 = document.getElementById("state2").value;
  $.ajax({
    type: "POST",
    url: "https://insityapp.com/dbFiles/fetch_cities.php",
    data: { state: state2 },
    dataType: "json",
    success: function (response) {
      var names = response.cities;
      var city2 = $(".city2");
      city2.empty().append('<option value="">Select City</option>');
      for (var i = 0; i < names.length; i++) {
        var name = names[i];
        city2.append($("<option>", { value: name, text: name }));
      }
    },
    error: function (error) {
      console.error("Error fetching cities:", error);
    },
  });
}

function getVal($form, name) {
  return ($form.find('[name="' + name + '"]').val() || "").trim();
}

function handleLeadFormSubmit(e) {
  e.preventDefault();

  const $form = $(this);

  const phone = getVal($form, "phone");
  if (!/^\d{10}$/.test(phone)) {
    alert("Please enter a valid 10-digit mobile number.");
    return;
  }

  const data = {
    name: getVal($form, "name"),
    email: getVal($form, "email"),
    phone: phone,
    state: getVal($form, "state"),
    city: getVal($form, "city"),
    country: "India",
    course: getVal($form, "course"),
    level: getVal($form, "level"),

    user_registration_date: new Date()
      .toISOString()
      .slice(0, 19)
      .replace("T", " "),

    widget_name: "Acadment",
    lead_origin: "API",
    lead_source: "DLP-JNU",
    current_url: window.location.href,
    utm_source: getVal($form, "utm_source"),
    utm_medium: getVal($form, "utm_medium"),
    utm_campaign: getVal($form, "utm_campaign"),
  };

  $.ajax({
    url: "https://insityapp.com/api/leads/allocate-dlp",
    type: "POST",
    data: JSON.stringify(data),
    contentType: "application/json",
    success: function (response) {
      console.log(response);
      if (response.status === "success") {
        window.location.href = "thank-you.php";
      } else if (response.status === "duplicate") {
        alert("⚠️ Duplicate lead submission detected.");
      } else {
        alert("⚠️ Unexpected response from server.");
      }
    },
    error: function (xhr, status, error) {
      console.error(error);
      alert("❌ Error submitting form. Please try again later.");
    },
  });
}
function randomNumber(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function generateOTP(form, phone) {
  let otpCode = randomNumber(100000, 999999);

  // store OTP for this phone number
  localStorage.setItem("otp_" + phone, otpCode);

  $.ajax({
    type: "POST",
    url: "../send_otp.php",
    data: { mobile_no: phone, otp: otpCode },
    dataType: "json",
    success: function (response) {
      if (response.status == 1) {
        form.find(".otp-box").css("display", "block");
        form.find(".note").removeClass("d-none");
        form.find(".note").text("OTP sent to your mobile number.");
      }
    },
  });
}

function otp_verify(form, otp) {
  let phone = form.find(".phone").val();
  let storedOTP = localStorage.getItem("otp_" + phone);

  if (storedOTP === otp) {
    form.find(".otp-box").hide();
    form.find(".note").text("OTP verified successfully.");
    localStorage.setItem("verified_" + phone, "1");
  } else {
    form.find(".note").text("Wrong OTP.");
    localStorage.setItem("verified_" + phone, "0");
  }
}
