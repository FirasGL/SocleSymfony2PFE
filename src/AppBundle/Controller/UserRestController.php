<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Swagger\Annotations as SWG;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class UserRestController
 * @package AppBundle\Controller
 */
class UserRestController extends Controller
{

    /**
     *	@SWG\Get(
     *     path="/api/users",
     *     summary="users list",
     *     operationId="showUsersList",
     *     tags={"getUsers"},
     *     produces={"application/json"},
     *     @SWG\Response(
     *         response=200,
     *         description="Expected response to a valid request",
     *         @SWG\Schema(ref="#/definitions/User")
     *     ),
     *    @SWG\Response(response=400,  description="Droit non attribue pour cet utilisateur")
     * )
     *
     */
    public function getUsersAction()
    {
        $userList = $this->getDoctrine()->getRepository('Application\Sonata\UserBundle\Entity\User')->findAll();

        return $userList;

    }

    /**
     * @param $id
     * @return array
     * @SWG\Get(
     *     path="/api/users/{id}",
     *     summary="Info for a specific user",
     *     operationId="getUserById",
     *     tags={"getUserById"},
     *
     *   @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     required=true,
     *     description="The id of the user to retrieve",
     *     type="string"
     *   ),
     *   @SWG\Response(
     *     response=200,
     *      description="successful operation",
     *      @SWG\Schema(ref="#/definitions/User")),
     *   @SWG\Response(response=400, description="Invalid username supplied"),
     *   @SWG\Response(response=404, description="User not found")
     * )
     */
    public function getUserByIdAction($id)
    {
        $user = $this->getDoctrine()->getRepository('ApplicationSonataUserBundle:User')->find($id);
        return $user;

    }





//    public function updateUser(Request $request)
//    {
//        $user = $this->getDoctrine()->getRepository('ApplicationSonataUserBundle:User')->find($request->get('id'));
//
//        $json = array(
//            'firstname'=> $request->get('firstname'),
//            'lastname'=> $request->get('lastname'),
//            'email'=> $request->get('email'),
//            'password'=> $request->get('password'),
//        );
//    }




//    public function deleteUserAction($username)
//    {
//        $user = $this->getDoctrine()->getRepository('ApplicationSonataUserBundle:User')->find($username);
//        $this->getDoctrine()->getRepository('ApplicationSonataUserBundle:User')->delete($user);
//
//    }



}
