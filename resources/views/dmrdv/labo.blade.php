<!doctype html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
         <title>Liste Des RDV Au Laboratoire</title>
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
                         <a href="{{route('dmrdv.dom')}}" ><span class="las la-clipboard-list"></span>
                         <span>Liste des rendez-vous à Domicile</span></a>
                    </li>
                    <li>
                        <a href="{{route('dmrdv.labo')}}" class="active"><span class="las la-clipboard-list"></span>
                         <span>Liste des rendez-vous au Laboratoire</span></a>
                    </li>
                    <li>
                        <a href="{{route('file.analyse')}}"><span class="las la-clipboard-list"></span>
                         <span>Analyses</span></a>
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
                                <h2 class="heading-section">Liste Des RDV Laboratoire</h2>
                            </div>
                        </div>
                        <a href="{{ route('dmrdv.create1') }}" class="btn btn-primary">Ajouter rendez-vous</a>
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
                                            <th>Actions</th>
                                        </tr>
                                      </thead>
                                      <tbody id="myTable">
                                      @foreach ($dmrdvs as $key => $dmrdv )
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $dmrdv->nom }}</td>
                                            <td>{{ $dmrdv->tel }}</td>
                                            <td>{{ $dmrdv->prelevement }}</td>
                                            <td>{{ $dmrdv->localisation }}</td>
                                            <td>{{ $dmrdv->date }}</td>
                                            <td>{{ $dmrdv->heure }}</td>

                                            <td>
                                                <a href="{{ route('dmrdv.show', $dmrdv->id) }}" class="btn btn-dark btn-sm">Profile</a>
                                                <a href="{{ route('dmrdv.edit', $dmrdv->id) }}" class="btn btn-dark btn-sm">Modifier</a>
                                                <form method="POST" action="{{ route('dmrdv.destroy', $dmrdv->id) }}">
                                                    @method("DELETE")
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                                </form>

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
</tbody>
</table>
</body>


