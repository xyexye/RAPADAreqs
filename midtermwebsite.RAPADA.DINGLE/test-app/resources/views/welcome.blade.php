<x-app-layout>


    <style>



        .full-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 1;
            transition: all 0.3s ease-in-out;
        }

        .transition-effect {
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .services-list {
            font-size: 22px;

            margin-bottom: 10px;
            background-color: #E5E4E2;
        background-size: cover;
        background-position: center;
        }
        
    </style>

    <div class="relative">
        <div class="absolute top-0 left-0 w-full h-full"
            style="background-color: #E5E4E2; background-size: cover; background-position: center;">
        </div>

        <div class="relative z-10 py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="font-family: 'Open Sans', sans-serif;">

                <section class="mb-8 bg-white p-4 rounded-lg section-animate text-center" data-animate="slideInLeft"
                    style="padding: 2rem;">
                    <h2 class="text-6xl font-bold mb-4 " style="font-family: 'impact', cursive;">We are AIE
                        Creates</h2>
                    <p class="text-3xl mb-4 " style="font-family: 'impact';">
                        In us you trust, in quality service we must.
                    </p>
                </section>

                <section class="mb-8 bg-white p-4 rounded-lg section-animate text-center flex justify-center items-center" data-animate="slideInLeft"
            style="padding: 2rem;">
    <video controls width="70%" height="auto">
        <source src="{{ asset('images/PromVid.mp4') }}" type="video/mp4">
    </video>
</section>


                <section id="our-story" class="mb-8 bg-white p-6 rounded-lg section-animate" data-animate="slideInLeft">
    <h2 class="text-2xl font-bold mb-4">Our Purpose</h2>
    <p style="font-family: Tahoma;">
        We, the AIE, are here to help you achieve your goal in the digital world. With our service, we will make sure to have your name heard by having a website which will be crafted with skilled professionals within our team. We can transform your digital ideas into reality.
    </p>
</section>

                <div class="mb-8">
                    <button id="services-dropdown"
                        class="text-2xl text-black-500 hover:text-black-700 cursor-pointer"> Services ➤</button>
                    <div id="services-list" class="hidden bg-white p-6 rounded-lg section-animate full-screen overflow-y-auto"
                        data-animate="slideInLeft">
                        <x-app-layout>
                        <h2 class="text-2xl font-bold mb-4">Available Services</h2>

                        <ul class="services-list flex flex-wrap justify-center items-center list-none p-0">
    <li class="w-full sm:w-1/2 lg:w-1/3 mb-4 text-center">
        <p class="mb-2">We create websites for you.</p>
        <img src="{{ asset('images/php.jpg') }}" alt="PHP System"
            class="w-full h-60 object-cover rounded-lg">
    </li>

    <li class="w-full sm:w-1/2 lg:w-1/3 mb-4 text-center">
        <p class="mb-2">We create systems for your business.</p>
        <img src="{{ asset('images/c.jpg') }}" alt="C System"
            class="w-full h-60 object-cover rounded-lg">
    </li>
    <li class="w-full sm:w-1/2 lg:w-1/3 mb-4 text-center">
        <p class="mb-2">We provide network installation services.</p>
        <img src="{{ asset('images/network.jpg') }}" alt="C System"
            class="w-full h-60 object-cover rounded-lg">
    </li>
    <li class="w-full sm:w-1/2 lg:w-1/3 mb-4 text-center">
        <p class="mb-2">We provide system maintenance for our customers.</p>
        <img src="{{ asset('images/maintenance.png') }}" alt="C System"
            class="w-full h-60 object-cover rounded-lg">
    </li>
</ul>
    </x-app-layout>


                        <button id="back-to-about"
                            class="text-2xl text-black-500 hover:text-black-700 cursor-pointer">Back to Home ➤</button>
                    </div>
                </div>

                <div id="team-contact-container" class="hidden flex justify-between items-center">
                    <section id="our-team" class="mb-8 bg-white p-6 rounded-lg section-animate"
                        data-animate="slideInLeft">
                        <h2 class="text-2xl font-bold mb-4">Our Team</h2>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="mb-4">
                                <img src="{{ asset('images/darwin.jpg') }}" alt="darwin dingle"
                                    class="w-full h-auto rounded-lg">
                                <p class="text-center mt-2">Darwin Dingle - CEO</p>
                            </div>
                            <div class="mb-4">
                                <img src="{{ asset('images/xye.jpg') }}" alt="xye rapada"
                                    class="w-full h-auto rounded-lg">
                                <p class="text-center mt-2">Xye Rapada - CTO</p>
                            </div>
                        </div>
                    </section>

                    <section id="contact-us" class="bg-white p-6 rounded-lg section-animate" data-animate="slideInLeft">
                        <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
                        <p>Email: aieofficial.com</p>
                        <p>Phone: 09090909090</p>
                    </section>
                </div>
                <div id="toggle-arrow"
                    class="text-2xl text-black-500 hover:text-black-700 cursor-pointer">Our Team ➤</div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sections = document.querySelectorAll('.section-animate');
            const teamContactContainer = document.getElementById('team-contact-container');
            const toggleArrow = document.getElementById('toggle-arrow');
            const servicesDropdown = document.getElementById('services-dropdown');
            const servicesList = document.getElementById('services-list');
            const backToAboutButton = document.getElementById('back-to-about');

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', `animate__${entry.target.dataset.animate}`);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });

            sections.forEach(section => {
                observer.observe(section);
            });
            toggleArrow.addEventListener('click', function () {
                teamContactContainer.classList.toggle('hidden');
                servicesList.classList.add('hidden'); 
            });
            servicesDropdown.addEventListener('click', function () {
                servicesList.classList.toggle('hidden');
                teamContactContainer.classList.add('hidden'); 
            });
            backToAboutButton.addEventListener('click', function () {
                servicesList.classList.add('transition-effect');
                setTimeout(() => {
                    servicesList.classList.add('hidden');
                    servicesList.classList.remove('transition-effect');
                }, 300);
            });
        });
    </script>

</x-app-layout>
