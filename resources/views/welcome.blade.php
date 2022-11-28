<x-app-layout>
    <!-- Hero Section -->
    <section id="hero" class="bg-curvy-light-mode dark:bg-curvy-dark-mode bg-no-repeat bg-contain bg-bottom">

        <!-- Hero Container -->
        <div class="container mx-auto px-6 text-center md:pt-16 pb-48">

            <img src="img/illustration-intro.png" alt="" class="mx-auto"/>

            <h1 class="max-w-2xl mx-auto mb-10 text-3xl font-bold leading-normal mt-14 md:text-4xl">
                Dillon Rosenkranz<br>Portfolio Site
            </h1>

            <p class="max-w-sm mx-auto mb-10 text-sm md:max-w-xl md:text-lg">
                This site was built with Laravel, AlpineJS and TailwindCSS.<br>
                Everything else you need to know can be found below.
            </p>
            <!--<button class="p-3 rounded-full w-52 bg-accentCyan hover:scale-95">
                Create an Account
            </button>-->
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="pt-12 bg-gray-50 dark:bg-darkBlue1">

        <!-- Features Container -->
        <div class="container mx-auto px-6 pb-32">

            <!-- First Row -->
            <div class="feature-row">
                <!-- Item 1 -->
                <div class="feature-item">
                    <div class="feature-image">
                        <img src="img/icon-access-anywhere.svg" alt=""/>
                    </div>
                    <h3 class="text-xl font-bold">Compatible on Desktop and Mobile</h3>
                    <p class="max-w-md">
                        Constructed using Laravel, AlpineJS and TailwindCSS, this website is optimized for devices of all screen sizes.
                    </p>
                </div>

                <!-- Item 2 -->
                <div class="feature-item">
                    <div class="feature-image">
                        <img src="img/icon-security.svg" alt="" />
                    </div>
                    <h3 class="text-xl font-bold">Security you can trust</h3>
                    <p class="max-w-md">
                        I haven't added Authentication functionality yet, <br>none of your user data is being stored on the server.
                    </p>
                </div>
            </div>

            <!-- Second Row -->
            <div class="feature-row">

                <!-- Item 3 -->
                <div class="feature-item">
                    <div class="feature-image">
                        <img src="img/icon-collaboration.svg" alt="" />
                    </div>
                    <h3 class="text-xl font-bold">Authentic Information</h3>
                    <p class="max-w-md">
                        No messing, just facts, request references to back it up.
                    </p>
                </div>

                <!-- Item 4 -->
                <div class="feature-item">
                    <div class="feature-image">
                        <img src="img/icon-any-file.svg" alt="" />
                    </div>
                    <h3 class="text-xl font-bold">Accessing Project Code</h3>
                    <p class="max-w-md">
                        All relevant project files can be found on my github profile!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Productive Section -->
    <section id="productive" class="bg-white dark:bg-darkBlue">

        <!-- Productive Container -->
        <div class="container flex flex-col items-center mx-auto px-6 pt-24 pb-32 md:flex-row md:space-x-16">

            <!-- Image -->
            <div class="md:w-1/2">
                <img
                    src="img/illustration-stay-productive.png"
                    alt=""
                    class="mb-10"
                />
            </div>

            <!-- Content -->
            <div class="flex flex-col items-start md:w-1/2">
                <div class="flex flex-col space-y-5">
                    <h4 class="max-w-md text-xl font-bold md:text-4xl">
                        Hero heading here!
                    </h4>
                    <p class="text-md md:text-lg">
                        Paragraphs with bits and bobs are good for the soul
                    </p>
                    <p class="text-md md:text-lg">
                        Not so loren ipsum but hey what you gonna do about it?
                    </p>
                </div>

                <!-- Link -->
                <div class="block mt-4">
                    <a href="#" class="border-b border-accentCyan text-accentCyan">
                        See more below
                        <img src="img/icon-arrow.svg" alt="" class="inline pb-2" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-gray-50 dark:bg-darkBlue">

        <!-- Testimonials Container -->
        <div class="container mx-auto px-6 pt-12 pb-80 md:pb-96">

            <!-- Boxes Container -->
            <div class="relative flex flex-col w-full space-y-6 md:flex-row md:space-y-0 md:space-x-12">
                <!-- Quotes Image -->
                <img
                    src="img/bg-quotes.png"
                    alt=""
                    class="absolute left-1 -top-2 w-10 md:-top-16 md:w-20"
                />

                <!-- Box 1 -->
                <div class="testimonial-box">
                    <p class="text-sm leading-5 md:text-lg">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Mus mauris vitae ultricies leo integer malesuada nunc vel risus. Maecenas accumsan lacus vel facilisis volutpat.
                    </p>
                    <!-- Customer Info -->
                    <div class="flex space-x-4">
                        <img
                            src="img/profile-1.jpg"
                            alt=""
                            class="w-10 h-10 rounded-full"
                        />
                        <div>
                            <h5 class="text-sm font-semibold">Reference 1</h5>
                            <p class="text-xs font-extralight">Reference Position</p>
                        </div>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="testimonial-box">
                    <p class="text-sm leading-5 md:text-lg">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Mus mauris vitae ultricies leo integer malesuada nunc vel risus. Maecenas accumsan lacus vel facilisis volutpat.
                    </p>
                    <!-- Customer Info -->
                    <div class="flex space-x-4">
                        <img
                            src="img/profile-2.jpg"
                            alt=""
                            class="w-10 h-10 rounded-full"
                        />
                        <div>
                            <h5 class="text-sm font-semibold">Reference 2</h5>
                            <p class="text-xs font-extralight">Reference Position</p>
                        </div>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="testimonial-box">
                    <p class="text-sm leading-5 md:text-lg">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Mus mauris vitae ultricies leo integer malesuada nunc vel risus. Maecenas accumsan lacus vel facilisis volutpat.
                    </p>
                    <!-- Customer Info -->
                    <div class="flex space-x-4">
                        <img
                            src="img/profile-3.jpg"
                            alt=""
                            class="w-10 h-10 rounded-full"
                        />
                        <div>
                            <h5 class="text-sm font-semibold">Reference 3</h5>
                            <p class="text-xs font-extralight">Reference Position</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Early Access Section -->
    <section id="early-access" class="relative px-6 dark:bg-darkBlue2 md:px-0">

        <div class="relative -top-40 max-w-4xl mx-auto p-10 px-6 space-y-6 text-center rounded-lg bg-gray-200 dark:bg-darkBlue1 md:px-16">
            <h5 class="text-2xl font-bold">Get started with something here</h5>
            <p class="text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Mus mauris vitae ultricies leo integer malesuada nunc vel risus. Maecenas accumsan lacus vel facilisis volutpat.
            </p>

            <!-- Input & Button Container -->
            <div class="flex flex-col items-start space-y-6 md:flex-row md:space-y-0 md:space-x-6">
                <div class="w-full md:flex-1">
                    <input
                        type="text"
                        class="w-full px-10 py-3 rounded-full focus:outline-none"
                        placeholder="email@example.com"
                    />
                </div>

                <button class="w-full p-3 px-6 rounded-full bg-accentCyan md:w-56 hover:scale-95">
                    Get Started
                </button>
            </div>
        </div>
    </section>
</x-app-layout>
