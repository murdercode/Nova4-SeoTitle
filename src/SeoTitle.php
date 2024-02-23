<?php

namespace Murdercode\SeoTitle;

use Laravel\Nova\Fields\Field;

class SeoTitle extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'seo-title';

    /**
     * Set the range of acceptable string length.
     *
     * @param  int  $min
     * @param int $max
     * @return $this
     */
    public function rangeLength(int $min = 30, int $max = 60): self
    {
        return $this->withMeta([
            'min' => $min,
            'max' => $max,
        ]);
    }

    /**
     * Hide the SEO icon
     * @return $this
     */
    public function hideIcon(): self
    {
        return $this->withMeta([
            'hideIcon' => false,
        ]);
    }
}
