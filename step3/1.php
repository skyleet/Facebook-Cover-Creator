
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
<head>
  <script src="/js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/bootstrap/bootstrap.css" type="text/css">

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/html2canvas.js"></script>
<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>

</head> 



<!-- events section-->
<div class="col-md-12 ">


<script>

jQuery(document).ready(function(){ uplodimgcrop();
 });

</script>

<div class="container fbbannercreator_template">
 <div class="row">
  <div class=" step-viewer">
    <div class="col-md-12 step-viewer-wrapper">   
   <div class="fbcr_steps fbcr_step_one "><button class="btn btn-default btn-circle btn-lg ">1</button></div>
   <div class="fbcr_steps fbcr_step_two  "><button class="btn btn-default btn-circle btn-lg deactive">2</button></div>
   <div class="fbcr_steps fbcr_step_three "><button class="btn btn-default btn-circle btn-lg active">3</button></div>
   </div>      
  </div>  
  <div class="step-view-two">
   <div class="creator_step_two diplay-to-off" id ="fbbanner_cr" >
     <form role="form" name="fbcr_step_two" id="fbcr_step_two" method="post" >
      <div class="form-group">
      <label for="pwd">Name<span>*</span>:</label>
      <input type="text" class="form-control" name="username" id="name" placeholder="Enter Name">
      </div>  
      <div class="form-group">
      <label for="email">Email address<span>*</span>:</label>
      <input type="email" class="form-control" name="emailid" id="email" placeholder="Enter Email Id">
      </div>
      <div class="form-group">
      <label for="email">Mobile Number<span>*</span>:</label>
      <input type="text" class="form-control" name="mobilenumber" id="mobile_number" placeholder="Enter Mobile Number">
      </div>
      <!--<div class="form-group">
      <label for="email">Captcha<span>*</span>:</label>
      <img src=''/>
      <input type="text" class="form-control" id="captcha" placeholder="Enter Captcha">     
      </div> -->      
      <button type="button" class="btn btn-default step-two-submit">Submit</button>
    </form>  
   
   </div>
  </div>
  <div class="step-view-three diplay-to-on">
   <div class="creator_step_three"  id = "fbbanner_cr" >
     <form role="form" name="stepthree" method="post" id="fbcr_step_three" enctype="multipart/form-data"  >
      <div class="form-group">
      <label for="pwd">Upload Your Photo:</label>
      <!-- <input type="file" class="form-control" name="imguad"   /> -->
      <input   id="inputImage" name="file" type="file" accept="image/*">
      </div>  
     <!--  <button type="submit" name="uplodimg" class="btn btn-default upimg">upload</button>-->
    </form>  
     
   </div>
  </div>  
 </div>
 <div class="col-md-12  cover-wrapper  img-container uploaded-image-space diplay-to-on">
 
 
 
    <img  class="cropper"  alt="Cover cropping area"  />
   </div>
     <div class="col-md-12 merging-space-cover-header diplay-to-on "><h3>Preview Your Cover Image</h3></div>
    
      <div id="target" class="col-md-12 merging-space diplay-to-on " style="z-index:111;" >
    <img src="1.png" class="overlay-image-for-merge" style="height: 425px; width: 100%" />  
   <div class="cropped-image"></div> 
      </div>

 <div id="showDataURL" style="display:none"></div>
  <input value="1.png" type="hidden" class="ajax-img">

   <form method="POST" enctype="multipart/form-data" action="save.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />
</form>
      <div class="col-md-12 merge-button-wraps diplay-to-on">
     <div class="merge-button"><br>
       <button id="getData" class="btn " onclick="capture();">Create Cover Image</button>
    </div>
     </div>
     
     <div class="modal fade ajax-loader" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
     <img src="/ajax_loader.gif">
    </div>
  </div>
</div>
         
    
      <input type="hidden" value="" name="dataurlimgval" class="dataimgval" />
       <div class="download-button">
         <div class="download-button_one">
         <form id="downloadhere" name="downloadnow" method="post" action="download.php" >
          <input type="hidden" value="" name="downtofile" class="downloadfileval" />
         <button class="btn down_butt">Click here to download</button>  
       </form> 
       </div>
       
       <div class="new_cover_click">
         <button class="btn new_cover">Create a new cover photo</button>
       </div>
     </div>  
    </div>
