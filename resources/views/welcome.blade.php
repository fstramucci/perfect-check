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
            <input id="number" type="number" min="1">
            <input type="submit" value="Check" onclick="perfectCheck(document.getElementById('number').value)">
        </form>
        <span id="result">

        </span>
    </div>
</body>
</html>