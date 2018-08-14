
<link href="<?=base_url()?>css/showcat.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eCommerce Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

  </head>

  <body>
    <section id="" class="">
    <div class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                    <br><br><br><br><br>
   <?php 
                          if ($showcats) {
//$showcats[0]->cat_name

                           ?>
          <div class=" col-md-6">
            
          <center>
        <a href="<?=base_url()?>img/cat/5.jpg" class="gallery-popup"><img src="<?=base_url()?>img/cat/5.jpg" /></a>
        </center>
         </div>

       
          <div class="details col-md-6">
            <h3 class="product-title"><!-- <?php echo $showcats[0]->cat_name ?> --></h3>
            <div class="rating">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <span class="review-no">41 reviews</span>
            </div>
            <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
            <h4 class="price">current price: <span>$180</span></h4>
            <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
            <h5 class="sizes">sizes:
              <span class="size" data-toggle="tooltip" title="small">s</span>
              <span class="size" data-toggle="tooltip" title="medium">m</span>
              <span class="size" data-toggle="tooltip" title="large">l</span>
              <span class="size" data-toggle="tooltip" title="xtra large">xl</span>
            </h5>
            <h5 class="colors">colors:
              <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
              <span class="color green"></span>
              <span class="color blue"></span>
            </h5>
            <div class="action">
              <button class="add-to-cart btn btn-default" type="button">จับคู่</button>
              <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
            </div>
          </div>
        </div>
      
   <?php 
                            
                          }
                           ?>
                   
      
                   

               </div>
              <div class="margin-bottom-lg">

                   <ul class="nav nav-tabs">
                      <li class="active"><a href="#detail" data-toggle="tab" aria-expanded="true"><h4>รายละเอียด</h4></a></li>
                      <li class=""><a href="#comment" data-toggle="tab" aria-expanded="false"><h4>รีวิว</h4></a></li>
                       
                    </ul>
                   <div id="myTabContent" class="tab-content col-xs-12 padding-v-xs">
                      <div class="tab-pane fade active in" id="detail">
                          <div class="col-xs-12">
  
     
                      <div>ซื้อ1 แถม1!!! Vitakraft Dog Stick ขนมดีๆ มีประโยชน์เหมาะให้เสริมจากอาหารหลัก ระหว่างวัน หรือให้เป็นรางวัล</div><div><br></div><div><ul><li>สูตรแซลมอนรมควัน หอม อร่อย&nbsp;<br></li><li>ขนมสุนัข แบบแท่งนุ่ม มีปริมาณเนื้อสัตว์มากกว่า 75%<br></li><li>ได้โปรตีนสูง และเสริมวิตามิน<br></li><li>Sugar Free ไม่เติมแต่งน้ำตาล<br></li><li>ไม่ใส่สารแต่งสี แต่งกลิ่น<br></li></ul></div><div>เหมาะสำหรับสุนัข 3เดือนขึ้นไป ให้ 1-2ชิ้น ต่อวัน</div><div><br></div><div><u><b>ส่วนประกอบ</b></u></div><div>Trout, Pike, Artic Char, Salmon (78.9%, of which 10.5% Salmin), Glycerine, Vegetable Fibre, Milk Protein Powder, Minerals, Rice</div><div>ผลพลอยได้จากปลาแซลมอน, แป้งข้าว, แผ่นมันฝรั่ง, ไซเดียมไดฟอสเฟส, สาหร่ายทะเล, เกลือ, วิตามินเอ, วิตามินดี3</div><div><br></div><div><div><b><u>คุณค่าทางสารอาหาร</u></b></div><div>23%&nbsp; ความชื้น</div><div>22%&nbsp; โปรตีน</div><div>20%&nbsp; ไขมัน</div><div>4%&nbsp; &nbsp; กากใย</div></div><div><br></div><div>15g x2<br><br> </div>
    
    
    
    
                              </div>
                      </div>
                      <div class="tab-pane fade" id="comment">
                          
                          <div id="CphBody_PnNoReview">
  
                          ยังไม่มีคนแสดงความเห็นเกี่ยวกับสินค้านี้เลย ถ้าเจ้านายรู้ข้อมูลเกี่ยวกับสินค้านี้  <a href="#" data-toggle="modal" data-target="#addReview" class="add-review text-danger">เขียนรีวิวสินค้าเป็นคนแรกมั้ย?</a>
                              
                            </div>
                         

                           
                                         
                                       
                      </div>
                     
                    </div>
               </div>
              
</div>
        <form id="formReview" name="formReview" class="form-horizontal" novalidate="novalidate">
           <!--modal add comment-->
<div id="addReview" class="modal fade">
    <!--ยังไม่ได้ login-->
    <div id="CphBody_PnLoginReview" class="modal-dialog">
  
        <!--ยังไม่ได้ login-->
          <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">เขียนรีวิว<span class="hidden-xs">สินค้า</span></h4>
        </div>
           <div class="modal-body margin-bottom-xs">
                                      <div class="col-sm-4"><img src="/images/fuzzy-comment.png" srcset="/images/fuzzy-comment@2x.png 2x" class="img-responsive"></div>  
               <div class="col-sm-8">
                   <p>
                   ความคิดเห็นของคุณนั้นสำคัญ! คุณจะช่วยให้เพื่อนๆ ที่รักสัตว์ทุกคน ได้เลือกผลิตภัณฑ์ที่ดีและเหมาะสม นอกจากนั้น เทลลี่ยังอยากขอบคุณด้วยการมอบแต้มพิเศษให้</p><br>
                   <ul>
                       <li>ความคิดเห็นทั่วไป <b>ได้รับ 10 แต้ม</b><br></li>
                       <li>ความคิดเห็นพร้อมรูปภาพ <b>ได้รับ 30 แต้ม</b></li>
                   </ul><br>
                   <p>แต้มเหล่านี้สามารถใช้แลกแทนเงินสดเพื่อซื้อสินค้าได้ทันที</p>
                   <div class="text-center"><a id="CphBody_LnkLogin" class="btn btn-primary" role="button" href="/login.html?ref=%2fproduct.html%3fpid%3d4579%26comment%3d1">คลิก Login ที่นี่</a></div>

               </div>
                
             
               </div>
              </div>
    
          </div>
  
    </div>
    
    </form>
</section>


