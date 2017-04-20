<?php
$i=1;
foreach($this->data as $movie){
?>
      <div class="inner">
	  	  
        <div class=<?php echo((++$i%2)==1)?"rightbox":"leftbox";?>>
          <h3><?=$movie->title?></h3>
          <img src="<?=$movie->image?>" width="93" height="95" alt="photo 1" class="left" />
          <p><b>Price:</b> <b><?=$movie->price?></b> &amp; eligible for FREE Super Saver Shipping on orders over <b>$195</b>.</p>
          <p><b>Availability:</b> Usually ships within 24 hours</p>
          <p class="readmore"><a href="http://www.free-css.com/">BUY <b>NOW</b></a></p>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
		
<?php 
}
?>
      </div>
      <!-- end .inner -->
   