# Block Plugin with WP Scripts

This is a WordPress plugin that implements a simple Gutenberg block based on the latest approach suggested by WordPress using the [@wordpress/scripts](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/) package (as of August 2021).

WordPress documents its suggested approach here: 
* [Documentation: JavaScript Build Setup](https://developer.wordpress.org/block-editor/how-to-guides/javascript/js-build-setup/)
* [Documentation: Writing Your First Block Type](https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/writing-your-first-block-type/)

The wp-scripts package is a simple method provided by WordPress for compiling JavaScript and CSS files. The recommended approach also uses a specific method for loading dependencies for scripts. 

The plugin adjusts the sample code provided by WordPress to be objected oriented PHP.

The purpose of the plugin is to provide a simple but complete, object-oriented, boilerplate version of the code that can be quickly cloned for small block plugin projects. 