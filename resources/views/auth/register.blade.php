<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <title>Inscription</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="css/inscp.css">
   </head>
   <body>
        <div class="main">
            <section class="signup">
                    <div class="container">
                        <div class="signup-content">
                            <div class="signup-form">
                                <form action="{{route('register')}}" method="post">
                                      @if(Session::has('success'))
                                         <div class="alert alert-succsess">{{Session::get('success')}}</div>
                                      @endif
                                      @if(Session::has('fail'))
                                         <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                      @endif
                                      @csrf
                                     <div class="form-group">
                                         <label for="name"><i class="fa-solid fa-user-large"></i></label>
                                         <input type="text" name="name" id="name" placeholder="Entre votre nom..."value="{{old('name')}}"/>
                                         <span class="text-danger">@error('name'){{$message}} @enderror</span>
                                     </div>
                                     <div class="form-group">
                                         <label for="email"><i class="fa-solid fa-at"></i></label>
                                         <input type="email" name="email" id="email" placeholder="Entre votre adresse-mail..." value="{{old('email')}}">
                                         <span class="text-danger">@error('email'){{$message}} @enderror</span>
                                     </div>
                                     <div class="form-group">
                                         <label for="pass"><i class="fa-solid fa-user-lock"></i></label>
                                         <input type="password" name="password" id="password" placeholder="Entre un mot de passe..."  value="">
                                         <span class="text-danger">@error('password'){{$message}} @enderror</span>
                                     </div>
                                     <div class="form-group">
                                        <label for="re-pass"><i class="fa-solid fa-user-lock"></i></label>
                                        <input type="password" name="re_pass" id="re_pass" placeholder="Répéter votre mot de passe..."/>
                                     </div>
                                     <div class="form-group form-submit">
                                          <input type="submit" name="signup" id="signup" class="form-submit"  value="Connexion"/>
                                     </div>
                                     <h3>si vous avez déja un compte <a href="login">Connectez-vous ici</a></h3>
                                </form>
                          </div>
                          <div class="signup-image">
                              <figure><img src="img/insc22.png"></figure>
                          </div>
                     </div>
                 </div>
             </section>
             <script src="vendor/jquery/jquery.min.js"></script>
        </div>
   </body>
</html>

