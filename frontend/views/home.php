<?php
$commonUrl = Params::$common;
$uploadUrl = $commonUrl . '/upload';
?>

<!-- Slider main container -->
<div class="swiper" id="home-section">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper home-slider">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img" style="height: 100%; background-image:url(<?= $uploadUrl ?>/images/bg_1.png);">
                        <div class="overlay"></div>
                    </div>
                    <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">Hello!</span>
                            <h1 class="mb-4 mt-3">I'm <span><?= isset($user['fullname']) ? $user['fullname'] : "404 Notfound" ?></span></h1>
                            <?php if (isset($user['job'])) : ?>
                                <h2 class="mb-4 text-capitalize">A <?= $user['job'] ?></h2>
                            <?php endif; ?>
                            <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="overlay"></div>
            <div class="container">
                <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img" style="height: 100%; background-image:url(<?= $uploadUrl ?>/images/bg_2.png);">
                        <div class="overlay"></div>
                    </div>
                    <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">Hello!</span>
                            <?php if (isset($user['job'])) : ?>
                                <h1 class="mb-4 mt-3">I'm a <span><?= $user['job'] ?></span></h1>
                            <?php endif; ?>
                            <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(<?= $uploadUrl ?>/images/bg_1.png);">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h1 class="big">About</h1>
                        <h2 class="mb-4">About Me</h2>
                        <?php if (isset($user['description']) && !empty($user['description'])) : ?>
                            <p><?= htmlspecialchars($user['description']) ?></p>
                        <?php endif; ?>

                        <ul class="about-info mt-4 px-md-0 px-2">
                            <?php if (isset($user['fullname']) && !empty($user['fullname'])) : ?>
                                <li class="d-flex">
                                    <span>Name:</span>
                                    <span><?= htmlspecialchars($user['fullname']) ?></span>
                                </li>
                            <?php endif; ?>

                            <?php if (isset($user['date_of_birth']) && !empty($user['date_of_birth'])) : ?>
                                <li class="d-flex">
                                    <span>Date of birth:</span>
                                    <span><?= htmlspecialchars($user['date_of_birth']) ?></span>
                                </li>
                            <?php endif; ?>

                            <?php if (isset($user['address']) && !empty($user['address'])) : ?>
                                <li class="d-flex">
                                    <span>Address:</span>
                                    <span><?= htmlspecialchars($user['address']) ?></span>
                                </li>
                            <?php endif; ?>

                            <?php if (isset($user['email']) && !empty($user['email'])) : ?>
                                <li class="d-flex">
                                    <span>Email:</span>
                                    <span><?= htmlspecialchars($user['email']) ?></span>
                                </li>
                            <?php endif; ?>

                            <?php if (isset($user['phone']) && !empty($user['phone'])) : ?>
                                <li class="d-flex">
                                    <span>Phone:</span>
                                    <span><?= htmlspecialchars($user['phone']) ?></span>
                                </li>
                            <?php endif; ?>
                        </ul>

                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text">
                        <p class="mb-4">
                            <span class="number" data-number="<?= (isset($projects) ? count($projects) : 120) ?>">0</span>
                            <span>Project complete</span>
                        </p>
                        <p><a download href="<?= $uploadUrl ?>/files/NguyenTheVU-CV_Web_Developer.pdf" class="btn btn-primary py-3 px-3">Download CV</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (isset($educations) && count($educations) > 0) : ?>
    <section class="ftco-section ftco-no-pb d-none" id="education-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Education</h1>
                    <h2 class="mb-4">Education</h2>
                </div>
            </div>
            <div class="row">

                <?php foreach ($educations as $key => $education) : ?>
                    <div class="col-md-6">
                        <d?iv class="resume-wrap ftco-animate">
                            <span class="date"><?= $education['start_time'] ?> - <?= is_null($education['end_time']) ? "NOW" : $education['end_time'] ?></span>
                            <h2><?= $education['school_name'] ?></h2>
                            <span class="position"><?= $education['major'] ?></span>
                            <p class="mt-4">A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                into your mouth.</p>
                        </d?iv>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (isset($workExperience) && count($workExperience) > 0) : ?>
    <section class="ftco-section ftco-no-pb" id="wexp-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Work experience</h1>
                    <h2 class="mb-4">Work experience</h2>
                    <?php if (isset($user['description']) && !empty($user['description'])) : ?>
                        <p><?= htmlspecialchars($user['description']) ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">

                <?php foreach ($workExperience as $key => $wexp) : ?>
                    <div class="col-md-6">
                        <div class="resume-wrap ftco-animate h-100">
                            <span class="date"><?= $wexp['start_time'] ?> - <?= is_null($wexp['end_time']) ? "NOW" : $wexp['end_time'] ?></span>
                            <h2><?= $wexp['company_name'] ?></h2>
                            <span class="position"><?= $wexp['position'] ?></span>
                            <?php if (isset($wexp['description']) && !empty($wexp['description'])) : ?>
                                <p><?= htmlspecialchars($wexp['description']) ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center ftco-animate">
                    <p><a download href="<?= $uploadUrl ?>/files/NguyenTheVU-CV_Web_Developer.pdf" class="btn btn-primary py-4 px-5">Download CV</a></p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Skills</h1>
                <h2 class="mb-4">My Skills</h2>
                <p>I possess diverse experience in various programming languages and frameworks,
                    with strengths in both front-end and back-end development, and skills working
                    with common database management systems. I also have additional knowledge in
                    mobile development and supporting tools for programming and CI/CD, along with
                    reading comprehension in English and strong self-learning abilities.</p>
            </div>
        </div>
        <div class="row collapse" id="skillsCollapse">
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">
                    <h3>Programming Languages and Frameworks</h3>
                    <ul>
                        <li><b class="text-white">PHP</b>: PHP, Yii2 Framework, Laravel Framework</li>
                        <li><b class="text-white">Java</b>: SpringBoot</li>
                        <li><b class="text-white">Python</b>: Flask, Django</li>
                        <li><b class="text-white">JavaScript Frameworks</b>: NodeJS, ReactJS, NextJS</li>
                    </ul>

                    <h3>Web Development</h3>
                    <ul>
                        <li><b class="text-white">Front-end</b>: HTML, CSS, Less, Sass, Bootstrap, JavaScript, JQuery, TypeScript</li>
                        <li><b class="text-white">Back-end</b>: PHP, Java, Python, JavaScript (NodeJS)</li>
                    </ul>

                    <h3>Databases</h3>
                    <ul>
                        <li><b class="text-white">SQL</b>: MySQL, PostgreSQL, SQL Server</li>
                    </ul>

                    <h3>Additional Knowledge</h3>
                    <ul>
                        <li><b class="text-white">CSS Framework</b>: Tailwind CSS</li>
                        <li><b class="text-white">Mobile Development</b>: Flutter</li>
                        <li><b class="text-white">Microsoft Technologies</b>: C# .NET</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 animate-box">
                <div class="progress-wrap ftco-animate">

                    <h3>Tools and Software</h3>
                    <ul>
                        <li><b class="text-white">Containerization</b>: Docker</li>
                        <li><b class="text-white">CI/CD</b>: Jenkins, GitHub Actions</li>
                        <li><b class="text-white">Design</b>: Figma</li>
                        <li><b class="text-white">Version Control</b>: GitHub</li>
                    </ul>

                    <h3>Languages</h3>
                    <ul>
                        <li><b class="text-white">English</b>: Reading comprehension</li>
                    </ul>

                    <h3>Other Skills</h3>
                    <ul>
                        <li><b class="text-white">Self-learning ability</b></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-center ftco-animate pb-4">
            <button id="toggleButton" class="btn btn-primary py-4 px-5" type="button" data-toggle="collapse" data-target="#skillsCollapse" aria-expanded="false" aria-controls="skillsCollapse">
                View detail
            </button>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var toggleButton = document.getElementById("toggleButton");
                var skillsCollapse = document.getElementById("skillsCollapse");

                toggleButton.addEventListener("click", function() {
                    if (skillsCollapse.classList.contains("show")) {
                        toggleButton.textContent = "View detail";
                    } else {
                        toggleButton.textContent = "Collapse";
                    }
                });

                skillsCollapse.addEventListener("shown.bs.collapse", function() {
                    toggleButton.textContent = "Collapse";
                });

                skillsCollapse.addEventListener("hidden.bs.collapse", function() {
                    toggleButton.textContent = "View detail";
                });
            });
        </script>
    </div>
