<!doctype html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
         <title>Dashbord Réceptionniste</title>
         <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
         <link rel="stylesheet" href="/css/admin.css">
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
                <img src="/img/nomlabo.png"/>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{route('patient.listeP')}}" class="active"><span class="las la-clipboard-list"></span>
                         <span>Liste Patients</span></a>
                    </li>
                    <li>
                         <a href="{{route('dmrdv.dom')}}"><span class="las la-clipboard-list"></span>
                         <span>RDV Domicile</span></a>
                    </li>
                    <li>
                        <a href="{{route('dmrdv.labo')}}"><span class="las la-clipboard-list"></span>
                         <span>RDV Laboratoire</span></a>
                    </li>
                    <li>
                        <a href="{{route('file.analyse')}}"><span class="las la-clipboard-list"></span>
                         <span>Résultats</span></a>
                    </li>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <img src="img/dec.jpg"/>
                            {{ __('Déconnxion') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                        </form>
                    </div>
                </ul>
            </div>
        </div>
        <div class="main-content">
            <header>
                <div class="search-wrapper">
                   <span class="las la-search"></span>
                   <input type="search" placeholder="Search here" />
                </div>
                <div class="user-wrapper">
                    <img src="/img/profil.jpg"/>
                   <div>
                       <h4>{{ Auth::user()->name }}</h4>
                       <small>Réceptionniste</small>
                   </div>
                </div>
            </header>
        </div>
    </body>
</html>

