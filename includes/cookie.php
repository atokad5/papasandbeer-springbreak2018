<div class="ck-msg general-message">
  <?php $cookie = get_field('cookie_message', 'option'); ?>
    <?php if($cookie) { ?>
      <?php foreach($cookie as $theCookie) { ?>
        <div class="general-message ck-el" data-cookie="<?php echo $theCookie['cookie_name']; ?>">
          <div class="ck-content">
            <?php echo $theCookie['cookie_message']; ?>
          </div>
          <div class="ck-btn">
            <span></span><span></span>
          </div>
        </div>

      <?php } 
    }
  ?>
</div>