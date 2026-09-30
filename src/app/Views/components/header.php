<script src="//unpkg.com/alpinejs" defer></script>
 
<header class="w-full">
    <div class="max-w-[1600px] mx-auto px-4">
    <div class="flex flex-col items-center justify-center gap-6 py-3">
        <div class="flex flex-col items-center justify-center gap-3 py-4 sm:flex-row sm:gap-14 lg:hidden">
            <div class="flex items-center gap-4">
                <span class="flex items-center justify-center w-6 h-6 bg-[var(--main-color)] text-white rounded-sm text-[11px]">
                    <i class="fa-solid fa-phone"></i>
                </span>
                <p class="text-[var(--text-color)] text-[16px]">
                    <a href="tel:+37378013554" class="hover:underline">+373 780 13 554</a>
                </p>
            </div>
            <div class="flex items-center gap-4">
                <span class="flex items-center justify-center w-6 h-6 bg-[var(--main-color)] text-white rounded-sm text-[11px]">
                    <i class="fa-solid fa-location-dot"></i>
                </span>
                <p class="text-[var(--text-color)] text-[15px] uppercase font-medium">
                    str. Columna 171, Chișinău
                </p>
            </div>
        </div>
    </div>

    <!-- lg res -->
    <div class="xl:hidden">
        <div class="hidden lg:flex flex-row items-center justify-center gap-12 py-4">
             <a href="/">
                <img src="/images/logo-black.svg" alt="logo" class="w-24">
             </a>
            <div class="flex items-center gap-4">
                <span class="flex items-center justify-center w-6 h-6 bg-[var(--main-color)] text-white rounded-sm text-[11px]">
                    <i class="fa-solid fa-phone"></i>
                </span>
                <p class="text-[var(--text-color)] text-[16px]">
                    <a href="tel:+37378013554" class="hover:underline">+373 780 13 554</a>
                </p>
            </div>
            <div class="flex items-center gap-4">
                <span class="flex items-center justify-center w-6 h-6 bg-[var(--main-color)] text-white rounded-sm text-[11px]">
                    <i class="fa-solid fa-location-dot"></i>
                </span>
                <p class="text-[var(--text-color)] text-[15px] uppercase font-medium">
                    str. Columna 171, Chișinău
                </p>
            </div>
        </div>
    </div>

    <!-- xl res -->
    <div class="hidden xl:flex flex-row items-center justify-between px-14 py-4">
        <div class="flex flex-row gap-14 items-center px-24 lg:px-14">
            <a href="/">
                <img src="/images/logo-black.svg" alt="logo" class="w-24">
            </a>
            
            <div class="flex items-center gap-5">
                <span class="flex items-center justify-center w-6 h-6 bg-[var(--main-color)] text-white rounded-sm text-[14px]">
                    <i class="fa-solid fa-phone"></i>
                </span>
                <p class="text-[var(--text-color)] text-[14px] truncate max-w-[200px]">
                   <a href="tel:+37378013554" class="hover:underline">+373 780 13 554</a>
                </p>
            </div>
            
            <div class="flex items-center gap-5">
                <span class="flex items-center justify-center w-6 h-6 bg-[var(--main-color)] text-white rounded-sm text-[12px]">
                    <i class="fa-solid fa-location-dot"></i>
                </span>
                <p class="text-[var(--text-color)] text-[15px] uppercase font-medium truncate max-w-[220px]">
                    str. Columna 171, Chișinău
                </p>
            </div>
        </div>

        <div class="flex items-center justify-center gap-14 px-24 lg:px-14">
            <div class="flex flex-row gap-3">
                <a href="https://facebook.com" class="flex items-center justify-center w-9 h-9 border border-gray-300 rounded-sm opacity-60 hover:opacity-100 transition">
                    <i class="fa-brands fa-facebook-f text-[13px]"></i>
                </a>
                <a href="https://instagram.com" class="flex items-center justify-center w-9 h-9 border border-gray-300 rounded-sm opacity-60 hover:opacity-100 transition">
                    <i class="fa-brands fa-instagram text-[13px]"></i>
                </a>
                <a href="https://youtube.com" class="flex items-center justify-center w-9 h-9 border border-gray-300 rounded-sm opacity-60 hover:opacity-100 transition">
                    <i class="fa-brands fa-youtube text-[13px]"></i>
                </a>
                <a href="https://google.com" class="flex items-center justify-center w-9 h-9 border border-gray-300 rounded-sm opacity-60 hover:opacity-100 transition">
                    <i class="fa-brands fa-google text-[13px]"></i>
                </a>
            </div>
            <a href="#" class="relative bg-[var(--main-color)] text-white py-4 px-10 rounded-sm hover:text-white transition text-[13px] tracking-widest truncate max-w-[250px] hover:bg-[var(--hover)]">
                CATALOG PRODUSE
            </a>
        </div>
    </div>


    <div class="flex flex-col gap-8 items-center justify-center sm:flex-row sm:gap-14 xl:hidden py-5">
        <div class="flex flex-row gap-3">
            <a href="https://facebook.com" class="flex items-center justify-center w-9 h-9 border border-gray-300 rounded-sm opacity-60 hover:opacity-100 transition">
                <i class="fa-brands fa-facebook-f text-[13px]"></i>
            </a>
            <a href="https://instagram.com" class="flex items-center justify-center w-9 h-9 border border-gray-300 rounded-sm opacity-60 hover:opacity-100 transition">
                <i class="fa-brands fa-instagram text-[13px]"></i>
            </a>
            <a href="https://youtube.com" class="flex items-center justify-center w-9 h-9 border border-gray-300 rounded-sm opacity-60 hover:opacity-100 transition">
                <i class="fa-brands fa-youtube text-[13px]"></i>
            </a>
            <a href="https://google.com" class="flex items-center justify-center w-9 h-9 border border-gray-300 rounded-sm opacity-60 hover:opacity-100 transition">
                <i class="fa-brands fa-google text-[13px]"></i>
            </a>
        </div>
        <a href="#"
         class="relative bg-[var(--main-color)] text-white py-3 px-8 rounded-sm hover:text-white transition text-[12px] tracking-widest hover:bg-[var(--hover)]">
            CATALOG PRODUSE
        </a>
    </div>


    <div class="w-full py-4">
        <span class="block w-full h-[1px] bg-black opacity-20"></span>
    </div>


    <div class="max-w-[1600px] flex items-center justify-between px-[20px] lg:px-[18px] py-4">
        <a  href="/" class="lg:hidden shrink-0">
            <img src="/images/logo-black.svg" alt="logo" class="w-24">
        </a>
        <ul class="hidden lg:flex gap-10">
            <li class="uppercase font-medium tracking-wider text-[14px] hover:text-[var(--main-color)]">
                <a href="#">Principală</a>
            </li>
            <li class="uppercase font-medium tracking-wider text-[14px] hover:text-[var(--main-color)] duration-200">
                <a href="/about">Despre Noi</a>
            </li>
            <li class="uppercase font-medium tracking-wider text-[14px] hover:text-[var(--main-color)] duration-200">
                <a href="#">Catalog Produse</a>
            </li>
            <li class="uppercase font-medium tracking-wider text-[14px] hover:text-[var(--main-color)] duration-200">
                <a href="#">Oferte speciale</a>
            </li>
            <li class="uppercase font-medium tracking-wider text-[14px] hover:text-[var(--main-color)] duration-200">
                <a href="#">Contacte</a>
            </li>
        </ul>

        <div x-data="{ showModal: false, showCategory: 'menu' }" class="flex gap-8">
            <a href="#" class="cursor-pointer hover:text-[var(--main-color)] duration-100">
                <i class="fa-solid fa-magnifying-glass text-[18px]"></i>
            </a>
            <a @click="showModal = true" href="#" class="cursor-pointer hover:text-[var(--main-color)] duration-100">
                <i class="fa-solid fa-bars text-[18px]"></i>
            </a>
            <a href="#" class="cursor-pointer hover:text-[var(--main-color)] duration-100">
                <i class="fa-solid fa-basket-shopping text-[18px]"></i>
            </a>

            <!-- modal okno -->
                <div x-show="showModal" x-transition class="fixed inset-0 z-50 flex items-start justify-end">
                   <div class="absolute inset-0 bg-black/50 backdrop-blur-sm">
                       <div class="absolute right-0 bg-white h-[980px] w-[300px] px-4">
                        <div class="flex flex-col gap-10 px-2 py-2">
                            <div class="flex flex-row justify-between px-10 py-4 border rounded-sm border-[var(--border)]">
                                <a href="#" @click.prevent="showCategory = 'menu'" class="text-[18px] cursor-pointer hover:opacity-40 duration-100 border-b font-semibold">
                                    MENU
                                </a>
                                <a href="#" @click.prevent="showCategory = 'info'" class="text-[18px] cursor-pointer hover:opacity-40 duration-100 border-b font-semibold">
                                    INFO
                                </a>
                            </div>

                                <div class="flex flex-row items-center justify-between gap-2">
                                      <img src="/images/logo-black.svg" alt="logo" class="w-[100px]">
                                      <button 
                                          @click="showModal = false" class="bg-black rounded-full p-4 h-[40px] text-white flex items-center justify-center hover:opacity-80 duration-100 cursor-pointer">
                                          X
                                      </button>
                                </div>

                            <div x-show="showCategory === 'menu'">
                                 <ul class="flex flex-col gap-4">
                                    <li class="uppercase font-medium tracking-wider text-[14px] hover:text-[var(--main-color)]">
                                        <a href="#">Principală</a>
                                    </li>
                                    <li class="uppercase font-medium tracking-wider text-[14px] hover:text-[var(--main-color)] duration-200">
                                        <a href="/about">Despre Noi</a>
                                    </li>
                                    <li class="uppercase font-medium tracking-wider text-[14px] hover:text-[var(--main-color)] duration-200">
                                        <a href="#">Catalog Produse</a>
                                    </li>
                                    <li class="uppercase font-medium tracking-wider text-[14px] hover:text-[var(--main-color)] duration-200">
                                        <a href="#">Oferte speciale</a>
                                    </li>
                                    <li class="uppercase font-medium tracking-wider text-[14px] hover:text-[var(--main-color)] duration-200">
                                        <a href="#">Contacte</a>
                                    </li>
                                </ul>
                            </div>

                            <div x-show="showCategory === 'info'">
                                <div class="flex flex-col gap-2 justify-start">
                                    <a href="/about" class="uppercase font-bold">
                                        Despre noi
                                    </h2>
                                    <p class="text-[var(--text-color)]">Luxury Cafe - experiența unei cafele de lux. Oferim o varietate de cafea în boabe și capsule premium, la prețuri accesibile. În plus, ne mândrim cu aparatele noastre de cafea moderne și performante.
                                    </p>
                                    <a href="#"
                                     class="relative bg-[var(--main-color)] text-white py-3 px-8 rounded-sm text-center font-bold hover:text-white transition text-[14px] hover:bg-[var(--hover)] mt-2">
                                        Contactează-ne
                                    </a>
                                </div>

                                <div>
                                    <h2 class="uppercase font-bold mt-10 mb-4">Contacte</h2>
                                </div>
                                    <div class="flex flex-col gap-3">
                                          <div class="flex items-center gap-4">
                                              <span class="flex items-center justify-center w-5 h-5 bg-[var(--main-color)] text-white rounded-sm text-[11px]">
                                                  <i class="fa-solid fa-phone"></i>
                                              </span>
                                              <p class="text-[var(--text-color)] text-[12px]">
                                                  <a href="tel:+37378013554" class="hover:underline">+373 780 13 554</a>
                                              </p>
                                          </div>
                                          <div class="flex items-center gap-4">
                                              <span class="flex items-center justify-center w-5 h-5 bg-[var(--main-color)] text-white rounded-sm text-[11px]">
                                                  <i class="fa-solid fa-location-dot"></i>
                                              </span>
                                              <p class="text-[var(--text-color)] text-[12px] uppercase font-medium">
                                                  str. Columna 171, Chișinău
                                              </p>
                                          </div>
                                           <div class="flex items-center gap-4">
                                              <span class="flex items-center justify-center w-5 h-5 bg-[var(--main-color)] text-white rounded-sm text-[11px]">
                                                  <i class="fa-solid fa-envelope"></i>
                                              </span>
                                              <p class="text-[var(--text-color)] text-[12px] uppercase font-medium">
                                                  info@luxurycafe.md
                                              </p>
                                          </div>

                                             <div class="flex flex-row gap-3 mt-4">
                                                <a href="https://facebook.com" class="flex items-center justify-center w-9 h-9 border border-gray-300  rounded-sm opacity-60                                   hover:opacity-100 transition">
                                                    <i class="fa-brands fa-facebook-f text-[13px]"></i>
                                                </a>
                                                <a href="https://instagram.com" class="flex items-center justify-center w-9 h-9 border border-gray-300     rounded-sm opacity-60                                  hover:opacity-100 transition">
                                                    <i class="fa-brands fa-instagram text-[13px]"></i>
                                                </a>
                                                <a href="https://youtube.com" class="flex items-center justify-center w-9 h-9 border border-gray-300   rounded-sm opacity-60                                hover:opacity-100 transition">
                                                    <i class="fa-brands fa-youtube text-[13px]"></i>
                                                </a>
                                                <a href="https://google.com" class="flex items-center justify-center w-9 h-9 border border-gray-300    rounded-sm opacity-60                                 hover:opacity-100 transition">
                                                    <i class="fa-brands fa-google text-[13px]"></i>
                                                </a>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</header>