    <head>

    <link rel="stylesheet" href="<?php echo base_url()?>assets\core-front\css\main.css">
    </head>
    <body style="background-color:#272727">    
        <header id="header"  class="fixed-top">
            <div class="container d-flex align-items-center">
                <h5 class="logo mr-auto">
                    <a href="<?php echo base_url();?>" class="scrollto">
                        <img src="<?php echo base_url()?>assets/core-images/<?php echo $setting[0]->setting_logo;?>"> <?php echo $setting[0]->setting_appname;?>
                    </a>
                </h5>
            
                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
                        <?php foreach($news_category as $nc){ ?>
                        <li><a href="<?php echo site_url('page/information/'.$nc->news_category_id.'/1')?>"><?php echo $nc->news_category_name;?></a></li>
                        <?php }?>
                        <a href="https://www.youtube.com/channel/UCJrkNaCzWfKZCx5oFDbQFTw">
                        <li class="btn-portal" data-aos="fade-left">Channel
                        </li>
                        </a>
                    </ul>
                </nav><!-- .nav-menu -->
            </div>
        </header><!-- End Header -->