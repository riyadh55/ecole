<?php

namespace eco\EcoleBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use eco\EcoleBundle\Entity\Modereglement;
use eco\EcoleBundle\Form\ModereglementType;

/**
 * Modereglement controller.
 *
 * @Route("/modereglement")
 */
class ModereglementController extends Controller
{

    /**
     * Lists all Modereglement entities.
     *
     * @Route("/", name="modereglement")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ecoEcoleBundle:Modereglement')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Modereglement entity.
     *
     * @Route("/", name="modereglement_create")
     * @Method("POST")
     * @Template("ecoEcoleBundle:Modereglement:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Modereglement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('modereglement_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Modereglement entity.
     *
     * @param Modereglement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Modereglement $entity)
    {
        $form = $this->createForm(new ModereglementType(), $entity, array(
            'action' => $this->generateUrl('modereglement_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Modereglement entity.
     *
     * @Route("/new", name="modereglement_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Modereglement();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Modereglement entity.
     *
     * @Route("/{id}", name="modereglement_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ecoEcoleBundle:Modereglement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Modereglement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Modereglement entity.
     *
     * @Route("/{id}/edit", name="modereglement_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ecoEcoleBundle:Modereglement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Modereglement entity.');
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
    * Creates a form to edit a Modereglement entity.
    *
    * @param Modereglement $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Modereglement $entity)
    {
        $form = $this->createForm(new ModereglementType(), $entity, array(
            'action' => $this->generateUrl('modereglement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Modereglement entity.
     *
     * @Route("/{id}", name="modereglement_update")
     * @Method("PUT")
     * @Template("ecoEcoleBundle:Modereglement:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ecoEcoleBundle:Modereglement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Modereglement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('modereglement_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Modereglement entity.
     *
     * @Route("/{id}", name="modereglement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ecoEcoleBundle:Modereglement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Modereglement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('modereglement'));
    }

    /**
     * Creates a form to delete a Modereglement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('modereglement_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
