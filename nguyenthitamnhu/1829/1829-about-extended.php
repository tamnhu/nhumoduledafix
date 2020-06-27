<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1829 pt-4 pb-5">
    <div class="container-fluid s-about">
        <div class="row">
            <div class="col-md-12">
                <div class="pt-5">
                    <div class="title">
                        <h2>Seven Company: Our Story</h2>
                        <div class="divider"></div>
                    </div>
                    <div class="s-about-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="image-l pl-3 pr-3">
                                    <img src="images/image.png" class="img-fluid" alt="#">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="mid-content pl-3 pr-3  pt-sm-5 pt-md-0">
                                    <h5>Quisque quis ex mattis, euismod mauris eget, scelerisque sapien. Curabitur et mattis ante. Maecenas sit amet commodo tellut.</h5>
                                    <p>Vestibulum semper pharetra. Curabitur cursus sapien sed porta dapibus.
                                       <br/><br/> Lorem ipsum – dolor quis ex mattis, euismod mauris eget, scelerisque sapien. Quisque semper malesuada ipsum! Curabitur et mattis ante. Maecenas sit amet commodo tellus.
                                        <br/><br/>Lorem dolor sit glavrida amet. Vestibulum semper sed magna arcu eget nisi mattis lacinia sit sem pretium congue. Fusce eget arcu eget nisi mattis lacinia sit amet at sem. Quisque ornare lorem ipsum pharetra.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="right-content pl-3 pr-3 pt-md-3 pt-lg-0">
                                    <p>Lorem ipsum – dolor quis ex mattis, euismod mauris eget, scelerisque sapien. Quisque semper malesuada ipsum! <br/><br/>Curabitur et mattis ante. Maecenas sit amet commodo tellut.<br/><br/>Vestibulum semper pharetra. Curabitur cursus sapien sed porta dapibus. Lorem ipsum – dolor quis ex mattis, euismod mauris eget, scelerisque sapien.<br/><br/>Maecenas sit amet commodo tellut.Quisque semper malesuada ipsum! Curabitur et mattis ante. Maecenas sit amet commodo tellus. Maecenas sit amet commodo tellut.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor">
                        <div class="row">
                            <div class="col-md-2 md2-custom col-sm-6">
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
                            <div class="col-md-2 md2-custom col-sm-6">
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
                            <div class="col-md-2 md2-custom col-sm-6">
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
                            <div class="col-md-2 md2-custom col-sm-6">
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

                            <div class="col-md-2 md2-custom col-sm-12">
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