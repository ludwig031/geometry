<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class TriangleController extends Controller
{
    public function indexAction($a, $b, $c)
    {
        $response = [
            "type" => "tiangle",
            "a" => $a,
            "b" => $b,
            "c" => $c,
            "circumference" => $this->getCircumference($a, $b, $c),
            "surface" => $this->getSurface($a, $b, $c),
        ];
        return new JsonResponse($response);
    }
    
    private function getCircumference($a, $b, $c)
    {
        $circumference = $a+$b+$c;
        return $circumference;
    }
    
    private function getSurface($a, $b, $c)
    {
        $s = ($a+$b+$c)/2;
        $surface = sqrt($s*($s-$a)*($s-$b)*($s-$c));
        return $surface;
    }
}
