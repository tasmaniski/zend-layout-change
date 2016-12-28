# zend-layout-change

If you have modular app you probably want more that a single layout for eg. admin-layout and web-layout.
Currently that is not supported by default in zend framework.

This package will enable you to set different layout for pe modules (or load default one).


## Install it 

Add in your **composer.json** file: 

```json
{
    "require": {
        "tasmaniski/zend-layout-change": "^1.0"
    }
}
```
After running: *sudo composer update* 

You need to register new module. Add in file **config/application.config.php**: 

```
'modules' => array(
    '...',
    'LayoutChange'
),
```
