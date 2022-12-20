<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Workout</title>
        <link rel="icon" href="https://static.thenounproject.com/png/1365947-200.png">
        <link rel="stylesheet" href="../css/infoStyle.css">
        <link rel="stylesheet" href="../css/follower.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
    </head>
</head>
<body>
    <div class="container">
        <?php
        if ($_COOKIE['users'] == ''):
        ?>
        <?php 
            header ('Location: http://localhost/front/web/signIn.html');
        ?>
        <?php else: ?>
        <header>
            <div class="headerContainer _anim-items">
                <div class="backFirstHeader">
                  
                  <div class="firstHeader">
                    <div class="leftFirstHeaderInfo">
                      <a href="https://www.nike.com/jordan"><img style="width: 24px; height: 24px;" src="https://assets.stickpng.com/images/584292c4a6515b1e0ad75aca.png" alt="logo"></a>
                      <a href="https://www.converse.com/country-language-selector"><img src="https://www.logo.wine/a/logo/Converse_(shoe_company)/Converse_(shoe_company)-Icon-Logo.wine.svg" alt="logo"></a>
                    </div>  
                    <div class="rightFirstHeaderInfo">
                      <a href="https://about.nike.com/en/newsroom" class="fastInfo">News</a>
                      <hr class="fastHr">
                      <a href="https://www.nike.com/help/" class="fastInfo">Help</a>
                      <hr class="fastHr">
                      <a href="https://www.nike.com/help/a/product-review-tos" class="fastInfo">Feedback</a>
                    </div>
                  </div>
                </div>
                <div class="secondHeader">
                  <div class="leftSecondHeaderInfo">
                    <a href=""><img src="https://static.thenounproject.com/png/1365947-200.png" alt="logo"></a>
                  </div>
                    <div class="centerSecondHeaderInfo">
                        <a href="../web/userHome.php" class="mainFastInfo">Feed</a>
                        <a href="../web/follower.php" class="mainFastInfo">Followers</a>
                        <a href="../web/exersice.php" class="mainFastInfo">Exercises</a>
                        <a href="../web/profil.php" class="mainFastInfo">Profil</a>
                    </div>
                    <div class="rightSecondHeaderInfo">
                      <div class="search">
                        <img src="../image/search.png" alt="search">
                        <input type="text" placeholder="Search" name>
                      </div>
                        <div class="headerTextButton">
                            <a href="../phps/exist.php" id="h1">
                                <p>
                                Hello <?=$_COOKIE['users']?> click <br></p>
                                <p>to exit here
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="mainContainer">
            <div class="followersClass _anim-items">
                <div class="follower">
                    <div class="leftFollower">
                        <img src="https://pump-app.s3.eu-west-2.amazonaws.com/profile-images/gicappellesso-bb9849bd-57ef-42be-9e19-e096e2f9fdb5.jpg" alt="">
                    </div>
                    <div class="rightFollower">
                        <h3>
                            gicappellesso
                        </h3>            
                    </div>
                    <button class="buttonFollower" onclick="document.getElementById('myImage4').src='../image/add-friend.png'">
                        <img id="myImage4"  src="../image/add.png" class="buttonFollowerImg">
                    </button>
                </div>
                <div class="follower">
                    <div class="leftFollower">
                        <img src="https://pump-app.s3.eu-west-2.amazonaws.com/profile-images/thesrishtisoni-97a73953-794a-41cc-a8aa-fa76635774f3.jpg" alt="">
                    </div>
                    <div class="rightFollower">
                        <h3>
                            thesrishtisoni
                        </h3>            
                    </div>
                    <button class="buttonFollower" onclick="document.getElementById('myImage').src='../image/add-friend.png'">
                        <img id="myImage"  src="../image/add.png" class="buttonFollowerImg">
                    </button>
                </div>
                <div class="follower">
                    <div class="leftFollower">
                        <img src="https://pump-app.s3.eu-west-2.amazonaws.com/profile-images/profile-thisismychurch-615624d0-90c6-412b-a677-a7668aad31f6.jpg" alt="">
                    </div>
                    <div class="rightFollower">
                        <h3>
                            chasinfit
                        </h3>            
                    </div>
                    <button class="buttonFollower" onclick="document.getElementById('myImage1').src='../image/add-friend.png'">
                        <img id="myImage1"  src="../image/add.png" class="buttonFollowerImg">
                    </button>
                </div>
                <div class="follower">
                    <div class="leftFollower">
                        <img src="https://pump-app.s3.eu-west-2.amazonaws.com/profile-images/profile-themref-d30754ce-6f92-4f4d-8221-2a318eed4e09.jpg" alt="">
                    </div>
                    <div class="rightFollower">
                        <h3>
                            thisismychurch
                        </h3>            
                    </div>
                    <button class="buttonFollower" onclick="document.getElementById('myImage2').src='../image/add-friend.png'">
                        <img id="myImage2"  src="../image/add.png" class="buttonFollowerImg">
                    </button>
                </div>
                <div class="follower">
                    <div class="leftFollower">
                        <img src="https://pump-app.s3.eu-west-2.amazonaws.com/profile-images/chasinfit-1901f39f-26f2-4fbe-86f0-9c5e9f780bbe.jpg" alt="">
                    </div>
                    <div class="rightFollower">
                        <h3>
                            thisismychurch
                        </h3>            
                    </div>
                    <button class="buttonFollower" onclick="document.getElementById('myImage3').src='../image/add-friend.png'">
                        <img id="myImage3"  src="../image/add.png" class="buttonFollowerImg">
                    </button>
                </div>
            </div>
            </div>
        </main>
        <footer>
            <div class="footerImages">
              <a href="https://www.youtube.com/channel/UCxbfnyVveP-bFP4LiSv5OcA"><img src="https://cdn-icons-png.flaticon.com/512/152/152810.png" alt="logo" class="footerImg"></a>
              <a href="https://www.reddit.com/r/Kazakhstan/"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384019.png" alt="logo" class="footerImg"></a>
              <a href="https://t.me/.pazzoubriacone"><img src="https://www.freepnglogos.com/uploads/telegram-png/file-telegram-font-awesome-svg-wikimedia-commons-7.png" alt="logo" class="footerImg"></a>
              <div class="massege">
                <h3>If you can do one thing - bring it to perfection</h3>
              </div>
            </div>
        </footer>
        <?php endif;?>
        
    </div>
    <script src="../script/script.js"></script>
</body>
</html>