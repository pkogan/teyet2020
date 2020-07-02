<!DOCTYPE html>
<html lang="es">

    <head >
        <meta charset="utf-8">
        <title>cuenta teyet2020</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Tecnología en Educación, Educación en Tecnología, TICs, Enseñanza, Demos Educativas, Experiencias Docentes" name="keywords">
        <meta content="Tecnología en Educación y Educación en Tecnología" name="description">

        <!-- Favicons -->
        <link href="../img/logoteyetcirculoblanco.png" rel="icon">

        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: Arial;
                font-size: 17px;
                background-repeat: no-repeat;
                background-color: #000;
            }

            #myVideo {
                position: fixed;
             
                top: 0;
                 
                height: 100%;
                width: 100%;
            }

            .content {
                position: fixed;
                bottom: 0;
                background: rgba(0, 0, 0, 0.3);
                color: #f1f1f1;
                width: 100%;
                padding: 20px;
            }

            #myBtn {
                width: 200px;
                font-size: 18px;
                padding: 10px;
                border: none;
                background: #000;
                color: #fff;
                cursor: pointer;
            }

            #myBtn:hover {
                background: #ddd;
                color: black;
            }

            /*
                                         $$\           $$\                                   
                                         $$ |          $$ |                                  
 $$$$$$$\  $$$$$$\  $$\   $$\ $$$$$$$\ $$$$$$\    $$$$$$$ | $$$$$$\  $$\  $$\  $$\ $$$$$$$\  
$$  _____|$$  __$$\ $$ |  $$ |$$  __$$\\_$$  _|  $$  __$$ |$$  __$$\ $$ | $$ | $$ |$$  __$$\ 
$$ /      $$ /  $$ |$$ |  $$ |$$ |  $$ | $$ |    $$ /  $$ |$$ /  $$ |$$ | $$ | $$ |$$ |  $$ |
$$ |      $$ |  $$ |$$ |  $$ |$$ |  $$ | $$ |$$\ $$ |  $$ |$$ |  $$ |$$ | $$ | $$ |$$ |  $$ |
\$$$$$$$\ \$$$$$$  |\$$$$$$  |$$ |  $$ | \$$$$  |\$$$$$$$ |\$$$$$$  |\$$$$$\$$$$  |$$ |  $$ |
 \_______| \______/  \______/ \__|  \__|  \____/  \_______| \______/  \_____\____/ \__|  \__|
            */                                                                                            
            .countdown-wrap {
                text-align: center;
                margin: 10px 0 20px;
            }
            .count-headline {
                font-weight: 600;
            }
            .countdown {
                list-style: none;
            }
            .countdown li {
                display: inline-block;
                color: #fafafa;
            }
            .countdown li > p {
                font-size: 0.725rem;
                font-weight: 600;
            }
            .flap {
                margin: 0 25px;
                font-size: 4.25rem;
                font-weight: 600;
                line-height: 1;
                min-width: 70px;
                min-height: 70px;
            }
            .msj{
                color: #fff;
                font-weight: 600;
                font-size: 30px;
            }

        </style>

    </head>

    <body >
        <audio autoplay loop id="myAudio">
            <source src="spot.mp3">
        </audio>
        <video autoplay muted loop id="myVideo">
            <source src="contadorvideoBC16001200.mp4" type="video/mp4">
        </video>
        

        <div class="content">

            <!--                        <button id="myBtn" onclick="myFunction()">P</button>-->

            <div class="container" data-lead-id="section01-container">
                <div class="countdown-wrap" data-lead-id="countdown-wrap">
                    <h1 class="msj" onclick="myFunction()"><?=$_REQUEST['msj']?></h1>
                    <p>Comenzamos en:</p>
                    <ul class="countdown" data-lead-id="countdown">
                        <li>
                            <div class="flap">
                                <span id="days" class="days">03</span>
                            </div>
                            <p class="timeRefDays" data-lead-id="days">DIAS</p>
                        </li>
                        <li>
                            <div class="flap">
                                <span id="hours" class="hours">15</span>
                            </div>
                            <p class="timeRefHours" data-lead-id="hours">HORAS</p>
                        </li>
                        <li>
                            <div class="flap">
                                <span id="minutes" class="minutes">53</span>
                            </div>
                            <p class="timeRefMinutes" data-lead-id="minutes">MINUTOS</p>
                        </li>
                        <li>
                            <div class="flap">
                                <span id="seconds" class="seconds">25</span>
                            </div>
                            <p class="timeRefSeconds" data-lead-id="seconds">SEGUNDOS</p>
                        </li>
                    </ul>
<!--                    <p><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a></p>-->
                </div>

            </div>
        </div>


        <!-- JavaScript Libraries -->
        <script src="../lib/jquery/jquery.min.js"></script>

        <script>
            // Get the video
            var webinar = new Date(<?=$_REQUEST['fin']?>);
            var audio = document.getElementById("myAudio");
            //var video = document.getElementById("myVideo");
            
            // Get the button
            //var btn = document.getElementById("myBtn");
            
            // Pause and play the video, and change the button text
            function myFunction() {
                if (audio.paused) {
                    audio.play();
                //    video.play();
                } else {
                    audio.pause();
                //    video.pause();
                    
                }
            }

        </script>
        <script src="../js/functions.js"></script>

    </body>

</html>
