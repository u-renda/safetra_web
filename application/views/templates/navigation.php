<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
    <nav>
        <ul class="nav nav-pills" id="mainNav">
            <li class="nav-parent">
                <a href="<?php echo base_url(); ?>">
                    Beranda
                </a>
            </li>
            <li class="dropdown nav-parent">
                <a class="dropdown-toggle" href="#program">
                    Program Pelatihan
                </a>
                <ul class="dropdown-menu">
                    <?php
                    foreach ($program_nav as $key => $val)
                    {
                        echo '<li><a href="'.$this->config->item('link_program').'/'.$val->slug.'">'.ucwords($val->name).'</a></li>';
                    }
                    ?>
                </ul>
            </li>
            <li class="dropdown nav-parent">
                <a class="dropdown-toggle" href="#media">
                    Media
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $this->config->item('link_article'); ?>">Artikel</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>