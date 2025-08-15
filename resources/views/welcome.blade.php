<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body id="home" class="bg-gray-50 text-gray-800">

<!-- Navbar -->
<x-navbar :menus="$menus"/>

<!-- Hero Section -->
<x-hero_section/>

<!-- About Section -->
<x-about_section/>

<x-project_section :projects="$projects"/>
<!-- Projects Section -->


<!-- Testimonials -->
<section id="testimonials" class="py-20">
    <div class="container mx-auto">
        <h3 class="text-3xl font-bold text-center mb-12">Testimonials</h3>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="mb-4">"Amazing work! Highly recommended."</p>
                <div class="flex items-center space-x-4">
                    <img src="https://via.placeholder.com/50" class="rounded-full">
                    <span class="font-semibold">Client Name</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="mb-4">"Delivered exactly what I needed."</p>
                <div class="flex items-center space-x-4">
                    <img src="https://via.placeholder.com/50" class="rounded-full">
                    <span class="font-semibold">Client Name</span>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <p class="mb-4">"Very professional and skilled."</p>
                <div class="flex items-center space-x-4">
                    <img src="https://via.placeholder.com/50" class="rounded-full">
                    <span class="font-semibold">Client Name</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section id="contact" class="bg-gray-100 py-20">
    <div class="container mx-auto max-w-lg">
        <h3 class="text-3xl font-bold text-center mb-8">Contact Me</h3>
        <form class="bg-white shadow-lg rounded-lg p-6 space-y-4">
            <input type="text" placeholder="Your Name" class="w-full border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
            <input type="email" placeholder="Your Email" class="w-full border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary">
            <textarea placeholder="Your Message" class="w-full border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
            <button class="w-full bg-primary text-white py-2 rounded hover:bg-blue-700">Send Message</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="bg-blue-900 text-white text-center p-4">
    &copy; 2025 Shahibur Shanto. All rights reserved.
</footer>

</body>
</html>
