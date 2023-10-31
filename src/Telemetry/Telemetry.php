<?php
namespace Savvy\Telemetry;

use \Savvy\Entities\Telemetry as TelemetryRequest;
use \Savvy\Shared\HttpClient;

class Telemetry
{
    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    public function send(TelemetryRequest $telemetry) : bool
    {
        $endpoint = '/telemetry';
        return $this->client->post($endpoint, $telemetry);
    }
}