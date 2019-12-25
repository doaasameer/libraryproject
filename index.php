<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Technical Library</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Prociono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">

  </head>
  <body >
     
      <header>
       <nav class="navbar navbar-default">
        <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><span>T</span>echnical  <span>L</span>ibrary  </a>
               </div>
    

    <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Books <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Web  Design and developing</a></li>
                    <li><a href="#">Networks</a></li>
                    <li><a href="#">Database</a></li>
                    <li><a href="#">Mobile Applications</a></li>
                  </ul>
                </li>
                <li><a href="#">Contact Us</a></li>
               </ul>
             <form class="navbar-form navbar-left">               
              <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
              </span>
              </div><!-- /input-group -->
             </form>
        
           <div class="social">
           <ul class="list-inline pull-right">
           <li><a href="http://facebook.com"><i class="fa fa-facebook-square fa-2x"></i></a></li>
           <li><a href="#"><i class="fa fa-twitter-square fa-2x"></i></a></li>
           <li><a href="#"><i class="fa fa-youtube-square fa-2x"></i></a></li>
           <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
           </ul>
           </div><!--social -->
           
         </div> <!-- navbar collapse -->    
       </div><!-- /.container-fluid -->
    </nav>
</header>
      
      <main> 
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="imgs/tech.jpg" class="img-responsive" alt="...">
      <div class="carousel-caption">
        Welcome to your technical library 
       </div>
    </div>
      
    <div class="item">
      <img src="imgs/kidscoding.jpg" class="img-responsive" alt="...">
      <div class="carousel-caption">
       Programming for kids ..learn more
       </div>
    </div>
      
    <div class="item">
      <img src="imgs/responsive.jpg" class="img-responsive" alt="...">
      <div class="carousel-caption">
        Learn how to design a responsive websites !!
       </div>
    </div>
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          
<div class ="Books-Subjects">
    <div class="container">
        <div class= "row">
              <h2>Books Subjects</h2>
                    <div class="col-md-3 item">
                       <div class="panel panel-default">
                        <div class="panel-body">
                          <img src="imgs/designbooks.jpg" class="img-responsive" alt="...">
                          <a  href="#">Web Development </a>
                        </div>
                       </div>
                    </div>
                    <div class="col-md-3 item">
                      <div class="panel panel-default">
                        <div class="panel-body">
                         <img src="imgs/programming%20books.jpg" class="img-responsive" alt="...">
                         <a  href="#">Mobile Development </a>
                        </div>
                      </div>
                    </div>
        
                      <div class="col-md-3 item">
                       <div class="panel panel-default">
                        <div class="panel-body">
                         <img src="imgs/databasebooks.jpg" class="img-responsive" alt="...">
                         <a  href="#">Database </a>
                        </div>
                      </div>
                     </div>
                    
                    <div class="col-md-3 item">
                      <div class="panel panel-default">
                        <div class="panel-body">
                         <img src="imgs/networkbooks.jpg" class="img-responsive" alt="...">
                         <a  href="#">Networks </a>
                        </div>
                     </div>
                    </div>
                   
                </div><!-- /.row -->
        
  
        <div class="new-books">
          <div class= "row">
            <div class="col-md-9">
            <h2>New Books</h2>
             <div class="panel panel-default">
              <div class="panel-body">
                <div class="row">
                    <div class="col-md-4 item">
                     <img src="imgs/learnwebdesign.png" class="img-responsive" alt="...">
                     <a  href="#">Learning Web Design </a>
                    </div>
                    
                   <div class="col-md-4 item">
                    <img src="imgs/Paython.png" class="img-responsive" alt="...">
                    <a  href="#">Learning Python</a>
                  </div>
                  
                  <div class="col-md-4 item">
                    <img src="imgs/net.jpg" class="img-responsive" alt="...">
                    <a  href="#">Computer Network</a>
                  </div>
                </div> <!--row -->
                <div class="row">
                    <div class="col-md-4 item">
                     <img src="imgs/android.jpg" class="img-responsive" alt="...">
                     <a  href="#">Hello Android </a>
                    </div>
                    
                   <div class="col-md-4 item">
                    <img src="imgs/db-sys.png" class="img-responsive" alt="...">
                    <a  href="#">Database System Concepts</a>
                   </div>
                  
                   <div class="col-md-4 item">
                    <img src="imgs/php.jpg" class="img-responsive" alt="...">
                    <a  href="#">PHP for Absolute Beginners</a>
                   </div>
                   
                 </div> <!--row -->
                </div><!--panel-body -->
                </div><!-- panel -->
               </div><!--col-md-9 -->
     
                  <div class="col-md-3 adv">
<!--                  <h2>Advertisments</h2>-->
                   <a href=#><img src="imgs/download%20(1).jpg" class="img-responsive" alt="..."></a>
                   <br>
                   <h4>If you want a collection of Web design Books, click here !!</h4>
                   <button><a href="" >More on Collections &gt;</a></button>
                  </div>
              
              </div> <!--row -->
             </div><!-- New Books -->
            </div><!-- container-->
          </div> <!--Books subjects -->
       
       </main>
       
      
      <footer>
       <div class="container">
           <div class="row">
               <div class="col-md-3 site-map">
                   <h3>Site Map</h3>
                   <ul class="list-unstyled">
                       <li><a href="#">Home</a></li>
                       <li><a href="#">Books</a></li>
                       <li><a href="#">Contact Us</a></li>
                   </ul>
               </div> <!-- /.site-map -->
               
            <div class="col-md-5 subscribe"> 
             <h3>Subscribe  to get the latest books !!</h3>           
              <form action="" method="post" id="" name="" class="validate" target="_blank" novalidate="">
               <div id="">
               <input type="email" value="" name="EMAIL" class="email" id="EMAIL" placeholder="your email" required="">
               <input type="submit" value="Subscribe" name="subscribe" id="subscribe" class="button">
               </div>
              </form>
            </div> <!--subscribe -->
               
               
               
               <div class="col-md-4 social">
                  <h3>About Us</h3>
                   <p>The technical Library is a website designed to accommodate technical books that explain any subject in Information Technology .If you like to add your own book,do not hesistate to contact us </p>
               </div> <!-- /.social -->
           </div> <!-- /.row -->
       </div> <!-- /.container -->
       
       <div class="text-center bottom-footer">
         <p> <i class="fa fa-copyright"></i> All Copyright reserved-2016</p>
       </div>
   </footer>

 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
      
  </body>
</html>