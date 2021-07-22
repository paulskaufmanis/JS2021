const name = document.getElementById("name");
const surname = document.getElementById("surname");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");
const form = document.getElementById("form");
const errorElement = document.getElementById("error");

form.addEventListener("submit", (e) => {
  let messages = [];

  if (name.value === "" || name.value == null) {
    messages.push("- Name is required \n");
  }

  if (surname.value === "" || surname.value == null) {
    messages.push("- Surame is required \n");
  }

  //   if (password.value.length <= 6) {
  //     messages.push("- Password must be longer than 6 characters \n");
  //   }

  //   if (password.value.length >= 20) {
  //     messages.push("- Password must be shorter than 20 characters \n");
  //   }

  //   if (!/\d/.test(password.value)) {
  //     messages.push("- Password must contain a number \n");
  //   }

  //   if (!/[A-Z]/.test(password.value)) {
  //     messages.push("- Password must contain a capital letter \n");
  //   }

  //   if (!/[$&+,:;=?@#|'<>.^*()%!-]/.test(password.value)) {
  //     messages.push("- Password must contain a special symbol \n");
  //   }

  //   if (password.value != password2.value) {
  //     messages.push("- Password was not confirmed correctly \n");
  //   }

  if (messages.length > 0) {
    e.preventDefault();
    errorElement.innerText = messages.join("");
  }
});
