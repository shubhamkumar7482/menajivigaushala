<!-- this is our header section  -->
<?php include("pages/header.php") ?>
<style>
    
/* product details page style  */
.product_image {
   height: 497px;
    /* width: 668px; */
    
}
.product_image img{
    height: 100%;
    width:100%;
    object-fit: cover; 
    margin-left: 10px;  

}
.product_details{
  margin-left:30px;
}
.related_product {
    
    height: 45%;
}
.product-detail-page button{
  padding: 5px  1px;
}
</style>
<section class=" contact_us "style="padding-top:px;">
    <div class="container-fluid breadcrumb  text-center d-flex flex-column justify-content-center  align-items-center">
        <div class="container">
            <div class="d-flex flex-column justify-content-center  align-items-center">
                <h5 class="">Gir Cow Ghee</span></h5>   
                <div class=" ">
                    <p class="mb-0"><a href="index.php"class="text-decoration-none">HOME</a><span><i class="bi bi-chevron-double-right mx-2"></i></span>Gir Cow Ghee</p>
                </div>
            </div>   
        </div>
    </div>
</section>

<div class="container">

        <!-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="my-3 ">
        <ol class="d-flex"style="list-style-type:none;">
            <li class="breadcrumb-item "><a href="index.php"class="text-decoration-none mx-1">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gir Cow Ghee</li>
        </ol>
        </nav> -->
   
    <div class="row bg-light mx-auto">
        <div class="col-xl-2 col-lg-3 col-md-2 col-sm-10  mx-auto">
              <div class="related_product d-flex flex-column ">
                    <img src="product/1.jpg" alt=""class="border img-fluid">
                    <img src="product/3.jpg" alt=""class="border img-fluid">
                                  
             </div>  
        </div>
        <div class="col-xl-4 col-lg-7 col-md-9 col-sm-12  mx-auto">
            <div class="product_image ">                                     
                <img src="product/1.jpg" alt=""class="img-fluid">                         
            </div>           
        </div>       

        <div class="col-xl-6 col-lg-11 col-md-11 col-sm-1  auto-auto">
          <div class="product_details ">
                <h5 class="fw-bolder mt-1 fs-3">Gir Cow Ghee</h5>
                <p>
                <del class="fs-4 text-danger" > <del><i class="bi bi-currency-rupee"></i></del> 199</del>
                  <span style="color:#64372E;" class="fs-4 ms-2"> <i class="bi bi-currency-rupee "></i>149</span>
                 
                
                </p>
                <h5 class="fw-bolder mt-2">Product Description</h5>
                <p>Gir cow ghee which is also known as desi cow ghee has many magical health benefits to offer. 
                    It is made from milk collected from grass-fed desi Gir cows.
                    We are often surrounded by facts such as dairy products like butter; cheese and ghee add fats
                     to our body. This is however partly correct. Not all fats are bad or harmful to our body. In 
                     the case of ghee, the one which we obtain from crossbreed cows are different from the ones that
                      we obtain from desi cows.This ghee is yellowish in color, has a grainy texture, and has a rich aroma, making it an excellent choice for cooking delicious meals in Indian households.
                      Gir cow ghee is the purest ghee on the market 
                </p>
                <div  class=" mt-2"> 
                    <!-- <select name="ghee" id="ghee"class="w-25">
                        <option value="select"> <h4>Select Quantity</h4></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>                   
                    
                    </select> -->
                    <div class=" d-flex  my-2">
                            <h5>Select Quantity</h5>
                            <div class="mx-2 border px-2">-</div>
                            <input type="text" placeholder="" class=" text-center" value="1" min="1" max="10"style="width:40px;">
                            <div class="mx-1 border px-2">+</div>
                    </div>
                </div>

                <div class="product_button d-flex justify-content-between mb-3 mt-4">
                    <button class="px-2"  ID="small-phone" ><a href="cart.php"><i class="bi bi-cart-fill  mx-2"></i></i> Add to Cart</a></button>
                    <button class="px-3"  ID="small-phone" ><a href="product-details.php"><i class="bi bi-bag-fill  mx-2"></i>Buy Now</a></button>
                </div>
                <!-- <div class="product_button product-detail-page">
                  <div class="d-grid gap-2">
                    <button class="btn btn-dark" type="button"><a href="cart.php"><i class="bi bi-cart-fill  mx-2"></i></i> Add to Cart</a></button>
                    <button class="btn btn-dark" type="button"><a href="product-details.php"><i class="bi bi-bag-fill  mx-2"></i>Buy Now</a></button>
                  </div>          
                </div>   -->
          </div>   
        </div>
    </div>  
