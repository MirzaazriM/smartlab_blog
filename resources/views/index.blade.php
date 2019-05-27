<style>
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885fa;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        --dev-icon: #f83f3f;
        --video-icon: #6b56ff;
        scroll-behavior: smooth;
    }

    body {
        margin: 0 auto;
        overflow-x: hidden;
    }

    * {
        box-sizing: border-box;
        -webkit-font-smoothing: antialiased;
    }

    .contain {
        max-width: 1600px;
        width: 90%;
        margin: 0 auto;
    }

    .button {
        cursor: pointer;
        border: none;
        border-radius: 35px;
        width: 260px;
        height: 70px;
        font-size: 1.4em !important;
        font-weight: 500;
        color: white;
        background-color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
        transition: all 0.2s ease-in;
    }

    .button:focus {
        outline: 0;
    }

    .button:hover {
        background-color: white;
        color: var(--button-bg-color);
        border: 1px solid var(--button-bg-color);
    }

    .button-orange {
        background-color: var(--button-bg-orange);
        border: 1px solid var(--button-bg-orange) !important;
    }

    .button-orange:hover {
        background-color: white !important;
        color: var(--button-bg-orange) !important;
        border: 1px solid var(--button-bg-orange) !important;
    }

    .h1-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 3em;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
    }

    .h2-font {
        font-family: "Montserrat", sans-serif;
        font-size: 2em;
        color: var(--h2-color);
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1em !important;
        font-weight: 300;
        color: var(--h1-color);
    }

    main {
        position: relative;
        font-family: "Source Sans Pro", sans-serif;
        overflow-x: hidden;
    }

    .top-section {
        padding-top: 350px;
    }

    .blog-icon-container {
        position: absolute !important;
        top: 20px !important;
        padding: 0 !important;
        border-radius: 25px;
        right: 20px;
        height: 50px;
        width: 50px;
        z-index: 10;
        transition: width 0.2s ease-in-out;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .blog-hover:hover .blog-icon-container {
        width: 150px;
    }

    .blog-hover:hover .blog-icon-description {
        opacity: 1 !important;
    }

    .blog-icon-description {
        margin-right: 15px;
        margin-left: 20px;
        overflow: hidden;
        color: white;
        font-family: "Source Sans Pro", sans-serif;
        font-size: 0.9em;
        opacity: 0 !important;
        transition: opacity 0.2s ease-in-out;
    }

    .blog-icon-container img {
        position: absolute;
        right: 10px;
        top: 10px;
        width: 30px;
        height: 30px;
        z-index: 10;
    }

    .video-icon {
        background-color: var(--video-icon);
    }

    .video-icon img {
        transform: translateX(10%);
    }

    .moodle-icon {
        background-color: var(--button-bg-color);
    }

    .dev-icon {
        background-color: var(--dev-icon);
    }

    .courses-icon {
        background-color: var(--button-bg-orange);
    }

    .blog-bg-container {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: hidden;
        z-index: -100;
    }

    .blog-top-bg {
        position: absolute;
        top: -730px;
        right: -600px;
        z-index: -100;
        width: 100%;
    }

    .blog-circle1 {
        position: absolute;
        width: 20%;
        top: -150px;
        z-index: -100;
    }

    .blog-circle2 {
        position: absolute;
        width: 20%;
        top: -110px;
        left: -248px;
        z-index: -100;
    }

    .blog-circle3 {
        position: absolute;
        width: 20%;
        right: -110px;
        top: 1000px;
        z-index: -100;
    }

    .blog-subscribe-container {
        display: flex;
        /*border-bottom: 1px solid var(--shadow-color);*/
        padding-top: 20px;
        align-items: center;
        justify-content: space-between;
    }

    .blog-subscribe-form {
        background-color: white;
        display: flex;
        flex-basis: 65%;
        justify-content: space-around;
        border-radius: 20px;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        padding: 50px 20px;
        margin-left: 50px;
    }

    .blog-subscribe-container-info p {
        font-size: 1.3em;
    }

    .blog-subscribe-form-left {
        padding-right: 20px;
    }

    .blog-subscribe-form-left p {
        font-size: 1.3em;
    }

    .blog-subscribe-form-left>h3 {
        margin-top: 0;
    }

    .blog-subscribe-form-left .h1-font {
        font-size: 1.7em;
        font-weight: bold;
    }

    .blog-subscribe-form-right {
        flex-basis: 60%;
    }

    .blog-subscribe-form-right div {
        display: flex;
    }

    .blog-subscribe-form-right p {
        border-bottom: 1px solid var(--shadow-color);
        padding: 0 20px 40px 0;
        margin-top: 0;
        margin-bottom: 40px;
    }

    .blog-subscribe-form-right input {
        flex-basis: 100%;
        margin-right: 25px;
        border-radius: 35px;
        border: 1px solid var(--shadow-color);
        padding-left: 35px;
        transition: all 0.2s ease-in-out;
    }

    .blog-subscribe-form-right input:focus {
        outline: none;
        border: 1px solid var(--button-bg-color);
    }

    ::placeholder {
        font-family: "Source Sans Pro", sans-serif;
        font-style: italic;
        font-size: 1.3em;
        opacity: 0.6;
    }

    .blog-subscribe-form-left label {
        display: block;
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        white-space: nowrap;
    }

    .blog-section {
        position: relative;
        text-align: center;
    }

    .blog-section-bg {
        position: absolute;
        left: -1200px;
        bottom: 0;
    }

    .blog-section-orange-circle {
        position: absolute;
        right: -350px;
        bottom: 50%;
        width: 20%;
    }

    .blog-top-container {
        display: flex;
        height: 600px;
        margin-bottom: 40px;
        justify-content: space-between;
    }

    .blog-bot-container {
        display: flex;
        flex-wrap: wrap;
        overflow-x: hidden;
        justify-content: space-between;
    }

    .blog-top-content {
        padding-right: 40px;
        padding-left: 40px;
        padding-bottom: 60px;
        text-align: left;
        overflow: hidden;
    }

    .blog-top-content h2,
    .blog-top-content p,
    .blog-top-content span {
        color: white;
    }

    .blog-top-content p {
        position: relative;
        margin-top: 50px;
    }

    .blog-top-content .p-font::after {
        position: absolute;
        content: "...";
        bottom: 0px;
        font-size: 1em;
        /* line-height: 1em; */
        padding-left: 5px;
        padding-right: 10px;

        font-weight: 500;
    }

    .blog-top-main {
        flex-basis: 66%;
        -webkit-box-shadow: -1px -1px 25px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 25px 1px var(--shadow-color);
        box-shadow: -1px -1px 25px 1px var(--shadow-color);
        cursor: pointer;
        border-radius: 20px;
        display: flex;
        flex-direction: column-reverse;
        background-image: url(images/blog-post-1.png);
        background-size: cover;
        transition: all 0.2s ease-in-out;
        position: relative;
    }

    .blog-top-secondary {
        flex-basis: 32%;
        -webkit-box-shadow: -1px -1px 25px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 25px 1px var(--shadow-color);
        box-shadow: -1px -1px 25px 1px var(--shadow-color);
        cursor: pointer;
        border-radius: 20px;
        display: flex;
        flex-direction: column-reverse;
        background-image: url(images/blog-post-2.png);
        background-size: cover;
        transition: all 0.2s ease-in-out;
        position: relative;
    }

    .blog-section .button {
        margin-bottom: 25px;
    }

    .text-center {
        text-align: center;
    }

    .blog-container {
        position: relative;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding-top: 40px;
    }

    .blog {
        -webkit-box-shadow: -1px -1px 25px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 25px 1px var(--shadow-color);
        box-shadow: -1px -1px 25px 1px var(--shadow-color);
        flex-basis: 32%;
        text-align: center;
        max-height: 600px;
        overflow: hidden;
        text-overflow: ellipsis;
        border-radius: 20px;
        background-color: white;
        cursor: pointer;
        transition: box-shadow 0.2s ease-in;
        margin-bottom: 40px;
        position: relative;
        text-decoration: none !important;
    }

    /*.blog:hover {
  -webkit-box-shadow: -1px -1px 25px 1px rgba(0, 53, 145, 0.7);
  -moz-box-shadow: -1px -1px 25px 1px rgba(0, 53, 145, 0.7);
  box-shadow: -1px -1px 25px 1px rgba(0, 53, 145, 0.7);
}*/

    .blog .p-font {
        position: relative;
        /* -webkit-line-clamp: 3; */
        /* -webkit-box-orient: vertical; */
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 1.2em;
        line-height: 1.2;
        height: 114px;
        /* padding-bottom: 14px; */
    }

    .blog .p-font::after {
        position: absolute;
        content: "...";
        bottom: 0px;
        right: 0;
        font-size: 1em;
        /* line-height: 1em; */
        padding-left: 5px;
        padding-right: 10px;
        padding-bottom: 2px;
        background-color: white;
        font-weight: 500;
    }

    .blog div:not(.img-container) {
        padding: 10px;
        position: relative;
        top: -10px;
    }

    .blog img:not(.blog-icon-container img) {
        height: 300px;
        width: 100%;
        position: absolute;
        top: -20px;
        right: 0;

        object-fit: cover;
    }

    .img-container {
        display: inline-block;
        position: relative;
        width: 100%;
        height: 300px;
        vertical-align: middle;
        overflow: hidden;
    }

    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .blog span {
        opacity: 0.5;
    }

    .wave {
        transform: rotateX(-180deg) rotateY(-180deg);
        display: inline-block;
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 101%;
    }

    .divider-container {
        width: 100%;
        display: flex;
        align-items: baseline;
    }

    .divider {
        flex-basis: 100%;
        margin-right: 40px;
        height: 0px;
        border-bottom: 1px solid var(--shadow-color);
        position: relative;
        top: -5px;
    }



    @media screen and (min-width: 2000px) {
        .blog-top-bg {
            top: -1050px;
            right: -760px;
        }

        .blog-circle1 {
            top: -610px;
        }

        .blog-circle3 {
            top: 1000px;
        }
    }

    @media screen and (max-width: 1440px) {
        .blog-top-bg {
            top: -560px;
            right: -450px;
        }
    }

    @media screen and (max-width: 1024px) {
        .blog-top-bg {
            top: -466px;
            right: -380px;
            width: 120%;
        }

        .blog-subscribe-container {
            flex-direction: column;
        }

        .blog-subscribe-form {
            margin-left: 0;
            margin-top: 50px;
            width: 95%;
        }
    }

    @media screen and (max-width: 768px) {
        .blog-top-bg {
            top: -439px;
            width: 150%;
            right: -422px;
        }

        .blog-subscribe-form {
            margin-top: 25px;
            flex-direction: column;
            width: 100%;
            margin-left: 0;
        }

        .blog-subscribe-form-left {
            margin-bottom: 25px;
        }
    }

    @media screen and (max-width: 425px) {
        .blog-subscribe-form {
            width: 95%;
        }

        .blog-subscribe-form-right div {
            flex-direction: column;
            align-items: center;
        }

        .blog-subscribe-form-right button {
            width: 100%;
        }

        .blog-subscribe-form-right input {
            flex-basis: auto;
            width: 100%;
            height: 75px;
            text-align: center;
            margin-right: 0;
            padding: 10px;
            margin-bottom: 20px;
        }
    }
</style>
@section('content')

<div class="blog-bg-container">
    <img class="blog-top-bg" src="images/blog-top-bg.svg" />
    <img class="blog-circle1" src="images/fluid-bright-circle.svg" />
    <img class="blog-circle2" src="images/fluid-bright-circle.svg" />
    <img class="blog-circle3" src="images/fluid-bright-circle.svg" />
</div>
<section class="contain top-section">
    <div class="blog-subscribe-container">
        <div class="blog-subscribe-container-info">
            <h1 class="h1-font">SmartLab Blog</h1>
            <p class="p-font">
                Stay up to date with the latest design, video, develop, and
                programming news.
            </p>
        </div>

        <form class="blog-subscribe-form">
            <div class="blog-subscribe-form-left">
                <h3 class="h1-font">Subscribe to Our Blog</h3>
                <p class="p-font">Subscribe via e-mail</p>
                <label><input type="checkbox" name="categories" value="design" />
                    Design</label>
                <label><input type="checkbox" name="categories" value="online_courses" />
                    Online Courses</label>
                <label><input type="checkbox" name="categories" value="development" />
                    Design</label>
                <label><input type="checkbox" name="categories" value="video" />
                    Video</label>
            </div>
            <div class="blog-subscribe-form-right">
                <p>
                    We're committed to your privacy. SmartLab Blog uses the
                    information you provide to us to contact you about our relevant
                    content, products, and services. You may unsubscribe from these
                    communications at any time. For more information, check out our
                    privacy policy.
                </p>
                <div>
                    <input type="email" name="email" placeholder="e-mail address" />
                    <button class="button">Subscribe</button>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="blog-section contain">
    <img class="blog-section-bg" src="images/blue-orange-bg.svg" />
    <img class="blog-section-orange-circle" src="images/orange-circle.svg" />
    <div class="blog-container">
        <div class="blog-top-container">
            <div class="blog-top-main blog-hover">
                <div class="blog-icon-container moodle-icon">
                    <span class="blog-icon-description">Moodle</span>
                    <img src="images/moodle-icon.svg" alt="" class="" />
                </div>
                <div class="blog-top-content">
                    <h2 class="h2-font">Blog title goes here</h2>
                    <span class="p-font">24.05.2019 - Haris M.</span>
                    <p class="p-font">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                        a lectus posuere, gravida magna ac, molestie mi. In id ipsum
                        eget magna maximus auctor eget a purus, a lectus posuere,
                        gravida magna ac, molestie mi. In id ipsum eget magna maximus
                        auctor eget a purus
                    </p>
                </div>
            </div>
            <div class="blog-top-secondary blog-hover">
                <div class="blog-icon-container courses-icon">
                    <span class="blog-icon-description">Online Courses</span>
                    <img src="images/online-courses-icon.svg" alt="" class="" />
                </div>
                <div class="blog-top-content">
                    <h2 class="h2-font">Blog title goest here</h2>
                    <span class="p-font">24.05.2019 - Haris M.</span>
                    <p class="p-font">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus
                        a lectus posuere, gravida
                    </p>
                </div>
            </div>
        </div>
        <div class="blog-bot-container">
            @foreach ($blogs as $blog)
            <a href="/blog/{{$blog->id}}" target="_blank" class="blog blog-hover">
                <div class="blog-icon-container <?php switch ($blog->tag) {
                                                    case "development":
                                                        echo "dev-icon";
                                                        break;
                                                    case "onlinecourses":
                                                        echo "courses-icon";
                                                        break;
                                                    case "moodle":
                                                        echo "moodle-icon";
                                                        break;
                                                    case "educational";
                                                        echo "video-icon";
                                                        break;
                                                } ?>">
                    <span class="blog-icon-description"><?php switch ($blog->tag) {
                                                            case "development":
                                                                echo "Development";
                                                                break;
                                                            case "onlinecourses":
                                                                echo "Online Courses";
                                                                break;
                                                            case "moodle":
                                                                echo "Moodle";
                                                                break;
                                                            case "educational";
                                                                echo "Video Animations";
                                                                break;
                                                        } ?></span>
                    <img src="images/<?php switch ($blog->tag) {
                                            case "development":
                                                echo "dev-icon.svg";
                                                break;
                                            case "onlinecourses":
                                                echo "online-courses-icon.svg";
                                                break;
                                            case "moodle":
                                                echo "moodle-icon.svg";
                                                break;
                                            case "educational";
                                                echo "video-icon.svg";
                                                break;
                                        } ?>" alt="" class="" />
                </div>
                <div class="img-container">
                    <img src={{$blog->image_path}} alt="blog post" />
                    <svg class="wave" viewBox="0 0 500 500">
                        <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
                    </svg>
                </div>

                <div>
                    <h2 class="h3-font">{{$blog->heading}}</h2>
                    <p><span>{{$blog->created_at}}</span> <span>{{$blog->name}}</span></p>
                    <input class="blog-value" type="hidden" value='{{$blog->text}}'>
                    <p class="p-font blog-text">

                    </p>
                </div>
            </a>
            @endforeach
            <!--
            <div class="blog blog-hover">
                <div class="blog-icon-container video-icon">
                    <img class="" src="images/video-icon.svg" alt="" />
                </div>
                <div class="img-container">
                    <img src="images/blog-post-2.png" alt="blog post" />
                    <svg class="wave" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
                        <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="h3-font">Blog Title</h2>
                    <p><span>05.07.2019.</span> <span>Haris M.</span></p>
                    <p class="p-font ">
                        Sed scelerisque vulputate dui at mattis. Donec porta, lorem in
                        vehicula efficitur, est libero suscipit est, id sollicitudin urna
                        diam non sapien. Quisque porttitor, dui non porttitor efficitur,
                        ante magna pulvinar purus, sit amet pretium nunc ipsum vel libero.
                        Suspendisse venenatis lacus hendrerit, porttitor massa ac,
                        consequat lectus. Praesent tempor congue nulla, nec dictum purus
                        viverra nec. Mauris at felis metus. Vivamus egestas libero ac
                        lectus consequat ullamcorper. Vestibulum ullamcorper ornare quam,
                        eget ullamcorper sem malesuada sit amet. Aliquam tincidunt
                        eleifend nulla, non dignissim odio suscipit id. Praesent quis quam
                        leo.
                    </p>
                </div>
            </div>
            <div class="blog blog-hover">
                <div class="blog-icon-container moodle-icon">
                    <img src="images/moodle-icon.svg" alt="" class="" />
                </div>
                <div class="img-container ">
                    <img src="images/webinar-learning-experience-1170x769.jpg" alt="blog post" />
                    <svg class="wave" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
                        <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="h3-font">Blog Title</h2>
                    <p><span>05.07.2019.</span> <span>Haris M.</span></p>
                    <p class="p-font ">
                        Quisque a nisi iaculis, finibus neque quis, consectetur nisi. Nam
                        id sollicitudin orci. Sed interdum, ante sed condimentum laoreet,
                        augue sem tempor ligula, sed viverra lorem purus sit amet turpis.
                        Duis odio tortor, fermentum a leo a, tempus bibendum nisl. Nunc
                        aliquet dui ut arcu pulvinar, a mollis orci porta. Suspendisse
                        interdum nulla est. Curabitur eget metus congue, accumsan velit
                        quis, lobortis arcu. Phasellus et dignissim erat. Sed quis est in
                        magna suscipit pretium id eget leo. Mauris scelerisque
                        pellentesque odio, id porta ligula efficitur a. Fusce in fermentum
                        nulla. Etiam cursus enim non nisi sollicitudin posuere. Phasellus
                        malesuada tempus magna ut varius. Quisque posuere ut metus in
                        mattis. Duis molestie dui eget odio fringilla, sed porta enim
                        venenatis.
                    </p>
                </div>
            </div>
            <div class="blog blog-hover">
                <div class="blog-icon-container dev-icon">
                    <img src="images/dev-icon.svg" alt="" class="" />
                </div>
                <div class="img-container">
                    <img src="images/androidpit-youtube-hero-2-1-585x385.jpg" alt="blog post" />
                    <svg class="wave" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">
                        <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="h3-font">Blog Title</h2>
                    <p><span>05.07.2019.</span> <span>Haris M.</span></p>
                    <p class="p-font">
                        Morbi diam lorem, fermentum sit amet felis non, venenatis eleifend
                        arcu. Vestibulum mauris nulla, aliquam eu consequat eget, mollis
                        non sem. Cras massa enim, lobortis in sodales eu, lobortis a nisi.
                        Fusce sodales accumsan nisl sit amet ullamcorper. Sed vel lorem
                        nec quam luctus pellentesque at nec magna. Pellentesque ac luctus
                        arcu, eu fermentum justo. Nulla pulvinar tellus at auctor tempus.
                        Pellentesque habitant morbi tristique senectus et netus et
                        malesuada fames ac turpis egestas. Curabitur lobortis bibendum
                        metus id tempus. Nulla convallis tempor mauris, at blandit risus
                        semper ac. Phasellus vel neque id felis tristique viverra.
                        Praesent commodo, nunc eu imperdiet lobortis, quam tortor feugiat
                        tortor, id convallis purus turpis et nibh.
                    </p>
                </div>
            </div>
            <div class="blog blog-hover">
                <div class="blog-icon-container video-icon">
                    <img src="images/video-icon.svg" alt="" />
                </div>
                <div class="img-container">
                    <img src="images/augmented-reality-investment-e1473173317384.jpg" alt="blog post" />
                    <svg class="wave" viewBox="0 0 500 500">
                        <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
                    </svg>
                </div>

                <div>
                    <h2 class="h3-font">Blog Title</h2>
                    <p><span>05.07.2019.</span> <span>Haris M.</span></p>
                    <p class="p-font">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                        nunc odio, mollis in fringilla at, cursus aliquam felis. Curabitur
                        in cursus orci. Vestibulum convallis lectus risus, at varius nisl
                        egestas vel. Suspendisse laoreet ex quis odio aliquet mollis. Duis
                        quis porta magna. Nam dignissim enim lectus, sit amet porta metus
                        interdum a. Praesent pulvinar justo vel lectus dictum, at
                        fermentum neque lobortis. Sed vitae nisl eget augue convallis
                        convallis nec at nisi. Nullam fermentum lorem metus, sit amet
                        tincidunt velit convallis non. Proin sed finibus mauris. Sed orci
                        metus, fringilla sed sollicitudin at, efficitur in ipsum.
                        Pellentesque egestas ex quis tempor sagittis. Integer at nulla
                        scelerisque, luctus quam vel, feugiat sem. Donec molestie eu lacus
                        ut egestas. Pellentesque urna justo, tempus a est sed, bibendum
                        interdum nisl.
                    </p>
                </div>
            </div>
            <div class="blog blog-hover">
                <div class="blog-icon-container moodle-icon">
                    <img src="images/moodle-icon.svg" alt="" class="" />
                </div>
                <div class="img-container">
                    <img src="images/augmented-reality-investment-e1473173317384.jpg" alt="blog post" />
                    <svg class="wave" viewBox="0 0 500 500">
                        <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
                    </svg>
                </div>

                <div>
                    <h2 class="h3-font">Blog Title</h2>
                    <p><span>05.07.2019.</span> <span>Haris M.</span></p>
                    <p class="p-font">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                        nunc odio, mollis in fringilla at, cursus aliquam felis. Curabitur
                        in cursus orci. Vestibulum convallis lectus risus, at varius nisl
                        egestas vel. Suspendisse laoreet ex quis odio aliquet mollis. Duis
                        quis porta magna. Nam dignissim enim lectus, sit amet porta metus
                        interdum a. Praesent pulvinar justo vel lectus dictum, at
                        fermentum neque lobortis. Sed vitae nisl eget augue convallis
                        convallis nec at nisi. Nullam fermentum lorem metus, sit amet
                        tincidunt velit convallis non. Proin sed finibus mauris. Sed orci
                        metus, fringilla sed sollicitudin at, efficitur in ipsum.
                        Pellentesque egestas ex quis tempor sagittis. Integer at nulla
                        scelerisque, luctus quam vel, feugiat sem. Donec molestie eu lacus
                        ut egestas. Pellentesque urna justo, tempus a est sed, bibendum
                        interdum nisl.
                    </p>
                </div>
            </div> -->
        </div>

        <div class="divider-container">
            <div class="divider"></div>
            <button class="button button-orange">Load More</button>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        let blogValue = document.querySelectorAll(".blog-value");
        let blogText = document.querySelectorAll(".blog-text");
        console.log(blogText);
        for (let i = 0; i < blogValue.length; i++) {
            blogText[i].innerHTML = blogValue[i].value.replace(/<img .*?>/g, " ");
        }
    })
</script>
@endsection