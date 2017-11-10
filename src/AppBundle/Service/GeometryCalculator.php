<?php

namespace AppBundle\Service;

class GeometryCalculator
{
    public function sumCircumfences($a, $b)
    {
        $a = json_decode($a, true);
        $b = json_decode($b, true);
            
        return $a['circumfence']+$b['circumfence'];
    }
    
    public function sumSurfaces() {
        $a = json_decode($a, true);
        $b = json_decode($b, true);
        
        return $a['surface']+$b['surface'];
        }
}