<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserNotification extends Notification
{
    use Queueable;

    private $notificationData;

    public function __construct($data)
    {
        $this->notificationData = $data;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Notification')
            ->line($this->notificationData['message'])
            ->action('View Notification', url('/notifications'))
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => $this->notificationData['message'],
            'url' => $this->notificationData['url'] ?? null,
        ];
    }
}
