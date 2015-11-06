<?php

namespace PointWeb\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PointWeb\FicheBundle\Entity\Frais;
use PointWeb\FicheBundle\Form\FraisType;

/**
 * Frais controller.
 *
 */
class FraisController extends Controller
{

    /**
     * Lists all Frais entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PointWebFicheBundle:Frais')->findAll();

        return $this->render('PointWebFicheBundle:Frais:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Frais entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Frais();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_frais_show', array('id' => $entity->getId())));
        }

        return $this->render('PointWebFicheBundle:Frais:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Frais entity.
     *
     * @param Frais $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Frais $entity)
    {
        $form = $this->createForm(new FraisType(), $entity, array(
            'action' => $this->generateUrl('admin_frais_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Frais entity.
     *
     */
    public function newAction()
    {
        $entity = new Frais();
        $form   = $this->createCreateForm($entity);

        return $this->render('PointWebFicheBundle:Frais:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Frais entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebFicheBundle:Frais')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Frais entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebFicheBundle:Frais:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Frais entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebFicheBundle:Frais')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Frais entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('PointWebFicheBundle:Frais:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Frais entity.
    *
    * @param Frais $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Frais $entity)
    {
        $form = $this->createForm(new FraisType(), $entity, array(
            'action' => $this->generateUrl('admin_frais_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Frais entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PointWebFicheBundle:Frais')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Frais entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_frais_edit', array('id' => $id)));
        }

        return $this->render('PointWebFicheBundle:Frais:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Frais entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PointWebFicheBundle:Frais')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Frais entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_frais'));
    }

    /**
     * Creates a form to delete a Frais entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_frais_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
