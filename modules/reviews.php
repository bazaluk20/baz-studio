<?php // review
$reviews = array(
        'str' => 'img/reviews_logo/streamlight_logo.png',
        'rid' => 'img/reviews_logo/rid_logo.png',
        'auto' => 'img/reviews_logo/auto_logo.png',
        'tin' => 'img/reviews_logo/tin_logo.svg',
        'podo' => 'img/reviews_logo/podo_logo.png',
    );
?>
    <a name="reviews"></a>
    <div class="reviews">
      <p class="h1 text-center"><?php echo $langarr['reviewstitle'] ?></p>
      <?php // slider ?>
      
       
      
      
       <div class="itc-slider itc-slider-3 container" data-autoplay="true" data-interval="5000" data-slider="itc-slider" data-loop="true">
    <div class="itc-slider__wrapper">
      <div class="itc-slider__items">
          
         <?php foreach ($reviews as $key => $reviewimg) { ?>
            <div class="itc-slider__item">
              <div class="r_slide">
                <p class="logo_name">
                  <img src="<?php echo $reviewimg; ?>" alt="<?php echo $langarr['reviewcompany'.$key] ?>">
                  <?php echo $langarr['reviewname'.$key] ?> <span><?php echo $langarr['reviewcompany'.$key] ?></span>
                </p>
                <div class="desc">
                  <p><?php echo $langarr['reviewtext'.$key] ?></p>
                </div>
              </div>
            </div>
            <?php } ?>
        
      </div>
    </div>
    <ol class="itc-slider__indicators">
        <?php for ($i = 0; $i < count($reviews); $i++) { ?>
      <li class="itc-slider__indicator" data-slide-to="<?php echo $i;?>"></li>
      <?php } ?>
    </ol>
  </div>
      
      
      
      
      
    </div>
    <div class="f_order container">
      <p class="text-center"><a href="#review" onclick="openPopUp('review');" class="button_blue"><?php echo $langarr['btnreview'] ?></a></p>
    </div>