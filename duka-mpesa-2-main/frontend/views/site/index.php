<?php


use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\bootstrap4\modal;
use frontend\models\Product;



$products = Product::find()->joinWith('productimages')->all();

// var_dump($shoe_list);
// exit();



// $markers = Location::find()->innerJoinWith('listing')->asArray()->all();
$this->title = 'Viatu Duka';
?>
<!-- welcome -->
      <section class="background-img">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-lg-4">
            <div class="jumbotron welcome-text" id="jumbo">
              <h1 class="sub-title">Built</h1>
              <h1 class="title">for flight</h1>
              <p class="lead">Introducing product name.</p>
              <p class="lead">Our lightest shoe, ever.</p>
              <button type="button" class="btn btn-dark btn-lg">Shop Now</button>
            </div>
          </div>
        </div>
      </section>
      <!-- end welcome -->
<!-- categories -->
      <section class="welcome-cat">
        <div class="row">
          <div class="col-md-1 col-sm-1"></div>
          <div class="col-md-5 col-sm-5">
            <div class="card mb-3">
              <img src="<?= Yii::$app->request->baseUrl ?>/img/welcome-men.jpg" class="card-img-top img-fluid" alt="...">
              
                <h1 class="card-title title-top">Men</h1>
              
              <div class="card-body">
                <a href="<?= Url::to(['site/men'])?>" class="btn btn-primary">Shop Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-sm-5 ">
            <div class="card mb-3">
              <img src="<?= Yii::$app->request->baseUrl ?>/img/welcome-ladies.jpg" class="card-img-top img-fluid" alt="...">
              
                <h1 class="card-title title-top">Women</h1>

              <div class="card-body">
                <a href="<?= Url::to(['site/women'])?>" class="btn btn-primary">Shop Now</a>
              </div>
            </div>
        </div>
        <div class="col-md-1 col-sm-1"></div>
      </div>
      </section>
      <!-- end categories -->
      <!-- start new releases -->
      <section class="container-fluid">
        <div class="clear-fix"/>
        <h4>New releases</h4>
        <hr>
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
          <!--Controls-->
          <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
          </div>
          <!--/.Controls-->
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">

            <!--First slide-->

            <div class="carousel-item active">
              <?php foreach ($products as $product) {?>

        <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">
                
              <!-- modal btn -->
              <a href="" data-toggle="modal" data-target="#exampleModal">
              
                <p></p>
            </a>
              <!-- end modal btn -->
                <h5 class="card-title new-ticker-bg"><span class="new-ticker">New</span></h5>
              <div class="card-body">
               <h3 class="title mb-3"><?=$product->productName  ?></h3>
               <span class="currency">KES </span><span class="num"><?=$product->basePrice  ?></span>

               <dl class="item-property">
                <h5>Description</h2>
                <p><?=$product->productDesc  ?></p>


                 <button type="button" val="" class="btn btn-primary addtocart ">Add to cart</button>


                <a href="" type="button" class="btn btn-danger">More info</a>
                <h6 class="card-title"></h6>
                <p class="lead"></p>
                <p class="text-muted">Ksh <span></span></p>
              </div>
              
            </div>
        </div>
      <?php } ?>
      </div>
      <!-- end first slide  -->
              <!-- single add to cart modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                
                <div class="col-md-4">
                  <img src="" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <h3></h3>
                  <hr>
                  <p>There are many variations of passages of Lorem Ipsum.</p>
                  <hr>
                  <span><del>Ksh 3000</del> Ksh</span>
                  <div class="clear-fix"></div>
                  <h4>Description:</h4>
                  <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                </div>
                </div>
              </div>
              <div class="modal-footer">
                <a href="checkout.html" type="button" class="btn btn-danger">Continue to Shop</a>
                <a href="" type="button" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end single add to cart modal -->
      <!--Second slide-->
      <div class="carousel-item">
      


      </div>
    </div>
    </div>
  </section>
