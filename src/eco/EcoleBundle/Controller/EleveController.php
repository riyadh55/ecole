<?php

namespace eco\EcoleBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use eco\EcoleBundle\Entity\Eleve;
use eco\EcoleBundle\Form\EleveType;

/**
 * Eleve controller.
 *
 * @Route("/eleve")
 */
class EleveController extends Controller
{

    /**
     * Lists all Eleve entities.
     *
     * @Route("/", name="eleve")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ecoEcoleBundle:Eleve')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Eleve entity.
     *
     * @Route("/", name="eleve_create")
     * @Method("POST")
     * @Template("ecoEcoleBundle:Eleve:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Eleve();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->upload();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('eleve_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Eleve entity.
     *
     * @param Eleve $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Eleve $entity)
    {
        $form = $this->createForm(new EleveType(), $entity, array(
            'action' => $this->generateUrl('eleve_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Eleve entity.
     *
     * @Route("/new", name="eleve_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Eleve();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Eleve entity.
     *
     * @Route("/{id}", name="eleve_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ecoEcoleBundle:Eleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Eleve entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Eleve entity.
     *
     * @Route("/{id}/edit", name="eleve_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ecoEcoleBundle:Eleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Eleve entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Eleve entity.
    *
    * @param Eleve $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Eleve $entity)
    {
        $form = $this->createForm(new EleveType(), $entity, array(
            'action' => $this->generateUrl('eleve_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Eleve entity.
     *
     * @Route("/{id}", name="eleve_update")
     * @Method("PUT")
     * @Template("ecoEcoleBundle:Eleve:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ecoEcoleBundle:Eleve')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Eleve entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('eleve_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Eleve entity.
     *
     * @Route("/{id}", name="eleve_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ecoEcoleBundle:Eleve')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Eleve entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('eleve'));
    }

    /**
     * Creates a form to delete a Eleve entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eleve_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
