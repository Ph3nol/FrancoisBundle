# FrancoisBundle *

![](http://cl.ly/image/3M0r1j1q1c1F/holl4.jpg)

### Work (and inspiration) in progress.

=====

## Installation

Add this into your `composer.json`:

``` json
    "require-dev": {
        // ...
        "sly/francois-bundle" : "dev-master"
    },
```

And run `php composer.phar update sly/francois-bundle`.

Register the bundle in your AppKernel (`app/AppKernel.php`),
only for dev environment (of course...).

``` php
    // ...
    if (in_array($this->getEnvironment(), array('dev', 'test'))) {
        // ...
        $bundles[] = new Sly\FrancoisBundle\SlyFrancoisBundle();
    }
```

Finally, override some dev views with adding it into your `composer.json` file
(a sexy command-way will be implemented soon):

``` json
    // ...
    "scripts": {
        "post-install-cmd": [
            // ...
            "ln -sf ../../vendor/sly/francois-bundle/Sly/FrancoisBundle/Resources/TwigBundle app/Resources/TwigBundle"
        ],
        "post-update-cmd": [
            // ...
            "ln -sf ../../vendor/sly/francois-bundle/Sly/FrancoisBundle/Resources/TwigBundle app/Resources/TwigBundle"
        ]
    },
    // ...
```

## Configuration reference

``` yaml
sly_francois:
    twig:
        exception:
            video: true
```

=====

* Hey dude, it's just for fun.
