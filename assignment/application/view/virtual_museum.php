<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Materialize CSS and google fonts -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    
   <!-- Json data -->
    <script src="assets/js/getJsonData.js"></script>

    <!-- X3dom CSS and JS -->
    <script type='text/javascript' src='http://www.x3dom.org/download/x3dom.js'> </script> 
    <link rel='stylesheet' type='text/css' href='http://www.x3dom.org/download/x3dom.css'> 
    
    <!-- Materialize Javascript (need both) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styling.css">

    <!-- Allows photogallery to work (materialize) -->
    <script>
        $(document).ready(function(){
            $('.materialbox').materialbox();
        });
    </script>

    <!-- allows models to be interacted with via buttons -->
    <script src="assets/js/interactiveModel.js"></script>

    <title> Medieval Museum</title>
  </head>
  <body>
    <nav> <!-- Top navigation bar -->
        <div class="nav-wrapper">
            <a href="index.php" class="brand-logo"><i class="material-icons">security</i><h1>Medieval Armoury Museum</h1></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <!-- <li><a href="index.php/about">About</a></li> -->
                <!-- <li><a href="index.php">More</a></li>  -->
            </ul>
        </div>
    </nav>
    <!-- Mobile top nav bar -->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="shield_page.html">About</a></li>
        <li><a href="helmet_page.html">Contact</a></li>
    </ul>
    <!-- Tab between models via show() and hide() JQuery -->
    <div class="row">
        <div class="col s12">
            <ul class="tabs" style="background-color:rgba(17,17,17,0.7);display: flex;">
                <li class="tab col s2"><button id="home">Home</button></li>
                <li class="tab col s2"><button onclick="shieldScene()" id="shield">Shield</button></li>
                <li class="tab col s2"><button onclick="helmetScene()" id="helmet">Helmet</button></li>
                <li class="tab col s2"><button onclick="maceScene()" id="mace">Mace</button></li>
                <li class="tab col s2"><button onclick="swordScene()" id="sword">Sword</button></li>
            </ul>
        </div>
    </div>

    <div class="container"> <!-- Main container start -->
        <div class="home"> 
            <div class="main_contents">
                <div class="row">
                    <h2>Welcome</h2>
                    <p style="margin-left:100px">This virtual museum shows of various models, pictures other media about medieval weapons. Information about how they were used and during what period is also included. Use all the buttons available to manipulate the 3D models.</p>
                </div>
            </div>
            <div class="my_cards">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="assets/images/shield.jpg" style="width:200px">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Heater Shield<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span id="subHead1" class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                        <p id="shieldsInfo"></p> <!-- info inserted by getJsonData.js -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="assets/images/helmet.jpg" style="width:200px;margin-top: 50px;">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Kettle Helmet<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span id="subHead2" class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                        <p id="helmetsInfo"></p>  <!-- info inserted by getJsonData.js -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator"  src="assets/images/mace.jpg" style="width:200px">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Mace<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span id="subHead3" class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                        <p id="macesInfo"></p> <!-- info inserted by getJsonData.js -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="assets/images/sword.jpg" style="width:200px">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Knightly Sword<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span id="subHead4" class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
                        <p id="swordsInfo"></p>  <!-- info inserted by getJsonData.js -->
                    </div>
                </div>
            </div>
            <!-- extra info retrieved via controller.php and model.php -->
            <h2>     <?php   echo $data['title']   ?>   </h2>
            <p style="margin: 0 40px;word-spacing:2px">  <?php   echo $data['info1']    ?>   </p>
        </div> 
        <!-- floating buttons -->
        <div id="toolbar1" class="toolbar" style="display:none">
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large red">
                    <i class="large material-icons">camera_alt</i>
                </a>
                <ul>
                    <li id="camLeftBtn"><a class="btn-floating yellow darken-1"><i id="camLeft" class="material-icons" onclick="">arrow_back</i></a></li>
                    <li><a class="btn-floating green"><i id="camBack" class="material-icons" onclick="">arrow_downward</i></a></li>
                    <li><a class="btn-floating blue"><i id="camFront" class="material-icons" onclick="">arrow_upward</i></a></li>
                </ul>
            </div>
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large red">
                    <i class="large material-icons" >grid_on</i>
                </a>
                <ul>
                    <li><a class="btn-floating red"><i onclick="wireFrame()" class="material-icons"> border_clear</i></a></li>
                </ul>
            </div>
            <div class="fixed-action-btn" >
                <a class="btn-floating btn-large red">
                    <i class="large material-icons">highlight</i>
                </a>
                <ul>    <!-- onclick function changed dynamically by js script at the bottom -->
                    <li><a class="btn-floating yellow darken-1"><i id="omniLightBtn" class="material-icons swordOmniLights" onclick=""> lightbulb_outline</i></a></li>
                    <li id="spotlight" ><a class="btn-floating yellow darken-1"><i id="spotlightBtn" class="material-icons swordSpotLights" onclick=""> flash_on</i></a></li>
                </ul>
            </div>
        </div>
                <!-- tabs -->
        <div style="display:none" class="myTabs"> <!-- The model headings are from mysqli lite database, 'myDatabase.db' -->
            <h2 id="shieldModHead"> <?php  echo $modelData['0']['title'] ?> </h2>
            <h2 id="helmetModHead"> <?php  echo $modelData['1']['title'] ?> </h2>
            <h2 id="maceModHead">   <?php  echo $modelData['2']['title'] ?> </h2>
            <h2 id="swordModHead">  <?php  echo $modelData['3']['title'] ?> </h2>
            <div class="model">
            <!-- switch statement changes model based on 'whichChoice attr, which is changed via interactive_model.js' -->
            <div class="model3D" style=" height: 100%; border: none;">
                    <x3d id="wire">
                        <scene>
                            <Switch whichChoice="0" id='SceneSwitch'>
                                <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" id="shieldX3d" url=""> </inline>
                                </transform>
                                <transform>
                                    <inline nameSpaceName="model" mapDEFToID="true" id="helmetX3d" url=""> </inline>                                    
                                </transform>
                                <transform>
                                    <inline nameSpaceName="model" mapDEFToID="true" id="maceX3d" url=""> </inline>
                                </transform>
                                <transform>
                                    <inline nameSpaceName="model" mapDEFToID="true" id="swordX3d" url=""> </inline>
                                </transform>
                            </Switch>
                        </scene>
                    </x3d>
                </div> 
            </div> <!-- The model descriptions are from mysqli lite database, 'myDatabase.db' -->
            <p id="shieldModDescrip">   <?php  echo $modelData['0']['modelDescrip'] ?> </p>
            <p id="shieldModDescrip2">  <?php  echo $modelData['0']['objectDescrip'] ?> </p>
            <p id="helmetModDescrip">   <?php  echo $modelData['1']['modelDescrip'] ?> </p>
            <p id="helmetModDescrip2">  <?php  echo $modelData['1']['objectDescrip'] ?> </p>
            <p id="maceModDescrip">     <?php  echo $modelData['2']['modelDescrip'] ?> </p>
            <p id="maceModDescrip2">    <?php  echo $modelData['2']['objectDescrip'] ?> </p>
            <p id="swordModDescrip">    <?php  echo $modelData['3']['modelDescrip'] ?> </p>
            <p id="swordModDescrip2">   <?php  echo $modelData['3']['objectDescrip'] ?> </p>
            <div class="flex">
                <a id="animateBtn" style="max-width:100px" onclick="" class="waves-effect waves-light btn">Animate</a> <!-- onclick function dynamically changed -->
                <a id="materialChangeBtn" style="max-width:100px" onclick="" class="waves-effect waves-light btn">Material Toggle</a> <!-- onclick function dynamically changed -->
            </div>
        </div> 

        <!-- Picture gallery. Src entered via getJsonData.js -->
        <h2 class="picture_gallery" id="gallery_heading" style="display:none;"></h2>
        <p style="display:none" id="galleryDescrip"></p>
        <div class="container picture_gallery" style="display:none">
            <div class="row card">
                <div class="col s12 m6 l4">
                    <img id="gpic1" src="" class="materialbox responsive-img card">
                </div>
                <div class="col s12 m6 l4">
                    <img id="gpic2" src="" class="materialbox responsive-img card">
                </div>
                <div class="col s12 m6 l4">
                    <img id="gpic3" src="" class="materialbox responsive-img card">
                </div>
                <div class="col s12 m6 l4">
                    <img id="gpic4" src="" class="materialbox responsive-img card">
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER stored within the view folder -->
    <?php include 'footer.php'  ?>
        

    <!-- Change direction to determine which way the buttons come out of the action buttons -->
    <script>  document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.fixed-action-btn');
            var instances = M.FloatingActionButton.init(elems, {
              direction: 'bottom'
            });
          });

    </script>

    <!-- produces image links in picture gallery -->
    <!--<script src="assets/js/gallery_generator.js"></script>-- (replaced by JSON data file)--> 
    <!-- TODO: shorten script below by hiding all and then displaying -->
    <script>
        $(document).ready(function(){
            $('#home').on('click',function(){
                $('.home').fadeIn(2000);
                $('.myTabs').hide(); 
                $('.toolbar').hide();
                $('.picture_gallery').hide();
                $('#galleryDescrip').hide();
            });

            $('#shield').on('click',function(){
                $('.home').hide();
                $('.myTabs').fadeIn(2000)
                $('#shieldModHead').fadeIn(2000);
                $('#helmetModHead').hide();
                $('#maceModHead').hide();
                $('#swordModHead').hide();
                $('#shieldModDescrip').show();
                $('#shieldModDescrip2').show();
                $('#helmetModDescrip').hide();
                $('#helmetModDescrip2').hide();
                $('#maceModDescrip').hide();
                $('#maceModDescrip2').hide();
                $('#swordModDescrip').hide();
                $('#swordModDescrip2').hide();
                $('.toolbar').show();
                $('.picture_gallery').show();
                $('#galleryDescrip').show();

                //Dynamically update buttons to call function with correct parmeter
                document.getElementById('camFront').setAttribute( "onClick", "cameraFront('shieldCam1')" );
                document.getElementById('camBack').setAttribute( "onClick", "cameraBack('shieldCam2')" );
                document.getElementById('camLeft').setAttribute( "onClick", "cameraLeft('shieldCam3')" );
                document.getElementById('camLeftBtn').style.display = "block"; //make visible if hidden
                document.getElementById('omniLightBtn').setAttribute( "onClick", "omniLightToggle('shieldOmniLights')" );
                document.getElementById('spotlight').style.display = "none"; //hide unused button 
                //update onclick function for model animation
                document.getElementById('animateBtn').style.display = "block";
                document.getElementById('animateBtn').setAttribute( "onClick", "animateModel('shieldAni')" );
                //update onclick for material change
                document.getElementById('materialChangeBtn').setAttribute("onClick","shieldMaterialToggle('shieldBody')");

                //display model title and description
               // document.getElementsByClassName('modHead')[0].id = "shieldModHead";
            });

            $('#helmet').on('click',function(){
                $('.home').hide();
                $('.myTabs').fadeIn(2000)
                $('.toolbar').show();
                $('#shieldModHead').hide();
                $('#helmetModHead').fadeIn(2000);
                $('#maceModHead').hide();
                $('#swordModHead').hide();
                $('#shieldModDescrip').hide();
                $('#shieldModDescrip2').hide();
                $('#helmetModDescrip').show();
                $('#helmetModDescrip2').show();
                $('#maceModDescrip').hide();
                $('#maceModDescrip2').hide();
                $('#swordModDescrip').hide();
                $('#swordModDescrip2').hide();
                $('.picture_gallery').show();
                $('#galleryDescrip').show();

                //dynamically change onclick values
                document.getElementById('camFront').setAttribute( "onClick", "cameraFront('helmetCam1');" );
                document.getElementById('camBack').setAttribute( "onClick", "cameraBack('helmetCam2');" );
                document.getElementById('camLeft').setAttribute( "onClick", "cameraLeft('helmetCam3');" );
                document.getElementById('camLeftBtn').style.display = "block"; //make visible if hidden
                document.getElementById('omniLightBtn').setAttribute( "onClick", "omniLightToggle('helmetOmniLights')" );
                document.getElementById('spotlight').style.display = "none"; //hide unused button
                //update onclick function for model animation
                document.getElementById('animateBtn').style.display = "block";
                document.getElementById('animateBtn').setAttribute( "onClick", "animateModel('helmetAni')" );
                //update onclick for material change
                document.getElementById('materialChangeBtn').setAttribute("onClick","helmetMaterialToggle('helmetBody')");
            });

            $('#mace').on('click',function(){
                $('.home').hide();
                $('.myTabs').fadeIn(2000)
                $('.toolbar').show(); 
                $('#shieldModHead').hide();
                $('#helmetModHead').hide();
                $('#maceModHead').fadeIn(2000);
                $('#swordModHead').hide();
                $('#shieldModDescrip').hide();
                $('#shieldModDescrip2').hide();
                $('#helmetModDescrip').hide();
                $('#helmetModDescrip2').hide();
                $('#maceModDescrip').show();
                $('#maceModDescrip2').show();
                $('#swordModDescrip').hide();
                $('#swordModDescrip2').hide();
                $('.picture_gallery').show();
                $('#galleryDescrip').show();

                //dynamically change onclick values
                document.getElementById('camFront').setAttribute( "onClick", "cameraFront('maceCam1');" );
                document.getElementById('camBack').setAttribute( "onClick", "cameraBack('maceCam2');" );
                document.getElementById('camLeftBtn').style.display = "none"; //hide unused button
                document.getElementById('omniLightBtn').setAttribute( "onClick", "omniLightToggle('maceOmniLights')" );
                document.getElementById('spotlight').style.display = "none"; //hide unused button
                //No animation for mace, hide button
                document.getElementById('animateBtn').style.display = "none";
                //update onclick for material change
                document.getElementById('materialChangeBtn').setAttribute("onClick","maceMaterialToggle('maceGrip')");

            });
            $('#sword').on('click',function(){
                $('.home').hide();
                $('.myTabs').fadeIn(2000)
                $('.toolbar').show(); 
                $('#shieldModHead').hide();
                $('#helmetModHead').hide();
                $('#maceModHead').hide();
                $('#swordModHead').fadeIn(2000);
                $('#shieldModDescrip').hide();
                $('#shieldModDescrip2').hide();
                $('#helmetModDescrip').hide();
                $('#helmetModDescrip2').hide();
                $('#maceModDescrip').hide();
                $('#maceModDescrip2').hide();
                $('#swordModDescrip').show();
                $('#swordModDescrip2').show();
                $('.picture_gallery').show();
                $('#galleryDescrip').show();

                //dynamically change onclick values
                document.getElementById('camFront').setAttribute( "onClick", "cameraFront('swordCam1');" );
                document.getElementById('camBack').setAttribute( "onClick", "cameraBack('swordCam2');" );
                document.getElementById('camLeft').setAttribute( "onClick", "cameraLeft('swordCam3');" );
                document.getElementById('camLeftBtn').style.display = "block"; //make visible if hidden
                document.getElementById('spotlight').style.display = "block"; //display if hidden
                document.getElementById('omniLightBtn').setAttribute( "onClick", "omniLightToggle('swordOmniLights')" );
                document.getElementById('spotlightBtn').setAttribute( "onClick", "spotLightToggle('swordSpotLights')" );
                //update onclick function for model animation
                document.getElementById('animateBtn').style.display = "block";
                document.getElementById('animateBtn').setAttribute( "onClick", "animateModel('swordAni')" );
                //update onclick for material change
                document.getElementById('materialChangeBtn').setAttribute("onClick","swordMaterialToggle('swordBlade')");

            });

        });
    </script>
  </body>
</html>