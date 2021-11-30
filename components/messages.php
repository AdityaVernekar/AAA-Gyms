<?php if(isset($_SESSION['message'])):?>
<div class="msg <?php echo $_SESSION['type'];?>">
    <li><?php echo $_SESSION['message'];?></li>
    <?php
            unset($_SESSION['message']);
            unset($_SESSION['type']);

        ?>
</div>
<?php endif;?>
<script>
setTimeout(function() {
    $('.msg').fadeOut(1000);
}, 2000);
</script>