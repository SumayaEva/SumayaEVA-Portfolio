@extends('layouts.main')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

.contact-section {
    width: 100%;
    padding: 60px 10%;
    font-family: 'Arial', sans-serif;
    background: #f7f7f7;
}

.contact-header {
    text-align: center;
    margin-bottom: 50px;
}

.contact-header h1 {
    font-size: 38px;
    font-weight: 700;
    color: #1F2937; 
    background: linear-gradient(90deg, #007CF0, #00DFD8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.contact-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 40px;
}

.contact-info {
    flex: 1;
    min-width: 320px;
    background: #fff;
    padding: 30px 25px;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.contact-info:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

.contact-info h3 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #007bff; 
    border-bottom: 2px solid #007bff;
    display: inline-block;
    padding-bottom: 5px;
}

.contact-info p {
    font-size: 16px;
    color: #4B5563; 
    margin: 12px 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.contact-info p i {
    color: #007CF0; 
    font-size: 18px;
}

.social-links {
    margin-top: 15px;
}

.social-links a {
    display: inline-flex;
    align-items: center;
    margin-right: 15px;
    text-decoration: none;
    font-size: 16px;
    color: #1F2937;
    padding: 8px 12px;
    border-radius: 8px;
    border: 1px solid transparent;
    transition: all 0.3s;
    font-weight: 500;
}

.social-links a i {
    margin-right: 8px;
}

.social-links a:hover {
    color: #fff;
    background: linear-gradient(90deg, #007CF0, #00DFD8);
    border-color: #007CF0;
    transform: translateY(-2px);
}
@media(max-width: 768px) {
    .contact-container {
        flex-direction: column;
    }
}
</style>

<div class="contact-section">

    <div class="contact-header">
        <h1>Get in Touch</h1>
    </div>

    <div class="contact-container">

        <div class="contact-info">
            <h3>Contact Information</h3>
            <p><i class="fa-solid fa-user"></i> <strong>Name:</strong> Sumaya Akter Eva</p>
            <p><i class="fa-solid fa-envelope"></i> <strong>Email:</strong> eva22205101042@diu.edu.bd</p>
            <p><i class="fa-solid fa-location-dot"></i> <strong>Location:</strong> Dhaka, Bangladesh</p>
        </div>

        <div class="contact-info">
            <h3>Follow Me</h3>
            <div class="social-links">
                <a href="https://github.com/SumayaEva" target="_blank"><i class="fa-brands fa-github"></i> GitHub</a>
            </div>
        </div>

    </div>

</div>

@endsection
