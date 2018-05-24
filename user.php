<?php
    require 'head.php';
    require 'menu.php';
?>

<body>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-user" >
                            <div class="image">
                                <img src="assets/img/background.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                  <img class="avatar border-white" src="assets/img/faces/face-2.jpg" alt="..."/>
                                  <h4 class="title">Chet Faker<br />
                                     <button  id="_addNew" class="btn btn-warning" onclick="addNew();">Edit</a></button>
                                  </h4>
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
                                        <h5>3<br /><small>My Cat</small></h5>
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
                    </div>
                    <script>
        function addNew(){
            $('#addCat').slideToggle('slow');
        }
    </script>
    <div id="addCat" class="col-lg-12" style="display:none;">
    <div class="content">
            <div class="container-fluid">
                <div class="row">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <input type="text" class="form-control border-input" disabled placeholder="Company" value="Creative Code Inc.">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control border-input" placeholder="Username" value="michael23">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Company" value="Chet">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Last Name" value="Faker">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="4" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="card">
                                <div class="header">
                                    
                                    <h4 class="title">My Cat
                                        
                                    <btn class="btn btn-sm btn-danger btn-icon pull-right" onclick="addNews();"><i class="fa fa-plus" ></i></btn>
                                </div></h4>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                DJ Khaled
                                                <br />
                                                <span class="text-muted"><small>Offline</small></span>
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon" onclick="return confirm('คุณต้องการแก้ไขข้อมูลแมวของคุณหรือไม่?');"><i class="fa fa-edit"></i></btn>
                                                <btn class="btn btn-sm btn-danger btn-icon" onclick="return confirm('คุณต้องการลบข้อมูลแมวของคุณหรือไม่?');"><i class="fa fa-trash" ></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                Creative Tim
                                                <br />
                                                <span class="text-success"><small>Available</small></span>
                                            </div>

                                            <div class="col-xs-3 text-right">
                                            <btn class="btn btn-sm btn-success btn-icon" onclick="return confirm('คุณต้องการแก้ไขข้อมูลแมวของคุณหรือไม่?');"><i class="fa fa-edit"></i></btn>
                                                <btn class="btn btn-sm btn-danger btn-icon" onclick="return confirm('คุณต้องการลบข้อมูลแมวของคุณหรือไม่?');"><i class="fa fa-trash" ></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <div class="avatar">
                                                    <img src="assets/img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                Flume
                                                <br />
                                                <span class="text-danger"><small>Busy</small></span>
                                            </div>

                                            <div class="col-xs-3 text-right">
                                                <btn class="btn btn-sm btn-success btn-icon" onclick="return confirm('คุณต้องการแก้ไขข้อมูลแมวของคุณหรือไม่?');"><i class="fa fa-edit"></i></btn>
                                                <btn class="btn btn-sm btn-danger btn-icon" onclick="return confirm('คุณต้องการลบข้อมูลแมวของคุณหรือไม่?');"><i class="fa fa-trash" ></i></btn>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                    </div>
                </div>
    <script>
                function addNews(){
            $('#addCats').slideToggle('slow');
        }
    </script>
        <div id="addCats" class="col-lg-12" style="display:none;">
    <div class="content">
            <div class="container-fluid">
                <div class="row">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">เพิ่มแมว</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ชื่อแมว</label>
                                                <input type="text" class="form-control border-input" placeholder="Username" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6"> 
                    <label >อายุ</label>
                            <select class="form-control col-md-6 border-input">
                                 <option value="1" selected="">1 เดือน</option>
                                <option value="2">2 เดือน</option>
                                 <option value="3">3 เดือน</option>
                                 <option value="4">4 เดือน</option>
                             </select>
                  </div>
                   </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>เพศ</label>
                                                <select class="form-control col-md-6 border-input">
                                 <option value="1" selected="">ชาย</option>
                                <option value="2">หญิง</option>
                               
                             </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>วันเกิด</label>
                                                <input type="text" class="form-control border-input" placeholder="Last Name" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>นิสัย</label>
                                                <textarea rows="4" class="form-control border-input" placeholder="Here can be your description" value=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
                </div>


                
<?php
    
    require 'footer.php';
?>
            
        
