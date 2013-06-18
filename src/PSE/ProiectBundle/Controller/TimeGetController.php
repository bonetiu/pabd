<?php

namespace PSE\ProiectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TimeGetController extends Controller
{
    public function indexAction($name)
    {
	$format = str_split($name,1);
	$date = date(implode($format, '-'));
	$str = json_encode(array('data' => array('date' => $date)));
        return $this->render('PSEProiectBundle:TimeGet:index.html.twig', array('json_string' => $str));
#        return new Response('<html><body>Data: '.$date.'</body></html>');
    }
}
