<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 191px;
}
.u-header .u-image-1 {
  width: 382px;
  filter: brightness(0.85);
  height: 155px;
  margin: 0 363px 0 auto;
}
.u-header .u-image-2 {
  width: 61px;
  height: 62px;
  margin: -129px auto 0 540px;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-text-1 {
  font-size: 1.5rem;
  margin: 9px 488px 0;
}
.u-header .u-menu-1 {
  margin: 21px auto 0;
}
.u-block-9512-37 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
.u-block-9512-38 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    width: 382px;
    height: 155px;
    margin-right: 363px;
  }
  .u-header .u-image-2 {
    width: 60px;
    margin-top: -129px;
    margin-left: auto;
  }
  .u-header .u-text-1 {
    width: 164px;
    margin-left: auto;
    margin-right: auto;
  }
}
@media (max-width: 991px) {
  .u-header .u-image-1 {
    margin-right: 338px;
    margin-left: 379px;
  }
  .u-header .u-image-2 {
    margin-right: 329px;
  }
  .u-header .u-text-1 {
    margin-right: 485px;
    margin-left: 491px;
  }
  .u-header .u-menu-1 {
    margin-left: 130px;
  }
}
@media (max-width: 767px) {
  .u-header .u-image-1 {
    margin-right: 158px;
  }
  .u-header .u-image-2 {
    margin-right: 239px;
  }
  .u-header .u-text-1 {
    margin-right: 305px;
    margin-left: 671px;
  }
  .u-header .u-menu-1 {
    margin-left: 220px;
  }
}
@media (max-width: 575px) {
  .u-header .u-sheet-1 {
    min-height: 174px;
  }
  .u-header .u-image-1 {
    width: 340px;
    height: 138px;
    margin-right: 0;
    margin-left: 400px;
  }
  .u-header .u-image-2 {
    margin-top: -112px;
    margin-right: 139px;
  }
  .u-header .u-text-1 {
    margin-right: 105px;
    margin-left: 871px;
  }
  .u-header .u-menu-1 {
    margin-left: 320px;
  }
}</style>
