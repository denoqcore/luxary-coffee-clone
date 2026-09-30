<?php
use App\Models\User;

if (session_status() === PHP_SESSION_NONE) session_start();

if (!User::loggedIn()) {
    header("Location: /login");
    exit;
}

$userId = $_SESSION['user_id'] ?? null;

$user = User::getUserById($userId);
$username = $user['username'] ?? 'Oaspete';

$isAdmin = User::isAdmin($userId);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Luxary Coffee | Profil</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
          integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gradient-to-b from-gray-50 to-gray-100 text-gray-800 min-h-screen flex flex-col">

    <?php require __DIR__ . "/components/header.php"; ?>

    <main class="flex flex-col items-center justify-center flex-1 px-4">
        <div class="bg-white shadow-lg rounded-2xl p-10 w-full max-w-md text-center border border-gray-100">
            <div class="mb-6">
                <h1 class="text-3xl font-extrabold tracking-tight text-[var(--main-color)] mb-2">Profilul meu</h1>
                <p class="text-gray-500 text-sm">Bine ati venit!</p>
            </div>

            <div class="mb-8">
                <p class="text-lg text-gray-700">
                    Salut, 
                    <span class="font-semibold text-[var(--main-color)]"><?= htmlspecialchars($username) ?></span>
                </p>
            </div>

          <div class="flex flex-col gap-3 items-center">
    <?php if ($isAdmin): ?>
        <a href="/admin" 
           class="w-full inline-block text-center font-semibold text-sm uppercase tracking-wide border border-[var(--main-color)] text-[var(--main-color)] px-4 py-2 rounded-lg hover:bg-[var(--main-color)] hover:text-white transition-all duration-300">
           Panoul pentru dezvoltatori
        </a>
    <?php endif; ?>

    <form action="/logout" method="POST" class="w-full">
        <button
            class="w-full border text-black font-semibold text-sm uppercase tracking-wide px-4 py-2 rounded-lg transition-all duration-300 cursor-pointer hover:bg-gray-100">
            ieși
        </button>
    </form>
</div>

        </div>
    </main>

    <?php require __DIR__ . "/components/footer.php"; ?>
</body>
</html>
