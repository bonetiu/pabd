<?php

namespace PSE\MailValidatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailValidateController extends Controller
{
    public function indexAction($email)
    {
        $v = preg_match('/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i', $email);
        $v = intval($v) ? true: false;
	$str = json_encode(array('data'=>array('email' => $email, 'validator' => $v)));
        return $this->render('PSEMailValidatorBundle:MailValidate:index.html.twig', array('json_string' => $str));
    }
}
