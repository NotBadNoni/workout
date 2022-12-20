<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Workout</title>
        <link rel="icon" href="https://static.thenounproject.com/png/1365947-200.png">
        <link rel="stylesheet" href="../css/infoStyle.css">
        <link rel="stylesheet" href="../css/profil.css">
        <link rel="stylesheet" href="../css/userHomeStyle.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    
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
        <div class="profilMainInfo">
            <div class="profilImg">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="user">
            </div>
            <div class="profilIn">
                <h1><?=$_COOKIE['users']?></h1>
                <div class="profilAchievement">
                    <div class="profilAchievementInfo"><h3>Workouts</h3> <p>0</p></div>
                    <div class="profilAchievementInfo"><h3>Followers</h3> <p>0</p></div>
                    <div class="profilAchievementInfo"><h3>Following</h3> <p>0</p></div>
                </div>
            </div>
        </div>
        <div class="workoutInfo">
            <div class="workoutHeaderText">
                <h1>Workouts</h1>
            </div>
            <div class="workoutInfoPage">
                <div class="shtoto">
                    <div class="workoutPage">
                        <img src="https://static.thenounproject.com/png/1365947-200.png" alt="icon">
                    </div>
                    <div class="workoutText">
                        <p>No workouts yet.</p>
                        <p>Use the mobile app to log a workout</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="statisticsInfo">
            <div class="statisticsHeaderText">
                <h1>Followers</h1>
            </div>
            <div class="statisticsInfoPage">
                <div class="statisticsHtoto">
                    <div class="statisticsPage">
                        <img src="../image/followers.png" alt="icon">
                    </div>
                    <div class="statisticsText">
                        <p>No followers yet.</p>
                    </div>
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
      <script src="../script/exersice.js"></script>
</body>
</html>