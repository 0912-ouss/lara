<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/composant.css?v=0.3">
    <link rel="stylesheet" href="css/all.css">

    <title>Document</title>
    <!---->
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

        <form class="mail" method="POdST">
            <!--start main top-->
            <div class="mail-title">
                <div class="text">
                    <p>config-group</p>
                    <span>config / config-group</span>
                </div>
                <input type="button" value="add new one" class="btn" onclick="show('add-form1')">
            </div>
            <!--end main-top-->
            <!--start main tab-->
            <div class="tab">
                <!--start main tab top-->
                <div class="tab-title">
                    <div class="tab-title-top">
                        <p>all orders</p>
                    </div>
                    <div class="tab-title-bottom">
                        <div class="nbr">
                            <p>show</p>
                            <select name="nbr" id="cnbr">
                               
                               <option value="1">5</option>
                               <option value="1">10</option>
                               <option value="1">20</option>
                           </select>
                        </div>
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button class="btn"><i class="far fa-search"></i></button>
                            <p>search by</p>
                            <select name="srearch" id="csearch">
                            <option value="1">nom</option>
                           </select>

                        </div>
                    </div>
                </div>
                <!--end main tab top-->
                <!--start  main tab list-->
                <ul>
                    <!--start  list  titre (row 1)-->
                    <li>
                        <p>id</p>
                        <p id="nom">groupe</p>
                        <p>capacite</p>
                        <p>matier</p>
                        <p>niveau</p>
                        <p>option</p>
                        <p>action</p>
                    </li>
                     <!--end  list  titre (row 1)-->
                      <!--start  list rows-->
                    <li>
                        <p>#00001</p>
                        <p id="nom">oussama </p>
                        <p>capacite</p>
                        <p>matier</p>
                        <p>niveau</p>
                        <p>option</p>
                        <ul id="action">
                            <li id="o2"  onclick="show('formgroup')"><i class="far fa-arrow-alt-square-right"></i></li>
                            <li id="o2" onclick="show('add-form2')"><i class="fal fa-pencil-alt"></i></li>
                            <li ><button><i class="fal fa-trash-alt"></i></button></li>
                        </ul>

                    </li>
                    <li>
                        <p>#00001</p>
                        <p id="nom">oussama</p>
                        <p>capacite</p>
                        <p>matier</p>
                        <p>niveau</p>
                        <p>option</p>
                        <ul id="action">
                            <li id="o2"  onclick="show('formgroup')"><i class="far fa-arrow-alt-square-right"></i></li>
                            <li id="o2" onclick="show('add-form2')"><i class="fal fa-pencil-alt"></i></li>
                            <li ><button><i class="fal fa-trash-alt"></i></button></li>
                        </ul>
                    </li>
                    
                   
                    <!--end  list rows-->
                </ul>
                <div id="pagination">
                    <ul>
                        <li><button class="btn">prev</button></li>
                        <li><button class="btn" id="btn-active">1</button></li>
                        <li><button class="btn">2</button></li>
                        <li><button class="btn">3</button></li>
                        <li><button class="btn">next</button></li>
                    </ul>

                </div>
            </div>
        </form>
         <!--end  tab-->
          

        <form class="sct4" id="formgroup">
            <div class="div">
                <input type="button" value="X" class="btn" onclick="hide('formgroup')" id="btn-close">
                <div class="div4">
                    <div class="div40">
                        <div class="div41">
                            <p id="p1">all student</p>
                            <p id="p2">all student out of this gr</p>
                        </div>
                        <div class="div42">
                            <ul class="u1">
                                <li>
                                    <div class="div1"> 
                                        <img src="haja-hamdaouia-197-2249-5591949.jpg" alt="">
                                        <p class="p1">souhayl</p>
                                        <p class="p2">souhayl@gmail.com</p>
                                    </div>
                                    <div class="div2">
                                        <p><i class="fas fa-arrow-right"></i></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="div1"> 
                                        <img src="haja-hamdaouia-197-2249-5591949.jpg" alt="">
                                        <p class="p1">souhayl</p>
                                        <p class="p2">souhayl@gmail.com</p>
                                    </div>
                                    <div class="div2">
                                        <p><i class="fas fa-arrow-right"></i></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="div1"> 
                                        <img src="haja-hamdaouia-197-2249-5591949.jpg" alt="">
                                        <p class="p1">souhayl</p>
                                        <p class="p2">souhayl@gmail.com</p>
                                    </div>
                                    <div class="div2">
                                        <p><i class="fas fa-arrow-right"></i></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="div1"> 
                                        <img src="haja-hamdaouia-197-2249-5591949.jpg" alt="">
                                        <p class="p1">souhayl</p>
                                        <p class="p2">souhayl@gmail.com</p>
                                    </div>
                                    <div class="div2">
                                        <p><i class="fas fa-arrow-right"></i></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="div1"> 
                                        <img src="haja-hamdaouia-197-2249-5591949.jpg" alt="">
                                        <p class="p1">souhayl</p>
                                        <p class="p2">souhayl@gmail.com</p>
                                    </div>
                                    <div class="div2">
                                        <p><i class="fas fa-arrow-right"></i></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="div40">
                        <div class="div41">
                            <p id="p1">all student</p>
                            <p id="p2">all student in of this gr</p>
                        </div>
                        <div class="div42">
                            <ul class="u1">
                                <li>
                                    <div class="div1"> 
                                        <img src="haja-hamdaouia-197-2249-5591949.jpg" alt="">
                                        <p class="p1">souhayl</p>
                                        <p class="p2">souhayl@gmail.com</p>
                                    </div>
                                    <div class="div2">
                                        <p><i class="fas fa-arrow-left"></i></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="div1"> 
                                        <img src="haja-hamdaouia-197-2249-5591949.jpg" alt="">
                                        <p class="p1">souhayl</p>
                                        <p class="p2">souhayl@gmail.com</p>
                                    </div>
                                    <div class="div2">
                                        <p><i class="fas fa-arrow-left"></i></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="div1"> 
                                        <img src="haja-hamdaouia-197-2249-5591949.jpg" alt="">
                                        <p class="p1">souhayl</p>
                                        <p class="p2">souhayl@gmail.com</p>
                                    </div>
                                    <div class="div2">
                                        <p><i class="fas fa-arrow-left"></i></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="div1"> 
                                        <img src="haja-hamdaouia-197-2249-5591949.jpg" alt="">
                                        <p class="p1">souhayl</p>
                                        <p class="p2">souhayl@gmail.com</p>
                                    </div>
                                    <div class="div2">
                                        <p><i class="fas fa-arrow-left"></i></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="div1"> 
                                        <img src="haja-hamdaouia-197-2249-5591949.jpg" alt="">
                                        <p class="p1">souhayl</p>
                                        <p class="p2">souhayl@gmail.com</p>
                                    </div>
                                    <div class="div2">
                                        <p><i class="fas fa-arrow-left"></i></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </form>
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