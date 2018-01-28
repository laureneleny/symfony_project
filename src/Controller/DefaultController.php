<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\User;
use App\Repository\ProductRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route(path="/", name="homepage")
     * @param  $id
     * @return Response
     */
    public function homepage()
    {
        $manager = $this->getDoctrine()->getManager();
        /** @var ProductRepository $repo */
        /* $prod = new User();
        $prod
            ->setUsername('admin')
            ->setEmail('admin@admin.fr')
            ->setPlainPassword('admin');
        $manager->persist($prod);
        $manager->flush(); */

        $repo = $manager->getRepository(Product::class)->findBy([], null);

        $repos = $manager->getRepository(Product::class)->findAll();
        $count = count($repos)/12;
        $count = round($count, 0, PHP_ROUND_HALF_UP);


        return $this->render('homepage.html.twig', [
            'repo' => $repo,
            'count' => $count,
        ]);

    }
}