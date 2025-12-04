<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    
    .navbar {
        background: linear-gradient(90deg, #7B3FE4, #A855F7); 
        color: white;
        padding: 15px 5%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .brand a {
        color: white;
        text-decoration: none;
        font-size: 1.5rem;
        font-weight: 700;
        letter-spacing: 1px;
        transition: transform 0.3s, color 0.3s;
    }

    .brand a:hover {
        transform: scale(1.05);
        color: #E0C3FC; 
    }

    .nav-links {
        list-style: none;
        display: flex;
        gap: 25px;
        margin: 0;
        padding: 0;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        font-size: 1rem;
        font-weight: 500;
        padding: 8px 12px;
        border-radius: 6px;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-links a::after {
        content: '';
        position: absolute;
        width: 0%;
        height: 2px;
        bottom: 0;
        left: 0;
        background: #E0C3FC; 
        transition: width 0.3s;
    }

    .nav-links a:hover::after {
        width: 100%;
    }

    .nav-links a:hover {
        background: rgba(255,255,255,0.1);
    }

    
    .nav-links a.active {
        background: rgba(255,255,255,0.2);
    }

    
    @media(max-width: 768px) {
        .navbar {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        .nav-links {
            flex-direction: column;
            width: 100%;
            gap: 10px;
        }
    }
</style>
</head>
<body>

<nav class="navbar">
    <div class="brand">
        <a href="#">SumayaEva</a>
    </div>
    
    <ul class="nav-links">
        <li><a href="{{ route('home') }}" class="active">Home</a></li>
        <li><a href="{{ route('project') }}">Project</a></li>
        <li><a href="{{ route('skills') }}">Skills</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>

</body>
</html>
