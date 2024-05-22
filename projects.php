<?php

$projects = [
    'woitr' => [
        'showName' => 'Woitr',
        'tags'  => ['flutter', "Node.js", "react", 'web-sockets', 'push-notifications', 'restaurant-management'],
        'time'  => 'mid 2021 +',
        'description' => "Woitr allows restaurants function paperless with digital menu and ordering, KOT and Bills printing, accounting, daily reports and more. Additionally it supports customer ordering from their specific tables.",
        'thumbnail' => 'images/woitr.png',
        'link' => 'https://woitr.com',
    ],
    'koich-dictionary' => [
        'showName' => 'Koĩts Durda',
        'tags'  => ['flutter', 'ota', 'sqflite-database'],
        'time'  => 'early 2021',
        'description' => "A dictionary for Koich language, a language spoken in Nepal. It has a database of 1000+ words and their meanings. It also has a feature to add new words and meanings.",
        'thumbnail' => 'images/koich_dictionary.png',
        'appStoreLink' => 'https://apps.apple.com/np/app/ko%C4%A9ts-durda/id1665949276',
        'playStoreLink' => "https://play.google.com/store/apps/details?id=com.arjunq21.koich_dictionary",
    ],
    'bell-control' => [
        'showName' => 'Bell Control',
        'tags'  => ['IOT', "flutter", "Node.js", 'web-sockets'],
        'time'  => 'early 2022',
        'description' => "Bell Control Project offers you with an electric bell and a mobile app from which you can configure ring schedules (Regular class, exam time, etc) and ring your school bell from anywhere, just with a tap of a button in app.",
        'thumbnail' => 'images/bell-control.png',
        'link' => 'https://padxu.com/share/bell_control.apk',
    ],
    'animal-repelling' => [
        'showName' => 'Animal Repelling App',
        'tags'  => ['IOT', "flutter", "laravel", 'push-notifications'],
        'time'  => 'early 2022',
        'description' => "Eco Tech's Animal Repelling project is mostly used to chase away monkeys in rural areas of Nepal. Its sensors detect movements of animals and play repelling sounds, apply electric current in fences and notify farmers in realtime whenever monkeys are detected.",
        'thumbnail' => 'images/animal-repelling.png',
        'appStoreLink' => 'https://apps.apple.com/app/id6446614220',
        'playStoreLink' => "https://play.google.com/store/apps/details?id=com.arjunq21.animal_repelling_system",
    ],
    'landing-page' => [
        'showName' => 'Fitness Company Landing Page',
        'tags'  => ['core-css-js', 'youtube-data-api'],
        'time'  => 'mid 2021',
        'description' => "Landing Page Design for Gravity Challenges | A Gym and Fitness Company.",
        'thumbnail' => 'images/landing-page-resized.png',
        'link' => 'https://gravitytransformation.com/new-landing-page/',
    ],
    'ripple' => [
        'showName' => 'Ripple',
        'tags' => ['wordpress', 'custom theme development', 'plugin development'],
        'time' => 'late 2020',
        'description' => 'Construction company website for showcasing construction, consulting and training works and leads collection.',
        'thumbnail' => 'images/Ripple-resized.png',
        'link' => 'https://www.ripple.com.np/',
    ],
    'padxu' => [
        'showName' => 'Padxu',
        'tags'  => ['laravel', 'bootstrap', 'full stack'],
        'time'  => 'late 2019',
        'description' => "Studying platform",
        'thumbnail' => 'images/padxu-resized.jpg',
        'link' => 'https://padxu.com',
    ],
    'ianepal' => [
        'showName' => 'Infinity Adventures Nepal',
        'tags' => ['laravel', 'full stack', 'bootstrap', 'custom admin panel'],
        'time' => 'early 2020',
        'description' => 'Full featured Trekking site with custom admin panel for treks, blogs, slider and more.',
        'thumbnail' => 'images/ianepal-resized.jpg',
        'link' => 'http://ianepal.com',
    ],
    'macro-calculator' => [
        'showName' => "Macros calculator",
        'time' => 'early 2019',
        'tags' => ['front-end', 'jquery', 'html5'],
        'description' => 'Front end design of Macros calculator (single page) for Gravity Challenges by designing custom web components in Javascript.',
        'thumbnail' => 'images/macros-2.jpg',
        'link' => 'https://gravitytransformation.com/macro-calculator/',
    ],
    'jcdcnepal' => [
        'showName' => 'Jagaran Community Development Centre',
        'tags' => ['laravel', 'full stack', 'html5'],
        'time' => 'early 2020',
        'description' => 'NGO site with admin panel for dynamic gallery, editing static pages, slider images and more...',
        'thumbnail' => 'images/jcdc-resized.jpg',
        'link' => "http://jcdcnepal.org"
    ],

];

// echo json_encode($projects, JSON_PRETTY_PRINT) ;

?>
<!-- <p>Some of</p> -->
<span class="smallTitleText">
    <span><small style='font-size: 12px; font-weight: normal;'>Some of</small><br>
        My Projects ...
    </span>
</span>
<div class="projects">
    <?php foreach ($projects as $project) { ?>
        <?php
        $thumbImage = isset($project['thumbnail']) ? $project['thumbnail'] : 'images/default-project-thumbnial.png';
        $liveLink = isset($project['link']) ? $project['link'] : null;
        $playStoreLink = isset($project['playStoreLink']) ? $project['playStoreLink'] : null;
        $appStoreLink = isset($project['appStoreLink']) ? $project['appStoreLink'] : null
        ?>
        <div class="project">
            <div class="p_thumb" style="background-image: url('<?= $thumbImage ?>')">
                <span class="p_time">
                    <?= $project['time'] ?>
                </span>
            </div>
            <div style='padding: .5rem;'>
                <div class="tags">
                    <?php foreach ($project['tags'] as $tag) { ?>
                        <span class="tag"><?= $tag ?></span>
                    <?php } ?>
                </div>
                <span class="p_title">
                    <?= $project['showName'] ?>
                </span>
                <p class="p_desc">
                    <?= $project['description'] ?>
                </p>
                <div class="p_actions_container">
                    <?php if ($liveLink) : ?>
                        <a target="_blank" href="<?= $liveLink ?>" title='See Live' class='p_action'>See Live</a>
                    <?php endif; ?>
                    <?php if ($appStoreLink) : ?>
                        <a target="_blank" href="<?= $appStoreLink ?>" title='View on App Store' class='store_link'><img src="images/AppStoreIcon.png" /></a>
                    <?php endif; ?>
                    <?php if ($playStoreLink) : ?>
                        <a target="_blank" href="<?= $playStoreLink ?>" title='View on Google Play Store' class='store_link'><img src="images/GooglePlayIcon.png" /></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>


    <?php } ?>
</div>