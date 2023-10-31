<?php
namespace Savvy;

use \Savvy\Entities\Telemetry as TelemetryRequest;
use \Savvy\Telemetry\Telemetry;
use \Savvy\Shared\HttpClient;

class Client
{
    public Telemetry $telemetry;

    public function __construct($config = null)
    {
        $config = new Config($config);
        $client = new HttpClient($config);

        $this->telemetry = new Telemetry($client);
    }

    public function telemetry(TelemetryRequest $telemetry)
    {
        return $this->telemetry->send($telemetry);
    }
}