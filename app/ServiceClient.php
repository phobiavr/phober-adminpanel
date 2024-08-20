<?php

namespace App;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class ServiceClient {
    private string $url;

    public function __construct(readonly ServiceEnum $service) {
        $this->url = "http://{$this->service->value}";
    }

    public function synConfigs(bool $dryRun): PromiseInterface|Response {
        return Http::accept('application/json')->withHeaders([
            'X-SERVICE-KEY' => env('SERVICE_KEY'),
        ])
            ->get($this->url . '/config-client/update', [
                'overwrite' => 'true',
                'dry-run'   => $dryRun ? 'true' : 'false',
            ]);
    }
}
