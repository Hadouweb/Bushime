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
    
    public function alimentsAction()
    {
        
        $rapportDiet = new RapportDiet();
        
        $form = $this->ajouterAlimentAction($rapportDiet);
        
        return $this->render('KitaBushimeBundle:Tracker:aliments.html.twig', array(
            'form' => $form->createView(),
        ));
        
    }
    
    public function ajouterAlimentAction($rapportDiet)
    {
        
        $rapportDiet->setDate( new \DateTime);
        
        $form = $this->createFormBuilder($rapportDiet)
                ->add('nom', 'text', array(
                                'attr' => array(
                                    'class' => 'form-control',
                                ))
                        )
                ->add('description', 'textarea', array(
                                'attr' => array(
                                    'class' => 'form-control',
                                ))
                        )
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
        
        return $form;
        
    }
    
   
}
