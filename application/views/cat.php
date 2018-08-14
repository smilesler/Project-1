  


  <div class="card">
                          <div class="header">
                                  <h4 class="title">My Cat  
                                    <btn class="btn btn-sm btn-danger btn-icon pull-right" onclick="addCats();"><i class="fa fa-plus" ></i></btn></h4>
                          </div>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                                    
                                     <?php 
                          if ($cats) {
                            foreach ($cats as $cat ) {

                           ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                <img src="<?=base_url()?>img/cat/6.jpg" alt="Circle Image" style="width: 50px; height: 50px;" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <?php echo $cat->cat_name ?>
                                                <br />
                                                <?php 
                                                  if ($cat->cat_status=='ว่าง') {
                                                 ?>
                                                  <span class="text-success"><small> <?php echo $cat->cat_status?></small></span>
                                              <?php }elseif($cat->cat_status=='ไม่ว่าง') {
                                               ?>
                                                  <span class="text-info"><small> <?php echo $cat->cat_status?></small></span>
                                                  <?php }else{ ?>
                                                 <span class="text-danger"><small> <?php echo $cat->cat_status?></small></span>


                                                  <?php } ?>
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon" onclick="editcats(<?=$cat->cat_id?>);"><i class="fa fa-edit"></i></btn>
                                                <a class="btn btn-sm btn-danger btn-icon " href="<?=base_url()?>home/profile/delete/<?php echo $cat->cat_id?>" onclick="return confirm('คุณต้องการลบข้อมูลแมวของคุณหรือไม่?');"><i class="fa fa-trash" ></i></a>

                                            </div>
                                        </div>
                                    </li>

      <?php 
           }}
        ?>

                              
                                </ul>
                    </div>        
                </div>
    <script>
                function addCats(){
            $('#addCats').slideToggle('slow');
        }
    </script>
       
        <div id="addCats" class="col-lg-12 card" style="display:none;">
           
                       
                            <div class="header">
                                <h4 class="title">เพิ่มแมว</h4>
                            </div>
                            <div class="content">
                        <form method="post" action="<?= base_url('home/addcat') ?>" enctype="multipart/form-data">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                         <label>ชื่อแมว</label>
                                         <input type="text" class="form-control border-input bank-form" placeholder="Username" name="cat_name" required>
                                      </div>
                                  </div>
                             <div class="col-md-6">
                                      <div class="form-group">
                                <label>วันเกิด</label>
                                <br>
                                   <input type="text" class="form-control border-input bank-form" placeholder="birthdate" name="cat_birthdate" required>
                              </div>
                              </div>
                            </div>

                              <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
                               <label>สถานะ</label>
                                <br>
                                     <select class="form-control border-input bank-form" name="cat_status">
                                     <option value="จับคู่อยู่" selected="">จับคู่อยู่</option>
                                     <option value="ว่าง">ว่าง</option>
                                     <option value="ไม่ว่าง">ไม่ว่าง</option>
                                  </select>
                               </div>                
                                </div>
                              <div class="col-md-6">
                               <div class="form-group">
                                <label>เพศ</label>
                                <br>
                                <select class="form-control  border-input bank-form" name="cat_sex">
                                     <option value="ชาย" selected="">ชาย</option>
                                     <option value="หญิง">หญิง</option>
                                  </select>
                              </div>
                              </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
                               <label>สายพันธ์</label>
                                <br>
                                     <select class="form-control  border-input bank-form" name="cat_breed">
                                     <option value="1" selected="">11</option>
                                     <option value="2">22</option>
                                     <option value="3">33</option>
                                  </select>
                               </div>
                             </div>
                       
                           
                                <div class="col-md-6">
                                 <div class="form-group">
                               <label>รูปภาพ</label>
                                <br>
                                    <input type="file" size="100" name="" class="custom-file-upload" multiple/>
                               </div>
                             </div>
                           </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <label>นิสัย</label>
                                            <textarea rows="4" class="form-control border-input " placeholder="Here can be your description" name="cat_habit" required></textarea>
                                      </div>
                                    </div>
                                    </div>

                              <div class="text-center">
                                  <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                              </div>
                        </form>
          </div>

          </div>
          <script>
                function editcats(id){
            $('#editCats_'+id).slideToggle('slow');
        }
        </script>
                          <?php 
                          if ($cats) {
                            foreach ($cats as $cat ) {

                           ?> 
          <div id="editCats_<?=$cat->cat_id?>" class="col-lg-12 card" style="display:none;">
         
                       
                            <div class="header">
                                <h4 class="title">แก้ไข้ข้อมูลแมว</h4>
                            </div>
                            <div class="content">
                        <form action="<?= base_url('home/editcat') ?>" method="post"> 
                             
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                        <input type="hidden" class="form-control border-input bank-form" name="cat_id"  placeholder="Username" required value=" <?php echo $cat->cat_id?>">
                                         <label>ชื่อแมว</label>
                                         <input type="text" class="form-control border-input bank-form" name="cat_name"  placeholder="Username" required value="<?php echo $cat->cat_name?>">
                                      </div>
                                  </div>
                             <div class="col-md-6">
                                      <div class="form-group">
                                <label>วันเกิด</label>
                                     <input type="text" class="form-control border-input bank-form " name="cat_birthdate" placeholder=""  required value="<?php echo $cat->cat_birthdate?>">
                              </div>
                              </div>
                            </div>

                              <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
                                   <label>สถานะ</label>
                                     <!-- <input type="text" class="form-control border-input bank-form " name="cat_status" placeholder=" "  required value="<?php echo $cat->cat_status?>"> -->
                                     <select class="form-control border-input bank-form" name="cat_status" 
                                     value="<?php echo $cat->cat_status?>">
                                     <option value="จับคู่อยู่">จับคู่อยู่</option>
                                     <option value="ว่าง">ว่าง</option>
                                     <option value="ไม่ว่าง">ไม่ว่าง</option>
                                  </select>
                                  </div>
                                  <div class="col-md-6">
                                 <div class="form-group">
                                
                                   <label>สายพันธ์</label>
                                    <!--  <input type="text" class="form-control border-input bank-form " name="cat_breed" placeholder="" required  value="<?php echo $cat->cat_breed?>"> -->
                                    <select class="form-control border-input bank-form" name="cat_breed" 
                                     value="<?php echo $cat->cat_breed?>">
                                       <?php 
                                       if ($cat_breeds) {
                                          foreach ($cat_breeds as $cat_breed ) { 
                                           ?>
                                     <option value="<?php echo $cat_breed->catbreed_id ?>"><?php echo $cat_breed->breed_name ?></option>
                                     <?php 
                                     }
                                     } 
                                     ?>
                                  </select>
                                  </div>
                                </div>                 
                              </div>

                              <div class="col-md-6">
                                <div class="form-group"> 
                                  <label>เพศ</label>
                                  <br>
                                    <input type="text" class="form-control border-input bank-form " name="cat_sex"  required placeholder="" value="<?php echo $cat->cat_sex?>">
                                  
                                </div>
                                </div>
                              </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <label>นิสัย</label>
                                            <textarea rows="4" class="form-control border-input " name="cat_habit" value=""><?php echo $cat->cat_habit?></textarea>
                                      </div>
                                    </div>
                                 </div>
                                
                              <div class="text-center">
                                  <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                              </div>
                        </form>
                            </div>
                            </div>
                        <?php 
                             }}
                          ?>
                </div>       
  </section>