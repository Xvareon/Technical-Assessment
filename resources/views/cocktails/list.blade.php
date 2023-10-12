<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktail List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h1 class="mb-4">Cocktail List</h1>

    <ul class="list-group">
        @foreach($cocktails['drinks'] as $cocktail)
            <li class="list-group-item mb-3">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ $cocktail['strDrinkThumb'] }}" alt="{{ $cocktail['strDrink'] }}" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <h4 class="mb-2">Drink Name:</h4>
                        <h2 class="mb-4">{{ $cocktail['strDrink'] }}</h2>

                        <h4 class="mb-2">Instructions:</h4>
                        <p class="mb-4">{{ $cocktail['strInstructions'] }}</p>

                        <a href="{{ url('/cocktails/' . $cocktail['idDrink']) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>