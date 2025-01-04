<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Traffic;
use App\Service\TrafficService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class TrafficController extends AbstractController
{
    #[Route('/api/traffic', name: 'api_traffic', methods: ['GET'])]
    public function getTraffic(TrafficService $trafficService): JsonResponse
    {
        $response = $this->getResponse($trafficService);

        return new JsonResponse($response);
    }

    /**
     * @param TrafficService $trafficService
     * @return array|array[]
     */
    private static function getResponse(TrafficService $trafficService): array
    {
        return array_map(function (Traffic $traffic) {
            return [
                'id' => $traffic->getId(),
                'page_url' => $traffic->getPageUrl(),
                'traffic' => $traffic->getTraffic(),
            ];
        }, $trafficService->getTrafficData());
    }
}