<?php require __DIR__ . "/components/header.php"; ?>

<link rel="stylesheet" href="/css/styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<script src="//unpkg.com/alpinejs" defer></script>

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
            <h1 class="text-[32px] md:text-[42px] font-bold uppercase"><?= ($product['name']) ?></h1>
            <div class="flex flex-row uppercase text-[14px] md:text-[20px] gap-2 cursor-pointer">
              <a href="/" class="cursor-pointer">Principală</a> /
              <p class="text-[var(--main-color)]"><?= ($product['brand']) ?></p>
            </div>
        </div>
      </div>


      <div class="flex items-center justify-center bg-[var(--bg-color)] px-4">
        <div class="flex flex-col md:flex-row gap-10 max-w-6xl w-full rounded-2xl p-6 md:p-10">

          <div class="flex-1 flex items-center justify-center">
            <img src="<?= ($product['image']) ?>" alt="<?= ($product['name']) ?>"
                 class="object-contain w-full max-w-[400px] transition-transform duration-300 hover:scale-101 border border-[0.1px] border-[var(--text-color)] rounded-lg">
          </div>

          <div class="flex-1 flex flex-col gap-4 justify-center">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-2">
              <h2 class="text-2xl font-bold"><?= ($product['name']) ?></h2>
              <span class="flex flex-row text-[var(--main-color)] space-x-1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </span>
            </div>

            <p class="text-[var(--text-color)] text-sm leading-7">
              <?= ($product['description']) ?>
            </p>

            <p class="text-sm font-semibold flex items-center gap-2">
              <span class="text-[var(--main-color)] text-xs">
                <i class="fa-solid fa-check"></i>
              </span>
              în stoc
            </p>

            <p class="text-sm font-semibold flex items-center gap-2">
              <span class="text-[var(--main-color)] text-xs">
                <i class="fa-solid fa-check"></i>
              </span>
              Livrare Gratuită
            </p>

            <span class="text-xl font-bold text-[var(--main-color)]">
              <?= ($product['price']) ?> MDL
            </span>
          </div>

        </div>
    </div>

</section>

<?php require __DIR__ . "/components/footer.php"; ?>
