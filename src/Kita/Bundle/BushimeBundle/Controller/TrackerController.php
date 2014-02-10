<?php

namespace Kita\Bundle\BushimeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Kita\Bundle\BushimeBundle\Entity\RapportDiet;

class TrackerController extends Controller
{
    public function indexAction()
    {
        return $this->render('KitaBushimeBundle:Tracker:index.html.twig');
    }
    
    public function ajouterDietAction()
    {
         
        $rapportDiet = new RapportDiet();
        
        $form = $this->createFormBuilder($rapportDiet)
                ->add('nom',            'text')
                ->add('description',    'text')
                ->add('date',           'date')
                ->getForm();
        
        $request = $this->get('request');
        
        if ( $request->getMethod() == 'POST') {
            
            $form->bind($request);
            
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($rapportDiet);
                $em->flush($rapportDiet);
                
            }
            
        }
        
        return $this->render('KitaBushimeBundle:Tracker:ajouterDiet.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
