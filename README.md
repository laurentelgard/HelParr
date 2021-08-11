# helparr

[![Total Downloads](https://img.shields.io/packagist/dt/laurentelgard/helparr.svg)](https://packagist.org/packages/laurentelgard/helparr)
[![Latest Stable Version](https://img.shields.io/packagist/v/laurentelgard/helparr.svg)](https://packagist.org/packages/laurentelgard/helparr)

Quick debug functions to help with PHP arrays

## Installation

Install the latest version with

```bash
$ composer require laurentelgard/helparr
```

## Basic Usage

```php
<?php

// prints array content
p($_ENV, true);

// prints array content and dies
d($_ENV, true);
```
### Requirements

- helparr works with any PHP version >= 4.0
