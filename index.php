<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Stylish Portfolio - Start Bootstrap Template</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->

    <!-- Simple line icons-->

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
      rel="stylesheet"
    />
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- LINKED THE CSS FILE FROM THE MUSIC CSS -->
    <link rel="stylesheet" href="./css/musicStyles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"
    />
  </head>

  <body id="page-top">
    <!--COPIED AND PASTED THE MUSIC CONTAINER DIV FROM THE MUSIC'S HTML -->

    <div class="music-container" id="music-container">
      <div class="music-info">
        <h4 id="title"></h4>
        <div class="progress-container" id="progress-container">
          <div class="progress" id="progress"></div>
        </div>
      </div>

      <audio src="music/ukulele.mp3" id="audio"></audio>

      <div class="music-img-container">
        <img src="images/ukulele.jpg" alt="music-cover" id="cover" />
      </div>
      <div class="navigation">
        <button id="prev" class="action-btn">
          <i class="fas fa-backward"></i>
        </button>
        <button id="play" class="action-btn action-btn-big">
          <i class="fas fa-play"></i>
        </button>
        <button id="next" class="action-btn">
          <i class="fas fa-forward"></i>
        </button>
      </div>
    </div>

    <!-- Navigation-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="#page-top">Start Bootstrap</a></li>
        <li class="sidebar-nav-item"><a href="#page-top">Home</a></li>
        <li class="sidebar-nav-item"><a href="#about">About</a></li>
        <li class="sidebar-nav-item"><a href="#services">Services</a></li>
        <li class="sidebar-nav-item"><a href="#portfolio">Portfolio</a></li>
        <li class="sidebar-nav-item"><a href="#contact">Contact</a></li>
        <li class="sidebar-nav-item"><a href=http://jonathandanner.com>Resume</a></li>
      </ul>
    </nav>

    <div class="video__container">
      <video class="video__header" autoplay loop muted>
        <source src="assets/Video/TextTest1.mp4" type="video/mp4" poster="assets/img/Text.png"/>
        <source src="assets/Video/TextTest1WEBM.webm" type="video/webm" poster="assets/img/Text.png" />
        <source src="assets/Video/TextTest1OGG.ogg" type="video/ogg" poster="assets/img/Text.png" />
      </video>
    </div>

    <!-- About-->
    <!-- <section class="content-section bg-light" id="about">
      <div class="container px-4 px-lg-5 text-center">
        <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-10">
            <h2>test</h2>
            <a class="btn btn-dark btn-xl" href="#services">What We Offer</a>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Services-->
    <section
      class="content-section bg-primary text-white text-center"
      id="services"
    >
      <div class="container px-4 px-lg-5">
        <div class="content-section-heading">
  <!--        <h3 class="text-secondary mb-0">Services</h3> -->
          <h2 class="mb-5">Creativity</h2>
        </div>
        <div class="row gx-4 gx-lg-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a style="text-decoration: none;" href="https://drive.google.com/drive/u/1/folders/1xbcCf2LDJl86rDzyoZVIK2MSKX5EubN0">
              <span class="service-icon rounded-circle mx-auto mb-3"
              ><i class="icon-book-open"></i
            ></span></a>
            <h4><strong>Music Compositions</strong></h4>
            <p class="text-faded mb-0">Looks great on any screen size!</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
            <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/1GJqtup6tqGHU6mC9IkC5v31ygoDdg3pi?usp=sharing">
            <span class="service-icon rounded-circle mx-auto mb-3"
              ><i class="icon-music-tone-alt"></i
            ></span></a>
            <h4><strong>Music Productions</strong></h4>
            <p class="text-faded mb-0">Freshly redesigned for Bootstrap 5.</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/1IrsMvgOk_V-bXGoNflTwJADAlFkFfaJD?usp=sharing">
            <span class="service-icon rounded-circle mx-auto mb-3"
              ><i class="icon-film"></i
            ></span></a>
            <h4><strong>Music For Film</strong></h4>
            <p class="text-faded mb-0">
              Millions of users
              <i class="fas fa-heart"></i>
              Start Bootstrap!
            </p>
          </div>
          <div class="col-lg-3 col-md-6">
            <a style="text-decoration: none;" href="https://drive.google.com/drive/folders/1e3PS_MwnndoPaiMnAO22uuAD09yqQfxn?usp=sharing">
            <span class="service-icon rounded-circle mx-auto mb-3"
              ><i class="icon-equalizer"></i
            ></span></a>
            <h4><strong>Music Technology</strong></h4>
            <p class="text-faded mb-0">Test</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Callout-->
    <section class="callout">
      <div class="container px-4 px-lg-5 text-center">
        <h2 class="mx-auto mb-5">
          Welcome to
          <em>your</em>
          next website!
        </h2>
        <a
          class="btn btn-primary btn-xl"
          href="https://startbootstrap.com/theme/stylish-portfolio/"
          >Download Now!</a
        >
      </div>
    </section>
    <!-- Portfolio-->
    <section class="content-section" id="portfolio">
      <div class="container px-4 px-lg-5">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Portfolio</h3>
          <h2 class="mb-5">Recent Projects</h2>
        </div>
        <div class="row gx-0">
          <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
              <div class="caption">
                <div class="caption-content">
                  <div class="h2">Stationary</div>
                  <p class="mb-0">
                    A yellow pencil with envelopes on a clean, blue backdrop!
                  </p>
                </div>
              </div>
              <img
                class="img-fluid"
                src="assets/img/portfolio-1.jpg"
                alt="..."
              />
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
              <div class="caption">
                <div class="caption-content">
                  <div class="h2">Ice Cream</div>
                  <p class="mb-0">
                    A dark blue background with a colored pencil, a clip, and a
                    tiny ice cream cone!
                  </p>
                </div>
              </div>
              <img
                class="img-fluid"
                src="assets/img/portfolio-2.jpg"
                alt="..."
              />
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
              <div class="caption">
                <div class="caption-content">
                  <div class="h2">Strawberries</div>
                  <p class="mb-0">
                    Strawberries are such a tasty snack, especially with a
                    little sugar on top!
                  </p>
                </div>
              </div>
              <img
                class="img-fluid"
                src="assets/img/portfolio-3.jpg"
                alt="..."
              />
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#!">
              <div class="caption">
                <div class="caption-content">
                  <div class="h2">Workspace</div>
                  <p class="mb-0">
                    A yellow workspace with some scissors, pencils, and other
                    objects.
                  </p>
                </div>
              </div>
              <img
                class="img-fluid"
                src="assets/img/portfolio-4.jpg"
                alt="..."
              />
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Call to Action-->
    <section class="content-section bg-primary text-white">
      <div class="container px-4 px-lg-5 text-center">
        <h2 class="mb-4">The buttons below are impossible to resist...</h2>
        <a class="btn btn-xl btn-light me-4" href="#!">Click Me!</a>
        <a class="btn btn-xl btn-dark" href="#!">Look at Me!</a>
      </div>
    </section>
    <!-- Map-->
    <div class="map" id="contact">
      <iframe
        src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"
      ></iframe>
      <br />
      <small
        ><a
          href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"
        ></a
      ></small>
    </div>
    <!-- Footer-->
    <footer class="footer text-center">
      <div class="container px-4 px-lg-5">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#!"
              ><i class="icon-social-facebook"></i
            ></a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#!"
              ><i class="icon-social-twitter"></i
            ></a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#!"
              ><i class="icon-social-github"></i
            ></a>
          </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Your Website 2021</p>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"
      ><i class="fas fa-angle-up"></i
    ></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>
    <script src="js/MusicScript.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/typing.js"></script>
  </body>
</html>
