<?php

namespace App\Nova\Actions;

use App\ServiceClient;
use App\ServiceEnum;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Actions\ActionResponse;
use Laravel\Nova\Fields\ActionFields;

class SyncConfigsButtonAction extends Action {
    use InteractsWithQueue, Queueable;

    use Queueable;

    public $name = 'Sync Configs';

    /**
     * Perform the action on the given models.
     *
     * @param \Laravel\Nova\Fields\ActionFields $fields
     * @param \Illuminate\Support\Collection $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models) {
        $result = [
            ServiceEnum::CRM->name          => (new ServiceClient(ServiceEnum::CRM))->synConfigs()->json(),
            ServiceEnum::AUTH->name         => (new ServiceClient(ServiceEnum::AUTH))->synConfigs()->json(),
            ServiceEnum::STAFF->name        => (new ServiceClient(ServiceEnum::STAFF))->synConfigs()->json(),
            ServiceEnum::HARDWARE->name     => (new ServiceClient(ServiceEnum::HARDWARE))->synConfigs()->json(),
            ServiceEnum::NOTIFICATION->name => (new ServiceClient(ServiceEnum::NOTIFICATION))->synConfigs()->json(),
        ];

        return $this->parseResult($result);
    }

    private function parseResult($result): ActionResponse {
        $message = '';
        $error = false;

        foreach ($result as $service => $json) {
            $message .= $service . ' - ';
            try {
                $message .= 'Created: ' . $json['result']['new_configurations_added'] . ' - ';
                $message .= 'Updated: ' . $json['result']['configurations_updated'];

            } catch (\Throwable $ignored) {
                $message .= $ignored->getMessage();
                $error = true;
            }

            $message .= '<br>';

        }

        return $error ? Action::danger($message) : Action::message($message);
    }
}
