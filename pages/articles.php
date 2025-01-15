<div id="article">
    <nav class="flex gap-2 flex-wrap sm:flex-nowrap sm:gap-8 mb-4">
        <a
            href="/articles/latest"
            class="<?php
                    if ($active["latest"]) echo "text-white bg-purple-600";
                    else echo "text-zinc-600";
                    ?> 
                    py-2 px-4 border-2 border-purple-600">
            Latest
        </a>
        <a
            href="/articles/most-liked"
            class="<?php
                    if ($active["mostLiked"]) echo "text-white bg-purple-600";
                    else echo "text-zinc-600";
                    ?>
                    py-2 px-4 border-2 border-purple-600">
            Most Liked
        </a>
        <a
            href="/articles/editors-picks"
            class="<?php
                    if ($active["editorsPicks"]) echo "text-white bg-purple-600";
                    else echo "text-zinc-600";
                    ?>
                    py-2 px-4 border-2 border-purple-600">
            Editors Picks
        </a>
    </nav>
    <main class="py-3 sm:py-8">
        <article class="grid grid-cols-1 sm:grid-cols-[1fr_2fr]">
            <div id="sidebar" class="mb-6 sm:mb-0 sm:px-6 sm:border-l-2 sm:border-pink-600 h-fit">
                <h1 class="text-3xl font-bold mb-2 sm:my-12"><?php echo $article['title']; ?></h1>
                <p>By <?php echo $article['author'] ?></p>
                <time><?php echo $article['createdAt']; ?></time>
            </div>
            <div id="content">
                <div id="video-container" class="relative w-full pb-[56.25%] h-0 overflow-hidden mb-8">
                    <iframe src="<?php echo $article['videoLink'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="absolute top-0 left-0 w-full h-full"></iframe>
                </div>
                <p class="text-lg"><?php echo $article['content']; ?></p>
            </div>
        </article>
    </main>
</div>