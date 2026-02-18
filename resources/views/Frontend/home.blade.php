<x-frontend-layout>
    @push('style')
        <style>
            body {
                font-family: 'Inter', sans-serif;
                background: #f8fafc;
            }

            @keyframes float {
                0% {
                    transform: translateY(0px);
                }

                50% {
                    transform: translateY(-8px);
                }

                100% {
                    transform: translateY(0px);
                }
            }

            .float-icon {
                animation: float 5s ease-in-out infinite;
            }

            .hover-card {
                transition: all 0.3s ease;
            }

            .hover-card:hover {
                transform: translateY(-4px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.02);
            }
        </style>
    @endpush

    <!-- MODERN FORM SECTION - WITH TERMS CHECKBOX CONTROL -->
    <section
        class="p-20 container mx-auto bg-gray-200 rounded-3xl shadow-xl overflow-hidden flex flex-col lg:flex-row border border-slate-200">

        <!-- LEFT: solid indigo background (no gradient) -->
        <div class="lg:w-1/2 bg-(--primary) p-10 xl:p-12 flex flex-col justify-between relative">
            <div class="relative z-10">
                <h2 class="text-4xl md:text-5xl font-bold text-(--text) leading-tight tracking-tight">grow your <br>business
                    with us</h2>
                <p class="text-indigo-100 text-lg mt-6 max-w-md leading-relaxed">
                    Join a network of modern restaurants and local stores. Get discovered by thousands of customers
                    daily.
                </p>
                <div class="mt-10 space-y-4">
                    <div class="flex items-center gap-4 text-indigo-100">
                        <div class="w-8 h-8 bg-(--secondary) rounded-full flex items-center justify-center">
                            <i class="fa-regular fa-circle-check text-(--text) text-sm"></i>
                        </div>
                        <span class="text-(--text)/90 font-medium">no setup fees · pay as you grow</span>
                    </div>
                    <div class="flex items-center gap-4 text-indigo-100">
                        <div class="w-8 h-8 bg-(--secondary) rounded-full flex items-center justify-center">
                            <i class="fa-regular fa-clock text-(--text) text-sm"></i>
                        </div>
                        <span class="text-(--text)/90 font-medium">dedicated account manager</span>
                    </div>
                    <div class="flex items-center gap-4 text-indigo-100">
                        <div class="w-8 h-8 bg-(--secondary) rounded-full flex items-center justify-center">
                            <i class="fa-regular fa-chart-line text-(--text) text-sm"></i>
                        </div>
                        <span class="text-(--text)/90 font-medium">real-time sales & traffic insights</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT: clean form with solid backgrounds & terms checkbox -->
        <div class="lg:w-1/2 p-10 xl:p-12 bg-white">
            <div class="mb-8">
                <h3 class="text-3xl font-semibold text-slate-800 tracking-tight">Request Form</h3>
                <p class="text-slate-400 text-sm mt-1.5 flex items-center gap-1">
                    <i class="fa-solid fa-frog text-indigo-400"></i> Fill the form and join us in our long adventure!
                </p>
            </div>

            @if ($errors->any())
                <div class="bg-white text-red-500 px-4 py-2 ">
                    <ul class="list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="space-y-5" action="{{ route('client-request') }}" method="POST">
                @csrf
                <!-- row: shop name & contact -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1.5">
                            <i class="fa-regular fa-store mr-2 text-indigo-400"></i>Client name <span
                                class="text-red-500 mx-2">*</span>
                        </label>

                        <input type="text" placeholder="e.g. Sanskar Dai"
                            class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 transition-all text-slate-700">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1.5">
                            <i class="fa-regular fa-store mr-2 text-indigo-400"></i>Shop name <span
                                class="text-red-500 mx-2">*</span>
                        </label>
                        <input type="text" placeholder="e.g. Dhedo Dokan"
                            class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 transition-all text-slate-700">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1.5">
                            <i class="fa-regular fa-phone mr-2 text-indigo-400"></i>Contact <span
                                class="text-red-500 mx-2">*</span>
                        </label>
                        <input type="tel" placeholder="9814351861"
                            class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 transition-all">
                    </div>
                </div>

                <!-- email & password -->

                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-1.5">
                        <i class="fa-regular fa-envelope mr-2 text-indigo-400"></i>E-mail <span
                            class="text-red-500 mx-2">*</span>
                    </label>
                    <input type="email" placeholder="owner@restaurant.com"
                        class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 transition-all">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-1.5">
                        <i class="fa-regular fa-lock mr-2 text-indigo-400"></i>Password <span
                            class="text-red-500 mx-2">*</span>
                    </label>
                    <input type="password" placeholder="xxxxxxx" minlength="8"
                        class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 transition-all">
                </div>


                <!-- address -->
                <div>
                    <label class="block text-sm font-medium text-slate-600 mb-1.5">
                        <i class="fa-regular fa-location-dot mr-2 text-indigo-400"></i>Address <span
                            class="text-red-500 mx-2">*</span>
                    </label>
                    <input type="text" placeholder="street, city, postal code"
                        class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 transition-all">
                </div>

                <!-- logo + expiry -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- logo upload -->
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1.5">
                            <i class="fa-regular fa-image mr-2 text-indigo-400"></i>Logo (optional)
                        </label>
                        <div class="relative">
                            <input type="file" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer"
                                id="logoUpload">
                            <div
                                class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white flex items-center gap-3 text-slate-500 hover:bg-slate-50 transition-colors">
                                <i class="fa-regular fa-cloud-upload-alt text-indigo-400"></i>
                                <span class="text-sm truncate">Upload image</span>
                            </div>
                        </div>
                    </div>
                    <!-- expiry date -->
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1.5">
                            <i class="fa-regular fa-calendar mr-2 text-indigo-400"></i>Expiry date (optional)
                        </label>
                        <input type="date"
                            class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-indigo-400 focus:ring-2 focus:ring-indigo-100 transition-all text-slate-600">
                    </div>
                </div>

                <!-- TERMS CHECKBOX - disabling submit until checked -->
                <div class="flex items-start gap-3 p-4 bg-slate-50 rounded-xl border border-slate-200">
                    <div class="flex items-center h-5">
                        <input type="checkbox" id="termsCheckbox"
                            class="w-4 h-4 text-indigo-600 border-slate-300 rounded focus:ring-indigo-500 transition-all">
                    </div>
                    <label for="termsCheckbox" class="text-sm text-slate-600 leading-relaxed">
                        I agree to the <a href="#" class="text-indigo-600 font-medium hover:underline">Terms of
                            Service</a> and
                        <a href="#" class="text-indigo-600 font-medium hover:underline">Privacy Policy</a>. By
                        checking this box, you confirm that you have read and understood our policies.
                    </label>
                </div>

                <!-- submit button (disabled by default) -->
                <button type="submit" id="submitBtn" disabled
                    class="w-full bg-blue-900 cursor-not-allowed font-semibold py-4 rounded-xl shadow-md transition-all flex items-center justify-center gap-3 text-base mt-4 disabled:opacity-60 disabled:pointer-events-none"
                    style="background-color: #081763; color: white;">
                    <i class="fa-regular fa-paper-plane-top"></i> Submit request
                </button>
            </form>
        </div>
    </section>

    <!-- simple script to enable/disable submit based on checkbox -->
    <script>
        (function() {
            const form = document.getElementById('partnerForm');
            const checkbox = document.getElementById('termsCheckbox');
            const submitBtn = document.getElementById('submitBtn');

            if (checkbox && submitBtn) {
                // initial state: disabled (lighter indigo)
                submitBtn.disabled = true;
                submitBtn.classList.remove('bg-indigo-700', 'hover:bg-indigo-800');
                submitBtn.classList.add('bg-indigo-300', 'cursor-not-allowed');

                checkbox.addEventListener('change', function() {
                    if (checkbox.checked) {
                        // ENABLED — MUCH DARKER (indigo-950)
                        submitBtn.disabled = false;
                        submitBtn.classList.remove('bg-blue-300', 'cursor-not-allowed');
                        submitBtn.classList.add('bg-blue-950', 'hover:bg-blue-900', 'cursor-pointer');
                    } else {
                        // DISABLED — back to light blue
                        submitBtn.disabled = true;
                        submitBtn.classList.remove('bg-blue-950', 'hover:bg-blue-900', 'cursor-pointer');
                        submitBtn.classList.add('bg-blue-300', 'cursor-not-allowed');
                    }
                });

                // prevent actual form submission (demo only)
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (checkbox.checked) {
                        alert('Form submitted (demo) — thank you!');
                    }
                });
            }
        })();
    </script>
</x-frontend-layout>
