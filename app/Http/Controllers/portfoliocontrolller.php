<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portfoliocontrolller extends Controller
{
    public function portfolio(){
        $portfolioProjects = [
            [
                'title' => 'TicToe Game',
                'image' => 'asset/images/portfolio/tictoe.png',
                'link' => 'https://codingwithdrubo-tictoe.netlify.app',
                'catagory' => 'Game',
            ],
            [
                'title' => 'TaostNotificationbar',
                'image' => 'asset/images/portfolio/TaostNotificationbar.png',
                'link' => 'https://codingwithdrubo-taostnotificationbar.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Rock Paper Scizer',
                'image' => 'asset/images/portfolio/rockpaper.png',
                'link' => 'https://codingwithdrubo-rockpaper.netlify.app',
                'catagory' => 'Game',
            ],
            [
                'title' => 'Colour Generator',
                'image' => 'asset/images/portfolio/color.png',
                'link' => 'https://codingwithdrubo-colourgenerator.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Digital Clock',
                'image' => 'asset/images/portfolio/digitalclock.png',
                'link' => 'https://codingwithdrubo-digitalclock.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Crypto Currency',
                'image' => 'asset/images/portfolio/cripto.png',
                'link' => 'https://codingwithdrubo-cripto.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Product Card',
                'image' => 'asset/images/portfolio/productcard.png',
                'link' => 'https://codingwithdrubo-productcard.netlify.app',
                'catagory' => 'Web Design',
            ],
            [
                'title' => 'Progress Bar',
                'image' => 'asset/images/portfolio/progress.png',
                'link' => 'https://codingwithdrubo-progress.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Coming Soon ',
                'image' => 'asset/images/portfolio/comingsoon.png',
                'link' => 'https://codingwithdrubo-comingsoon.netlify.app/',
                'catagory' => 'Web Design',
            ],
            [
                'title' => 'Speech Converter',
                'image' => 'asset/images/portfolio/speechconverter.png',
                'link' => 'https://codingwithdrubo-speech.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Email Subscription.png',
                'image' => 'asset/images/portfolio/subscription.png',
                'link' => 'https://codingwithdrubo-subscription.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Portfolio Theme',
                'image' => 'asset/images/portfolio/portfolio.png',
                'link' => 'https://codingwithdrubo-portfolio.netlify.app',
                'catagory' => 'Web Design',
            ],
            [
                'title' => 'Stop Watch',
                'image' => 'asset/images/portfolio/stopwatch.png',
                'link' => 'https://codingwithdrubo-stopwatch.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Quote Generator',
                'image' => 'asset/images/portfolio/quote.png',
                'link' => 'https://codingwithdrubo-qoute.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Age Converter',
                'image' => 'asset/images/portfolio/ageconverter.png',
                'link' => 'https://codingwithdrubo-ageconverter.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Create Notes',
                'image' => 'asset/images/portfolio/notes.png',
                'link' => 'https://codingwithdrubo-notes.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Drag and Drop',
                'image' => 'asset/images/portfolio/draganddrop.png',
                'link' => 'https://codingwithdrubo-drag.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Select Menu',
                'image' => 'asset/images/portfolio/selectMenu.png',
                'link' => 'https://codingwithdrubo-selectmenu.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Mini Calender',
                'image' => 'asset/images/portfolio/minicalender.png',
                'link' => 'https://codingwithdrubo-minicalender.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Back Ground Change',
                'image' => 'asset/images/portfolio/backgroundchange.png',
                'link' => 'https://codingwithdrubo-bcakgroundchang.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Password Strength',
                'image' => 'asset/images/portfolio/passwordstrong.png',
                'link' => 'https://codingwithdrubo-passstrength.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Image Slider',
                'image' => 'asset/images/portfolio/imageslider.png',
                'link' => 'https://codingwithdrubo-imageslider.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Password Toggle',
                'image' => 'asset/images/portfolio/passwordtoggle.png',
                'link' => 'https://codingwithdrubo-passwordtoggle.netlify.app/',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Pop up',
                'image' => 'asset/images/portfolio/popup.png',
                'link' => 'https://codingwithdrubo-popup.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Calculator',
                'image' => 'asset/images/portfolio/calculator.png',
                'link' => 'https://codingwithdrubo-calculator.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Music Player',
                'image' => 'asset/images/portfolio/music.png',
                'link' => 'https://codingwithdrubo-musicplayer.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'QR Code',
                'image' => 'asset/images/portfolio/qrcode.png',
                'link' => 'https://codingwithdrubo-qrcode.netlify.app/',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Password Generator',
                'image' => 'asset/images/portfolio/randompass.png',
                'link' => 'https://codingwithdrubo-randompass.netlify.app/',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Quize App',
                'image' => 'asset/images/portfolio/quize.png',
                'link' => 'https://codingwithdrubo-quize.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Todo List',
                'image' => 'asset/images/portfolio/todolist.png',
                'link' => 'https://codingwithdrubo-todo.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Weather',
                'image' => 'asset/images/portfolio/weather.png',
                'link' => 'https://codingwithdrubo-weather.netlify.app/',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Pig Game',
                'image' => 'asset/images/portfolio/piggame.png',
                'link' => 'https://codingwithdrubo-piggame.netlify.app/',
                'catagory' => 'Game',
            ],
            [
                'title' => 'Gues Number',
                'image' => 'asset/images/portfolio/guesnumber.png',
                'link' => 'https://codingwithdrubo-guesnumber.netlify.app',
                'catagory' => 'Game',
            ],
            [
                'title' => 'Form Validation',
                'image' => 'asset/images/portfolio/email.png',
                'link' => 'https://codingwithdrubo-email.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Digital Calender',
                'image' => 'asset/images/portfolio/digitalcalender.png',
                'link' => 'https://codingwithdrubo-digitalcalender.netlify.app',
                'catagory' => 'Web Design',
            ],
            [
                'title' => 'Digital Calender',
                'image' => 'asset/images/portfolio/currencyconverter.png',
                'link' => 'https://codingwithdrubo-currency.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'ChatBot',
                'image' => 'asset/images/portfolio/chatbot.png',
                'link' => 'https://codingwithdrubo-chatbot.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Captcha Generator',
                'image' => 'asset/images/portfolio/captcha.png',
                'link' => 'https://codingwithdrubo-captcha.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Analogue Clock',
                'image' => 'asset/images/portfolio/analougeclock.png',
                'link' => 'https://codingwithdrubo-analougeclock.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Alarm Clock',
                'image' => 'asset/images/portfolio/alarm.png',
                'link' => 'https://codingwithdrubo-alarmclock.netlify.app',
                'catagory' => 'Javascript',
            ],
            [
                'title' => 'Image Search Engine',
                'image' => 'asset/images/portfolio/imagesearch.png',
                'link' => 'https://codingwithdrubo-imagesearch.netlify.app',
                'catagory' => 'Javascript',
            ],
            
            // Add more projects as needed
        ];
        return view('pages.portfolio',compact('portfolioProjects'));
    }
}
