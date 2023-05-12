<?php
require 'config.php';
if(!isset($_SESSION['login_id'])){
    header('Location: login.php');
    exit;
}
$id = $_SESSION['login_id'];
$get_user = mysqli_query($db_connection, "SELECT * FROM `users` WHERE `google_id`='$id'");
if(mysqli_num_rows($get_user) > 0){
    $user = mysqli_fetch_assoc($get_user);
}
else{
    header('Location: logout.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $user['name']; ?> - LaravelTuts</title>
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7ff;
            padding: 10px;
            margin: 0;
        }
        ._container{
            max-width: 400px;
            background-color: #ffffff;
            padding: 20px;
            margin: 0 auto;
            border: 1px solid #cccccc;
            border-radius: 2px;
        }
        .heading{
            text-align: center;
            color: #4d4d4d;
            text-transform: uppercase;
        }
        ._img{
            overflow: hidden;
            width: 100px;
            height: 100px;
            margin: 0 auto;
            border-radius: 50%;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        ._img > img{
            width: 100px;
            min-height: 100px;
        }
        ._info{
            text-align: center;
        }
        ._info h1{
            margin:10px 0;
            text-transform: capitalize;
        }
        ._info p{
            color: #555555;
        }
        ._info a{
            display: inline-block;
            background-color: #E53E3E;
            color: #fff;
            text-decoration: none;
            padding:5px 10px;
            border-radius: 2px;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="_container">
        <h2 class="heading">My Account</h2>
    </div>
    <div class="_container">
        <div class="_img">
            <img src="<?php echo $user['profile_image']; ?>" alt="<?php echo $user['name']; ?>">
        </div>
        <div class="_info">
            <h1><?php echo $user['name']; ?></h1>
            <p><?php echo $user['email']; ?></p>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="container">
        <h1>Quiz</h1>
        <div id="container">
       
        <form action="answer.php" method="POST">
        <ol type="1" >
                <div id="question-container">
                    <h1>Beginner</h1>
                </div>
                <div id="question-container">
                    <li><h2 class="question" id="1" >Which country won the 2018 FIFA World Cup?</h2></li>
                    <input type="radio" name="answer-1" value="A" >Brazile<br>
                    <input type="radio" name="answer-1" value="B" >USA<br>
                    <input type="radio" name="answer-1" value="C" >France<br>
                    <input type="radio" name="answer-1" value="D" >India<br>
                </div>
            
                <div id="question-container">
                    <li><h2 class="question" id="2" >What is the smallest unit of matter?</h2></li>
                    <input type="radio" name="answer-2" value="A" >molecule<br>
                    <input type="radio" name="answer-2" value="B" >compound<br>
                    <input type="radio" name="answer-2" value="C" >element<br>
                    <input type="radio" name="answer-2" value="D" >atom<br>
                </div>
            
                <div id="question-container">
                    <li><h2 class="question" id="3" >Friction can be reduced by changing from</h2></li>
                    <input type="radio" name="answer-3" value="A" >sliding to rolling<br>
                    <input type="radio" name="answer-3" value="B" >rolling to sliding<br>
                    <input type="radio" name="answer-3" value="C" >potential energy to kinetic energy<br>
                    <input type="radio" name="answer-3" value="D" >dynamic to static<br>
                </div>
            
                <div id="question-container">
                    <li><h2 class="question" id="4" >Film and TV institute of India is located at</h2></li>
                    <input type="radio" name="answer-4" value="A" >Pune (Maharashtra)<br>
                    <input type="radio" name="answer-4" value="B" >Rajkot (Gujarat)<br>
                    <input type="radio" name="answer-4" value="C" >Pimpri (Maharashtra)<br>
                    <input type="radio" name="answer-4" value="D" >Perambur (Tamilnadu)<br>
                </div>

                <div id="question-container">
                    <h1>Intermediate</h1>
                </div>
            
                <div id="question-container">
                    <li><h2 class="question" id="5" >Which sport is played on a court with a net and a shuttlecock?</h2></li>
                    <input type="radio" name="answer-5" value="A" >Cricket<br>
                    <input type="radio" name="answer-5" value="B" >Badminton<br>
                    <input type="radio" name="answer-5" value="C" >Badminton<br>
                    <input type="radio" name="answer-5" value="D" >Football<br>
                </div>

                <div id="question-container">
                    <li><h2 class="question" id="6" >Who painted the Mona Lisa?</h2></li>
                    <input type="radio" name="answer-6" value="A" >Titian<br>
                    <input type="radio" name="answer-6" value="B" >Sandro Botticelli<br>
                    <input type="radio" name="answer-6" value="C" >Artemisia Gentileschi<br>
                    <input type="radio" name="answer-6" value="D" >Leonardo da Vinci<br>
                </div>

                <div id="question-container">
                    <li><h2 class="question" id="7" >Which boxer is known as 'The Greatest of All Time'?</h2></li>
                    <input type="radio" name="answer-7" value="A" >Roy Jones<br>
                    <input type="radio" name="answer-7" value="B" >Muhammad Ali<br>
                    <input type="radio" name="answer-7" value="C" >Rocky Marciano<br>
                    <input type="radio" name="answer-7" value="D" >Roberto Duran<br>
                </div>

                <div id="question-container">
                    <h1>Professional</h1>
                </div>
            
                <div id="question-container">
                    <li><h2 class="question" id="8" >What is the name of the first artificial satellite launched into space?</h2></li>
                    <input type="radio" name="answer-8" value="A" >Sputnik I<br>
                    <input type="radio" name="answer-8" value="B" >GSAT-3<br>
                    <input type="radio" name="answer-8" value="C" >Astrosat<br>
                    <input type="radio" name="answer-8" value="D" >SARAL<br>
                </div>

                <div id="question-container">
                    <li><h2 class="question" id="9" >What is the highest possible score in bowling?</h2></li>
                    <input type="radio" name="answer-9" value="A" >800<br>
                    <input type="radio" name="answer-9" value="B" >200<br>
                    <input type="radio" name="answer-9" value="C" >300<br>
                    <input type="radio" name="answer-9" value="D" >250<br>
                </div>

                <div id="question-container">
                    <li><h2 class="question" id="10" >What is the name of the famous American political scientist who wrote 'The Prince'?</h2></li>
                    <input type="radio" name="answer-10" value="A" >Bernie Sanders<br>
                    <input type="radio" name="answer-10" value="B" >Niccolò Machiavelli<br>
                    <input type="radio" name="answer-10" value="C" >Bill Clinton<br>
                    <input type="radio" name="answer-10" value="D" >Nancy Pelosi<br>
                </div>
                
                <input name="btn" value="Submit" type="submit">
            </ol>
        </form>
        
    </div>
  

    </div>
</body>
</html>