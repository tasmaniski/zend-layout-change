# Change layout per module

If you have modular app you probably want more that a single layout for eg. admin-layout and web-layout.
Currently that is not supported by default in zend framework.

This package will enable you to set different layout for modules.


## Install it 

Add in your **composer.json** file: 

```json
{
    "require": {
        "tasmaniski/zend-layout-change": "^1.0"
    }
}
```
After running: **sudo composer update** you need to register new module. 

Add in file **config/application.config.php**: 

```
'modules' => array(
    '...',
    'LayoutChange'
),
```

## How to Use it
You have to create layout.phtml file per modul. For eg. if you have Admin and Web modules, you should create:

```
Web/view/layout/web-layout.phtml
Admin/view/layout/admin-layout.phtml
```

Than in yout config register layouts:

```
'module_layouts' => [
    'Web' => 'layout/web-layout',
    'Admin' => 'layout/admin-layout',
],

```
*Note: You can define each line in separate module's config: 'module_layouts' => ['Module' => 'layout/layout-name']*


Wish you a very Happy New Year!
