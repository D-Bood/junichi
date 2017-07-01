		<footer id="footer" class="inner">
<<<<<<< HEAD
			&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> 由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动 Theme is <a href="https://github.com/siseboy/junichi" target="_blank">Junichi</a>
=======
			&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> 由 <a href="http://www.typecho.org" target="_blank">Typecho</a> 强力驱动 Theme is <a href="https://uefeng.com" target="_blank">Junichi</a>
>>>>>>> eadc892adeb7ec1612f2a20f51fd0a3a5450ea62
		</footer>
	</div>
</div>
<?php $this->footer(); ?>

<script src="<?php $this->options->themeUrl('js/functions.js'); ?>"></script>
<?php if(!empty($this->options->search_form) && in_array('Pjax', $this->options->search_form)): ?>
<script src="<?php $this->options->themeUrl('js/prism.js'); ?>" data-no-instant></script>
<script src="//cdn.staticfile.org/instantclick/3.0.1/instantclick.min.js" data-no-instant></script>
<script data-no-instant>
	InstantClick.on('change', function(isInitialLoad) {
		if (isInitialLoad === false) {
			if (typeof Prism !== 'undefined') Prism.highlightAll(true,null);
			if (typeof ga !== 'undefined') ga('send', 'pageview', location.pathname + location.search);
		}
	});
	InstantClick.init();
</script>
<?php else : ?>
<script src="<?php $this->options->themeUrl('js/prism.js'); ?>"></script>
<?php endif; ?>
</body>
</html>
