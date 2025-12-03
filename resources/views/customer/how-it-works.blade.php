<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How It Works - FoodOrder</title>

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
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }

        .step-card {
            transition: transform 0.2s ease;
        }

        .step-card:hover {
            transform: translateY(-5px);
        }

        .timeline-step {
            position: relative;
        }

        .timeline-step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -40px;
            width: 80px;
            height: 2px;
            background-color: #e5e7eb;
        }

        @media (max-width: 768px) {
            .timeline-step:not(:last-child)::after {
                display: none;
            }
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
                    <a href="{{ route('landing.how-it-works') }}" class="text-primary-600 font-medium">How It Works</a>
                    <a href="{{ route('landing.about-us') }}" class="text-gray-600 hover:text-primary-600 font-medium">About Us</a>
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
                <h1 class="text-4xl md:text-5xl font-bold mb-6">How FoodOrder Works</h1>
                <p class="text-xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    Getting your favorite food delivered has never been easier. Follow these simple steps to start ordering today!
                </p>
            </div>
        </div>
    </section>

    <!-- Steps Timeline -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Order in 4 Easy Steps</h2>
                <p class="text-gray-600 text-lg">From browsing to delivery, we've made the process seamless</p>
            </div>

            <!-- Desktop Timeline -->
            <div class="hidden md:flex justify-between items-center mb-20">
                @foreach([
                    ['number' => '1', 'title' => 'Choose Restaurant', 'icon' => '🏪', 'color' => 'bg-blue-100'],
                    ['number' => '2', 'title' => 'Select Food', 'icon' => '🍔', 'color' => 'bg-green-100'],
                    ['number' => '3', 'title' => 'Checkout', 'icon' => '💳', 'color' => 'bg-purple-100'],
                    ['number' => '4', 'title' => 'Track & Enjoy', 'icon' => '🚚', 'color' => 'bg-orange-100']
                ] as $step)
                <div class="timeline-step flex flex-col items-center text-center relative">
                    <div class="{{ $step['color'] }} w-20 h-20 rounded-2xl flex items-center justify-center text-3xl mb-4">
                        <span class="text-4xl">{{ $step['icon'] }}</span>
                    </div>
                    <div class="w-10 h-10 bg-white border-4 border-primary-500 rounded-full flex items-center justify-center text-primary-600 font-bold text-lg mb-2">
                        {{ $step['number'] }}
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">{{ $step['title'] }}</h3>
                </div>
                @endforeach
            </div>

            <!-- Mobile Steps -->
            <div class="md:hidden space-y-8">
                @foreach([
                    ['number' => '1', 'title' => 'Choose Restaurant', 'icon' => '🏪', 'color' => 'bg-blue-100', 'description' => 'Browse through hundreds of restaurants in your area and choose your favorite'],
                    ['number' => '2', 'title' => 'Select Food', 'icon' => '🍔', 'color' => 'bg-green-100', 'description' => 'Explore the menu, customize your order, and add items to your cart'],
                    ['number' => '3', 'title' => 'Checkout', 'icon' => '💳', 'color' => 'bg-purple-100', 'description' => 'Enter your delivery address, choose payment method, and place your order'],
                    ['number' => '4', 'title' => 'Track & Enjoy', 'icon' => '🚚', 'color' => 'bg-orange-100', 'description' => 'Track your order in real-time and enjoy delicious food delivered to your door']
                ] as $step)
                <div class="step-card bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="{{ $step['color'] }} w-16 h-16 rounded-2xl flex items-center justify-center text-3xl">
                                <span class="text-4xl">{{ $step['icon'] }}</span>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="w-8 h-8 bg-primary-500 rounded-full flex items-center justify-center text-white font-bold text-sm mr-3">
                                    {{ $step['number'] }}
                                </div>
                                <h3 class="font-bold text-gray-900 text-lg">{{ $step['title'] }}</h3>
                            </div>
                            <p class="text-gray-600">{{ $step['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Detailed Steps -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @foreach([
                [
                    'title' => 'Step 1: Find Your Perfect Restaurant',
                    'subtitle' => 'Browse & Discover',
                    'description' => 'Explore our wide selection of restaurants, filter by cuisine, rating, or delivery time, and find the perfect place for your meal.',
                    'icon' => '🔍',
                    'color' => 'from-blue-400 to-blue-600',
                    'features' => ['Search by name or cuisine', 'Filter by dietary preferences', 'Read customer reviews', 'View restaurant ratings']
                ],
                [
                    'title' => 'Step 2: Customize Your Order',
                    'subtitle' => 'Build Your Meal',
                    'description' => 'Browse restaurant menus, customize dishes to your liking, and add special instructions for preparation.',
                    'icon' => '🍽️',
                    'color' => 'from-green-400 to-green-600',
                    'features' => ['View detailed menus with photos', 'Customize ingredients', 'Add special instructions', 'Save favorites for later']
                ],
                [
                    'title' => 'Step 3: Secure Checkout',
                    'subtitle' => 'Quick & Safe Payment',
                    'description' => 'Enter your delivery address, choose from multiple payment options, and complete your order securely.',
                    'icon' => '💳',
                    'color' => 'from-purple-400 to-purple-600',
                    'features' => ['Multiple payment methods', 'Save delivery addresses', 'Apply promo codes', 'Split payment options']
                ],
                [
                    'title' => 'Step 4: Track & Receive',
                    'subtitle' => 'Real-time Delivery',
                    'description' => 'Track your order from kitchen to doorstep with our live tracking system and receive your food hot and fresh.',
                    'icon' => '📱',
                    'color' => 'from-orange-400 to-orange-600',
                    'features' => ['Live order tracking', 'Driver location updates', 'Estimated arrival time', 'Delivery proof']
                ]
            ] as $step)
            <div class="mb-16 last:mb-0">
                <div class="flex flex-col lg:flex-row items-center gap-8">
                    <div class="lg:w-1/3">
                        <div class="bg-gradient-to-br {{ $step['color'] }} text-white rounded-2xl p-8 text-center h-full">
                            <div class="text-6xl mb-6">{{ $step['icon'] }}</div>
                            <h3 class="text-2xl font-bold mb-2">{{ $step['title'] }}</h3>
                            <p class="opacity-90">{{ $step['subtitle'] }}</p>
                        </div>
                    </div>

                    <div class="lg:w-2/3">
                        <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
                            <h4 class="text-xl font-bold text-gray-900 mb-4">{{ $step['title'] }}</h4>
                            <p class="text-gray-600 mb-6">{{ $step['description'] }}</p>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                @foreach($step['features'] as $feature)
                                <div class="flex items-center">
                                    <i class='bx bx-check text-green-500 text-xl mr-3'></i>
                                    <span class="text-gray-700">{{ $feature }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 text-lg">Got questions? We've got answers!</p>
            </div>

            <div class="space-y-4">
                @foreach([
                    [
                        'question' => 'How long does delivery take?',
                        'answer' => 'Delivery times vary based on restaurant preparation time and distance, but typically range from 20-40 minutes. You can see estimated delivery time before placing your order.'
                    ],
                    [
                        'question' => 'What payment methods do you accept?',
                        'answer' => 'We accept credit/debit cards, digital wallets (OVO, GoPay, DANA), bank transfers, and cash on delivery for added convenience.'
                    ],
                    [
                        'question' => 'Can I customize my order?',
                        'answer' => 'Yes! Most restaurants allow customization. You can add special instructions, request extra ingredients, or make substitutions during the ordering process.'
                    ],
                    [
                        'question' => 'How do I track my order?',
                        'answer' => 'Once your order is confirmed, you can track it in real-time through your account dashboard. You\'ll see updates from "Order Placed" to "Out for Delivery" and finally "Delivered".'
                    ],
                    [
                        'question' => 'What if there\'s an issue with my order?',
                        'answer' => 'If there\'s any issue with your order, please contact our 24/7 customer support immediately. We\'ll work with the restaurant to resolve the issue promptly.'
                    ]
                ] as $faq)
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                    <button class="flex justify-between items-center w-full text-left" onclick="toggleFAQ(this)">
                        <h3 class="font-semibold text-gray-900 text-lg">{{ $faq['question'] }}</h3>
                        <i class='bx bx-chevron-down text-gray-500 text-xl transition-transform'></i>
                    </button>
                    <div class="mt-4 text-gray-600 hidden">
                        {{ $faq['answer'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-accent-orange to-accent-amber">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h2 class="text-3xl font-bold mb-4">Ready to Start Ordering?</h2>
            <p class="text-orange-100 text-xl mb-8">Join thousands of satisfied customers today</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="bg-white text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-orange-50 transition">
                    Get Started Free
                </a>
                <a href="{{ route('login') }}" class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:text-orange-600 transition">
                    Sign In
                </a>
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
                        <li><a href="/how-it-works" class="text-white font-medium">How It Works</a></li>
                        <li><a href="/about-us" class="hover:text-white transition">About Us</a></li>
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

    <script>
        // FAQ toggle functionality
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('i');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.style.transform = 'rotate(180deg)';
            } else {
                content.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }

        // Initialize FAQ functionality
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('[onclick^="toggleFAQ"]').forEach(button => {
                button.addEventListener('click', function() {
                    toggleFAQ(this);
                });
            });
        });
    </script>
</body>
</html>
