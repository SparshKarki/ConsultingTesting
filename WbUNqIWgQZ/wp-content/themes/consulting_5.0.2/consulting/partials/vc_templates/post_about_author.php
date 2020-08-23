<?php

if (empty($style)) {
    $style = 'style_1';
}
?>
<div class="about_author_wr <?php echo esc_attr($css_class); ?>">
    <?php
    if ($style === 'style_1') {
        get_template_part('partials/content', 'about_author');
    } elseif ($style === 'style_2') {
        get_template_part('partials/content', 'about_author_style_2');
    }
    ?>
</div>