<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'My Website' ?></title>
    <!-- <link rel="stylesheet" href="/styles/layout.css">
    <link rel="stylesheet" href="/styles/mediaQueries.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div id="root">
        <header class="px-4 sm:px-12 py-4 border-b-2 border-purple-600 flex justify-between items-center relative">
            <a href="/" class="montserrat-bold text-xl font-bold text-purple-600">SF<span class="text-zinc-600">BEN</span></a>
            <button id="toggleMenuButton" class="sm:hidden bg-purple-500 text-white px-3 py-1 rounded-sm">Menu</button>
            <nav class="hidden sm:flex gap-16">
                <a class="ubuntu-normal font-semibold text-zinc-500 transition-colors duration-200 hover:text-purple-600" href="/articles/latest">Articles by role</a>
                <a class="ubuntu-normal font-semibold text-zinc-500 transition-colors duration-200 hover:text-purple-600" href="/events">Events</a>
                <a class="ubuntu-normal font-semibold text-zinc-500 transition-colors duration-200 hover:text-purple-600" href="/career">Career</a>
                <a class="ubuntu-normal font-semibold text-zinc-500 transition-colors duration-200 hover:text-purple-600" href="/news">Salesforce News</a>
            </nav>
            <nav class="mobile-menu transform sm:hidden flex gap-8 py-8 z-10 flex-col justify-around py-4 absolute top-0 left-0 w-full h-[calc(100vh-100%)] text-center bg-zinc-200 transition-transform duration-300 ease-in-out -translate-y-full">
                <a class="ubuntu-normal font-semibold text-zinc-500 transition-colors duration-200 hover:text-purple-600" href="/articles/latest">Articles by role</a>
                <a class="ubuntu-normal font-semibold text-zinc-500 transition-colors duration-200 hover:text-purple-600" href="/events">Events</a>
                <a class="ubuntu-normal font-semibold text-zinc-500 transition-colors duration-200 hover:text-purple-600" href="/career">Career</a>
                <a class="ubuntu-normal font-semibold text-zinc-500 transition-colors duration-200 hover:text-purple-600" href="/news">Salesforce News</a>
            </nav>
        </header>
        <main class="p-8 grid gap-4 grid-cols-1 sm:grid-cols-[3fr_1fr]">
            <section id="content">
                <?= $content ?>
            </section>
            <section id="advertisements" class="py-4 flex gap-4 flex-col">
                <div id="ad-one" class="w-full h-[350px] bg-blue-500 text-white grid place-items-center text-2xl">Advertisement 1</div>
                <div id="ad-two" class="w-full h-[350px] bg-blue-500 text-white grid place-items-center text-2xl">Advertisement 2</div>
            </section>
        </main>
        <footer class="bg-purple-600 text-white py-8 px-4">
            <p class="text-center">&copy; <?= date('Y') ?><?= $title ?? "My Website" ?>. All rights reserved.</p>
        </footer>
    </div>
    <script src="/scripts/layout.js"></script>
    <?= $pageScripts ?>
</body>

</html>