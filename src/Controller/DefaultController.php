<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\HttpException;

class DefaultController extends AbstractController
{
    /**
     * @Route("/api/login2", name="default")
     */
    public function index()
    {
        $message = \sprintf(
            'You need to send JSON body to obtain token eg. %s',
            json_encode(['username' => 'username', 'password' => 'password'])
        );
        throw new HttpException(400, $message);
    }
}
