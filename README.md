# Laravel Nova 4 SeoTitle

This is a text field (formerly called SeoTitle) which calculates a min/max length of your text and helps you to make it **better for SEO**.

![Alt Text](https://media1.giphy.com/media/OjUamTjok3e5bFPEoJ/giphy.gif?cid=790b7611ae1996b3cc6d4ef3b5aae31dc316b4035c2b0e0e&rid=giphy.gif&ct=g)

## Setup

First install with:
```bash
$ composer require murdercode/seo-title
```

then add it in your Nova class:
```php
<?php

use Murdercode\SeoTitle\SeoTitle;

public function fields(NovaRequest $request)
{
  SeoTitle::make(__('Title'), 'title')
        ->rangeLength(30, 60)
        ->hideIcon() // For hide the SEO icon
        ->rules('required', 'max:255', 'min:3');
}
```

Enjoy! 🙃
