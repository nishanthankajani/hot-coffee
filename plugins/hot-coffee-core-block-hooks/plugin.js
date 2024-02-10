wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: 'fancy-quote',
    label: 'Fancy Quote',
} );


wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/social-links', 'pill-shape' );
} );

