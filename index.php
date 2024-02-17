<!-- 
Credit : LearnDesign
Youtube Channel : https://youtube.com/learndesigntutorial
Email : help.learndesign@gmail.com
For Support : https://www.patreon.com/helplearndesign
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayChangu Workwave</title>
    <style>
        *{
            margin: 0;
            outline: none;
            box-sizing: border-box;
        }        
  body {
    font-family: 'Open Sans', sans-serif;
    background-color: #1E1F31;
    overflow-x: hidden;
    color: #fff; /* Set text color to white or any color that contrasts with your background */
    font-weight: normal; /* Remove bold style */
}

h1, h2, h3, h4, h5, h6 {
    font-weight: bold; /* Apply bold style to headings */
}

p {
    font-weight: normal; /* Remove bold style for paragraphs */
}

       
        .wrapper{
            position: relative;
            height: 100vh;
            overflow: hidden;
        }
        header{
            padding: 50px 100px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        header ul li{
            list-style: none;
            display: inline-block;
            margin: 0 15px;
        }
        header ul li a{
            color: #aba9b4;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 1px;
            transition: all ease 0.5s;
        }
        header ul li a:hover{
            color: #f09053;
        }
        header ul li a.btn{
            display: inline-block;
            width: 180px;
            height: 60px;
            line-height: 60px;
            background-color: #f09053;
            color: #fff;
            text-align: center;
            font-size: 18px;
            border-radius: 50px;
            transition: all ease 0.5s;
        }
        header ul li a.btn:hover{
            background-color: #615c59;
        }

        .content{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 50px 100px 0;
        }
        .text{
            width: 50%;
            padding-right: 150px;
        }
        .text p{
            font-size: 28px;
            line-height: 46px;
            color: #fff;
        }
        .text p span{
            color: #f09053;
        }
        .text a{
            position: relative;
            display: inline-block;
            font-size: 18px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
            padding: 18px 30px;
            letter-spacing: 2px;
            font-weight: 500;
            margin-top: 60px;
        }
        .text a:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 60px;
            height: 60px;
            border-radius: 50px;
            background-color: #f09053;
            z-index: -1;
            transition: all ease 0.5s;
        }
        .text a:hover:before{
            width: 100%;
        }

        .img{
            position: relative;
            width: 500px;
            height: 500px;
            background: radial-gradient(520px, #f08f538c, transparent 50%);
            margin-top: -50px;
        }
        .email-icon{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .social-icons{
            height: 100%;
            animation: rotation 60s linear infinite;
        }
        @keyframes rotation {
            100%{
                transform: rotate(360deg);
            }
        }
        .social-icons img{
            position: absolute;
        }
        .social-icons img:nth-child(1){
            top: 0;
            left: 42%;
        }
        .social-icons img:nth-child(2){
            top: 25%;
            right: 0;
        }
        .social-icons img:nth-child(3){
            top: 70%;
            left: 70%;
        }
        .social-icons img:nth-child(4){
            top: 25%;
            left: 0;
        }
        .social-icons img:nth-child(5){
            top: 70%;
            left: 10%;
        }


        .wave{
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            line-height: 0;
        }
        .wave:before{
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url(images/wave.svg) repeat-x;
            background-size: cover;
            background-position: -1000px 0;
            opacity: .2;
            animation: waveOne 60s linear infinite; 
        }
        @keyframes waveOne {
            50%{
                background-position: 0 0;
            }
        }
        .wave:after{
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url(images/wave.svg) repeat-x;
            background-size: cover;
            background-position: 2732px 0;
            opacity: .3;
            animation: waveOne 120s linear infinite; 
        }


        /*SUBMENU*/
        ul ul{
            max-width: 250px;
            position: absolute;
            padding: 10px 0;
            opacity: 0;
            z-index: -9999;
            transition: all ease 0.5s;
        }
        ul li:hover ul{
            opacity: 1;
            z-index: 9;
            padding: 30px 0;
        }
        ul ul li{
            margin: 0;
            width: 100%;
        }
        ul ul li a{
            width: 100%;
            display: inline-block;
            padding: 20px;
            background-color: #383a58;
            color: #fff;
        }
        ul ul li:first-child a{
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        ul ul li:last-child a{
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        ul ul li a:hover{
            background-color: #f09053;
            color: #fff;
        }
    </style>
</head>
<body>


<div class="wrapper">
    <header>
        <div class="logo">
            <img src="images/main.png" width="250" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="#">Integration</a>
                    <ul>
                        <li><a href="https://paychangu.readme.io/reference/api">Java</a></li>
                        <li><a href="https://paychangu.readme.io/reference/api">PHP</a></li>
                        <li><a href="https://paychangu.readme.io/reference/api">Ruby</a></li>
                        <li><a href="https://paychangu.readme.io/reference/api">Python</a></li>
                    </ul>
                </li>
                <li><a href="https://paychangu.readme.io/reference/api">API</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="mailto:hie@paychangu.com">Support</a></li>
                
            </ul>
        </nav>
    </header>

    <div class="content">
        <div class="text">
            <p>Paychangu Workwave.</p>
            <a href="web/" class="btn">Get Started</a>
        </div>
        <div class="img">
            <div class="social-icons">
                <img src="images/e.png" width="100" alt="">
                <img src="images/m.png" width="100" alt="">
                <img src="images/l.png" width="100" alt="">
                <img src="images/salary.png" width="100" alt="">
                <img src="images/p.png" width="100" alt="">
            </div>
            <img class="email-icon" src="images/email-icon.png" alt="">
        </div>
    </div>

<div class="wave">
    <img src="images/wave.svg" alt="">
</div>

</div>


</body>
</html>