<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// Importing the BotDetectCaptcha class
use LaravelCaptcha\Integration\BotDetectCaptcha;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    // private function getExampleCaptchaInstance() 
    //   {
    //     // Captcha parameters
    //     $captchaConfig = [
    //       'CaptchaId' => 'ExampleCaptcha', // a unique Id for the Captcha instance
    //       'UserInputId' => 'CaptchaCode', // Id of the Captcha code input textbox
    //       // The path of the Captcha config file is inside the config folder
    //       'CaptchaConfigFilePath' => 'captcha_config/ExampleCaptchaConfig.php'
    //     ];
    //     return BotDetectCaptcha::GetCaptchaInstance($captchaConfig);
    //   }

    public function boot()
    {
      
        $captchaConfig = [
          'CaptchaId' => 'ExampleCaptcha', // a unique Id for the Captcha instance
          'UserInputId' => 'CaptchaCode', // Id of the Captcha code input textbox
          // The path of the Captcha config file is inside the config folder
          'CaptchaConfigFilePath' => 'captcha_config/ExampleCaptchaConfig.php'
        ];

        $captcha = BotDetectCaptcha::GetCaptchaInstance($captchaConfig);

dd($captcha->Html());
         view()->share('captchaHtml', $captcha->Html());
        //
       // view()->share('captchaHtml', $captcha->Html());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
