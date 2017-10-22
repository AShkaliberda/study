<div class='container'>
    <div class='row'>
        <div class='col-lg-12'>
            <div class='row'>
            <?php foreach ($posts as $post):?>
                <div class='col-lg-4 col-md-6 mb-4'>
                    <div class='card h-100'>
                        <a href='../single.php'><img class='card-img-top' src='<?=$post['img']; ?>' alt=''></a>
                        <div class='card-body'>
                            <a href='../single.php'><h4 class='card-title'><?=$post['title'] ?></h4></a>
                            <p class='card-text'><?=$post['preview']; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->
</div>
