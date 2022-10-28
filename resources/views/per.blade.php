<!doctype html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
         <title>Dashbord Infirmier</title>
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
                         <a href="{{route('dmrdv.dom2')}}">
                            <span class="las la-clipboard-list"></span>
                            <span>Liste des rendez-vous à Domicile</span>
                        </a>
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
                       <small>Infirmier</small>
                   </div>
                </div>
            </header>
            <main>
                <div class="cards">
                    <div class="card-single">
                         <div>
                             <hl>54</hl>
                             <span>RDV Domicile</span>
                         </div>
                         <div>
                             <span class="las la-clipboard-list"></span>
                         </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <hl>54</hl>
                            <span>RDV Laboratoire</span>
                        </div>
                        <div>
                            <span class="las la-clipboard-list"></span>
                        </div>
                   </div>
                </div>
            </main>
        </div>
    </body>
</html>

