//open close mobile menu

document
  .querySelector(".menu-btn")
  .addEventListener("click", () =>
    document.querySelector(".custom-menu-class").classList.toggle("menu-show")
  );
document
  .querySelector(".menu-btn")
  .addEventListener("click", () =>
    document.querySelector(".mask").classList.toggle("is-active")
  );
// document
//   .querySelector(".menu-close-btn")
//   .addEventListener("click", () =>
//     document.querySelector(".menu").classList.toggle("menu-show")
//   );
// document
//   .querySelector(".mask")
//   .addEventListener("click", () =>
//     document.querySelector(".custom-menu-class").classList.remove("menu-show")
//   );
// document
//   .querySelector(".mask")
//   .addEventListener("click", () =>
//     document.querySelector(".mask").classList.toggle("is-active")
//   );

//---------------------------------CONTACT FORM-------------------------------------

//contact form validation
const form = document.getElementById("contactForm");
const name = document.getElementById("name");
const email = document.getElementById("email");
const message = document.getElementById("body");
//get values from inputs
const nameValue = name.value.trim();
const emailValue = email.value.trim();
const messageValue = message.value.trim();

let nameField;
let emailField;
let messageField;

form.addEventListener("submit", (e) => {
  e.preventDefault();
  checkInputs();
  sendForm();
});

function sendForm() {
  if (nameField && emailField && messageField) {
    //AJAX ZAPIER
    var name = $("#name").val();
    var email = $("#email").val();
    var body = $("#body").val();
    var data = {
      email: email,
      message: body,
      contact: name,
    };

    $.ajax({
      url: "https://hooks.zapier.com/hooks/catch/8553878/owf4qxv/",
      type: "post",
      data: JSON.stringify(data),
      success: function () {
        $(".thanks-message").addClass("thanks-message-show");
        $(".form-item").hide();
      },
    });
  }
}
// console.log(name.value, email.value, body.value);
function checkInputs() {
  //get values from inputs
  const nameValue = name.value.trim();
  const emailValue = email.value.trim();
  const messageValue = message.value.trim();

  //is the field empty
  if (nameValue === "") {
    //then add error class
    setErrorFor(name, "Please add your name");
  } else {
    //or add success class
    setSuccessFor(name);
    nameField = true;
  }
  //repeat for all fields with regex also for email
  if (emailValue === "") {
    setErrorFor(email, "Please add your email address");
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "This is not a valid email address");
  } else {
    setSuccessFor(email);
    emailField = true;
  }

  if (messageValue === "") {
    setErrorFor(message, "Please add your message");
  } else {
    setSuccessFor(message);
    messageField = true;
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");

  //add error message inside small
  small.innerText = message;

  //add error class
  formControl.className = "form-control error";
}

function setSuccessFor(input) {
  const formControl = input.parentElement;

  //add success class
  formControl.className = "form-control success";
}
function isEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
