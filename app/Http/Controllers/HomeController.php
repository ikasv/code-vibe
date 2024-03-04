<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MarkdownService;

class HomeController extends Controller
{

    protected $markdownService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MarkdownService $markdownService)
    {
        // $this->middleware('auth');
        $this->markdownService = $markdownService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about_us(){
        return view('about');
    }

    public function single_view(){
        $content = 
        <<<EOC
                    # How to send mail in php
                    ## _Simple code for sending mail in core php_
                    
                    Refresh Page and get new inspire quotes
                    
                    - Install
                    - daily-inspire endpoint on url
                    - ✨ Magic ✨
                    
                    ## Installation
                    
                    
                    Run command in project terminal
                    
                    ```
                    <?php
                            // the message
                            \$msg = "First line of text\nSecond line of text";

                            // use wordwrap() if lines are longer than 70 characters
                            \$msg = wordwrap(\$msg,70);

                            // send email
                            mail("someone@example.com","My subject",\$msg);
                            ?>
                    ```
                    
                    
                    ## License
                    
                    MIT
                    
                    **Free Software, Hell Yeah!**
                    EOC;
        $parsedContent = $this->markdownService->parse($content);
        return view('single-view', compact('parsedContent'));
    }
}
