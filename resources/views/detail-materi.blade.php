<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Detail Materi</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .card-body p {
            text-align: justify;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="text-body">{{$course->nama}}</h1>
    </div>
    <div class="mb-5">
        <p style="text-align: justify;">{{$course->isi}}</p>
    </div>
    <div class="mt-5">
        <h2 class="section-title">Video Pembelajaran</h2>
        <br>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe 
                class="embed-responsive-item" 
                src="https://www.youtube.com/embed/{{ $course->link }}" allowfullscreen>
            </iframe>
    </div>
    <div class="mt-5">
        <h2 class="section-title">Latihan Soal</h2>
        <h4>belumm jadii</h4>
        <br>
    </div>
    <div class="mt-5">
        <h2 class="section-title">Kunci Jawaban</h2>
        <h4>belum jadii</h4>
        <br>
    </div>
</div>


</div>

</body>
</html>
