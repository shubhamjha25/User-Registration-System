<?php include("./server/auth.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HomePage</title>
    <link rel="stylesheet" href="style.css" />

    <style>
        body{
            background: black;
        }
        h1{
            font-size: 3rem;
            color: #212624;
            text-align: center;
        }

        h2{
            font: 1.5rem;
        }

        p{
            margin-top: 0;
        }
        img{
            max-width: 100%;
        }

        .container{
            width: 90%;
            max-width: 1152px;
            margin: 0 auto;
            padding: 0px 15px;
            background: cyan;
        }

        .column{
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            margin: 1em 0;
        }

        .col-1{
            width: 24%;
        }
        .col-2{
            width: 35%;
        }
        
        .col-bg{
            background-color:  #212624;
            padding: 1em;
        }

        .col-bg p{
            color: white;
            font-family: monospace;
            letter-spacing: 2px;
            font-size: 16px;
        } 

        @media (max-width: 600px){
            .column{
                flex-direction: column;
            }
            .col-1,.col-2,.col-3{
                width: 100%;
            }
        }
        .form{
            border-radius: 15px;
        }
        .form p{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You Are In The Right Place !</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
    <div class="container">
        <h1>Welcoming <?php echo $_SESSION['username']; ?>!</h1>
        <div class="column">
                <div class="col col-1">
                    <h2>Hello, <?php echo $_SESSION['username']; ?>!</h2>
                    <p>Thanks for visiting the website. This is a simple 'User-Registration-System' using PHP and MySQL. Hope You Liked It !</p>
                </div>
                <div class="col col-2">
                    <h2>Our Services</h2>
                    <h4>1. Web Development</h4>
                    <h4>2. Competitive Programming</h4>
                    <h4>3. Project Management</h4>
                </div>
                <div class="col col-1 col-bg">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, assumenda! Eligendi dicta, repellendus ratione qui voluptatem consectetur nobis consequuntur animi quaerat incidunt alias pariatur, aspernatur beatae quas </p>
                </div>
        </div>
    </div>
</body>
</html>
