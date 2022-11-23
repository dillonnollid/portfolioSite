<!-- ====== Navbar Section Start -->
<header
    x-data="{ navbarOpen: false }"
    class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24"
>

    <div class="container">
        <div class="flex mx-4 items-center justify-between relative">

            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    <img
                        src="{{ url('img/planet.png') }}"
                        alt="logo"
                        class="w-[48px] lg:w-[64px] inline-block dark:hidden"
                    />
                    <img
                        src="{{ url('img/planet.png') }}"
                        alt="logo"
                        class="w-[48px] lg:w-[64px] hidden dark:inline-block"
                    />
                    <span class="text-xl xl:text-2xl font-bold text-[#0c7180] dark:text-white">Dillos Folio</span>
                </a>
            </div>

            <div class="flex px-4 justify-end items-center w-full space-x-4">
                <div>
                    <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen"
                                               x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>

                    <nav
                        :class="!navbarOpen && 'hidden' "
                        id="navbarCollapse"
                        class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full dark:bg-slate-900 dark:text-gray-300 lg:px-6 lg:max-w-full lg:w-full lg:block lg:static lg:shadow-none"
                    >
                        <ul class="block lg:flex lg:items-center"><!-- All components should be prefixed with x- -->
                            @foreach($navigationItems as $item)
                                <x-layout.navbar-item :href="$item['href']"> {{ $item['label'] }} </x-layout.navbar-item>
                            @endforeach

                        </ul>
                    </nav>
                </div>
                <div class="sm:flex justify-end hidden pr-16 lg:pr-0">
                    <a
                        href="javascript:void(0)"
                        class="
                  text-base
                  font-medium
                  text-dark
                  hover:text-primary
                  py-3
                  px-7
                "
                    >
                        Login
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="
                  text-base
                  font-medium
                  text-white
                  bg-primary
                  rounded-lg
                  py-3
                  px-7
                  hover:bg-opacity-90
                "
                    >
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- ====== Navbar Section End -->
