<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="css/composant.css?v=0.3">-->
    <link rel="stylesheet" href="../../public/css/composant.css">
    <link rel="stylesheet" href="css/all.css">
    

    <title>edit option</title>
</head>

<body>
    <!--start header-->
    <header>
        <!--start  header top -->
        <div class="header-top">
            <!--start  header top  logo-->
            <div class="logo">
                <h1>la ma<span>rge</span></h1>
            </div>
            <!--start  header top  notification and image-->
            <ul>

                <li onclick="show('li-notification')"><i class="far fa-bell"><span>4</span></i> </li>
                <li onclick="show('li-profil')"><img src="img/1.png" alt=""> </li>
            </ul>
            <div class="li-notification" id="li-notification">
                <div class="traiangle-up"></div>
                <ul>
                    <li onclick="redirect(x)" id="all">
                        <p>you have 1 unread notification </p>
                        <input class="btn" type="button" value="view all">
                    </li>

                    <li onclick="redirect(x)">
                        <div class="left">
                            <img src="img/1.png" alt="">
                        </div>
                        <div class="right">
                            <p>congaratulate oussama for new template</p>
                            <span>oct 15 13.32pm</span>
                        </div>
                    </li>

                    <li onclick="redirect(x)">
                        <div class="left">
                            <img src="img/1.png" alt="">
                        </div>
                        <div class="right">
                            <p>congaratulate oussama for new template</p>
                            <span>oct 15 13.32pm</span>
                        </div>
                    </li>
                    <li onclick="redirect(x)">
                        <div class="left">
                            <img src="img/1.png" alt="">
                        </div>
                        <div class="right">
                            <p>congaratulate oussama for new template</p>
                            <span>oct 15 13.32pm</span>
                        </div>
                    </li>
                    <li onclick="redirect(x)" id="all">
                        <p>view all notification </p>

                    </li>
                </ul>
            </div>
            <div class="li-profil" id="li-profil">
                <div class="traiangle-up"></div>
                <ul>
                    <li><span>oussama berhayla</span>
                        <p>web designer</p>
                    </li>
                    <li><i class="far fa-user"></i>
                        <p>my profil</p>
                    </li>
                    <li><i class="far fa-edit"></i>
                        <p>edit profil</p>
                    </li>
                    <li><i class="far fa-cog"></i>
                        <p>account setting</p>
                    </li>
                    <li><i class="far fa-user-headset"></i>
                        <p>support</p>
                    </li>

                    <li><i class="far fa-sign-out-alt"></i>
                        <p>sign out</p>
                    </li>

                </ul>

            </div>

        </div>
        <!--start  header navigation -->
        <nav>
            <ul id="ul">

                <li  id="dashboard" onclick=" show('li-dashboard')"><a href="#"><i class="fas fa-check-circle"></i>dashboard</a></li>

                <li id="config" class="activ" onclick=" show('li-config')"><a href="#"><i class="fas fa-check-circle"></i>configuration</a></li>
                <li id="mailapp" onclick=" show('li-mailapp')"><a href="#"><i class="fas fa-envelope"></i>mail app</a></li>
                <li id="payment" onclick=" show('li-payment')"><a href="#"><i class="fas fa-money-bill-wave-alt"></i>payment</a></li>
                <li id="absence" onclick=" show('li-absence')"><a href="#"><i class="fas fa-check-double"></i>absence</a></li>
                <li id="exercices" onclick=" show('li-exercices')"><a href="#"><i class="fas fa-pen-square"></i>exercices</a></li>
                <li id="controles" onclick=" show('li-controles')"><a href="#"><i class="fas fa-book"></i>controles</a></li>
            </ul>
            <!--start  header navigation sub-menu -->
            <div class="li-show" id="li-config">
                <ul>
                    <li><i class="fad fa-angle-right"></i><a href="#">compte</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">option</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">matier</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">niveau</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">group</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">prof</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">salle</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">seance</a></li>

                </ul>
            </div>
            <div class="li-show" id="li-mailapp">
                <ul>
                    <li><i class="fad fa-angle-right"></i><a href="#">option</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">matier</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">niveau</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">group</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">prof</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">salle</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">seance</a></li>

                </ul>
            </div>
            <div class="li-show" id="li-payment">
                <ul>
                    <li><i class="fad fa-angle-right"></i><a href="#">option</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">matier</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">niveau</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">group</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">prof</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">salle</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">seance</a></li>

                </ul>
            </div>
            <div class="li-show" id="li-absence">
                <ul>
                    <li><i class="fad fa-angle-right"></i><a href="#">option</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">matier</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">niveau</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">group</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">prof</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">salle</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">seance</a></li>

                </ul>
            </div>
            <div class="li-show" id="li-exercices">
                <ul>
                    <li><i class="fad fa-angle-right"></i><a href="#">option</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">matier</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">niveau</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">group</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">prof</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">salle</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">seance</a></li>

                </ul>
            </div>
            <div class="li-show" id="li-controles">
                <ul>
                    <li><i class="fad fa-angle-right"></i><a href="#">option</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">matier</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">niveau</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">group</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">prof</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">salle</a></li>
                    <li><i class="fad fa-angle-right"></i><a href="#">seance</a></li>

                </ul>

            </div>
            <!--end  header top  sub-menu-->

        </nav>
        <!--end  header top  navigation-->
    </header>
    <!--end  header-->
    <!--start main-->
    <main onclick="hideall()">

        <div class="mail" >
            <!--start main top-->
            <div class="mail-title">
                <div class="text">
                    <p>ajouter-option</p>
                    <span>config / ajouter-option</span>
                </div>
                <input type="button" value="add new one" class="btn" onclick="show('add-form1')">
            </div>
            <!--end main-top-->
            <!--start main tab-->
            <div class="tab ajouter-option">
                <!--start main tab top-->
                <div class="tab-title">
                    <div class="tab-title-top">
                        <p>nouvelle option</p>
                    </div>
                   
                
                     <form class="ajform" method="get" action="{{url('ajouteroption')}}">
               
                        <div class="remplir">
                            <span>nom de option</span>
                            <input type="text" name="nom" value="">
                        </div>
                        <div class="remplir">
                            <span>description</span>
                            <input type="text" name="desc">
                        </div>
                       
                        
                        
                        <button class="btn" id="bt" name="save">add</button>
                    </form>
                </div>    
                    
            </div>
        </div>
         <!--end  tab-->
          
          <!--start show-from(add-form)-->
       
        <!--end show-from(update-form)-->
    </main>

<!--end  main-->
<!--start footer-->
    <footer>
        <p>Copyright 2021 <span>neabuzz</span> .Designed by <span>sobz </span> All righit reserved</p>
    </footer>

<!--end footer-->
    <script src="js/composant.js"></script>
</body>

</html>