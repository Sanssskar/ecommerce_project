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
        class="p-20 container mx-auto bg-(--bg) rounded-3xl shadow-xl overflow-hidden flex flex-col lg:flex-row border border-slate-200">

        <!-- LEFT: solid primary background with authentic copy -->
        <div class="lg:w-1/2 bg-(--primary) p-10 xl:p-12 flex flex-col justify-between relative">
            <div class="relative z-10">
                <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight tracking-tight">
                    Transform your <br>business potential
                </h2>
                <p class="text-white/90 text-lg mt-6 max-w-md leading-relaxed">
                    Join 5,000+ forward-thinking restaurants and local stores already growing with our platform.
                    We provide the tools you need to thrive in today's digital economy.
                </p>
                <div class="mt-10 space-y-4">
                    <div class="flex items-center gap-4 text-white">
                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <i class="fa-regular fa-circle-check text-white text-sm"></i>
                        </div>
                        <span class="font-semibold">Zero commission fees · keep 100% of your revenue</span>
                    </div>
                    <div class="flex items-center gap-4 text-white">
                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <i class="fa-regular fa-circle-check text-white text-sm"></i>
                        </div>
                        <span class="font-semibold">24/7 dedicated success manager · we're always here</span>
                    </div>
                    <div class="flex items-center gap-4 text-white">
                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <i class="fa-regular fa-circle-check text-white text-sm"></i>
                        </div>
                        <span class="font-semibold">Advanced analytics · track performance in real-time</span>
                    </div>
                    <div class="flex items-center gap-4 text-white">
                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <i class="fa-regular fa-circle-check text-white text-sm"></i>
                        </div>
                        <span class="font-semibold">5-minute setup · launch your store today</span>
                    </div>
                    <div class="flex items-center gap-4 text-white">
                        <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center backdrop-blur-sm">
                            <i class="fa-regular fa-circle-check text-white text-sm"></i>
                        </div>
                        <span class="font-semibold">Mobile-optimized dashboard · manage from anywhere</span>
                    </div>
                </div>

                <!-- Trust indicators -->
                <div class="mt-12 pt-6 border-t border-white/20">
                    <p class="text-white/80 text-sm mb-3">Trusted by businesses worldwide</p>
                    <div class="flex items-center gap-4">
                        <div class="flex -space-x-2">
                            <img class="w-8 h-8 rounded-full border-2 border-white" src="{{asset(Storage::url('lucy.jpeg'))}}" alt="Founder">
                            <img class="w-8 h-8 rounded-full border-2 border-white" src="{{asset(Storage::url('sudam dai.jpeg'))}}" alt="CEO">
                            <img class="w-8 h-8 rounded-full border-2 border-white" src="{{asset(Storage::url('dinesh.jpeg'))}}" alt="Owner">
                        </div>
                        <div class="flex items-center gap-1">
                            <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                            <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                            <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                            <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                            <i class="fa-solid fa-star text-yellow-400 text-sm"></i>
                            <span class="text-white/80 text-sm ml-1">4.9 (2.4k reviews)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT: clean form with solid backgrounds & terms checkbox -->
        <div class="lg:w-1/2 p-10 xl:p-12 bg-white">
            <div class="mb-8">
                <h3 class="text-3xl font-semibold text-(--text) tracking-tight">Get started today</h3>
                <p class="text-(--text)/60 text-sm mt-1.5 flex items-center gap-1">
                    <i class="fa-solid fa-rocket text-(--primary)"></i> Join thousands of successful merchants
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
            <form class="space-y-5" action="{{ route('client-request') }}" method="POST" id="partnerForm" enctype="multipart/form-data">
                @csrf
                <!-- row: shop name & contact -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="client_name" class="block text-sm font-medium text-(--text) mb-1.5">
                            <i class="fa-regular fa-user mr-2 text-(--primary)"></i>Your name <span
                                class="text-red-500 mx-2">*</span>
                        </label>

                        <input type="text" placeholder="e.g. Sanskar Dai" name="client_name" id="client_name" value="{{ old('client_name') }}"
                            class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-(--primary) focus:ring-2 focus:ring-(--primary)/10 transition-all text-(--text)">
                    </div>
                    <div>
                        <label for="shop_name" class="block text-sm font-medium text-(--text) mb-1.5">
                           <i class="fa-solid fa-business-time mr-2 text-(--primary)"></i>Business name <span
                                class="text-red-500 mx-2">*</span>
                        </label>
                        <input type="text" placeholder="e.g. Dhedo Dokan" id="shop_name" name="shop_name" value="{{ old('shop_name') }}"
                            class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-(--primary) focus:ring-2 focus:ring-(--primary)/10 transition-all text-(--text)">
                    </div>
                    <div>
                        <label for="contact" class="block text-sm font-medium text-(--text) mb-1.5">
                            <i class="fa-solid fa-phone mr-2 text-(--primary)"></i>Phone number <span
                                class="text-red-500 mx-2">*</span>
                        </label>
                        <input type="tel" placeholder="9814351861" id="contact" name="contact" value="{{ old('contact') }}"
                            class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-(--primary) focus:ring-2 focus:ring-(--primary)/10 transition-all text-(--text)">
                    </div>
                </div>

                <!-- email & password -->
                <div>
                    <label for="email" class="block text-sm font-medium text-(--text) mb-1.5">
                        <i class="fa-regular fa-envelope mr-2 text-(--primary)"></i>Email address <span
                            class="text-red-500 mx-2">*</span>
                    </label>
                    <input type="email" placeholder="owner@restaurant.com" id="email" name="email" value="{{ old('email') }}"
                        class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-(--primary) focus:ring-2 focus:ring-(--primary)/10 transition-all text-(--text)">
                </div>
                <!-- address -->
                <div>
                    <label for="address" class="block text-sm font-medium text-(--text) mb-1.5">
                        <i class="fa-solid fa-location-dot mr-2 text-(--primary)"></i>Business address <span
                            class="text-red-500 mx-2">*</span>
                    </label>
                    <input type="text" placeholder="Street, city, postal code" name="address" id="address" value="{{ old('address') }}"
                        class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white focus:border-(--primary) focus:ring-2 focus:ring-(--primary)/10 transition-all text-(--text)">
                </div>

                <!-- logo + expiry -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <!-- logo upload with preview -->
                    <div>
                        <label for="logoUpload" class="block text-sm font-medium text-(--text) mb-1.5">
                            <i class="fa-solid fa-image mr-2 text-(--primary)"></i>Business logo (optional)
                        </label>

                        <!-- Image preview container -->
                        <div id="logoPreviewContainer" class="mb-3 hidden">
                            <div class="relative inline-block">
                                <img id="logoPreview" src="#" alt="Logo preview" class="w-20 h-20 rounded-lg object-cover border-2 border-(--primary)/30">
                                <button type="button" id="removeLogo" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs hover:bg-red-600 transition-colors">
                                    <i class="fa-solid fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="relative">
                            <input type="file" accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer"
                                name="logo" id="logoUpload">
                            <div id="logoUploadTrigger"
                                class="w-full px-5 py-3.5 rounded-xl border border-slate-200 bg-white flex items-center gap-3 text-(--text)/60 hover:bg-slate-50 transition-colors">
                                <i class="fa-solid fa-cloud-upload-alt text-(--primary)"></i>
                                <span id="uploadText" class="text-sm truncate">Upload image</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- TERMS CHECKBOX - disabling submit until checked -->
                <div class="flex items-start gap-3 p-4 bg-slate-50 rounded-xl border border-slate-200">
                    <div class="flex items-center h-5">
                        <input type="checkbox" id="termsCheckbox"
                            class="w-4 h-4 text-(--primary) border-slate-300 rounded focus:ring-(--primary) transition-all">
                    </div>
                    <label for="termsCheckbox" class="text-sm text-(--text)/80 leading-relaxed">
                        I agree to the <a href="#" class="text-(--primary) font-medium hover:underline">Terms of
                            Service</a> and
                        <a href="#" class="text-(--primary) font-medium hover:underline">Privacy Policy</a>. I confirm
                        that I am the authorized representative of this business.
                    </label>
                </div>

                <!-- submit button (disabled by default) - YOUR SCRIPT COLORS UNCHANGED -->
                <button type="submit" id="submitBtn" disabled
                    class="w-full bg-(--primary) cursor-not-allowed font-semibold py-4 rounded-xl shadow-md transition-all flex items-center justify-center gap-3 text-base mt-4 disabled:opacity-60 disabled:pointer-events-none text-white">
                    <i class="fa-regular fa-hand-point-up mr-2 text-2xl"></i> Create my account
                </button>

                <p class="text-xs text-center text-(--text)/40 mt-4">
                    By submitting, you'll receive occasional updates. You can unsubscribe anytime.
                </p>
            </form>
        </div>
    </section>

    <!-- simple script to enable/disable submit based on checkbox - YOUR SCRIPT PRESERVED EXACTLY -->
    <script>
        (function() {
            const form = document.getElementById('partnerForm');
            const checkbox = document.getElementById('termsCheckbox');
            const submitBtn = document.getElementById('submitBtn');

            if (checkbox && submitBtn) {
                // initial state: disabled (lighter indigo)
                submitBtn.disabled = true;
                submitBtn.classList.remove('bg-green-700', 'hover:bg-green-800');
                submitBtn.classList.add('bg-green-300', 'cursor-not-allowed');

                checkbox.addEventListener('change', function() {
                    if (checkbox.checked) {
                        // ENABLED — MUCH DARKER (indigo-950)
                        submitBtn.disabled = false;
                        submitBtn.classList.remove('bg-green-500', 'cursor-not-allowed');
                        submitBtn.classList.add('bg-green-950', 'hover:bg-green-900', 'cursor-pointer');
                    } else {
                        // DISABLED — back to light green
                        submitBtn.disabled = true;
                        submitBtn.classList.remove('bg-green-950', 'hover:bg-green-900', 'cursor-pointer');
                        submitBtn.classList.add('bg-green-500', 'cursor-not-allowed');
                    }
                });

                // // prevent actual form submission (demo only)
                // form.addEventListener('submit', function(e) {
                //     e.preventDefault();
                //     if (checkbox.checked) {
                //         alert('Form submitted (demo) — thank you!');
                //     }
                // });
            }

            // NEW: Image preview functionality
            const logoUpload = document.getElementById('logoUpload');
            const logoPreview = document.getElementById('logoPreview');
            const logoPreviewContainer = document.getElementById('logoPreviewContainer');
            const uploadText = document.getElementById('uploadText');
            const removeBtn = document.getElementById('removeLogo');

            if (logoUpload) {
                logoUpload.addEventListener('change', function(e) {
                    const file = e.target.files[0];

                    if (file) {
                        // Check if file is an image
                        if (!file.type.startsWith('image/')) {
                            alert('Please select an image file');
                            this.value = '';
                            return;
                        }

                        // Check file size (max 2MB)
                        if (file.size > 2 * 1024 * 1024) {
                            alert('File size should be less than 2MB');
                            this.value = '';
                            return;
                        }

                        const reader = new FileReader();

                        reader.onload = function(e) {
                            logoPreview.src = e.target.result;
                            logoPreviewContainer.classList.remove('hidden');
                            uploadText.textContent = file.name;
                        }

                        reader.readAsDataURL(file);
                    }
                });
            }

            // Remove image preview
            if (removeBtn) {
                removeBtn.addEventListener('click', function() {
                    logoUpload.value = '';
                    logoPreviewContainer.classList.add('hidden');
                    uploadText.textContent = 'Upload image';
                });
            }
        })();
    </script>
</x-frontend-layout>
