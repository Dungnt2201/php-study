@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="home-container">
    <!-- Background Image -->
    <div class="header-background">
        <h1>Welcome to Our Website</h1>
    </div>
    @if(Auth::check() && Auth::user()->role === 'admin')
        <p>You are logged in as <strong>Admin</strong>.</p>
    @else
        <p>You are logged in as <strong>Member</strong>.</p>
    @endif
   <!-- Features Section -->
   <div class="features-container">
    <div class="feature-window">
        <div class="feature-box">
            <img src="{{ asset('images/feature1.jpg') }}" alt="Feature 1">
            <p>Build fully responsive landing pages without writing a single line of code.</p>
        </div>
    </div>
    <div class="feature-window">
        <div class="feature-box">
            <img src="{{ asset('images/feature2.jpg') }}" alt="Feature 2">
            <p>Build fully responsive landing pages without writing a single line of code.</p>
        </div>
    </div>
    <div class="feature-window">
        <div class="feature-box">
            <img src="{{ asset('images/feature3.jpg') }}" alt="Feature 3">
            <p>Increase your chances of conversion by upto 2x by personalizing user expereriences using data from your ads.</p>
        </div>
    </div>
    <div class="feature-window">
        <div class="feature-box">
            <img src="{{ asset('images/feature4.jpg') }}" alt="Feature 4">
            <p>Build fully responsive landing pages without writing a single line of code.</p>
        </div>
    </div>
    </div>

    <!-- Contact Form -->
    <div class="contact-container">
        <h2>Contact Us</h2>
        <form action="" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit" disabled>Send</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Your Website. All rights reserved.</p>
    </footer>
</div>
@endsection
