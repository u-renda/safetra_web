<section class="page-header page-header-color page-header-tertiary page-header-more-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Artikel</h1>
                <ul class="breadcrumb breadcrumb-valign-mid">
                    <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                    <li class="active">Media</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="blog-posts">
                <?php foreach ($article as $row) { ?>
                <article class="post post-medium">
                    <div class="row">
                        <?php if ($row->media != '') { ?>
                        <div class="col-md-5">
                            <div class="post-image">
                                <div>
                                    <div class="img-thumbnail">
                                        <img class="img-responsive" src="<?php echo $row->media; ?>" alt="<?php echo $row->title; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                        <?php } else { ?>
                        <div class="col-md-12">
                        <?php } ?>
                            <div class="post-content">
                                <h2><a href="<?php echo $this->config->item('link_article_detail').$row->slug; ?>"><?php echo $row->title; ?></a></h2>
                                <p><?php echo $row->content_new; ?> [...]</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-meta">
                                <span><i class="fa fa-calendar"></i> <?php echo $row->created_date; ?> </span>
                                <a href="<?php echo $this->config->item('link_article_detail').$row->slug; ?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>
                        </div>
                    </div>
                </article>
                <?php } ?>
            </div>
        </div>
    </div>
</div>