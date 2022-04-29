<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MammalController
{
  /**
   * @Route("/")
   * 
   * @return Response
   */
  public function index()
  {
    return new Response('Zoo !!!', Response::HTTP_OK);
  }

  /**
   * @Route("/show/{animal}")
   *
   * @param string $animal
   * @return void
   */
  public function show(string $animal)
  {
    $animal = mb_ereg_replace('-', ' ', $animal);
    $content = sprintf('Mammal detail page "%s"', $animal);

    return new Response($content, Response::HTTP_OK);
  }
}
