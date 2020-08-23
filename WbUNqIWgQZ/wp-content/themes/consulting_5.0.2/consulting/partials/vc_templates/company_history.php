<?php
/**
 * @var $list
 */

if (!empty($list)) : ?>

    <div class="company_history">
        <ul>
            <?php foreach ($list as $company_item) : ?>
                <li>

                    <?php if (!empty($company_item['year'])): ?>
                        <div class="year"><?php echo esc_html($company_item['year']); ?></div>
                    <?php endif; ?>

                    <div class="sep"></div>

                    <div class="company_history_text">

                        <?php if (!empty($company_item['title'])): ?>
                            <h4 class="no_stripe"><?php echo esc_html($company_item['title']); ?></h4>
                        <?php endif; ?>

                        <?php if (!empty($company_item['content'])): ?>
                            <?php echo wpautop($company_item['content']); ?>
                        <?php endif; ?>

                    </div>

                </li>
            <?php endforeach; ?>
        </ul>
    </div>

<?php endif;