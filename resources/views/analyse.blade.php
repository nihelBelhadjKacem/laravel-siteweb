<!doctype html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
         <title>Résultats</title>
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
                        <a href="{{route('patient.listeP')}}"><span class="las la-clipboard-list"></span>
                         <span>Patients</span></a>
                    </li>
                    <li>
                         <a href="{{route('dmrdv.dom')}}"><span class="las la-clipboard-list"></span>
                         <span>Liste des rendez-vous à Domicile</span></a>
                    </li>
                    <li>
                        <a href="{{route('dmrdv.labo')}}"><span class="las la-clipboard-list"></span>
                         <span>Liste des rendez-vous au Laboratoire</span></a>
                    </li>
                    <li>
                        <a href="{{route('file.analyse')}}"class="active"><span class="las la-clipboard-list"></span>
                         <span>Analyses</span></a>
                    </li>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <img src="/img/dec.png"/>
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
                    <img src="/img/profil.jpg"/>
                   <div>
                       <h4>{{ Auth::user()->name }}</h4>
                       <small>Réceptionniste</small>
                   </div>
                </div>
            </header>
            <main>
                 <section class="ftco-section">
                        <div class="container">
                            <div class="row justify-content-center">
                            <div class="col-md-6 text-center mb-5">
                                <h2 class="heading-section">Résultats</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-wrap">
                                    <table class="table">
                                      <thead class="thead-primary">
                                        <tr>
                                            <th scope="col"></th>
                                           <th scope="col">Nom</th>
                                           <th scope="col">Date RDV</th>
                                           <th scope="col">Heure RDV</th>
                                           <th scope="col">Prélévement</th>
                                           <th scope="col">Resultats</th>

                                        </tr>
                                      </thead>
                                      <tbody id="myTable">
                                      @foreach ($dmrdvs as $key =>  $dmrdv )
                                      <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td><a href="{{route('dmrdv.show',$dmrdv->id)}}">{{ $dmrdv->nom }}</a></td>
                                        <td>{{ $dmrdv->date }}</td>
                                        <td>{{ $dmrdv->heure }}</td>
                                        <td>{{ $dmrdv->prelevement }}</td>

                                        <td>
                                            @if($dmrdv->file)
                                            <a href="{{ asset('file_uploads'."/" .$dmrdv->file) }}" class="btn btn-primary">viewfile</a>
                                            <a href="{{route('file.download',$dmrdv->file)}}" class="btn btn-primary">download</a>
                                            @else
                                            <a href="{{ route('file.createf',$dmrdv->id) }}" class="btn btn-primary">Ajouter res</a>
                                            @endif
                                        </td>

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
