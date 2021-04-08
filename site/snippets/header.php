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
                <div class="text-xl bg-blue-300 pl-1 pr-1 rounded-tl-lg rounded-br-lg">
                    Logo
                </div>
                <ul class="flex">
                    <?php foreach($items as $item): ?>
                        <li class="h-8 mr-2 text-xl bg-blue-300 pl-2 pr-2 rounded-tl-lg rounded-br-lg"><a  href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
                    <?php endforeach ?>
                </ul>
            </nav> 
        <?php endif ?>
    <body>