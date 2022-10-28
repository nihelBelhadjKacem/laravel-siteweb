<!DOCTYPE html>
<html>
<head>
    <title>Résultats</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="/file.css">
 </head>
<body>

        <div class="container mt-5">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
            <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
        <form action="{{ route('file.storef',$dmrdv->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label>Ajouter les résultats du patient ici...</label>
                <input type="file" class="form-control" name="file" id="file">
            </div>

            <input type="submit" name="submit" value="Submit" class="btn btn-dark">
            <a href="{{ route('file.analyse') }}" class="btn btn-primary">Retour</a>

        </form>
    </div>
    </div></div></div></div>
</body>



</html>
