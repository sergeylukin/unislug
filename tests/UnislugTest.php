<?php

use Sergeylukin\Unislug;

class UnislugTest extends \Codeception\Test\Unit
{
    public function testHebrewStringIsConvertedProperly()
    {
        $unicodeString = 'מומחה/מומחית BI';
        $unicodeStringConverterToSlug = Unislug::convert($unicodeString);
        $this->assertEquals($unicodeStringConverterToSlug, 'מומחה-מומחית-bi');
    }
}
