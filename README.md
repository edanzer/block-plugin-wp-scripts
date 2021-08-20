# Block Plugin with WP Scripts

This is a WordPress plugin that implements a simple Gutenberg block based on the latest approach suggested by WordPress using the @wordpress/wp-scripts package (as of August 2021).

WordPress documents its suggested approach here: 
https://developer.wordpress.org/block-editor/how-to-guides/javascript/js-build-setup/
https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/writing-your-first-block-type/

The wp-scripts package is a simple method provided by WordPress for compiling JavaScript and CSS files. The recommended approach also uses a specific method for loading dependencies for scripts. 

The plugin adjusts the sample code provided by WordPress to be objected oriented PHP.