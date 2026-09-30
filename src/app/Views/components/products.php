<?php
$categories = $categories ?? [];
$products = $products ?? [];
?>
<section class="bg-[var(--bg-color)] py-12">
  <div class="container mx-auto px-4 flex flex-col gap-6 items-center">
    <div class="text-center">
      <span class="text-[12px] bg-[var(--main-color)] px-4 py-1 text-white rounded-sm uppercase tracking-widest">Noi recomandăm</span>
      <h3 class="font-bold text-[28px] md:text-[32px] mt-4 uppercase">Cele mai populare produse</h3>
    </div>

    <ul id="category-filters" class="flex flex-wrap justify-center gap-2 xl:border-[0.1px] border-[var(--border)] xl:rounded-lg">
      <li>
        <button type="button" data-filter="all" class="filter-btn text-[15px] font-medium uppercase text-gray-600 bg-transparent py-2 px-6 rounded-md transition-colors hover:bg-[var(--main-color)] hover:text-white cursor-pointer active">
          TOATE
        </button>
      </li>

      <?php foreach ($categories as $category): ?>
        <li>
          <button type="button" data-filter="<?= $category['id'] ?>"
                  class="filter-btn text-[15px] font-medium uppercase text-gray-600 bg-transparent py-2 px-6 rounded-md transition-colors hover:bg-[var(--main-color)] hover:text-white cursor-pointer">
            <?= ($category['name']) ?>
          </button>
        </li>
      <?php endforeach; ?>

    </ul>

      <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-10 gap-8 w-full max-w-[1100px] mx-auto px-4">
        <?php foreach ($products as $product): ?>
          <a href="/product?id=<?= $product['id'] ?>" 
             class="product-card flex flex-col items-center text-center rounded-2xl transition-all duration-300 cursor-pointer hover:scale-[1.02]"
             data-category-id="<?= $product['category_id'] ?>">
        
            <div class="w-full h-56 flex items-center justify-center mb-2">
              <img src="<?= ($product['image']) ?>" alt="<?= ($product['name']) ?>"
                   class="object-contain max-h-52 transition-transform duration-300 hover:scale-105">
            </div>
        
            <div class="bg-white rounded-xl shadow-md flex flex-col items-center space-y-2 w-full max-w-[300px] py-5 px-4">
              <p class="uppercase text-[15px] font-semibold">
                <?= ($product['brand']) ?>
              </p>
              <h4 class="uppercase font-bold text-[18px] text-gray-800 leading-snug max-w-[220px]">
                <?= ($product['name']) ?>
              </h4>
              <p class="text-[var(--main-color)] text-[16px] font-semibold">
                <?= ($product['price']) ?> MDL
              </p>
            </div>
        
          </a>
        <?php endforeach; ?>
      </div>

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const buttons = document.querySelectorAll('.filter-btn');
  const products = document.querySelectorAll('.product-card');

  buttons.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.getAttribute('data-filter');

      products.forEach(card => {
        const categoryId = card.getAttribute('data-category-id');
        if (filter === 'all' || filter === categoryId) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
});
</script>
