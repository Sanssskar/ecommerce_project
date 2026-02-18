<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modern header · topbar social · add to cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <!-- Font Awesome for all icons (email & social) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @push('style')
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    @endpush
</head>
<section>
    <div
        class="w-full bg-(--primary) text-indigo-100 text-sm py-2 px-4 sm:px-8 flex flex-wrap items-center justify-between gap-2">
        <!-- left: email with icon -->
        <div class="flex items-center gap-4">
            <a href="mailto:hello@pulse.io" class="flex items-center gap-2 hover:text-white transition-colors">
                <i class="fa-regular fa-envelope text-indigo-300"></i>
                <span class="hidden xs:inline">hello@pulse.io</span>
            </a>
        </div>
        <!-- right: social links (fontawesome only) -->
        <div class="flex items-center gap-3 sm:gap-4">
            <a href="#" class="hover:text-white transition-transform hover:scale-110" aria-label="Twitter"><i
                    class="fa-brands fa-twitter"></i></a>
            <a href="#" class="hover:text-white transition-transform hover:scale-110" aria-label="LinkedIn"><i
                    class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" class="hover:text-white transition-transform hover:scale-110" aria-label="GitHub"><i
                    class="fa-brands fa-github"></i></a>
            <a href="#" class="hover:text-white transition-transform hover:scale-110" aria-label="Instagram"><i
                    class="fa-brands fa-instagram"></i></a>
            <a href="#" class="hover:text-white transition-transform hover:scale-110" aria-label="YouTube"><i
                    class="fa-brands fa-youtube"></i></a>
        </div>
    </div>

    <!-- MAIN HEADER (sticky) with logo, search, login, cart -->
    <header
        class="sticky top-0 z-30 w-full backdrop-blur-xl bg-white/75 border-b border-white/40 shadow-sm px-4 sm:px-8 py-3 flex flex-wrap items-center justify-between gap-3">

        <!-- brand logo + wordmark -->
        <a href="#" class="flex items-center gap-2.5 group shrink-0">
          <div class="ml-10">
            <img class="h-[70px] " src="{{asset(Storage::url('logomain.png'))}}" alt="SanskarHuB">
          </div>


        </a>

        <!-- search bar (functional) -->
        <div class="flex-1 max-w-xl w-full order-last sm:order-none basis-full sm:basis-auto mt-2 sm:mt-0">
            <div
                class="relative flex items-center bg-white/90 text-slate-800 rounded-full pl-5 pr-1 py-1 border border-slate-200/80 shadow-inner shadow-slate-100 focus-within:shadow-md focus-within:border-indigo-200 focus-within:ring-2 focus-within:ring-indigo-200/50 transition-all">
                <i class="fas fa-search text-sm text-indigo-400 mr-2"></i>
                <input type="text" id="searchInput" placeholder="Search (type to see below)"
                    class="w-full bg-transparent border-0 focus:ring-0 text-sm sm:text-base py-2.5 pr-2 text-slate-700 placeholder-slate-400">
                <button id="searchButton"
                    class="bg-indigo-800 hover:bg-indigo-900 text-white rounded-full w-10 h-10 flex items-center justify-center shadow-sm hover:shadow-md transition-all"
                    aria-label="search">
                    <i class="fas fa-arrow-right text-sm"></i>
                </button>
            </div>
        </div>

        <!-- right side: login button + cart icon -->
        <div class="flex items-center shrink-0 gap-3">
            <button
                class="flex items-center gap-2.5 px-5 py-2.5 rounded-full border border-slate-300/70 bg-white/70 backdrop-blur-sm text-slate-700 font-medium text-sm hover:bg-white hover:border-indigo-300 hover:text-indigo-900 hover:shadow-md transition-all">
                <i class="fas fa-user-circle text-indigo-500 text-base"></i>
                <span>Log In</span>
            </button>

            <!-- cart button with counter (add to cart) -->
            <div class="relative group">
                <button id="cartMainBtn"
                    class="flex items-center justify-center w-11 h-11 rounded-full bg-white/90 border border-slate-200 shadow-sm hover:bg-indigo-50 hover:border-indigo-300 transition-all"
                    aria-label="add to cart">
                    <i class="fa-solid fa-bag-shopping text-indigo-700 text-xl"></i>
                </button>
                <span id="cartCount"
                    class="absolute -top-1 -right-1 bg-indigo-600 text-white text-[10px] font-bold min-w-[1.4rem] h-4 px-1 rounded-full flex items-center justify-center shadow-sm">0</span>
            </div>
        </div>
</section>
@push('script')
    <script>
        (function() {
            // elements
            const searchInput = document.getElementById('searchInput');
            const searchBtn = document.getElementById('searchButton');
            const searchFeedback = document.getElementById('searchFeedback');
            const cartCountSpan = document.getElementById('cartCount');
            const cartValueSpan = document.getElementById('cartValue');
            const addToCartBtn = document.getElementById('addToCartBtn');
            const cartMainBtn = document.getElementById('cartMainBtn');

            let cartItems = 0;

            function updateCartUI() {
                if (cartCountSpan) cartCountSpan.innerText = cartItems;
                if (cartValueSpan) cartValueSpan.innerText = cartItems;
            }

            function addOneToCart() {
                cartItems++;
                updateCartUI();
            }

            function updateSearchFeedback() {
                const val = searchInput.value.trim();
                searchFeedback.innerText = val === '' ? '—' : `“${val}”`;
            }

            // initial search feedback
            updateSearchFeedback();

            searchInput.addEventListener('input', updateSearchFeedback);
            searchBtn.addEventListener('click', updateSearchFeedback);
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    updateSearchFeedback();
                }
            });
        })
    </script>
@endpush

</html>
