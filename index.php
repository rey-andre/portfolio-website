<?php
$berkas = "forms/data/data.json";
$jsonData = file_get_contents($berkas);
$dataPesanAll = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Reynold Andre</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/logoRey0.png" rel="icon" />
    <link href="assets/img/logoRey0.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="d-flex flex-column">
        <div class="profile">
          <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle" />
          <h1 class="text-light"><a href="index.html">Reynold Andre</a></h1>
          <div class="social-links mt-3 text-center">
            <a href="https://github.com/rey-andre" target="_blank" class="github"><i class="bx bxl-github"></i></a>
            <a href="https://www.instagram.com/reynold.sgn/" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://www.linkedin.com/in/reynold-andre/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li>
              <a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
            </li>
            <li>
              <a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
            </li>
            <li>
              <a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a>
            </li>
            <li>
              <a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
            </li>
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
      <div class="hero-container" data-aos="fade-in">
        <h1>Reynold Andre</h1>
        <p>I'm <span class="typed" data-typed-items="College Student, Web Developer"></span></p>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <div class="section-title">
            <h2>About</h2>
            <!-- <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
              officiis commodi quidem hic quas.
            </p> -->
          </div>

          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="assets/img/profile-img.jpg" class="img-fluid" alt="" />
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>Junior Web Developer.</h3>
              <p class="fst-italic">I'm a Software Engineering Technology student at IPB Vocational School, passionate about web development with a focus on both front-end and back-end.</p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>26 September 2001</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a target="_blank" href="https://rey-andre.github.io/"> rey-andre.github.io</a></span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Bogor, Indonesia</span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>reynold.dre@gmail.com</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                  </ul>
                </div>
              </div>
              <p>
                I was born on September 26, 2001, and currently reside in Bogor. Web development has captured my interest, encompassing both the front-end and back-end aspects. I find joy in creating visually appealing and user-friendly
                websites while also delving into the technical intricacies of building robust and efficient software solutions.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Skills Section ======= -->
      <section id="skills" class="skills section-bg">
        <div class="container">
          <div class="section-title">
            <h2>Skills</h2>
            <p>I am still learning and exploring the field of web development.</p>
          </div>

          <div class="row skills-content">
            <div class="col-lg-6" data-aos="fade-up">
              <div class="progress">
                <span class="skill">HTML <i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">70%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">70%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="progress">
                <span class="skill">PHP <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Codeigniter3 <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Python <i class="val">65%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Skills Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio section-bg">
        <div class="container">
          <div class="section-title">
            <h2>Portfolio</h2>
            <p>Here are some of the websites that I have created and the certificates that I got from doing the course.</p>
          </div>

          <div class="row" data-aos="fade-up">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-web">Web</li>
                <li data-filter=".filter-card">Certificate</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container align-items-start" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/scmic.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/scmic.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" data-glightbox="title: SCMIC; description: This website is the result of a course project with my group of friends. I worked on the Services, News (using open API), Gallery, and dashboard sections that can customize the image content section of this website as well as view, delete, and print report data into pdf form."><i class="bx bx-plus"></i></a>
                  <a href="https://github.com/rey-andre/scmic" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/badut.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/badut.jpeg"
                    data-gallery="portfolioGallery"
                    class="portfolio-lightbox"
                    data-glightbox="title: Badut; description: This is an my self project that I did all by myself. Badut is the name of my group and my friends. This website contains information about what Badut is. In this website there is an admin dashboard that can customize the content images contained in the website and the admin can add, edit, delete Blogs."
                    ><i class="bx bx-plus"></i
                  ></a>
                  <a href="http://www.badut.rf.gd/" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/profilecard.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/profilecard.jpeg"
                    data-gallery="portfolioGallery"
                    class="portfolio-lightbox"
                    data-glightbox="title: Profile Card; description: this is my small independent project, the profile card website is made to provide brief information and present personal identity to people through the website."
                    ><i class="bx bx-plus"></i
                  ></a>
                  <a href="https://rey-andre.github.io/" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/lapakjajan.jpeg" class="img-fluid" alt="" />
                <div class="portfolio-links">
                  <a
                    href="assets/img/portfolio/lapakjajan.jpeg"
                    data-gallery="portfolioGallery"
                    class="portfolio-lightbox"
                    data-glightbox="title: Profile Card; description: this is my small independent project, the profile card website is made to provide brief information and present personal identity to people through the website."
                    ><i class="bx bx-plus"></i
                  ></a>
                  <a href="https://rey-andre.github.io/lapakjajan/" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/jsCourse.png" class="img-fluid" alt="" />
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/jsCourse.png" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                  <a href="https://drive.google.com/file/d/1qLi6HKy9IwyGviX3J60YvEr4BM1fTqia/view?usp=sharing"  target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/course-python.png" class="img-fluid" alt="" />
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/course-python.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="https://drive.google.com/file/d/10-qvNe0bpAi298doPMPR5sfYVbQGSqJN/view?usp=sharing" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/awsCourse.png" class="img-fluid" alt="" />
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/awsCourse.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="https://drive.google.com/file/d/1ySTirBkyLuVBj0VaMtgNqbzrEktgbd8r/view?usp=sharing" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/sertifJWD.png" class="img-fluid" alt="" />
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/sertifJWD.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="https://drive.google.com/file/d/1IZIDyj4W7DjyhuxaCmlVPnCxdRWJzL6B/view?usp=sharing" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/azurefundamental.png" class="img-fluid" alt="" />
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/azurefundamental.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="https://drive.google.com/file/d/1bDEThC3C65H4_PS8Y6U7-Pq19cada5Rk/view?usp=sharing" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="assets/img/portfolio/bootcampazure.png" class="img-fluid" alt="" />
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/bootcampazure.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
                  <a href="https://drive.google.com/file/d/1yawBDurMqNJjcJExWJ3A700F-0nl18O_/view?usp=sharing" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
          <div class="section-title">
            <h2>Contact</h2>
            <p>If you have a message for me, you can fill out the form below.</p>
          </div>

          <div class="ms-lg-5 me-lg-5" data-aos="fade-in">
            <div class="mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="<?=$_SERVER['PHP_SELF'];?>" method="post"  class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required />
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" rows="10" required></textarea>
                    </div>
                    <div class="my-3">
                      <!-- <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div> -->
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>

        <?php
        if (isset($_POST['submit'])) {
          // Mendapatkan data dari formulir kontak
          $name = $_POST['name'];
          $email = $_POST['email'];
          $subject = $_POST['subject'];
          $message = $_POST['message'];
      
          $dataPesan = [$email, $name, $subject, $message];
          array_push($dataPesanAll, $dataPesan);
          $jsonData = json_encode($dataPesanAll, JSON_PRETTY_PRINT);
          file_put_contents($berkas, $jsonData);
          
        ?>
          <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <body>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Your message has been sent!',
                timer: 1500
                }).then((result) => {
                    window.location='<?=$_SERVER['PHP_SELF'];?>';
                })
            </script>
          </body>
        <?php
        }
        ?>

        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="text-center">
          <img src="assets/img/rey0-logo.png" class="img-fluid" width="50" alt="Rey0">
        </div>
        <div class="credits"><a href="https://instagram.com/reynold.sgn/">reynold.sgn</a></div>
      </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
