<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                   <div>
                        <div>
                            <a href="#">
                                <?php 
                                    $product->find($productId);
                                ?>
                                <img class="shadow-lg" src="admin/uploads/<?=htmlspecialchars($product->image)?>" alt="big-1" style="width: 100%">
                                
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div>                       
                       <form action="#" method="POST">
                            <div style="margin-left:13px">

                                <input type="hidden" name="cartId" value="<?= isset($_SESSION["customer_id"]) ? $cart->find3($_SESSION["customer_id"])->getId() : '' ?>">
                                <input type="hidden" name="productId" value="<?= $productId ?>">

                                <h3><?=htmlspecialchars($product->productName)?></h3>
                                <div>
                                    <span><?=htmlspecialchars($product->price) . " ". "VNĐ"?></span>
                                </div>           
                                <div class="fw-light">
                                    <p><?=htmlspecialchars($product->product_desc)?> </p>
                                </div>
                                <div class="row my-3">
                                    <div class="col-2">
                                        <label class="col-form-label">Số Lượng: </label>

                                    </div>
                                    <div class="col">
                                        <input class="form-control"  min="1" max="<?=htmlspecialchars($product->sl_conlai)?>" value="1" type="number" name="quantity">
                                    </div>
                                            
                                </div>

                                <div>
                                    <?php
                                        if(isset($_SESSION["customer_login"]) && $_SESSION["customer_login"] == true) {
                                            echo '<input class="btn btn-success" type="submit" name="submit" value="Thêm vào giỏ"></input>';
                                            
                                        }
                                        else {
                                            echo '<input onclick="myFunction()" class="btn btn-success" type="submit" value="Thêm vào giỏ"></input>';                        
                                        }                               
			                        ?> 
                                </div>
                            </div>                              
                        </form>    
                        
                    </div>
                </div>
            </div>
        </div>    
    </div>   
    <div>
        <div class="container">   
            <div class="row">
                <div class="col-12 mt-5">
                    <div  style="margin-top:20px;width:50%">   
                        <div>
                            <form action="" method="POST">
                                <h2>Đánh giá</h2>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea style ="resize: none; height: 200px" name ="binhluan" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2">Bình luận ngay</label>
                                        </div>
                                    </div> 
                                </div>
                                <input  class="btn btn-success" type="submit" value="Submit"></input>
                            </form>   
                        </div>   
                    </div>
                </div>
            </div>
        </div>    
    </div>  
</body>
</html>