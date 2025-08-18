<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPro - The Complete School Management Software</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-50 font-sans">

    <header id="header" class="bg-white shadow-md fixed w-full z-20 top-0">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-gray-800">🚀 EduPro</a>
            <div class="hidden md:flex space-x-6 items-center">
                <a href="#features" class="text-gray-600 hover:text-indigo-600">Features</a>
                <a href="#pricing" class="text-gray-600 hover:text-indigo-600">Pricing</a>
                <a href="#testimonials" class="text-gray-600 hover:text-indigo-600">Testimonials</a>
                <a href="documentation.html" class="py-2 px-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-300">Documentation</a>
            </div>
            <button id="mobile-menu-button" class="md:hidden text-gray-800">
                <i class="fas fa-bars fa-xl"></i>
            </button>
        </nav>
        <div id="mobile-menu" class="hidden md:hidden bg-white">
            <a href="#features" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Features</a>
            <a href="#pricing" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Pricing</a>
            <a href="#testimonials" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Testimonials</a>
            <a href="documentation.html" class="block py-2 px-4 text-sm text-white bg-indigo-600 hover:bg-indigo-700">Documentation</a>
        </div>
    </header>

    <section id="home" class="pt-24 md:pt-32 pb-16 bg-white">
        <div class="container mx-auto px-6 text-center">

            <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 mb-4 leading-tight">The All-in-One School Management System</h1>
            <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-3xl mx-auto">Streamline administration, enhance communication, and empower educators with EduPro. Your complete solution for a smarter school.</p>
            <div>
                <a href="#pricing" class="bg-indigo-600 text-white font-semibold py-3 px-8 rounded-lg hover:bg-indigo-700 transition duration-300 mr-4">Get Started</a>
                <a href="#" class="bg-gray-200 text-gray-800 font-semibold py-3 px-8 rounded-lg hover:bg-gray-300 transition duration-300">Request a Demo</a>
            </div>
        </div>
    </section>

    <hr />

    <section id="features" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Why Choose EduPro? 🤔</h2>
                <p class="text-gray-600 mt-4">Discover the features that make our software stand out.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-3xl text-indigo-500 mb-4"><i class="fas fa-users"></i></div>
                    <h3 class="text-xl font-bold mb-2">Student Management</h3>
                    <p class="text-gray-600">Manage student admissions, profiles, attendance, and records with ease.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-3xl text-indigo-500 mb-4"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h3 class="text-xl font-bold mb-2">Academic Tools</h3>
                    <p class="text-gray-600">Handle everything from gradebooks and exams to class schedules and curriculum.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-3xl text-indigo-500 mb-4"><i class="fas fa-wallet"></i></div>
                    <h3 class="text-xl font-bold mb-2">Finance & Billing</h3>
                    <p class="text-gray-600">Automate fee collection, generate invoices, and manage school finances seamlessly.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-3xl text-indigo-500 mb-4"><i class="fas fa-comments"></i></div>
                    <h3 class="text-xl font-bold mb-2">Parent Communication</h3>
                    <p class="text-gray-600">Keep parents informed with integrated messaging, portals, and progress reports.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-3xl text-indigo-500 mb-4"><i class="fas fa-chart-line"></i></div>
                    <h3 class="text-xl font-bold mb-2">Reporting & Analytics</h3>
                    <p class="text-gray-600">Gain insights with powerful, customizable reports on all aspects of school operations.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-3xl text-indigo-500 mb-4"><i class="fas fa-book-open"></i></div>
                    <h3 class="text-xl font-bold mb-2">Library Management</h3>
                    <p class="text-gray-600">Organize, track, and manage your school's library resources efficiently.</p>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section class="bg-indigo-700 text-white">
        <div class="container mx-auto px-6 py-16 text-center">
            <h2 class="text-3xl font-bold mb-2">Ready to Dive Deeper? 📖</h2>
            <p class="text-indigo-200 mb-8 max-w-2xl mx-auto">Our comprehensive documentation provides everything you need to know, from setup guides to advanced feature tutorials.</p>
            <a href="documentation.html" class="bg-white text-indigo-600 font-semibold py-3 px-8 rounded-lg hover:bg-gray-100 transition duration-300">Read the Docs</a>
        </div>
    </section>

    <hr />

    <section id="pricing" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Flexible Pricing for Every School 💰</h2>
                <p class="text-gray-600 mt-4">Choose a plan that fits your institution's size and needs.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
                <div class="bg-white p-8 rounded-lg shadow-lg border-t-4 border-gray-200 text-center">
                    <h3 class="text-xl font-bold mb-2">Basic</h3>
                    <p class="text-4xl font-extrabold mb-4">$49<span class="text-lg font-normal text-gray-500">/mo</span></p>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li>Up to 200 Students</li>
                        <li>Core Modules Included</li>
                        <li>Email Support</li>
                        <li>Basic Reporting</li>
                    </ul>
                    <a href="#" class="w-full block bg-gray-200 text-gray-800 font-semibold py-3 px-6 rounded-lg hover:bg-gray-300 transition duration-300">Choose Plan</a>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-2xl border-t-4 border-indigo-600 text-center relative">
                    <span class="absolute top-0 right-0 bg-indigo-600 text-white text-xs font-bold px-3 py-1 rounded-bl-lg">POPULAR</span>
                    <h3 class="text-xl font-bold mb-2">Professional</h3>
                    <p class="text-4xl font-extrabold mb-4">$99<span class="text-lg font-normal text-gray-500">/mo</span></p>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li>Up to 1000 Students</li>
                        <li>All Core Modules</li>
                        <li>Priority Email & Phone Support</li>
                        <li>Advanced Reporting</li>
                    </ul>
                    <a href="#" class="w-full block bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-indigo-700 transition duration-300">Choose Plan</a>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg border-t-4 border-gray-200 text-center">
                    <h3 class="text-xl font-bold mb-2">Enterprise</h3>
                    <p class="text-4xl font-extrabold mb-4">Contact Us</p>
                    <ul class="text-gray-600 mb-6 space-y-2">
                        <li>Unlimited Students</li>
                        <li>Custom Modules</li>
                        <li>Dedicated Support Manager</li>
                        <li>Full Customization</li>
                    </ul>
                    <a href="#" class="w-full block bg-gray-200 text-gray-800 font-semibold py-3 px-6 rounded-lg hover:bg-gray-300 transition duration-300">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <section id="testimonials" class="py-20 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Loved by Educators Worldwide ❤️</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-gray-600 mb-4">"EduPro has transformed how we manage our school. It's intuitive, powerful, and the support is fantastic."</p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/68.jpg" alt="Avatar">
                        <div>
                            <p class="font-bold">Maria Garcia</p>
                            <p class="text-sm text-gray-500">Principal, Bright Minds Academy</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-gray-600 mb-4">"The parent portal is a game-changer. Communication has never been easier or more effective."</p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/32.jpg" alt="Avatar">
                        <div>
                            <p class="font-bold">John Smith</p>
                            <p class="text-sm text-gray-500">IT Director, Oakwood International</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <p class="text-gray-600 mb-4">"From admissions to alumni management, EduPro covers all bases. We couldn't be happier with our choice."</p>
                    <div class="flex items-center">
                        <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/44.jpg" alt="Avatar">
                        <div>
                            <p class="font-bold">Susan Lee</p>
                            <p class="text-sm text-gray-500">Administrator, Lakeside Prep</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr />

    <footer class="bg-gray-800 text-white">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">EduPro</h3>
                    <p class="text-gray-400">The complete solution for modern school management.</p>
                </div>
                <div>
                    <h3 class="font-semibold mb-4">Quick Links</h3>
                    <ul>
                        <li class="mb-2"><a href="#features" class="hover:text-indigo-400">Features</a></li>
                        <li class="mb-2"><a href="#pricing" class="hover:text-indigo-400">Pricing</a></li>
                        <li class="mb-2"><a href="documentation.html" class="hover:text-indigo-400">Documentation</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-4">Legal</h3>
                    <ul>
                        <li class="mb-2"><a href="#" class="hover:text-indigo-400">Privacy Policy</a></li>
                        <li class="mb-2"><a href="#" class="hover:text-indigo-400">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-6 text-center text-gray-500">
                <p>&copy; 2025 EduPro. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>

</html>