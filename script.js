const a = document.getElementById("loginBtn");
const b = document.getElementById("registerBtn");
const x = document.getElementById("login");
const y = document.getElementById("register");

const loginForm = () => {
  x.style.left = "4px";
  y.style.right = "-520px";
  a.className += "white-btn";
  b.className = "btn";
  x.style.opacity = 1;
  y.style.opacity = 0;
};

const registerForm = () => {
  x.style.left = "-510px";
  y.style.right = "5px";
  a.className = "btn";
  b.className += "white-btn";
  x.style.opacity = 0;
  y.style.opacity = 1;
};

const register = () => {
  const newUserName = document.getElementById("userName").value;
  const newUserPass = document.getElementById("userPass").value;

  localStorage.setItem("userName", newUserName);
  localStorage.setItem("userPass", newUserPass);
  alert("Dang ky thanh cong");
  window.location.assign(loginForm());
};

const login = () => {
  const enteredUserName = document.getElementById("isUserName").value;
  const enteredUserPass = document.getElementById("isUserPass").value;

  const storedUserName = localStorage.getItem("userName");
  const storedUserPass = localStorage.getItem("userPass");

  if (
    enteredUserName === storedUserName &&
    enteredUserPass === storedUserPass
  ) {
    alert("Dang nhap thanh cong");
    window.location.href = "./pages/index.php";
  } else {
    alert("Tai khoan hoac mat khau sai");
  }
};
