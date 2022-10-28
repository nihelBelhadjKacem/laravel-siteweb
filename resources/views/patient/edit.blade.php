<link rel="stylesheet" href="/css/create.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <form method="POST" action="{{ route('patient.update', $patient->id) }}">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <h4> Information Personel</h4>
                <div class="input-group input-group-icon">
                    <label for="text"><i class="fa-solid fa-user"></i></label>
                   <input type="text" name="nom" placeholder="Nom" value="{{ $patient->nom }}"/>
                </div>

                <div class="input-group input-group-icon">
                    <label for="email"><i class="fa-solid fa-envelope"></i></label>
                    <input type="email" name="email" placeholder="Adresse-mail" value="{{ $patient->email }}"/>
                </div>
                <div class="input-group input-group-icon">
                    <label for="tel"><i class="fa-solid fa-phone"></i></label>
                       <input type="tel" name="tel" placeholder="Téléphone"  value="{{ $patient->tel }}"/>
                </div>
                <div class="input-group input-group-icon">
                    <label for="localisation"><i class="fa-solid fa-location-dot"></i></label>
                    <input type="localisation" name="localisation" placeholder="Votre Adresse" value="{{ $patient->localisation}}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-half">
                    <h4> Date De Naissaince</h4>
                    <div class="input-group">
                        <div class="col-third">
                            <input type="text" name="date_naiss" placeholder="Date Naiss" value="{{ $patient->date_naiss }}"/>
                        </div>
                    </div>
                </div>

                <div class="col-half">
                    <h4>Genre</h4>
                    <div class="input-group">
                        <select class="form-select wide" name="genre"id="genre"onclick="hide();"required value="{{ $patient->genre}}">
                            <option data-display="Select Choix"disabled="disabled"selected="selected">{{ $patient->genre}}</b></option>
                            <option value="Homme" type="radio" >Homme </option>
                            <option value="Femme" type="radio" >Femme</option>
                        </select>
                    </div>
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Modifer patient</button>
        </div>
</form>
