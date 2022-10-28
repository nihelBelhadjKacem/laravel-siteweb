<link rel="stylesheet" href="/css/create.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
<form method="POST" action="{{route('dmrdv.store')}}">
  @csrf
  <div class="container">
    <div class="row">
        <h4> Information Personel</h4>
        <div class="input-group input-group-icon">
            <label for="text"><i class="fa-solid fa-user"></i></label>
           <input type="text" name="nom" placeholder="Nom"/>
           <span class="text-danger">@error('nom'){{$message}} @enderror</span>
        </div>

        <div class="input-group input-group-icon">
            <label for="email"><i class="fa-solid fa-envelope"></i></label>
            <input type="email" name="email" placeholder="Adresse-mail"/>
            <span class="text-danger">@error('email'){{$message}} @enderror</span>
        </div>
        <div class="input-group input-group-icon">
            <label for="tel"><i class="fa-solid fa-phone"></i></label>
               <input type="tel" name="tel" placeholder="Téléphone"/>
               <span class="text-danger">@error('tel'){{$message}} @enderror</span>
        </div>
        <div class="input-group input-group-icon">
            <label for="localisation"><i class="fa-solid fa-location-dot"></i></label>
               <input type="localisation" name="localisation" placeholder="Adresse"/>
               <span class="text-danger">@error('localisation'){{$message}} @enderror</span>
        </div>
        <div class="input-group input-group-icon">
            <label for="text"><i class="fa-solid fa-flask-vial"></i></label>
            <input type="text" name="prelevement" placeholder="Prélevement"/>
        </div>
        <div class="row">
            <div class="col-half">
                <h4> Date De Naissaince</h4>
                <div class="input-group">
                    <div class="col-third">
                        <input type="text" name="date_naiss"onfocus="(this.type='date')" onblur="(this.type='text')" max={{date('Y-m-d')}} id="date_naiss" placeholder="Date de naissance"required/>
</div>
                </div>
            </div>
            <div class="col-half">
                <h4>Genre</h4>
                <div class="input-group">
                    <select class="form-select wide" name="genre"id="genre"onclick="hide();"required>
                        <option data-display="Select Choix"disabled="disabled"selected="selected">Choisir</b></option>
                        <option value="homme" type="radio" >Homme</option>
                        <option value="femme" type="radio" >Femme</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-half">
                <h4> Date RDV</h4>
                <div class="input-group">
                    <div class="col-third">

                        <input type="text"name="date"id="date"min='{{date('Y-m-d')}}'onfocus="(this.type='date')"onblur="(this.type='text')"placeholder="Choisir date"required/>

                    </div>
                </div>
            </div>
            <div class="col-half">
                <h4> Heure RDV</h4>
                <div class="input-group">
                        <select style="font-size: 0.8rem;" type="heure" name="heure">
                            <option disabled="disabled"selected="selected"required>Choisir</option>
                            <option value="9">9h</option>
                            <option value="10">9h15</option>
                            <option value="11">9h30</option>
                            <option value="12">9h45</option>
                            <option value="14">10h</option>
                            <option value="15">10h15</option>
                            <option value="16">10h30</option>
                      </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-half">
                <h4>Choix</h4>
                <div class="input-group">
                    <select class="form-select wide" name="choix"id="choix"onclick="hide();"required>
                        <option data-display="Select Choix"disabled="disabled"selected="selected">Choix</b></option>
                        <option value="domicile" type="radio" >Domicile </option>
                        <option value="laboratoire" type="radio" >Laboratoire</option>
                    </select>
                </div>
            </div>
        </br>
    </br>
</br>
</br>

                <button type="submit" class="btn btn-primary">Enregistrer un nouveau Rdv</button>

       </div>
</div>
  </div>
</form>










