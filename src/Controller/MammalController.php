<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MammalController extends AbstractController
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

  /**
   * @Route("/list/{animal}")
   *
   * @param string $animal
   * @return string
   */
  public function list(string $animal)
  {
    $persons = [
      [
        "name" => "John Joy",
        "cpf" => "111.111.111-11",
        "genro" => "man"
      ],
      [
        "name" => "Julia Mendes",
        "cpf" => "222.222.222-22",
        "genro" => "women"
      ],
      [
        "name" => "Kaio Pereira",
        "cpf" => "333.333.333-33",
        "genro" => "man"
      ]
    ];

    return $this->render('animal/list.twig', compact('animal', 'persons'));
  }
}
