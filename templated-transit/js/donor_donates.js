$(function() {
  var owner = $("#owner");
  var cardNumber = $("#cardNumber");
  var cardNumberField = $("#card-number-field");
  var CVV = $("#cvv");
  var mastercard = $("#mastercard");
  var confirmButton = $("#confirm-purchase");
  var visa = $("#visa");
  var amex = $("#amex");

  //   cardNumber.payform("formatCardNumber");
  //   CVV.payform("formatCardCVC");

  //   cardNumber.keyup(function() {
  //     amex.removeClass("transparent");
  //     visa.removeClass("transparent");
  //     mastercard.removeClass("transparent");

  //     if ($.payform.validateCardNumber(cardNumber.val()) == false) {
  //       cardNumberField.addClass("has-error");
  //     } else {
  //       cardNumberField.removeClass("has-error");
  //       cardNumberField.addClass("has-success");
  //     }

  //     if ($.payform.parseCardType(cardNumber.val()) == "visa") {
  //       mastercard.addClass("transparent");
  //       amex.addClass("transparent");
  //     } else if ($.payform.parseCardType(cardNumber.val()) == "amex") {
  //       mastercard.addClass("transparent");
  //       visa.addClass("transparent");
  //     } else if ($.payform.parseCardType(cardNumber.val()) == "mastercard") {
  //       amex.addClass("transparent");
  //       visa.addClass("transparent");
  //     }
  //   });

  confirmButton.click(function(e) {
    e.preventDefault();

    // var isCardValid = $.payform.validateCardNumber(cardNumber.val());
    // var isCvvValid = $.payform.validateCardCVC(CVV.val());

    if (owner.val().length < 5) {
      //   alert("Wrong name");
      // } else if (!isCardValid) {
      //   alert("Wrong card number");
      // } else if (!isCvvValid) {
      //   alert("Wrong CVV");
      // } else {
      // Everything is correct. Add your form submission code here.
      //   document.getElementById("model_donate").submit();
      // window.location.replace("http://stackoverflow.com");
      // alert("Everything is correct");
    }
    window.location.href = "http://stackoverflow.com";

  });
});
