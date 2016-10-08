<?php

namespace FaviconFinder\Tests;

use FaviconFinder\IconFinder;

class IconFinderTest extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function itShouldReturnTrueIfFaviconExist()
    {
        $iconFinder = new IconFinder();
        
        $isFaviconAvailable = $iconFinder->isFaviconAvailable("http://packagist.com/");
        
        $this->assertTrue($isFaviconAvailable);
    }
    
    /**
     * @test
     */
    public function itShouldReturnFalseIfFaviconNotExist()
    {
        $iconFinder = new IconFinder();
        
        $isFaviconAvailable = $iconFinder->isFaviconAvailable("http://notavaliddomain.test");
        
        $this->assertFalse($isFaviconAvailable);
    }
}
