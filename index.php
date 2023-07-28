<?php
    include 'Form-Action.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- for favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="fevicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fevicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fevicon/favicon-16x16.png">
    <link rel="manifest" href="fevicon/site.webmanifest">
    <!-- for carousel-cell -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CityWide | Home</title>
</head>

<body>
    <header id="header">
        <nav id="navbar">
            <div id="logo">
                <img src="img/logo.png" alt="logo">
                <span class="city">City</span>
                <span class="wide">Wide</span>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
                <i class="fa fa-bars"></i>
            </label>
            <ul>
                <li class="item"><a href="#" class="active">Home</a></li>
                <li class="item"><a href="#about-container">About</a></li>
                <li class="item"><a href="#service-container">Our Service</a></li>
                <li class="item"><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
        <section id="home">
            <div id="home-txt">
                <!-- <p class="txt1">Did Your Phone break.!!!</p> -->
                <p class="txt1"><strong>This Website is under Construction</strong></p>
                <p class="txt2">Don't Worry</p>
            </div>
            <div id="location">
                <a href="https://www.google.co.in/maps/place/CityWide+IT+Solutions/@26.811719,84.5023779,21z/data=!4m12!1m6!3m5!1s0x39936fd5b5da77df:0x9caa6c574441114a!2sCityWide+IT+Solutions!8m2!3d26.8117698!4d84.5025639!3m4!1s0x39936fd5b5da77df:0x9caa6c574441114a!8m2!3d26.8117698!4d84.5025639?hl=en-GB&authuser=0"
                    target="_blank">Location</a>
            </div>
        </section>
    </header>
    <main>
        <!-- About Row -->
        <section id="about-container">
            <h2 class="section-heading">About</h2>

            <div id="about">
                <div class="box">
                    <div>
                        <p class="about-first-para">
                            A service where experience matters.
                            Citywide IT Services has provided professional computer repair, Mobile Phone Repair,
                            CCTV Camera, Networking and Setup to
                            commercial
                            and residential clients since 2018.
                    </div>
                    <p class="about-last-para">
                        We are dedicated to bringing friendly computer support to your doorstep. We save you the
                        time
                        and
                        hassle
                        of dismantling your system and taking it to a shop. By bringing the service to your home or
                        office,
                        we
                        allow you, and your problem, to fully explain and ask questions while we work. This on-site
                        approach
                        allows us to advise you on your overall phone at no additional charge.


                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ut perspiciatis veritatis
                        eligendi doloribus dolores explicabo minima, debitis, velit sunt fugit, nam ea eos dolor
                        reiciendis qui suscipit nulla animi et? Illum, error nostrum ducimus cupiditate expedita dolore
                        mollitia molestiae!

                        We are also dedicated to helping our customers purchase systems that meet their needs when
                        we
                        find
                        that
                        it would be better for them to purchase a new system.
                        Citywide IT Solutions is privately owned and operated by Rajeev Ranjan. Rajeev's
                        credentials
                        are as follows: computer engineering diploma
                        Tech Empire Institute of Advanced Technology Delhi-94
                    </p>
                    </p>
                </div>
            </div>
        </section>

        <!-- Service Section -->

        <section id="service-container">
            <h2 class="section-heading">Our Service</h2>

            <div class="service">

                <div class="box">
                    <a href="iphone-repair.html" target="_blank">
                        <img src="https://source.unsplash.com/weekly?iphone" alt="">
                        <h3>iphone Repair</h3>
                        <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro, omnis
                            voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam, modi,
                            maxime
                            illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                            deserunt.
                            it would be better for them to purchase a new system. Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit. Deserunt porro tempora nihil minus ut a.
                        </p>
                    </a>
                </div>
                <div class="box">
                    <a href="#" target="_blank">
                        <img src="https://source.unsplash.com/weekly?mackbook" alt="">
                        <h3>Macbook Repair</h3>
                        <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro, omnis
                            voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam, modi,
                            maxime
                            illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                            deserunt.
                            it would be better for them to purchase a new system.
                        </p>
                    </a>
                </div>
                <div class="box">
                    <a href="#" target="_blank">
                        <img src="https://source.unsplash.com/weekly?mobile" alt="">
                        <h3>Android Phone Repair</h3>
                        <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro, omnis
                            voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam, modi,
                            maxime
                            illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                            deserunt.
                            it would be better for them to purchase a new system.
                        </p>
                    </a>
                </div>
                <div class="box">
                    <a href="#" target="_blank">
                        <img src="https://source.unsplash.com/weekly?laptop" alt="">
                        <h3>Windows Laptop Repair</h3>
                        <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro, omnis
                            voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam, modi,
                            maxime
                            illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                            deserunt.
                            it would be better for them to purchase a new system.
                        </p>
                    </a>
                </div>
                <div class="box">
                    <a href="#" target="_blank">
                        <img src="https://source.unsplash.com/weekly?data" alt="">
                        <h3>Data Recovery&nbsp;&#9851;</h3>
                        <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro, omnis
                            voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam, modi,
                            maxime
                            illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                            deserunt.
                            it would be better for them to purchase a new system.
                        </p>
                    </a>
                </div>
                <div class="box">
                    <a href="#" target="_blank">
                        <img src="https://source.unsplash.com/weekly?phone" alt="">
                        <h3>Unlocking</h3>
                        <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro, omnis
                            voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam, modi,
                            maxime
                            illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                            deserunt.
                            it would be better for them to purchase a new system.
                        </p>
                    </a>
                </div>
                <div class="box">
                    <a href="#" target="_blank">
                        <img src="https://source.unsplash.com/weekly?antivirus" alt="">
                        <h3>AntiVirus</h3>
                        <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro, omnis
                            voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam, modi,
                            maxime
                            illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                            deserunt.
                            it would be better for them to purchase a new system.
                        </p>
                    </a>
                </div>
                <div class="box">
                    <a href="#" target="_blank">
                        <img src="https://source.unsplash.com/weekly?os" alt="">
                        <h3>Oprating System&nbsp;&#8675;</h3>
                        <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro, omnis
                            voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam, modi,
                            maxime
                            illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                            deserunt.
                            it would be better for them to purchase a new system.
                        </p>
                    </a>
                </div>
                <div class="box">
                    <a href="#" target="_blank">
                        <img src="https://source.unsplash.com/weekly?linux" alt="">
                        <h3>Linux Kernel</h3>
                        <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro, omnis
                            voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam, modi,
                            maxime
                            illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                            deserunt.
                            it would be better for them to purchase a new system.
                        </p>
                    </a>
                </div>
            </div>

            <div class="service quality">
                <div class="box">
                    <h3 class="quality-head">Device Breakup</h3>
                    <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro,
                        omnis
                        voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam,
                        modi,
                        maxime
                        illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                        deserunt.
                        it would be better for them to purchase a new system.
                    </p>
                </div>
                <div class="box">
                    <h3 class="quality-head">Quick Fix</h3>
                    <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro,
                        omnis
                        voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam,
                        modi,
                        maxime
                        illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                        deserunt.
                        it would be better for them to purchase a new system.
                    </p>
                </div>
                <div class="box">
                    <h3 class="quality-head">Fast Return</h3>
                    <p>nulla unde voluptates cum quia molestiae provident harum sed consequuntur quis porro,
                        omnis
                        voluptate vero fuga, illum culpa eligendi esse quam architecto. Reiciendis numquam,
                        modi,
                        maxime
                        illum sint ipsum laudantium facere aspernatur sequi corrupti dignissimos id! Commodi,
                        deserunt.
                        it would be better for them to purchase a new system. Lorem ipsum dolor sit, amet
                        consectetur adipisicing elit. Alias hic dolorem perspiciatis sed ad, autem iusto recusandae
                        totam vitae molestiae.
                    </p>
                </div>
            </div>
        </section>


        <!-- Blog section -->
        <section id="blog-container">
            <div class="about-container">
                <h1 class="section-heading">Our Team</h1>
            </div>
            <div class="carousel" data-flickity='{ "autoPlay": true }'>

                <div class="carousel-cell">
                    <div>
                        <img src="img/Rajeev.jpg" alt="">
                    </div>
                    <div class="blog-name">
                        <h1>Rajeev Ranjan</h1>
                    </div>
                    <div class="blog-contant">
                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor, sit amet consecteturo dignissimos tempore quis
                            excepturi voluptates adipisci cupiditate, veritatis
                            blanditiis accusantium veniam inventore, doloremque facere fuga. Consequuntur ullam nulla
                            debitis explicabo tempore nihil! Error aspernatur, magni exercitationem perferendis minima,
                            enim tempora, mollitia dolore officiis animi quas maxime adipisci reprehenderit aperiam quae
                            Voluptate quae libero distinctio nulla quibusdam, perspiciatis, vel iusto porro accusantium
                            illum vero consequuntur quasi 
                        </p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div>
                        <img src="img/Rajeev.jpg" alt="">
                    </div>
                    <div class="blog-name">
                        <h1>Pooja Kumari</h1>
                    </div>
                    <div class="blog-contant">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate,Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Aliquam voluptatibus cum, porro ipsa, adipisci eos vero,
                            laboriosam iusto necessitatibus officiis at incidunt consequuntur. Unde nobis voluptatibus,
                            accusant ex eum explicabo minima mollitia,
                            delectus omnis. Modi ut voluptatum saepe magni, in repudiandae dolore quia sit eveniet minus
                            quisquam maxime quos error magnam ipsa incidunt possimus. Atque maiores asperiores deserunt
                        </p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div>
                        <img src="img/Rajeev.jpg" alt="">
                    </div>
                    <div class="blog-name">
                        <h1>Aman Raj</h1>
                    </div>
                    <div class="blog-contant">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate,Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Aliquam voluptatibus cum, porro ipsa, adipisci eos vero,
                            laboriosam iusto necessitatibus officiis at incidunt consequuntur. Unde nobis voluptatibus,
                            delectus omnis. Modi ut voluptatum saepe magni, in repudiandae dolore quia sit eveniet minus
                            quisquam maxime quos error magnam ipsa incidunt possimus. Atque maiores asperiores deserunt

                        </p>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div>
                        <img src="img/Rajeev.jpg" alt="">
                    </div>
                    <div class="blog-name">
                        <h1>Sneh Sameer</h1>
                    </div>
                    <div class="blog-contant">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate,Lorem ipsum dolor sit
                            amet consectetur adipisicing elit. Aliquam voluptatibus cum, porro ipsa, adipisci eos vero,
                            laboriosam iusto necessitatibus officiis at incidunt consequuntur. Unde nobis voluptatibus,
                            accusantium incidunt totam error tempora, quidem beatae ex eum explicabo  sit eveniet minus
                            quisquam maxime quos error magnam ipsa incidunt possimus. Atque maiores asperiores deserunt
                            repellendus optio harum ad, mollitia voluptate excepturi, cupiditate laborum sapiente
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer>
        <section id="contact">
            <div class="founder-pic">
                <img src="img/Rajeev.jpg" alt="Founder">
            </div>
            <div>
                <h1 class="founder-name">Rajeev Ranjan</h1>
            </div>
            <div>
                <h2 class="contact-us">&#9743;&nbsp;Contact Us</h2>
            </div>

            <form action="" method="POST">
                <div class="contact-details">
                    <div>
                        <label for="contact-name"></label>
                        <input class="contact-input" type="text" name="co-name" id="co-name"
                            placeholder="Enter Your Name" required>
                    </div>
                    <div>
                        <label for="co-email"></label>
                        <input class="contact-input" type="email" name="co-email" id="co-email"
                            placeholder="&#9993;&nbsp;Enter Your Email" required>
                    </div>
                    <div>
                        <label for="contact-number"></label>
                        <input class="contact-input" type="tel" name="co-mobile" id="co-mobile"
                            placeholder="&#9990;&nbsp;Enter Mobile Number" required>
                    </div>
                    <div>
                        <label for="contact-txt"></label>
                        <textarea class="contact-input" name="co-text" id="co-text" cols="35" rows="05"
                            placeholder="Write Your Quarry Or Feedback..!!!" required></textarea>
                    </div>
                    <div>
                        <strong>&#9757;&nbsp;Read Carefully:</strong>&nbsp;<input type="submit" value="Submit"
                            class="contact-submit-btn">&nbsp;
                        <input type="reset" value="Reset" class="contact-reset-btn">
                    </div>
                </div>
            </form>
        </section>

        <section id="footerbar">
            <div id="term">
                <a target="_blank" href="#">FAQ</a>
                <a target="_blank" href="#">Policy</a>
                <span>&copy;&nbsp;All Rights Are Reserved</span>
                <div id="developer">
                    <a class="social_media" id="fb_handle" href="https://github.com/ErRajeev/" target="_blabk">
                        <i class="fa fa-brands fa-github">&nbsp;&nbsp;&nbsp;Rajeev Ranjan&nbsp;&#9996;</i></a>
                </div>
            </div>
        </section>
    </footer>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

</body>

</html>