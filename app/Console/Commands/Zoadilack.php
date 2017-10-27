<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class Zoadilack extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zoadilack:notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends an email to whatever email address is specified';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Mail::send('email.notify', ['name' => 'Novica'], function($message){
            $message->to('davidpoarchtest@gmail.com', 'Some Guy')->subject('Test Email!');
        });
    }
}
