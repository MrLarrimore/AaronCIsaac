<?php
//Below is the code that inputs my header code into my page
require_once(__DIR__ . "/controller/create-db.php");
?>
<html>
    
   
    <head>
        <title>Comic Media</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/CM.css">
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        
    </head>
    <body background="http://www.lionheart-designs.com/inventory/jigsaw%20puzzles/Entertainment/Superheroes.JPG">
        
 
        
          
                
              
                      <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
        <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
                 <link href="controller/create-db.php">
          <link href="controller/create-post.php">
    <link href="controller/create-user.php">
    <link href="controller/login-user.php">
    <link href="controller/login-verify.php">
    <link href="controller/logout-user.php">
    <link href="controller/read-posts.php">
    <link href="model/Database.php">
    <link href="model/config.php">
    <link href="view/footer.php">
    <link href="view/form.php">
    <link href="view/header.php">
    <link href="view/login-form.php">
    <link href="view/navigation.php">
    
      </button>
      <a class="navbar-brand" href="">Comic-Media</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Comics <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="DC.php">DC Comics</a></li>
              <li><a href="Marvel.php">Marvel Comics</a></li>
            
            
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">
      <ul class="nav navbar-nav">Search</button>
      </form>
      </form>
                        <form class="navbar-form navbar-right" method='post' action='<?php echo $path . "controller/login-user.php"?>'>
                        <div class="form-group">
                            <div>
                                <label for="username"></label>
                                <!--login form where you login-->
                                <input type="text" placeholder="Username" class="form-control" name="username" />
                            </div>
                        </div>
                          
                        <div class="form-group">
                            <div>
                                <label for="password"> </label>
                                <!--where you input your password-->
                                <input type="password" placeholder="Password" class="form-control" name="password" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                       
                        
                        
                        <a type="submit" class="btn btn-info" href="register.php">Register</a>
                        <a type="submit" class="btn btn-info" href="controller/logout-user.php">logout</a>
                        </form>
                </div>
            </div>
        </nav>
                    </nav>
                    <h1 class="title1">Upcoming</h1>
        
                 <link href="controller/create-db.php">
          <link href="controller/create-post.php">
    <link href="controller/create-user.php">
    <link href="controller/login-user.php">
    <link href="controller/login-verify.php">
    <link href="controller/logout-user.php">
    <link href="controller/read-posts.php">
    <link href="model/Database.php">
    <link href="model/config.php">
    <link href="view/footer.php">
    <link href="view/form.php">
    <link href="view/header.php">
    <link href="view/login-form.php">
    <link href="view/navigation.php">
    
    

    <body background="http://lindareps.com/SEO-Images/Illustrators/Peter-McDonnell-Lichtenstein-classic-comics-illustrations/images/PM-Target-City-Background.jpg">
    
       
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"
       <!---carousel --->
               <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>
           
             
          
