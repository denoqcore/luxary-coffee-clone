<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Luxury Cafe - Experiența cafelei perfecte începe aici</title>
    <link href="/css/styles.css?v=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="max-w-full overflow-x-hidden">
    <?php require __DIR__ . "/components/header.php"; ?>
    <main>
        <?php
            if (isset($_SESSION["logout_message"]))
            {
                echo "<p>{$_SESSION['logout_message']}</p>";
                unset($_SESSION["logout_message"]);
            }
        ?>
        <div>
            <?php require __DIR__ . "/components/hero.php";?>
        </div>
        
        <div>
             <?php require __DIR__ . "/components/aboutUs.php";?>
        </div>

        <div>
            <?php require __DIR__ . "/components/products.php";?>
        </div>

        <div>
            <?php require __DIR__ . "/components/testimonial.php";?>
        </div>

        <div>
            <?php require __DIR__ . "/components/sponsors.php";?>
        </div>

         <!-- top -->
        <div class="fixed bottom-20 right-10 hover:hover:translate-y-1 duration-200"">
          <a href="#top" class="p-3 bg-[var(--main-color)] text-white rounded-lg transition-all duration-200">
            <i class="fa-solid fa-arrow-up"></i>
          </a>
        </div>

        
    </main>
    <?php require __DIR__ . "/components/footer.php"; ?>
</body>
</html>