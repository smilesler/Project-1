 <link href="<?=base_url()?>assets/css/paper-dashboard.css" rel="stylesheet"/>
  <!-- #header -->
  <section id="team" class="section-bg">
       <div class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="card card-user" >
                        <?php 
                          if ($profiles) {
                            foreach ($profiles as $profile ) { 
                        ?>
                          <div class="image">
                                <img src="<?=base_url()?>assets/img/background.jpg" alt="..."/>
                          </div>
                          <div class="content">
                          <div class="author">
                                  <img class="avatar border-white" src="<?php echo $profile->member_pictureurl?>" alt="..."/>
                                  <h4 class="title"><?php echo $profile->member_displayname?><br/>
                                  </h4>
                                   <button class="btn btn-info" onclick="Editprofile();"> Edit</button>
                          </div>

                                <p class="description text-center">
                                    "I like the way you work it <br>
                                    No diggity <br>
                                    I wanna bag it up"
                                </p>
                          </div>
                            <hr>
                          <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <h5><?php echo $show_cat; ?><br/><small>My Cat</small></h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5>2<br /><small>Mathcing</small></h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>4.0<br /><small>Review</small></h5>
                                    </div>
                                </div>
                          </div>                 
                      </div> 
                    <script>
                function Editprofile(){
            $('#Editprofile').slideToggle('slow');
                }
    </script>
    <div id="Editprofile" class="col-lg-12 card" style="display:none;">
              <div class="header">
                 <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form method="post" action="<?=base_url('home/editprofile')?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Userid</label>
                                                <input type="text" class="form-control border-input bank-form" value="<?php echo $profile->member_userid?>" required="ss" name="member_userid" disabled >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label>member pictureurl</label>
                                                <input type="text" class="form-control bank-form" placeholder="" name="member_pictureurl" value="<?php echo $profile->member_pictureurl?>" disabled> 
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                 <label>Username</label>
                                                <input type="text" class="form-control border-input bank-form" id="member_displayname" name="member_displayname" placeholder="Username" value="<?php echo $profile->member_displayname?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone number</label>
                                                <input type="text" class="form-control bank-form" placeholder="Phone number" name="member_phone" value="<?php echo $profile->member_phone?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="4" class="form-control" name="member_status" placeholder="Here can be your description" value="<?php echo $profile->member_status?>"><?php echo $profile->member_status?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" name="submit" id="submit" value="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <?php 
                            }
                          }
                           ?>
                        </div>
                    
        
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
                                                <span class="text-danger"><small> <?php echo $cat->cat_status?></small></span>
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon" onclick="editcats(<?=$cat->cat_id?>);"><i class="fa fa-edit"></i></btn>
                                                <btn class="btn btn-sm btn-danger btn-icon" onclick="return confirm('คุณต้องการลบข้อมูลแมวของคุณหรือไม่?');"><i class="fa fa-trash" ></i></btn>
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
                        <form method="post" action="<?= base_url('home/addcat') ?>">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                         <label>ชื่อแมว</label>
                                         <input type="text" class="form-control border-input bank-form" placeholder="Username" name="cat_name">
                                      </div>
                                  </div>
                             <div class="col-md-6">
                                      <div class="form-group">
                                <label>วันเกิด</label>
                                <br>
                                   <input type="text" class="form-control border-input bank-form" placeholder="birthdate" name="cat_birthdate">
                              </div>
                              </div>
                            </div>

                              <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
                               <label>สถานะ</label>
                                <br>
                                     <select class="form-control border-input bank-form" name="cat_status">
                                     <option value="1" selected="">จับคู่อยู่</option>
                                     <option value="2">ว่าง</option>
                                     <option value="3">ไม่ว่าง</option>
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
                           </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                      <div class="form-group">
                                          <label>นิสัย</label>
                                            <textarea rows="4" class="form-control border-input " placeholder="Here can be your description" name="cat_habit"></textarea>
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
                                         <label>ชื่อแมว</label>
                                         <input type="text" class="form-control border-input bank-form" name="cat_name"  placeholder="Username" value="<?php echo $cat->cat_name?>">
                                      </div>
                                  </div>
                             <div class="col-md-6">
                                      <div class="form-group">
                                <label>วันเกิด</label>
                                     <input type="text" class="form-control border-input bank-form " name="cat_birthdate" placeholder="" value="<?php echo $cat->cat_birthdate?>">
                              </div>
                              </div>
                            </div>

                              <div class="row">
                                <div class="col-md-6">
                                 <div class="form-group">
                                   <label>สถานะ</label>
                                     <input type="text" class="form-control border-input bank-form " name="cat_status" placeholder=" " value="<?php echo $cat->cat_status?>">
                                  </div>
                                  <div class="col-md-6">
                                 <div class="form-group">
                                   <label>สายพันธ์</label>
                                     <input type="text" class="form-control border-input bank-form " name="cat_breed" placeholder="" value="<?php echo $cat->cat_breed?>">
                                  </div>
                                </div>                 
                              </div>

                              <div class="col-md-6">
                                <div class="form-group"> 
                                  <label>เพศ</label>
                                  <br>
                                    <input type="text" class="form-control border-input bank-form " name="cat_sex" placeholder="" value="<?php echo $cat->cat_sex?>">
                                  
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

  <main id="main">
    <section id="team" class="section-bg">
      
      </div>
    </section><!-- #team -->
    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      
    </section>

   
  </main>