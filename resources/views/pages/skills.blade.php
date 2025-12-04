@extends('layouts.main')

@section('content')

<style>

    body {
        font-family: 'Poppins', Arial, sans-serif;
    }

    .skills-section {
        width: 100%;
        padding: 80px 8%;
        background: linear-gradient(135deg, #e3f2fd, #ffffff);
        min-height: 80vh;
    }

    .skills-header {
        text-align: center;
        margin-bottom: 50px;
    }

    .skills-header h1 {
        font-size: 42px;
        font-weight: 700;
        color: #1a1a1a;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .skills-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 35px;
    }

    .skill-card {
        background: rgba(255, 255, 255, 0.8);
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        transition: 0.4s ease-in-out;
        border: 2px solid transparent;
        cursor: pointer;
    }

    .skill-card:hover {
        transform: translateY(-10px);
        border-color: #007bff;
        box-shadow: 0px 12px 28px rgba(0,0,0,0.18);
        background: #ffffff;
    }

    .skill-card h3 {
        font-size: 23px;
        font-weight: 600;
        margin-bottom: 12px;
        color: #007bff;
        text-transform: uppercase;
    }

    .skill-card p {
        font-size: 16px;
        color: #333;
        line-height: 1.6;
    }
</style>

<div class="skills-section">

    <div class="skills-header">
        <h1>My Skills</h1>
    </div>

    <div class="skills-container">

        <div class="skill-card">
            <h3>HTML5</h3>
            <p>Building well-structured, semantic web interfaces.</p>
        </div>

        <div class="skill-card">
            <h3>CSS3</h3>
            <p>Modern, responsive, mobile-friendly UI design.</p>
        </div>

        <div class="skill-card">
            <h3>JavaScript</h3>
            <p>Creating seamless & dynamic user interactions.</p>
        </div>

        <div class="skill-card">
            <h3>PHP & Laravel</h3>
            <p>Building secure and scalable web applications.</p>
        </div>

        <div class="skill-card">
            <h3>MySQL</h3>
            <p>Strong data handling & database management.</p>
        </div>

        <div class="skill-card">
            <h3>Bootstrap</h3>
            <p>Fast development with responsive components.</p>
        </div>

    </div>

</div>

@endsection
