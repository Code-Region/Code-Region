@extends('layouts.app')

@section('content')
    <style>
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1rem;
        }
        .portfolio-item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            transition: transform 0.3s;
        }
        .portfolio-item:hover img {
            transform: scale(1.05);
        }
    </style>
    <div class="slide-in">
        <h1>My Portfolio</h1>
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <img src="https://placehold.co/600x400" alt="Portfolio Item">
            </div>
            <div class="portfolio-item">
                <img src="https://placehold.co/600x400" alt="Portfolio Item">
            </div>
            <div class="portfolio-item">
                <img src="https://placehold.co/600x400" alt="Portfolio Item">
            </div>
        </div>
    </div>
@endsection
