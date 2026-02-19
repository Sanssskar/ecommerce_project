<section>
    @push('style')
        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    @endpush
    <!-- TOP BAR - using primary color -->
    <div
        class="w-full bg-(--primary) text-(--text)/80 text-sm py-2 px-4 sm:px-8 flex flex-wrap items-center justify-between gap-2">
        <!-- left: email with icon -->
        <div class="flex items-center gap-4">
            <a href="mailto:hello@pulse.io" class="flex items-center gap-2 hover:text-(--text) transition-colors">
                <i class="fa-regular fa-envelope text-(--text)/60"></i>
                <span class=" xs:inline">tiger@example.com</span>
            </a>
        </div>
        <!-- right: social links -->
        <div class="flex items-center gap-3 sm:gap-4">
            <a href="#" class="hover:text-(--text) transition-transform hover:scale-110" aria-label="Twitter"><i
                    class="fa-brands fa-twitter"></i></a>
            <a href="#" class="hover:text-(--text) transition-transform hover:scale-110" aria-label="LinkedIn"><i
                    class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" class="hover:text-(--text) transition-transform hover:scale-110" aria-label="GitHub"><i
                    class="fa-brands fa-github"></i></a>
            <a href="#" class="hover:text-(--text) transition-transform hover:scale-110" aria-label="Instagram"><i
                    class="fa-brands fa-instagram"></i></a>
            <a href="#" class="hover:text-(--text) transition-transform hover:scale-110" aria-label="YouTube"><i
                    class="fa-brands fa-youtube"></i></a>
        </div>
    </div>

    <!-- MAIN HEADER (sticky) with logo, search, login, cart -->
    <header
        class="sticky top-0 z-30 w-full backdrop-blur-xl bg-white/75 border-b border-(--text)/10 shadow-sm px-4 sm:px-8 py-3 flex flex-wrap items-center justify-between gap-3">

        <!-- brand logo + wordmark -->
        <a href="#" class="flex items-center gap-2.5 group shrink-0">
            <div class="ml-10">
                <img class="h-[70px]" src="{{ asset(Storage::url('logomain.png')) }}" alt="SanskarHuB">
            </div>
        </a>

        <!-- search bar (functional) -->
        <div class="flex-1 max-w-xl w-full order-last sm:order-none basis-full sm:basis-auto mt-2 sm:mt-0">
            <div
                class="relative flex items-center bg-white/90 text-(--text) rounded-full pl-5 pr-1 py-1 border border-(--text)/10 shadow-inner shadow-(--text)/5 focus-within:shadow-md focus-within:border-(--primary)/30 focus-within:ring-2 focus-within:ring-(--primary)/20 transition-all">
                <i class="fas fa-search text-sm text-(--primary) mr-2"></i>
                <input type="text" id="searchInput" placeholder="Search (type to see below)"
                    class="w-full bg-transparent border-0 focus:ring-0 text-sm sm:text-base py-2.5 pr-2 text-(--text) placeholder-(--text)/40">
                <button id="searchButton"
                    class="bg-(--primary) hover:bg-(--primary)/80 text-white rounded-full w-10 h-10 flex items-center justify-center shadow-sm hover:shadow-md transition-all"
                    aria-label="search">
                    <i class="fas fa-arrow-right text-sm"></i>
                </button>
            </div>
        </div>

        <!-- right side: login button + cart icon -->
        <div class="flex items-center shrink-0 gap-3">
            <button
                class="flex items-center gap-2.5 px-5 py-2.5 rounded-full border border-(--text)/20 bg-white/70 backdrop-blur-sm text-(--text) font-medium text-sm hover:bg-white hover:border-(--primary)/40 hover:text-(--primary) hover:shadow-md transition-all">
                <i class="fas fa-user-circle text-(--primary) text-base"></i>
                <span>Log In</span>
            </button>

            <!-- cart button with counter -->
            <div class="relative group">
                <button id="cartMainBtn"
                    class="flex items-center justify-center w-11 h-11 rounded-full bg-white/90 border border-(--text)/10 shadow-sm hover:bg-(--primary)/10 hover:border-(--primary)/30 transition-all"
                    aria-label="add to cart">
                    <i class="fa-solid fa-bag-shopping text-(--primary) text-xl"></i>
                </button>
                <span id="cartCount"
                    class="absolute -top-1 -right-1 bg-(--primary) text-white text-[10px] font-bold min-w-[1.4rem] h-4 px-1 rounded-full flex items-center justify-center shadow-sm">0</span>
            </div>
        </div>
</section>

<!-- Add search feedback element that was missing -->
<div id="searchFeedback" class="container mx-auto px-4 sm:px-8 mt-4 text-(--text)/60 text-sm hidden"></div>

@push('script')
    <script>
        (function() {
            // elements
            const searchInput = document.getElementById('searchInput');
            const searchBtn = document.getElementById('searchButton');
            const searchFeedback = document.getElementById('searchFeedback');
            const cartCountSpan = document.getElementById('cartCount');
            const cartMainBtn = document.getElementById('cartMainBtn');

            let cartItems = 0;

            function updateCartUI() {
                if (cartCountSpan) cartCountSpan.innerText = cartItems;
            }

            function addOneToCart() {
                cartItems++;
                updateCartUI();
            }

            function updateSearchFeedback() {
                if (!searchFeedback) return;
                const val = searchInput.value.trim();
                searchFeedback.innerText = val === '' ? '—' : `“${val}”`;
                searchFeedback.classList.remove('hidden');
            }

            // initial search feedback
            if (searchInput && searchFeedback) {
                updateSearchFeedback();

                searchInput.addEventListener('input', updateSearchFeedback);
                searchBtn.addEventListener('click', updateSearchFeedback);
                searchInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        updateSearchFeedback();
                    }
                });
            }

            // Add to cart functionality (example - click on cart icon to add items)
            if (cartMainBtn) {
                cartMainBtn.addEventListener('click', function() {
                    addOneToCart();
                });
            }
        })();
    </script>
@endpush

</html>
