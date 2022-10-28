@extends('main')

@section('body')


<link rel="stylesheet" href="css/wel.css">
<section>

<div class="slide-container">

<div class="custom-slider ">

<div class="slide-index">1 / 3</div>

<img class="slide-img" src="img/labo5.jpg">

<div class="slide-text"><h4>Le laboratoire d'analyse médicale Abi-ayad vous souhaite la bienvenue </h4>

<button type="button" style="width: 50%; cursor:pointer; padding: 20px;margin-top: 20px; margin-bottom: 10px;font-size: 20px;color:white; background-color:#005c96;" ><a href="/mavisite" > preparer ma visite </a></button>

</div>

</div>

<div class="custom-slider">

<div class="slide-index">2 / 3</div>

<img class="slide-img" src="img/ll.jpg">

<div class="slide-text"><h4 style="align-items: center">prise de rendez vous à domicile</h4>

<button type="button" style="width: 50%; cursor:pointer; padding: 20px;margin-top: 20px; margin-bottom: 10px;font-size: 20px;color:white; background-color:#005c96"><a href="/formulaire" >prendre rendez vous</a></button>

</div>

</div>

<div class="custom-slider ">

<div class="slide-index">3 / 3</div>

<img class="slide-img" src="img/labo33.jpg">

<div class="slide-text">

<h4>Et un paiement en ligne</h4>

<a href="#demo"><button type="button" style="width: 50%; cursor:pointer; padding: 20px;margin-top: 20px; margin-bottom: 10px;font-size: 20px;color:white; background-color:#005c96">information</button></a>



<div id="demo" class="modal">

<div class="modal_content">

<h5 style="color: black;margin-bottom: 10px;">Le paiement par carte sur internet est sécurisé.</h5>



<p style="color: black;font-size: 20px; margin-bottom: 10px;">Pour payer votre rendez-vous il vous faut: </p>

<ol>

<li style="color: black;font-size: 20px; margin-bottom: 5px;"> le numéro de la carte (16 chiffres sur le devant).</li>

<li style="color: black;font-size: 20px;margin-bottom: 5px;">sa date d’expiration.</li>

<li style="color: black;font-size: 20px">le cryptogramme visuel (3 derniers chiffres de la référence de votre carte au verso sur le panneau de signature).</li>

</ol>

<p style="color: rgb(143, 42, 42);font-size: 20px;font-weight: bold;">Ainsi,soyez le facteur essentiel de la revolution. &#128516;</p>

<a href="#" class="modal_close">&times;</a>

</div>

</div>

</div>

</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>

<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<br>

<div class="slide-dot">

<span class="dot" onclick="currentSlide(1)"></span>

<span class="dot" onclick="currentSlide(2)"></span>

<span class="dot" onclick="currentSlide(3)"></span>

</div>



<div class="lie">

<div class="hor">

<h1 style="color: white;margin-bottom: 20px">🕑 Nos horaire</h1>

<p style="font-size:16px;margin-left: 10px;">Les jour de semaine de 7h30 à 20h.<br/><br/>Le weekend (Vendredi) de 8h à 19h</p>

</div>

<a href="{{route('file.resultat')}}" style="text-decoration: none;color:white" class="ah"><div class="ress">

<h1> Resultat</h1>
<p style="font-size:16px;margin-left: 10px;">Résultats en ligne.<br/></p>


</div></a>

<a href="/listeanalyse" style="text-decoration: none; color:white ;font-size:20px;"class="ah1"><div class="an">

<strong> Analyse/prix</strong>


</div>

</a>

</div>

<div class="num2">

<div class="lie2" style="padding: 10px;width: 50%; margin-left:100px; margin-top: 50px;margin-bottom:20px;box-shadow: 1em 0 .4em rgb(167, 163, 163), -1em 0 .4em rgb(122, 120, 120);margin-right:50px">

<p><label style="color: rgb(128, 183, 231)">1.</label>L'ensemble du personnel vous souhaitent la bienvenue sur notre site web.</p>

<p><label style="color: rgb(128, 183, 231)">2.</label>Notre principale objective est de satisfaire nos patients, prescripteur et établissement de soins avec