</section>

<?php if (isset($projects) && count($projects) > 0) : ?>
    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">Our Projects</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($projects as $key => $pj) : ?>
                    <div class="col-md-6">
                        <div class="modal fade" id="pj_<?= $key ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="pj_<?= $key ?>_label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="pj_<?= $key ?>_label"><?= $pj['project_name'] ?></h5>
                                        <button type="button" class="close border-0" style="outline: none !important;box-shadow: none !important;" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        <img src="<?= $uploadUrl . $pj['project_image'] ?>" style="object-fit: cover; width: 100%;" alt="<?= $pj['project_name'] ?>" />
                                        <p><b>Position: </b><?= $pj['position'] ?></p>
                                        <p><?= $pj['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn w-100 m-0 p-0 border-0 shadow-0" style="outline: none !important;" data-toggle="modal" data-target="#pj_<?= $key ?>">
                            <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(<?= $uploadUrl . $pj['project_image'] ?>);">
                                <div class="overlay"></div>
                                <div class="text text-center p-4">
                                    <h3><?= $pj['project_name'] ?></h3>
                                    <span><?= $pj['position'] ?></span>
                                </div>
                            </div>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (isset($blogs) && count($blogs) > 0) : ?>
    <section class="ftco-section" id="blog-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Blog</h1>
                    <h2 class="mb-4">My Blog</h2>
                    <p>Explore my personal insights and experiences in technology.</p>
                </div>
            </div>
            <div class="row d-flex">
                <?php foreach ($blogs as $key => $blog) : ?>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <a href="#" class="block-20" style="background-image: url('<?= $uploadUrl . $blog['image'] ?>');">
                            </a>
                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center mb-3 meta">
                                    <p class="mb-0">
                                        <span class="mr-2"><?= $blog['created_at'] ?></span>
                                        <!-- <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> -->
                                    </p>
                                </div>
                                <h3 class="heading"><a href="#"><?= $blog['title'] ?></a>
                                </h3>
                                <p><?= $blog['content'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
    <div class="container">
        <div class="row d-md-flex align-items-center">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text">
                        <strong class="number" data-number="2">0</strong>
                        <span>Awards</span>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text">
                        <strong class="number" data-number="<?= (isset($projects) ? count($projects) : 120) ?>">0</strong>
                        <span>Complete Projects</span>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text">
                        <strong class="number" data-number="1200">0</strong>
                        <span>Happy Customers</span>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text">
                        <strong class="number" data-number="500">0</strong>
                        <span>Cups of coffee</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-hireme img margin-top" style="background-image: url(<?= $uploadUrl ?>/images/bg_1.jpg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 ftco-animate text-center">
                <h2>I'm <span>Available</span> for freelancing</h2>
                <p>I bring years of experience and expertise in technology to help bring your projects to life.</p>
                <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Contact</h1>
                <h2 class="mb-4">Contact Me</h2>
                <p>If you have any questions or would like to discuss a project, feel free to get in touch with me.</p>
            </div>
        </div>

        <div class="row d-flex contact-info mb-5">
            <?php if (isset($user['address']) && !empty($user['address'])) : ?>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p><?= htmlspecialchars($user['address']) ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (isset($user['phone']) && !empty($user['phone'])) : ?>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p><a href="tel://<?= htmlspecialchars($user['phone']) ?>"><?= htmlspecialchars($user['phone']) ?></a></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($user['email']) && !empty($user['email'])) : ?>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:<?= htmlspecialchars($user['email']) ?>"><?= htmlspecialchars($user['email']) ?></a></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($user['social_network']) && !empty($user['social_network'])) : ?>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">My Social Network</h3>
                        <p><a href="<?= htmlspecialchars($user['social_network']) ?>">Click here!</a></p>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div class="row no-gutters block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="#" class="bg-light p-4 p-md-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div class="img" style="background-image: url(<?= $uploadUrl ?>/images/about.png);"></div>
            </div>
        </div>
    </div>
</section>

<script>
    const swiper = new Swiper('.swiper', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>