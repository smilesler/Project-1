<section id="contact">
      <div class="section-header">
          <h3 class="section-title">ติดต่อ</h3>
          <span class="section-divider"></span>
          <p class="section-description">หากคุณมีคำถามหรือต้องการความช่วยเหลือ กรุณาติดต่อเรา</p>
        </div>
      <div class="container">
        <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>CatmeCatMai</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>เลขที่ 19 หมู่ 2 ตำบลแม่กา 
                <br>อำเภอเมือง จังหวัดพะเยา 56000</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>061-3705379</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section>
<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Avilon</strong>. All Rights Reserved
          </div>
          <div class="credits">

          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">หน้าหลัก</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer> 

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?=base_url()?>lib/jquery/jquery.min.js?v=<?=time()?>"></script>
  <script src="<?=base_url()?>lib/jquery/jquery-migrate.min.js?v=<?=time()?>"></script>
  <script src="<?=base_url()?>lib/bootstrap/js/bootstrap.bundle.min.js?v=<?=time()?>"></script>
  <script src="<?=base_url()?>lib/easing/easing.min.js?v=<?=time()?>"></script>
  <script src="<?=base_url()?>lib/wow/wow.min.js?v=<?=time()?>"></script>
  <script src="<?=base_url()?>lib/superfish/hoverIntent.js?v=<?=time()?>"></script>
  <script src="<?=base_url()?>lib/superfish/superfish.min.js?v=<?=time()?>""></script>
  <script src="<?=base_url()?>lib/magnific-popup/magnific-popup.min.js?v=<?=time()?>""></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?=base_url()?>contactform/contactform.js?v=<?=time()?>""></script>

  <!-- Template Main Javascript File -->
  <script src="<?=base_url()?>js/main.js?v=<?=time()?>"></script>
<script>
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
</script>
</body>
</html>
