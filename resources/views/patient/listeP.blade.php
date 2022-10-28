<!doctype html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
         <title>Liste Des Patients</title>
         <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
         <link rel="stylesheet" href="/css/admin.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

         <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
         <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
         <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
         <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
         <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



         <!-- Custom styles for this template-->
         <link href="css/sb-admin-2.min.css" rel="stylesheet">


    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brandd">
                <img src="/img/nomlabo.png"/>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{route('patient.listeP')}}"class="active"><span class="las la-clipboard-list"></span>
                         <span>Patients</span></a>
                    </li>
                    <li>
                         <a href="{{route('dmrdv.dom')}}" ><span class="las la-clipboard-list"></span>
                         <span>Liste des rendez-vous à Domicile</span></a>
                    </li>
                    <li>
                        <a href="{{route('dmrdv.labo')}}"><span class="las la-clipboard-list"></span>
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
                        <div class="  row">



                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4 ">
                                <div class="card  shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Patient enregistré</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{count(DB::table('patients')
                                                    ->get())}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-users fa-2x text-gray-300"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Earnings (Monthly) Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4 ">
                                <div class="card  shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                   Rendez-vous aujourd'hui</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{count(DB::table('dmrdvs')->where('date','=',date('Y-m-d'))->get())}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4 ">
                                <div class="card  shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Rendez-vous Labo</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{count(DB::table('dmrdvs')->where('choix','=','laboratoire')->get())}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pending Requests Card Example -->
                            <div class="col-xl-3 col-md-6 mb-4 ">
                                <div class="card  shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Rendez-vous Domicile</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{count(DB::table('dmrdvs')->where('choix','=','domicile')->get())}}</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="col-md-6 text-center mb-5">
                                <h2 class="heading-section">Liste Des Patients</h2>
                            </div>

                        <a href="{{ route('patient.create') }}" class="btn btn-primary">Ajouter Patient </a>
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="  Search..">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-wrap">
                                    <table class="table">
                                      <thead class="thead-primary">
                                        <tr>
                                          <th></th>
                                          <th>Nom</th>

                                          <th>Email Address</th>
                                          <th>Téléphone</th>
                                          <th>Actions</th>
                                        </tr>
                                      </thead>
                                      <tbody id="myTable">

                                        @foreach ($patients as$key => $patient)
                                            <tr>
                                                <th scope="row">{{ $key + 1 }}</th>
                                                <td>{{ $patient->nom }}</td>

                                                <td>{{ $patient->email }}</td>
                                                <td>{{ $patient->tel }}</td>
                                                <td><a href="{{ route('patient.show', $patient->id) }}" class="btn btn-dark btn-sm">Profile</a>
                                                    <a href="{{ route('patient.edit', $patient->id) }}" class="btn btn-dark btn-sm">Modifier</a>
                                                    <form method="POST" action="{{ route('patient.destroy', $patient->id) }}">
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
        <script>
            $(document).ready(function(){
              $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });
            });
            </script>
            <script>
                $(function() {
                $( "#datepicker" ).datepicker({ dateFormat: 'yy--mm-dd' });
                });
                </script>
    </body>
</html>


