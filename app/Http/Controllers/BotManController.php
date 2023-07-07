<?php 
namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{massage}', function($botman, $massage) {

            if($massage == 'hi' OR $massage == 'hai' OR $massage == 'Hello' OR $massage == 'Hallo'){
                $this->askName($botman);
            }
            elseif ($massage=='Terimaksih' OR $massage == 'makasih') {
                $botman->reply("Sama-sama kawan");
            }
            elseif ($massage == 'Selamat Siang' OR $massage == 'Siang') {
                $botman->reply("Hai, Selamat siang kawan"); 
            }
            elseif ($massage == 'Selamat Pagi' OR $massage == 'Pagi') {
                $botman->reply("Hai, Selamat pagi kawan"); 
            }
            elseif ($massage == 'Selamat Malam' OR $massage == 'Malam') {
                $botman->reply("Hai, Selamat malam kawan"); 
            }
            elseif ($massage == 'Siapa kamu?' OR $massage == 'Kamu siapa?') {
                  $botman->reply("Saya Hanya sebuah AI Garden Green, Ayo mulai dengan pernyataanmu.."); 
            }
            elseif ($massage == 'Penanaman' OR $massage == 'Tanaman' OR $massage== 'bagaimana menanam?') {
                $botman->reply("Menanam Hidroponik harus mengetahui terlebih dulu tatacara atau ketetun dalam menanaman dengan Hidroponik"); 
            }
            elseif ($massage == 'media ' OR $massage == 'Media' OR $massage == 'Media Tanam') {
                $botman->reply("Media tanam yang dapat digunak menggunakan media tanam hidroponik yaitu Rockwool, Arang sekam,
                Kerikil, Serabut kelapa, Hydroton dan Perlite "); 
            }
            elseif ($massage == 'tips penanam' OR $massage == 'tips' OR $massage== 'Tips') {
            $botman->reply("Harus menegrti jenis tanaman hidroponik yang akan ditanam, Mengatuhui sistem atau metode yang akan dipakai, dan Konsiste saat memulai berkebun atau bercocock tanam"); 
            }
            elseif ($massage == 'Help' OR $massage == 'help' OR $massage == 'bantuan' OR $massage == 'Tolong') {
                $botman->reply("AI Gardens ada disini.. Apa yang bisa saya lakukan??"); 
            }
            elseif ($massage == 'hidroponik' OR $massage == 'Hidroponik' OR $massage == 'Apa itu hidroponik?' OR $massage == 'apa itu hidroponik' OR $massage == 'tanaman hidroponik') {
                $botman->reply("Hidroponik atau tirta tani adalah salah satu metode dalam budidaya menanam dengan memanfaatkan air tanpa menggunakan media tanah
                dengan menekankan pada pemenuhan kebutuhan hara nutrisi bagi tanaman. Kebutuhan air pada hidroponik lebih sedikit daripada
                kebutuhan air pada budidaya dengan tanah."); 
            }
            else{
                $botman->reply("Hello kawan, Selamat datang di AI GARDENS GREEN");
            }
        });
        
        $botman->listen();
    
    }

    public function askName($botman)
    {
        $botman->ask('Halo siapakah anda?', function(Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you'.$name);
        });
    }
    
}