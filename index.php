<!doctype html>
<html lang="en">
  <head>
    <title>Travel couple</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora|Ubuntu" rel="stylesheet">


    <!-- Font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.1/js/all.js"></script>

    <!--  owl carousel 
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.green.min.css">
 -->


    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />

    <script src="js/plugins/typed/typed.min.js" type="text/javascript"></script>


  </head>
  <body>


    <!-- Header section-->
    <header id="header" onscroll="navBoja">
    
    <?php include "includes/nav.php" ?>


        <!-- banner -->
        <div class="banner-center text-center">

            <div class="hero-tekst">
            <h1>TRAVEL COUPLE</h1>
             <div id="typed-strings">
            <h2>"Svet je knjiga, a oni koji ne putuju, čitaju samo jednu stranicu." - Sveti Avgustin</h2>
            </div>
<span id="typed"  style="font-size: 30px;color: #ffffff"></span>
            </div>
       
    

            <!--  <a href="#lastPost">Read our last post</a> -->
        </div>
        <!-- end of baner-->
    </header>
    <!-- End of Header section -->



   
    <!-- Last post section -->
      <section id="topPost" class="container">
   
    <div class="title text-center">
    <h2 class="title"> READ OUR LAST POST</h2>
    </div>


        <div class="row">
        <div class="col-md-6">   
            <div class="card" id="card-shadow">
            <img class="card-img" src="assets/images/minhen/centar.jpg" alt="card image cap">
            </div>
        </div>


        <div class="col-md-6">
            <div class="card">
            <div class="card-body" id="card-shadow">
            <h4 class="card-title"> Minhen</h4>
            <p class="card-text">Ako ste zaljubljenik u srednjevekovnu istoriju, spoj barokne arhitekture I građevina savremenog doba, ljubitelj bavarskih specijaliteta, a posebno hedonista koji neće odoleti ispijanju piva u jednoj od najstarijih pivnica, Minhen je verovatno pravo mesto za vas.... <a href="#">Read more</a></p>
            <p class="card-text"><small class="text-muted"> Author and date</small></p>
       </div>
       </div>
       </div>

        </div>

        








    </div> <!-- End of row -->
        </section>
    <!-- End of last post secion -->



    <section id="explore" class="container-fluid">
   
    
        <h3 class="title text-center">EXPLORE BY COUNTRY</h3>
    <div class="row">

        <div class="col-md-4">
    <ul id="accordion" class="accordion">
        <li>
            <div class="link"><i class="fab fa-font-awesome-flag"></i>Austrija<i class="fas fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Beč</a></li>
                <li><a href="#">Hallstatt</a></li>
                <li><a href="#">Salzburg</a></li>
            </ul>
        </li>
        <li>
            <div class="link"><i class="far fa-flag""></i>Nemačka<i class="fas fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Minhen</a></li>
            </ul>
        </li>
        <li>
            <div class="link"><i class="fab fa-font-awesome-flag"></i>Francuska<i class="fas fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Pariz</a></li>
            </ul>
        </li>
        <li><div class="link"><i class="far fa-flag""></i>Češka<i class="fas fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Prag</a></li>
            </ul>
        </li>
        <li><div class="link"><i class="fab fa-font-awesome-flag"></i>Romunija<i class="fas fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Temišvar</a></li>
            </ul>
        </li>
        <li><div class="link"><i class="far fa-flag"></i>Grčka<i class="fas fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Solun</a></li>
                <li><a href="#">Tasos</a></li>
                <li><a href="#">Lefkada</a></li>
                <li><a href="#">Krf</a></li>
                <li><a href="#">Skijatos</a></li>
            </ul>
        </li>
        <li><div class="link"><i class="fab fa-font-awesome-flag"></i>Italija<i class="fas fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Venecija</a></li>
            </ul>
        </li>
        <li><div class="link"><i class="far fa-flag"></i>Turska<i class="fas fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Kusadasi</a></li>
                <li><a href="#">Efes</a></li>
                <li><a href="#">Pamukale</a></li>
            </ul>
        </li>
        <li><div class="link"><i class="fab fa-font-awesome-flag"></i>Srbija<i class="fas fa-chevron-down"></i></div>
            <ul class="submenu">
                <li><a href="#">Beograd</a></li>
                <li><a href="#">Novi sad</a></li>
                <li><a href="#">Požarevac</a></li>
            </ul>
        </li>
    </ul>
    </div>

  <div class="col-md-8">
    <div id="mapdiv" style="width: 100%; height: 100%;"></div>
</div>

</div>
    <div class="row text-center" id="counter">
        <div class="col-md-4" id="count1">
            <i class="fas fa-building"></i> 
            <h3 class="count"><span>15</span></h3>
            <h4>GRADOVA</h4>
        </div>
       
                <div class="col-md-4" id="count2">
                <i class="fas fa-globe"></i>
                <h3 class="count"><span>10</span></h3>

                <h4>DRŽAVA</h4> 
        </div>
                <div class="col-md-4" id="count3">
                <i class="fas fa-heart"></i> 
                <h3 class="count"><span>8</span></h3>
                <h4>GODINA</h4>
        </div>
        

    </div>
       
    

    </section>






      <!-- Last post section -->
      <section id="favoritPost" class="container">
   
    <div class="title text-center">
    <h2 class="title"> READ OUR FAVORIT POST</h2>
    </div>


        <div class="row">
       


        <div class="col-md-6">
            <div class="card">
            <div class="card-body" id="card-shadow">
            <h4 class="card-title"> Card title </h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu   dent, sunt in culpa qui officia deserunt mollit anim id est laborum.... <a href="#">Read more</a></p>
            <p class="card-text"><small class="text-muted"> Author and date</small></p>
       </div>
       </div>
       </div>
        <div class="col-md-6">   
            <div class="card" id="card-shadow">
            <img class="card-img" src="assets/images/nav/kefalonia.jpg" alt="card image cap">
            </div>
        </div>

        </section>







        <!-- <section class="container-fluid">

            <div class="owl-carousel owl-theme" id="brand">
                <div class="card item">
                 <img class="card-img" src="assets/images/nav/kefalonia.jpg" alt="card image cap">
                 </div>
               

                                 <div class="card item">
                 <img class="card-img" src="assets/images/nav/kefalonia.jpg" alt="card image 2">
                 </div>
                         


                                             <div class="card item">
                 <img class="card-img" src="assets/images/nav/kefalonia.jpg" alt="card image 3">
                 </div>
                     

                                <div class="card item">
                 <img class="card-img" src="assets/images/nav/kefalonia.jpg" alt="card image 4">
                 </div>
             

                                 <div class="card item">
                 <img class="card-img" src="assets/images/nav/kefalonia.jpg" alt="card image 5">
                 </div>
                           


                                             <div class="card item">
                 <img class="card-img" src="assets/images/nav/kefalonia.jpg" alt="card image 6">
                 </div>
                </div>     

           
        </section> -->
       








  
<?php include "includes/footer.php" ?>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js" crossorigin="anonymous"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

<!-- 
    <script src="js/plugins/owl.carousel.min.js"></script>

    <script>
$(document).ready(function(){
   $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,

    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
})
</script>

 -->


 <script>
  
</script>



        <!-- Amcharts -->
<script src="https://www.amcharts.com/lib/3/ammap.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/maps/js/worldHigh.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/themes/dark.js" type="text/javascript"></script>
    <script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>

        <!-- Optional JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/plugins/amchart/amchart.js"></script>

    <script src="js/plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="js/plugins/counterup/jquery.counterup.min.js"></script>


  </body>
</html>