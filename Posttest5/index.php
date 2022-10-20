<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Landing Page Webstite Smart Watch</title>
        <link rel ="stylesheet"   href = "style.css">
    </head>

    <body>
        <div class ="style">
            <div class="navbar">
                    <div class="logo">
                        <a href = "#"></a>
                        <p id="web">
                            Wear Time
                            <script>
                                document.getElementById("web").onclick=tampil;

                                function tampil(){
                                    document.getElementById("web").innerHTML ="Smart Watch";
                                }
                            </script>

                        </p> 
                    </div>
                    <div class = "main">
                        <ul>
                            <li class = "active"><a href ="Home.html">Home</a></li>
                            <li><a href ="Admin.php">Login Admin</a></li>
                            <li><a href ="Customer.php">Login Customer</a></li>
                            <li><a href ="tampil.php">Tampilan Pendataan</a></li>
                        </ul>

                    </div>
                    <div id="theme">
                        <div onclick="setDarkMode(true)" id="darkButton" class="icon"><img src="icon.jpg"></div>
                        <div onclick="setDarkMode(false)" id ="lightButton" class="icon is-hidden"><img src="icon.jpg" ></div>
                    </div>
                    <script src="main.js"></script>
            </div>

        </div>

        <footer>
           <div class = "outer-footer">
            Copyright &copy; 2022 Desgin by SherinaLaraswati
        </footer>


    </body>
</html>