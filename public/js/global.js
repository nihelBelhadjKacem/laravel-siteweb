(function ($) {
    'use strict';
    /*==================================================================
        [ Daterangepicker ]*/
    try {
        $('.js-datepicker').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "autoUpdateInput": false,
            locale: {
                format: 'DD/MM/YYYY'
            },
        });

        var myCalendar = $('.js-datepicker');
        var isClick = 0;

        $(window).on('click',function(){
            isClick = 0;
        });

        $(myCalendar).on('apply.daterangepicker',function(ev, picker){
            isClick = 0;
            $(this).val(picker.startDate.format('DD/MM/YYYY'));

        });

        $('.js-btn-calendar').on('click',function(e){
            e.stopPropagation();

            if(isClick === 1) isClick = 0;
            else if(isClick === 0) isClick = 1;

            if (isClick === 1) {
                myCalendar.focus();
            }
        });

        $(myCalendar).on('click',function(e){
            e.stopPropagation();
            isClick = 1;
        });

        $('.daterangepicker').on('click',function(e){
            e.stopPropagation();
        });


    } catch(er) {console.log(er);}
    /*[ Select 2 Config ]
        ===========================================================*/

    try {
        var selectSimple = $('.js-select-simple');

        selectSimple.each(function () {
            var that = $(this);
            var selectBox = that.find('select');
            var selectDropdown = that.find('.select-dropdown');
            selectBox.select2({
                dropdownParent: selectDropdown
            });
        });

    } catch (err) {
        console.log(err);
    }
    sbtrdv($)
    {

              let allAreFilled = true;
              document.getElementById("test-form").querySelectorAll("[required]").forEach(function(i)
              {
           if (!allAreFilled) return;
           if (!i.value) allAreFilled = false;
        })
        if (!allAreFilled)
        {
            alert('Veuillez renseigner tout les champs');
        }
        else {
               var data = new FormData();
               var nom= document.getElementById('nom').value;
               var prenom= document.getElementById('prenom').value;
               var date_naiss=document.getElementById('date_naiss').value;
               var tel= document.getElementById('tel').value;
               var email= document.getElementById('email').value;
               var prelevement=  document.getElementById('prelevement').value;
               var date  = document.getElementById('date').value;
               var h = document.getElementById("heure");
               var heure = h.options[h.selectedIndex].value;
               var prelevement=  document.getElementById('prelevement').value;
               var choix= document.getElementById('choix').value;
               var xhr = new XMLHttpRequest();
               xhr.open("get", "/rdv/"+date+"/"+heure+"/"+choix+"/"+prelevement+"/"+nom+"/"+prenom+"/"+date_naiss+"/"+tel+"/"+email, true);
               xhr.onload = function ()
               {
                  if(this.responseText=="success") alert("Rendez-vous enregistre pour le $date à $heure")
               };
              xhr.send();
              dirrr[0].click();
  }
  }



})(jQuery);
