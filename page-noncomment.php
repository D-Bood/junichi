<?php
    /**
    * non-comment
    *
    * @package custom
    */
    $this->need('header.php'); ?>

	<div class="mid-col">
		<div class="mid-col-container">
            <article class="post post-19" itemscope="" itemtype="http://schema.org/Article">
				<h1 class="title" itemprop="headline"><?php $this->title() ?></h1>
				<div class="entry-content" itemprop="articleBody">
					<?php $this->content(); ?>
				</div>
            </article>
		</div>
    
<?php $this->need('footer.php'); ?>