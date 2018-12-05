<?php /* Template Name: Product Selector */ ?>
<?php get_header(); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="container" id="selector-container">
  <h2>Product Selector</h2>
  <p>Don't be confused over which of our Deep Heat product are best suited to your needs. Complete our product selector questions here   and we we'll be able to make a recommendation for you.</p>
  <div class="row first-heading">
     <div class="col-md-12 question-heading">
		<img class="img-icon" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'product-selector/images/img3.png'; ?>">
		Q1. What type of pain do you have?
	 </div>
				 <div class="col-md-12 radio-selection"> 
				  <div class="col-md-4">
				   <input type="radio" name="pain_type" value="back-pain"> Back Pain
				  </div>
				  <div class="col-md-4">
				   <input type="radio" name="pain_type" value="muscular-aches-pain"> Muscular Aches & Pain
				  </div>
				  <div class="col-md-4">
				   <input type="radio" name="pain_type" value="neck-shoulder-pain"> Neck & Shoulder Pain
				  </div>
				  <div class="col-md-4">
				   <input type="radio" name="pain_type" value="joint-pain-or-stiffness"> Joint Pain or Stiffness
				  </div>
				  <div class="col-md-4">
				   <input type="radio" name="pain_type" value="arthritic-pain">Arthritic Pain
				  </div>
				  <div class="col-md-4">
				   <input type="radio" name="pain_type" value="sprain-or-strain"> Sprain Or Strain
				  </div>
					 
				  <div class="col-md-4">
				   <input type="radio" name="pain_type" value="minor-sports-injury"> Minor Sports Injury
				  </div>
					 
				  <div class="col-md-4">
				   <input type="radio" name="pain_type" value="knocks-bumps-or-bruises"> Knocks, Bumps or Bruises
				  </div> 
				
	  </div>
  </div>
  <div class="row second-heading">
     <div class="col-md-12 question-heading">
		<img class="img-icon" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'product-selector/images/img1.png'; ?>">
		Q2. How would you describe your pain intensity?
	 </div>
				 <div class="col-md-12 radio-selection"> 
				  <div class="col-md-4">
				   <input type="radio" name="pain_intensity" value="sore-achy"> Sore / Achy
				  </div>
				  <div class="col-md-4">
				   <input type="radio" name="pain_intensity" value="strong"> Strong
				  </div>
				  <div class="col-md-4">
				   <input type="radio" name="pain_intensity" value="intense"> Intense
				  </div>
	  </div>
  </div>

  <div class="row third-heading">
     <div class="col-md-12 question-heading">
		<img class="img-icon" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'product-selector/images/img2.png'; ?>">
		Q3. Are you experiencing Inflammation or Swelling?
	 </div>
				 <div class="col-md-12 radio-selection"> 
				  <div class="col-md-4">
				   <input type="radio" name="inflammation" value="yes"> Yes
				  </div>
				  <div class="col-md-4">
				   <input type="radio" name="inflammation" value="no"> No
				  </div>
	  </div> 
  </div>
	
  <div class="col-md-12 result-product" style="display:none"></div>
  <div class="col-md-12 info-form">
	  <div class="col-md-offset-3 col-md-6">
	     <center>  
		 <h2>Please enter your name and email address and we will send you our recommendation for the best Deep Heat product to use</h2></center>
	  </div>
	
	  <div class="col-md-offset-3 col-md-6 ps-form" >
		  <form action="javascript:void(0)" id="theFormss">
			  <div class="form-group">
				<input type="text" onkeyup="jQuery(this).css('border', '2px solid black')" class="form-control" placeholder="Name" id="mname" name="name">
			  </div>
			   <div class="form-group">
				<input type="email"  onkeyup="jQuery(this).css('border', '2px solid black')" class="form-control" placeholder="Email" id="memail" name="email">
			  </div>
			  <div class="form-group">
				<input type="checkbox"   checked name="newsletter" > Subscribe to newsletter
			  </div>
		 <div class="form-group">
			  <div class="g-recaptcha" data-callback="recaptchaCallback"  data-sitekey="6LcYyH0UAAAAAHZX5etbQSGRU8OB0HP1VCt4HQIj"></div>
			  </div>

			  <div class="form-group">
				<input type="submit"  disabled id="submitBtnfffff"   class="btn btn-success" value="Submit" >
			  </div>
		  </form>
	  </div>
  </div>
</div>
<script> 
function recaptchaCallback() {
    jQuery('#submitBtnfffff').removeAttr('disabled');
}; 
	
jQuery("#theFormss").submit(function(e) {
     var email=jQuery('#memail').val();
	var name=jQuery('#mname').val();	
	if(name ==''){
	jQuery('#mname').css('border','1px solid red');
	return false;
	}
    if(validateEmail(email)){
	jQuery('#memail').css('border','1px solid red');
	return false;
	}
		
	  var pain_type=  jQuery("#ps-pain_type"). val();
	  var pain_intensity=  jQuery("#ps-pain_intensity"). val();
	  var inflammation=  jQuery("#ps-inflammation"). val();
	  var product_id=  jQuery("#ps-product_id"). val();
		
	 var data=	{
		    'action': 'send_product_selected_email',
		    'email':email,'name':name,
	        'pain_type': pain_type,
			'pain_intensity': pain_intensity,
			'inflammation': inflammation,
			'product_id': product_id, 
	 };
	 jQuery('#selector-container').html('<center><img src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'product-selector/images/loader.gif'; ?>"></center>') ;
	 jQuery.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function(response) {
			 jQuery('#selector-container').html( response)  ; 
		});
    e.preventDefault(); // avoid to execute the actual submit of the form.
});
	function validateEmail(sEmail) {
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (filter.test(sEmail)) { return false;   }  else { return true; }
	}
	
	
</script>

<style>
	@media (min-width: 1200px){
		div#selector-container {
			max-width: 1000px;
		}
	}
	
	.col-md-12.result-product {
    margin-top: 60px;
    padding: 40px 20px;
    border: 2px solid #d43800;
}
input.btn.btn-success {
    border: 2px solid #d23914;
    height: 44px;
    width: 124px;
}
	
.form-control {
    border: 2px solid black;
    height: 40px;
}
	
.col-md-12.info-form {
    margin-top: 6rem;
}
.col-md-12.radio-selection {
    padding: 10px 30px;
}
.col-md-12.radio-selection input {
    margin-right: 15px;
}
.img-icon{ 
	width: 30px;
    height: 30px;
    border: 3px solid #d23914;;
    border-radius: 50%;
    padding: 3px;
	background: white;
	margin-right: 10px;
}
.col-md-12.question-heading {
	
   margin-top: 4rem;
    margin-bottom: 2rem;
    padding-left: 0px;
    border-radius: 15px;
    background: #d23914;
    color: white;
}
#selector-container{
	   padding: 46px 30px;
	}
	
.col-md-offset-3.col-md-6.ps-form {
    border: 1px solid #d23914;
    margin-top: 4rem;
    padding: 6rem;
}
</style>

<?php get_footer(); ?>