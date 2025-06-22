@include('partials.navbar')
<title>About Us</title>
<link rel="icon" href="/img/icon_nh.svg" type="image/svg+xml">
<link rel="shortcut icon" href="/img/icon_nh.svg" type="image/svg+xml">


<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6 ">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Our Team</h2>
            <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Tim kami yang akan membantu pekerjaan anda.</p>
        </div> 
        <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="/img/pp.png" alt="Bonnie Avatar">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Mr. A</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Web/Application Developer</span>
                    <p class="mt-3 font-light text-gray-500 dark:text-gray-400">Sarjana Pendidikan Informatika</p>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400">PHP, Python Learner</p>
                </div>
            </div> 

            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="/img/pp.png" alt="Bonnie Avatar">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Mr. B</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Formating/Laporan Makalah & Desain</span>
                    <p class="mt-3 font-light text-gray-500 dark:text-gray-400">Ungraduated S1 Teknik Informatika</p>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400"></p>
                </div>
            </div> 

            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="/img/pp.png" alt="Bonnie Avatar">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Mr. F</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Web/Application Developer</span>
                    <p class="mt-3 font-light text-gray-500 dark:text-gray-400">Sarjana Komputer</p>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400">PHP, Java Learner</p>
                </div>
            </div> 

            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="/img/pp.png" alt="Bonnie Avatar">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">Ms. B</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">Formating/Laporan Makalah & Desain</span>
                    <p class="mt-3 font-light text-gray-500 dark:text-gray-400">Ungraduated S1 Teknik Informatika</p>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400"></p>
                </div>
            </div>  
        </div>  
    </div>
  </section>

  @include('partials.footer')