<section class="page-header page-header-color page-header-tertiary page-header-more-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Artikel Detail</h1>
                <ul class="breadcrumb breadcrumb-valign-mid">
                    <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                    <li class="active">Artikel</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="blog-posts single-post">
                <article class="post post-large blog-single-post">
                    <?php if ($article->media != '') { ?>
                    <div class="post-image">
                        <div class="owl-carousel owl-theme" data-plugin-options='{"items":1}'>
                            <div>
                                <div class="img-thumbnail">
                                    <img class="img-responsive" src="<?php echo $article->media; ?>" alt="<?php echo $article->title; ?>">';
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="post-date">
                        <span class="day"><?php echo $article->day; ?></span>
                        <span class="month"><?php echo $article->month; ?></span>
                    </div>
                    <div class="post-content">
                        <h2><a href="<?php echo $this->config->item('link_article_detail').$article->slug; ?>"><?php echo $article->title; ?></a></h2>
                        <?php echo $article->content; ?>
                    </div>
                </article>

            </div>
        </div>
    </div>
</div>