<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAU Inscription Webinaire</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container shadow bg-white" >
        <div class="text-center py-4">
        
            <h2>
                eCongrès international de la Société <br>
                d'Andrologie de Langue Française <br> 
                21 Janvier 2020
                
            </h2>
            
            <h3 class="mt-4">
                INSCRIPTION
            </h3>

        </div>
        
        
        @if($errors->any())
        <div class="alert alert-danger rounded-0">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
        @endif

        @if(Session::has('message'))
        <div class="alert alert-success rounded-0">
             {{ Session::get('message') }}
        </div>
        @endif
        <form action="{{ url('/inscription') }}" method="post" class="mt-4">
        @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control @error('nom') is-invalid @enderror rounded-0 p-2" id="nom" name="nom" value="{{ old('nom') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control @error('prenom') is-invalid @enderror rounded-0 p-2" id="prenom" name="prenom" value="{{ old('prenom') }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Adresse e-mail</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror rounded-0 p-2" id="email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-outline-primary rounded-0">Inscription</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="text-center">
        <img src="{{ asset('banner.png') }}" alt="banner" class="w-75"></div>
    </div>
</body>
</html> 