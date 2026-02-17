<!DOCTYPE html>
<html>
<head>
    <title>Student Evaluation</title>
</head>
<body>

<h2>Student Evaluation System</h2>

<form method="POST" action="/evaluation">
    @csrf

    <p>Name: <input type="text" name="name" required></p>
    <p>Prelim: <input type="number" name="prelim" required></p>
    <p>Midterm: <input type="number" name="midterm" required></p>
    <p>Final: <input type="number" name="final" required></p>
    <button type="submit">Evaluate</button>

</form>

@if(isset($prelim))

    @php
        $average = ($prelim + $midterm + $final) / 3;
    @endphp

    <h3>Result</h3>
    <p>Name: {{ $name }}</p>
    <p>Average: {{ number_format($average,2) }}</p>

    <p>
        Letter Grade:
        @if($average >= 90)
            A
        @elseif($average >= 80)
            B
        @elseif($average >= 70)
            C
        @elseif($average >= 60)
            D
        @else
            F
        @endif
    </p>

    <p>
        Remarks:
        @if($average >= 75)
            Passed
        @else
            Failed
        @endif
    </p>

    <p>
        Award:
        @if($average >= 98)
            With Highest Honors
        @elseif($average >= 95)
            With High Honors
        @elseif($average >= 90)
            With Honors
        @else
            No Award
        @endif
    </p>

@endif

</body>
</html>
