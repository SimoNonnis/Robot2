<?php
  $title       = 'Recent Work | Robot2';
  $description = 'I like to share a list of my recent projects I’ve worked on and that I am proud of. Each of these websites represents an important step of my programming philosophy.';
?>

<?php include("partials/head.php"); ?>

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css'>

  <?php include("partials/navigation.php"); ?>

    <section role="main" class="work-section u-cf">
      <div class="big-img">
        <img alt="different-devices" src="dist/images/work.png" />
      </div>
      <h2 class="[ u-textCenter ]">Recent Work</h2>
      <p class="intro-recent-pro">
        In this section I like to share a list of my recent projects that I am proud of.
        Each of these websites represents an important step of my programming philosophy.
        My part in every project consisted of interacting with graphic designers and project managers designing
        information architecture, UX, functionalities and in parallel setting up infrastructures, building from scratch these responsive websites.
      </p>

      <div>
        <a href="#" data-gallery="VendorDetails">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/vendor-details-thumb.png">
              <h3>Vendor Details</h3>
            </div>
            <div class="card__bottom">
              <div>React</div>
              <div>2018</div>
            </div>
          </div>
        </a>

        <a href="#" data-gallery="ReactComponents">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/react-components-thumb.png">
              <h3>React Components</h3>
            </div>
            <div class="card__bottom">
              <div>React</div>
              <div>2018</div>
            </div>
          </div>
        </a>

        <a href="#" data-gallery="FastTrack">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/fast-track-thumb.jpg">
              <h3>Fast Track</h3>
            </div>
            <div class="card__bottom">
              <div>JQuery</div>
              <div>2017</div>
            </div>
          </div>
        </a>

        <a href="#" data-gallery="PropertyDetails">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/property-details-thumb.png">
              <h3>Property Details</h3>
            </div>
            <div class="card__bottom">
              <div>React</div>
              <div>2017</div>
            </div>
          </div>
        </a>

        <a href="#" data-gallery="PackageSelection">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/package-selection-thumb.png">
              <h3>Package Selection</h3>
            </div>
            <div class="card__bottom">
              <div>JQuery</div>
              <div>2017</div>
            </div>
          </div>
        </a>

        <a href="#" data-gallery="SellYourHouse">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/how-to-sell-your-house-online-thumb.jpg">
              <h3>Sell Your House</h3>
            </div>
            <div class="card__bottom">
              <div>Css3</div>
              <div>2017</div>
            </div>
          </div>
        </a>

        <a href="#" data-gallery="SalesPredictor">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/sales-predictor-thumb.png">
              <h3>Sales Predictor</h3>
            </div>
            <div class="card__bottom">
              <div>JS</div>
              <div>2017</div>
            </div>
          </div>
        </a>

        <a href="#" data-gallery="ValuationExpert">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/local-valuation-expert-thumb.png">
              <h3>Valuation Expert</h3>
            </div>
            <div class="card__bottom">
              <div>Css3</div>
              <div>2016</div>
            </div>
          </div>
        </a>

        <a href="#" data-gallery="ChefsClub">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/chefs-club-thumb.jpg">
              <h3>Chefs Club</h3>
            </div>
            <div class="card__bottom">
              <div>Wordpress</div>
              <div>2016</div>
            </div>
          </div>
        </a>

        <a href="#" data-gallery="ArtistResidence">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/artist-residence-thumb.jpg">
              <h3>Artist Residence</h3>
            </div>
            <div class="card__bottom">
              <div>Wordpress</div>
              <div>2015</div>
            </div>
          </div>
        </a>

        <a href="#" data-gallery="BlueFin">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/blue-fin-thumb.jpg">
              <h3>Blue Fin</h3>
            </div>
            <div class="card__bottom">
              <div>Wordpress</div>
              <div>2015</div>
            </div>
          </div>
        </a>

        <a href="#" data-gallery="GliffaesHotel">
          <div class="card" >
            <div class="card__top">
              <img class="card__img" src="dist/images/gliffaes-hotel-thumb.jpg">
              <h3>Gliffaes Hotel</h3>
            </div>
            <div class="card__bottom">
              <div>Wordpress</div>
              <div>2015</div>
            </div>
          </div>
        </a>

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

          <!-- Background of PhotoSwipe -->
          <div class="pswp__bg"></div>

          <!-- Slides wrapper with overflow:hidden. -->
          <div class="pswp__scroll-wrap">
            <div class="pswp__container">
              <!-- don't modify these 3 pswp__item elements, data is added later on -->
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
              <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">
              <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
              </div>


              <!-- Navigation -->
              <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
              </button>

              <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
              </button>

              <div class="pswp__caption">
                  <div class="pswp__caption__center"></div>
              </div>
            </div>
          </div>
        </div>

      </div>

    <section class="section-ctaction edge-css">
      <?php include("partials/get-in-touch.php"); ?>
    </section>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js'></script>

<?php include("partials/footer.php"); ?>
