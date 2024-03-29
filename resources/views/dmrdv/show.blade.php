
    <link rel="stylesheet" href="/css/show.css">
    <body>
        <div class="container">
          <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                        <span> </span>
                    </div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile</h4>
                        </div>
                        <div class="row mt-2">
                            <label class="labels">Nom : {{ $dmrdvs->nom }} </label>
                        </br>
                        </br>
                            <label class="labels">Téléphone : {{ $dmrdvs->tel }}</label>
                        </br>
                        </br>
                             <label class="labels">Date de naissance : {{ $dmrdvs->date_naiss }}</label>
                        </br>
                        </br>
                            <label class="labels">Addresse : {{$dmrdvs->localisation}}</label>
                        </br>
                        </br>
                            <label class="labels">Email : {{$dmrdvs->email}}</label>
                        </br>
                        </br>
                            <label class="labels">Genre : {{$dmrdvs->genre}}</label>
                        </br>
                        </br>
                        <label class="labels">Prélévement : {{ $dmrdvs->prelevement }}</label>
                    </br>
                    </br>
                        <a href="{{ route('dmrdv.edit', $dmrdvs->id) }}">Modifier Profile</a>
                    </div>
                 </div>
          </div>
        </div>
    </body>
