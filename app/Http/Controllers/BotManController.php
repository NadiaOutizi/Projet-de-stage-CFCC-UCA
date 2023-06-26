<?php

  

namespace App\Http\Controllers;

  

use BotMan\BotMan\BotMan;

use Illuminate\Http\Request;

use BotMan\BotMan\Messages\Incoming\Answer;

  

class BotManController extends Controller

{

    /**

     * Place your BotMan logic here.

     */

    public function handle()

    {

        $botman = app('botman');

        $botman->hears('{message}', function($botman, $message) {

            if ($message == 'hi') {

                $this->askName($botman);

            }else{

                $botman->reply(" hi how can i help you ");

            }
        });

        $botman->listen();

    }

    /**

     * Place your BotMan logic here.

     */

    public function askName($botman)
    {
        $botman->ask('Hello! if you  want to know about our formation please enter formation or 
        prices please enter prices ....', function(Answer $answer) {

  

            $answer = $answer->getText();

            if($answer==='formation'){
                $this->say('our formation is great ....');
            } elseif($answer==='prices'){
                $this->say('our prices are ....');
            }

           else{
            $this->say("sorry can't help you,please contact :0670099117 for more infos");
           }

        });
       // $botman->ask('do you want to follow us on social media  ....', function(Answer $answer) {
        //       $answer=$answer->getText();
        //       if($answer==='yes'){
        //         $this->say('https://www.facebook.com/Uca.formation.continue/');
        //         $this->say('https://www.linkedin.com/school/ucamarrakech/?originalSubdomain=ma');
        //         $this->say('https://www.instagram.com/uca_fc/?hl=fr');
        //       }
        //      else{
        //         $this->say('ok as you wish');
        //      }
        // });

    }

}
       