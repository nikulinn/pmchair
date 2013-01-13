<?php


defined('_JEXEC') or die;
?>

    <?php foreach ($list as $item) :  ?>
    <div>
        <h2>
            <a href="<?php echo $item->link; ?>">
            <?php echo $item->title; ?></a>
        </h2>
        <p><?php echo $item->introtext;?></p>
        <p class="readmore">
            <a href="<?php echo $item->link; ?>">Детальніше...</a>
        </p>
    </div>
    <?php endforeach; ?>
