# \Bootstrap\Components\Button

A component that enables you to easily write `<button>` control through PHP.

## Usage

Instantiate the `Button` by passing a `content`.

```php
$button = new \Bootstrap\Components\Button('Touch Me!');

// continued below...
```

## Options

### Button::options

| Option | Default | Description |
| ------ | ------- | ----------- |
| `disabled` | `false` | If the control is disabled |

Example:
```php
// during init
$button = new \Bootstrap\Components\Button('Touch Me!', ['disabled' => true]);

// after init
$button->options('disabled', true);
```

### Other properties

- `Button::content` - The content of the button
- `Button::icon` - Sets the icon
- `Button::type` - Sets the `type` attribute
- `Button::container` - Sets the container/wrapper (default `<button>`)
- `Button::size` - Sets the size (`lg`, `sm`, etc.)
- `Button::attr` - Sets additinoal attributes
- `Button::id` - Sets the `id` attribute
- `Button::class` - Sets the `class` attribute

### Styling

To learn more about styling the `<button>`, see [UI Buttons](ui_buttons.php) demo.

## Print

Finally, once you configured your button, you can now `htmlPrint` it!
```php
$button->printHtml();
```

## Credits

`\Bootstrap\Components\Button` is part of the [lodev09/bootstrap-php](https://github.com/lodev09/bootstrap-php) package created by [@lodev09](https://twitter.com/lodev09).