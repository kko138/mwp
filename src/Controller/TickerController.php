<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class TickerController extends AbstractController
{
    public function getTickerData(Request $request): JsonResponse
    {
        $ticker = $request->request->get('ticker');
        $url = "https://query1.finance.yahoo.com/v11/finance/quoteSummary/{$ticker}?modules=financialData";

        try {
            $data = json_decode(file_get_contents($url), true);
        } catch (\Exception $e) {
            return new JsonResponse(['status' => false]);
        }
        foreach ($data['quoteSummary']['result'][0]['financialData'] as $ticker) {
            $ticker_symbol = $ticker;
        }
        return new JsonResponse(array_merge($data['quoteSummary']['result'][0]['financialData'],['status' => true]));
    }
}