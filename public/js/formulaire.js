function hide()
 {
 if(document.getElementById('choix').value =="dom"){
   
 
 } else {
    document.getElementById('butt').style.display= "block";
    document.getElementById('butt1').style.display= "none";
    

 }
 }
function sbtrdv(element){

 let allAreFilled=true;

 document.getElementById("test-form").querySelectorAll("[required]").forEach(function(i) {
 if(!allAreFilled) return;
 if(!i.value) allAreFilled=false;
 })
 if(!allAreFilled) {

 }

 else{
   if(document.querySelector('input[name="choix"]:checked').value=="domicile"){
    alert('votre rendez vous serra presisé en email ou telephone')
 }else{
    var i= document.getElementById('heure').value;
    var i2= document.getElementById('date').value;
    alert('votre rendez vous est enregistré pour le'+i2+' à '+i)
 }
}
}
 

