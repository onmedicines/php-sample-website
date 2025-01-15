<div id="events" class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-purple-600">Upcoming Salesforce Events</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <?php foreach ($events as $event): ?>
            <div class="border-2 border-purple-600 rounded-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="<?php echo $event['thumbnail']; ?>" alt="Event thumbnail" class="w-full h-48 object-stretch rounded-md p-2">
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2"><?php echo $event['title']; ?></h2>
                    <div class="mb-4 text-gray-600">
                        <p class="mb-1">📅 <?php echo $event['date']; ?></p>
                        <p>📍 <?php echo $event['location']; ?></p>
                    </div>
                    <p class="mb-4 text-gray-700"><?php echo $event['description']; ?></p>
                    <a
                        href="<?php echo $event['registrationUrl']; ?>"
                        class="inline-block bg-purple-600 text-white px-6 py-2 rounded hover:bg-purple-700 transition-colors">
                        Register Now
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>