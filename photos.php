<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Image gallery of my recent projects and startups">
    <meta name="keywords" content="recent, works, images, screenshots, proof, visual, projects, shreyanshu, dudhane, dudhaneshrey86">
    <meta name="author" content="Shreyanshu Dudhane">
    <title>Image Gallery - Recent Projects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- canonical -->
    <link rel="canonical" href="">
    <link rel="icon" type="image/png" href="./favicon.png">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/grid.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container">
        <nav>
          <div class="logodiv">
            <a href="./index.php" class="logo"><img src="./images/mylogo3-colored2-min.png" alt="Logo"></a>
          </div>
          <ul id="navul">
            <li><a href="./about.php">About</a></li>
            <li><a href="./recent-works.php">Recent Works</a></li>
          </ul>
          <div id="ham-icon">
            <i class="fas fa-bars" id="ham" onclick="menu()"></i>
          </div>
        </nav>
        <ul id="ham-menu">
          <li><a href="./about.php">About</a></li>
          <li><a href="./recent-works.php">Recent Works</a></li>
        </ul>
        <div id="header-content">
          <div id="introdiv">
            <h1>Hello, I am Shreyanshu</h1>
            <h2>Full Stack Web Developer</h2>
          </div>
          <div id="avataardiv">
            <img src="./images/me.svg" id="avataar" alt="Me in a cartoonish way">
          </div>
        </div>
      </div>
    </header>
    <main>
      <section id="short-me" class="container">
        <div class="card">
          <div class="card-content">
            <p>
              Hi! I am a web developer and I love to build websites and web-apps. I am generally a bit shy, honest and confident about my work.
            </p>
            <a href="./about.php" class="links colored">Get to know me better<i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </section>
      <div class="blank-div">

      </div>
      <section id="my-skills" class="container">
        <div class="padding-div">
          <div>
            <h3>What I can do</h3>
            <p>
              As a Full Stack Web Developer I can do pretty much everything from start to end of a project, except testing.
            </p>
            <br>
          </div>
          <div>
            <h4 class="customh4">Languages I speak:</h4>
            <div id="skills-maindiv" class="grid-main">
              <div class="child-items">
                <p>HTML, CSS, JS, JQuery, Materialize</p>
                <p class="skills-heading">Front-End</p>
              </div>
              <div class="child-items">
                <p>PHP, Laravel</p>
                <p class="skills-heading">Back-End</p>
              </div>
              <div class="child-items">
                <p>MySQL, Google Firestore</p>
                <p class="skills-heading">Databases</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="blank-div">

      </div>
      <section id="recent-works" class="container">
        <div class="padding-div">
          <div>
            <h3>Some of my recent works</h3>
            <p>
              These are some of my recent works, feel free to ask me anything about them.
            </p>
            <br>
          </div>
          <div id="works-maindiv" class="grid-main">
            <div class="work-divs child-items">
              <div class="work-content">
                <p><b>AvidGames</b></p>
                <p>AvidGames is a games website created for the people to have some fun time</p>
                <p><a href="https://avidgames.site/" class="link active" target="_blank">Go To Site</a></p>
              </div>
            </div>
            <div class="work-divs child-items">
              <div class="work-content">
                <p><b>TMS | Allogsec</b></p>
                <p>TMS is a web-application built for trust organizaitons to help smoothen their workflow</p>
                <p><a href="#" class="link">Coming Soon</a></p>
              </div>
            </div>
            <div class="work-divs child-items">
              <div class="work-content">
                <p><b>Insurance Solutions</b></p>
                <p>Insurance Solutions is a policy agency known for their remarkable policy services</p>
                <p><a href="#" class="link">Coming Soon</a></p>
              </div>
            </div>
          </div>
          <br>
          <div class="">
            <a href="./recent-works.php" class="links white">More Details<i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </section>
      <div class="blank-div">

      </div>
    </main>
    <footer>
      <div class="container">
        <div class="card2">
          <div class="card-content">
            <h3>Let's meet up!</h3>
            <p style="font-size: 0.95em">
              Bring your idea with you and we will materialize it into reality, together. It will be fun!
            </p>
            <a href="./contact.php" class="links colored2">Email me<i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        <div id="footer-content">
          <div id="social-links-div">
            <a href="https://t.me/dudhaneshrey86" class="social-links" title="Telegram" target="_blank"><i class="fab fa-telegram-plane"></i></a>
            <a href="https://www.linkedin.com/in/shreyanshu-dudhane-bb20791a0/" title="LinkedIn" class="social-links" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.reddit.com/user/DudhaneShrey86" class="social-links" title="Reddit" target="_blank"><i class="fab fa-reddit-alien"></i></a>
            <a href="https://www.facebook.com/shreyanshu.dudhane" class="social-links" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
          </div>
          <div id="endstamp">
            <div class="logodiv">
              <a href="./index.php" class="logo2"><img src="./images/mylogo-white2-min.png" alt="Logo"></a>
            </div>
            <h5 id="tagline">Becoming better everyday</h5>
            <div>
              <p id="copyright">&copy; 2020 Shreyanshu Dudhane</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div id="contact-form">

    </div>
    <script src="./js/index.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/16df088500.js" crossorigin="anonymous"></script>
  </body>
</html>
