
<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/docmed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Feb 2021 10:32:11 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>laboratoire Abi-Ayad</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="img/IMG_20220419_012831 1.jpg">
<script src="js/dom.js"></script>

<link rel="stylesheet" href="css/main.css">

</head>
<body>

 <header id="header" class="header d-flex align-items-center fixed-top">
 <div class="container-fluid container-xl d-flex align-items-center justify-content-between"id="head">
 <div class="bare">



 <div class="classe">
 <img class="image" src="img/logo.png"/>
 <img class="image2"src="img/nomlabo.png"/>
 </div >
 <div class="conn">
 @if (auth()->check())
 <div class="conn">
 <ul>
 <li class="li1">
 <img src="img/auth1.png"/>
 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
 {{ Auth::user()->name }}
 </a>
 @php $count = App\Models\Notif::where('user_id',Auth::user()->id)->get()->count();
 @endphp
 <a href="#">
     @if($count>0)
     <svg href="{{route('file.resultat')}}"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
      </svg>
     @else
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
        <path d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z"/>
      </svg>
     @endif
    </a>
 </li>

 <li class="dropdown" aria-labelledby="navbarDropdown">

 <img src="img/dec11.jpg"/>
 <a class="dropdown-item" href="{{ route('logout') }}"

 onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
 {{ __('Déconnxion') }}
 </a>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
 @csrf
 </form>
 </li>
 </ul>
 </div>
 @else
 <div class="log">

 <img src="img/conn.png"/>
 <p><a href="/login">login</a></p>
 </div>
 @endif

 </div>
 </div>


 <nav id="navbar" class="navbar">
    <ul>

    <li> <a href="/">Acceuil</a></li>
    <li class="menuder"><a href="">Rendez-vous</a>
        <ul class="menu">
            <li><a class="popup-with-form" href="/formulaire">Prise de Rendez-vous </a></li>
            <li><a href="{{route('file.resultat')}}" target="blank">Resultat </a></li>
        </ul>
    </li>
    <li class="menuder"><a href="">Espace Patient</a>
       <ul class="menu">
        <li><a href="/mavisite">Préparer ma visite</a></li>
        <li><a href="/listeanalyse">Analyse\prix</a></li>
        <li> <a class="popup-with-form" href="/covid19">Covid-19</a></li>
      </ul>
    </li>
    <li ><a href="/login">Espace personel</a>
    <li> <a href="contact">Contactez-nous</a></li>


    </li>
    </ul>
    </nav>
    </div>
    </header>


    <main id="main">
    @yield('body')
    </main>
</br>
</br>
</br>
    <footer>
    <div class="contenu-footer">

    <div class="bloc footer-services">
    <h3> Nos services</h3>
    <ul class="liste-services">
    <li> <a href="/">Acceuil</a></li>
    <li ><a href="/preparer">Preparer ma visite</a></li>
    <li ><a href="/login">Prise de rendez-vous</a></li>
    <li ><a href="/preparer">Resultat</a></li>
    <li ><a href="/preparer">Analyse/Prix</a></li>
    </ul>
    </div>




    <div class="bloc footer-contact">
    <h3> Restons en contact</h3>
    <div class="liste-contact">
    <p >📞 0770 653 953 </p>
    <p >📞 043 21 87 87 </p>
    <p>aboratoire.abiayad@gmail.com </p>
    <p><a href="https://www.google.com/maps/place/Kafil+el+yatim+tlemcen+%D9%83%D8%A7%D9%81%D9%84+%D8%A7%D9%84%D9%8A%D8%AA%D9%8A%D9%85+%D9%85%D9%83%D8%AA%D8%A8+%D8%AA%D9%84%D9%85%D8%B3%D8%A7%D9%86%E2%80%AD/@34.8826771,-1.3344551,17z/data=!3m1!4b1!4m5!3m4!1s0xd78c989fa57a757:0xbf634668a1dd2130!8m2!3d34.8826771!4d-1.3344551">📍Imama derrière la mosquée Imam Ali (la rue menant vers la CASNOS) Tlemcen.</a></p>
    </div>
    </div>





    <div class="bloc footer-medias">
    <h3> Nos reseaux</h3>
    <ul class="liste-medias">
    <p><a href="https://www.facebook.com/profile.php?id=100076282336499" ><img class="icone" src="../img/f.jpg" alt="icones réseaux socianx">Facebook</a></p>

    </ul>
    </div>
    </div>
    </footer>
    <script src="js/slider.js">
    </script>
   </body>
