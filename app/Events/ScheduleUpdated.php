<?php

namespace App\Events;

use App\Models\DeviceInstance;
use App\Models\DeviceInstanceSchedule;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ScheduleUpdated implements ShouldBroadcastNow
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    public int $scheduleId;
    public int $instanceId;
    public string $action;

    public function __construct(DeviceInstanceSchedule $schedule, string $action)
    {
        $this->scheduleId = (int) $schedule->id;
        $this->instanceId = (int) $schedule->instance_id;
        $this->action     = $action;
    }

    /**
     * @return array<int, Channel|PrivateChannel>
     */
    public function broadcastOn(): array
    {
        $channels = [new PrivateChannel('instances')];

        $mac = DeviceInstance::query()->whereKey($this->instanceId)->value('mac_address');
        $secret = (string) config('service.overlay_secret');

        if ($mac && $secret !== '') {
            $slug = strtoupper(preg_replace('/[^a-zA-Z0-9]/', '', $mac));
            $channels[] = new Channel('schedule.' . $slug . '.' . $secret);
        }

        $channels[] = new Channel('instances');

        return $channels;
    }

    public function broadcastAs(): string
    {
        return 'ScheduleUpdated';
    }


 public function broadcastWith(): array
    {
        $type      = 'N/A';
        $countdown = 0;
        $upcomingType = null;
        $startsIn     = null;

        $instance = DeviceInstance::find($this->instanceId);
        $schedule = $instance?->getActiveSchedule();

        if ($schedule) {
            $type      = $schedule->type;
            $countdown = $schedule->end ? now()->diffInSeconds($schedule->end) : -1;
        }

        if ($upcoming = $instance?->getUpcomingSchedule()) {
            $upcomingType = $upcoming->type;
            $startsIn     = (int) now()->diffInSeconds($upcoming->start);
        }

        return [
            'schedule_id'   => $this->scheduleId,
            'instance_id'   => $this->instanceId,
            'action'        => $this->action,
            'type'          => $type,
            'countdown'     => (int) $countdown,
            'upcoming_type' => $upcomingType,
            'starts_in'     => $startsIn,
            'sent_by'       => 'adminpanel',
        ];
    }
}
