<div id="news" class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-purple-600"><?php echo $news['title']; ?></h1>

    <div class="mb-4 text-sm text-gray-600">
        <span>By <?php echo $news['author']; ?></span>
        <span class="mx-2">|</span>
        <time><?php echo $news['createdAt']; ?></time>
    </div>

    <img src="<?php echo $news['imageUrl']; ?>" alt="News cover image" class="w-full h-auto mb-8 rounded-lg shadow-lg">

    <div class="prose max-w-none">
        <p class="text-lg leading-relaxed text-gray-700">
            <?php echo $news['content']; ?>
        </p>
    </div>
</div>