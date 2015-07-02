<div class="pagebar">
<ul class="pdl14">
<?php $max = (int)(($count+9)/10); $limit = $max > ($page+2) ? $page+2 : $max?>
	<?php if($page > 1) {?>
	<li class="w60"><a href="<?php echo "$path?id=" . $opinion['id'] . "&page="?><?php echo $page-1;?>">上一页</a></li>
	<?php }?>
	<?php if($page <= 5) { for($i=1;$i<=$limit;$i++){?>
	<li class="w60"><a <?php if($page == $i) echo "class='active'"?> href="<?php echo "$path?id=" . $opinion['id'] . "&page=$i"?>"><?php echo $i?></a></li>
	<?php }} else { for($i=$page-2;$i<=$limit;$i++){?>
	<li class="w60"><a <?php if($page == $i) echo "class='active'"?> href="<?php echo "$path?id=" . $opinion['id'] . "&page=$i"?>"><?php echo $i?></a></li>
	<?php }}?>
	<?php if($page < $max) {?>
	<li class="w60"><a href="<?php echo "$path?id=" . $opinion['id'] . "&page="?><?php echo $page+1;?>">下一页</a></li>
	<?php }?>
</ul>
</div>
