<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/composant.css?v=0.5">
    <link rel="stylesheet" href="../../public/css/composant.css">
    <link rel="stylesheet" href="css/all.css">
    <link href="{{ asset('css/composant.css') }}" rel="stylesheet" type="text/css" >
    

    <title>Document</title>
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
                    <p>config-option</p>
                    <span>config / config-option</span>
                </div>
               
                <a class="btn" href="ajoption"> ajouter option</a>
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
                            <select name="nbr" id="cnbr" >
                               
                               <option value="5" id="5" > 5</option>
                               <option value="10" id="10">10</option>
                               <option value="20" id="20">20</option>
                           </select>
                        </div>
                        <form class="search">
                            <input type="text" name="searchoption">
                            <button class="btn"><i class="far fa-search"></i></button>
                            <a href="searchoption/{5}">ssssssssssssss</a>
                            <p>search by</p>
                            <select name="srearch" id="csearch">
                            <option value="1">nom</option>
                           </select>

                        </form>
                    </div>
                </div>
                <!--end main tab top-->
                <!--start  main tab list-->
                <ul>
                    <!--start  list  titre (row 1)-->
                    <li>
                        <p>id</p>
                        <p id="nom">option</p>
                        <p id="email">discription</p>
                        <p>action</p>
                    </li>
                     <!--end  list  titre (row 1)-->
                      <!--start  list rows-->
                      @foreach ($dt as $r)
                          
                      
                    <li>
                        <p>{{ $r["idOp"] }}</p>
                        <p id="nom">{{ $r["nomOp"] }}</p>
                        <p id="email">{{ $r["description"] }}</p>
                        <ul id="action">
                            <li  class="btn"><a href="optionup/{{  $r["idOp"] }}"><i class="fal fa-pencil-alt"></i></a></li>
                            <li ><a href="removeoption/{{ $r["idOp"]  }}"><i class="fal fa-trash-alt"></i></a></li>
                        </ul>

                    </li>
                    @endforeach
                    
                    
                   
                    <!--end  list rows-->
                </ul>
                <div id="pagination">
                    
                     <span> {{ $dt->links() }}  </span>
                    
                </div>
            </div>
        </div>
         <!--end  tab-->
          

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