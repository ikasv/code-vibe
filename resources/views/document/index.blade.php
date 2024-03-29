
@extends('layouts.app')
@section('content')
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h1 class="page-heading single-col-max mx-auto">Documentation</h1>
            <div class="page-intro single-col-max mx-auto">Everything you need to get your software documentation online.
            </div>
            <div class="main-search-box pt-3 d-block mx-auto">
                <form class="search-form w-100">
                    <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
                    <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div><!--//page-header-->
    <div class="page-content">
        <div class="container">
            <div class="docs-overview py-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-map-signs"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text">Introduction</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    Aenean commodo ligula eget dolor.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-1"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-arrow-down"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text">Installation</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Donec pede justo, fringilla vel, aliquet nec, vulputate
                                    eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-2"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-box fa-fw"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text">APIs</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-3"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-cogs fa-fw"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text">Integrations</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-4"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-tools"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text">Utilities</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-5"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-laptop-code"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text">Web</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-6"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-tablet-alt"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text">Mobile</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-7"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-book-reader"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text">Resources</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-8"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                    <div class="col-12 col-lg-4 py-3">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fas fa-lightbulb"></i>
                                    </span><!--//card-icon-holder-->
                                    <span class="card-title-text">FAQs</span>
                                </h5>
                                <div class="card-text">
                                    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                                    tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean
                                    imperdiet.
                                </div>
                                <a class="card-link-mask" href="docs-page.html#section-9"></a>
                            </div><!--//card-body-->
                        </div><!--//card-->
                    </div><!--//col-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//container-->
    </div><!--//page-content-->

    <section class="cta-section text-center py-5 theme-bg-dark position-relative">
        <div class="theme-bg-shapes-right"></div>
        <div class="theme-bg-shapes-left"></div>
        <div class="container">
            <h3 class="mb-2 text-white mb-3">Launch Your Software Project Like A Pro</h3>
            <div class="section-intro text-white mb-3 single-col-max mx-auto">Want to launch your software project and
                start getting traction from your target users? Check out our premium <a class="text-white"
                    href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-5-startup-template-for-software-projects/">Bootstrap
                    5 startup template CoderPro</a>! It has everything you need to promote your product.</div>
            <div class="pt-3 text-center">
                <a class="btn btn-light"
                    href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/coderpro-bootstrap-5-startup-template-for-software-projects/">Get
                    CoderPro<i class="fas fa-arrow-alt-circle-right ml-2"></i></a>
            </div>
        </div>
    </section><!--//cta-section-->
@endsection
