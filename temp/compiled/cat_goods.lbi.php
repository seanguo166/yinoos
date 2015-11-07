<div class="w mt20 floor1 floor2 cat_floor">
  <div class="header clearfix">
    <div class="Left"><a class="title" href="category.php?id=<?php echo $this->_var['goods_cat']['id']; ?>" target="_blank"></a></div>
    <div class="Right"><span class="words"><?php $_from = get_child_cat($GLOBALS[smarty]->_var[goods_cat][id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat_item');$this->_foreach['child_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat_item']):
        $this->_foreach['child_cat']['iteration']++;
?><?php if ($this->_foreach['child_cat']['iteration'] < 9): ?>&emsp;<a href="<?php echo $this->_var['cat_item']['url']; ?>" target="_blank"><?php echo htmlspecialchars($this->_var['cat_item']['name']); ?></a>&emsp;<span style="color:#ddd">|</span><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></span><a class="more" href="category-<?php echo $this->_var['goods_cat']['id']; ?>-b0.html" target="_blank" style="color:#cc0200">更多产品</a></div>
  </div>
  <div class="main_new"> <?php $_from = get_left_advlist_by_cat_id($GLOBALS[smarty]->_var[goods_cat][id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_16468100_1446894885');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_16468100_1446894885']):
        $this->_foreach['index_image']['iteration']++;
?><a class="f_a_1" href="<?php echo $this->_var['ad_0_16468100_1446894885']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad_0_16468100_1446894885']['name']; ?>"><img class="f_img_1" src="/images/blank.gif" data-src2="/<?php echo $this->_var['ad_0_16468100_1446894885']['image']; ?>" /></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><span class="f_a_2"><span class="st"><span class="nav" id="JS_floor_focus_nav_<?php echo $this->_var['goods_cat']['id']; ?>"><a class="current" href="javascript:;"></a><a href="javascript:;"></a><a href="javascript:;"></a></span><span>
    <table id="JS_floor_focus_stage_<?php echo $this->_var['goods_cat']['id']; ?>">
      <tr>
	  <?php $_from = get_mid_advlist_by_cat_id($GLOBALS[smarty]->_var[goods_cat][id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_16481500_1446894885');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_16481500_1446894885']):
        $this->_foreach['index_image']['iteration']++;
?>
        <td><a href="<?php echo $this->_var['ad_0_16481500_1446894885']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad_0_16481500_1446894885']['name']; ?>"><img src="/images/blank.gif" data-src2="/<?php echo $this->_var['ad_0_16481500_1446894885']['image']; ?>" /></a></td>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </tr>
    </table>
    </span></span></span><?php $_from = get_right_advlist_by_cat_id($GLOBALS[smarty]->_var[goods_cat][id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_16489200_1446894885');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_16489200_1446894885']):
        $this->_foreach['index_image']['iteration']++;
?><a class="f_a_3" href="<?php echo $this->_var['ad_0_16489200_1446894885']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad_0_16489200_1446894885']['name']; ?>"><img class="f_img_3" src="/images/blank.gif" data-src2="/<?php echo $this->_var['ad_0_16489200_1446894885']['image']; ?>" /></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
	
	
	
  <div class="main_new_cat">
  	<div class="cat_goods_list1">
				 <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_16496700_1446894885');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_16496700_1446894885']):
?>
				  <dl>
						<dt>
							<a href="<?php echo $this->_var['goods_0_16496700_1446894885']['url']; ?>"><img src="<?php echo $this->_var['goods_0_16496700_1446894885']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_16496700_1446894885']['name']); ?>" class="goodsimg" /></a>
						</dt>
						<dd>
							<div class="cat_goods_name"><a href="<?php echo $this->_var['goods_0_16496700_1446894885']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_16496700_1446894885']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_16496700_1446894885']['short_name']); ?></a></div>
							<div class="cat_goods_price">
								特价：<?php if ($this->_var['goods_0_16496700_1446894885']['promote_price'] != ""): ?>
								<font class="shop_s"><?php echo $this->_var['goods_0_16496700_1446894885']['promote_price']; ?></font>
								<?php else: ?>
								<font class="shop_s"><?php echo $this->_var['goods_0_16496700_1446894885']['shop_price']; ?></font>
								<?php endif; ?>
							</div>
						</dd>
				  </dl>
				  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  	</div>
  	<div style="clear:both"></div>
  </div>
  
  
	
	
	</div>
</div>
