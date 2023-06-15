<?php

namespace App\Controller;


use App\Entity\Jezek;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JezekController extends BaseController
{


    /**
     * @return Response
     * @Route("/default", name="jezek_default")
     */
    public function default(Request $request, ManagerRegistry $doctrine): Response
    {

        $jezek = new Jezek();


        $form = $this->createForm(JezekType::class)->handleRequest($request);


        if ($form->isSubmitted() and $form->isValid()) {


            $em = $doctrine->getManager();
            $em->persist($jezek);
            $em->flush();

        }






        

        // preda data do sablony
        return $this->render("Jezek/default.html.twig", [ "TITLE" => " Default " , "form" => $form->createView()]);
    }


    
    /**
     * @return Response
     * @Route("/add", name="jezek_add")
     */
    public function add(): Response
    {

        // preda data do sablony
        return $this->render("Jezek/add.html.twig" , [ "TITLE" => " Add " ]);
    }

    /**
     * @return Response
     * @Route("/edit", name="jezek_edit")
     */
    public function edit(): Response
    {

        // preda data do sablony
        return $this->render("Jezek/edit.html.twig" , [ "TITLE" => " Edit " ]);
    }

    /**
     * @return Response
     * @Route("/delete", name="jezek_delete")
     */
    public function delete(): Response
    {

        // preda data do sablony
        return $this->render("Jezek/delete.html.twig" , [ "TITLE" => " Delete " ]);
    }





}
