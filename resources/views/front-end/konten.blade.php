@extends('front-end.layout')
@section('judul', 'welcome')
@section('konten')
    <section id="hero" class="clearfix">
        <div class="container" data-aos="fade-up">

            <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/1.png" alt="" class="img-fluid">
            </div>

            <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
                <h2>Teknologi Penerjemah<br>Bahasa Isyarat<br></h2>
                <h5><span>Download Aplikasi Heyra Sekarang</span></h5>
                <div>
                    <a href="#about" class="btn-get-started scrollto">Download Now</a>
                    <!-- <a href="#services" class="btn-services scrollto">Our Services</a> -->
                </div>
            </div>

        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>About Us</h3>
                </header>

                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <p>
                            Kami menawarkan teknologi penerjemah bahasa isyarat Indonesia kepada teman-teman yang mengalami
                            gangguan pendengaran. Teknologi ini dapat membantu mereka berkomunikasi lebih efektif
                            menggunakan bahasa isyarat.
                        </p>

                        <!-- <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                              <div class="icon"><i class="bi bi-card-checklist"></i></div>
                              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                            </div>

                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                              <div class="icon"><i class="bi bi-brightness-high"></i></div>
                              <h4 class="title"><a href="">Magni Dolores</a></h4>
                              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                            </div>

                            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                              <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                              <h4 class="title"><a href="">Dolor Sitema</a></h4>
                              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                            </div> -->

                    </div>

                    <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
                        <img src="assets/img/ab.png" class="img-fluid" alt="">
                    </div>
                </div>

                <!-- <div class="row about-extra">
                          <div class="col-lg-6" data-aos="fade-right">
                            <img src="assets/img/about-extra-1.svg" class="img-fluid" alt="">
                          </div>
                          <div class="col-lg-6 pt-5 pt-lg-0" data-aos="fade-left">
                            <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                            <p>
                              Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                            </p>
                            <p>
                              Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                            </p>
                          </div>
                        </div>

                        <div class="row about-extra">
                          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                            <img src="assets/img/about-extra-2.svg" class="img-fluid" alt="">
                          </div>

                          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right">
                            <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                            <p>
                              Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
                            </p>
                            <p>
                              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                            </p>
                            <p>
                              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
                            </p>
                          </div>

                        </div> -->

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="section-bg">
            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h3>Services</h3>
                </header>

                <div class="row justify-content-center">

                    <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <img class="icon" src="assets/img/fitur1.png" width="100px">
                            <div>
                                <h4 class="title"><a href="fitur1.html">Text/Voice to Animation</a></h4>
                            </div>
                            <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <img class="icon" src="assets/img/fitur2.png" width="100px">
                            <div>
                                <h4 class="title"><a href="fitur2.html">Gesture to Text</a></h4>
                            </div>
                            <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <img class="icon" src="assets/img/fitur3.png" width="100px">
                            <div>
                                <h4 class="title"><a href="">HeyLoc</a></h4>
                            </div>
                            <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                        <div class="box">
                            <img class="icon" src="assets/img/fitur4.png" width="100px">
                            <div>
                                <h4 class="title"><a href="">Hey Aktifity</a></h4>
                            </div>
                            <!-- <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p> -->
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->



        <!-- ======= Team Section ======= -->
        <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3>Team</h3>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
                        <div class="member">
                            <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Nikolas Antoni</h4>
                                    <span>Chief Executive Officer</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
                        <div class="member">
                            <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Saifudin Umar</h4>
                                    <span>CMO</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
                        <div class="member">
                            <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Satria Yudha Mahendra</h4>
                                    <span>COO</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="100">
                        <div class="member">
                            <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Aldin Fatiray</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="200">
                        <div class="member">
                            <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Hiyarunisa</h4>
                                    <span>Product Manager</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="300">
                        <div class="member">
                            <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Angki Fay Delefiar</h4>
                                    <span>CTO</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6" data-aos="zoom-out" data-aos-delay="400">
                        <div class="member">
                            <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Puput</h4>
                                    <span>Accountant</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="section-bg">



        </section><!-- End Clients Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <h3>Contact Us</h3>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="map mb-4 mb-lg-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3955.045161788841!2d110.6847222!3d-7.570055599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzQnMTIuMiJTIDExMMKwNDEnMDUuMCJF!5e0!3m2!1sid!2sid!4v1699684501041!5m2!1sid!2sid"
                                width="480" height="340" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-5 info">
                                <i class="bi bi-geo-alt"></i>
                                <p>Satrian,Sawit,Boyolali</p>
                            </div>
                            <div class="col-md-4 info">
                                <i class="bi bi-envelope"></i>
                                <p>empowerplay01@gmail.com</p>
                            </div>
                        </div>
                        <div>
                            <div class="col-md-5 info">
                                <i class="bi bi-phone"></i>
                                <p>+6285 8665 72654</p>
                            </div>
                        </div>

                        <div class="form">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="form-group col-lg-6 mt-3 mt-lg-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit" title="Send Message">Send
                                        Message</button></div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
