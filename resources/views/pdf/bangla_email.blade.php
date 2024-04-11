<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style type="text/css">
        .u-row {
            display: flex;
            flex-wrap: nowrap;
            margin-left: 0;
            margin-right: 0;
        }

        .u-row .u-col {
            position: relative;
            width: 100%;
            padding-right: 0;
            padding-left: 0;
        }

        .u-row .u-col.u-col-22p2 {
            flex: 0 0 22.2%;
            max-width: 22.2%;
        }

        .u-row .u-col.u-col-24p4 {
            flex: 0 0 24.4%;
            max-width: 24.4%;
        }

        .u-row .u-col.u-col-33p33 {
            flex: 0 0 33.33%;
            max-width: 33.33%;
        }

        .u-row .u-col.u-col-75p6 {
            flex: 0 0 75.6%;
            max-width: 75.6%;
        }

        .u-row .u-col.u-col-77p8 {
            flex: 0 0 77.8%;
            max-width: 77.8%;
        }

        .u-row .u-col.u-col-100 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        @media (max-width: 767px) {
            .u-row:not(.no-stack) {
                flex-wrap: wrap;
            }

            .u-row:not(.no-stack) .u-col {
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }
        }

        body,
        html {
            padding: 0;
            margin: 0
        }

        html {
            box-sizing: border-box
        }

        *,
        :after,
        :before {
            box-sizing: inherit
        }

        html {
            font-size: 14px;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }

        p {
            margin: 0
        }

        form .error-field {
            -webkit-animation-name: shake;
            animation-name: shake;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        form .error-field input,
        form .error-field textarea {
            border-color: #a94442 !important;
            color: #a94442 !important
        }

        form .field-error {
            padding: 5px 10px;
            font-size: 14px;
            font-weight: 700;
            position: absolute;
            top: -20px;
            right: 10px
        }

        form .field-error:after {
            top: 100%;
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(136, 183, 213, 0);
            border-top-color: #ebcccc;
            border-width: 5px;
            margin-left: -5px
        }

        form .spinner {
            margin: 0 auto;
            width: 70px;
            text-align: center
        }

        form .spinner>div {
            width: 12px;
            height: 12px;
            background-color: hsla(0, 0%, 100%, .5);
            margin: 0 2px;
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both
        }

        form .spinner .bounce1 {
            -webkit-animation-delay: -.32s;
            animation-delay: -.32s
        }

        form .spinner .bounce2 {
            -webkit-animation-delay: -.16s;
            animation-delay: -.16s
        }

        @-webkit-keyframes sk-bouncedelay {

            0%,
            80%,
            to {
                -webkit-transform: scale(0)
            }

            40% {
                -webkit-transform: scale(1)
            }
        }

        @keyframes sk-bouncedelay {

            0%,
            80%,
            to {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            40% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes shake {

            0%,
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0)
            }

            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0)
            }
        }

        @keyframes shake {

            0%,
            to {
                -webkit-transform: translateZ(0);
                transform: translateZ(0)
            }

            10%,
            30%,
            50%,
            70%,
            90% {
                -webkit-transform: translate3d(-10px, 0, 0);
                transform: translate3d(-10px, 0, 0)
            }

            20%,
            40%,
            60%,
            80% {
                -webkit-transform: translate3d(10px, 0, 0);
                transform: translate3d(10px, 0, 0)
            }
        }

        @media (max-width:480px) {
            .container {
                max-width: 100% !important
            }
        }

        @media (min-width:481px) and (max-width:768px) {
            .hide-tablet {
                display: none !important
            }
        }

        .container {
            width: 100%;
            padding-right: 0;
            padding-left: 0;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width:576px) {
            .container {
                max-width: 540px
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 720px
            }
        }

        @media (min-width:992px) {
            .container {
                max-width: 960px
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1140px
            }
        }

        a[onclick] {
            cursor: pointer;
        }

        body {
            font-family: arial, helvetica, sans-serif;
            font-size: 1rem;
            line-height: 1.5;
            color: #000000;
            background-color: #e7e7e7;
        }

        #u_body a {
            color: #0000ee;
            text-decoration: underline;
        }

        #u_body a:hover {
            color: #0000ee;
            text-decoration: underline;
        }
    </style>


</head>