lesquels nous collaborons, en assurant la qualité de nos prestations analytiques et de conseils. tout en

assurant des délais de rendus compatibles avec une prise en charge médicale </p>

<p> <label style="color: rgb(128, 183, 231)">3.</label> laboratoire s'engage à:</p>

<ul>

<li>Transmettre dans des délais adaptés des résultats de biologie fiables et de qualité</li>

<li>Offrir un service de qualité incluant notamment l'interprétation et le conseil, tout en respectant des

Règles de sécurité, de confidentialité de déotologie et en se conforment en nouvelles exigences

Réglementaire et normative</li>

<li>Offrir un accueil personnalisé et confidentiel</li>

<li>Réduire au maximum votre temps d'attente</li>

<li>Satisfaire les besoins des patients des prescripteurs et d'ensemble du personnel médical et

paramedical</li>

<li>Répondre aux exigences de qualité (contrôle interne et externe et réglementaire GBEA (guide de bonnes

exécutions des analyses).</li>

</ul>

</div>

<div class="tof2" >

<div style="display: flex; flex-direction:column; align-item: center; justify-content:space-around;">

<img src="img/img8.png" style="width: 80%; margin-top: 30px; margin-bottom:10px"/>

<img src="img/img9.png" style="width: 80%;margin-bottom:5px"/>

</div>

</div>

</div>

<div class="num3" >

<div class="tof2" style=" margin-left: 50px;" >

<div style="display: flex; flex-direction:column; align-item: center; justify-content:space-around">

<img src="img/biologistes.jpg" style="width: 110%; margin-top: 20px; margin-bottom:10px"/>

<img src="img/labbbb.jpeg" style="width: 110%;margin-bottom:5px"/>

</div>

</div>

<div class="lef-side" style="display: flex; flex-direction:column; justify-content:space-around;:50%; margin-left:60px; margin-top:20px;box-shadow: 1em 0 .4em rgb(167, 163, 163), -1em 0 .4em rgb(122, 120, 120);margin-right:50px" >

<div class="n1" >

<img src="img/equipe3.jpg" style="width: 60px; height:60px"/>

<div class="partie2" style="margin-top:15px" >

<h4 class="textee1" style="margin-bottom:10px">Une équipe expérimentée à votre service:</h4>

<p class="textee2" style="font-size:19px;">La biologiste responsable du laboratoire Abi-ayad et son equipe souhaitent vous accueillir le mieux possible.</p>

</div>

</div>

<div class="n2" >

<img src="img/agend.png" style="width: 60px; height:60px"/>



<div class="partie2" style="margin-top:15px" >

<h4 class="textee1" style="margin-bottom:10px">Résultats d'examen fiables:</h4>

<p class="textee2"style="font-size:19px;">Notre laboratoire s'engage à effectuer les analyses confformément aux procédures, normes et réglementations en vigueur pour les laboratoires de biologie médicale. </p>



</div>



</div>

<div class="n3" >

<img src="img/diam.jpg" style="width: 60px; height:60px"/>



<div class="partie2" style="margin-top:15px" >

<h4 class="textee1" style="margin-bottom:10px">Technologie de haute gamme:</h4>

<p class="textee2"style="font-size:19px;">Grace à notre plateau technique de pointe, nous offrons dans les plus brefs délais des résultats fiable et de qualité..</p>



</div>



</div>

</div>

</div>

<script>

var slideIndex = 1;

showSlides(slideIndex);

function plusSlides(n) {

showSlides(slideIndex += n);

}

function currentSlide(n) {

showSlides(slideIndex = n);

}

function showSlides(n) {

var i;

var slides = document.getElementsByClassName('custom-slider');

var dots = document.getElementsByClassName('dot');

if (n > slides.length) {slideIndex = 1}

if (n < 1) {slideIndex = slides.length}

for (i = 0; i < slides.length; i++) {

slides[i].style.display = "none";

}

for (i = 0; i < dots.length; i++) {

dots[i].className = dots[i].className.replace(" active", "");

}

slides[slideIndex-1].style.display = "block";

dots[slideIndex-1].className += " active";

}



</script>

</section>

@endsection
