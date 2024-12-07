$(document).ready(function () {
    $("#registrationForm").on("submit", function (event) {
      let isValid = true;
  
      $("input, textarea").each(function () {
        if ($(this).val() === "") {
          isValid = false;
          alert("Please fill out all fields.");
          return false;
        }
      });
  
      return isValid;
    });
  });
  