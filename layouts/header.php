<nav class="navbar navbar-fixed-top navbar-default" role="navigation" style="background:#8d70b2;">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="border-color: #fff;">
                <span class="sr-only" style="background-color: #fff">Toggle navigation</span>
                <span class="icon-bar" style="background-color: #fff"></span>
                <span class="icon-bar" style="background-color: #fff"></span>
                <span class="icon-bar" style="background-color: #fff"></span>
            </button>

            <a class="navbar-brand page-scroll" href="<?=\yii\helpers\Url::home(true).'#page-top'?>" style="color: lightgreen;font-size: 2.3rem;">
                <img src="<?=Yii::$app->urlManager->getHostInfo().'/images/logo.png'?>" alt="<?=Yii::$app->getTextBlock('logo')->content?>" style="margin-left: 0px;"/>
            </a>
        </div>

        <div class="collapse navbar-collapse  navbar-ex1-collapse navbar-right ">
            <ul class="nav navbar-nav" >
                <li>
                    <a href="<?=\yii\helpers\Url::home(true).'#service1'?>" class="page-scroll" >Service</a>
                </li>

                <li>
                    <a href="<?=\yii\helpers\Url::home(true).'#price'?>" class="page-scroll" >Price</a>
                </li>

                <li>
                    <a href="<?=\yii\helpers\Url::home(true).'#contact'?>" class="page-scroll" >Contact</a>
                </li>

                <li>
                    <a href="<?=Yii::$app->getUrlManager()->createAbsoluteUrl(['/blog/default/catalog/','id'=>52])?>" class="page-scroll" >Health Therapy</a>
                </li>
            </ul>
        </div>
    </div><!--/.container-->
</nav><!--/nav-->


