<?php

declare(strict_types=1);

namespace SocialFood\IngredientPageCrawler\ValueObject;

final class Link extends AbstractStringValue implements StringValueInterface
{
    public static function from(string $link): Link
    {
        return new self($link);
    }

    public function asString(): string
    {
        return $this->value;
    }
}
