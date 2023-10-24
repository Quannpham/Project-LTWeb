<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/regular.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css"
    />
    <link rel="stylesheet" href="./logInOut.css" />
    <title>Document</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="form-box">
        <div class="login-container" id="login">
          <div class="top">
            <span
              >Don't have an account<a href="#" onclick="registerForm()"
                >Sign up</a
              ></span
            >
          </div>
          <div class="input-box">
            <input
              type="text"
              class="input-field"
              id="isUserName"
              placeholder="Enter your Email"
              required
            />
            <i class="fa fa-envelope"></i>
          </div>
          <div class="input-box">
            <input
              type="password"
              class="input-field"
              placeholder="Password"
              id="isUserPass"
              required
            />
            <i class="fa fa-key"></i>
          </div>
          <div class="input-box">
            <input
              type="submit"
              class="submit"
              value="Sign in"
              onclick="login()"
            />
          </div>
        </div>

        <div class="register-container" id="register">
          <div class="top">
            <span
              >Have an account<a href="#" onclick="loginForm()">Login </a></span
            >
          </div>
          <div class="two-forms">
            <div class="input-box">
              <input
                type="text"
                class="input-field"
                placeholder="Firstname"
                required
              />
              <i class="fa fa-user"></i>
            </div>
            <div class="input-box">
              <input
                type="text"
                class="input-field"
                placeholder="Lastname"
                required
              />
              <i class="fa fa-user"></i>
            </div>
          </div>
          <div class="input-box">
            <input
              type="text"
              class="input-field"
              placeholder="Email"
              id="userName"
              required
            />
            <i class="fa fa-envelope"></i>
          </div>
          <div class="input-box">
            <input
              type="password"
              id="userPass"
              class="input-field"
              placeholder="Password"
              required
            />
          </div>
          <div class="input-box" style="margin-top: 20px">
            <input
              type="submit"
              class="submit"
              value="Register"
              onclick="register()"
            />
          </div>
        </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
