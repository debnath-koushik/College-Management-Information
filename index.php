<html>
<head>
</head>
<?php
require('template/header.php');
?>
<body>
<div id="container">
  
      <!--  Outer wrapper for presentation only, this can be anything you like -->
	  <div id="banner">
        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
          <li><img src="template/images/banner01.jpg"/></li>
          <li><img src="template/images/banner02.jpg"/></li>
          <li><img src="template/images/banner03.jpg"/></li>
        </ul>
        <!-- end Basic jQuery Slider -->
      </div>
      <!-- End outer wrapper -->
    </div>		
	<script src="template/js/libs/jquery-1.6.2.min.js"></script>
    <script src="template/js/basic-jquery-slider.js"></script>
    
    <!--  Attach the plug-in to the slider parent element and adjust the settings as required -->
    <script>
      $(document).ready(function() {
        
        $('#banner').bjqs({
          'animation' : 'fade',
          'width' : 950,
          'height' : 400
        });
        
      });
    </script>

</body>
<?php
require('template/footer.php');
?>
</html>