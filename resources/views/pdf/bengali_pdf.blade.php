<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .border {
            border: 1px solid red;
            padding: 10px
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 10px
        }

        .organization {
            text-align: right;
            margin-left: auto;
            margin-right: 0;
            display: inline-block;
        }

 .section-1-title h3 {
    margin: 0px;

}
        .section-1-container {
            width: 100%;
            margin: 0 auto;
        }

        .section-1-title {
            text-align: center;
            margin-left: auto;
            margin-right: 0;
            display: inline-block;
        }

        .logo {
            float: left;
            width: 100px;
            /* Adjust size as needed */
            height: auto;
        }

        .profile-image {
            float: right;
            width: 150px;
            border-radius: 10px;
            border: 2px solid #ccc;
            height: 150px;
            box-sizing: border-box; 
        }

        .profile-container {
            width: 100%;
            margin: 0 auto;
            padding: 10px
        }

        .profile-info {
            text-align: left;
            display: inline-block;

            padding: 0;
        }
       

        .profile-info p {
            padding: 0px;
            margin: 0px;
            font-size: 28px;
            font-weight: 700;
        }

        .body-info {
            text-align: left;
            /* margin-left: auto; */
            display: inline-block;
            padding: 0px;
            /* margin: 0; */
        }

        ._m-3 {
            margin-left: 200px;
        }

        .body-info p {
            padding: 0px;
            margin: 8px;
            font-size: 18px;
            line-height: 0px;
        }

        .body-container {
            width: 100%;
            margin: 0 auto;
        }

        .footer {
            margin-top: 50px;
            width: 100%;
            overflow: hidden; /* Clearfix for float */
            float:bottom;
        }

        .left,
        .middle,
        .right {
            width: 30%; /* Adjust the width as needed */
            padding: 10px;
            box-sizing: border-box; /* Include padding and border in width calculation */
            float: left;
            text-align: center;
            font-size: 18px;
        }
        .right-img{
            width: 100px;
            height: 50px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <img class="logo" src="https://assets.unlayer.com/projects/224472/1711417599014-omslogo-1024x1024%20(1).png"
            alt="">
        <div class="organization">

            <h2>চট্টগ্রাম সরকারী মুসলিম হাইস্কুল প্রাক্তন ছাত্রসমিতি <br>
                <small style="font-size: 12px">CHATTOGRAM SARKARI MUSLIM HIGH SCHOOL PRAKTAN CHATTRA SAMITY</small>
            </h2>
        </div>
    </div>
    <div class="section-1 ">

        <div class="section-1-title">

            <h3 >জীবন সদস্যের আবেদন</h3>
        </div>
    </div>


    <div class="profile-container">
        <img class="profile-image"
            src="{{$image}}" alt="">
        <div class="profile-info">

            <p>জীবন সদস্য ক্রমিক নং&nbsp;: {{$lm_no}}</p>
        </div>
    </div>

    <div class="body-container">
        <div class="body-info">
            <p class="">নামঃ (বাংলায়)&nbsp;&nbsp;&nbsp;:&nbsp;{{$ban_name}}</p>
            <p>&nbsp; &nbsp; &nbsp; &nbsp;(ইংরেজি)&nbsp;&nbsp;&nbsp;:&nbsp;{{$eng_name}}</p>
            <p>পিতা&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$father_name}}
            </p>
            <p>মাতা&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; {{$mother_name}}
            </p>
            <p>স্থায়ী ঠিকানা&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$permanent_address}}</p>
            <p>যোগাযোগের ঠিকানা&nbsp;&nbsp;&nbsp;:&nbsp;{{$mobile}}</p>
            <p>ই-মেইল&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$email}}</p>
            <p>রক্তের গ্রুপ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;{{$blood_group}}</p>
            <p>জন্ম তারিখঃ&nbsp;&nbsp;&nbsp;:&nbsp;{{$date_of_birth}}</p>
            <p>এস.এস.সি পাশের সন&nbsp;&nbsp;&nbsp;:&nbsp;{{$passing_year_id}}</p>
        </div>
    </div>

    <div class="section-1 ">
        <div class="section-1-title">
            <h2 style="margin: 0px; padding: 0px">অঙ্গীকারনামা</h2>
            <p style="text-align: justify; font-size: 18px">আমি সমিতির গঠনন্ত্র ও সকল নিয়মাবলী মানিয়া চলিব এবং সমিতির লক্ষ্য ও উদ্দেশ্য
                বাস্তবায়নে সার্বিক সহযোগিতা করিতে সচেষ্ট থাকিব। উল্লেখ্য, যোগাযোগ ঠিকানা কিংবা ফোন নম্বর পরিবর্তন হইলে
                সমিতিকে অবহিত করিব।</p>
        </div>
    </div>

    <div class="footer">
        <div class="left">
            {{$current_date}}
            <br>
            তারিখ
        </div>
        <div class="middle">
            Mohammed Saifuddin Munna
            <br>
            প্রস্তাবক
        </div>
        <div class="right">
            <img class="right-img" src="{{$signature}}" alt="">
            
            <br>
            স্বাক্ষর
        </div>
    </div>
    

</body>

</html>
