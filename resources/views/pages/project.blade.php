@extends('layouts.main')

@section('content')

<style>

.projects-section {
    padding: 60px 10%;
    font-family: 'Arial', sans-serif;
    background: #f7f7f7;
}

.projects-section h1 {
    text-align: center;
    font-size: 38px;
    color: #222;
    margin-bottom: 50px;
    font-weight: 700;
}

.projects-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.project-card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-left: 4px solid #007bff; 
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}

.project-card h3 {
    font-size: 22px;
    color: #007bff;
    margin-bottom: 12px;
}

.project-card p {
    font-size: 15px;
    color: #444;
    margin-bottom: 15px;
    line-height: 1.6;
    flex-grow: 1;
}

.tech-stack {
    font-size: 13px;
    color: #555;
    font-weight: 500;
    margin-bottom: 15px;
}

.project-link a {
    text-decoration: none;
    color: #fff;
    background: linear-gradient(90deg, #007CF0, #00DFD8);
    padding: 10px 18px;
    border-radius: 6px;
    text-align: center;
    transition: 0.3s;
    display: inline-block;
    font-weight: 600;
}
.project-link a:hover {
    background: linear-gradient(90deg, #0056b3, #00bfae);
}

@media(max-width: 768px) {
    .projects-section {
        padding: 40px 5%;
    }
}
</style>

<div class="projects-section">
    <h1>My Projects</h1>

    <div class="projects-container">

        <div class="project-card">
            <h3>Early-stage Alzheimer's Disease prediction</h3>
            <p>A machine learning project that detects early-stage algal blooms using environmental and sensor data, enabling proactive mitigation strategies for water bodies.</p>
            <div class="tech-stack"><strong>Tech Stack:</strong> Python, TensorFlow, Pandas</div>
            <div class="project-link">
                <a href="#" target="_blank">View Project</a>
            </div>
        </div>

        <div class="project-card">
            <h3>Fabric Identification using Image Classification</h3>
            <p>This project classifies different fabric types from images using deep learning, aiding the textile industry in automating material recognition.</p>
            <div class="tech-stack"><strong>Tech Stack:</strong> Python, Keras, OpenCV</div>
            <div class="project-link">
                <a href="#" target="_blank">View Project</a>
            </div>
        </div>

        <div class="project-card">
            <h3>Banking Management System</h3>
            <p>A secure web-based system for managing banking operations such as account management, transactions, and customer services with real-time reporting.</p>
            <div class="tech-stack"><strong>Tech Stack:</strong> Laravel, MySQL, Bootstrap</div>
            <div class="project-link">
                <a href="#" target="_blank">View Project</a>
            </div>
        </div>

        <div class="project-card">
            <h3>E-commerce Website</h3>
            <p>A fully functional online shopping platform with product listings, cart functionality, payment integration, and user authentication.</p>
            <div class="tech-stack"><strong>Tech Stack:</strong> Laravel, Vue.js, Stripe API</div>
            <div class="project-link">
                <a href="#" target="_blank">View Project</a>
            </div>
        </div>

        <div class="project-card">
            <h3>Personal Portfolio Website</h3>
            <p>A modern responsive portfolio website showcasing skills, projects, and contact information with interactive design elements.</p>
            <div class="tech-stack"><strong>Tech Stack:</strong> HTML, CSS, JavaScript, Laravel</div>
            <div class="project-link">
                <a href="#" target="_blank">View Project</a>
            </div>
        </div>

        <div class="project-card">
            <h3>Real-time Chat Application</h3>
            <p>A web-based real-time chat platform with private messaging, group chat, and notifications using WebSocket technology.</p>
            <div class="tech-stack"><strong>Tech Stack:</strong> Node.js, Socket.io, Express, MongoDB</div>
            <div class="project-link">
                <a href="#" target="_blank">View Project</a>
            </div>
        </div>

    </div>
</div>

@endsection
