@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>EduCenter</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .mentor-card img {
            border-radius: 10px;
        }
        .schedule-card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }
        .btn-danger:hover {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
<body>
<body>

<div class="container mt-5">
    <div class="text-center mentor-card">
        <h1 class="mb-3">{{ $viewMentor->nama }}</h1>
        <img src="{{ asset($viewMentor->image_path) }}" alt="{{ $viewMentor->nama }}" class="img-fluid mb-3" style="max-width: 400px; height: auto; object-fit: cover;">
        <p class="lead">{{ $viewMentor->description }}</p>
        <h4>Pilih jadwal Zoom untuk belajar bersama {{ $viewMentor->nama }}.</h4>
        <br>
    </div>

    <div class="card p-4 shadow-sm mb-5">
        <h3 class="text-center mb-4">Jadwal Zoom</h3>
        <div class="row justify-content-center">
            @foreach ($viewMentor->schedules as $schedule)
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-sm schedule-card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $schedule->hari }}</h5>
                        <p class="card-text">Jam Mulai: {{ $schedule->jam_mulai }}</p>
                        <p class="card-text">Jam Selesai: {{ $schedule->jam_selesai }}</p>
                        <a href="{{ route('zoom.edit', $schedule->id) }}" class="btn btn-primary mt-2">Pilih!</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

</body>
@endsection
</html>
