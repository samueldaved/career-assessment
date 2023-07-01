<?php

  

namespace App\Mail;

  

use Illuminate\Bus\Queueable;

use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Mail\Mailable;

use Illuminate\Queue\SerializesModels;

  

class TestMail extends Mailable

{

    use Queueable, SerializesModels;

    public $data;
    /***
    * Create a new message instance.

     *

     * @return void

     */

    public function __construct($data) {
        $this->data = $data;
        //dd($data);
    }

  

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build() {
        return $this->from('samueldave31@gmail.com', 'Samuel')->subject('Test Mail')->view('pdf.result');
    }

}