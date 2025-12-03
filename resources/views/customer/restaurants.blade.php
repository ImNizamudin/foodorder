<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants - FoodOrder</title>

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
            background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
        }

        .restaurant-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .restaurant-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .category-btn {
            transition: all 0.2s ease;
        }

        .category-btn.active {
            background-color: #22c55e;
            color: white;
        }

        .restaurant-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            z-index: 10;
        }

        .restaurant-image {
            height: 180px;
            object-fit: cover;
            width: 100%;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, transparent 50%, rgba(0,0,0,0.7));
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
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
                    <a href="{{ route('landing.restaurants') }}" class="text-primary-600 font-semibold">Restaurants</a>
                    <a href="{{ route('landing.how-it-works') }}" class="text-gray-600 hover:text-primary-600 font-medium">How It Works</a>
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Discover Amazing Restaurants</h1>
                <p class="text-xl text-green-100 mb-8 max-w-3xl mx-auto">
                    Explore hundreds of top-rated restaurants offering delicious food for every taste
                </p>

                <!-- Search Bar -->
                <div class="bg-white rounded-2xl p-2 shadow-lg max-w-3xl mx-auto mb-8">
                    <div class="flex flex-col sm:flex-row gap-2">
                        <div class="flex-1 flex items-center px-4">
                            <i class='bx bx-search text-gray-400 text-xl mr-3'></i>
                            <input type="text" placeholder="Search restaurants by name or cuisine..."
                                   class="w-full py-3 text-gray-700 placeholder-gray-400 focus:outline-none">
                        </div>
                        <div class="flex-1 flex items-center px-4 border-l border-gray-200">
                            <i class='bx bx-map text-gray-400 text-xl mr-3'></i>
                            <input type="text" placeholder="Your location..."
                                   class="w-full py-3 text-gray-700 placeholder-gray-400 focus:outline-none">
                        </div>
                        <button class="bg-primary-500 hover:bg-primary-600 text-white px-8 py-3 rounded-xl font-semibold transition whitespace-nowrap">
                            Search Restaurants
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-8 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Popular Categories</h2>

            <div class="flex flex-wrap gap-3 mb-8">
                <button class="category-btn active px-6 py-2 bg-primary-500 text-white rounded-full font-medium">
                    All Restaurants
                </button>
                @foreach(['🍔 Fast Food', '🍛 Indonesian', '🍣 Japanese', '🍕 Italian', '🥗 Healthy', '🍰 Desserts', '☕ Coffee', '🍗 Chicken'] as $category)
                <button class="category-btn px-6 py-2 bg-white border border-gray-300 text-gray-700 rounded-full font-medium hover:border-primary-500 hover:text-primary-600">
                    {{ $category }}
                </button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Restaurants Grid -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Featured Restaurants</h2>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Sort by:</span>
                    <select class="border border-gray-300 rounded-lg px-4 py-2 text-gray-700 focus:outline-none focus:border-primary-500">
                        <option>Popularity</option>
                        <option>Rating</option>
                        <option>Delivery Time</option>
                        <option>Price: Low to High</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach([
                    [
                        'name' => 'Warung Padang Sederhana',
                        'cuisine' => 'Indonesian • Padang',
                        'rating' => '4.8',
                        'reviews' => '1.2k',
                        'delivery_time' => '20-30 min',
                        'delivery_fee' => 'Rp 5,000',
                        'min_order' => 'Rp 25,000',
                        'image' => 'https://images.unsplash.com/photo-1546833999-b9f581a1996d?auto=format&fit=crop&w=600&h=400&q=80',
                        'promo' => true
                    ],
                    [
                        'name' => 'Burger King Premium',
                        'cuisine' => 'Western • Fast Food',
                        'rating' => '4.5',
                        'reviews' => '2.3k',
                        'delivery_time' => '15-25 min',
                        'delivery_fee' => 'Rp 7,000',
                        'min_order' => 'Rp 30,000',
                        'image' => 'https://images.unsplash.com/photo-1571091718767-18b5b1457add?auto=format&fit=crop&w=600&h=400&q=80',
                        'promo' => true
                    ],
                    [
                        'name' => 'Sushi Master Tokyo',
                        'cuisine' => 'Japanese • Sushi',
                        'rating' => '4.9',
                        'reviews' => '890',
                        'delivery_time' => '25-35 min',
                        'delivery_fee' => 'Rp 8,000',
                        'min_order' => 'Rp 40,000',
                        'image' => 'https://images.unsplash.com/photo-1579584425555-c3ce17fd4351?auto=format&fit=crop&w=600&h=400&q=80',
                        'promo' => false
                    ],
                    [
                        'name' => 'Pizza Italia Original',
                        'cuisine' => 'Italian • Pizza',
                        'rating' => '4.6',
                        'reviews' => '1.5k',
                        'delivery_time' => '20-30 min',
                        'delivery_fee' => 'Rp 6,000',
                        'min_order' => 'Rp 35,000',
                        'image' => 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=600&h=400&q=80',
                        'promo' => true
                    ],
                    [
                        'name' => 'Healthy Bowls Cafe',
                        'cuisine' => 'Healthy • Salad',
                        'rating' => '4.7',
                        'reviews' => '650',
                        'delivery_time' => '15-20 min',
                        'delivery_fee' => 'Rp 5,000',
                        'min_order' => 'Rp 30,000',
                        'image' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=600&h=400&q=80',
                        'promo' => false
                    ],
                    [
                        'name' => 'Dessert Paradise',
                        'cuisine' => 'Desserts • Cakes',
                        'rating' => '4.8',
                        'reviews' => '980',
                        'delivery_time' => '30-40 min',
                        'delivery_fee' => 'Rp 10,000',
                        'min_order' => 'Rp 20,000',
                        'image' => 'https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?auto=format&fit=crop&w=600&h=400&q=80',
                        'promo' => true
                    ],
                    [
                        'name' => 'Nasi Goreng Spesial',
                        'cuisine' => 'Indonesian • Fried Rice',
                        'rating' => '4.7',
                        'reviews' => '1.1k',
                        'delivery_time' => '15-25 min',
                        'delivery_fee' => 'Rp 4,000',
                        'min_order' => 'Rp 20,000',
                        'image' => 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=600&h=400&q=80',
                        'promo' => true
                    ],
                    [
                        'name' => 'Steak House Premium',
                        'cuisine' => 'Western • Steak',
                        'rating' => '4.9',
                        'reviews' => '750',
                        'delivery_time' => '30-40 min',
                        'delivery_fee' => 'Rp 12,000',
                        'min_order' => 'Rp 50,000',
                        'image' => 'https://images.unsplash.com/photo-1600891964092-4316c288032e?auto=format&fit=crop&w=600&h=400&q=80',
                        'promo' => false
                    ],
                    [
                        'name' => 'Ramen Noodle House',
                        'cuisine' => 'Japanese • Ramen',
                        'rating' => '4.6',
                        'reviews' => '920',
                        'delivery_time' => '20-30 min',
                        'delivery_fee' => 'Rp 7,000',
                        'min_order' => 'Rp 30,000',
                        'image' => 'https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=600&h=400&q=80',
                        'promo' => true
                    ]
                ] as $restaurant)
                <div class="restaurant-card bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden relative">
                    <!-- Restaurant Image with Overlay -->
                    <div class="relative">
                        <img src="{{ $restaurant['image'] }}"
                             alt="{{ $restaurant['name'] }}"
                             class="restaurant-image"
                             onerror="this.src='https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=600&h=400&q=80'">
                        <div class="image-overlay"></div>

                        <!-- Rating Badge -->
                        <div class="absolute bottom-4 left-4 flex items-center bg-black bg-opacity-70 text-white px-3 py-1 rounded-full">
                            <i class='bx bxs-star text-yellow-400 text-sm mr-1'></i>
                            <span class="font-bold">{{ $restaurant['rating'] }}</span>
                            <span class="text-xs ml-1">({{ $restaurant['reviews'] }})</span>
                        </div>

                        <!-- Promotion Badge -->
                        @if($restaurant['promo'])
                        <div class="restaurant-badge">
                            <span class="bg-primary-500 text-white text-xs font-semibold px-3 py-1 rounded-full">
                                PROMO
                            </span>
                        </div>
                        @endif
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $restaurant['name'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $restaurant['cuisine'] }}</p>

                        <div class="flex items-center text-gray-600 text-sm space-x-4 mb-4">
                            <div class="flex items-center">
                                <i class='bx bx-time text-gray-400 mr-2'></i>
                                <span>{{ $restaurant['delivery_time'] }}</span>
                            </div>
                            <div class="flex items-center">
                                <i class='bx bx-dollar-circle text-gray-400 mr-2'></i>
                                <span>{{ $restaurant['delivery_fee'] }}</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-gray-100 flex justify-between items-center">
                            <div>
                                <p class="text-gray-500 text-sm">Min. Order</p>
                                <p class="font-semibold text-gray-900">{{ $restaurant['min_order'] }}</p>
                            </div>
                            <a href="{{ route('register') }}"
                               class="bg-primary-500 hover:bg-primary-600 text-white px-6 py-2 rounded-lg font-medium transition flex items-center transform hover:scale-105">
                                <i class='bx bx-food-menu mr-2'></i>
                                View Menu
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="flex justify-center items-center space-x-2 mt-12">
                <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-lg text-gray-600 hover:border-primary-500 hover:text-primary-600 hover:bg-gray-50 transition">
                    <i class='bx bx-chevron-left'></i>
                </button>
                <button class="w-10 h-10 flex items-center justify-center bg-primary-500 text-white rounded-lg font-medium hover:bg-primary-600 transition">1</button>
                <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-lg text-gray-600 hover:border-primary-500 hover:text-primary-600 hover:bg-gray-50 transition">2</button>
                <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-lg text-gray-600 hover:border-primary-500 hover:text-primary-600 hover:bg-gray-50 transition">3</button>
                <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-lg text-gray-600 hover:border-primary-500 hover:text-primary-600 hover:bg-gray-50 transition">4</button>
                <button class="w-10 h-10 flex items-center justify-center border border-gray-300 rounded-lg text-gray-600 hover:border-primary-500 hover:text-primary-600 hover:bg-gray-50 transition">
                    <i class='bx bx-chevron-right'></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gradient-to-r from-primary-500 to-primary-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="text-4xl font-bold mb-2">200+</p>
                    <p class="opacity-90">Restaurants</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">10K+</p>
                    <p class="opacity-90">Happy Customers</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">15-30</p>
                    <p class="opacity-90">Min Delivery</p>
                </div>
                <div>
                    <p class="text-4xl font-bold mb-2">98%</p>
                    <p class="opacity-90">Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Order With Us?</h2>
                <p class="text-gray-600 text-lg">We provide the best experience for both customers and restaurants</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-primary-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-check-shield text-3xl text-primary-600'></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Verified Restaurants</h3>
                    <p class="text-gray-600">All restaurants are thoroughly vetted for quality, hygiene, and customer satisfaction</p>
                </div>

                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-timer text-3xl text-blue-600'></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Real-time Tracking</h3>
                    <p class="text-gray-600">Track your order from kitchen to doorstep with our live tracking system</p>
                </div>

                <div class="bg-white rounded-2xl p-8 text-center shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-support text-3xl text-purple-600'></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">24/7 Support</h3>
                    <p class="text-gray-600">Our customer support team is always ready to help with any issues</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-r from-accent-orange to-accent-amber">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
            <h2 class="text-3xl font-bold mb-4">Ready to Order Your Favorite Food?</h2>
            <p class="text-orange-100 text-xl mb-8">Join thousands of satisfied customers today</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}" class="bg-white text-orange-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-orange-50 transition transform hover:scale-105">
                    Get Started Free
                </a>
                <a href="{{ route('login') }}" class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white hover:text-orange-600 transition transform hover:scale-105">
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
                        <li><a href="{{ route('landing.home') }}" class="hover:text-white transition">Home</a></li>
                        <li><a href="{{ route('landing.restaurants') }}" class="text-white font-medium">Restaurants</a></li>
                        <li><a href="{{ route('landing.how-it-works') }}" class="hover:text-white transition">How It Works</a></li>
                        <li><a href="{{ route('landing.about-us') }}" class="hover:text-white transition">About Us</a></li>
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
                        <button class="w-full bg-gray-800 hover:bg-gray-700 text-white py-3 px-4 rounded-lg transition flex items-center justify-center space-x-2 hover:scale-105">
                            <i class='bx bxl-play-store text-xl'></i>
                            <span>Google Play</span>
                        </button>
                        <button class="w-full bg-gray-800 hover:bg-gray-700 text-white py-3 px-4 rounded-lg transition flex items-center justify-center space-x-2 hover:scale-105">
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
        // Category filter functionality
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.category-btn').forEach(btn => {
                    btn.classList.remove('active', 'bg-primary-500', 'text-white');
                    btn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-700');
                });

                // Add active class to clicked button
                this.classList.remove('bg-white', 'border', 'border-gray-300', 'text-gray-700');
                this.classList.add('active', 'bg-primary-500', 'text-white');
            });
        });
    </script>
</body>
</html>
