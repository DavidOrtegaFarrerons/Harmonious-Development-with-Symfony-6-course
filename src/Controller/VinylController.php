<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response("Title: PB and Jams");
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null) : Response
    {
        if ($slug) {
            $title = u(str_replace('-', ' ', $slug))->title();
            return new Response("Genre: " . $title);
        }

        return new Response("All Genres");
    }
}