<?php 

namespace App\Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class A 
{
    public function build(Request $request): Response
    {
        return new Response('Hello');
    }
}