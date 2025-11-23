<?php
require_once 'data.php';

// Extract data variables for use in the template
extract($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo htmlspecialchars($name); ?></title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="assets/css/main.css" rel="stylesheet">


    </head>

    <body class="index-page dark-background text-light">

        <header id="header" class="header dark-background d-flex flex-column">
            <i class="header-toggle d-xl-none bi bi-list"></i>

            <div class="profile-img">
                <img src="assets/img/profile.jpg" alt="" class="img-fluid rounded-circle">
            </div>

            <a href="index.html" class="logo d-flex align-items-center justify-content-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">Kamlesh Nagar</h1>
            </a>

            <div class="social-links text-center">
                <a target="_blank" href="mailto:kamleshnagar0095@gmail.com" class="envelope"><i
                        class="bi bi-envelope"></i></a>
                <a target="_blank" href="https://www.youtube.com/@ProdbyKaalMusic" class="youtube"><i
                        class="bi bi-youtube"></i></a>
                <a target="_blank" href="https://www.instagram.com/kaal_music_official/" class="instagram"><i
                        class="bi bi-instagram"></i></a>
            </div>

            <nav id="navmenu" class="navmenu slider_hide">
                <ul>
                    <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                    <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                    <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
                    <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                    <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                    <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>


                </ul>
            </nav>

        </header>

        <main class="main slider_hide">
            <main class="main">

                <!-- Hero Section -->
                <section id="hero" class="hero section dark-background text-light">
                    <img src="https://images.unsplash.com/photo-1490810194309-344b3661ba39?q=80&w=1448&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" data-aos="fade-in" class="">
                    <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <h2><?php echo htmlspecialchars($name); ?></h2>
                        <p>I'm
                            <span class="typed" data-typed-items="<?php echo htmlspecialchars(implode(',', $typed_items ?? [])); ?>">
                                <?php echo htmlspecialchars($typed_items[0] ?? $designation); ?>
                            </span>
                            <span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span>
                        </p>
                        <p class="lead"><?php echo htmlspecialchars($hero_paragraph); ?></p>
                    </div>
                </section>
                < <!-- /Hero Section -->

                    <!-- Stats Section -->
                    <!-- /Stats Section -->

                    <!-- Portfolio Section -->
                    <section id="portfolio" class="portfolio section dark-background text-light">
                        <div class="container section-title" data-aos="fade-up">
                            <h2>Portfolio</h2>
                            <p>Selected videos, motion pieces and beats. Click any item for a preview or full details.</p>
                        </div>

                        <div class="container">
                            <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                                data-sort="original-order">
                                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <li data-filter=".filter-video">Video</li>
                                    <li data-filter=".filter-beat">Beats</li>
                                </ul>

                                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                                    <?php foreach ($portfolio as $p): ?>
                                        <div
                                            class="col-lg-4 col-md-6 portfolio-item isotope-item filter-<?php echo htmlspecialchars($p['type']); ?>">
                                            <div class="portfolio-content h-100">

                                                <!-- Thumbnail Click -->
                                                <a href="<?php echo htmlspecialchars($p['video']); ?>" target="_blank">
                                                    <img src="<?php echo htmlspecialchars($p['image']); ?>" class="img-fluid rounded"
                                                        alt="YouTube Video">
                                                </a>

                                                <div class="portfolio-info text-center ">
                                                    <h4 class="text-center"><?php echo htmlspecialchars($p['title']); ?></h4>
                                                    <p><?php echo htmlspecialchars($p['desc']); ?></p>

                                                    <!-- Play Button (NOT nested) -->
                                                    <a href="<?php echo htmlspecialchars($p['video']); ?>" target="_blank" title="Play Video"
                                                        class="details-link me-4 pe-4" style="">
                                                        <i class="bi bi-play"></i>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="row m-4">
                                    <a class="btn text-light fw-bold" target="_blank" style="background-color: #148fc8"
                                        href="https://www.youtube.com/@ProdbyKaalMusic">See more <small><em> on
                                            </em></small><i class="bi bi-youtube"></i> Youtube.</a>
                                </div>

                            </div>
                        </div>
                    </section>

                    <!-- /Portfolio Section -->

                    <!-- Skills Section -->
                    <section id="skills" class="skills section dark-background text-light">
                        <div class="container section-title" data-aos="fade-up">
                            <h2>Skills</h2>
                            <p>Editing, motion, and audio production skills I use to craft each project.</p>
                        </div>

                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                            <div class="row skills-content skills-animation">
                                <div class="col-lg-6">
                                    <?php foreach (array_slice($skills, 0, 3) as $skill): ?>
                                        <div class="progress">
                                            <span class="skill"><span><?php echo htmlspecialchars($skill['name']); ?></span> <i
                                                    class="val"><?php echo htmlspecialchars($skill['percent']); ?>%</i></span>
                                            <div class="progress-bar-wrap">
                                                <div class="progress-bar" role="progressbar"
                                                    aria-valuenow="<?php echo htmlspecialchars($skill['percent']); ?>" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="col-lg-6">
                                    <?php foreach (array_slice($skills, 3) as $skill): ?>
                                        <div class="progress">
                                            <span class="skill"><span><?php echo htmlspecialchars($skill['name']); ?></span> <i
                                                    class="val"><?php echo htmlspecialchars($skill['percent']); ?>%</i></span>
                                            <div class="progress-bar-wrap">
                                                <div class="progress-bar" role="progressbar"
                                                    aria-valuenow="<?php echo htmlspecialchars($skill['percent']); ?>" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Skills Section -->

                    <!-- Services Section -->
                    <section id="services" class="services section dark-background text-light">
                        <div class="container section-title" data-aos="fade-up">
                            <h2>Services</h2>
                            <p>I offer end-to-end post-production and music services for artists, creators and businesses.
                            </p>
                        </div>

                        <div class="container">
                            <div class="row gy-4 justify-content-center m-3 ">
                                <?php foreach ($services as $i => $svc): ?>
                                    <div class=" bg-primary-subtle text-dark  p-3 m-3 text-dark mx-2 rounded col-lg-5 col-md-3 col-sm-2 service-item d-flex"
                                        data-aos="fade-up" data-aos-delay="<?php echo htmlspecialchars(100 + $i * 100); ?>">
                                        <div class="icon flex-shrink-0"><i class="bi <?php echo htmlspecialchars($svc['icon']); ?>"></i></div>
                                        <div class="">
                                            <h4 class="title text-dark"><?php echo htmlspecialchars($svc['title']); ?></h4>
                                            <p class="description"><?php echo htmlspecialchars($svc['desc']); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>

                    <div>
                        <!-- /Services Section -->

                    <!-- About Section -->
                    <section id="about" class="about section dark-background text-light shadow">
                        <div class="container section-title" data-aos="fade-up">
                            <h2>About</h2>
                            <p><?php echo htmlspecialchars($about_paragraph); ?></p>
                        </div>

                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                            <div class="row gy-4 justify-content-center">
                                <div class="col-lg-4">
                                    <img src="assets/img/profile.jpg" class="img-fluid"
                                        alt="<?php echo htmlspecialchars($name); ?> — Profile">
                                </div>
                                <div class="col-lg-8 content">
                                    <h2><?php echo htmlspecialchars($designation); ?>.</h2>
                                    <p class="fst-italic py-3"><?php echo htmlspecialchars($hero_paragraph); ?></p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul>
                                                <li><i class="bi bi-chevron-right"></i> <strong>Experience:</strong>
                                                    <span><?php echo htmlspecialchars($experience_years); ?>+ years</span>
                                                </li>
                                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                                    <span><?php echo htmlspecialchars($_SERVER['HTTP_HOST'] ?? 'localhost'); ?></span>
                                                </li>
                                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                                                    <span><?php echo htmlspecialchars($phone); ?></span>
                                                </li>
                                                <li><i class="bi bi-chevron-right"></i> <strong>Location:</strong>
                                                    <span><?php echo htmlspecialchars($address); ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6">
                                            <ul>
                                                <li><i class="bi bi-chevron-right"></i> <strong>Main Tools:</strong>
                                                    <span><?php echo htmlspecialchars($tools); ?></span>
                                                </li>
                                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                                    <span><?php echo htmlspecialchars($email); ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="py-3"><?php echo htmlspecialchars($about_paragraph); ?></p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /About Section -->
                    <!-- Resume Section -->
                    <section id="resume" class="resume section dark-background text-light text-ligh">
                        <div class="container section-title" data-aos="fade-up">
                            <h2>Resume</h2>
                            <p>Short summary of my background in video editing and music production.</p>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="resume-title">Summary</h3>

                                    <div class="resume-item pb-0">
                                        <h4><?php echo htmlspecialchars($resume['summary_name']); ?></h4>
                                        <p><em><?php echo htmlspecialchars($resume['summary_text']); ?></em></p>
                                        <ul>
                                            <li><?php echo htmlspecialchars($resume['location']); ?></li>
                                            <li><?php echo htmlspecialchars($resume['phone']); ?></li>
                                            <li><?php echo htmlspecialchars($resume['email']); ?></li>
                                        </ul>
                                    </div>

                                    <h3 class="resume-title">Education</h3>
                                    <div class="resume-item">
                                        <h4><?php echo htmlspecialchars($resume['education']['degree']); ?></h4>
                                        <h5><?php echo htmlspecialchars($resume['education']['years']); ?></h5>
                                        <p><em><?php echo htmlspecialchars($resume['education']['college']); ?></em></p>
                                        <p><?php echo htmlspecialchars($resume['education']['description']); ?></p>
                                    </div>
                                </div>

                                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                    <h3 class="resume-title">Professional Experience</h3>

                                    <?php foreach ($resume['experience'] as $exp): ?>
                                        <div class="resume-item">
                                            <h4><?php echo htmlspecialchars($exp['title']); ?></h4>
                                            <h5><?php echo htmlspecialchars($exp['years']); ?></h5>
                                            <p><span><?php echo htmlspecialchars($exp['company']); ?></span> <small><em> -
                                                        <?php echo htmlspecialchars($exp['location']); ?></em></small>
                                            </p>
                                            <ul>
                                                <?php foreach ($exp['bullets'] as $b): ?>
                                                    <li><?php echo htmlspecialchars($b); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /Resume Section -->
                    <!-- Contact Section -->
                    <section id="contact" class="contact section dark-background text-light text-light">
                        <div class="container section-title" data-aos="fade-up">
                            <h2>Contact</h2>
                            <p>Available for projects, and collaborations — reach out to discuss your idea.</p>
                        </div>

                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="info-wrap">
                                        <iframe src="<?php echo htmlspecialchars($contact['map_iframe']); ?>&q=Vastral,Ahmedabad" frameborder="0"
                                            style="border:0; width: 100%; height: 270px; filter: invert(0.92) hue-rotate(180deg);" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                                        </iframe>
                                        <hr class="dark-background">
                                        <div class="d-flex flex-wrap justify-content-evenly ">
                                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                                <div>
                                                    <h3>Address</h3>
                                                    <p><?php echo htmlspecialchars($contact['address']); ?></p>
                                                </div>
                                            </div>

                                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                                <i class="bi bi-telephone flex-shrink-0"></i>
                                                <div>
                                                    <h3>Call</h3>
                                                    <p><?php echo htmlspecialchars($contact['phone']); ?></p>
                                                </div>
                                            </div>

                                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                                <i class="bi bi-envelope flex-shrink-0"></i>
                                                <div>
                                                    <h3>Email</h3>
                                                    <p><?php echo htmlspecialchars($contact['email']); ?></p>
                                                </div>
                                            </div>

                                            <div>
                                                <a href="https://wa.me/917990929061" target="_blank"><button
                                                        class="btn btn-success"><i class="bi bi-whatsapp pe-2"></i>Send
                                                        Message</button></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- End Contact Form -->

                            </div>
                        </div>
                    </section>

                    <!-- /Contact Section -->

            </main>
             </main>

    <footer id="footer" class="footer position-relative dark-background text-light">

        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">KamleshNagar</strong> <span>All Rights
                        Reserved</span></p>
            </div>

        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
