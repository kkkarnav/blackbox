# \Bootstrap\Components\Input

A component that enables you to easily write `<input>` control through PHP.

## Usage

Instantiate the `Input` by passing a `name`.

```php
$input = new \Bootstrap\Components\Input('email');
$input->type('email');

// continued below...
```

## Options

### Input::options

| Option | Default | Description |
| ------ | ------- | ----------- |
| `disabled` | `false` | If the control is disabled |
| `grouped` | `true` | If grouped by `div.form-group` |
| `group_class` | `''` | Additional `div.form-gruop.*` classes |
| `required` | `false` | Add or omit `required="true"` attribute |

Example:
```php
// during init
$input = new \Bootstrap\Components\Input($name, ['disabled' => true]);

// after init
$input->options('disabled', true);
```

### Other properties

- `Input::name` - Sets the `name` attribute
- `Input::type` - Sets the `type` attribute
- `Input::id` - Sets the `id` attribute
- `Input::class` - Sets the `class` attribute
- `Input::attr` - Sets additional custom attributes
- `Input::label` - Sets the control `<label>` content
- `Input::placeholder` - Sets the `placeholder` attribute
- `Input::help` - Sets the help text below the control
- `Input::append` - Sets the appended content

### Styling

To learn more about styling the `<input>`, see [Basic Inputs](form_basic_inputs.php) demo.

## Print

Finally, once you configured your input, you can now `htmlPrint` it!
```php
$input->printHtml();
```

## Credits

`\Bootstrap\Components\Input` is part of the [lodev09/bootstrap-php](https://github.com/lodev09/bootstrap-php) package created by [@lodev09](https://twitter.com/lodev09).