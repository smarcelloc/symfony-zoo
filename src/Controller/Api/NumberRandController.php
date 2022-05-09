<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NumberRandController extends AbstractController
{

  /**
   * @Route("/api/rand/{min<[0-9]+>}/{max<\d+>}", methods="POST")
   */
  public function index(string $min, string $max)
  {
    // if (!filter_var($min, FILTER_VALIDATE_INT) || !filter_var($max, FILTER_VALIDATE_INT)) {
    //   return $this->json(['status' => false, 'message' => 'parameter invalid'], Response::HTTP_BAD_REQUEST);
    // }

    $number = rand($min, $max);
    return $this->json(['status' => true, 'number' => $number]);
  }
}
