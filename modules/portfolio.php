 <?php
$dev = $langarr['projectstatusdev'];
$support = $langarr['projectstatussupport'];
$devsupport = $langarr['projectstatusdevsupport'];
 $projects = array(
    array(
         'photo' => 'img/portfolio-2-0/atlantplus.com.ua.png',
         'company' => $langarr['projectatl'],
         'worked' => $dev,
         'link' => 'https://atlantplus.com.ua/',
         ),
    array(
         'photo' => 'img/portfolio-2-0/avtoshkola.dp.ua.png',
         'company' => $langarr['projectautoschool'],
         'worked' => $devsupport,
         'link' => 'https://avtoshkola.dp.ua/',
         ),
    array(
         'photo' => 'img/portfolio-2-0/caprice.com.ua.png',
         'company' => $langarr['projectcaprice'],
         'worked' => $devsupport,
         'link' => 'https://caprice.com.ua/',
         ),
    array(
         'photo' => 'img/portfolio-2-0/podocentr.dp.ua.png',
         'company' => $langarr['projectpodo'],
         'worked' => $devsupport,
         'link' => 'https://podocentr.dp.ua/',
         ),
    array(
         'photo' => 'img/portfolio-2-0/prospekt.net.ua.png',
         'company' => $langarr['projectautoschool'],
         'worked' => $devsupport,
         'link' => 'https://prospekt.net.ua/',
         ),
    array(
         'photo' => 'img/portfolio-2-0/prospekt.school.png',
         'company' => $langarr['projectautoschool'],
         'worked' => $devsupport,
         'link' => 'https://prospekt.school/',
         ),
    array(
         'photo' => 'img/portfolio-2-0/rid-ls.eu.png',
         'company' => $langarr['projectrid'],
         'worked' => $dev,
         'link' => 'https://rid-ls.eu/',
         ),
    array(
         'photo' => 'img/portfolio-2-0/sad-good.top.png',
         'company' => $langarr['projectsad'],
         'worked' => $devsupport,
         'link' => 'https://sad-good.top/',
         ),
    array(
         'photo' => 'img/portfolio-2-0/tidivi.shop.png',
         'company' => $langarr['projecttidivi'],
         'worked' => $support,
         'link' => 'https://www.tidivi.shop/',
         ),
    array(
         'photo' => 'img/portfolio-2-0/tincraft.com.ua.png',
         'company' => $langarr['projecttin'],
         'worked' => $devsupport,
         'link' => 'https://tincraft.com.ua/',
         ),
     );
 ?>
    <a name="projects"></a>
    <div class="portfolio">
      <div class="portfolio_bg"></div>
      <div class="slider_port container">
        <div class="caption">
          <p class="h1 text-center"><?php echo $langarr['projecttitle'] ?></p>
          <p class="desc"><?php echo $langarr['projectdesc'] ?></p>
        </div>
        <?php // slider ?>
        
        <div class="itc-slider itc-slider-2" data-slider="itc-slider" data-loop="true">
    <div class="itc-slider__wrapper">
      <div class="itc-slider__items">
          
        <?php foreach($projects as $project) { ?>
        <div class="itc-slider__item">
          <div class="p_slide">
                <img src="<?php echo $project['photo']; ?>" alt="<?php echo $project['company']; ?>">
                <div class="link">
                  <a href="<?php echo $project['link']; ?>" rel="nofollow, noindex" target="_blank" class="button_green"><?php echo $project['company']; ?></a>
                  <span><?php echo $project['worked']; ?></span>
                </div>
              </div>
        </div>
        <?php } ?>
        
      </div>
    </div>
    <button class="itc-slider__btn itc-slider__btn_prev"></button>
    <button class="itc-slider__btn itc-slider__btn_next"></button>
  </div>
        
        <?php // end slider ?>
      </div>
    </div>
