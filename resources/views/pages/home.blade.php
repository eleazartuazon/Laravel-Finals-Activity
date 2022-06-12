@extends('layouts.default')

@section('content')

<head>
  <title> Eleazar Tuazon</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <style>

* {
  box-sizing: border-box;
  height: auto;
}

body {
  background-color: #d1d1d1;
  height: 100%;
}

.navigation {
  float:left;
  width: 15%;
  height: 98.1vh;
  background-color: #262626;
}

@media (max-width: 768px) {
  .navigation {
    padding: 5px;
  }
}
a {
  display: block;
  margin: 30% 0 35% 11.5%;
  text-decoration: none;
  color: #fff;
  font-weight: bold;
}
@media(max-width: 980px) {
  a {
    margin-left: 10%;
    font-size: 16px;
  }
}
@media(max-width: 780px) {
  a {
    margin-left: 9%;
    font-size: 14px;
  }
}
@media(max-width: 600px) {
  a {
    margin-left: 5%;
    font-size: 12px;
  }
}
@media(max-width: 400px) {
  a {
    margin-left: 1%;
    font-size: 11px;
  }
}

.btn {
  display: block;
  padding-top: 3px;
  margin: 50%  31%;
  text-decoration: none;
  color: #fff;
  font-weight: bold;
  font-family: Montserrat;
  font-size: 17px;
  text-align: center;
}

.active, .btn:hover {
  color: #fa5700;
  transition-duration: .5s;
}

.page {
  float: right;
  width: 85%;
  height: 98.1vh;
  background-size: cover;
  background: url("https://images.prismic.io/rluijtenant/e68e600b-ff64-4cc7-919e-c960062d7b88_chamonix-4.jpg?auto=compress,format&fit=clip&auto=compress&w=1293.8646160284577&h=862.6666666666666&dpr=2");
}

#home-page {
  position: absolute;
  right: 8px;
  width: 84.3%;
  height: 98vh;
  transition-duration: 1.3s;
  overflow: hidden;
}

.card {
  position: relative;
  width:420px;
  height:340px;
  background-color:#edf2f4;
  margin-left:50%;
  margin: 225px auto;
  align-items: center;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

.card h2 {
  margin-top: -30px;
  padding-top: 30px;
  font-family: oxygen;
  font-weight: bolder;
  font-style: normal;
  text-align: center;
  color: #000;
  font-size: 35px;
}

.card h5 {
  margin-top: 30px;
  color:gray;
  font-family: oxygen;
  font-weight: 100;
  text-align:center;
  font-size: 16px;
}

.fa {
  font-size: 40px;
  width: 1px;
  text-align: center;
  text-decoration: none;
  margin-left: 17.5%;
  color: #000;
  margin-top: 2%;
}

.fa:hover {
  opacity: 0.7;
  transition-duration: .5s;
}

#about-page {
  position: absolute;
  right: 8px;
  width: 0;
  height: 98vh;
  transition-duration: 1.3s;
  overflow: hidden;
}

#about-page .blank {
  position: relative;
  width: 1050px;
  height: 650px;
  background: #edf2f4;
  background-size: cover;
  margin-left: 50%;
  margin: 40px auto;
  align-items: center;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

#about-page h1 {
  font-size: 50px;
  color: #913636;
  font-family: oxygen;
  font-weight: bold;
  letter-spacing: 5px;
  padding-top: 5%;
  text-align: center;
  margin-bottom: -20px;
}

#about-page h3 {
  font-size: 40px;
  color: #000;
  font-family: oxygen;
  font-weight: bold;
  letter-spacing: 5px;
  padding-top: 20px;
  text-align: center;
  text-decoration: underline;
}

#about-page p {
  font-size: 20px;
  color: rgb(0, 0, 0);
  font-family: oxygen;
  font-weight: bold;
  letter-spacing: 1px;
  padding-left: 5%;
  padding-right: 5%;
}

#dream-page {
  position: absolute;
  right: 8px;
  width: 0;
  height: 98vh;
  transition-duration: 1.3s;
  overflow: hidden;
}

#dream-page .blank {
  position: relative;
  width: 1050px;
  height: 650px;
  background: #edf2f4;
  background-size: cover;
  margin-left: 50%;
  margin: 40px auto;
  align-items: center;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

#dream-page h1 {
  font-size: 50px;
  color: #443691;
  font-family: oxygen;
  font-weight: bold;
  letter-spacing: 5px;
  padding-top: 5%;
  text-align: center;
  margin-bottom: -20px;
}

#dream-page h3 {
  font-size: 40px;
  color: #000;
  font-family: oxygen;
  font-weight: bold;
  letter-spacing: 5px;
  padding-top: 20px;
  text-align: center;
  text-decoration: underline;
}

#dream-page p {
  font-size: 23px;
  color: rgb(0, 0, 0);
  font-family: oxygen;
  font-weight: bold;
  letter-spacing: 1px;
  padding-left: 5%;
  padding-right: 5%;
}

