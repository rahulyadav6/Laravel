<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Temperatures</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .convert-buttons {
            margin-top: 20px;
        }
        .convert-buttons a {
            margin: 0 10px;
            text-decoration: none;
            padding: 8px 12px;
            border: 1px solid black;
            background-color: #f8f8f8;
        }
    </style>
</head>
<body>
    <h2>Planet Temperatures</h2>
    <h3>Converted to: {{ ucfirst($unit) }}</h3>

    <table>
        <tr>
            <th>Planet</th>
            <th>Average Temperature (°{{ $unit === 'celsius' ? 'C' : 'F' }})</th>
        </tr>
        @foreach ($planets as $planet)
            <tr>
                <td>{{ $planet['name'] }}</td>
                <td>{{ $planet['temperature'] }}°</td>
            </tr>
        @endforeach
    </table>

    <div class="convert-buttons">
        <a href="{{ route('planet.temperatures', 'celsius') }}">Celsius (°C)</a>
        <a href="{{ route('planet.temperatures', 'fahrenheit') }}">Fahrenheit (°F)</a>
    </div>
</body>
</html>
