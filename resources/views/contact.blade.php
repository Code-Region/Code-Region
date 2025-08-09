@extends('layouts.app')

@section('content')
    <style>
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }
        .contact-form .form-group {
            margin-bottom: 1rem;
        }
        .contact-form label {
            display: block;
            margin-bottom: 0.5rem;
        }
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }
        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: #333;
            outline: none;
        }
        .contact-form .btn {
            background-color: #333;
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .contact-form .btn:hover {
            background-color: #555;
        }
    </style>
    <div class="slide-in">
        <h1>Contact Me</h1>
        <form action="#" method="POST" class="contact-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>
@endsection
