<!DOCTYPE html>
<html>
<head>
    <title>Student Evaluation System</title>
</head>
<body>

<h2>Student Evaluation System</h2>


@if(!isset($prelim))
<form method="POST" action="/evaluation">
    @csrf
    <p>Name: <input type="text" name="name" required></p>
    <p>Prelim: <input type="number" name="prelim" required></p>
    <p>Midterm: <input type="number" name="midterm" required></p>
    <p>Final: <input type="number" name="final" required></p>
    <button type="submit">Evaluate</button>
</form>
@endif


@if(isset($prelim))
    @php
        $average = ($prelim + $midterm + $final) / 3;
        if ($average >= 90) $letter = 'A';
        elseif ($average >= 80) $letter = 'B';
        elseif ($average >= 70) $letter = 'C';
        elseif ($average >= 60) $letter = 'D';
        else $letter = 'F';
        $remarks = ($average >= 75) ? 'Passed' : 'Failed';
        if ($average >= 98) $award = 'With Highest Honors';
        elseif ($average >= 95) $award = 'With High Honors';
        elseif ($average >= 90) $award = 'With Honors';
        else $award = 'No Award';
    @endphp

    <div class="result">
        <h4>Evaluation Result for {{ $name }}</h4>
        <p><strong>Average:</strong> {{ number_format($average, 2) }}</p>
        <p><strong>Letter Grade:</strong> {{ $letter }}</p>
        <p><strong>Remarks:</strong> {{ $remarks }}</p>
        <p><strong>Award:</strong> {{ $award }}</p>
    </div>
@endif

</body>
</html>
