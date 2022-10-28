@extends('main')
 @section('body')
 <link rel="stylesheet" href="/css/contactez.css">
 <body>

 <form id="form1" method="post" action="{{route('contact.l')}}">
  @csrf
  <div class="container">
  <div class="row">
    <div class="">
             <div class="form-group1">
               <label for="name" >Name *</label>
               <input type="text" name="name" id="name1"  required/>

             </div>
             <div class="form-group1">
              <label for="email" class="control-label">Email *</label>
              <input type="text" name="email" id="email1"  required/>

            </div>
            <div class="form-group1">
              <label for="message" class="control-label sr-only">Message *</label>
             <textarea class="form-control" rows="10" cols="25"name="message" id="message" required>

             </textarea>

            </div>
            <div class="form-group1">
              <button class="btn btn-default btn-block" type="submit" onclick="pay();"id="bu">Submit</button>

             </textarea>
              <script>
                  function pay(){
    let allAreFilled=true;

document.getElementById("form1").querySelectorAll("[required]").forEach(function(i) {
if(!allAreFilled) return;
if(!i.value) allAreFilled=false;
})
if(!allAreFilled) {

}else{

  setTimeout("alert('Merci de nous avoir contactez!!!');", 0,1)
}}
                </script>
            </div>

    </div>
  </div>
  </div>
</form>
 </body>
@endsection
