         <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
         <link rel="stylesheet" href="/css/admin.css">
         <body>
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
                <th scope="col">nom</th>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
                <th scope="col">Prélévement</th>
                <th scope="col">Resultats</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dmrdvs as $key =>  $dmrdv)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $dmrdv->nom }}</td>
                    <td>{{ $dmrdv->date }}</td>
                    <td>{{ $dmrdv->heure }}</td>
                    <td>{{ $dmrdv->prelevement }}</td>
                    <td>

                        @if($dmrdv->file)
                            <a href="{{ asset('file_uploads'."/".$dmrdv->file) }}" class="btn btn-primary">viewfile</a>
                            <a href="{{route('file.download',$dmrdv->file)}}" class="btn btn-primary">download</a>

                        @endif

                    </td>

                </tr>
            @endforeach

        </tbody>
                    </table></div></div></div>
         </div>
         </section>
</body>
