<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
	protected $od;
	protected $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$od,$code)
    {
        $this->user = $user;
		$this->od = $od;
		$this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('web.omail')->with([
            'user' => $this->user,
            'detail' => $this->od,
			'code' => $this->code,
        ])->subject('訂單通知');
    }
}