</div>

 <div class="canvas-rendered-image" id="canvas-imaged" style="display:none" ></div>
 <div id="img-out"style="display:none" ><img src="/" /></div>


  <script type="text/javascript">
  function capture() {
    $('#target').html2canvas({
      onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
        $('#img_val').val(canvas.toDataURL("image/png"));
                //Submit the form manually
        document.getElementById("myForm").submit();
      }
    });
  }
</script>

<style>
.download-button_one,.new_cover
{
  float:left;
  margin-right:10px;
}
.step-view-three
{
  float:left;
    width: 100%;
}
.step-view-three .form-group > input {
  border: 1px solid #00aff0;
  color: steelblue;
  width: 100%;
}
.step-view-three .form-group {
  background-color: rgba(230, 137, 47, 0.56);
  float: left;
  margin-bottom: 15px;
  padding: 18px;
  width: 100%;
}
.cover-wrapper {
  background-color: #fcfcfc;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.25) inset;
  height: 364px;
  margin-top: 15px;
  overflow: hidden;
  width: 100%;
}
.download-button button:hover ,.merge-button button:hover
{
  background-color:#228c9f;
  color:#fff;
}
.merging-space-cover-header
{
  margin-top:10px;
  padding:0;
}
.merge-button-wraps
{
  padding:0;
}
.step-view-three
{
  padding-left:12px;
}
.ajax-loader
{
  display:none;
}
.step-viewer,.step-view-two
{
  float:left;
  width:100%;
}
.fbbannercreator_template .fbcr_steps
{
  float:left;
  margin-right:10px;
  
}
.step-viewer-wrapper
{
  float:none;
  margin:0 auto;
  padding:0;
}
.fbbannercreator_template .fbcr_steps button
{
border-color: #00aff0;
border-radius: 25px;
font-size: 18px;
height: 50px;
line-height: 1.33;
padding: 10px 16px;
width: 50px;

}
.fbbannercreator_template .fbcr_steps button.active
{
background-color: #00aff0;
color:#fff;
}
.deactive  
{
background-color: #fff;
color:#000;
}
.step-viewer
{
  margin-bottom:10px;
}
.step-view-three 
{
  display:none;
}
.diplay-to-off
{
   display:none;
}
.diplay-to-on
{
   display:block;
}
.uploaded-image-space
{
  margin-top:20px;
  
}
.merging-space
{
   margin-top:20px; 
   padding:0;   

   width:850px;
   /*width:100%;*/
   height:425px;
}
.merging-space .overlay-image-for-merge
{
   position: absolute;
   z-index:111;
}
.cropped-image
{
 height: 315px;
width: 347px;
bottom: 0px;
/*right: 0px;*/
background-color:#f78219;
overflow:hidden;
position:absolute;
z-index:10;
}
.merge-button-wraps
{
  margin-top:20px;
  margin-bottom:30px;
}
.download-button
{
  display:none;
}
.sidebar ,.done_info,.download_block
{
  display:none;  
}
.cropper-container
{
 height:364px !important;
 }
 .uploaded-image-space
{
  height:364px ;
  overflow:hidden;
}
.modal-content {
  background-clip: padding-box;
  background-color: transparent;
  border: 0 none;
  border-radius: 6px;
  box-shadow: none !important;
  outline: medium none;
  position: relative;
  text-align: center;
}
@media (max-width:780px) {

}
</style> 
<script type="text/javascript">

    jQuery(document).ready(function () {
        // jQuery('.delete-button').click(deleteItem);
    
    jQuery('.step-two-submit').click(function(){
      //event.preventDefault();
      var username=jQuery('#name').val();
      var emailid=jQuery('#email').val(); 
      var mobile_number=jQuery('#mobile_number').val();       
      //alert(username);  
      if(username=="")
      {
        alert('Please enter your name');
      return false;
      }
       if(username!="" && emailid=="")
      {
        alert('Please enter your email id');  
      return false;     
      }
      else if(username!="" && emailid!="" && !validateEmail(emailid))
      {
        alert('Please enter a valid email id'); 
      return false;     
      }       
      else if(username!="" && emailid!="" && validateEmail(emailid) && mobile_number=="")
      {
        alert('Please enter your mobile number'); 
      return false;     
      } 
      else if(username!="" && emailid!="" && validateEmail(emailid) && mobile_number!="" && !validatephonenumber(mobile_number))
      {
        alert('Please enter a mobile number');  
      return false;     
      }     
      jQuery('#fbcr_step_two').submit();        
    });

  var $image = $(".cropper");
  var $inputImage = $("#inputImage");

  if (window.FileReader) {
    $inputImage.change(function() {
      var fileReader = new FileReader(),
          files = this.files,
          file;

      if (!files.length) {
        return;
      }

      file = files[0];

      if (/^image\/\w+$/.test(file.type)) {
        fileReader.readAsDataURL(file);
        fileReader.onload = function () {
          $image.cropper("reset", true).cropper("replace", this.result);
          $inputImage.val("");
        };
      } else {
        showMessage("Please choose an image file.");
      }
    });
  } else {
    $inputImage.addClass("hide");
  } 
    
    jQuery('.down_butt').click(function(){
        jQuery("#downloadhere").submit(); 
    }); 
  jQuery('.new_cover').click(function(){
     var href = '/index.php/cover';
      location.href=href; 
        

    }); 
      
    
  
    });
  
