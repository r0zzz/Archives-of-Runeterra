<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/cards.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="shortcut icon" href="./assets/logo.white.png" type="image/x-icon">
    </head>

    <body>
        <!--HEADER-->
        <header>
            <div class="titlectn">
                <div class="logo"><img src="assets/logo.white.png" alt=""></div>
                <div class="title"><h1>Archives of Runeterra</h1></div>
            </div>
        </header>

        <div class="ctn">
            <a class="pn" href="https://www.leagueoflegends.com/en-us/news/tags/patch-notes/">
                <div class="pnctn">
                    <div class="patchnotes">
                        <img src="assets/patchnote.png" alt="">
                    </div>
                    <div class="pntext">
                        <h3>Latest Patch Notes</h3>
                    </div>
                </div>
            </a>
            
            
            <!--CATEGORY CARDS-->
            <div class="cardctn">
                <a href="champions/0catalogue.html">
                    <div class="card">
                        <div class="cardimg"><img src="assets/champions.jpg" alt=""></div>
                        <div class="cardframe"><img src="assets/frame.png" alt=""></div>
                        <h2><?php echo "champions"?></h2>
                    </div>
                </a>
                <a href="gameplay/gameplay.html">
                    <div class="card">
                        <div class="cardimg"><img src="assets/gameplay.png" alt=""></div>
                        <div class="cardframe"><img src="assets/frame.png" alt=""></div>
                        <h2><?php echo "gameplay"?></h2>
                    </div>
                </a>
                <a href="items/0catalougue.html">
                    <div class="card">
                        <div class="cardimg"><img src="assets/items.png" alt=""></div>
                        <div class="cardframe"><img src="assets/frame.png" alt=""></div>
                        <h2><?php echo "items"?></h2>
                    </div>
                </a>
                <a href="runes/runes.html">
                    <div class="card">
                        <div class="cardimg"><img src="assets/runes.png" alt=""></div>
                        <div class="cardframe"><img src="assets/frame.png" alt=""></div>
                        <h2><?php echo "runes"?></h2>
                    </div>
                </a>
            </div>
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
                <div><a href="about.php">about</a></div>
                <div><a href="contact.php">contact us</a></div>
            </div>
        </footer>
    </body>
</html>