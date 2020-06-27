<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1736 pt-5 pb-5">
    <div class="container-fluid s-about">
        <div class="row">
            <div class="col-md-6">
                <div class="s-about-left">
                    <img class="img-fluid" src="./images/image.png" alt="image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="s-about-right pt-5">
                    <div class="title">
                        <h2>Our Company In Numbers</h2>
                    </div>
                    <div class="divider">
                        <span></span>
                    </div>
                    <div class="s-about-content">
                    <p>Lorem dolor sit glavrida amet. Vestibulum semper sed magna arcu eget nisi mattis lacinia sit sem pretium congue. Fusce eget arcu eget nisi mattis lacinia sit amet at sem. Quisque ornare lorem ipsum pharetra.</p>
                    </div>
                    <div class="elementor">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="element">
                                    <div class="s-icon">
                                        <i class="far fa-calendar-check"></i>
                                    </div>
                                    <div class="title">
                                        <h2>17</h2>
                                    </div>
                                    <p>Years in business</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="element">
                                    <div class="s-icon">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                    <div class="title">
                                        <h2>24</h2>
                                    </div>
                                    <p>Top professionals</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="element">
                                    <div class="s-icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="title">
                                        <h2>15</h2>
                                    </div>
                                    <p>Industry awards</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="element">
                                    <div class="s-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="title">
                                        <h2>100+</h2>
                                    </div>
                                    <p>Projects done</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-6">
                                <div class="element">
                                    <div class="s-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="title">
                                        <h2>50+</h2>
                                    </div>
                                    <p>Returning customers</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="element">
                                    <div class="s-icon">
                                        <i class="fas fa-clipboard-list"></i>
                                    </div>
                                    <div class="title">
                                        <h2>37</h2>
                                    </div>
                                    <p>Scientific articles</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>