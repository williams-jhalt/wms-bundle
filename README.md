Installation
============

Step 1: Download the Bundle
---------------------------

Add the following repository to your composer.json:

```json
    ...
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/williams-jhalt/wms-bundle"
        }
    ],
    ...    
    "require": {
        ...
        "williams/wms-bundle": "master-dev",
        ...
    },
    ...
```

Then run:

```console
$ php composer.phar update
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the required bundles by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Williams\WmsBundle\WilliamsWmsBundle(),
        );

        // ...
    }

    // ...
}
```

Usage
-----

Create a service as follows:

services:
// ...
    wms:
        class: Williams\WmsBundle\Service\WmsService
        arguments: [ "%wsdl_url%", "%username%", "%password%" ] 