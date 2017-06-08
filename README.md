# Advanced Custom Fields: Ninjaforms Add-on
Advanced Custom Field with which we can select Ninjaforms.

Finally the Advanced Custom Fields: Ninjaforms Add-on is available on the WordPress plugin repository!

## Getting started

The plugin is available from the [WordPress plugin repository](http://www.wordpress.org/plugins/acf-ninjaforms-add-on)

1. Upload the plugin files to the `/wp-content/plugins/acf-ninjaforms-add-on` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Plugin Name screen to configure the plugin
4. (Make your instructions match the desired user flow for activating and installing your plugin. Include any steps that might be needed for explanatory purposes)

You can also install Advanced Custom Fields: Ninjaforms Add-on trough composer

`composer require dannyvanholten/acf-ninjaforms-add-on`

or if you make use of WPackagist

`composer require wpackagist/acf-ninjaforms-add-on`

## Using Advanced Custom Fields: Ninjaforms Add-on

To use the the field you just need to know how advanced custom fields work. You can check out [their documentation](https://www.advancedcustomfields.com/resources/)

The Ninjaforms Add-on returns either an single form object / id or an array of objects / id's
Now we know that we can easily use it to build our fields :)

#### If you return an ID
```
$form = get_field('my-form');
do_shortcode('[ninjaform id='.$form.']'); 
```

#### If you return an Object
```
$form = get_field('my-form');
do_shortcode('[ninjaform id='.$form->get_id().']'); 
```

#### If you return multiple Form ID's
```
$forms = get_field('my-form');

foreach($forms as $form) {
    do_shortcode('[ninjaform id='.$form.']'); 
}
```

## Getting involved

Want to get involved and improve Advanced Custom Fields: Ninjaforms Add-on? Fork this repo and whenever you have something just make a pull request. After review we might add it to the [ACF Ninjaforms Add-On GitHub Repository.](https://github.com/DannyvanHolten/acf-ninjaforms-add-on)

## Getting ahead

As Ninjaforms & Advanced Custom Fields are continuously in development we like to take a look ahead together for what's coming. If you want to get involved developing Advanced Custom Fields: Ninjaforms Add-on you can ask us if you can implement some of the features yourself.

- [x] Add dutch translations

## Credits

This plug-in is based on the [ACF Gravityforms Add-On](https://github.com/DannyvanHolten/acf-gravityforms-add-on)