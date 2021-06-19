<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pure laravel</title>
</head>
<body>
    <h1>Hello pure lara!</h1>
    @php
        $countries = \App\Country::all();
        // dd($countries);
    @endphp
    @foreach($countries as $country)
        <h2>{{ $country->getAttributes()['name'] }}</h2>
        <p>{{ \App\City::class->country }}</p>
    @endforeach
</body>
</html>
