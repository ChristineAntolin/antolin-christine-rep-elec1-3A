<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f0f2;
        }
        .container {
            width: 1200px;
            margin: auto;
            background-color:  #ffffff;
            border: 1px solid #ccc;
        }
        .header {
            display: flex;
            background-color: #5293ad;
            color: white;
            padding: 20px;
        }
        .photo {
            background-color: #046b7a;
            padding: 5px;          
            display: inline-block;  
            margin-top: 5px;
            border-radius: 10px; 
            
        }
        .photo img {
            height: 500px;
            width: 300px;
            object-fit: cover;
            border: 3px solid white;  
            border-radius: 8px; 
        }
        .info {
            margin-left: 50px;
        }
        .section {
            padding: 15px;
            border-top: 1px solid #ccc;
        }
        .section h3 {
            padding: 5px;
        }
        .section p {
            margin-left: 30px; 
        }
                
    </style>
</head>
<body>
    @php
    $name = "Christine P. Antolin";
    $age = 25;
    $birth_datetime = "11/16/2000, 00:09:59 AM";
    $birth_place = "East. Pang. Dist. Hospital Tayug, Pangasinan";
    $residence = "Villasis, Pangasinan";
    $nationality = "Filipino";
    $religion = "Church of Christ";
    $caste = "N/A";
    $zodiacsign = "Scorpio";
    $height = "5'1\"";
    $weight = "42 kg";
    $education = "BS in Information Technology";
    $occupation = "Student";
    $languages = "Ilocano, Filipino";

   
    if ($age == 21) {
        $ageLabel = " (Dalawampu't isa)";
    } elseif ($age >= 22 && $age <= 23) {
        $ageLabel = " (Duapulo ket dua / Duapulo ket tallo)";
    } elseif ($age > 24) {
        $ageLabel = " (Dua a pulo ya lima)";
    } else {
        $ageLabel = "";
    }
@endphp

    <div class="container">

    <div class="header">
        <div class="photo">
            <img src="{{ asset('image/myself.jpg') }}" alt="Female Photo">
        </div>

        <div class="info">
            <h2>{{ $name }}</h2>
            <p><strong>Age:</strong> {{ $age }}{{ $ageLabel }}</p>
            <p><strong>Date & Time of Birth:</strong> {{ $birth_datetime }}</p>
            <p><strong>Place of Birth:</strong> {{ $birth_place }}</p>
            <p><strong>Place of Residence:</strong> {{ $residence }}</p>
            <p><strong>Nationality:</strong> {{ $nationality }}</p>
            <p><strong>Religion:</strong> {{ $religion }}</p>
            <p><strong>Caste:</strong> {{ $caste }}</p>
            <p><strong>Zodiac Sign: </strong>{{ $zodiacsign }}</p>
            <p><strong>Height:</strong> {{ $height }}</p>
            <p><strong>Weight:</strong> {{ $weight }}</p>
            <p><strong>Education:</strong> {{ $education }}</p>
            <p><strong>Occupation:</strong> {{ $occupation }}</p>
            <p><strong>Languages:</strong> {{ $languages }}</p>
        </div>
    </div>

    <div class="section">
        <h2>About Me</h2>
        <p style="text-align: justify;">
            Hello! I’m Christine P. Antolin. I am currently studying at Pangasinan State University – Urdaneta City, Pangasinan, 
            and my course is BS Information Technology (BSIT). 
            I am a motivated and passionate individual who is eager to learn and grow, 
            especially in the field of technology and web development. I enjoy exploring new skills, 
            and continuously improving my knowledge through hands-on experience. 
            I am dedicated, responsible, and always willing to learn and take on challenges that help me develop both personally and professionally. 
            I believe that learning is a lifelong process, and I strive to give my best in everything I do.
        </p>
    </div>

    <div class="section">
        <h2>Family Background</h2>
        <p><strong>Father's Name: </strong>Juanito Antolin</p>
        <p><strong>Father's Profession: </strong>Farmer</p>
        <p><strong>Mother's Name: </strong>Remedios Antolin</p>
        <p><strong>Mother's Profession:</strong>Housewife</p>
        <p><strong>No. of Brothers: </strong>3</p>
        <p><strong>No. of Sisters: </strong>2</p>
        <p><strong>Family Type: </strong>Single-Parent Family</p>
        <p><strong>Social Class: </strong>Lower Class</p>
        <p><strong>Place of Residence: </strong>#44 Los Recuerdos St., Poblacion I, Villasis, Pangasinan</p>
    </div>

    <div class="section">
        <h2>Expectations</h2>
        <p style="text-align: justify;">
            I expect to gain more knowledge and hands-on experience, especially in the field of technology and web development. 
            I aim to improve my skills, learn new concepts, and apply what I have learned in real-world projects.
            I also expect to grow both personally and professionally by developing my problem-solving skills, teamwork, and responsibility. 
            Through continuous learning and practice, I hope to become more confident and competent in my chosen field.
        </p>
    </div>

    <div class="section">
        <h2>Contact Details</h2>
        <p><strong>Phone Number: </strong>09123937454</p>
        <p><strong>Residence Address: </strong>#44 Los Recuerdos St. Poblazone I Villasis, Pangasinan</p>
    </div>
</div>

</body>
</html>