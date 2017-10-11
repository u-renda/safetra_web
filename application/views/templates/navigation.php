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
                    Program
                </a>
                <ul class="dropdown-menu">
                    <?php
                    foreach ($program_nav as $key => $val)
                    {
                        if (count($val->program_sub) != 0)
                        {
                            foreach ($val->program_sub as $row)
                            {
                                echo '<li class="dropdown-submenu"><a href="#">'.ucwords($val->name).'</a>';
                                echo '<ul class="dropdown-menu">';
                                echo '<li><a href="'.$this->config->item('link_program').'/'.$row->slug.'">'.$row->name.'</a></li>';
                                echo '</ul></li>';
                            }
                        }
                        else
                        {
                            echo '<li><a href="'.$this->config->item('link_program').'/'.$val->slug.'">'.ucwords($val->name).'</a></li>';
                        }
                    }
                    ?>
                </ul>
            </li>
            <li class="dropdown nav-parent">
                <a class="dropdown-toggle" href="#program">
                    Media
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo $this->config->item('link_article'); ?>">Artikel</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>