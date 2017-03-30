<?php
/**
 * Created by PhpStorm.
 * User: qiang
 * Date: 6/10/16
 * Time: 11:42 AM
 */

$this->beginContent('@frontend/web/template/healthpurple/layouts/main.php');
?>

<section id="blog" class="container">
    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <?= $content ?>
            </div><!--/.col-md-8-->

            <aside class="col-md-4">
                <?= $this->render('/blogsidenav.php', [])?>
            </aside>
        </div><!--/.row-->
    </div>
</section><!--/#blog-->


<?php
$this->endContent();
?>

