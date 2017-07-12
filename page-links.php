<?php
    /**
    * links
    *
    * @package custom
    */
    $this->need('header.php'); ?>

	<div class="mid-col">
		<div class="mid-col-container">
			<div id="content" class="inner">
				<article class="post post-archives">
					<h1 class="title"><?php $this->title() ?></h1>
					<div class="entry-content">	
                            <div id="linkwrapper">
                            <span>部署了 HTTPS 的小伙伴们会按照申请顺序优先放在前排！<span><span style="background: #5d686f">オフ会：0人</span><br>
                            <?php Links_Plugin::output('SHOW_HTTPS', 0, 'https'); ?>
                            <?php Links_Plugin::output('SHOW_MIX', 0, 'http'); ?>
                            <p>欢迎各位到“关于”页面留言申请！</p>
                            </div>                       
					</div>
				</article>
			</div>
		</div>


<?php $this->need('footer.php'); ?>
