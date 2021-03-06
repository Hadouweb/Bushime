<?php

namespace Kita\Bundle\BushimeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Kita\Bundle\BushimeBundle\Entity\RapportDiet;
use Kita\Bundle\BushimeBundle\Utils\CsvImporter;

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
        $data = $this->rapportAliment();
            
        return $this->render('KitaBushimeBundle:Tracker:aliments.html.twig', array(
            'form' => $form->createView(),
            'data' => $data,
        ));
        
    }
    
    public function ajouterAlimentAction(RapportDiet $rapportDiet)
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
    
    public function modifierAlimentAction(RapportDiet $rapportDiet)
    {
        
        $form = $this->ajouterAlimentAction($rapportDiet);
        $data = $this->rapportAliment();
            
        return $this->render('KitaBushimeBundle:Tracker:aliments.html.twig', array(
            'form' => $form->createView(),
            'data' => $data,
        ));
            
    }
    
    public function supprimerAlimentAction(RapportDiet $rapportDiet)
    {
        
        $em = $this->getDoctrine()->getManager();
        $rapportDiet = $em->getRepository('KitaBushimeBundle:rapportDiet')->find($rapportDiet->getId());
        
        $em->remove($rapportDiet);
        $em->flush();
            
        return $this->redirect($this->generateUrl('kitabushime_aliments'));
            
    }
    
    public function rapportAliment()
    {
        
        $em = $this->getDoctrine()->getManager();
        $data = $em->getRepository('KitaBushimeBundle:RapportDiet')->findAll();
        
        return $data;
          
    }
    
   
}
