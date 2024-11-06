<?php get_header(); ?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <h4>404</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url());?>">Home</a></li> / 
                        <li>404</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section page-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <h4>Not Found</h4>
                <p>This page not found!</p>
                <a href="<?php echo esc_url(home_url()); ?>" class="btn btn-success btn-sm">go home</a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>