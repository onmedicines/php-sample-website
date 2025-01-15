<?php

namespace App\Controllers;

class ArticleController
{
    public function latest()
    {
        $title = "Articles";
        $active = ["latest" => true, "mostLiked" => false, "editorsPicks" => false];
        $article = [
            'title' => 'Are Saleseforce Certifications Still Valid? Top Voices Join the Great Cert Debate',
            'author' => "Henry Martin",
            'videoLink' => 'https://www.youtube.com/embed/uh4e1yppnfg?si=_r9iJMhMtw5CttaP',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet mauris enim. Curabitur condimentum eros et nulla lacinia, sit amet efficitur eros bibendum. Suspendisse efficitur laoreet sapien nec rutrum. Quisque rutrum in ligula ut hendrerit. Morbi dolor mi, vestibulum vel urna sit amet, tristique pulvinar eros. Phasellus vehicula ex et porta sagittis. Nullam in ipsum nunc. Curabitur efficitur leo vitae orci viverra sagittis. Nullam at imperdiet magna. Vivamus rutrum massa ac mauris ornare, in blandit arcu mollis. Ut sit amet nisl blandit, tincidunt massa quis, finibus nunc. Praesent ac accumsan metus. Cras eu mollis lectus, nec ullamcorper justo.<br><br>
            Vestibulum bibendum risus ut enim dignissim gravida. Fusce vestibulum vulputate massa sed feugiat. Donec in libero efficitur, blandit justo ut, lobortis lorem. Mauris sollicitudin ac est sit amet vehicula. Cras venenatis, turpis quis dapibus tempus, mi ante interdum erat, pellentesque vehicula ligula metus suscipit tellus. Nam ac egestas augue. Nunc id vestibulum leo. Integer finibus quam quis ex vulputate, sit amet finibus justo porttitor. Duis id justo libero. Nullam eu luctus enim, vel feugiat ex. Sed malesuada consequat diam, sit amet egestas nisl tempor nec. Duis odio ligula, gravida id odio a, rutrum imperdiet ante. Donec aliquet ultrices nisi, eget laoreet lectus dictum quis. Duis tincidunt viverra vulputate. Morbi et dignissim nisi.<br><br>
            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Praesent pretium ultrices auctor. Nam dapibus sollicitudin risus, vel congue nibh mollis quis. Maecenas eu diam vestibulum, fringilla sem nec, ullamcorper turpis. Aenean diam justo, faucibus ac velit sed, suscipit tristique turpis. Vestibulum sagittis dictum lacus, at aliquet tortor vehicula sit amet. Pellentesque malesuada in tellus eget pharetra.<br><br>
            In ornare commodo diam sit amet tristique. Proin sit amet sollicitudin ligula, in pulvinar velit. Quisque purus neque, mattis et arcu ac, luctus placerat nunc. Donec purus diam, facilisis at interdum at, convallis a ante. In fermentum malesuada tincidunt. Fusce facilisis ipsum viverra, congue augue non, vestibulum nulla. Cras mattis diam orci, vel pellentesque mauris mattis dictum. Integer consequat sit amet tellus ac vehicula. Nullam nunc felis, cursus at aliquet sit amet, pellentesque non ex. Vivamus convallis porttitor enim sit amet varius. Duis eget ultricies quam. Nam scelerisque vestibulum augue, at tempus orci porta non.<br><br>
            Duis nec eros ut metus vulputate blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam ut mi nec metus mattis rhoncus quis quis augue. Praesent vitae sagittis tortor. Nunc sed pharetra justo. Cras et tristique ligula, et facilisis neque. Mauris dignissim hendrerit nunc id commodo.",
            'createdAt' => '2025-01-14'
        ];
        // $pageStyles = "<link rel=\"stylesheet\" href=\"/styles/article.css\">";
        $pageScripts = "<script src=\"js/article.js\"></script>";

        ob_start();
        require __DIR__ . '/../../pages/articles.php';
        $content = ob_get_clean();

        require __DIR__ . '/../layout.php';
    }
    public function mostLiked()
    {
        $title = "Articles";
        $active = ["latest" => false, "mostLiked" => true, "editorsPicks" => false];
        $article = [
            'title' => 'Top Ten Salseforce Niches To Learn in 2025',
            'author' => "Salseforce Ben",
            'videoLink' => 'https://www.youtube.com/embed/KPMaEf-FTKc?si=y_GsyAarDFY592Ea',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet mauris enim. Curabitur condimentum eros et nulla lacinia, sit amet efficitur eros bibendum. Suspendisse efficitur laoreet sapien nec rutrum. Quisque rutrum in ligula ut hendrerit. Morbi dolor mi, vestibulum vel urna sit amet, tristique pulvinar eros. Phasellus vehicula ex et porta sagittis. Nullam in ipsum nunc. Curabitur efficitur leo vitae orci viverra sagittis. Nullam at imperdiet magna. Vivamus rutrum massa ac mauris ornare, in blandit arcu mollis. Ut sit amet nisl blandit, tincidunt massa quis, finibus nunc. Praesent ac accumsan metus. Cras eu mollis lectus, nec ullamcorper justo.<br><br>
            Vestibulum bibendum risus ut enim dignissim gravida. Fusce vestibulum vulputate massa sed feugiat. Donec in libero efficitur, blandit justo ut, lobortis lorem. Mauris sollicitudin ac est sit amet vehicula. Cras venenatis, turpis quis dapibus tempus, mi ante interdum erat, pellentesque vehicula ligula metus suscipit tellus. Nam ac egestas augue. Nunc id vestibulum leo. Integer finibus quam quis ex vulputate, sit amet finibus justo porttitor. Duis id justo libero. Nullam eu luctus enim, vel feugiat ex. Sed malesuada consequat diam, sit amet egestas nisl tempor nec. Duis odio ligula, gravida id odio a, rutrum imperdiet ante. Donec aliquet ultrices nisi, eget laoreet lectus dictum quis. Duis tincidunt viverra vulputate. Morbi et dignissim nisi.<br><br>
            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Praesent pretium ultrices auctor. Nam dapibus sollicitudin risus, vel congue nibh mollis quis. Maecenas eu diam vestibulum, fringilla sem nec, ullamcorper turpis. Aenean diam justo, faucibus ac velit sed, suscipit tristique turpis. Vestibulum sagittis dictum lacus, at aliquet tortor vehicula sit amet. Pellentesque malesuada in tellus eget pharetra.<br><br>
            In ornare commodo diam sit amet tristique. Proin sit amet sollicitudin ligula, in pulvinar velit. Quisque purus neque, mattis et arcu ac, luctus placerat nunc. Donec purus diam, facilisis at interdum at, convallis a ante. In fermentum malesuada tincidunt. Fusce facilisis ipsum viverra, congue augue non, vestibulum nulla. Cras mattis diam orci, vel pellentesque mauris mattis dictum. Integer consequat sit amet tellus ac vehicula. Nullam nunc felis, cursus at aliquet sit amet, pellentesque non ex. Vivamus convallis porttitor enim sit amet varius. Duis eget ultricies quam. Nam scelerisque vestibulum augue, at tempus orci porta non.<br><br>
            Duis nec eros ut metus vulputate blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam ut mi nec metus mattis rhoncus quis quis augue. Praesent vitae sagittis tortor. Nunc sed pharetra justo. Cras et tristique ligula, et facilisis neque. Mauris dignissim hendrerit nunc id commodo.",
            'createdAt' => '2025-01-14'
        ];
        $pageStyles = "<link rel=\"stylesheet\" href=\"/styles/article.css\">";
        $pageScripts = "<script src=\"js/article.js\"></script>";

        ob_start();
        require __DIR__ . '/../../pages/articles.php';
        $content = ob_get_clean();

        require __DIR__ . '/../layout.php';
    }
    public function editorsPicks()
    {
        $title = "Articles";
        $active = ["latest" => false, "mostLiked" => false, "editorsPicks" => true];
        $article = [
            'title' => 'TOP 10 Hottest Salesforce Spring 25 Features for ADMINS',
            'author' => "Salseforce Ben",
            'videoLink' => 'https://www.youtube.com/embed/Iiei1qiJcAI?si=YpPVZdtyQh4Xfzgd',
            'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet mauris enim. Curabitur condimentum eros et nulla lacinia, sit amet efficitur eros bibendum. Suspendisse efficitur laoreet sapien nec rutrum. Quisque rutrum in ligula ut hendrerit. Morbi dolor mi, vestibulum vel urna sit amet, tristique pulvinar eros. Phasellus vehicula ex et porta sagittis. Nullam in ipsum nunc. Curabitur efficitur leo vitae orci viverra sagittis. Nullam at imperdiet magna. Vivamus rutrum massa ac mauris ornare, in blandit arcu mollis. Ut sit amet nisl blandit, tincidunt massa quis, finibus nunc. Praesent ac accumsan metus. Cras eu mollis lectus, nec ullamcorper justo.<br><br>
            Vestibulum bibendum risus ut enim dignissim gravida. Fusce vestibulum vulputate massa sed feugiat. Donec in libero efficitur, blandit justo ut, lobortis lorem. Mauris sollicitudin ac est sit amet vehicula. Cras venenatis, turpis quis dapibus tempus, mi ante interdum erat, pellentesque vehicula ligula metus suscipit tellus. Nam ac egestas augue. Nunc id vestibulum leo. Integer finibus quam quis ex vulputate, sit amet finibus justo porttitor. Duis id justo libero. Nullam eu luctus enim, vel feugiat ex. Sed malesuada consequat diam, sit amet egestas nisl tempor nec. Duis odio ligula, gravida id odio a, rutrum imperdiet ante. Donec aliquet ultrices nisi, eget laoreet lectus dictum quis. Duis tincidunt viverra vulputate. Morbi et dignissim nisi.<br><br>
            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Praesent pretium ultrices auctor. Nam dapibus sollicitudin risus, vel congue nibh mollis quis. Maecenas eu diam vestibulum, fringilla sem nec, ullamcorper turpis. Aenean diam justo, faucibus ac velit sed, suscipit tristique turpis. Vestibulum sagittis dictum lacus, at aliquet tortor vehicula sit amet. Pellentesque malesuada in tellus eget pharetra.<br><br>
            In ornare commodo diam sit amet tristique. Proin sit amet sollicitudin ligula, in pulvinar velit. Quisque purus neque, mattis et arcu ac, luctus placerat nunc. Donec purus diam, facilisis at interdum at, convallis a ante. In fermentum malesuada tincidunt. Fusce facilisis ipsum viverra, congue augue non, vestibulum nulla. Cras mattis diam orci, vel pellentesque mauris mattis dictum. Integer consequat sit amet tellus ac vehicula. Nullam nunc felis, cursus at aliquet sit amet, pellentesque non ex. Vivamus convallis porttitor enim sit amet varius. Duis eget ultricies quam. Nam scelerisque vestibulum augue, at tempus orci porta non.<br><br>
            Duis nec eros ut metus vulputate blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nam ut mi nec metus mattis rhoncus quis quis augue. Praesent vitae sagittis tortor. Nunc sed pharetra justo. Cras et tristique ligula, et facilisis neque. Mauris dignissim hendrerit nunc id commodo.",
            'createdAt' => '2025-01-14'
        ];
        $pageStyles = "<link rel=\"stylesheet\" href=\"/styles/article.css\">";
        $pageScripts = "<script src=\"js/article.js\"></script>";

        ob_start();
        require __DIR__ . '/../../pages/articles.php';
        $content = ob_get_clean();

        require __DIR__ . '/../layout.php';
    }
}
