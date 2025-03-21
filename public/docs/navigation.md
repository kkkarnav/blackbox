# Navigation

Configure the navigation array in the `$_nav` variable. Using the `Nav` component, it will be generated into HTML. Use the `$_active_nav` to set the current active page. See example below.

## Configuration

### Initialize
```php
$_nav = [
    'docs_general' => [
        'title' => 'Back to documentation',
        'icon' => 'fal fa-tag',
        'url' => APP_URL.'/docs_general.php'
    ],
    'nav_key' => [
        'title' => 'My category',
        'icon' => 'fal fa-file-powerpoint',
        'items' => [
            'php_navigation' => [
                'title' => 'Navigation',
                'url' => APP_URL.'/php_navigation.php'
            ],
            'page_2' => [
                'title' => 'Page 2',
                'url' => APP_URL.'/page-2'
            ]
        ]
    ]
];

// set the active nav. determined by the element key.
$_active_nav = 'php_navigation';
```

### Load into UI

```php
$nav = new \Bootstrap\Components\Nav($_nav, $_active_nav);
$nav->printHtml();
```