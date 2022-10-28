<link rel="stylesheet" href="/css/create.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
<form method="POST" action="{{route('patient.store')}}">
  @csrf
  <div class="container">
    <div class="row">
        <h4> Information Personel</h4>
        <div class="input-group input-group-icon">
            <label for="text"><i class="fa-solid fa-user"></i></label>
           <input type="text" name="nom" placeholder="Nom"/>
        </div>
        <div class="input-group input-group-icon">
            <label for="email"><i class="fa-solid fa-envelope"></i></label>
            <input type="email" name="email" placeholder="Adresse-mail"/>
        </div>
        <div class="input-group input-group-icon">
            <label for="tel"><i class="fa-solid fa-phone"></i></label>
               <input type="tel" name="tel" placeholder="Téléphone"/>
        </div>
    </div>
    <div class="row">
        <div class="col-half">
            <h4> Date De Naissaince</h4>
            <div class="input-group">
                <div class="col-third">
                    <input type="date" name="date_naiss" placeholder="Date Naiss" (this.type='date')" onblur="(this.type='text')" max={{date('Y-m-d')}} id="date_naiss"required/>
                </div>
            </div>
        </div>
        <div class="col-half">
            <h4>Genre</h4>
            <div class="input-group">
                <select class="form-select wide" name="genre"id="genre"onclick="hide();"required>
                    <option data-display="Select Choix"disabled="disabled"selected="selected">Genre</b></option>
                    <option value="homme" type="radio" >Homme</option>
                    <option value="femme" type="radio" >Femme</option>
                </select>
            </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer un nouveau patient</button>
  </div>

</form>

