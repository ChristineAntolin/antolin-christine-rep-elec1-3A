<!DOCTYPE html>
<html>
<head>
    <title>Student Evaluation System</title>
</head>
<body>

<h2>Student Evaluation System</h2>

@if(empty($data))
    <h3>NO DATA</h3>
@else

    <p>
        Name: {{ $data['name'] }} <br>
        Prelim: {{ $data['prelim'] }} <br>
        Midterm: {{ $data['midterm'] }} <br>
        Final: {{ $data['final'] }} <br>
    </p>

    @php
        $prelim = $data['prelim'];
        $midterm = $data['midterm'];
        $final = $data['final'];
        $average = ($prelim + $midterm + $final) / 3;
    @endphp

    <h3>Evaluation Results</h3>

    Average: {{ number_format($average, 2) }} <br>

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
    <br>

    Remarks: 
    @if($average >= 75)
        Passed
    @else
        Failed
    @endif
    <br>

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

@endif

</body>
</html>