</div>
<div class="container">
  <div class=""><h3>Product Details</h3></div>
  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-10 mx-auto">
      <table class="table table-bordered border-secondary">
          <tr>
            <th>Business Type</th>
            <td>Manufacturer, Exporter, Supplier</td>
          </tr>
          <tr>
            <th>Application</th>
            <td>	Cooking, Worship</td>
          </tr>
          <tr>
            <th>Shelf Life</th>
            <td>1year</td>
          </tr>
          <tr>
            <th>color</th>
            <td>Yellow</td>
          </tr>
          <tr>
            <th>Feature</th>
            <td>Healthy, Nutritious</td>
          </tr>
          <tr>
            <th>Form</th>
            <td>Liquid</td>
          </tr>
          <tr>
            <th>Packaging Type</th>
            <td>Plastic Jar</td>
          </tr>
      </table>
    </div>
  </div>
</div>



<!-- collected new item  -->

<div class="container-fluid item-slider">
    <section class="header-pera"styel="height:95px">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12 peragraph-text">
            <h1 class="second text-center"><span>Collected New</span></h1>
            <h1 class="third text-center"><span></span></h1>
          </div>
        </div>
      </div>
    </section>

    <ul class="more-item m-0 p-0">
      <li class="mx-1  "><a href="">
      <div class="popular border px-2 py-2">
            <div class="heart_icon">
              <i class="bi bi-heart-fill" title="Add To Wishlist"></i>
            </div>
             <div class="offers mb-0">
              <h6 class="mb-0">cooming soon</h6>
            </div>
            <div class="product_img">
             <a href=""> <img src="product/1.jpg" alt=""class="img-fluid"></a>
            </div>          

            <h5 class="fw-bolder mt-4 text-center">Favorite Milk</h5>
            <p class="mb-1 text-center"> <del style="margin-right:5px;"> <del><i class="bi bi-currency-rupee"></i></del> 199</del>
              <span style="color:#64372E;"><i class="bi bi-currency-rupee"></i>149</span>
            </p>
            <div class="product_button d-flex justify-content-around">
              <button class="px-2 "  ID="small-phone"><a href="cart.php" class="text-white"><i class="bi bi-cart-fill  mx-2"></i></i> Add to Cart</a></button>
              <button class="px-3 "  ID="small-phone"><a href="product-details.php" class="text-white"><i class="bi bi-bag-fill  mx-2"></i>Buy Now</a></button>
            </div>
          </div>
      </a></li>


      <li class="mx-1  "><a href="">
      <div class="popular border px-2 py-2">
            <div class="heart_icon">
              <i class="bi bi-heart-fill" title="Add To Wishlist"></i>
            </div>
             <div class="offers mb-0">
              <h6 class="mb-0">cooming soon</h6>
            </div>
            <div class="product_img">
             <a href=""> <img src="product/1.jpg" alt=""class="img-fluid"></a>
            </div>          

            <h5 class="fw-bolder mt-4 text-center">Favorite Milk</h5>
            <p class="mb-1 text-center"> <del style="margin-right:5px;"> <del><i class="bi bi-currency-rupee"></i></del> 199</del>
              <span style="color:#64372E;"><i class="bi bi-currency-rupee"></i>149</span>
            </p>
            <div class="product_button d-flex justify-content-around">
              <button class="px-2 " ID="small-phone"
 ID="small-phone" ><a href="cart.php" class="text-white"><i class="bi bi-cart-fill  mx-2"></i></i> Add to Cart</a></button>
              <button class="px-3 " ID="small-phone"
 ID="small-phone" ><a href="product-details.php" class="text-white"><i class="bi bi-bag-fill  mx-2"></i>Buy Now</a></button>
            </div>
          </div>
      </a></li>

      <li class="mx-1  "><a href="">
      <div class="popular border px-2 py-2">
            <div class="heart_icon">
              <i class="bi bi-heart-fill" title="Add To Wishlist"></i>
            </div>
             <div class="offers mb-0">
              <h6 class="mb-0">cooming soon</h6>
            </div>
            <div class="product_img">
             <a href=""> <img src="product/1.jpg" alt=""class="img-fluid"></a>
            </div>          

            <h5 class="fw-bolder mt-4 text-center">Favorite Milk</h5>
            <p class="mb-1 text-center"> <del style="margin-right:5px;"> <del><i class="bi bi-currency-rupee"></i></del> 199</del>
              <span style="color:#64372E;"><i class="bi bi-currency-rupee"></i>149</span>
            </p>
            <div class="product_button d-flex justify-content-around">
              <button class="px-2 " ID="small-phone"
 ID="small-phone" ><a href="cart.php" class="text-white"><i class="bi bi-cart-fill  mx-2"></i></i> Add to Cart</a></button>
              <button class="px-3 " ID="small-phone"
 ID="small-phone" ><a href="product-details.php" class="text-white"><i class="bi bi-bag-fill  mx-2"></i>Buy Now</a></button>
            </div>
          </div>
      </a></li>



      <li class="mx-1  "><a href="">
      <div class="popular border px-2 py-2">
            <div class="heart_icon">
              <i class="bi bi-heart-fill" title="Add To Wishlist"></i>
            </div>
             <div class="offers mb-0">
              <h6 class="mb-0">cooming soon</h6>
            </div>
            <div class="product_img">
             <a href=""> <img src="product/1.jpg" alt=""class="img-fluid"></a>
            </div>          

            <h5 class="fw-bolder mt-4 text-center">Favorite Milk</h5>
            <p class="mb-1 text-center"> <del style="margin-right:5px;"> <del><i class="bi bi-currency-rupee"></i></del> 199</del>
              <span style="color:#64372E;"><i class="bi bi-currency-rupee"></i>149</span>
            </p>
            <div class="product_button d-flex justify-content-around">
              <button class="px-2 " ID="small-phone"
 ID="small-phone" ><a href="cart.php" class="text-white"><i class="bi bi-cart-fill  mx-2"></i></i> Add to Cart</a></button>
              <button class="px-3 " ID="small-phone"
 ID="small-phone" ><a href="product-details.php" class="text-white"><i class="bi bi-bag-fill  mx-2"></i>Buy Now</a></button>
            </div>
          </div>
      </a></li>










      <li class="mx-1  "><a href="">
      <div class="popular border px-2 py-2">
            <div class="heart_icon">
              <i class="bi bi-heart-fill" title="Add To Wishlist"></i>
            </div>
             <div class="offers mb-0">
              <h6 class="mb-0">cooming soon</h6>
            </div>
            <div class="product_img">
             <a href=""> <img src="product/1.jpg" alt=""class="img-fluid"></a>
            </div>          

            <h5 class="fw-bolder mt-4 text-center">Favorite Milk</h5>
            <p class="mb-1 text-center"> <del style="margin-right:5px;"> <del><i class="bi bi-currency-rupee"></i></del> 199</del>
              <span style="color:#64372E;"><i class="bi bi-currency-rupee"></i>149</span>
            </p>
            <div class="product_button d-flex justify-content-around">
              <button class="px-2 " ID="small-phone"
 ID="small-phone" ><a href="cart.php" class="text-white"><i class="bi bi-cart-fill  mx-2"></i></i> Add to Cart</a></button>
              <button class="px-3 " ID="small-phone"
 ID="small-phone" ><a href="product-details.php" class="text-white"><i class="bi bi-bag-fill  mx-2"></i>Buy Now</a></button>
            </div>
          </div>
      </a></li>


      <li class="mx-1  "><a href="">
      <div class="popular border px-2 py-2">
            <div class="heart_icon">
              <i class="bi bi-heart-fill" title="Add To Wishlist"></i>
            </div>
             <div class="offers mb-0">
              <h6 class="mb-0">cooming soon</h6>
            </div>
            <div class="product_img">
             <a href=""> <img src="product/1.jpg" alt=""class="img-fluid"></a>
            </div>          

            <h5 class="fw-bolder mt-4 text-center">Favorite Milk</h5>
            <p class="mb-1 text-center"> <del style="margin-right:5px;"> <del><i class="bi bi-currency-rupee"></i></del> 199</del>
              <span style="color:#64372E;"><i class="bi bi-currency-rupee"></i>149</span>
            </p>
            <div class="product_button d-flex justify-content-around">
              <button class="px-2 " ID="small-phone"
 ID="small-phone" ><a href="cart.php" class="text-white"><i class="bi bi-cart-fill  mx-2"></i></i> Add to Cart</a></button>
              <button class="px-3 " ID="small-phone"
 ID="small-phone" ><a href="product-details.php" class="text-white"><i class="bi bi-bag-fill  mx-2"></i>Buy Now</a></button>
            </div>
          </div>
      </a></li>
      
    </ul>
  </div>


  <!-- subscribe section  -->
  

 
  <section class=" subscribe d-none d-lg-block"style="padding-top:54px;">
    <div class="container-fluid breadcrumb  text-center d-flex flex-column justify-content-center  align-items-center">
        <div class="container-fluid text-center">
            <div class="row">
              <div class="col-md-5 col-12 col-lg-5">
              <h5 class="text-center">Get spacial Discount for Subscriber</span></h5>  
              </div>
              <div class="col-12 col-md-7  col-lg-7">
              <div class="d-flex flex-column justify-content-center  align-items-center">
                
                <form class="d-flex w-50 position-relative" role="" >
                  <input class="form-control me-2 subscribe-input border" type="email" placeholder="Entet Your Email Address" aria-label="">
                  <button class="btn btn-dark subscribe-button position-absolute " style="background:#64372E;"type="submit">Subscribe</button>
                </form>
            </div> 
              </div>
            </div>  
        </div>
    </div>
