ubadges for PHP
===============

See https://github.com/flaviovs/ubadges#readme for more details about ubadges.


Installation
============

Install using composer:

```console
$ composer require flaviovs/ubadges-php
```


Usage
=====

* `\fv\ubadges\UBadges::getDimensionValues($name, $extra = null)` -
  returns a 3-elements array with standard ubadges dimension values
  for name `$name` and optional extra string data `$extra`.
  
* `\fv\ubadges\UBadges::getCssClasses($name, $extra = null)` - returns
  a 3-elements array with standard CSS classes
  for name `$name` and optional extra string data `$extra`.
  
* `\fv\ubadges\UBadges::render($name, $extra = null, $initials =
  null)` - returns a ubadge using HTML `SPAN` element for for name
  `$name` and optional extra string data `$extra`, ready for inclusion
  in a HTML page.
  
  
Bugs? Critics? Suggestions?
===========================
Please visit https://github.com/flaviovs/ubadges-php
  
  
