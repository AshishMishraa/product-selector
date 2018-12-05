<?php 
// custom function s



function psemailTemplate($name, $pain_type,$pain_intensity,$inflammation,$title,$url,$image_url){
	ob_start();
    ?>
<center>
<div width="100%" style="max-width: 700px; background: #ef2424;padding-bottom: 40px ">
<div width="80%" style="max-width: 500px ;background: red"><img src="https://www.deepheat.com.au/wp-content/uploads/2018/01/deep-heat-logo-min.png"> 

</div>

<div width="80%" style="max-width: 500px ">
    <div style="background: #bfbfbf;    padding: 1px;"> 
        <h2>YOUR PAIN RELIEF SYSTEM   </h2> 
    </div>
</div>

<div width="80%" style="max-width: 500px; background: white;">
    <div style="padding: 20px;text-align: left;">
        Hi <?php echo $name; ?>, 
        <br><br><br>
        OUCH - <?php echo $pain_type ;?> sounds very painful! Luckily Deep Heat is here to help provide fast relief everyday.

        Deep Heat products can temporarily relieve different types of pain and pain intensities. You told us you have <?php echo $pain_type; ?> with a <?php echo $pain_intensity; ?> pain intensity and no swelling or inflammation. You may like to consider these products to give you some relief!
    </div>
</div>
<div width="80%" style="max-width: 500px ">
    <div style="background: #00aff3;    padding: 1px;"> 
        <h2 style="color: white; margin: 5px;">MODERATE  </h2> 
    </div>
</div>

<div width="80%" style="max-width: 500px; display: block;clear: both">
    <div>
    <div style="min-width: 50%;  float: left; background: black">
        <img src="<?php echo $image_url; ?>" style=" padding: 10px;    height: 269px; max-width: 200px;">
    </div>
    <div style="width: 50%; float: left; background: white ;min-height: 290px;">
        <div style="padding: 10px;">
            <h4><?php echo $title; ?></h4>
           

           <a href="<?php echo $url; ?>" style="color: white;background: red;    padding: 10px;
    color: white;
    background: red;
    font-size: 16px;"> Shop Now</a>
        </div>
        
    </div>
 </div>
</div>

<div width="80%" style="max-width: 500px; display: block;clear: both;background: white;">
      <img src="https://www.deepheat.com.au/wp-content/uploads/2018/11/download.png" style="margin: 5px; width: 40px">  
</div>

<div width="80%" style="max-width: 500px ">
    <div style="background: red;    padding: 1px;"> 
        <h2 style="color: white; margin: 5px;">STRONG  </h2> 
    </div>
</div>

<div width="80%" style="max-width: 500px; display: block;clear: both">
    <div>
    <div style="min-width: 50%;  float: left; background: black">
        <img src="https://www.deepheat.com.au/wp-content/uploads/2016/03/Deep-Heat-Back-Patches-POY_web.jpg" style=" padding: 10px;    height: 269px; max-width: 200px;">
    </div>
    <div style="width: 50%; float: left; background: white ;min-height: 290px;">
        <div style="padding: 10px;">
            <h4>PRODUCT NAME</h4>
           <p>Product descrip tionProduct descripti onProduct descriptionProduct description Product description</p>

           <button style="color: white;background: red;    padding: 10px;
    color: white;
    background: red;
    font-size: 16px;"> Shop Now</button>
        </div>
        
    </div>
 </div>
</div>

<div width="80%" style="max-width: 500px; display: block;clear: both;background: white;">
      <img src="https://www.deepheat.com.au/wp-content/uploads/2018/11/download.png" style="margin: 5px; width: 40px">  
</div>


<div width="80%" style="max-width: 500px ">
    <div style="background: #bfbfbf;    padding: 1px;"> 
        <h4>Special Offers  </h4> 
    </div>
</div>

<div width="80%" style="max-width: 500px;background: white">
    <img src="https://www.winni.in/assets/img/offer-bnr-1.jpg" style="max-width: 100%">
    <div style="padding: 10px">
   <h6 style="text-align: left;">IMPORTANT INFORMATION</h6> 
   <p style="text-align: left;" >This product helper is for information purposes only and is in no way intended to replace seeing a healthcare practitioner to diagnose or treat your condition.
Always read the label. Use only as directed. If symptoms persist see your healthcare practitioner.</p>
</div>
</div>

</div>
</center>

    <?php
	$html = ob_get_contents();
	ob_end_clean();
	return $html;
}







?>