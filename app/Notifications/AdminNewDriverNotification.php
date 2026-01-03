<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\DatabaseMessage;

class AdminNewDriverNotification extends Notification
{
    use Queueable;

    protected $driver;

    public function __construct($driver)
    {
        $this->driver = $driver;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'type' => 'new_driver',
            'title' => 'New Driver Registered',
            'message' => "{$this->driver->name} joined as a driver",
            'driver_id' => $this->driver->id,
            'phone' => $this->driver->phone,
            'carNumber' => $this->driver->carNumber,
        ];
    }
}
