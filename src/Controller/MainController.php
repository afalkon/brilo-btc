<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Service\BitcoinRate;


class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_main")
     */
    public function index(): Response
    {
        $api_link = $this->getParameter('app.bitcoinRate');

        $rates = new BitcoinRate($api_link);
        $response_data = $rates->get_rates();
        //dd($response_data);

        return $this->render('main/index.html.twig', ['data' => $response_data]);
    }

    /**
     * @Route("/ajax-btc-rates", name="app_ajax_btc_rates")
     */
    public function ajax_btc_rates(){
        $api_link = $this->getParameter('app.bitcoinRate');
        $rates = new BitcoinRate($api_link);
        $response_data = $rates->get_rates();
        return $this->json($response_data);
    }
}
