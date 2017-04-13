<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\User;


class UpdateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:update {name} {info}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'update user info';

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
        $info = $this->argument('info');
      


        try {


        $user = \App\User::where([
                'name'   => $name,
            ])->first() ;

         $user->info =$info;
     
        $user->save();


        } catch (\Exception $ex) {

            $this->line("Failed to update user info; " . $ex->getMessage());
            return;

        }

        $this->line("Just updated user's name and  info ".$name." ".$info." ");




    }
}





