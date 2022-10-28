@extends('main')
 @section('body')
 <link rel="stylesheet" href="css/formulaire.css">

 <body>

      <form id="test-form"class="white-popup-block mfp-hide"method="post" action="{{route('dmrdv.store1')}}">
            @csrf
      </br>
</br>
</br>
           <h1 style="margin-left: 300px; ">Prendre rendez-vous</h1>
</br>
</br>
</br>

            <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
                <div class="wrapper wrapper--w680">
                    <div class="card card-4">
                        <div class="card-body">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Nom </label>
                                         <input class="input--style-4" type="text" name="nom" placeholder="Nom" required>
                                    </div>
                                </div>
                            </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Date de naissaice</label>
                                    <div class="input-group-icon">
                                        <input  class="input--style-4 js-datepicker" type="text" name="date_naiss"onfocus="(this.type='date')" onblur="(this.type='text')" max={{date('Y-m-d')}} id="date_naiss" placeholder="Date de naissance"required/>
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                   </div>
                               </div>
                            </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Genre</label>
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
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email"name="email"id="email"placeholder="Email"required/>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                     <label class="label">Numéro De Téléphone</label>
                                   <input class="input--style-4" type="text"name="tel"id="tel"placeholder="Numero de telephone"required/>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Choix</label>
                                    <div class="p-t-10">
                                         <label class="radio-container m-r-45" value="domicile">Domicile
                                               <input type="radio" checked="checked" name="choix" value="domicile">
                                               <span class="checkmark"></span>
                                         </label>
                                         <label class="radio-container"value="laboratoire">Laboratoire
                                              <input type="radio" name="choix" value="laboratoire">
                                              <span class="checkmark"></span>
                                         </label>
                                    </div>
                               </div>
                           </div>
                       <div class="col-2">
                        <div class="input-group">
                             <label class="label">Adresse</label>
                             <input class="input--style-4" type="text"name="localisation"id="localisation"placeholder="Adresse"false/>
                        </div>
                    </div>
            </div>

            <div class="row row-space">
                <div class="col-2">
                    <div class="input-group">
                        <label class="label">Date du rendz-vous</label>
                        <div class="input-group-icon">
                           <input class="input--style-4 js-datepicker" type="text"name="date"id="date"min='{{date('Y-m-d')}}'onfocus="(this.type='date')"onblur="(this.type='text')"placeholder="Choisir date"required/>

                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                 <div class="input-group">
                     <label class="label">Heure</label>
                     <div class="rs-select2 js-select-simple select--no-search">
                                <select   class="input--style-4" name="heure"id="heure"placeholder="Heure souhaité"required>
                                    <option disabled="disabled"selected="selected" value="">Heure</option>

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
                            <div class="select-dropdown"></div>
                     </div>
                </div>
           </div>
      </div>
      <div class="row row-space">
        <div class="col-2">
           <div class="input-group">
             <label class="label">Prélevement</label>
             <input  class="input--style-4" type="text"name="prelevement"id="prelevement"placeholder="prelevement"required/>
             </div>
        </div>
             <div class="col-2">
                <div class="input-group">
                </br>
             <p>❗Veuillez s'il vous plait consulter la page <a href="/listeanalyse" target="blank">Analyse</a>avant de remplir prélévement❗</p>
                </div>
             </div>
      </div>
       <div class="row row-space">
        <div class="input-group">

        <button class="btn btn-block btn-primary" style="display:block;" id="butt" type="submit" onclick="sbtrdv();">Validé</button>


        </div>
      </div>
                        </div>
                    </div>
                </div>
            </div></form>

<script src="js/formulaire.js"></script>
</body>
 <html>
 @endsection



<div class="three">
  </div>


