<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class forgetMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//		dd($this->request->input('subject'));
        return $this->view('web.fmail')->with([
            'name'=>$this->data->name,
            'gender'=>$this->data->gender,
            'email'=>$this->data->email,
            'password'=>$this->data->password,
        ])->subject('海生館帳號密碼查詢');
    }
}