<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Email;
use Illuminate\Support\Facades\Mail;

class EnviarEmailCommand extends Command

{

   /**

    * The name and signature of the console command.

    *

    * @var string

    */

   protected $signature = 'send:email';



   /**

    * The console command description.

    *

    * @var string

    */

   protected $description = 'Comando para o envio de e-mails da landing page';



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
    
        $emails = Email::all();

        foreach ($emails as $email)  {

            if($email->status == 0){ 
                $dados = [];
                $dados['nome']       = $email->nome;
                $dados['numero']     = $email->numero;
                $dados['email']      = $email->email;
                $dados['data_envio'] = $email->data_envio;

                Mail::to('jhonnatas.silva@grupohable.com.br')->send(new \App\Mailer\SolicContato($dados));
                
                $email->status = 1;
                $email->save();
            }

        }

        $this->info('Todos os e-mails cadastrado no banco de dados foram enviados.');
    }

}