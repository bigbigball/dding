<div class="pagebar">
<ul class="pgbar">
<?php $max = (int)(($count+5)/6); $limit = $max > ($page+2) ? $page+2 : $max?>
	<?php if($page > 1) {?>
	<li class="js-prevPage"><a href="<?php echo "$path?page="?><?php echo $page-1;?>">上一页</a></li>
	<?php }?>
	<?php if($page <= 5) { for($i=1;$i<=$limit;$i++){?>
	<li <?php if($page == $i) echo "class='active'"?>><a href="<?php echo "$path?page=$i"?>"><?php echo $i?></a></li>
	<?php }} else { for($i=$page-2;$i<=$limit;$i++){?>
	<li <?php if($page == $i) echo "class='active'"?>><a href="<?php echo "$path?page=$i"?>"><?php echo $i?></a></li>
	<?php }}?>
	<?php if($page < $max) {?>
	<li class="js-nextPage"><a href="<?php echo "$path?page="?><?php echo $page+1;?>">下一页</a></li>
	<?php }?>
</ul>
</div>