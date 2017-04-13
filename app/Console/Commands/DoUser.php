<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class DoUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
     protected $signature = 'user:do {name} {email} {password?} {info?}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'do new user via console';

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
        
        $name = $this->argument('name');
        $email = $this->argument('email');
        $password = $this->argument('password');
        $info = $this->argument('info');

        
        if (empty($password)) {
            $password = $this->secret("password: ");
        }

      


        try {

            \App\User::create([
                'name'     => $name,
                'email'     => $email,
                'password' => md5($password),
                 'info'    => $info,
            ]);

        } catch (\Exception $ex) {

            $this->line("Failed to do user; " . $ex->getMessage());
            return;

        }

        $this->line("Just made a new user ".$name." ".$email."");


    }
}















  