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

    public function synConfigs(): PromiseInterface|Response {
        return Http::accept('application/json')->withHeaders([
            'X-APP-KEY' => env('APP_KEY'),
        ])
            ->get($this->url . '/config-client/update', [
                'overwrite' => 'true',
                'dry-run' => 'false',
            ]);
    }
}
