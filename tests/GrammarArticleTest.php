<?php

class GrammarArticleTest extends PHPUnit\Framework\TestCase
{
    private const AN = 'an';

    private const A = 'a';

    /**
     * Consonants
     */
    public function testConsonants(): void
    {
        $assertions = array(
            'dog' => self::A,
            'horse' => self::A,
            'zealot' => self::A,
            'doctor' => self::A,
            'dancer' => self::A,
            'car' => self::A,
            'laser' => self::A,
            'beer' => self::A
        );

        $this->_testArticle($assertions);
    }

    /**
     * Vowels
     */
    public function testVowels(): void
    {
        $assertions = array(
            'apple' => self::AN,
            'elephant' => self::AN,
            'ugly duck' => self::AN,
            'unit' => self::A,
            'itchy sweater' => self::AN,
            'engineer' => self::AN,
            'orange' => self::AN
        );

        $this->_testArticle($assertions);
    }

    /**
     * Actually test assertions
     *
     * @param  array $cases Array of key/value assertions
     */
    private function _testArticle(array $cases = array()): void
    {
        foreach ($cases as $case => $prefix) {
            // ensure that the expected prefix is added to the original case
            $a = \Grammar\Grammar::article($case);
            $this->assertEquals($prefix . ' ' . $case, $a);
        }
    }
}
