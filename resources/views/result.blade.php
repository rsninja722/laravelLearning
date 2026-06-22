<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>

<body>
    <a href="{{ route('home') }}"><button>Back</button></a>

    <h1>Result</h1>

    @if($entry->current_odometer - $entry->previous_odometer > 5000 || \Carbon\Carbon::parse($entry->prev_change_date)->diffInMonths(\Carbon\Carbon::now()) > 6)
        <p>Oil change needed.</p>
    @else
        <p>Oil change not needed yet.</p>
    @endif

    <h2>Entry Details</h2>
    <p>Current Odometer: {{ $entry->current_odometer }} km</p>
    <p>Previous Odometer: {{ $entry->previous_odometer }} km</p>
    <p>Date of Previous Oil Change: {{ $entry->prev_change_date }}</p>

</body>

</html>