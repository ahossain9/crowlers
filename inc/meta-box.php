<?php
add_filter( 'rwmb_meta_boxes', 'crowlers_register_meta_boxes' );

function crowlers_register_meta_boxes( $meta_boxes ) {
    $prefix = 'crowlers-';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Product Quantity', 'online-generator' ),
        'id'         => 'crowlers-metabox',
        'post_types' => ['product', 'shop_order', 'page', 'post', 'shop'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'type' => 'number',
                'id'   => $prefix . 'product-quantity-interval',
                'placeholder' => esc_html__( 'Cart interval Number', 'crowlers' ),
                'name' => esc_html__( 'Interval', 'crowlers' )
            ],
            [
                'type' => 'number',
                'id'   => $prefix . 'product-minimum-quantity',
                'placeholder' => esc_html__( 'Cart Minimum Quantity', 'crowlers' ),
                'name' => esc_html__( 'Minimum Quantity', 'crowlers' )
            ],
        ],
    ];

    return $meta_boxes;
}