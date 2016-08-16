# Wheelbase Wordpress Shortcode

This is a very lightweight plugin that allows wordpress users to embed the wheelbase checkout app into their site.

## Installation
Zip up the `wheelbase-shortcode.php` file and upload it to the plugins directory for the customer.  Alternatively, they can upload it through the plugins interface in their Wordpress dashboard.

## Embedding full shop

Creates a searchable interface on the page.

```
[wheelbase user="741"]
```

## Embedding a single rental

Allows you to view availability, select addons and make a reservation for a single rental

```
[wheelbase rental="1916"]
```

## Options
In addition to the basic install, here are some extra settings

### Color

Set the accent and button color used throughout the checkout process

```
[wheelbase rental="1916" color="000000"]
```

Any hex color will work