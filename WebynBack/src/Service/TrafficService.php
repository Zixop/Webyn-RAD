<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Traffic;
use App\Repository\TrafficRepository;

final class TrafficService
{
    private TrafficRepository $trafficRepository;

    public function __construct(TrafficRepository $trafficRepository)
    {
        $this->trafficRepository = $trafficRepository;
    }

    public function getData(): ?array
    {
        $data = $this->trafficRepository->findAll();

        if (empty($data)) {
            return null;
        }

        return array_map(function (Traffic $traffic) {
            return [
                'id' => $traffic->getId(),
                'page_url' => $traffic->getPageUrl(),
                'traffic' => $traffic->getTraffic(),
            ];
        }, $this->trafficRepository->findAll());
    }
}