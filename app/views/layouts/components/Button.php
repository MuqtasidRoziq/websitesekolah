<?php
function Button($option = [])
{
    $url = $option['url'];
    $color = $option['color'];
    $text = $option['text'];
    $icon = $option['icon'];
    $iconPosition = $option['icon_position'];
?>
    <a href="<?= $url ?>" class="btn <?= $color ?> px-4 py-2 shadow-sm text-light rounded-5" target="_blank">
        <?php if ($icon && $iconPosition === 'left'): ?>
            <i class="<?= $icon ?> me-2"></i>
        <?php endif; ?>

        <?= htmlspecialchars($text) ?>

        <?php if ($icon && $iconPosition === 'right'): ?>
            <i class="<?= $icon ?> ms-2"></i>
        <?php endif; ?>
    </a>
<?php
}
?>