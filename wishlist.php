<?php include("pages/header.php") ?>

<section class=" about-us "style="padding-top:px;">
    <div class="container-fluid breadcrumb  text-center d-flex flex-column justify-content-center  align-items-center">
        <div class="container">
            <div class="d-flex flex-column justify-content-center  align-items-center">
                <h5 class="">WISHLIST</span></h5>   
                <div class=" ">
                    <p><a href="index.php"class="text-decoration-none">HOME</a><span><i class="bi bi-chevron-double-right mx-2"></i></span>WISHLIST</p>
                </div>
            </div>   
        </div>
    </div>
</section>
<section class="add-to-cart"style="padding-top:50px;">
    <div class="container ">
        <div class="row">
            <div class="colmd-12">                
                <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" style="width:50px;">S. N.</th>
                                <th scope="col" style="width:50px;">Image</th>
                                <th scope="col" style="width:50px;">product</th>
                                <th scope="col" style="width:50px;">Price</th>
                                <!-- <th scope="col" style="width:50px;">Quantity</th> -->
                               
                                <th scope="col" style="width:50px;">Edit</th>
                                <th scope="col" style="width:50px;"> </th>
                            </tr>
                        </thead>
                        <tbody  class="pt-4" >
                            <tr>
                                <th scope="row">1</th>
                                <td class="" style="width:50px;">
                                    <!-- <img src="img/01.jpg" alt=""> -->
                                    <div class="product d-flex align-items-center">
                                            <div>
                                                <img src="img/01.jpg" alt=""class="img-fluid "style="width:70px;">
                                            </div>
                                            <!-- <div>
                                                <p>Product Text Here</p>
                                            </div> -->
                                </div>
                                </td>
                                <td><p>Product Text Here</p></td>
                                <td>750</td>
                               
                                
                                <td>
                                    <i class="bi bi-trash"></i>
                                </td>

                                <td class="add">
                                    <a href="" class="addtocart">
                                        <button>add to cart</button>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                </table>
                
            </div>
        </div>
    </div>
</section>
<!-- this is footer link  -->
<?php include("pages/footer.php") ?>
