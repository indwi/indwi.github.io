<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indi's shop</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Reset some default styles */
        body, h1, h2, p, ul, li, a {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic styling for the body */
        body {
            font-family: Arial, sans-serif;
            color: #dbd3e3; /* Updated color for text */
            line-height: 1.6;
            background-color: #fff;
        }

        /* Header styling */
        header {
            background-color: #dbd3e3;
            color: #fff;
            padding: 1rem 0;
        }

        header .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 2rem;
        }

        header nav ul {
            list-style: none;
            display: flex;
        }

        header nav ul li {
            margin: 0 1rem;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
        }

        header nav ul li a:hover {
            text-decoration: underline;
        }

        /* Hero section styling */
        .hero {
            background: url('hero-bg.jpg') no-repeat center center/cover;
            color: #dbd3e3; /* Updated color for text */
            text-align: center;
            padding: 4rem 1rem;
        }

        .hero-content {
            max-width: 600px;
            margin: 0 auto;
        }

        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .hero .btn {
            background-color: #dbd3e3; /* Button background color */
            color: #fff;
            padding: 0.75rem 2rem;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .hero .btn:hover {
            background-color: #bdb3c7; /* Hover color for button */
        }

        /* About section styling */
        .about {
            padding: 2rem 1rem;
            background-color: #fff;
        }

        .about .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .about h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .about p {
            font-size: 1.2rem;
            line-height: 1.5;
        }

        /* Gallery section styling */
        .gallery {
            padding: 2rem 1rem;
            background-color: #f4f4f4;
        }

        .gallery .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }

        /* Contact section styling */
        .contact {
            padding: 2rem 1rem;
            background-color: #fff;
        }

        .contact .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .contact h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .contact form {
            display: flex;
            flex-direction: column;
        }

        .contact label {
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }

        .contact input, .contact textarea {
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact button {
            background-color: #dbd3e3; /* Updated button background color */
            color: #fff;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        .contact button:hover {
            background-color: #bdb3c7; /* Updated hover color for button */
        }

        /* Footer styling */
        footer {
            background-color: #dbd3e3;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        footer p {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>indi's shop</h1>
            <nav>
                <ul>
                    <li><a href="home.html">home</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="gallery.html">gallery</a></li>
                    <li><a href="contact.html">contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="hero-content">
            <h2>where flowers bloom, so does hope</h2>
            <p>find the perfect bouquet for any occasion.</p>
            <a href="#gallery" class="btn">shop now</a>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>about us</h2>
            <p>welcome to indi's shop, where we specialize in providing the most beautiful and fresh flowers for every occasion. our passion for flowers and attention to detail ensures that every bouquet is crafted with love.</p>
        </div>
    </section>

    <section id="gallery" class="gallery">
        <div class="container">
            <h2>gallery</h2>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="file.jpg" alt="Flower 1"></div>
                <div class="gallery-item"><img src="flower2.jpg" alt="Flower 2"></div>
                <div class="gallery-item"><img src="flower3.jpg" alt="Flower 3"></div>
                <!-- Add more items as needed -->
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>contact us</h2>
            <form action="submit_form.php" method="post">
                <label for="name">name</label>
                <input type="text" id="name" name="name" required>

                <label for="email">email</label>
                <input type="email" id="email" name="email" required>

                <label for="message">message</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" class="btn">send message</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 indi's shop. all rights reserved.</p>
        </div>
    </footer>
</body>
</html>
