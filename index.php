    <?php
    include("database1.php");

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="style.css" />
      <title>personal Portfolio website</title>
      <script src="https://kit.fontawesome.com/f9a3fc655e.js" crossorigin="anonymous"></script>
    </head>

    <body>
      <div id="header">
        <div class="container">
          <nav>
            <img src="personal-portfolio-img/images/logo.png" class="logo" />
            <ul id="sidemenu">
              <li><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#contact">Contact</a></li>
              <i class="fas fa-times" onclick="closemenu()"></i>
            </ul>
            <i class="fas fa-bars" onclick="openmenu()"></i>
          </nav>
          <div class="header-text">
            <p>UI/UX Designer</p>
            <h1>Hi , I'm <span>Onkar</span> <br />from CSC Powai</h1>
          </div>
        </div>
      </div>

      <!-- -----------About------------ -->

      <div id="about">
        <div class="container">
          <div class="row">
            <div class="about-col-1">
              <img src="personal-portfolio-img/images/onkar.jpg" alt="" />
            </div>
            <div class="about-col-2">
              <h1 class="sub-title">About Me</h1>
              <p>

                In the dynamic realm of web development, proficiency in HTML, CSS, and JavaScript converge with a mastery of
                Java and advanced data structures. This blend of skills promises to create captivating digital experiences,
                poised to make a profound impact in the ever-evolving landscape of technology.
              </p>
              <div class="tab-titles">
                <p class="tab-links active-link" onclick="opentab('skills')">
                  Skills
                </p>
                <p class="tab-links" onclick="opentab('exprience')">Exprience</p>
                <p class="tab-links" onclick="opentab('education')">Education</p>
              </div>
              <div class="tab-contents active-tab" id="skills">
                <ul>
                  <li><span>DSA</span><br />JAVA+DSA</li>
                  <li><span>Web Development</span><br />Web App Development</li>
                  <li><span>App Development</span><br />Building Android apps</li>
                </ul>
              </div>
              <div class="tab-contents" id="exprience">
                <ul>
                  <li>
                    <span>2023-24</span><br />working in a College project
                  </li>
                  <li><span>2024</span><br />building some HTML CSS JS project</li>
                  <!-- <li>
                      <span>2016-2017</span><br />Internship at ekart Commerce.
                    </li> -->
                </ul>
              </div>
              <div class="tab-contents" id="education">
                <ul>
                  <li>
                    <span>2021-2024</span><br />BCA degree
                  </li>
                  <!-- <li><span>2016</span><br />ssc</li>
                    <li><span>2014</span><br />loadingg...</li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- -------------Service------------------ -->

      <div id="services">
        <div class="container">
          <h1 class="sub-title new-style">My Services</h1>
          <div class="services-list">
            <div>
              <i class="fa-solid fa-code"></i>
              <h2>Web Design</h2>
              <p>
                Proficient in HTML, CSS, JavaScript, and Java, adept at advanced
                data structures. Leveraging these skills to create captivating digital
                experiences that seamlessly blend functionality and aesthetics for
                impactful web development.
              </p>
              <a href="#">Learn more</a>
            </div>
            <div>
              <i class="fas fa-crop-alt"></i>
              <h2>website backend development</h2>
              <p>
                Proficient in PHP backend development, adept at database management and
                server-side scripting. Leveraging these skills to create robust, scalable,
                and efficient web applications for seamless user experiences.
              </p>
              <a href="#">Learn more</a>
            </div>
            <!-- <div>
              <i class="fa-brands fa-app-store"></i>
              <h2>App Design</h2>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea,
                impedit voluptate, sit minus quidem repellendus itaque error, quae
                at debitis quasi! Iste fugiat omnis debitis quas reiciendis
                temporibus odio voluptates?
              </p>
              <a href="#">Learn more</a>
            </div> -->
          </div>
        </div>
      </div>
      <!-- ---------Portfolio---------- -->
      <div id="portfolio">
        <div class="container">
          <h1 class="sub-title">My Work</h1>
          <div class="work-list">
            <div class="work">
              <img src="Rock-Paper_Scissor/cropped-rock_paper_scissor.jpg" alt="" />
              <div class="layer">
                <h3>Rock Paper Scissor Game</h3>
                <p>

                  Rock, paper, scissors—a timeless game of strategy and chance. Pit your wits against the computer or
                  friends in this classic showdown of hand gestures, where every move brings excitement and anticipation.
                  Who will emerge victorious?
                </p>
                <a href="Rock-Paper_Scissor/index.html" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
              </div>
            </div>

            <div class="work">
              <img src="tick-tack toe/cropped-tik-tak-toe game.jpg" alt="" />
              <div class="layer">
                <h3>Tik-Tak Toe game</h3>
                <p>

                  Tic-tac-toe, a beloved game of Xs and Os, where strategy meets simplicity.
                  Challengefriends or test your skills
                  against the computer in this timeless battle for victory
                </p>
                <a href="tick-tack toe/index.html" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
              </div>
            </div>

            <div class="work">
              <img src="currency-coverter API/cropped-api.png" alt="" />
              <div class="layer">
                <h3>Currency Converter API</h3>
                <p>

                  Access real-time exchange rates and convert currencies effortlessly with our Currency Converter API.
                   Streamline financial transactions and enhance user experiences with accurate and reliable currency 
                   conversion capabilities
                </p>
                <a href="currency-coverter API/index.html" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
              </div>
            </div>
          </div>
          <a href="#" class="btn">See more</a>
        </div>
      </div>

      <!-- ------------------Contact---------------------- -->
      <div id="contact">
        <div class="container">
          <div class="row">
            <div class="contact-left">
              <h1 class="sub-title">Contact Me</h1>
              <p> <i class="fa-solid fa-paper-plane"></i>khedekar679@gmail.com</p>
              <p><i class="fa-solid fa-square-phone"></i>7972868451</p>
              <div class="social-icons">
                <!-- <a href="#"><i class="fa-brands fa-facebook"></i></a> -->
                <a href="https://twitter.com/onkarr_1" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/onkar-khedekar-4a914426b/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
              </div>
              <a href="personal-portfolio-img/images/my-cv.pdf"  download="" class="btn btn2">Download CV</a>
            </div>
            <div class="contact-right">

              <form action="index.php" method="post" name="submit-to-google-sheet">
                <input type="text" name="Name" placeholder="Your Name" required>
                <input type="email" name="Email" placeholder="your Email" required>
                <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                <input type="submit" name="submit" value="submit" class="btn btn2">
                <!-- <button type="submit" class="btn btn2"><input type="submit" name="submit" value="submit"></button> -->
              </form>

            </div>
          </div>
        </div>
        <div class="copyright">
          <p>Copyright &#169; Onkar Made for <i class="fa-solid fa-heart"></i> Educational Purpose</p>
        </div>
      </div>

      <script src="script.js">
      </script>

    </body>

    </html>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = filter_input(INPUT_POST, "Name", FILTER_SANITIZE_SPECIAL_CHARS);
      $email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_EMAIL);
      $message = $_POST["Message"];
      if (empty($name)) {
        echo "Enter a name";
      } elseif (empty($email)) {
        echo "enter a Email";
      } elseif (empty($message)) {
        echo "give us a good message";
      } else {
        $sql = "INSERT INTO user_data(Name,Email,Message)
          VALUES('$name','$email','$message')";
        try {
          mysqli_query($conn, $sql);
          // echo "data registered succesfully";
        } catch (mysqli_sql_exception) {
          // echo "some error occured";
        }
      }
    }


    mysqli_close($conn);
    ?>