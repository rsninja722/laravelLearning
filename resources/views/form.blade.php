<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehikl Oil Change Challenge</title>
</head>

<body>
    <form method="POST" action="{{ route('submitEntryRoute') }}">
        {{ csrf_field() }}
        <label for="odometerCurrent">Current Odometer:</label>
        <input type="text" id="odometerCurrent" name="odometerCurrent" value="{{ old('odometerCurrent') }}" required>km
        @error('odometerCurrent')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>
        <label for="previousOilChangeDate">Date of Previous Oil Change:</label>
        <input type="date" id="previousOilChangeDate" name="previousOilChangeDate" value="{{ old('previousOilChangeDate') }}" required>
        @error('previousOilChangeDate')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>
        <label for="previousOdometer">Odometer at Previous Oil Change:</label>
        <input type="text" id="previousOdometer" name="previousOdometer" value="{{ old('previousOdometer') }}" required>km
        @error('previousOdometer')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>