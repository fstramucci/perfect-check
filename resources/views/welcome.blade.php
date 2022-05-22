<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfect Number check</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div>
        <form onsubmit="event.preventDefault()">
            <input id="number1" type="number" min="1">
            <input id="number2" type="number" min="2">
            <input type="submit" value="Check" onclick="perfectCheck(document.getElementById('number1').value, document.getElementById('number2').value)">
        </form>
        <span id="result">

        </span>
    </div>
</body>
</html>