</script>

<link href="/components/com_fbbannercreator/assets/css/cropper.css" rel="stylesheet">
  <script src="/components/com_fbbannercreator/assets/js/cropper.min.js"></script>
  <script src="/components/com_fbbannercreator/assets/js/html2canvas.js"></script>
    <script src="/components/com_fbbannercreator/assets/js/canvas2image.js"></script>
<script>

        // jQuery('.delete-button').click(deleteItem);
    
    function uplodimgcrop(){
      $=jQuery;
  var $image = $(".img-container img"),
    $dataX = $("#dataX"),
    $dataY = $("#dataY"),
    $dataHeight = $("#dataHeight"),
    $dataWidth = $("#dataWidth");
 var $imgwidth=$('.cropper').width();
  var $imgheight=$('.cropper').height();
  
$image.cropper({
  aspectRatio: 23 / 21,
  data: {
    x: 480,
    y: 60,
    width: 640,
    height: 360
  },
  preview: ".cropped-image",
  done: function(data) {
    $dataX.val(Math.round(data.x));
    $dataY.val(Math.round(data.y));
    $dataHeight.val(Math.round(data.height));
    $dataWidth.val(Math.round(data.width));
  } ,
  

});
  $("#getData").click(function() {
          $('.ajax-loader').modal() ; 
            $(".uploaded-image-space").hide();
          $("#fbcr_step_three").hide();         
             html2canvas($('.merging-space'), {
            onrendered: function(canvas) {
                theCanvas = canvas;
                //document.body.appendChild(canvas);
        $('.canvas-rendered-image').html(canvas);
                // Convert and download as image 
              //  var omgimg= Canvas2Image.saveAsPNG(canvas); 
                $("#img-out").html(canvas);
        canvas.webkitImageSmoothingEnabled = false;
                canvas.mozImageSmoothingEnabled = false;
                canvas.imageSmoothingEnabled = false;       
        var mergeddataurl = canvas.toDataURL("image/png");
        $(".dataimgval").val(mergeddataurl);
        $(".dataimgval").addClass('activedataimg');
                  
           $("#getData").hide();
      $.ajax({
      type: "POST",
      url: '/ajax.php',
      data: {'imgphp': mergeddataurl},
        success: function(data) {
            // console.log(data);
           $('.downloadfileval').val(data);
          $('.ajax-loader').modal('hide') ; 
          $("cover-wrapper") .slideUp();  
          $(".step-view-three").slideUp();          
           $('.download-button').fadeIn("3000");
          }
      });
            }
        });

        
  });

 
}
function validateEmail(emailid) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(emailid)) {
        return true;
    }
    else {
        return false;
    }
}
function validatephonenumber(mobile_number)
{
      var filternumber = /^[0-9-+]+$/;
    if (filternumber.test(mobile_number)) {
        return true;
    }
    else {
        return false;
    }     
}

  </script>

</div>

<!-- events section-->