<!-- end new releases -->
 <!-- start top kick -->
    <section class="container-fluid">
        <div class="clear-fix"/>
        <h4>Top kicks</h4>
        <hr>

        <!--Carousel Wrapper-->
        <div id="multi-item-example1" class="carousel slide carousel-multi-item" data-ride="carousel">
          <!--Controls-->
          <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example1" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example1" data-slide="next"><i class="fa fa-chevron-right"></i></a>
          </div>
          <!--/.Controls-->
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#multi-item-example1" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example1" data-slide-to="1"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">

            <!--First slide-->

            <div class="carousel-item active">

          <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">
              <img src="img/casual-wear.png" class="card-img-top img-fluid" alt="...">
              
                <h5 class="card-title new-ticker-bg"><span class="new-ticker">New</span></h5>
             
              <div class="card-body">
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="" type="button" class="btn btn-primary">More info</a>
                <h6 class="card-title">Jordan X</h6>
                <p class="text-muted">Ksh <span>1000</span></p>
              </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">
              <img src="img/summer-wear.jpg" class="card-img-top img-fluid" alt="...">
              
                <h5 class="card-title sale-ticker-bg"><span class="sale-ticker">Sale</span></h5>
             
              <div class="card-body">
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="" type="button" class="btn btn-primary">More info</a>
                <h6 class="card-title">Jordan X</h6>
                <p class="text-muted">Ksh <span>1000</span></p>
              </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">
              <img src="img/women-casual.jpg" class="card-img-top img-fluid" alt="...">
             
                 <h5 class="card-title sale-ticker-bg"><span class="sale-ticker">Sale</span></h5>
             
              <div class="card-body">
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="" type="button" class="btn btn-primary">More info</a>
                <h6 class="card-title">Jordan X</h6>
                <p class="text-muted">Ksh <span>1000</span></p>
              </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">
              <img src="img/pink-casual.jpg" class="card-img-top" alt="...">
              
                <h5 class="card-title sale-ticker-bg"><span class="sale-ticker">Sale</span></h5>
              
              <div class="card-body">
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="" type="button" class="btn btn-primary">More info</a>
                <h6 class="card-title">Jordan X</h6>
                <p class="text-muted">Ksh <span>1000</span></p>
              </div>
            </div>
        </div>
        </div>
        <!--  -->
      <!--Second slide-->
    <div class="carousel-item">
        <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">
              <img src="img/girls-wear.jpg" class="card-img-top" alt="...">
              
                <h5 class="card-title new-ticker-bg"><span class="new-ticker">New</span></h5>
          
              <div class="card-body">
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="" type="button" class="btn btn-primary">More info</a>
                <h6 class="card-title">Jordan X</h6>
                <p class="text-muted">Ksh <span>1000</span></p>
              </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">
              <img src="img/girls-pink.jpg" class="card-img-top" alt="...">
              
                <h5 class="card-title new-ticker-bg"><span class="new-ticker">New</span></h5>
           
              <div class="card-body">
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="" type="button" class="btn btn-primary">More info</a>
                <h6 class="card-title">Jordan X</h6>
                <p class="text-muted">Ksh <span>1000</span></p>
              </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">
              <img src="img/boys-wear.png" class="card-img-top" alt="...">
              
                <h5 class="card-title sale-ticker-bg"><span class="sale-ticker">Sale</span></h5>
             
              <div class="card-body">
                <a href="#" class="btn btn-primary" role="button">Add to Cart</a>
                <a href="" type="button" class="btn btn-primary">More info</a>
                <h6 class="card-title">Jordan X</h6>
                <p class="text-muted">Ksh <span>1000</span></p>
              </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-12 slider-float-left">
            <div class="card mb-2">
              <img src="img/boys-black.jpg" class="card-img-top" alt="...">
              
                <h5 class="card-title sale-ticker-bg"><span class="sale-ticker">Sale</span></h5>
              
              <div class="card-body">
                <a href="#" class="btn btn-primary" role="button">Add to Cart</a>
                <a href="" type="button" class="btn btn-primary">More info</a>
                <h6 class="card-title">Jordan X</h6>
                <p class="text-muted">Ksh <span>1000</span></p>
              </div>
            </div>
        </div>
      </div>
      </div>
    </section>
<!-- end top kick -->
<!-- news letter -->
<div class="jumbotron">
  <h1 class="display-4 text-center">Never miss a drop!</h1>
  <p class="lead text-center">Receive updates about new products and promotions.</p>
  <hr class="my-4">
  <div class="text-center">
    <a class="btn btn-primary btn-lg" href="#" role="button">JOIN OUR MAILING LIST</a>
  </div>
</div>
<!-- end new letter -->

