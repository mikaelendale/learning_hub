<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TestNotification extends Notification
{
    public $message;
    public $url;

    public function __construct($message, $url)
    {
        $this->message = $message;
        $this->url = $url;
    }

    public function via($notifiable)
    {
        return ['database', 'mail']; // Add 'database' to store in the database and 'mail' to send an email
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => $this->message,
            'url' => $this->url,
        ];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line($this->message)
            ->action('View Notification', $this->url);
    }
}
