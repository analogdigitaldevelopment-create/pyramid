<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("./assets/head.php") ?>
    <!-- style sheet  -->
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/ongoing.css" />
    <link rel="stylesheet" href="./css/completed.css" />
    <style>
        /*blog-area*/
        .blog-area {
            background: url(../images/bg-building.jpg) repeat-x;
            padding: 30px 0;
            background-position: bottom;
            animation-name: motion2;
            animation-duration: 100s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
            background-size: 100%;
        }

        .blogs-item {
            width: calc(100%/3 - 95px);
            float: left;
            margin: 0 15px;
            transition: all 0.25s
        }

        .blogs:after {
            content: '';
            display: block;
            clear: both;
        }

        .blog-img .blog-time .blog-month {
            font-size: 12px;
            line-height: normal;
            letter-spacing: 0.5px;
            font-weight: 500;
        }

        .blog-img .blog-time .blog-date {
            font-size: 22px;
            line-height: normal;
            font-weight: 600;
        }

        .blog-img .blog-time {
            position: absolute;
            height: 50px;
            width: 50px;
            background: #1f2a4f;
            top: 10px;
            left: 10px;
            text-align: center;
            color: #fff;
            text-transform: uppercase;
            line-height: normal;
            margin: 0;
        }

        .blog-img {
            position: relative;
        }

        .blog-detail {
            padding: 20px 25px;
            border: 1px solid #eee;
            position: relative;
            overflow: hidden;
            -webkit-transition: border .4s;
            -moz-transition: border .4s;
            -ms-transition: border .4s;
            transition: border .4s;
            background: #fff;
            z-index: 0;
        }

        .blogs-item:hover .blog-detail:after {
            left: 0;
            bottom: 0;
            -webkit-transform: scale(15) translateZ(0);
            -moz-transform: scale(15) translateZ(0);
            -ms-transform: scale(15) translateZ(0);
            -o-transform: scale(15) translateZ(0);
            transform: scale(15) translateZ(0);
        }

        .blog-detail h4 a {
            color: #202020;
        }

        .blog-detail h4 {
            font-size: 18px;
            line-height: 30px;
            text-transform: capitalize;
            font-weight: 500;
            margin: 0;
        }

        .blog-detail ul li a {
            color: #676767;
        }

        .blog-detail ul li {
            font-size: 11px;
            line-height: 12px;
            text-transform: uppercase;
            border-right: 1px solid #e0e0e0;
            padding-right: 10px;
            display: inline-block;
        }

        .blog-detail ul {
            list-style: none;
            padding: 0;
        }

        .blog-detail ul li:last-child {
            border: 0;
            padding-right: 0;
        }

        .blog-detail p {
            line-height: 25px;
            font-size: 16px;
            letter-spacing: .5px;
            color: #878787;
            margin: 0;
        }

        .blogs-item .blog-img img {
            filter: grayscale(0);
        }

        .blogs-item:hover .blog-img img {
            filter: grayscale(1);
        }

        .blogs {
            padding: 20px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .blog-area {
            padding: 30px 0;
        }

        .read-more-btn a {
            padding: 10px 25px;
            display: inline-block;
            color: #666;
            border: 1px solid #666;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 500;
            box-shadow: 0 3px 0 transparent;
            transition: 0.3s ease;
        }

        .read-more-btn a:hover {
               background: #1f2a4f;
    border-color: #1f2a4f;
    color: #fff;
    box-shadow: 0 3px 0 #1f2a4f;
        }

        .read-more-btn {
            text-align: center;
            padding: 30px 0 10px;
        }

        .blog-img img {
            max-width: 100%;
            height: auto;
        }

        /*end*/
        .heading h2 {
            position: relative;
            font-weight: 600;
            font-family: 'Dosis', sans-serif;
            text-transform: uppercase;
            padding: 0 0 10px;
            color: #231f20;
        }

        .heading h2:before {
            position: absolute;
            content: '';
            height: 1px;
            width: 150px;
            background: #ffbe00;
            left: 0;
            right: 0;
            bottom: 1px;
            margin: auto;
        }

        .heading h2:after {
            content: '';
            height: 3px;
            width: 50px;
            background: #3c377b;
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            bottom: 0;
        }

        .heading p {
            color: #878787;
        }

        .heading {
            text-align: center;
            padding: 20px 0;
            max-width: 750px;
            margin: 0 auto;
        }

        /*hover*/
        .hvr-float-shadow {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            box-shadow: 0 0 1px transparent;
            position: relative;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -webkit-transition-property: transform;
            transition-property: transform;
        }

        .hvr-float-shadow:active,
        .hvr-float-shadow:focus,
        .hvr-float-shadow:hover {
            -webkit-transform: translateY(-5px);
            transform: translateY(-5px);
        }

        .hvr-float-shadow:before {
            pointer-events: none;
            position: absolute;
            z-index: -1;
            content: '';
            top: 100%;
            left: 5%;
            height: 10px;
            width: 90%;
            opacity: 0;
            background: -webkit-radial-gradient(center, ellipse, rgba(0, 0, 0, .35) 0, transparent 80%);
            background: radial-gradient(ellipse at center, rgba(0, 0, 0, .35) 0, transparent 80%);
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -webkit-transition-property: transform, opacity;
            transition-property: transform, opacity;
        }

        .hvr-float-shadow:active:before,
        .hvr-float-shadow:focus:before,
        .hvr-float-shadow:hover:before {
            opacity: 1;
            -webkit-transform: translateY(5px);
            transform: translateY(5px);
        }

        /*media*/






        @media (max-width:991px) {
            .blogs{
                flex-direction: column;
                padding: 20px;
            }
            .blogs-item {
                width: calc(100%/2 - 30px);
                margin: 0 15px 30px;
            }
        }


        @media (max-width:767px) {
            .blogs{
                flex-direction: column;
                padding: 20px;
            }
            .blogs-item {
                width: 100%;
                margin: 0 auto 30px;
                max-width: 470px;
                display: block;
                float: none;
            }

            .read-more-btn {
                padding: 0 0 10px;
            }
        }

        @media (max-width:400px) {
            .blog-detail {
                padding: 20px;
            }
            .blogs{
                flex-direction: column;
                padding: 20px;
            }
        }
    </style>

</head>

<body>
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MF6DVDT5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php include("./assets/header.php") ?>

    <section>
        <div class="banner-section">
            <div class="banner-container">
                <div class="banner-heading">
                    <h1>Our Blog</h1>

                </div>
                <div class="banner-img" style="width:100%">
                    <img src="./index-img/bg121.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="blog-area">
        <div class="container">
            <div class="heading">
                <h2>Latest Blogs</h2>
            </div>
            <div class="blogs">
                <div class="blogs-item hvr-float-shadow wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="blog-img">
                        <a href="javacript:;"><img
                                src="https://srmahour.github.io/custom-testimonial-slider-and-blog/images/blog-8.jpg"
                                alt="" class="img-fluid"></a>
                        <p class="blog-time">
                            <span class="blog-date">25</span>
                            <span class="blog-month">May</span>
                        </p>
                    </div>
                    <div class="blog-detail">
                        <h4><a href="javascript:;">Pyramid Gloria</a></h4>
                        <ul>
                            <li><a href="javascript:;">BY ADMIN</a></li>
                            <li><a href="javascript:;">IN Launching</a></li>
                        </ul>
                        <p>A home that gives you the privacy of a bungalow, the security of a gated layout, and the joy of premium living.</p>
                    </div>
                </div>
                <div class="blogs-item hvr-float-shadow wow fadeInLeft" data-wow-delay="0.7s">
                    <div class="blog-img">
                        <a href="javacript:;"><img
                                src="https://srmahour.github.io/custom-testimonial-slider-and-blog/images/blog-7.jpg"
                                alt="" class="img-fluid"></a>
                        <p class="blog-time">
                            <span class="blog-date">25</span>
                            <span class="blog-month">May</span>
                        </p>
                    </div>
                    <div class="blog-detail">
                        <h4><a href="javascript:;">Ideas That Moved Us In 2018</a></h4>
                        <ul>
                            <li><a href="javascript:;">BY ADMIN</a></li>
                            <li><a href="javascript:;">IN TECHNOLOGY</a></li>
                        </ul>
                        <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan
                            tincidunt, libero lorem convallis lectus</p>
                    </div>
                </div>
                <div class="blogs-item hvr-float-shadow wow fadeInLeft" data-wow-delay="0.9s">
                    <div class="blog-img">
                        <a href="javacript:;"><img
                                src="https://srmahour.github.io/custom-testimonial-slider-and-blog/images/blog-9.jpg"
                                alt="" class="img-fluid"></a>
                        <p class="blog-time">
                            <span class="blog-date">25</span>
                            <span class="blog-month">May</span>
                        </p>
                    </div>
                    <div class="blog-detail">
                        <h4><a href="javascript:;">Ideas That Moved Us In 2018</a></h4>
                        <ul>
                            <li><a href="javascript:;">BY ADMIN</a></li>
                            <li><a href="javascript:;">IN TECHNOLOGY</a></li>
                        </ul>
                        <p>Maecenas varius finibus orci vel dignissim. Nam posuere, magna pellentesque accumsan
                            tincidunt, libero lorem convallis lectus</p>
                    </div>
                </div>
            </div>
            <div class="read-more-btn">
                <a href="javascript:;" class="hvr-float-shadow">Read More</a>
            </div>
        </div>
    </section>
    <!--blog-area end-->

    <?php include("./assets/footer.php") ?>
</body>
<script src="./script.js"></script>

</html>