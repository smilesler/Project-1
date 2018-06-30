 <link href="<?=base_url()?>assets/css/paper-dashboard.css" rel="stylesheet"/>
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
                    
      