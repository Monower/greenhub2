<!DOCTYPE html>
<html lang="english">
  <head>
    <title>{{config('app.name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />
    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  </head>
  <body>
    <div>
      <link href="{{asset('css/login.css')}}" rel="stylesheet" />
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">GreenHub</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">About
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Signup</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

          <div class="login-login1">
            <div class="login-frame81">
              <div class="login-frame71">
                <div class="login-frame51">
{{--                   <span class="login-text25"><span>Login</span></span>
                  <span class="login-text27">
                    <span>Please fill in this form to login.</span>
                  </span>
                  <span class="login-text29"><span>Email</span></span>
                  <span class="login-text31"><span>Password</span></span>
                  <div class="login-frame41">
                    <img
                      alt="Rectangle82020"
                      src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/9c083c0a-aef2-4229-bb4d-ad85efcf8757/6d6a010a-b637-459f-8be6-b7e4ef433319?org_if_sml=11043"
                      class="login-rectangle81"
                    />
                    <span class="login-text33"><span>Login</span></span>
                  </div> --}}
                  <form action="" method="post">
                    <span class="login-text25"><span>Login</span></span>
                    <span class="login-text27">
                      <span>Please fill in this form to login.</span>
                    </span>
                    <span class="login-text29"><input type="email" name="email" placeholder="Enter Email"></span>
                    <span class="login-text31"><input type="password" name="pass" placeholder="Enter Password"></span>
                    <div class="login-frame41">
                      <img
                        alt="Rectangle82020"
                        src="https://aheioqhobo.cloudimg.io/v7/_playground-bucket-v2.teleporthq.io_/9c083c0a-aef2-4229-bb4d-ad85efcf8757/6d6a010a-b637-459f-8be6-b7e4ef433319?org_if_sml=11043"
                        class="login-rectangle81"
                      />
                      <span class="login-text33"><button style="color:antiquewhite" type="submit">Login</button></span>
                    </div>
                  </form>
                  <span class="login-text35">
                    <span class="login-text36">
                      Dont have an account? Signup
                    </span>
                    <span><a style="text-decoration: underline" href="">here</a></span>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
