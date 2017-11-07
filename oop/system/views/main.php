<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-12">

            <div class="row">
                <? foreach($tests as $test): ?>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <?=$test['name']; ?>
                            </h4>
                            <h5>$24.99</h5>
                            <p class="card-text"><?=$test['description']; ?></p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
                <? endforeach; ?>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->