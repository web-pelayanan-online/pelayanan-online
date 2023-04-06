(function ($) {
  "use strict";

  /*==================================================================
        [ Focus Contact2 ]*/
  $(".input100").each(function () {
    $(this).on("blur", function () {
      if ($(this).val().trim() != "") {
        $(this).addClass("has-val");
      } else {
        $(this).removeClass("has-val");
      }
    });
  });

  /*==================================================================
        [ Validate ]*/
  var input = $(".validate-input .input100");

  $(".validate-form").on("submit", function () {
    var check = true;

    for (var i = 0; i < input.length; i++) {
      if (validate(input[i]) == false) {
        showValidate(input[i]);
        check = false;
      }
    }
    return check;
  });

  $(".validate-form .input100").each(function () {
    $(this).focus(function () {
      hideValidate(this);
    });
  });

  function validate(input) {
    if ($(input).val().trim() == "") {
      return false;
    } else {
      if ($(input).attr("name") == "password") {
        if ($(input).val().trim() == "") {
          return false;
        }
        if (
          $(input)
            .val()
            .trim()
            .match(/^(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d]{10,}$/) == null
        ) {
          $(".val-pas").attr(
            "data-validate",
            "Password minimal berisi 10 karakter, huruf besar dan kecil"
          );
          return false;
        }
      }

      if ($(input).attr("name") == "password_confirm") {
        if ($(input).val().trim() != $(".val-pas .input100").val().trim()) {
          $(".val-pas-confirm").attr("data-validate", "Password tidak cocok");
          return false;
        }
      }
    }
  }

  function showValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).addClass("alert-validate");
  }

  function hideValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).removeClass("alert-validate");
  }
})(jQuery);

// recaptcha V3 user
function onSubmit(token) {
  document.getElementById("recaptchaResponse").value = token;
  document.getElementById("login").submit();
}

// grecaptcha.ready(function () {
//   grecaptcha
//     .execute("6LdslF4lAAAAALW8jd53JryFoWpgapmfCTNmq-pI", {
//       action: "login",
//     })
//     .then(function (token) {
//       document.getElementById("recaptchaResponse").value = token;
//       console.log(token);
//       // Add your logic to submit to your backend server here.
//     });
// });

// function onSubmit() {
//   grecaptcha.ready(function () {
//     grecaptcha
//       .execute("6LdslF4lAAAAALW8jd53JryFoWpgapmfCTNmq-pI", { action: "login" })
//       .then(function (token) {
//         document.getElementById("recaptchaResponse").value = token;
//         console.log(token);
//         // Add your logic to submit to your backend server here.
//       });
//   });
// }
