<div id="home">
    <section class="relative bg-purple-600 text-white py-16 px-4 rounded-lg mb-12">
        <div class="w-full sm:max-w-4xl mx-auto px-4">
            <h1 class="text-3xl sm:text-4xl sm:text-5xl font-bold mb-4">Your Ultimate Salesforce Career Resource</h1>
            <p class="text-xl mb-8">Stay updated with the latest Salesforce news, career opportunities, and expert insights.</p>
            <a href="/career" class="inline-block bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Explore Opportunities
            </a>
        </div>
    </section>

    <section class="mb-16">
        <h2 class="text-2xl font-bold mb-6 text-purple-600">Featured Article</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center border-2 border-purple-600 rounded-lg p-6">
            <img src="<?php echo $featuredArticle['thumbnail']; ?>" alt="Featured article thumbnail" class="w-full h-64 object-cover rounded-lg">
            <div>
                <h3 class="text-2xl font-bold mb-3"><?php echo $featuredArticle['title']; ?></h3>
                <p class="text-gray-600 mb-2">By <?php echo $featuredArticle['author']; ?></p>
                <p class="text-gray-700 mb-4"><?php echo $featuredArticle['excerpt']; ?></p>
                <a href="<?php echo $featuredArticle['link']; ?>" class="inline-block bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700 transition-colors">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <section class="mb-16">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-purple-600">Latest News</h2>
            <a href="/news" class="text-purple-600 hover:text-purple-700">View All →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($latestNews as $news): ?>
                <div class="border-2 border-purple-600 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="<?php echo $news['thumbnail']; ?>" alt="News thumbnail" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2"><?php echo $news['title']; ?></h3>
                        <time class="text-gray-600"><?php echo $news['date']; ?></time>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="mb-16">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-purple-600">Upcoming Events</h2>
            <a href="/events" class="text-purple-600 hover:text-purple-700">View All →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($upcomingEvents as $event): ?>
                <div class="border-2 border-purple-600 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="<?php echo $event['thumbnail']; ?>" alt="Event thumbnail" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2"><?php echo $event['title']; ?></h3>
                        <p class="text-gray-600">📅 <?php echo $event['date']; ?></p>
                        <p class="text-gray-600">📍 <?php echo $event['location']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="mb-16">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-purple-600">Featured Jobs</h2>
            <a href="/career" class="text-purple-600 hover:text-purple-700">View All →</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($featuredJobs as $job): ?>
                <div class="border-2 border-purple-600 rounded-lg p-6 hover:shadow-lg transition-shadow">
                    <h3 class="font-bold text-xl mb-2"><?php echo $job['title']; ?></h3>
                    <p class="text-gray-600 mb-1"><?php echo $job['company']; ?></p>
                    <p class="text-gray-600 mb-2">📍 <?php echo $job['location']; ?></p>
                    <p class="font-semibold text-purple-600 mb-4"><?php echo $job['salary']; ?></p>
                    <a href="<?php echo $job['link']; ?>" class="inline-block bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700 transition-colors">
                        Apply Now
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</div>