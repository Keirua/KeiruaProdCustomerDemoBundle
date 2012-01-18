<?php

namespace KeiruaProd\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use KeiruaProd\ApplicationBundle\Entity\Customer;
use KeiruaProd\ApplicationBundle\Entity\Product;
use KeiruaProd\ApplicationBundle\Form\CustomerType;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$em = $this->getDoctrine()->getEntityManager();

        $customers = $em->getRepository('KeiruaProdApplicationBundle:Customer')->findAll();

        return $this->render('KeiruaProdApplicationBundle:Default:home.html.twig', array('customers' => $customers));
    }

    public function addAction()
    {
        $entity = new Customer();
		$entity->getProducts()->add(new Product());
        $request = $this->getRequest();
        $form = $this->createForm(new CustomerType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('KeiruaProdApplicationBundle_homepage'));
        }
		
		return $this->render('KeiruaProdApplicationBundle:Default:add.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView()
        ));
    }
	
	public function showAction (Customer $customer)
	{
		// L'objet Customer associé à l'identifiant lié à la route n'est plus nécessaire, l'objet est directement converti.
        return $this->render('KeiruaProdApplicationBundle:Default:show.html.twig', array('customer' => $customer));
	}
}
