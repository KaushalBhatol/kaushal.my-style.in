<?php
include '/head.php';
?>
<style>
.article-clean{color:#56585b;background-color:#fff;font-family:Lora,serif;font-size:14px}.article-clean .intro{font-size:16px;margin:0 auto 30px}.article-clean .intro h1{font-size:32px;margin-bottom:15px;padding-top:20px;line-height:1.5;color:inherit;margin-top:20px}.article-clean .intro p{color:#929292;font-size:12px}.article-clean .intro p .by{font-style:italic}.article-clean .intro p .date{text-transform:uppercase;padding:4px 0 4px 10px;margin-left:10px;border-left:1px solid #ddd}.article-clean .intro p a{color:#333;text-transform:uppercase;padding-left:3px}.article-clean .intro img{margin-top:20px}.article-clean .text p{margin-bottom:20px;line-height:1.45}.article-clean .text h2{margin-top:28px;margin-bottom:20px;line-height:1.45;font-size:16px;font-weight:700;color:#333}@media (min-width:768px){.article-clean .text p{font-size:16px}.article-clean .text h2{font-size:20px}}.article-clean .text figure{text-align:center;margin-top:30px;margin-bottom:20px}.article-clean .text figure img{margin-bottom:12px;max-width:100%}
</style>
    <div class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <!-- Start: Intro -->
                    <div class="intro">
                        <h1 class="text-center">Error 404 : Page Not Found !<br></h1>
                        <img class="img-fluid" src="http://www.mediafire.com/convkey/c4c3/nk6t31ds5l7u4369g.jpg">
                    </div>
                    <!-- End: Intro -->
                    <!-- Start: Text -->
                    <div class="text">
                        <p>Your requested url <strong><?=$current_url ?>  </strong>is not found ! <br><br> <a href="http://<?=$host_url?>">Back to <?=$host_url?></a><br><br>If You redirected from Official page! Please <a href="/contact">contact us</a> about this brocken link.</p>
                    </div>
                    <!-- End: Text -->
                </div>
            </div>
        </div>
    </div>
<?php
include '/footer.php';
?>