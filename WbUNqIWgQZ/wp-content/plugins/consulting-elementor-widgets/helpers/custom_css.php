<?php
function cew_inline_css()
{

    ob_start();

    ?>

    <style>
        @media (min-width: 768px) {
            .elementor-column-gap-default,
            .elementor-column-gap-default .elementor-row .elementor-column {
                padding: 0 15px
            }

            .elementor-column-gap-default .elementor-row {
                margin: 0 -15px !important;
                width: calc(100% + 30px) !important
            }

            .elementor-column-gap-default .elementor-row .elementor-column > .elementor-element-populated,
            .elementor-column-gap-default .elementor-row .elementor-row .elementor-column:first-child:last-child {
                padding: 0
            }

            .elementor-column-gap-default .elementor-row .elementor-row .elementor-column:first-child {
                padding-left: 0
            }

            .elementor-column-gap-default .elementor-row .elementor-row .elementor-column:last-child {
                padding-right: 0
            }
        }

    </style>

    <?php

    $css = ob_get_contents();
    ob_end_clean();

    return str_replace( array( '<style>', '</style>' ), '', $css );
}