<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="shortcut icon" href="./assets/logo.white.png" type="image/x-icon">

        <title>Contact Us</title>
    </head>

    <body>
        <!--HEADER-->
        <header>
            <div class="btnctn">

                <div class="logoctn">
                    <a href="./index.html">
                        <img src="./assets/logo.white.png" alt="">
                    </a>
                </div>

                <div class="navbtns">
                    <a href="./champions/0catalogue.html">
                        <div class="btn">
                            <div class="btnname"><p>Champions</p></div>
                            <hr>
                        </div>
                    </a>
                    <a href="./gameplay/gameplay.html">
                        <div class="btn">
                            <div class="btnname"><p>Gameplay</p></div>
                            <hr>
                        </div>
                    </a>
                    <a href="./items/0catalougue.html">
                        <div class="btn">
                            <div class="btnname"><p>Items</p></div>
                            <hr>
                        </div>
                    </a>
                    <a href="./runes/runes.html">
                        <div class="btn">
                            <div class="btnname"><p>Runes</p></div>
                            <hr>
                        </div>
                    </a>
                </div>
            
                <div class="mobilemenu">
                    <button id="menu">&#9776;</button>
                </div>
            </div>
        </header>
        <!--part of header, for mobile ui-->
        <div class="navmenu" id="navmenu">
            <a href="./champions/0catalogue.html">
                <div class="btn">
                    <div class="btnname"><p>Champions</p></div>
                </div>
            </a>
            <a href="./gameplay/gameplay.html">
                <div class="btn">
                    <div class="btnname"><p>Gameplay</p></div>
                </div>
            </a>
            <a href="./items/0catalougue.html">
                <div class="btn">
                    <div class="btnname"><p>Items</p></div>
                </div>
            </a>
            <a href="./runes/runes.html">
                <div class="btn">
                    <div class="btnname"><p>Runes</p></div>
                </div>
            </a>
        </div>

        <h1>contact us</h1>
        <div class="formctn">
            <form id="contact" action="send.php" method="post">
                <div class="userinfo">
                    <label for="email">email:</label>
                    <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
                </div>
                
                <label id="messagelabel" for="message">message:</label>
                <textarea type="text" name="message" id="message" placeholder="Message..." required></textarea>

                <button name="send" type="submit">send message</button>
                <p id="sent"></p>
            </form>
        </div>

        <!--FOOTER-->
        <footer>
            <div class="logos">
                <div><a href="https://leagueoflegends.com/" target="_blank"><img src="assets/icon.png" alt=""></a></div>
                <div><img src="assets/teamlogo.png" alt=""></div>
            </div>
            <div class="rights">
                <h3>archives of runeterra</h3>
                <p>all rights reserved</p>
            </div>
            <div class="links">
                <div><a href="about.html">about</a></div>
                <div><a href="contact.php">contact us</a></div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="./js/header.js"></script>
    </body>
</html>
