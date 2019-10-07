<style>
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885FA;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
        --dev-icon: #f83f3f;
        --video-icon: #6b56ff;
        scroll-behavior: smooth;
    }

    html {
        overflow-x: hidden;
    }

    * {
        box-sizing: border-box;
        line-height: 1.2 !important;
    }

    body {
        margin: 0 auto;
        overflow-x: hidden;
        background-color: white !important;
        overflow-y: hidden !important;
    }

    .contain {
        max-width: 1440px;
        width: 90%;
        margin: 0 auto;
    }

    .bold {
        font-weight: bold;
    }

    .h1-font {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 2.5em;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
    }

    .h2-font {
        font-family: "Montserrat", sans-serif;
        font-size: 1.8em;
        color: var(--h2-color) !important;
    }

    .h3-font {
        font-family: "Montserrat", sans-serif;
        font-size: 1.8em;
        color: var(--h1-color) !important;
    }

    .p-font {
        font-family: "Source Sans Pro", sans-serif !important;
        font-size: 1.4em;
        font-weight: 300;
        color: var(--h1-color) !important;
    }

    .--p-font-white {
        color: white !important;
    }

    .--h2-font-white-bold {
        font-weight: bold !important;
        color: white !important;
    }

    .button {
        font-family: "Montserrat", sans-serif;
        cursor: pointer;
        border: none;
        border-radius: 35px;
        width: 260px;
        height: 70px;
        font-size: 1.2em !important;
        font-weight: bold;
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




    main {
        position: relative;
        font-family: "Source Sans Pro", sans-serif;
        overflow-x: hidden;
    }

    .top-section {
        padding-top: 150px;
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
        width: 100%;
        z-index: -100;
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
        text-shadow: 0px 0px 10px black;
    }

    .blog-top-content h2 {
        position: relative;
    }

    .blog-top-content:after {
        content: "...";
        position: absolute;
        display: inline-block;
        right: 0px;
        padding-right: 30px;
        bottom: 0px;
        padding-bottom: 32px;
        font-size: 2.8em;
        color: white;
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

    .blog-top-content .blog-text::after {
        position: absolute;
        content: "...";
        bottom: -5px;
        right: 0;
        font-size: 2em;
        /* line-height: 1em; */
        /*padding-left: 5px;*/
        /* padding-right: 10px;*/
        font-weight: 500;
    }

    .blog-top-main {
        flex-basis: 66%;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        padding-bottom: 2.8em;
        overflow: hidden;
        cursor: pointer;
        border-radius: 20px;
        display: flex;
        flex-direction: column-reverse;
        background-image: url(/images/blog-post-1.jpg);
        background-size: cover;
        transition: all 0.2s ease-in-out;
        position: relative;
        padding-top: 20%;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .top-blog-overlay {
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
    }

    .blog-top-main:hover {
        text-decoration: none;
    }

    .blog-top-secondary {
        flex-basis: 32%;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        padding-bottom: 2.3em;
        overflow: hidden;
        cursor: pointer;
        border-radius: 20px;
        display: flex;
        flex-direction: column-reverse;
        background-image: url(images/blog-post-2.jpg);
        background-size: cover;
        transition: all 0.2s ease-in-out;
        position: relative;
        padding-top: 20%;
        background-size: cover;
        background-position: center;
        position: relative;
    }

    .blog-top-secondary:hover {
        text-decoration: none;
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
        -webkit-box-shadow: -1px -1px 10px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 10px 1px var(--shadow-color);
        box-shadow: -1px -1px 10px 1px var(--shadow-color);
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
        margin-top: 20px;
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
        height: 120px;
        text-align: left;
        /* padding-bottom: 14px; */
    }

    .blog .p-font::after {
        position: absolute;
        content: "...";
        bottom: 0px;
        right: 0px;
        font-size: 1em;
        /* line-height: 1.4em; */
        padding-left: 5px;
        padding-right: 50%;
        /* padding-bottom: 2px; */
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

    main {
        /* max-height: 100vh;*/
    }

    .coming-soon-container {
        animation: height 2s ease-in-out forwards;
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10000;
        background-color: white;
        clip-path: circle(10%);
    }

    .coming-soon-logo-container {
        position: absolute;
        top: 62px;
        transform: translateX(-1px);
        display: flex;
        justify-content: space-between;
    }

    @media screen and (max-width: 425px) {
        .coming-soon-logo-container {
            align-items: center;
            flex-direction: column;
        }

        .coming-soon-logo-container .button {
            margin-top: 15px;
        }

        .blog-top-main {
            max-height: 700px;
        }

        .blog-top-secondary {
            max-height: 650px;
        }
    }

    .coming-soon-logo-container .button {
        animation: opacity 2s ease-in-out forwards;
        width: 160px !important;
        height: 50px !important;

    }

    .coming-soon-container p {
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        font-size: 8vw;
        margin-top: 0;
        margin-bottom: 25px;
        color: var(--h1-color);
        text-shadow: 0px 0px 30px rgba(0, 53, 145, 1);
        pointer-events: none;
    }

    @keyframes opacity {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes height {
        from {
            clip-path: circle(10%);
        }

        to {
            clip-path: circle(100%);
        }
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

        .blog-top-main {
            flex-basis: 60%;
        }

        .blog-top-secondary {
            flex-basis: 38%;
        }
    }



    @media screen and (max-width: 1024px) {
        .blog-top-bg {
            top: -520px;
            right: -380px;
            width: 120%;
        }

        .blog-top-container {
            flex-wrap: wrap;
            height: auto;
        }

        .blog-top-main {
            flex-basis: 100%;
            margin-bottom: 10px;
            max-height: 520px;
        }

        .blog-top-secondary {
            flex-basis: 100%;
            max-height: 400px;
            padding-top: 70px;
        }

        .blog-top-content:after {
            padding-bottom: 28px;
        }



        .blog-subscribe-container {
            flex-direction: column;
            align-items: flex-start;
        }

        .blog-subscribe-form {
            margin-left: 0;
            margin-top: 50px;
            width: 100%;
        }
    }

    @media screen and (max-width: 768px) {
        .blog-top-bg {
            top: -562px;
            width: 153%;
            right: -476px;
            transform: rotate(-8deg);
        }

        .blog-top-content p {
            position: relative;
            margin-top: 48px;
            max-height: 71px;
            overflow: hidden;
            padding-right: 10px;
        }

        .blog-top_content .blog-text:after {
            display: inline-block;
            content: "...";
            font-size:
        }

        .blog-top-content:after {
            display: none;
            padding-bottom: 20px;
            padding-right: 10px;
        }

        .blog-subscribe-form {
            margin-top: 25px;
            flex-direction: column;
            width: 100%;
            margin-left: 0;
        }

        .blog-top-container {

            height: auto;
            margin-bottom: 50px;
        }

        .blog-subscribe-form-left {
            margin-bottom: 25px;
        }

        .blog-top-content {
            margin-top: 85px;

        }

        .blog {
            flex-basis: 49%;
        }
    }

    @media screen and (max-width: 425px) {
        .blog-subscribe-form {
            width: 100%;
        }

        .blog-top-content p {
            padding-right: 16px;
        }

        .blog-top-content .blog-text::after {
            right: 8px;
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

        .button {
            height: 60px;
        }

        .blog-top-content {
            padding-right: 15px;
            padding-left: 15px;
            padding-bottom: 30px;
            margin-top: 50px;
        }

        .blog-top-secondary {
            flex-basis: 100%;
        }

        .blog {
            flex-basis: 100%;
        }

        .top-section {
            padding-top: 160px;
        }

        .blog-top-bg {
            top: -409px;
            width: 228%;
            right: -523px;
            transform: rotate(-6deg);
        }
    }

    @media screen and (max-width: 375px) {
        .blog-top-bg {
            top: -375px;
            width: 249%;
            right: -533px;
        }
    }

    @media screen and (max-width: 320px) {
        .blog-top-bg {
            top: -379px;
            width: 247%;
            right: -385px;
            transform: rotate(-3deg);
        }
    }
</style>
@section('content')
<!--<div class="coming-soon-container">
    <div class="coming-soon-logo-container contain">
        <div>
            <a href="https://stagingblog.smartlab.ba/"><img class="nav-logo" src="{{ asset('images/smartlab-logo.svg') }}" alt="smartlab logo"></a>
        </div>
        <a href="https://staging.smartlab.ba/"><button class="button"><span class="home-text">Home</span></button></a>
    </div>
    <p>Coming soon!</p>
</div>-->
<div class="loader-container">
    <div class="css-animation-container">
        <div class="css-animation"></div>
    </div>
</div>
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
                Stay up to date with the latest design, video, development, and
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
                    Development</label>
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

        @foreach ($blogs as $blog)
        @if($loop -> iteration == 1)
        <div class="blog-top-container">
            <a href="/blog/{{$blog->id}}" target="_blank" class="blog-top-main blog-hover" style="background-image:url(https://smartlab.ba{{$blog->image_path}})">
                <div class="top-blog-overlay"></div>
                <div class=" blog-icon-container <?php switch ($blog->tag) {
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
                <div class="blog-top-content">
                    <h2 class="h2-font --h2-font-white-bold"> {{$blog->heading}}</h2>
                    <p class=" p-font --p-font-white"><span>{{$blog->created_at}}</span> <span>{{$blog->name}}</span></p>
                    <input class="blog-value" type="hidden" value=' {{$blog->text}}'>
                    <p class="p-font --p-font-white blog-text">

                    </p>
                </div>
            </a>
            @endif
            @if($loop -> iteration == 2)
            <a href="/blog/{{$blog->id}}" target="_blank" class="blog-top-secondary blog-hover" style="background-image:url(https://smartlab.ba{{$blog->image_path}})">
                <div class="top-blog-overlay"></div>
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
                <div class="blog-top-content">
                    <h2 class="h2-font --h2-font-white-bold">{{$blog->heading}}</h2>
                    <p class="p-font --p-font-white"><span>{{$blog->created_at}}</span> <span>{{$blog->name}}</span></p>
                    <input class="blog-value" type="hidden" value=' {{$blog->text}}'>
                    <p class="p-font --p-font-white blog-text">

                    </p>
                </div>

            </a>
        </div>
        @endif
        @if($loop->iteration > 2)

        <a href="/blog/{{$blog->id}}" target="_blank" class="blog blog-hover">
            <div class="blog-icon-container <?php
                                            switch ($blog->tag) {
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
                <img src='https://smartlab.ba{{($blog->image_path)}}' alt="blog post" />


                <svg class="wave" viewBox="0 0 500 500">
                    <path d="M0,100 C150,200 350,0 500,100 L500,00 L0,0 Z" style="stroke: none; fill: white;"></path>
                </svg>
            </div>

            <div>
                <h2 class="h3-font">{{$blog->heading}}</h2>
                <p><span>{{$blog->created_at}}</span> <span>{{$blog->name}}</span></p>
                <input class="blog-value" type="hidden" value=' {{$blog->text}}'>
                <p class="p-font blog-text">

                </p>
            </div>
        </a>

        @endif

        @endforeach



        <!--<div class="divider-container">
            <div class="divider"></div>
            <button class="button button-orange">Load More</button>
        </div>-->
    </div>
</section>

@endsection
@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        let blogValue = document.querySelectorAll(".blog-value");
        let blogText = document.querySelectorAll(".blog-text");
        for (let i = 0; i < blogValue.length; i++) {
            let temp = blogValue[i].value.replace(/(<([^>]+)>)/ig, "");;
            blogText[i].innerHTML = temp;
        }
        let loaderContainer = document.querySelector(".loader-container");
        loaderContainer.classList.add("loaderEnd");
        setTimeout(function() {
            loaderContainer.style.display = "none";
        }, 1000)
    });
</script>
@endsection