<div class="stm_partner<?php echo esc_attr( $css_class ); ?>">
    <?php if( $logo ): ?>
        <div class="image">
            <?php echo consulting_filtered_output($partner_thumbnail); ?>
        </div>
    <?php endif; ?>
    <div class="stm_partner_content">
        <?php if( $title ): ?>
            <?php if ( ! empty( $link['url'] ) ): ?>
                <?php
                if ( ! $link['target'] ) {
                    $link['target'] = '_self';
                }
                ?>
                <?php if( $style == 'style_2' ): ?>
                    <h4 class="no_stripe"><a href="<?php echo esc_url( $link['url'] ) ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $title ); ?></a></h4>
                <?php else: ?>
                    <h5 class="no_stripe"><a href="<?php echo esc_url( $link['url'] ) ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $title ); ?></a></h5>
                <?php endif; ?>
            <?php else: ?>
                <?php if( $style == 'style_2' ): ?>
                    <h4 class="no_stripe"><?php echo wp_kses( $title, array( 'br' => array() ) ); ?></h4>
                <?php else: ?>
                    <h5 class="no_stripe"><?php echo wp_kses( $title, array( 'br' => array() ) ); ?></h5>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php if( $style == 'style_2' && $position ): ?>
            <div class="position">
                <?php echo wp_kses( wpautop($position), array( 'br' => array() ) ); ?>
            </div>
        <?php endif; ?>
        <?php if( $description ): ?>
            <div class="description"><?php echo esc_html( $description ); ?></div>
        <?php endif; ?>
        <?php if ( ! empty( $link['url'] ) && $style != 'style_2' ): ?>
            <?php
            if ( ! $link['target'] ) {
                $link['target'] = '_self';
            }
            if ( ! $link['title'] ) {
                $link['title'] = esc_html__( 'visit website', 'consulting' );
            }
            ?>
            <a class="read_more" target="<?php echo esc_attr( $link['target'] ); ?>" href="<?php echo esc_url( $link['url'] ) ?>">
                <span><?php echo esc_html( $link['title'] ); ?></span>
                <i class="fa fa-chevron-right stm_icon"></i>
            </a>
        <?php endif; ?>
    </div>
</div>