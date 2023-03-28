<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;

class NewCustomer extends Notification
{
    use Queueable;
    protected $user;
    protected $pass;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user,$pass)
    {
        $this->user=$user;
        $this->pass=$pass;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

         return (new MailMessage)
                -> subject('New Customer Account')->view('Notifications.newCustomer',
             ['user' => $this->user,
              'pass' => $this->pass,
        ]);
        
    }

    public function toDatabase($notifiable)
    {

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
        ];
    }
}
