<div id="careers" class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-purple-600">Salesforce Career Opportunities</h1>

    <div class="space-y-6">
        <?php foreach ($careers as $job): ?>
            <div class="border-2 border-purple-600 rounded-md p-6 hover:shadow-lg transition-shadow">
                <h2 class="text-2xl font-bold mb-2"><?php echo $job['title']; ?></h2>
                <div class="mb-4 text-gray-600">
                    <p><?php echo $job['company']; ?> | <?php echo $job['location']; ?></p>
                    <p class="font-semibold"><?php echo $job['salary']; ?></p>
                </div>
                <p class="mb-4 text-gray-700"><?php echo $job['description']; ?></p>
                <div class="flex justify-between items-center">
                    <time class="text-sm text-gray-500">Posted: <?php echo $job['postedAt']; ?></time>
                    <button class="bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700 transition-colors">
                        Apply Now
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>