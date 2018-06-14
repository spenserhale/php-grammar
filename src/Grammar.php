<?php


namespace Grammar;

class Grammar
{
    /**
     * Get the plural form of an English word.
     *
     * @param  string   $value
     * @param  int|null $count
     *
     * @return string
     */
    public static function plural(string $value, ?int $count = null): string
    {
        return Support\Pluralizer::plural($value, $count ?? 2);
    }

    /**
     * Get the singular form of an English word.
     *
     * @param  string $value
     *
     * @return string
     */
    public static function singular(string $value): string
    {
        return Support\Pluralizer::singular($value);
    }

    /**
     * Prepends the appropriate indefinite article to a word (a/an)
     *
     * @param  string $value
     *
     * @return string
     */
    public static function article(string $value): string
    {
        return \IndefiniteArticle\IndefiniteArticle::invoke($value);
    }
}
