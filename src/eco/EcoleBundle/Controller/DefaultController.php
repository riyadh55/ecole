<?php

namespace eco\EcoleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
   
       /**
     * @Route("/ajouterEleve",name="addeleve")
     * @Template()
     */
    public function ajouterEleveAction()
    {
        $eleve = new \eco\EcoleBundle\Entity\Eleve();
        $f = $this->createFormBuilder($eleve)
        ->add('nom','text',array('label' => 'Nom '))
        ->add('prenom','text',array('label' => 'prenom: '))
        ->add('datenaissance','date',array('label' => 'date naissance: '))
        ->add('genre', 'choice', array('choices' => 
        array('A'=>'Homme','C'=>'Femme')),
        array('label' => 'nature : '))                
        ->add('adresse','text',array('label' => 'Adresse :  '))
        ->add('tel','text',array('label' => 'Tel : '))
        ->add('nomtuteur','text',array('label' => 'nomtuteur : '))
        ->add('adressetuteur','text',array('label' => 'adressetuteur : '))
        ->add('teltuteur','text',array('label' => 'teltuteur  :  '))
        ->add('emailtuteur','text',array('label' => 'emailtuteur: '))
        ->add('professiontuteur','text',array('label' => 'professiontuteur: '))
        ->add('cintuteur','text',array('label' => 'CIN tuteur: '))
        ->getForm();
         $request = $this->container->get('request');
         $f->handleRequest($request);
               if ($f->isValid())
               {
                $em = $this->container->get('doctrine')->getEntityManager();
                $em->persist($eleve);
                $em->flush();
               }
               $eleves=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Eleve")
                ->findAll();
            return array('f' => $f->createView(),'eleves'=>$eleves);
  
}

 
      /**
     * @Route("/ModifierEleve/{id}",name="modifeleve")
     * @Template()
     */
    public function ModifierEleveAction($id)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
            $eleve=$em->find('eco\EcoleBundle\Entity\Eleve',$id);
            $f=$this->createFormBuilder($eleve)
                    ->add('nom','text',array('label' => 'Nom '))
        ->add('prenom','text',array('label' => 'prenom: '))
        ->add('datenaissance','date',array('label' => 'date naissance: '))
        ->add('genre', 'choice', array('choices' => 
        array('A'=>'Homme','C'=>'Femme')),
        array('label' => 'nature : '))                
        ->add('adresse','text',array('label' => 'Adresse :  '))
        ->add('tel','text',array('label' => 'Tel : '))
        ->add('nomtuteur','text',array('label' => 'nomtuteur : '))
        ->add('adressetuteur','text',array('label' => 'adressetuteur : '))
        ->add('teltuteur','text',array('label' => 'teltuteur  :  '))
        ->add('emailtuteur','text',array('label' => 'emailtuteur: '))
        ->add('professiontuteur','text',array('label' => 'professiontuteur: '))
        ->add('cintuteur','text',array('label' => 'CIN tuteur: '))
        ->getForm();
            if(!$eleve)
            {
                $message="aucun eleve trouvée";
            }
            else
            {
                 $request = $this->container->get('request');
                 $f->handleRequest($request);
               
                $eleves = $this->getDoctrine()
                ->getRepository('\eco\EcoleBundle\Entity\Eleve')
                ->findAll();   
                   
            }
                  return array('f' => $f->createView(),'eleves' =>$eleves );
    }






 /**
     * @Route("/SupprimerEleve/{id}",name="supp_eleve")
     * @Template()
     */
    public function SupprimerEleveAction($id)
    {
     $eleve = new \eco\EcoleBundle\Entity\Eleve();
        $f = $this->createFormBuilder($eleve)
                ->add('nom','text',array('label' => 'Nom '))
                ->add('prenom','text',array('label' => 'prenom: '))
                ->add('datenaissance','date',array('label' => 'date naissance: '))
                ->add('genre', 'choice', array('choices' => 
                array('A'=>'Homme','C'=>'Femme')),
                array('label' => 'nature : '))                
                ->add('adresse','text',array('label' => 'Adresse :  '))
                ->add('tel','text',array('label' => 'Tel : '))
                ->add('nomtuteur','text',array('label' => 'nomtuteur : '))
                ->add('adressetuteur','text',array('label' => 'adressetuteur : '))
                ->add('teltuteur','text',array('label' => 'teltuteur  :  '))
                ->add('emailtuteur','text',array('label' => 'emailtuteur: '))
                ->add('professiontuteur','text',array('label' => 'professiontuteur: '))
                ->add('cintuteur','text',array('label' => 'CIN tuteur: '))
                ->getForm();
        
            $em = $this->container->get('doctrine')->getEntityManager();
            $eleve=$em->find('eco\EcoleBundle\Entity\Eleve',$id);
            if(!$eleve)
            {
                $message="aucune chambre trouvée";
            }
            else
                {
                $em->remove($eleve);
                $em->flush();
                $eleves=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Eleve")
                           ->findAll();
                   return array('f' => $f->createView(),'eleves' =>$eleves );
                }
                
        
    }


    
  


  /**
     * @Route("/listEleves")
     * @Template()
     */
    public function listElevesAction()
    {
        $eleves=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Eleve")
                ->findAll();
        return array('eleves'=>$eleves );
    }
    
       /**
     * @Route("/ajouterProfesseur",name="addproff")
     * @Template()
     */
    public function ajouterProfesseurAction()
    {
        $proff = new \eco\EcoleBundle\Entity\Professeur();
        $f = $this->createFormBuilder($proff)
        ->add('nom','text',array('label' => 'Nom '))
        ->add('prenom','text',array('label' => 'prenom: '))
        ->add('datenaissance','date',array('label' => 'date naissance: '))
        ->add('genre', 'choice', array('choices' => 
           array('A'=>'Homme','C'=>'Femme')),
           array('label' => 'Genre: '))                
        ->add('specialite','text',array('label' => 'Specialité :  '))
        ->add('tauxHoraire','text',array('label' => ' Taux Horaire : '))
        ->getForm();
                 $request = $this->container->get('request');
                 $f->handleRequest($request);
                       if ($f->isValid())
                       {
                        $em = $this->container->get('doctrine')->getEntityManager();
                        $em->persist($proff);
                        $em->flush();
                       }        
                       $professeurs=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Professeur")
                ->findAll();
                       
                return array('f' => $f->createView(),'professeurs'=>$professeurs ); 

    }    
    
    
    
    
      /**
     * @Route("/ModifierProfesseur/{id}",name="modifproff")
     * @Template()
     */
    public function ModifierProfesseurAction($id)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
            $professeur=$em->find('eco\EcoleBundle\Entity\Professeur',$id);
            $f=$this->createFormBuilder($professeur)
                ->add('nom','text',array('label' => 'Nom '))
                ->add('prenom','text',array('label' => 'prenom: '))
                ->add('datenaissance','date',array('label' => 'date naissance: '))
                ->add('genre', 'choice', array('choices' => 
                array('A'=>'Homme','C'=>'Femme')),
                array('label' => 'Genre: '))                
                ->add('specialite','text',array('label' => 'Specialité :  '))
                ->add('tauxHoraire','text',array('label' => ' Taux Horaire : '))     
                ->getForm();
            if(!$professeur)
            {
                $message="aucun professeur trouvée";
            }
            else
            {
                 $request = $this->container->get('request');
                 $f->handleRequest($request);
               
                $professeurs = $this->getDoctrine()
                ->getRepository('\eco\EcoleBundle\Entity\Professeur')
                ->findAll();   
                   
            }
                  return array('f' => $f->createView(),'professeurs' =>$professeurs );
    }
    
    
    
    /**
     * @Route("/SupprimerProfesseur/{id}",name="supp_proff")
     * @Template()
     */
    public function SupprimerProfesseurAction($id)
    {
     $professeur = new \eco\EcoleBundle\Entity\Professeur();
        $f = $this->createFormBuilder($professeur)
            ->add('nom','text',array('label' => 'Nom '))
            ->add('prenom','text',array('label' => 'prenom: '))
            ->add('datenaissance','date',array('label' => 'date naissance: '))
            ->add('genre', 'choice', array('choices' => 
            array('A'=>'Homme','C'=>'Femme')),
            array('label' => 'Genre: '))                
            ->add('specialite','text',array('label' => 'Specialité :  '))
            ->add('tauxHoraire','text',array('label' => ' Taux Horaire : '))
            ->getForm();
        
            $em = $this->container->get('doctrine')->getEntityManager();
            $professeur=$em->find('eco\EcoleBundle\Entity\Professeur',$id);
            if(!$professeur)
            {
                $message="aucune chambre trouvée";
            }
            else
                {
                $em->remove($professeur);
                $em->flush();
                $professeurs=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Professeur")
                           ->findAll();
                   return array('f' => $f->createView(),'professeurs' =>$professeurs );
                }
                
    }
    
    /**
     * @Route("/listProfesseurs")
     * @Template()
     */
    public function listProfesseursAction()
    {
        $professeurs=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Professeur")
                ->findAll();
        return array('professeurs'=>$professeurs );
    }

        /**
     * @Route("/ajouterReglement")
     * @Template()
     */
    public function ajouterReglementAction()
    {
        $rg = new \eco\EcoleBundle\Entity\Reglement();
        $f = $this->createFormBuilder($rg)
        
        ->add('dateReg','date',array('label' => 'date reglement: '))
        ->add('natureReg', 'choice', array('choices' => 
           array('A'=>'espece','C'=>'cheque')),
           array('label' => 'Reglement: '))                
        ->getForm();
                 $request = $this->container->get('request');
                 $f->handleRequest($request);
                       if ($f->isValid())
                       {
                        $em = $this->container->get('doctrine')->getEntityManager();
                        $em->persist($rg);
                        $em->flush();
                       }        
                return array('f' => $f->createView()); 

    }    
       /**
     * @Route("/ajouterMatiere",name="addmatr")
     * @Template()
     */
    public function ajouterMatiereAction()
    {
        $mat = new \eco\EcoleBundle\Entity\Matiere();
        $f = $this->createFormBuilder($mat)
        ->add('libelleMatiere','text',array('label' => 'Libelle matiére: '))
        ->getForm();
                 $request = $this->container->get('request');
                 $f->handleRequest($request);
                       if ($f->isValid())
                       {
                        $em = $this->container->get('doctrine')->getEntityManager();
                        $em->persist($mat);
                        $em->flush();
                       }        
                        $matieres=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Matiere")
                ->findAll();
                return array('f' => $f->createView(),'matieres'=>$matieres); 

    }   
    
    
      /**
     * @Route("/SupprimerMatiere/{id}",name="supp_mat")
     * @Template()
     */
    public function SupprimerMatiereAction($id)
    {
     $matiere = new \eco\EcoleBundle\Entity\Matiere();
        $f = $this->createFormBuilder($matiere)
       ->add('libelleMatiere','text',array('label' => 'Libelle matiére: '))
        ->getForm();
        
            $em = $this->container->get('doctrine')->getEntityManager();
            $matiere=$em->find('eco\EcoleBundle\Entity\Matiere',$id);
            if(!$matiere)
            {
                $message="aucune matiere trouvée";
            }
            else
                {
                $em->remove($matiere);
                $em->flush();
                $matieres=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Matiere")
                           ->findAll();
                   return array('f' => $f->createView(),'matieres'=>$matieres );
                }
                
        
                
    }
    
    
       /**
     * @Route("/ModifierMatiere/{id}",name="modifmat")
     * @Template()
     */
    public function ModifierMatiereAction($id)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
            $matiere=$em->find('eco\EcoleBundle\Entity\Matiere',$id);
            $f=$this->createFormBuilder($matiere)
       ->add('libelleMatiere','text',array('label' => 'Libelle matiére: '))             
                    ->getForm();
            if(!$matiere)
            {
                $message="aucun matiere trouvée";
            }
            else
            {
                 $request = $this->container->get('request');
                 $f->handleRequest($request);
               
                $matieres = $this->getDoctrine()
                ->getRepository('\eco\EcoleBundle\Entity\Matiere')
                ->findAll();   
                   
            }
                  return array('f' => $f->createView(),'matieres' =>$matieres );
    }
    
    /**
     * @Route("/listMatieres")
     * @Template()
     */
    public function listMatieresAction()
    {
        $matieres=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Matiere")
                ->findAll();
        return array('matieres'=>$matieres);
    }

    
    
