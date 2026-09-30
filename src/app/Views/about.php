<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxary Coffee - About</title>
    <link href="/css/styles.css?v=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php require __DIR__ . "/components/header.php"; ?>

    <section>

    <div class="relative w-full overflow-hidden">

        <div class="absolute top-0 left-0 w-full z-20">
            <img src="/images/breadcrumb-shape-1.webp" alt="shape top" class="w-full h-auto">
        </div>
        
        <div class="relative">
            <img src="/images/bg-image.webp" alt="banner" class="w-full h-auto brightness-75">
            <div class="absolute inset-0 bg-black/30"></div>
        </div>
        
        <div class="absolute bottom-0 left-0 w-full z-20">
            <img src="/images/breadcrumb-shape-2.webp" alt="shape bottom" class="w-full h-auto">
        </div>
        
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center z-30">
            <h1 class="text-3xl md:text-5xl font-bold uppercase">Despre noi</h1>
            <p class="md:text-lg mt-2 uppercase font-semibold">
                <a href="/" class="cursor-pointer">Principală</a> /
                <span class="text-[var(--main-color)]">
                    despre noi
                </span>
            </p>
        </div>
      </div>

      <div class="relative mt-30 py-28">
        <img src="/images/about-shape-2-1.webp"
             alt="hero-shape"
             class="absolute top-[-90px] md:top-1 left-0 w-[200px] lg:w-[270px] xl:w-[340px] object-contain z-0">
        <img src="/images/about-shape-2-2.webp"
             alt="hero-shape"
             class="absolute top-[200px] md:top-1 right-0 w-[200px] lg:w-[270px] xl:w-[340px] object-contain z-0">


        <div class="flex flex-col align-center justify-center mx-auto max-w-[1100px] p-4">
            <div class="flex flex-col gap-6 mb-6">
                <span class="text-[14px] bg-[var(--main-color)] px-4 py-1 text-white rounded-sm uppercase tracking-widest w-fit">
                    Luxury Cafe
                </span>
                
                <h2 class="font-bold uppercase text-[24px]">Show Room</h2>
            </div>

            <div class="flex flex-col gap-8 ">
            <p class="text-[var(--text-color)] tracking-wider leading-6 text-[14px] md:text-[18px] md:leading-8">Show Room-ul Luxury Cafe este locul perfect pentru a descoperi ultimele tendințe în lumea cafelei și a aparatelor de cafea. Show Room-ul nostru este proiectat pentru a oferi o experiență completă și interactivă pentru clienții noștri, unde puteți vedea, atinge și testa produsele noastre de calitate superioară.</p>

            <p class="text-[var(--text-color)] tracking-wider leading-6 text-[14px] md:text-[18px] md:leading-8">În Show Room-ul nostru, puteți găsi o varietate de aparate de cafea de ultimă generație, de la cele mai bune branduri din industrie, precum și o selecție impresionantă de cafea de calitate superioară, provenind de la producători din întreaga lume.</p>

            <p class="text-[var(--text-color)] tracking-wider leading-6 text-[14px] md:text-[18px] md:leading-8">Unul dintre cele mai importante aspecte ale Show Room-ului nostru este că vă oferim posibilitatea de a gusta diferite tipuri de cafea, prin intermediul degustărilor, unde puteți descoperi și compara diferite arome și note de gust.</p>

            <p class="text-[var(--text-color)] tracking-wider leading-6 text-[14px] md:text-[18px] md:leading-8">În plus, personalul nostru calificat și amabil vă va sta la dispoziție pentru a vă oferi informații și consiliere cu privire la alegerea aparatului de cafea potrivit și a cafelei care se potrivește cel mai bine nevoilor dumneavoastră.</p>

            <p class="text-[var(--text-color)] tracking-wider leading-6 text-[14px] md:text-[18px] md:leading-8">Vino să vizitezi Show Room-ul Luxury Cafe pentru a descoperi lumea cafelei de calitate superioară și a aparatelor de cafea de ultimă generație!</p>
            </div>
        </div>
      </div>

        <div class="relative w-full h-[652px] md:h-[800px] overflow-hidden">
            <img src="/images/about.webp" alt="фabout" 
            class="w-full h-full object-cover md:w-1/2 md:absolute md:left-0 md:h-full">
    
            <div class="absolute md:right-[40px] inset-0 flex items-center justify-end md:justify-center z-10">
              <div class="flex flex-col gap-8 bg-white/95 backdrop-blur-sm rounded-lg p-6 md:p-18 w-full md:w-2/2 max-w-md md:max-w-2xl shadow-xl m-4 md:m-0 ml-auto md:ml-0">
                <h2 class="font-serif font-bold uppercase text-3xl md:text-5xl text-coffee-dark tracking-wide">
                    Misiunea noastră
                </h2>
                    <div class="space-y-4 text-coffee-medium leading-relaxed text-sm md:text-lg tracking-wide">
                        <p class="text-[var(--text-color)] tracking-wider leading-6 text-[14px] md:text-[18px] md:leading-8">
                            Misiunea LuxuryCafe este de a oferi clienților cele mai bune produse și servicii din industria cafelei.
                        </p>
                        <p class="text-[var(--text-color)] tracking-wider leading-6 text-[14px] md:text-[18px] md:leading-8">
                            Ne concentrăm pe vânzarea de cafea de calitate superioară și aparate de cafea de ultimă generație pentru a oferi o experiență de cafea de lux tuturor clienților noștri.
                        </p>
                        <p class="text-[var(--text-color)] tracking-wider leading-6 text-[14px] md:text-[18px] md:leading-8">
                            Ne dedicăm să oferim o varietate de opțiuni de cafea de la diferiți producători și să ne asigurăm că fiecare client găsește ceea ce caută.
                        </p>
                        <p class="text-[var(--text-color)] tracking-wider leading-6 text-[14px] md:text-[18px] md:leading-8">
                            În plus, ne angajăm să oferim suport tehnic și instrucțiuni pentru utilizarea corectă a aparatelor de cafea pentru ca clienții să poată obține cea mai bună cafea posibilă.
                        </p>
                    </div>
                </div>
            </div>
        </div>
</section>


    <?php require __DIR__ . "/components/footer.php"; ?>
</body>
</html>