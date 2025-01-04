<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Traffic;
use App\Service\TrafficService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class TrafficController extends AbstractController
{
    #[Route('/api/traffic', name: 'api_traffic', methods: ['GET'])]
    public function getTraffic(TrafficService $trafficService): JsonResponse
    {
        $data = $trafficService->getData();

        return
            new JsonResponse(
                $data,
                !empty($data) ?
                    Response::HTTP_OK :
                    Response::HTTP_NO_CONTENT
            );
    }
}