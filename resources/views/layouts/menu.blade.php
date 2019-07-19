<style>
    #nav-top {
        height: 30px;
        margin-top: 15px;
    }

    ul {
        margin-bottom: 0;
        padding-left: 0;
    }

    .contain {
        max-width: 1440px;
        width: 90%;
        margin: 0 auto;
    }

    .nav-top {
        display: flex;
        justify-content: flex-end;
        font-family: "Montserrat", sans-serif;
    }

    .nav-top p {
        opacity: .5;
        color: #fff;
        margin-right: 50px;
    }

    .nav-top p span {
        margin-right: 20px;
    }

    #languageForm {
        position: relative;
        left: 20px;
    }

    .nav-top label {
        text-transform: uppercase;
        position: relative;
        right: 20px;
        color: #fff;
        opacity: .5;
        cursor: pointer;
    }

    .language-selected {
        opacity: 1 !important;
        font-weight: 700;
    }

    .nav-top input {
        visibility: hidden;
    }

    nav {
        width: 100%;
        position: fixed;
        top: 0;
        z-index: 100;
    }

    .nav-logo {
        height: 35px;
        width: 150px;
    }

    .nav-logo-container span {
        font-family: "Montserrat", sans-serif;
        position: relative;
        font-weight: bold;
        bottom: -10px;
    }

    .nav-logo-container {
        display: flex;
        flex-direction: column;
    }

    .nav-bot {
        display: flex;
        justify-content: space-between;
    }

    .nav-bot-left {
        display: flex;
    }

    .nav-bot-right {
        display: flex;
    }

    .nav-bot .filters {
        font-family: "Montserrat", sans-serif;
        cursor: pointer;
        border: none;
        border-radius: 35px;
        width: 200px;
        height: 60px;
        font-size: 1.2em !important;
        font-weight: bold;
        padding: 10px 22px;
    }

    .search-container {
        position: relative;
    }

    .nav-bot .search {
        width: 250px;
        padding: 10px 22px;
    }

    .search-label {
        position: absolute;
        top: 50%;
        left: 22px;
        transform: translateY(-50%);
        font-family: "Source Sans Pro", sans-serif;
        font-style: italic;
        font-size: 1.4em;
        opacity: 0.5;
    }

    .nav-bot .filters:focus {
        outline: none;
    }
</style>

<script>
    function changeSiteLanguage(value) {
        console.log(value);
        document.getElementById("languageForm").submit();
    }
</script>

@section('menu')
<nav>
    <ul class="contain">

        <div class="nav-top" id="nav-top">

            <p><span>Call: </span><span>+387 61 811 394</span> <span>+387 33 956 222</span></p>
            <form id="languageForm" action="/language" method="POST">
                <!-- Form for sending new language after user clicks on one of the select options - page is refreshed with new language translations -->
                @csrf
                @method('PUT')

                <input type="radio" name="language" id="en" value="en" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='en' ) checked @endif><label for="en" @if(App::getlocale()=='en' ) class="language-selected" @endif>@lang('menu.english_language')</label>
                <input type="radio" name="language" id="de" value="de" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='de' ) checked @endif><label for="de" @if(App::getlocale()=='de' ) class="language-selected" @endif>@lang('menu.german_language')</label>
                <input type="radio" name="language" id="bs" value="bs" onclick="changeSiteLanguage(this.value)" @if(App::getlocale()=='bs' ) checked @endif><label for="bs" @if(App::getlocale()=='bs' ) class="language-selected" @endif>@lang('menu.bosnian_language')</label>

            </form>

        </div>
        <div class="nav-bot">
            <div class="nav-bot-left">
                <div class="nav-logo-container">
                    <span>BLOG</span>
                    <img class="nav-logo" src="{{ asset('images/smartlab-logo.svg') }}" alt="smartlab logo">
                </div>
                <button class="filters">Home</button>
            </div>

            <div class="nav-bot-right">
                <div class="search-container">
                    <input class="filters search" type="search" id="search" name="search">
                    <label for="search" class="search-label">Search...</label>
                </div>

                <select class="filters">
                    <option disabled selected>Category</option>
                    <option value="development">Development</option>
                    <option value="online-courses">Online courses</option>
                    <option value="educational">Educational</option>
                    <option value="moodle">Moodle</option>
                </select>
                <select class="filters">
                    <option disabled selected>Sorty by</option>
                    <option value="newest">Development</option>
                    <option value="top-rated">Online courses</option>
                </select>
            </div>
        </div>
    </ul>
</nav>
<!--
{{--<li class="nav-item">@lang('menu.first_item')</li>--}}
{{--<li class="nav-item">@lang('menu.second_item')</li>--}}
{{--<li class="nav-item">@lang('menu.third_item')</li>--}}
{{--<li class="nav-item">--}}
{{--<a href="http://smartlab_web.localhost/" target="_blank">@lang('menu.fourth_item')</a>--}}
{{--</li>--}}
{{--<li class="nav-item">@lang('menu.fifth_item')</li>--}}
{{--@auth--}}

{{--@if(\Illuminate\Support\Facades\Auth::user()->roles_id == 1)--}}
{{--<li class="nav-item">--}}
{{--<a href="{{route('admins.index')}}">@lang('menu.sixth_item')</a>--}}
{{--</li>--}}
{{--@endif--}}

{{--<li class="nav-item">--}}
{{--<a href="{{route('blogs.index')}}">@lang('menu.seventh_item')</a>--}}
{{--</li>--}}
{{--<li class="nav-item"><a href="{{route('logout')}}">@lang('menu.eight_item')</a></li>--}}
{{--@endauth--}}

<li>



</li>
-->
@endsection