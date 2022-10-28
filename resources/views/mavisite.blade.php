@extends('main')
 @section('body')
 <link rel="stylesheet" href="/css/mavisite.css">
 <body>



    <img src="img/img.png" alt="line" class="med_bottompadder20" width="100%">
</br>
</br>

    <h1 class="med_bottompadder20 " style="margin-left: 435px " width="100%">Comment préparer ma visite?
        <i class="fa-regular fa-bars-filter"></i></h1>
        <img src="img/icon4.png" alt="line" class="med_bottompadder20"style="margin-left: 360px">

<br/>
<br/>
<div class="accordion w-100" id="basicAccordion">
    <div class="accordion-item">

        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#basicAccordionCollapseTwo" aria-expanded="false" aria-controls="collapseTwo" onclick="cache4();"  style="">
        <strong> DOIS-JE VENIR À JEUN ?</strong>
      </button>



      <div id="basicAccordionCollapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"

 data-mdb-parent="#basicAccordion" style="stop-color: rgb(0, 0, 0);">

 <div class="accordion-body" id="zero"style="display: none; font-size: 18px;">

<p>Si votre médecin vous a recommandé d’être à jeun, voici les conditions à respecter :

<br>- La veille au soir : me mangez plus, ne buvez pas de boissons, sodas, jus de fruit, vous pouvez boire de l’eau.

<br>- Le matin du prélèvement : ne prenez pas de petit déjeuner, ne fumez pas, vous pouvez boire de l’eau.

 <br>- 24 heures avant : éviter les activités physiques intenses. Certaines analyses (glycémie, choléstérol …) nécessitent que vous soyez à jeun au moment du prélèvement.

<br>Pour toute question relative à l’état de jeûne, n’hésitez pas à contacter votre laboratoire LaboPlus.

 </p>

 </div>

</div>
    </div>

    <div class="accordion-item">


        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#basicAccordionCollapseTwo" aria-expanded="false" aria-controls="collapseTwo" onclick="cache();">
          <strong> QUELS SONT LES DOCUMENTS À APPORTER AU LABO?</strong>
        </button>


      <div id="basicAccordionCollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-mdb-parent="#basicAccordion" >
        <div class="accordion-body"id="un"style="display: none; font-size: 18px;">
            <p>Pour tout type d’examen, si vous prétendez à un remboursement total ou partiel de vos analyses :<br>- Ordonnance du médecin<br>- Mutuelle ou bon de prise en charge (CMIM et autres assurances).<br>Pour l’évaluation de la trisomie 21 : Pour toute prescription relative à l'évaluation du risque de trisomie 21 pendant la grossesse, il vous sera demandé de fournir :<br>- Le formulaire de consentement et de renseignement rempli par le médecin,<br>- Le compte rendu de la dernière échographie.</p>
        </div>
      </div>
    </div>

    <div class="accordion-item">

        <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
          data-mdb-target="#basicAccordionCollapseThree" aria-expanded="false" aria-controls="collapseThree" onclick="cache1();">
         <strong> PUIS-JE FAIRE UN EXAMEN SANS ORDONNANCE ? </strong>
        </button>


      <div id="basicAccordionCollapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-mdb-parent="#basicAccordion" >
        <div class="accordion-body"id="deux"style="display: none; font-size: 18px;">
            <p>Examens sur ordonnance obligatoire sauf pour le suivi des diabétiques et personnes sous AVK</p>
        </div>
      </div>
    </div>


      <div class="accordion-item">

          <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#basicAccordionCollapseTwo" aria-expanded="false" aria-controls="collapseTwo" onclick="cache3();">
          <strong>  EST-IL NÉCESSAIRE DE PRENDRE RENDEZ-VOUS ?</strong>
          </button>

    <br/>
        <div id="basicAccordionCollapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-mdb-parent="#basicAccordion" >
        <div class="accordion-body"id="quatre"style="display: none; font-size: 18px;">
            Notre laboratoire vous accueille sans rendez-vous, tout au long de la journée de <strong>07h30 à 18h00</strong>&nbsp;du&nbsp;<strong>Lundi au Vendredi</strong>, de&nbsp;<strong>07h30 à 12h00</strong>&nbsp;le&nbsp;<b>Samedi et Fermé </b>le<b> Dimanche</b>.</p><p>Cependant, il est nécessaire de prendre rendez-vous pour les prélèvements à domicile.</p>
        </div>
        </div>
      </div>
  </div>


 <script>
    function cache()
  {
  if(document.getElementById('un').style.display=="none"){

  document.getElementById('un').style.display= "block";

  } else {

     document.getElementById('un').style.display= "none";


  }
  }

  function cache1()
  {
  if(document.getElementById('deux').style.display=="none"){

  document.getElementById('deux').style.display= "block";

  } else {

     document.getElementById('deux').style.display= "none";


  }
  }
  function cache2()
  {
  if(document.getElementById('trois').style.display=="none"){

  document.getElementById('trois').style.display= "block";

  } else {

     document.getElementById('trois').style.display= "none";


  }
  }
  function cache3()
  {
  if(document.getElementById('quatre').style.display=="none"){

  document.getElementById('quatre').style.display= "block";

  } else {

     document.getElementById('quatre').style.display= "none";


  }
  }
  function cache4()
  {
  if(document.getElementById('zero').style.display=="none"){

  document.getElementById('zero').style.display= "block";

  } else {

     document.getElementById('zero').style.display= "none";


  }
  }
  </script>
 </body>
@endsection