/**
     * @Route("/ajouterClasse",name="addclasse")
     * @Template()
     */
    public function ajouterClasseAction()
    {
        $cl = new \eco\EcoleBundle\Entity\Classe();
        $f = $this->createFormBuilder($cl)
        ->add('libelleClasse','text',array('label' => 'libelleClasse: '))
        ->getForm();
                 $request = $this->container->get('request');
                 $f->handleRequest($request);
                       if ($f->isValid())
                       {
                        $em = $this->container->get('doctrine')->getEntityManager();
                        $em->persist($cl);
                        $em->flush();
                       }        
                       $classes=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Classe")->findAll();
                return array('f' => $f->createView(),'classes'=>$classes); 

    }   
    
    
    
      /**
     * @Route("/ModifierClasses/{id}",name="modifclass")
     * @Template()
     */
    public function ModifierClassesAction($id)
    {
        $em = $this->container->get('doctrine')->getEntityManager();
            $classe=$em->find('eco\EcoleBundle\Entity\Classe',$id);
            $f=$this->createFormBuilder($classe)
                    ->add('libelleClasse','text',array('label' => 'libelleClasse: '))
                    ->getForm();
            if(!$classe)
            {
                $message="aucun classe trouvée";
            }
            else
            {
                 $request = $this->container->get('request');
                 $f->handleRequest($request);
               
                $classes = $this->getDoctrine()
                ->getRepository('\eco\EcoleBundle\Entity\Classe')
                ->findAll();   
                   
            }
                  return array('f' => $f->createView(),'classes' =>$classes );
    }
    
    
    /**
     * @Route("/SupprimerClasse/{id}",name="supp_class")
     * @Template()
     */
    public function SupprimerClasseAction($id)
    {
     $classe = new \eco\EcoleBundle\Entity\Classe();
        $f = $this->createFormBuilder($classe)
       ->add('libelleClasse','text',array('label' => 'libelleClasse: '))
        ->getForm();
        
            $em = $this->container->get('doctrine')->getEntityManager();
            $classe=$em->find('eco\EcoleBundle\Entity\Classe',$id);
            if(!$classe)
            {
                $message="aucune chambre trouvée";
            }
            else
                {
                $em->remove($classe);
                $em->flush();
                $classes=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Classe")
                           ->findAll();
                   return array('f' => $f->createView(),'classes' =>$classes );
                }
                
        
                
    }
    
    
    
    
    
     /**
     * @Route("/listClasses")
     * @Template()
     */
    public function listClassesAction()
    {
        $classes=$this->getDoctrine()->getRepository("eco\EcoleBundle\Entity\Classe")
                ->findAll();
        return array('classes'=>$classes);
    }
}