<!---pictures--->
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img  class="clean" src="captain-america-3.jpg">
    
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
        <img class="clean" src="bvs.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
      <div class="item">
      <img class="clean" src="The-Flash.jpg">
      <div class="carousel-caption">
        
      </div>
    </div>
       <div class="item">
      <img  class="clean" src="Daredevil-Character-Poster.jpg">
           <div class="carousel-caption">
          
      </div>
    </div>
       <div class="item">
      <img class="clean" src="arrow1.png">
      <div class="carousel-caption">
        
      </div>
    </div>
    
  </div>

  <!-- carousel Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
           </div>
        
 <!--Accordion-
        
               
     <!--thumbnail-->
     <!--html-->
    <div class="bs-example" data-example-id="thumbnails-with-custom-content">
    
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img class="fart" src="http://g.foolcdn.com/editorial/images/60458/flashpoint-vol-2-1-595808_large.png">
          <div class="caption">
            <h3>Flashpiont</h3>
            <p>  </p>
            <p><a href="flashpoint.html" class="btn btn-primary" role="button">video</a> <a href=http://www.ebay.com/itm/like/300939722134?lpid=82&chn=ps"" class="btn btn-default" role="button">Get It</a></p>
          </div>
          <table cellpadding="0" cellspacing="0" width="133" bgcolor=#><tr><td><iframe src="http://www.ratingcode.com/show.php?id=143198467288&st=3&bg=" border="0" width="115" height="37" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" bgcolor=></iframe></td><td width="18" align="center" valign="top" style="padding-top:5px"><a href="" target="_blank"><img src="http://www.ratingcode.com/images/info.png" border="0" alt="Free Rating Code" title="Free Rating Code"></a></td></tr></table>
        </div>
      </div>
        <!--css-->
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img class="fart" src="http://www.zonanegativa.com/imagenes/2014/09/5.1.jpg">
          <div class="caption">
            <h3>Original Sin</h3>
            <p></p>
            <p><a href="originalsin.html" class="btn btn-primary" role="button">video</a> <a href="https://www.google.com/shopping/product/15909774973518335351?q=original+sin+marvel&espv=2&biw=1366&bih=667&bav=on.2,or.r_cp.&bvm=bv.93990622,d.cWc&ion=1&tch=1&ech=1&psi=VaNmVca9OrHIsAS57IGQCg.1432789846409.5&prds=paur:ClkAsKraXwz-S-YDkWT3agUxBr0JwSF526x93WKMhOgk2Fb6ae2TTc7LCQsS16VENBaECZT6KbNFRi5H6l0nD8vhV0s_BFn4_qxhXosZkxBMupIaXn8pnWGRmBIZAFPVH701CUYRJ_3u4uJu1-ABjDb1mMncZg&ved=0CAQQpis&ei=YaNmVem_MpLHsQSLeA" class="btn btn-default" role="button">Get It</a></p>
          </div>
          <table cellpadding="0" cellspacing="0" width="133" bgcolor=#><tr><td><iframe src="http://www.ratingcode.com/show.php?id=143198467288&st=3&bg=" border="0" width="115" height="37" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" bgcolor=></iframe></td><td width="18" align="center" valign="top" style="padding-top:5px"><a href="" target="_blank"><img src="http://www.ratingcode.com/images/info.png" border="0" alt="Free Rating Code" title="Free Rating Code"></a></td></tr></table>
        </div>
      </div>
        <!--bootstrap-->
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img class="fart" src="http://comicrelated.com/graphics/battle1_1.jpg">
          <div class="caption">
            <h3>Battle for the Cowl</h3>
            <p></p>
            <p><a href="BFTC.html" class="btn btn-primary" role="button">video</a> <a href="https://www.google.com/shopping/product/2810474155631542528?q=battle+for+the+cowl&espv=2&biw=1366&bih=667&dpr=1&prds=paur:ClkAsKraX4Ui-FtnlYlh-7yVIGOwYhXeEfeB3Z1FApSX3tWfWqJlobFQQvivrsfez1dVDutcke7CqCvS0U_ZjvVrFISaSnUTsxGHswEUzVa3dzfbykBsKsrESxIZAFPVH70PWT0N3jlFAfN29PGBB-M25WOeXA&ved=0CAUQpis&ei=w6RmVYzPLOjLsASn2IDgBg" class="btn btn-default" role="button">Get It</a></p>
          </div>
          <table cellpadding="0" cellspacing="0" width="133" bgcolor=#><tr><td><iframe src="http://www.ratingcode.com/show.php?id=143198467288&st=3&bg=" border="0" width="115" height="37" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" bgcolor=></iframe></td><td width="18" align="center" valign="top" style="padding-top:5px"><a href="" target="_blank"><img src="http://www.ratingcode.com/images/info.png" border="0" alt="Free Rating Code" title="Free Rating Code"></a></td></tr></table>
        </div>
      </div>
        
        <div class="col-sm-6 col-md-4" id="test">
            <div class="thumbnail">
                <img class="fart" src="http://ecx.images-amazon.com/images/I/81GMUwoP7QL.jpg">
                <div class="caption">
                    <h3>Deadpool Kills the Marvel Universe</h3>
                    <p> </p>
                    
                    <p><a href="DKMU.html" class="btn btn-primary" role="button">video</a> <a href="https://www.google.com/shopping/product/8610439003084076258?q=deadpool+kills+the+marvel+universe&espv=2&biw=1366&bih=667&dpr=1&prds=paur:ClkAsKraX-kBiKVFfs429MW7qEm72GVwHzr4CLLN5asLRp6elV-YBD1_xcvYodLWsGBXrG0nHiPbEXB7lo6Vm6m8k8JTGIQ8lEUJjGolq6SP3j8nRSqeJ2HFHxIZAFPVH72egSpFTkA-3Dj0ndoTGH-1fPy8DQ&ved=0CAUQpis&ei=BqZmVaLIDYr7sASFxYGwBw" class="btn btn-default" role="button">Get It</a></p>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
                </div>
                <table cellpadding="0" cellspacing="0" width="133" bgcolor=#><tr><td><iframe src="http://www.ratingcode.com/show.php?id=143198467288&st=3&bg=" border="0" width="115" height="37" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" bgcolor=></iframe></td><td width="18" align="center" valign="top" style="padding-top:5px"><a href="" target="_blank"><img src="http://www.ratingcode.com/images/info.png" border="0" alt="Free Rating Code" title="Free Rating Code"></a></td></tr></table>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img class="fart" src="https://d1466nnw0ex81e.cloudfront.net/n_iv/600/1853483.jpg">
                <div class="caption">
                    <h3>Red Daughter of Krypton</h3>
                    <p></p>
                    <p><a href="RDOK.html" class="btn btn-primary" role="button">video</a> <a href="https://www.google.com/shopping/product/12273441248913510499?sclient=psy-ab&biw=1366&bih=667&q=red+daughter+of+krypton+complete&oq=red+daughter+of+krypton+complete&pbx=1&bav=on.2,or.r_cp.&bvm=bv.93990622,d.cWc&tch=1&ech=1&psi=oqdmVfukEvPlsAS0mYGYBw.1432790974271.3&prds=paur:ClkAsKraX3jNjGQGc-Y8yS3eSMp_o2pJsVKYJ2R1RFVsGcHImAyrPzgfd60FIAWau6eDsfB_SSCKByJZOFaUf8bOAlWeaH-II0l2L_Vrln-Bl0x8MNqYrMQJTBIZAFPVH71jflK67MV5M2TSu83YY6pQPDZa8g&ved=0CBAQpis&ei=36dmVenCIpT_sASb0oP4Cw" class="btn btn-default" role="button">Get It</a></p>
                </div>
                <table cellpadding="0" cellspacing="0" width="133" bgcolor=#><tr><td><iframe src="http://www.ratingcode.com/show.php?id=143198467288&st=3&bg=" border="0" width="115" height="37" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" bgcolor=></iframe></td><td width="18" align="center" valign="top" style="padding-top:5px"><a href="" target="_blank"><img src="http://www.ratingcode.com/images/info.png" border="0" alt="Free Rating Code" title="Free Rating Code"></a></td></tr></table>
            </div>
        </div>
                <!--js-->
      <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img class="fart" src="http://cdn3-www.superherohype.com/assets/uploads/gallery/rage-of-ultron/avengers-rage-of-ultron-cover-a18a4.jpg">
                <div class="caption">
                    <h3>Rage of Ultron</h3>
                    <p> </p>
                    <p><a href="ROU.html" class="btn btn-primary" role="button">video</a> <a href="https://www.google.com/shopping/product/5176707585881985986?q=rage+of+ultron+cover&biw=1366&bih=667&espv=2&dpr=1&prds=paur:ClkAsKraX9sbsJGVb9lnWDJmcBNpg4P6i9gTI2LSC7OQ6jIlUZEVqdnbBtGL8WMoKqlH-Q_E8tnahjn0pN79Gi6hYnVLRm6hn6HqD2ZZP2ECSryq-PsloT3o8BIZAFPVH71buZKWFZInuE_6j30uf125aZ9K0w&ved=0CAwQpis&ei=C6lmVfKZOMOagwSY7oCQCw" class="btn btn-default" role="button">Get It</a></p>
                </div>
                <table cellpadding="0" cellspacing="0" width="133" bgcolor=#><tr><td><iframe src="http://www.ratingcode.com/show.php?id=143198467288&st=3&bg=" border="0" width="115" height="37" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" bgcolor=></iframe></td><td width="18" align="center" valign="top" style="padding-top:5px"><a href="" target="_blank"><img src="http://www.ratingcode.com/images/info.png" border="0" alt="Free Rating Code" title="Free Rating Code"></a></td></tr></table>
            </div>
        </div>
  </div>

        
    </body >
</html>