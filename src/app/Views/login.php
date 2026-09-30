<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - <?= $this->appName ?></title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="/js/login.js"></script>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    <?php require __DIR__ . "/components/header.php"; ?>

    <main class="flex-grow flex flex-col justify-center items-center px-6 py-12">
        <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">
            <h1 class="text-2xl font-bold text-center mb-6 text-[var(--main-color)]">Login</h1>
            
            <form id="login-form" class="flex flex-col gap-4">
                <input type="text" name="username_email" placeholder="Username / Email" class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[var(--main-color)]">
                <input type="password" name="password" placeholder="Password" class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-[var(--main-color)]">
                <button type="submit" class="bg-[var(--main-color)] text-white py-2 rounded-lg font-semibold hover:bg-opacity-90 transition">
                    Login
                </button>
            </form>
            
            <p id="form-error" class="text-red-500 text-sm mt-3 text-center"></p>
            <p id="form-success" class="text-green-500 text-sm mt-1 text-center"></p>
            
            <p class="mt-4 text-sm text-center text-gray-600">
                Don't have an account? 
                <a href="/register" class="text-[var(--main-color)] hover:underline font-semibold">Register</a>
            </p>
        </div>
    </main>


    <?php require __DIR__ . "/components/footer.php"; ?>

</body>
</html>
