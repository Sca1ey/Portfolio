<!doctype html>
    <html>
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <?= css('assets/css/style.css') ?>
            <!-- ... -->
        </head>
        <?php
            // main menu items
            $items = $pages->listed();

            // only show the menu if items are available
            if($items->isNotEmpty()):
        ?>
            <nav class="flex justify-between m-2">
                <div class="text-xl bg-blue-300 pl-1 pr-1 rounded">
                    Logo
                </div>
                <ul class="flex">
                    <?php foreach($items as $item): ?>
                        <li><a class="mr-2 text-xl bg-blue-300 pl-1 pr-1 rounded" href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
                    <?php endforeach ?>
                </ul>
            </nav> 
        <?php endif ?>
    <body>