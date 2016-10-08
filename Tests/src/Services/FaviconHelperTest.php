<?php

namespace FaviconFinder\Tests\src\Services;

use FaviconFinder\src\Services\FaviconHelper;

class FaviconHelperTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itShouldCheckStatusAndReturnTrueIfFaviconExist()
    {
        $isFaviconAvailable = FaviconHelper::check("http://packagist.com/");
        
        $this->assertTrue($isFaviconAvailable);
    }
    
    /**
     * @test
     */
    public function itShouldCheckStatusAndReturnFalseIfFaviconNotExist()
    {        
        $isFaviconAvailable = FaviconHelper::check("http://notavaliddomain.test");
        
        $this->assertFalse($isFaviconAvailable);
    }

}
