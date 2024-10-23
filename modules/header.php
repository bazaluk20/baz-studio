 <header class="screan_img">
      <svg viewbox="0 0 100 25">
        <path fill="#FFF" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
      </svg>
      <?php // top menu ?>
      <div id="top-menu">
        <div class="top-menu container">
          <span class="h1 bold logo"><a href="/">&lt;BAZ-STUDIO/&gt;</a></span>
          <span class="burger-icon" onclick="openNav()">&#9776;</span>
          <div class="dropdown">
              <button onclick="dropdown()" class="dropbtn button_green"><?php echo $langarr['curentlang'] ?></button>
              <div id="dropdownlang" class="dropdown-content">
                <a href="?lang=uk">UA</a>
                <a href="?lang=en">EN</a>
                <a href="?lang=ru">RU</a>
              </div>
          </div>
        </div>
      </div>
      <?php // end top menu ?>
      <?php // caption slider ?>
      <div class="caption row container">
        <div class="slider_wraper col-lg-6">
          <div class="tablet wraper">
            <div class="tablet-header">
              <?php // slider ?>
              
              <div class="itc-slider itc-slider-1" data-autoplay="true" data-interval="4000" data-slider="itc-slider" data-loop="true">
                <div class="itc-slider__wrapper">
                  <div class="itc-slider__items">
                    <div class="itc-slider__item">
                      <div class="tablet-p">
                          <img src="img/portfolio-2-0/phone-atlantplus.com.ua.png" alt="">
                        </div>
                    </div>
                    <div class="itc-slider__item">
                         <div class="tablet-p">
                          <img src="img/portfolio-2-0/phone-avtoshkola.dp.ua.png" alt="">
                        </div>
                    </div>
                    <div class="itc-slider__item">
                      <div class="tablet-p">
                          <img src="img/portfolio-2-0/phone-caprice.com.ua.png" alt="">
                        </div>
                    </div>
                    <div class="itc-slider__item">
                      <div class="tablet-p">
                          <img src="img/portfolio-2-0/phone-podocentr.dp.ua.png" alt="">
                        </div>
                    </div>
                    <div class="itc-slider__item">
                      <div class="tablet-p">
                          <img src="img/portfolio-2-0/phone-prospekt.net.ua.png" alt="">
                        </div>
                    </div>
                    <div class="itc-slider__item">
                      <div class="tablet-p">
                          <img src="img/portfolio-2-0/phone-prospekt.school.png" alt="">
                        </div>
                    </div>
                    <div class="itc-slider__item">
                      <div class="tablet-p">
                          <img src="img/portfolio-2-0/phone-rid-ls.eu.png" alt="">
                        </div>
                    </div>
                    <div class="itc-slider__item">
                      <div class="tablet-p">
                          <img src="img/portfolio-2-0/phone-tincraft.com.ua.png" alt="">
                        </div>
                    </div>
                    <div class="itc-slider__item">
                      <div class="tablet-p">
                          <img src="img/portfolio-2-0/phone-www.tidivi.shop.png" alt="">
                        </div>
                    </div>
                  </div>
                </div>
                <button class="itc-slider__btn itc-slider__btn_prev"></button>
                <button class="itc-slider__btn itc-slider__btn_next"></button>
              </div>
              <?php // end slider ?>
            </div>
          </div>
        </div>
        <div class="desc_wraper col-lg-6">
          <div class="desc_wr">
            <p class="h1"><?php echo $langarr['headertitle'] ?></p>
            <p class="desc"><?php echo $langarr['headerdesc1'] ?></p>
            <p class="desc"><?php echo $langarr['headerdesc2'] ?></p>
            <p class="buttons">
              <a class="button_green" onclick="openPopUp('');" href="#modal_order"><?php echo $langarr['btnsendorder'] ?></a>
            </p>
          </div>
        </div>
      </div>
      <?php // end caption slider ?>
    </header>