#years-page {
  position: absolute;
  right: 8px;
  width: 0;
  height: 98vh;
  transition-duration: 1.3s;
  overflow: hidden;
}

#years-page .blank {
  position: relative;
  width: 1050px;
  height: 650px;
  background: #edf2f4;
  margin-left: 50%;
  margin: 40px auto;
  align-items: center;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}

#years-page h1 {
  font-size: 60px;
  color: #389136;
  font-family: oxygen;
  font-weight: bold;
  letter-spacing: 5px;
  padding-top: 5%;
  text-align: center;
}

#years-page p {
  font-size: 40px;
  color: rgb(0, 0, 0);
  font-family: oxygen;
  font-weight: bold;
  letter-spacing: 1px;
  padding-left: 5%;
  padding-right: 5%;
}
  </style>

</head>

<body>

 <div id="nav" class="navigation">
  <a class="btn active" href="#" id="home" target="_self">ABOUT ME</a>
  <a class="btn" href="#" id="about" target="_self">CS202</a>
  <a class="btn" href="#" id="dream" target="_self">CS405</a>
  <a class="btn" href="#" id="years" target="_self">6 YEARS FROM NOW </a>
</div>

<div class="page">
  <div class="paged" id="home-page">
      <div class="card">
        <h2>Eleazar Tuazon</h2>
        <h5>Hey! I'm Eleazar, a Computer Science student<br> of Pamantasan ng Lungsod ng Pasig<br> & future developer.<br><br><br>Here's all my links!</h5>
          <a href="https://www.facebook.com/FakeEleazar" class="fa fa-facebook"></a>   
          <a href="https://twitter.com/fakeeleazar" class="fa fa-twitter"></a>
          <a href="https://www.instagram.com/fakeeleazar/" class="fa fa-instagram"></a>
          <a href="mailto:eleazartuazon1d@gmail.com" class="fa fa-google"></a>
      </div>
  </div>

  <div class="paged" id="about-page">
    <div class="blank">
      <h1>CS202: Parallel and Distributed Programming</h1>
      <h3>Github</h3>
          <p>GitHub is a web-based interface that uses Git, the open source version control software that lets multiple people make separate changes to web pages at the same time. As Carpenter notes, because it allows for real-time collaboration, GitHub encourages teams to work together to build and edit their site content.
          </p>

          <p>GitHub allows multiple developers to work on a single project at the same time, reduces the risk of duplicative or conflicting work, and can help decrease production time. With GitHub, developers can build code, track changes, and innovate solutions to problems that might arise during the site development process simultaneously. Non-developers can also use it to create, edit, and update website content.
          </p>
        </div>
      </div>

  
  <div class="paged" id="dream-page">
    <div class="blank">
      <h1>CS405: Open Source Programming with Framework</h1>
      <h3>Laravel Breeze</h3>
        <p>Laravel Breeze is a minimal, simple implementation of all of Laravel's authentication features, including login, registration, password reset, email verification, and password confirmation. Laravel Breeze's default view layer is made up of simple Blade templates styled with Tailwind CSS.
        </p>

        <p>Breeze provides a wonderful starting point for beginning a fresh Laravel application and is also great choice for projects that plan to take their Blade templates to the next level with Laravel Livewire.
        </p>
      </div>
    </div>
  </div>
  
  <div class="paged" id="years-page">
    <div class="blank">
      <h1>6 Years From Now</h1>
          <p>I will financially support my family as I become app and web developer by taking programming courses and gaining experiences in different companies after graduating with my Bachelor of Science in Computer Science.
          </p>
        </div>
      </div>
      
    </div>
  </div>
</div>

  <script>
  const home = document.querySelector("#home");
const about = document.querySelector("#about");
const services = document.querySelector("#dream");
const contact = document.querySelector("#years");
var btnContainer = document.getElementById("nav");
var btns = btnContainer.getElementsByClassName("btn");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

home.addEventListener("click", (event) => {
  document.querySelectorAll(".paged").forEach(function (el) {
    el.style.width = 0;
  });
  var hpage = document.getElementById("home-page");
  hpage.style.width = "84.3%";
});

about.addEventListener("click", (event) => {
  document.querySelectorAll(".paged").forEach(function (el) {
    el.style.width = 0;
  });
  var apage = document.getElementById("about-page");
  apage.style.width = "84.3%";
});

services.addEventListener("click", (event) => {
  document.querySelectorAll(".paged").forEach(function (el) {
    el.style.width = 0;
  });
  var spage = document.getElementById("dream-page");
  spage.style.width = "84.5%";
});

contact.addEventListener("click", (event) => {
  document.querySelectorAll(".paged").forEach(function (el) {
    el.style.width = 0;
  });
  var cpage = document.getElementById("years-page");
  cpage.style.width = "84.5%";
});

</script>

</body>
</html>

@stop
