<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Valley - Project Details</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<x-navbar :menus="$menus"/>
<div class="container mx-auto px-4 py-12 max-w-6xl">
    <!-- Project Header -->
    <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Computer Valley</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            A complete e-commerce solution for computer products with dynamic inventory, booking system, and order management.
        </p>
    </div>

    <!-- Project Showcase -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
        <!-- Main Project Image -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGNvbXB1dGVyJTIwc2hvcHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=800&q=60"
                 alt="Computer Shop" class="w-full h-full object-cover">
        </div>

        <!-- Project Details -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Project Features</h2>

            <ul class="space-y-4 mb-8">
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                    <span>Dynamic product management</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                    <span>Product booking system</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                    <span>Order history tracking</span>
                </li>
                <li class="flex items-start">
                    <i class="fas fa-check-circle text-green-500 mt-1 mr-3"></i>
                    <span>Product deletion functionality</span>
                </li>
            </ul>

            <div class="mb-8">
                <h3 class="text-lg font-semibold mb-3">Sample Products</h3>
                <div class="grid grid-cols-2 gap-3">
                    <span class="bg-gray-100 px-3 py-1 rounded">Microsoft - $36,000</span>
                    <span class="bg-gray-100 px-3 py-1 rounded">Aver ASPIRE - $18,800</span>
                    <span class="bg-gray-100 px-3 py-1 rounded">Auto ROG - $45,000</span>
                    <span class="bg-gray-100 px-3 py-1 rounded">Samsung Galaxy - $43,000</span>
                </div>
            </div>

            <div class="space-y-4">
                <a href="#" class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center py-3 px-6 rounded-lg transition duration-300">
                    <i class="fas fa-link mr-2"></i> Live Demo
                </a>
                <div class="grid grid-cols-2 gap-4">
                    <a href="#" class="bg-gray-800 hover:bg-gray-900 text-white text-center py-3 px-6 rounded-lg transition duration-300">
                        <i class="fab fa-github mr-2"></i> Client Code
                    </a>
                    <a href="#" class="bg-gray-800 hover:bg-gray-900 text-white text-center py-3 px-6 rounded-lg transition duration-300">
                        <i class="fab fa-github mr-2"></i> Server Code
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Technology Stack -->
    <div class="bg-white rounded-xl shadow-lg p-8 mb-16">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Technology Stack</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <div class="flex flex-col items-center p-4 border rounded-lg">
                <i class="fab fa-react text-4xl text-blue-500 mb-2"></i>
                <span>React</span>
            </div>
            <div class="flex flex-col items-center p-4 border rounded-lg">
                <i class="fab fa-bootstrap text-4xl text-purple-500 mb-2"></i>
                <span>Bootstrap</span>
            </div>
            <div class="flex flex-col items-center p-4 border rounded-lg">
                <i class="fab fa-node-js text-4xl text-green-500 mb-2"></i>
                <span>Express.js</span>
            </div>
            <div class="flex flex-col items-center p-4 border rounded-lg">
                <i class="fab fa-node text-4xl text-green-600 mb-2"></i>
                <span>Node.js</span>
            </div>
            <div class="flex flex-col items-center p-4 border rounded-lg">
                <img src="https://cdn.worldvectorlogo.com/logos/mongodb-icon-1.svg" class="h-10 mb-2" alt="MongoDB">
                <span>MongoDB</span>
            </div>
            <div class="flex flex-col items-center p-4 border rounded-lg">
                <i class="fas fa-fire text-4xl text-orange-500 mb-2"></i>
                <span>Firebase</span>
            </div>
        </div>
    </div>

    <!-- More Projects -->
    <div class="text-center">
        <h2 class="text-2xl font-bold text-gray-900 mb-2">More Projects</h2>
        <p class="text-gray-600 mb-8">Check out my other projects</p>
        <a href="#" class="inline-block border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white py-2 px-6 rounded-lg transition duration-300">
            View Portfolio
        </a>
    </div>
</div>
</body>
</html>
