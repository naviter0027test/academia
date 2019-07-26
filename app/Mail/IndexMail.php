<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class IndexMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//		dd($this->request->input('subject'));
        return $this->view('web.mail')->with([
            'name'=>$this->request->input('name'),
            'gender'=>$this->request->input('gender'),
            'email'=>$this->request->input('email'),
            'service'=>$this->request->input('service'),
            'tel'=>$this->request->input('tel'),
            'msg'=>$this->request->input('message'),
            'ask'=>$this->request->input('ask'),
            'askType'=>$this->request->input('askType'),
            'askTime'=>$this->request->input('askTime'),
        ])->subject($this->request->input('service'));
    }
}