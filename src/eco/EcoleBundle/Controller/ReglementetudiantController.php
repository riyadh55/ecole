<?php

namespace eco\EcoleBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use eco\EcoleBundle\Entity\Reglementetudiant;
use eco\EcoleBundle\Form\ReglementetudiantType;

/**
 * Reglementetudiant controller.
 *
 * @Route("/reglementetudiant")
 */
class ReglementetudiantController extends Controller
{

    /**
     * Lists all Reglementetudiant entities.
     *
     * @Route("/", name="reglementetudiant")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ecoEcoleBundle:Reglementetudiant')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Reglementetudiant entity.
     *
     * @Route("/", name="reglementetudiant_create")
     * @Method("POST")
     * @Template("ecoEcoleBundle:Reglementetudiant:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Reglementetudiant();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reglementetudiant_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Reglementetudiant entity.
     *
     * @param Reglementetudiant $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Reglementetudiant $entity)
    {
        $form = $this->createForm(new ReglementetudiantType(), $entity, array(
            'action' => $this->generateUrl('reglementetudiant_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Reglementetudiant entity.
     *
     * @Route("/new", name="reglementetudiant_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Reglementetudiant();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Reglementetudiant entity.
     *
     * @Route("/{id}", name="reglementetudiant_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ecoEcoleBundle:Reglementetudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reglementetudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Reglementetudiant entity.
     *
     * @Route("/{id}/edit", name="reglementetudiant_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ecoEcoleBundle:Reglementetudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reglementetudiant entity.');
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
    * Creates a form to edit a Reglementetudiant entity.
    *
    * @param Reglementetudiant $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Reglementetudiant $entity)
    {
        $form = $this->createForm(new ReglementetudiantType(), $entity, array(
            'action' => $this->generateUrl('reglementetudiant_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Reglementetudiant entity.
     *
     * @Route("/{id}", name="reglementetudiant_update")
     * @Method("PUT")
     * @Template("ecoEcoleBundle:Reglementetudiant:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ecoEcoleBundle:Reglementetudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Reglementetudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reglementetudiant_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Reglementetudiant entity.
     *
     * @Route("/{id}", name="reglementetudiant_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ecoEcoleBundle:Reglementetudiant')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Reglementetudiant entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reglementetudiant'));
    }

    /**
     * Creates a form to delete a Reglementetudiant entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reglementetudiant_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
