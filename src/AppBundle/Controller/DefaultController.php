<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Test;
use AppBundle\Enum\Status;
use Doctrine\Common\Util\Debug;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $test1 = new Test();
        $test1->setFoobar(Status::get(Status::FOO));
        $em->persist($test1);

        $test2 = new Test();
        $test2->setFoobar(Status::get(Status::BAR));
        $em->persist($test2);

        $test3 = new Test();
        $test3->setFoobar(Status::get(Status::XYZ));
        $em->persist($test3);

        $em->flush();

        Debug::dump($em->getRepository(Test::class)->findAll(), 4);

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }
}
