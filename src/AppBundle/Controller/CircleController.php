<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class CircleController extends Controller
{
    public function indexAction($radius)
    {
        $response = [
            "type" => "circle",
            "radius" => $radius,
            "circumference" => $this->getCircumference($radius),
            "surface" => $this->getSurface($radius),
        ];
        return new JsonResponse($response);
    }
    
    private function getCircumference($radius)
    {
        $circumference = 2*$radius*3.1415926;
        return $circumference;
    }
    
    private function getSurface($radius)
    {
        $surface = pow($radius,2)*3.1415926;
        return $surface;
    }
}
