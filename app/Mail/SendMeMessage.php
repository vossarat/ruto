<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMeMessage extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $name; 
    protected $email_address; 
    protected $phone; 
    protected $text_message; 
    /**
     * Create a new message instance.
     *
     * @return void
     */    
    
    public function __construct($name, $email_address, $phone, $text_message)
    {
        $this->name = $name;
        $this->email_address = $email_address;
        $this->phone = $phone;
        $this->text_message = $text_message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    	return $this->from($this->email_address) //от кого
    				->subject('Сообщение от TARASSOV.PRO')
                	->view('send_message')
						->with([
		                        'user' => $this->name,		                        
		                        'phone' => $this->phone,		                        
		                        'email_address' => $this->email_address,
		                        'text_message' => $this->text_message,
		                    ]);
    }
}
