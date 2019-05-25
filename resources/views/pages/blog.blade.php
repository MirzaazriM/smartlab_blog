<style>
    :root {
        --shadow-color: rgba(0, 53, 145, 0.15);
        --button-bg-color: #4885fa;
        --button-bg-orange: #ff931f;
        --h2-color: #4885fa;
        --h1-color: #14213d;
        --p-color: #c9d6e2;
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
        font-size: 1.5em;
        font-weight: 300;
        color: var(--h1-color);
    }

    main {
        position: relative;
        font-family: "Source Sans Pro", sans-serif;
        overflow-x: hidden;
    }

    .blog-bg-container {
        position: absolute;
        width: 100%;
        height: 75vh;

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

    .blog-image-container {
        position: relative;

        border-radius: 25px;
        margin-bottom: 100px;
        margin-top: 350px;
    }

    .blog-image {
        width: 100%;

        object-fit: contain;
        border-radius: 25px;
    }

    .blog-back {
        position: absolute;
        padding: 0;
        height: 75px;
        width: 75px;
        border-radius: 42.5px;
        transform: translateY(45%);
        bottom: 0;
        left: 20px;
        z-index: 100;
        border: none;
        background-color: var(--button-bg-orange);
        transition: all 0.2s ease-in-out;
        cursor: pointer;
        overflow: hidden;
    }

    .blog-back:focus {
        outline: none;
    }

    .blog-back:hover {
        width: 200px;
    }

    .blog-back:hover img {
        transform: translate(-40%, -20%);
    }

    .blog-back:hover span {
        opacity: 1;
        width: 100px;
    }

    .blog-back img {
        width: 200%;
        height: 200%;
        transform: translate(-25%, -20%);
        transition: all 0.2s ease-in-out;
    }

    .blog-back span {
        color: white;
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1.3em;
        display: inline-block;
        opacity: 0;
        position: absolute;
        transform: translate(59%, 50%);
        white-space: nowrap;
        bottom: 50%;
        width: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        transition: all 0.2s ease-in-out;
    }

    .blog-social {
        position: absolute;
        right: 0;
        bottom: 0;
        height: 75px;
        display: flex;
        transform: translateY(50%);
    }

    .blog-social div {
        height: 75px;
        width: 75px;
        cursor: pointer;
        margin-right: 20px;
        z-index: 100;
    }

    .blog-social img {
        pointer-events: none;
        width: 200%;
        height: 200%;
        transform: translate(-25%, -20%);
    }

    .blog-content {
        margin-bottom: 100px;
    }

    .blog-content .p-font {
        font-size: 1.2em;
        line-height: 30px;
    }

    .blog-content-h3 {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
    }

    .blog-content-h3 h3 {
        margin-top: 0;
        font-size: 1.4em;
    }

    .blog-content-h3 span {
        font-family: "Source Sans Pro", sans-serif;
        font-size: 1.1em;
    }

    .blog-subscribe-container {
        display: flex;
        border-bottom: 1px solid var(--shadow-color);
        padding-top: 20px;
        padding-bottom: 50px;
        align-items: center;
    }

    .blog-subscribe-form {
        display: flex;
        justify-content: space-around;
        border-radius: 20px;
        -webkit-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        -moz-box-shadow: -1px -1px 15px 1px var(--shadow-color);
        box-shadow: -1px -1px 15px 1px var(--shadow-color);
        padding: 50px 20px;
        margin-left: 50px;
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

    .blog-subscribe-form-left label {
        display: block;
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
    }

    .blog-recent-container {
        display: flex;
        justify-content: space-between;
    }

    .blog-recent-container div {
        flex-basis: 25%;
        cursor: pointer;
    }

    .blog-recent-padding-border {
        padding: 0 50px;
        border-left: 1px solid var(--shadow-color);
    }

    .blog-recent-container .h2-font {
        font-size: 1.2em;
        margin-bottom: 0;
        margin-top: 0;
    }

    .blog-recent-container p {
        margin-bottom: 0;
    }

    .recent {
        margin-top: 50px;
        margin-bottom: 50px;
        font-size: 1.5em;
        font-weight: bolder;
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

        .blog-recent-padding-border {
            padding: 0 20px;
        }
    }

    @media screen and (max-width: 768px) {
        .blog-top-bg {
            top: -439px;
            width: 150%;
            right: -422px;
        }

        .blog-back {
            width: 50px;
            height: 50px;
        }

        .blog-social {
            height: 50px;
        }

        .blog-social div {
            height: 50px;
            width: 50px;
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

        .blog-recent-container div {
            flex-basis: 50%;
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

        .blog-back {
            left: 10px;
        }

        .blog-recent-container {
            flex-wrap: wrap;
        }

        .blog-recent-container div {
            flex-basis: 45%;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--shadow-color);
        }

        .blog-recent-padding-border {
            padding: 0 0px;
            border: none;
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

        .blog-content-h3 {
            flex-direction: column;
            margin-bottom: 50px;
        }

        .blog-social div {
            margin-right: 10px;
        }
    }
</style>

<!--<p>Blog page</p>

<p>{{$blog->heading}}</p>

<hr>

<div id="text">
    <input id="hid" type="hidden" value="{{$blog->text}}">
    {{$blog->text}}
</div>

<hr>

<p>{{$blog->created_at}}</p>


-->
<div class="blog-bg-container">
    <img class="blog-top-bg" src={{"/images/blog-top-bg.svg"}} />
    <img class="blog-circle1" src={{"/images/fluid-bright-circle.svg"}} />
    <img class="blog-circle2" src={{"/images/fluid-bright-circle.svg"}} />
    <img class="blog-circle3" src={{"/images/fluid-bright-circle.svg"}} />
</div>
<main class="contain">
    <div class="blog-image-container">
        <img class="blog-image" src={{$blog->image_path}} />
        <button class="blog-back">
            <span>Back to blog</span>
            <img src={{"/images/back-to-home.svg"}} />
        </button>

        <div class="blog-social">
            <div>
                <img src={{"/images/fb-blog-share.svg"}} />
            </div>
            <div>
                <img src={{"/images/twitter-share.svg"}} />
            </div>
            <div>
                <img src={{"/images/linkedin-share.svg"}} />
            </div>
        </div>
    </div>
    <div class="blog-content">
        <h1 class="h1-font">{{$blog->heading}}</h1>
        <div class="blog-content-h3">
            <h3 class="h2-font">
                {{$blog->heading}} <span>Treba se dodati podnaslov za blogove</span>
            </h3>
            <span>{{$blog->created_at}} - name</span>
        </div>
        <div>
            <input id="hid" type="hidden" value="{{$blog->text}}">
            <p class="p-font" id="text">
                {{$blog->text}}
            </p>
        </div>
    </div>
    <div class="blog-subscribe-container">
        <div>
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
                    Design</label>
            </div>
            <div class="blog-subscribe-form-right">
                <p>
                    We're committed to your privacy. SmartLab Blog uses the
                    information you provide to us to contact you about our relevant
                    content, products, and services. You mayunsubscribe from these
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
    <div>
        <p class="h1-font recent">Recent Posts:</p>
        <div class="blog-recent-container">

            <div>
                <h4 class="h2-font"></h4>
                <p></p>
            </div>

            <div class="blog-recent-padding-border ">
                <h4 class="h2-font">Blog Post Name</h4>
                <p>September 28.2019.</p>
            </div>
            <div class="blog-recent-padding-border ">
                <h4 class="h2-font">Blog Post Name</h4>
                <p>September 28.2019.</p>
            </div>
            <div class="blog-recent-padding-border ">
                <h4 class="h2-font">Blog Post Name</h4>
                <p>September 28.2019.</p>
            </div>
        </div>
    </div>
</main>
<script>
    (function() {
        document.getElementById("text").innerHTML = document.getElementById("hid").value;
    })();
</script>