<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\TrafficRepository;

final class TrafficService
{
    private TrafficRepository $trafficRepository;

    public function __construct(TrafficRepository $trafficRepository)
    {
        $this->trafficRepository = $trafficRepository;
    }

    /**
     * @return array
     */
    public function getTrafficData(): array
    {
        return $this->trafficRepository->findAll();
    }
}