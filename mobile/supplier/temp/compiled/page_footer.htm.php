<footer>
	<div class="global-nav global-nav-current">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-index"><img src="images/index.png"></i>
                <span class="global-nav__nav-tit">首页</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="order.php?act=list&status=await_ship" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-category"><img src="images/fahuo.png"></i>
                <span class="global-nav__nav-tit">待发货</span>
                <span class="global-nav__nav-shop-cart-num"><?php if ($this->_var['footer_order']['await_ship']): ?><?php echo $this->_var['footer_order']['await_ship']; ?><?php else: ?>0<?php endif; ?></span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="back.php?act=back_list&order_type=2&back_type=<?php echo $this->_var['back_type_money']; ?>" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-search"><img src="images/tuikuan.png"></i>
                <span class="global-nav__nav-tit">新退款</span>
                <span class="global-nav__nav-shop-cart-num"><?php if ($this->_var['footer_order']['return_money']): ?><?php echo $this->_var['footer_order']['return_money']; ?><?php else: ?>0<?php endif; ?></span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="back.php?act=back_list&order_type=2&back_type=<?php echo $this->_var['back_type_goods']; ?>" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-shop-cart"><img src="images/tuihuo.png"></i>
                <span class="global-nav__nav-tit">新退货</span>
                <span class="global-nav__nav-shop-cart-num"><?php if ($this->_var['footer_order']['return_goods']): ?><?php echo $this->_var['footer_order']['return_goods']; ?><?php else: ?>0<?php endif; ?></span>
            </a>
        </div>
    </div>
</div>
</footer>