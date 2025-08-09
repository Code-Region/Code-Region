@extends('layouts.app')

@section('content')
    <style>
        .hero {
            text-align: center;
            padding: 4rem 0;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
        .hero .btn {
            background-color: #333;
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
    <div class="hero">
        <h1 class="fade-in">Welcome to My Portfolio</h1>
        <p class="fade-in">I'm a passionate freelancer creating beautiful and functional websites.</p>
        <a href="#" class="btn fade-in">View My Work</a>
    </div>
@endsection
