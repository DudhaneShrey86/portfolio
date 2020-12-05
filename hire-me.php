<?php
  include 'send-mail.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Hire me for a Project. We will have a fun time!">
    <meta name="keywords" content="hire, message, email, web, developer, shreyanshu, dudhane, dudhaneshrey86">
    <meta name="author" content="Shreyanshu Dudhane">
    <title>Shreyanshu Dudhane - Hire Me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- canonical -->
    <link rel="icon" type="image/png" href="./favicon.png">
    <link rel="stylesheet" href="./css/contact.css">
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
            <li><a href="./index.php"><i class="fas fa-times"></i></a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <section id="contact-me">
        <div class="container">
          <div class="">
            <h2>Excited to work on the project? Me too!</h2>
            <p>Leave a short summary about your project and we will get in touch soon.</p>
          </div>
          <div class="white-card">
            <div class="card-content">
              <form action="" method="post">
                <div id="contact-form-grid">
                  <div class="contact-element">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="" required>
                  </div>
                  <div class="contact-element">
                    <label for="name">Email</label>
                    <input type="email" name="email" id="email" value="" required>
                  </div>
                  <div class="contact-element">
                    <label for="message">Project Details</label>
                    <textarea name="message" rows="8" required></textarea>
                  </div>
                </div>
                <div class="blank-div">

                </div>
                <?php
                if(isset($res) && !empty($res)){
                  ?>
                  <div>
                    <p id="submitted">Thank you for your response. I will get back to you very soon!</p>
                  </div>
                  <?php
                }
                else{
                  ?>
                  <div>
                    <button type="submit" id="submit-button">Send <i class="fas fa-share"></i> </button>
                  </div>
                  <?php
                }
                ?>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script src="./js/index.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/16df088500.js" crossorigin="anonymous"></script>
  </body>
</html>