</section>



  <!-- pravicy and policy  -->
  <section class="policy pt-3">
    <div class="container-fluid ">
      <div class="row mx-auto">
        <div class="col-12 col-md-3">
            <div class="d-flex flex-column justify-content-center align-items-center">
              <div class="privacy-policy">
                <img src="img/policy-1.png" alt=""class="border p-3 rounded-circle shadow">
              </div>
              <h4 class="mt-2">Free Home Delivery</h4 class="mt-2">
            </div>
        </div>

        <div class="col-12 col-md-3">
            <div class="d-flex flex-column justify-content-center align-items-center">
              <div class="privacy-policy">
                <img src="img/policy-2.png" alt=""class="border p-3 rounded-circle shadow">
              </div>
              <h4 class="mt-2">Instant Return Policy</h4 class="mt-2">
            </div>
        </div>

        <div class="col-12 col-md-3">
        <div class="d-flex flex-column justify-content-center align-items-center">
              <div class="privacy-policy">
                <img src="img/policy-3.png" alt=""class="border p-3 rounded-circle shadow">
              </div>
              <h4 class="mt-2">Quick Support System</h4 class="mt-2">
            </div>
        </div>

        <div class="col-12 col-md-3">
        <div class="d-flex flex-column justify-content-center align-items-center">
              <div class="privacy-policy">
                <img src="img/policy-4.png" alt=""class="border p-3 rounded-circle shadow">
              </div>
              <h4 class="mt-2">Secure Payment Way</h4 class="mt-2">
            </div>
        </div>
      </div>
    </div>
  </section>






  <!-- this is our footer section  -->
  <?php include("pages/footer.php") ?>
    <!-- jquery cdn file  -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>    
    <!-- slick slider js -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script>
      $('.more-item').slick({
          dots: true,
          // speed: 300,
          slidesToShow: 4,
          autoplay:true,
          slidesToScroll: 1,
          autoplaySpeed: 1000,
          
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                autoplay:true,
                slidesToScroll: 1,
                autoplaySpeed: 1000,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                autoplay:true,
                slidesToScroll: 1,
                autoplaySpeed: 1000,
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                autoplay:true,
                slidesToScroll: 1,
                autoplaySpeed: 1000,
              }
            }
          
          ]
        });
    </script>