<body>

    <div id="u_body" class="u_body" style="min-height: 100vh;">

        <div id="u_row_1" class="u_row" style="padding: 0px;">
            <div class="container" style="max-width: 500px;margin: 0 auto;">
                <div class="u-row">

                    <div id="u_column_1" class="u-col u-col-22p2 u_column"
                        style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                        <div style="width: 100%;padding:0px;">

                            <div id="u_content_image_1" class="u_content_image"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div style="position:relative;line-height:0px;text-align:center">

                                    <img alt=""
                                        src="https://assets.unlayer.com/projects/224472/1711417599014-omslogo-1024x1024%20(1).png"
                                        style="width: 100%;max-width: 1024px;" title="" />

                                </div>

                            </div>

                        </div>
                    </div>

                    <div id="u_column_3" class="u-col u-col-77p8 u_column"
                        style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
                        <div style="width: 100%;padding:10px;">

                            <div id="u_content_text_1" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 15px; font-weight: 700; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">চট্টগ্রাম সরকারী মুসলিম হাইস্কুল প্রাক্তন ছাত্রসমিতি
                                    </p>
                                </div>

                            </div>

                            <div id="u_content_text_2" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 9px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">CHATTOGRAM SARKARI MUSLIM HIGH SCHOOL PRAKTAN CHATTRA
                                        SAMITY</p>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="u_row_3" class="u_row" style="padding: 0px;">
            <div class="container" style="max-width: 500px;margin: 0 auto;">
                <div class="u-row">

                    <div id="u_column_4" class="u-col u-col-100 u_column"
                        style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
                        <div style="width: 100%;padding:0px;">

                            <div id="u_content_text_3" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 21px; font-weight: 700; line-height: 140%; text-align: center; word-wrap: break-word;">
                                    <p style="line-height: 140%;">জীবন সদস্যের আবেদন</p>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="u_row_4" class="u_row" style="padding: 0px;">
            <div class="container" style="max-width: 500px;margin: 0 auto;">
                <div class="u-row">

                    <div id="u_column_6" class="u-col u-col-75p6 u_column"
                        style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
                        <div style="width: 100%;padding:0px;">

                            <div id="u_content_text_4" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 20px;">

                                <div
                                    style="font-size: 16px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 140%;">জীবন সদস্য ক্রমিক নংঃ {{ $lm_no }}</p>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div id="u_column_7" class="u-col u-col-24p4 u_column"
                        style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
                        <div style="width: 100%;padding:0px;">

                            <div id="u_content_image_2" class="u_content_image"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div style="position:relative;line-height:0px;text-align:center">

                                    <img style="width: 150px; height: 150px" alt="" src="{{ $image }}"
                                        title="" />

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="u_row_5" class="u_row" style="padding: 0px;">
            <div class="container" style="max-width: 500px;margin: 0 auto;">
                <div class="u-row">

                    <div id="u_column_8" class="u-col u-col-100 u_column"
                        style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
                        <div style="width: 100%;padding:0px;">

                            <div id="u_content_text_6" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 14px; line-height: 190%; text-align: left; word-wrap: break-word;">
                                    <p style="line-height: 190%;">নামঃ (বাংলায়) : {{ $ban_name }}</p>
                                    <p style="line-height: 190%;">&nbsp; &nbsp; &nbsp; &nbsp;(ইংরেজি)
                                        :&nbsp;{{ $eng_name }}</p>
                                    <p style="line-height: 190%;">পিতাঃ&nbsp;{{ $father_name }}</p>
                                    <p style="line-height: 190%;">মাতাঃ {{ $mother_name }}</p>
                                    <p style="line-height: 190%;">স্থায়ী ঠিকানাঃ {{ $permanent_address }}</p>
                                    <p style="line-height: 190%;">যোগাযোগের ঠিকানাঃ {{ $mobile }}</p>
                                    <p style="line-height: 190%;">ই-মেইলঃ {{ $email }}</p>
                                    <p style="line-height: 190%;">রক্তের গ্রুপঃ {{ $blood_group }}</p>
                                    <p style="line-height: 190%;">পেশাঃ {{ $passing_year_id }}</p>
                                    <p style="line-height: 190%;">জন্ম তারিখঃ{{ $date_of_birth }}</p>
                                    <p style="line-height: 190%;">এস.এস.সি পাশের সনঃ{{ $passing_year_id }}</p>
                                </div>

                            </div>

                            <div id="u_content_text_7" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 18px; font-weight: 700; line-height: 140%; text-align: center; word-wrap: break-word;">
                                    <p style="line-height: 140%;"><span
                                            style="text-decoration: underline; line-height: 25.2px;">অঙ্গীকারনামা</span>
                                    </p>
                                </div>

                            </div>

                            <div id="u_content_text_8" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 14px; line-height: 140%; text-align: center; word-wrap: break-word;">
                                    <p style="line-height: 140%;">আমি সমিতির গঠনন্ত্র ও সকল নিয়মাবলী মানিয়া চলিব এবং
                                        সমিতির লক্ষ্য ও উদ্দেশ্য বাস্তবায়নে সার্বিক সহযোগিতা করিতে সচেষ্ট থাকিব।
                                        উল্লেখ্য, যোগাযোগ ঠিকানা কিংবা ফোন নম্বর পরিবর্তন হইলে সমিতিকে অবহিত করিব।</p>
                                </div>

                            </div>

                            <div id="u_content_divider_1" class="u_content_divider"
                                style="overflow-wrap: break-word;padding: 19px;">
                                <div style="text-align:center;line-height:0">
                                    <div
                                        style="border-top-width:1px;border-top-style:solid;border-top-color:#BBBBBB;width:100%;display:inline-block;line-height:1px;height:0px;vertical-align:middle">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="u_row_6" class="u_row" style="padding: 0px;">
            <div class="container" style="max-width: 500px;margin: 0 auto;">
                <div class="u-row">

                    <div id="u_column_9" class="u-col u-col-33p33 u_column"
                        style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
                        <div style="width: 100%;padding:0px;">

                            <div id="u_content_text_9" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 14px; line-height: 140%; text-align: center; word-wrap: break-word;">
                                    <p style="line-height: 140%;">{{ $current_date }}</p>
                                </div>

                            </div>

                            <div id="u_content_text_10" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 14px; line-height: 140%; text-align: center; word-wrap: break-word;">
                                    <p style="line-height: 140%;">তারিখ</p>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div id="u_column_10" class="u-col u-col-33p33 u_column"
                        style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
                        <div style="width: 100%;padding:0px;">

                            <div id="u_content_text_11" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 14px; line-height: 140%; text-align: center; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Mohammed Saifuddin Munna</p>
                                </div>

                            </div>

                            <div id="u_content_text_13" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 14px; line-height: 140%; text-align: center; word-wrap: break-word;">
                                    <p style="line-height: 140%;">প্রস্তাবক</p>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div id="u_column_11" class="u-col u-col-33p33 u_column"
                        style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
                        <div style="width: 100%;padding:0px;">

                            <div id="u_content_text_12" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 14px; line-height: 140%; text-align: center; word-wrap: break-word;">
                                    <p style="line-height: 140%;">
                                        <img class="right-img" style="width: 100px; height: 30px"
                                            src="{{ $signature }}" alt="">
                                    </p>
                                </div>

                            </div>

                            <div id="u_content_text_14" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 14px; line-height: 140%; text-align: center; word-wrap: break-word;">
                                    <p style="line-height: 140%;">স্বাক্ষর</p>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="u_row_8" class="u_row" style="padding: 0px;">
            <div class="container" style="max-width: 500px;margin: 0 auto;">
                <div class="u-row">

                    <div id="u_column_13" class="u-col u-col-100 u_column"
                        style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;">
                        <div style="width: 100%;padding:0px;">

                            <div id="u_content_text_16" class="u_content_text"
                                style="overflow-wrap: break-word;padding: 10px;">

                                <div
                                    style="font-size: 14px; line-height: 140%; text-align: center; word-wrap: break-word;">
                                    <p style="line-height: 140%;">Design &amp; Developed By:<span
                                            style="line-height: 19.6px;"> <span
                                                style="color: #e03e2d; line-height: 19.6px;"><a
                                                    style="color: #e03e2d;" target="_blank"
                                                    href="https://kittosoft.com/"
                                                    rel="noopener">kittosoft.com</a></span></span>
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</body>

</html>
