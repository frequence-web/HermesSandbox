<?php

namespace Hermes\Bundle\HermesBundle\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Hermes\Bundle\HermesBundle\Document\Subscriber;

class SubscriberController extends Controller
{
    /**
     * Add a new subscriber
     * Use method PUT and support POST send
     * 
     * Receive data:
     *   - name     (string, ex: "Nek")
     *   - email    (string, ex: "noob@nekoro.fr")
     *   - params   (json array as string, ex: { 'realname': 'Kenny' })
     *   - list     (string, ex: "nekland-blog")
     *   - locale   (string, ex: "en_EN")
     */
    public function addAction()
    {
        $request = $this->getRequest();

        $subscriber = new Subscriber();
        $subscriber     ->setEmail($request->getParameter('email'))
                        ->setParams($request->setParameter('params'))
                        ->setLocale($request->setParameter('locale'));

        $em = $this->getDoctrine()->getManager('default');
        $slug = $request->getParameter('list');
        $list = $em->getRepository('HermesHermesBundle:SubscriberList')->findBySlug($slug);

        if (!$list) {
            throw $this->createNotFoundException('The list was not found.');
        }

        $subscriber->setList($slug);

        $validator = $this->get('validator');
        $errors = $validator->validate($subscriber);

        

        if (count($errors) > 0) {

            return $this->jsonResponse(array(
                'success' => true,
            ));
        }
        else {
            return $this->jsonResponse(array(
                'success'   => false,
                'errors'    => $errors
            ))
        }
    }

    /**
     * Make and return a Respons object with json headers
     *
     * @return Response
     */
    private function jsonResponse(array $data)
    {
        $response = new Response(json_encode($data));

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Cache-Control', 'no-cache, must-revalidate');
        $response->headers->set('Expires', 'Mon, 26 Jul 1997 05:00:00 GMT');

        return $response;
    }
}
