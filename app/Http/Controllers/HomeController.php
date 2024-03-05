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
        return view('document.index');
    }

    public function about_us(){
        return view('about');
    }

    public function single_view(){
        $content = 
        <<<EOC
                    # ✨ How to send mail in php ✨

                    ## Requirements
                    - php ( 8.0^ ) 
                    - Laravel ( 9.0^ ) 

                    ## Description
                    
                    
                    Run below code
                    
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
                    
                    
                    ## Live Preview
                    [Duck Duck Go](https://duckduckgo.com)
                    
                    ## Download Project
                    [Duck Duck Go](https://duckduckgo.com)
                    
                    ## Useful Links
                    [Duck Duck Go](https://duckduckgo.com)

                    **Free Software, Hell Yeah!**
                    EOC;
        $parsedContent = $this->markdownService->parse($content);
        return view('single-view', compact('parsedContent'));
    }
}
