## Custom Functionality (functions.php)

**What is functions.php?**

- The functions.php essentially acts like a WordPress plugin, letting you add custom PHP functions, classes, interfaces, and more. It opens up the entirety of the PHP programming language to your theme.

- WordPress automatically loads the functions.php file (if it exists) as soon as it loads the theme on all page views on both the admin and front-end of the website. So it provides you with a lot of power to build unique features around WordPress. 


# Adding actions or filters to hooks

# what is hooks in wordpress ?

1. Hooks are the entry point to extending WordPress’ functionality, providing you with a way to inject custom code or filter data. Think of them as a way for themes (and plugins) to communicate directly with WordPress.

2. WordPress’ hooks system offers two different methods for executing your code during the page loading process:

3. **Action hooks** allow you to run a custom action callback and “act on” the information that it receives.

4. **Filter hooks** let you filter data via a custom filter callback and manipulate it.

```
<?php 
function wporg_callback() {
// do something
}
add_action( 'init', 'wporg_callback' );

?>
```


# Add Filter

- The process of adding a filter includes two steps.

- First, you need to create a Callback function which will be called when the filter is run. Second, you need to add your Callback function to a hook which will perform the calling of the function.

- You will use the add_filter() function, passing at least two parameters:

- string $hook_name which is the name of the filter you’re hooking to, and
callable $callback the name of your callback function.

- The example below will run when the the_title filter is executed.

**call the filter**

```
<?php

function wporg_filter_title( $title ) {
	return 'The ' . $title . ' was filtered';
}
add_filter( 'the_title', 'wporg_filter_title' );

?>
```


# Additional Parameters

- add_filter() can accept two additional parameters, int $priority for the priority given to the callback function, and int $accepted_args for the number of arguments that will be passed to the callback function.

- For detailed explanation of these parameters please read the article on Actions.

```
function wporg_css_body_class( $classes ) {
	if ( ! is_admin() ) {
		$classes[] = 'wporg-is-awesome';
	}
	return $classes;
}
add_filter( 'body_class', 'wporg_css_body_class' );



```

## custom hooks 

- An important, but often overlooked practice is using custom hooks in your plugin so that other developers can extend and modify it.

- Custom hooks are created and called in the same way that WordPress Core hooks are.

```
Create a Hook

To create a custom hook, 

1. use do_action() for Actions and 

2. apply_filters() for Filters.

**examples :** 

    do_action( 'wporg_after_settings_page_html' );

    or

    function wporg_create_post_type() {
    $post_type_params = [/* ... */];

    register_post_type(
        'post_type_slug',
        apply_filters( 'wporg_post_type_params', $post_type_params )
    );
}


```

# Including Assets

- URL and directory path functions

1. Before including assets, you should become familiar with some of the utility functions that WordPress provides for getting URLs and directory paths within a theme. You should always use these helper functions when including any type of asset to ensure the URL or path is correct.

2. Three of the primary URL helper functions are:

    1. get_stylesheet_uri(): Returns the active theme’s style.css file URL.
    2. get_theme_file_uri( $file ): Returns the active theme’s URL, with an optional $file parameter. Falls back to the parent theme if a child theme is active and the file doesn’t exist.
    3. get_parent_theme_file_uri( $file ): Returns the parent theme’s URL, with an optional $file path.



# Inline JavaScript

1. Sometimes you might want to add some inline JavaScript to the <head> area on the front end. WordPress has the **wp_add_inline_script()** function for this purpose.

Take a look at the function signature:

```
wp_add_inline_script( 
	string $handle, 
	string $data, 
	string $position = 'after' 
);


```


# Including images

1. Block themes will not often need to include images, except in patterns. You will learn more about these in the Block Patterns documentation. But for a quick overview, let’s take a look at how to reference an image in your theme.

2. Assuming you had an image file located at assets/img/example.webp, you would use this code to reference the correct URL:

```
<img src="<?php echo esc_url( get_parent_theme_file_uri( 'assets/img/example.webp' ) ); ?>" alt="" />

```