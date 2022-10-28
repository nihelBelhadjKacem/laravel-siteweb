<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-compatible" content="ie=edge">
        <title>Authentification</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="css/auth.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    </head>
    <body>
         <div class="main">
             <section class="sign-in">
                  <div class="container">
                     <div class="signin-content">
                        <div class="signin-image">
                           <figure><img src="img/auth22.png"></figure>
                       </div>
                    <div class="signin-form">
                      <form action="{{route('login')}}" method="post">
                            @if(Session::has('success'))
                                <div class="alert alert-succsess">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                                <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
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
                                <input type="checkbox" name="remember_token" id="remember_token" class="agree-term" />
                                <label for="remember_token" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-submit">
                                <input type="submit" name="signin" id="signin" class="form-submit"  value="Connexion"/>

                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                     {{ __('Mot de passe oublié?') }}
                               </a>
                            @endif
                            <h3>si vous n'avez pas un compte <a href="register">Créer un compte ici</a></h3>
                        </form>
                      </div>
                  </div>
               </div>
            </section>
            <script src="vendor/jquery/jquery.min.js"></script>
         </div>

      </body>
</html>


