<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

// Importing the BotDetectCaptcha class
use LaravelCaptcha\Integration\BotDetectCaptcha;

class ExampleController extends Controller
{
    // get a captcha instance to handle for the example page
      private function getExampleCaptchaInstance() 
      {
        // Captcha parameters
        $captchaConfig = [
          'CaptchaId' => 'ExampleCaptcha', // a unique Id for the Captcha instance
          'UserInputId' => 'CaptchaCode', // Id of the Captcha code input textbox
          // The path of the Captcha config file is inside the config folder
          //'CaptchaConfigFilePath' => 'captcha_config/ExampleCaptchaConfig.php'
        ];
        return BotDetectCaptcha::GetCaptchaInstance($captchaConfig);
      }

      public function getExample() 
      {
        // captcha instance of the example page
        $captcha = $this->getExampleCaptchaInstance();

        // passing Captcha Html to example view
        return view('example', ['captchaHtml' => $captcha->Html()]);
      }

      public function postExample(Request $request) 
          {
            // captcha instance of the example page
            $captcha = $this->getExampleCaptchaInstance();

            // validate the user-entered Captcha code when the form is submitted
            $code = $request->input('CaptchaCode');
            $isHuman = $captcha->Validate($code);

            if ($isHuman) {
              echo "TODO: Captcha validation passed, perform protected action";
            } else {
              echo "TODO: Captcha validation failed, show error message";
            }
            
          }

      

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
