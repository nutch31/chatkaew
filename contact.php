<?php include("header.php");?>

<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */

      #map {
        height: 100%;
        width: 100%;
      }
    </style>

<div class="site-blocks-cover overlay" style="background-image: url(images/hotel_images/35129.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <span class="caption mb-3">ติดต่อเรา / Contact Us</span>
              <h1 class="mb-4"></h1>
            </div>
          </div>
        </div>
      </div>  

    
    <div class="site-section site-section-sm">
      <div class="container">

	  <div class="row">







       
<div class="col-md-12 col-lg-8 mb-5">

  

  <form action="contact_query.php" class="p-5 bg-white" target="_blank" method="post">
<h1>ติดต่อสอบถาม จองห้องพัก / Contact Us</h1>
    <div class="row form-group">
      <div class="col-md-12 mb-3 mb-md-0">
        <label class="font-weight-bold" for="fullname">ชื่อ สกุล / Full name</label>
        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="ชื่อ สกุล" required>
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-12">
        <label class="font-weight-bold" for="email">อีเมล์ / Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="อีเมล์" required>
      </div>
    </div>


    <div class="row form-group">
      <div class="col-md-12 mb-3 mb-md-0">
        <label class="font-weight-bold" for="phone">เบอร์โทรศัพท์ / Phone</label>
        <input type="text" id="phone" name="phone" class="form-control" placeholder="เบอร์โทรศัพท์" required>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-12">
        <label class="font-weight-bold" for="message">ข้อความ / Message</label> 
        <textarea name="message" id="message" name="message" cols="30" rows="5" class="form-control" placeholder="ติดต่อสอบถาม" required></textarea>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-12">
        <input type="submit" value="ส่งข้อความ / Submit" class="btn btn-primary pill px-4 py-2">
      </div>
    </div>


  </form>
</div>

<!--
<div class="col-lg-4">
  <div class="p-4 mb-3 bg-white">
    <h3 class="h5 text-black mb-3">ข้อมูล ที่ติดต่อ</h3>
    <p class="mb-0 font-weight-bold">ที่อยู่</p>
    <p class="mb-4">994/1 หมู่ 19 ตำบล หนองมะค่าโมง อำเภอ ด่านช้าง จังหวัด สุพรรณบุรี  72180</p>

    <p class="mb-0 font-weight-bold">โทรศัพท์</p>
    <p class="mb-4"><a href="tel:+035509490">035-509490</a></p>

    <p class="mb-0 font-weight-bold">แฟกซ์</p>
    <p class="mb-4"><a href="#">035-595462</a></p>

<p class="mb-0 font-weight-bold">ตำแหน่ง</p>
    <p class="mb-4"><a href="https://www.google.co.th/maps/place/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B9%81%E0%B8%A3%E0%B8%A1%E0%B8%89%E0%B8%B1%E0%B8%95%E0%B8%A3%E0%B9%81%E0%B8%81%E0%B9%89%E0%B8%A7/@14.8413542,99.7039853,17z/data=!3m1!4b1!4m5!3m4!1s0x30e3d877c61faf11:0xef4f7669c5ff8d02!8m2!3d14.841349!4d99.706174?hl=th" target="_blank">แผนที่</a></p>

    <p class="mb-0 font-weight-bold">อีเมล์</p>
    <p class="mb-4"><a href="mailto:xanwywathnkulp@gmail.com">xanwywathnkulp@gmail.com</a></p>

    <p class="mb-0 font-weight-bold">Line</p>
    <p class="mb-4">086-801-9797</p>

  </div>

  
  
</div>

-->
</div>
		
        <div class="row">
			<div id="map"></div>
			  <script>
				function initMap() {
				var mapOptions = {
				  center: {lat: 14.841445, lng: 99.706138},
				  zoom: 15,
				}
					
				var maps = new google.maps.Map(document.getElementById("map"),mapOptions);
				
				var marker = new google.maps.Marker({
				   position: new google.maps.LatLng(14.841445, 99.706138),
				   map: maps,
				   title: 'โรงแรม ฉัตรแก้ว '
				});
			}
			  </script>, 
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrz435klQh4tH5ZVEecMzonaIVu94FO3k&callback=initMap"
			async defer></script>
		</div>

        
      </div>
    </div>

<?php include("footer.php");?>