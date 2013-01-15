<?php


defined('_JEXEC') or die;
?>

    <?php foreach ($list as $item) :  ?>
    <div>
        <h3>
            <a href="<?php echo $item->link; ?>">
            <?php echo $item->title; ?></a>
        </h3>
    </div>
    <?php endforeach; ?>
