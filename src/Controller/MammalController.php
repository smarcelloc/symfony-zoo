<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MammalController
{
  public function index()
  {
    return new Response('Hello World !!!', Response::HTTP_OK);
  }
}
