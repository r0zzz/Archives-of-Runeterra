<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/about.css">
        <link rel="shortcut icon" href="./assets/logo.white.png" type="image/x-icon">
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

        <div class="ctn">
            <div class="disclaimer">
                <h2><?php echo "diclaimer"?></h2>
                <hr>
                <p>Archives of Runeterra was created under Riot Games’ “Legal Jibber Jabber” policy using assets owned by Riot Games. Riot Games does not endorse or sponsor this project. This website is a fan project, and not a Riot Games’ project.


                    <br><br>Archives of Runeterra is not endorsed by Riot Games and does not reflect the views or opinions of Riot Games or anyone officially involved in producing or managing Riot Games properties. Riot Games and all associated properties are trademarks or registered trademarks of Riot Games, Inc</p>
            </div>
            <div class="about">
                <h2>About this website</h2>
                <hr>
                <p>Archives of Runeterra is a website about the game “League of Legends”, a game developed and published by Riot Games. League of Legends is a Multiplayer Online Battle Arena, where players battle each other using in-game characters called “champions”. It is a website that holds information about the game's champions, gameplay, items, runes, and other necessary things to play the game.</p>
                <p>This website is developed and intended for educational purposes only.</p>
            </div>

            <div class="references">
                <h2>references</h2>
                <hr>
                <div class="refcat">
                    <h3>Images and Other simmilar assets</h3>
                    <a href="https://developer.riotgames.com/docs/lol#data-dragon" target="_blank">Riot Developer Portal</a>
                    <a href="https://github.com/InFinity54/LoL_DDragon">GitHub</a>
                </div>
                <div class="refcat">
                    <h3>Skill Previews</h3>
                    <a href="https://www.leagueoflegends.com/en-ph/champions/" target="_blank">League of Legends Official Website</a>
                </div>
                <div class="refcat">
                    <h3>Champion, Item, & Gameplay Information</h3>
                    <a href="https://leagueoflegends.fandom.com/wiki/League_of_Legends_Wiki" target="_blank">League of Legends Wikipedia</a>
                </div>
                <div class="refcat">
                    <h3>Rune Information</h3>
                    <a href="https://mobafire.com" target="_blank">Mobafire</a>
                </div>
            </div>
            
            
        </div>
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


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="./js/header.js"></script>
    </body>
</html>
    

