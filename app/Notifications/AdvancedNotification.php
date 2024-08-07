<?php
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdvancedNotification extends Notification
{
    use Queueable;

    private $badge;
    private $user;

    public function __construct($user, $badge)
    {
        $this->user = $user;
        $this->badge = $badge;
    }

    public function via($notifiable)
    {
        return ['mail', 'database', 'broadcast'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Badge Awarded!')
            ->line('Congratulations ' . $this->user->name . '!')
            ->line('You have been awarded a new badge: ' . $this->badge['badge_name'])
            ->action('View Badge', url('/profile'))
            ->line('Thank you for being an active student!');
    }

    public function toArray($notifiable)
    {
        return [
            'badge_name' => $this->badge['badge_name'],
            'badge_image' => $this->badge['badge_image'],
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'badge_name' => $this->badge['badge_name'],
            'badge_image' => $this->badge['badge_image'],
        ]);
    }
}
