<?php

/*
 * This file is part of the Favicon Finder Package
 *
 * (c) Nexuslink Services
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FaviconFinder;

use FaviconFinder\src\Services\FaviconHelper;

class IconFinder {
    
    /**
     * @param string $url
     * 
     * @return bool
     * @throws Exception
     */    
    public function isFaviconAvailable($url) {
        
        if($url != '')
        {
            return FaviconHelper::check($url);
        }
        
        throw new Exception('URL not found');       
        
    }
    
}
