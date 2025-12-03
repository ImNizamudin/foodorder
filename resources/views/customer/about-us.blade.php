<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - FoodOrder</title>

    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        accent: {
                            orange: '#fb923c',
                            blue: '#3b82f6',
                            purple: '#8b5cf6',
                            amber: '#f59e0b'
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .hero-bg {
            background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        }

        .team-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .mission-icon {
            transition: transform 0.3s ease;
        }

        .mission-card:hover .mission-icon {
            transform: scale(1.1);
        }

        .stats-card {
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
        }
    </style>
</head>
<body class="font-poppins bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center">
                        <div class="w-10 h-10 bg-primary-500 rounded-xl flex items-center justify-center">
                            <i class='bx bx-restaurant text-2xl text-white'></i>
                        </div>
                        <div class="ml-3">
                            <h1 class="text-xl font-bold text-gray-900">FoodOrder</h1>
                        </div>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('landing.home') }}" class="text-gray-600 hover:text-primary-600 font-medium">Home</a>
                    <a href="{{ route('landing.restaurants') }}" class="text-gray-600 hover:text-primary-600 font-medium">Restaurants</a>
                    <a href="{{ route('landing.how-it-works') }}" class="text-gray-600 font-medium">How It Works</a>
                    <a href="{{ route('landing.about-us') }}" class="text-primary-600 hover:text-primary-600 font-medium">About Us</a>
                </div>

                <!-- Auth Buttons -->
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-primary-600 font-medium">Login</a>
                    <a href="{{ route('register') }}" class="bg-primary-500 hover:bg-primary-600 text-white px-6 py-2 rounded-lg font-medium transition">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">About FoodOrder</h1>
                <p class="text-xl text-purple-100 mb-8 max-w-3xl mx-auto">
                    We're on a mission to connect people with their favorite food, delivered fast and fresh
                </p>
            </div>
        </div>
    </section>

    <!-- Our Story -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        FoodOrder was founded in 2024 with a simple idea: make food ordering as easy as possible.
                        What started as a small project has grown into a platform serving thousands of customers daily.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        We believe that good food should be accessible to everyone, anytime. That's why we've built
                        a network of the best restaurants and partnered with reliable delivery partners to ensure
                        your food arrives hot, fresh, and on time.
                    </p>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <i class='bx bx-check-circle text-primary-600 text-xl mr-2'></i>
                            <span class="text-gray-700">100% Customer Satisfaction</span>
                        </div>
                        <div class="flex items-center">
                            <i class='bx bx-check-circle text-primary-600 text-xl mr-2'></i>
                            <span class="text-gray-700">24/7 Support</span>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-primary-500 to-primary-700 rounded-2xl p-8 text-white">
                        <div class="text-6xl mb-6">🍔</div>
                        <h3 class="text-2xl font-bold mb-4">Serving Since 2024</h3>
                        <p class="opacity-90 mb-6">
                            Delivering happiness one order at a time
                        </p>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="text-center">
                                <p class="text-2xl font-bold">10K+</p>
                                <p class="text-sm opacity-90">Orders Served</p>
                            </div>
                            <div class="text-center">
                                <p class="text-2xl font-bold">200+</p>
                                <p class="text-sm opacity-90">Restaurants</p>
                            </div>
                            <div class="text-center">
                                <p class="text-2xl font-bold">98%</p>
                                <p class="text-sm opacity-90">Happy Customers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Mission & Values</h2>
                <p class="text-gray-600 text-lg">What drives us every day</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach([
                    [
                        'icon' => '🚀',
                        'title' => 'Fast Delivery',
                        'description' => 'We ensure your food arrives hot and fresh within 30 minutes or less',
                        'color' => 'bg-blue-100'
                    ],
                    [
                        'icon' => '💚',
                        'title' => 'Quality First',
                        'description' => 'Partnering with the best restaurants to maintain high food standards',
                        'color' => 'bg-green-100'
                    ],
                    [
                        'icon' => '🤝',
                        'title' => 'Customer Focus',
                        'description' => 'Your satisfaction is our top priority. We listen and improve continuously',
                        'color' => 'bg-purple-100'
                    ]
                ] as $value)
                <div class="mission-card bg-white rounded-2xl p-8 text-center shadow-sm border border-gray-100">
                    <div class="{{ $value['color'] }} w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <span class="mission-icon text-4xl">{{ $value['icon'] }}</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $value['title'] }}</h3>
                    <p class="text-gray-600">{{ $value['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                <p class="text-gray-600 text-lg">The people behind FoodOrder's success</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach([
                    [
                        'name' => 'Budi Santoso',
                        'role' => 'CEO & Founder',
                        'bio' => 'Food enthusiast with 10+ years in tech industry',
                        'avatar' => '👨‍💼',
                        'color' => 'bg-blue-50'
                    ],
                    [
                        'name' => 'Sari Wijaya',
                        'role' => 'CTO',
                        'bio' => 'Tech lead with passion for scalable solutions',
                        'avatar' => '👩‍💻',
                        'color' => 'bg-green-50'
                    ],
                    [
                        'name' => 'Ahmad Rizki',
                        'role' => 'Head of Operations',
                        'bio' => 'Ensuring smooth delivery operations',
                        'avatar' => '🚚',
                        'color' => 'bg-orange-50'
                    ],
                    [
                        'name' => 'Maya Putri',
                        'role' => 'Customer Success',
                        'bio' => 'Dedicated to customer satisfaction',
                        'avatar' => '💁‍♀️',
                        'color' => 'bg-purple-50'
                    ]
                ] as $member)
                <div class="team-card bg-white rounded-2xl p-6 text-center shadow-sm border border-gray-100">
                    <div class="{{ $member['color'] }} w-24 h-24 rounded-2xl flex items-center justify-center text-4xl mx-auto mb-4">
                        {{ $member['avatar'] }}
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-1">{{ $member['name'] }}</h3>
                    <p class="text-primary-600 font-medium mb-3">{{ $member['role'] }}</p>
                    <p class="text-gray-600 text-sm">{{ $member['bio'] }}</p>

                    <div class="flex justify-center space-x-3 mt-4">
                        <a href="#" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-primary-500 hover:text-white transition">
                            <i class='bx bxl-linkedin text-sm'></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-primary-500 hover:text-white transition">
                            <i class='bx bxl-twitter text-sm'></i>
                        </a>
                        <a href="#" class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-primary-500 hover:text-white transition">
                            <i class='bx bxl-instagram text-sm'></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Achievements -->
    <section class="py-16 stats-card text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                @foreach([
                    ['number' => '10,000+', 'label' => 'Orders Delivered'],
                    ['number' => '200+', 'label' => 'Restaurant Partners'],
                    ['number' => '15+', 'label' => 'Cities Served'],
                    ['number' => '98%', 'label' => 'Customer Satisfaction']
                ] as $stat)
                <div class="text-center">
                    <p class="text-4xl font-bold mb-2">{{ $stat['number'] }}</p>
                    <p class="opacity-90">{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Join Us Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl p-8 md:p-12 shadow-sm border border-gray-100">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Join Our Journey</h2>
                    <p class="text-gray-600">We're always looking for talented people to join our team</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    @foreach(['👨‍💻 Software Engineer', '🚚 Delivery Partner', '🏪 Restaurant Partner'] as $role)
                    <div class="bg-gray-50 rounded-xl p-6 text-center border border-gray-200">
                        <div class="text-3xl mb-4">{{ explode(' ', $role)[0] }}</div>
                        <h3 class="font-semibold text-gray-900 mb-2">{{ substr($role, 2) }}</h3>
                        <p class="text-gray-600 text-sm mb-4">Join our growing team</p>
                        <button class="text-primary-600 hover:text-primary-700 font-medium">
                            Learn More →
                        </button>
                    </div>
                    @endforeach
                </div>

                <div class="text-center">
                    <p class="text-gray-600 mb-6">Want to partner with us or have questions?</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="mailto:partners@foodorder.com"
                           class="bg-primary-500 hover:bg-primary-600 text-white px-8 py-3 rounded-xl font-semibold transition inline-block">
                            Become a Partner
                        </a>
                        <a href="mailto:contact@foodorder.com"
                           class="border border-primary-500 text-primary-600 px-8 py-3 rounded-xl font-semibold transition inline-block hover:bg-primary-50">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-primary-500 rounded-xl flex items-center justify-center">
                            <i class='bx bx-restaurant text-2xl text-white'></i>
                        </div>
                        <div class="ml-3">
                            <h1 class="text-xl font-bold">FoodOrder</h1>
                        </div>
                    </div>
                    <p class="text-gray-400">Delivering happiness to your doorstep</p>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Company</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/" class="hover:text-white transition">Home</a></li>
                        <li><a href="/restaurants" class="hover:text-white transition">Restaurants</a></li>
                        <li><a href="/how-it-works" class="hover:text-white transition">How It Works</a></li>
                        <li><a href="/about-us" class="text-white font-medium">About Us</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Support</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white transition">Terms of Service</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="font-semibold mb-4">Download App</h3>
                    <div class="space-y-3">
                        <button class="w-full bg-gray-800 hover:bg-gray-700 text-white py-3 px-4 rounded-lg transition flex items-center justify-center space-x-2">
                            <i class='bx bxl-play-store text-xl'></i>
                            <span>Google Play</span>
                        </button>
                        <button class="w-full bg-gray-800 hover:bg-gray-700 text-white py-3 px-4 rounded-lg transition flex items-center justify-center space-x-2">
                            <i class='bx bxl-apple text-xl'></i>
                            <span>App Store</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 FoodOrder. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Alpine JS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
