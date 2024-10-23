<?php // modal offer website ?>

<?php // end modal offer website ?>
<?php // modal offer support ?>

<?php // end modal offer support ?>

<div id="modal_block" class="hidden_bg_rgb">
  <div id="form_block" class=""> 
    <p class="close_result" onclick="closePopUp();">&times;</p>
    <div class="wraper_full_block">
      <form class="" method="post" action="mail.php"  enctype="multipart/form-data"> 
        <div id="form_inputs">
            <p class="bold text-center h2"><?php echo $langarr['titlemodal'];?></p>
            <input type="text" name="name" required="" class="" placeholder="<?php echo $langarr['modalinputname'];?>">
            <input type="email" name="email" required="" class="" placeholder="E-mail">
            <input type="tel" name="phone" required="" class="" placeholder="<?php echo $langarr['modalinputphone'];?>">
        </div>
        <button type="submit" name="submit" class="button_green"><?php echo $langarr['btnsend'];?></button> 
      </form> 
    </div> 
  </div>
</div>

<script>
    
function openPopUp() {
	jQuery('#modal_block').addClass('openPopUp');
  	document.getElementById('form_block').className = 'call_back';
}
function closePopUp(text) {
	jQuery('#modal_block').removeClass('openPopUp');
	jQuery('#result_form').removeClass('openPopUp');
}

</script>