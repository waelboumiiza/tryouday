<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;


class FirstController extends AbstractController
{ 
    /**
     * @Route("\number", name="app_lucky_number")
     */
    public function number()
    {
        $number = random_int(0,1);

        if (!$number) {
            throw new NotFoundException('The number does not exist');
        }
        return new Response('<html><body>Lucky number: '.$number.'</body></html>');
    }
}