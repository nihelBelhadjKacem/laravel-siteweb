<!doctype html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
         <title>Liste Des RDV A Domicile</title>
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
                         <a href="{{route('dmrdv.dom2')}}" class="active"><span class="las la-clipboard-list"></span>
                         <span>Liste des rendez-vous à domicile</span></a>
                    </li>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <img src="img/dec.png"/>
                            {{ __('Déconnxion' ) }}
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
                <div class="user-wrapper">
                    <img src="img/equipe3.jpg"/>
                   <div>
                       <h4>{{ Auth::user()->name }}</h4>
                       <small>Infirmier</small>
                   </div>
                </div>
            </header>
            <main>
                 <section class="ftco-section">
                        <div class="container">
                            <div class="row justify-content-center">
                            <div class="col-md-6 text-center mb-5">
                                <h2 class="heading-section">Liste Des RDV Domicile</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-wrap">
                                    <table class="table">
                                      <thead class="thead-primary">
                                        <tr>
                                            <th></th>
                                            <th>Nom</th>

                                            <th>Téléphone</th>
                                            <th>Prélevement</th>
                                            <th>Adresse</th>
                                            <th>Date du RDV</th>
                                            <th>Heure du RDV</th>
                                        </tr>
                                      </thead>
                                      <tbody id="myTable">

                                      @foreach ($dmrdvs as$key =>  $dmrdv )
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $dmrdv->nom }}</td>

                                            <td>{{ $dmrdv->tel }}</td>
                                            <td>{{ $dmrdv->prelevement }}</td>
                                            <td>{{ $dmrdv->localisation }}</td>
                                            <td>{{ $dmrdv->date }}</td>
                                            <td>{{ $dmrdv->heure }}</td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                 </section>
            </main>
        </div>
    </body>
</html>























