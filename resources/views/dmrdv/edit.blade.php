<link rel="stylesheet" href="/css/create.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <form method="POST" action="{{ route('dmrdv.update', $dmrdv->id) }}">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <h4> Information Personel</h4>
                <div class="input-group input-group-icon">
                    <label for="text"><i class="fa-solid fa-user"></i></label>
                   <input type="text" name="nom" placeholder="Nom" value="{{ $dmrdv->nom }}"/>
                </div>
                <div class="input-group input-group-icon">
                    <label for="email"><i class="fa-solid fa-envelope"></i></label>
                    <input type="email" name="email" placeholder="Adresse-mail" value="{{ $dmrdv->email }}"/>
                </div>
                <div class="input-group input-group-icon">
                    <label for="tel"><i class="fa-solid fa-phone"></i></label>
                       <input type="tel" name="tel" placeholder="Téléphone"  value="{{ $dmrdv->tel }}"/>
                </div>
                <div class="input-group input-group-icon">
                    <label for="localisation"><i class="fa-solid fa-location-dot"></i></label>
                    <input type="localisation" name="localisation" placeholder="Votre Adresse" value="{{ $dmrdv->localisation}}"/>
                </div>
                <div class="input-group input-group-icon">
                    <label for="text"><i class="fa-solid fa-flask"></i></label>
                    <input type="text" name="prelevement" placeholder="Prélevement" value="{{ $dmrdv->prelevement}}"/>
                </div>
                <div class="row">
                    <div class="col-half">
                        <h4> Date De Naissaince</h4>
                        <div class="input-group">
                            <div class="col-third">
                                <input type="date" name="date_naiss" placeholder="Date Naiss" this.type='date' onblur="(this.type='text')" max={{date('d-m-y')}} id="date_naiss"required value="{{ $dmrdv->date_naiss}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-half">
                        <h4>Genre</h4>
                        <div class="p-t-10">
                             <label class="radio-container m-r-45" value="homme">Homme
                                   <input type="radio" checked="checked" name="genre" value="homme">
                                   <span class="checkmark"></span>
                             </label>
                             <label class="radio-container"value="femme">Femme
                                  <input type="radio" name="genre" value="femme">
                                  <span class="checkmark"></span>
                             </label>
                        </div>
                   </div>
                </div>
                <div class="row">
                    <div class="col-half">
                        <h4> Date RDV</h4>
                        <div class="input-group">
                            <div class="col-third">
                                <input type="date" name="date" placeholder="choisir Date" value="{{ $dmrdv->date}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-half">
                        <h4> Heure RDV</h4>
                        <div class="input-group">
                                <select style="font-size: 0.8rem;" type="heure" name="heure">
                                    <option disabled="disabled"selected="selected"required>{{ $dmrdv->heure}}</option>

                                <option value="8">8:00</option>
                                <option value="8">8:30</option>
                                <option value="9">9:00</option>
                                <option value="9">9:30</option>
                                <option value="10">10:00</option>
                                <option value="10">10:30</option>
                                <option value="11">11:00</option>
                                <option value="11">11:30</option>
                                <option value="12">12:00</option>
                                <option value="12">12:30</option>
                                <option value="13">13:00</option>
                                <option value="13">13:30</option>
                                <option value="14">14:00</option>
                                <option value="14">14:30</option>
                                <option value="15">15:00</option>
                                <option value="15">15:30</option>
                                <option value="16">16:00</option>
                                <option value="16">16:30</option>
                                <option value="17">17:00</option>
                                <option value="17">17:30</option>
                                <option value="18">18:00</option>
                                <option value="18">18:30</option>

                              </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-half">
                        <h4>Choix</h4>
                        <div class="input-group">
                            <select class="form-select wide" name="choix"id="choix"onclick="hide();"required value="{{ $dmrdv->choix}}">
                                <option data-display="Select Choix"disabled="disabled"selected="selected">{{ $dmrdv->choix}}</b></option>
                                <option value="domicile" type="radio" >domicile </option>
                                <option value="laboratoire" type="radio" >laboratoire</option>
                            </select>
                        </div>
                </div>
            </br>
        </br>
    </br>
            <button type="submit" class="btn btn-primary">Modifer patient</button>
                </div>
        </div>
</form>

