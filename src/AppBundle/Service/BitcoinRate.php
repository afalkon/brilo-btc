<?php

namespace AppBundle\Service;


class BitcoinRate
{
    private $api_link;
    private $btc_usd_rates = array();
    private $btc_eur_rates = array();
    private $output_array = array();

    public function __construct($api_link) {
        $this->api_link = $api_link;
        $this->find_btc_usd_rates();
        $this->find_btc_eur_rates();
        $this->make_an_array_for_output();
        $this->add_info_to_output_array();
    }

    public function get_rates() {
        return $this->output_array;
    }

    private function make_an_array_for_output() {
        $this->output_array['currencies']['USD'] = $this->btc_usd_rates;
        $this->output_array['currencies']['EUR'] = $this->btc_eur_rates;
    }

    private function add_info_to_output_array() {
        $api_array = $this->make_an_array_from_api();
        $this->output_array['chart_name'] = $api_array['chartName'];
        $this->output_array['disclaimer'] = $api_array['disclaimer'];
        $this->output_array['update_time'] = date('d M Y, H:i', strtotime($api_array['time']['updatedISO']));
    }

    private function find_btc_usd_rates() {
        $api_array = $this->make_an_array_from_api();
        $this->btc_usd_rates = $api_array['bpi']['USD'];
    }

    private function find_btc_eur_rates() {
        $api_array = $this->make_an_array_from_api();
        $this->btc_eur_rates = $api_array['bpi']['EUR'];
    }

    private function make_an_array_from_api() {
        $get_data = file_get_contents($this->api_link);
        $decoded_data = json_decode($get_data, true);
        return json_decode($get_data, true);
    }
}