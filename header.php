<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<!--
      y++++++++++++++++++dN        さマかキ　ぼぼあク
      s::::::::::::::::::yN        さグわハ　くくしロ
      y++++++++++++++++++hN        るロらダ　ららたマ
      o/dyyyyyyyyyyyyyhd-yN        とのをが　はをのグ
      o/d//++//////++/od-yN        　　　　　　　　ロ
      o/d//sh//////do/od-yN        ではつこ　こめおが
      o/d//sh//////do/od-yN        きりきこ　ろがひ　　
      o/d//sh//////do/od-yN        しにやま　さけると
      o/d//os//////y+/od-yN        すはぶで　れてすん
     d+/hyyyyyyyyyyyyyyh-ss        る　っ　　る　ぎで
   No:/ooooooooooooo:/ooo:/sN      　どてと　んふにく
   y---::+++++++++++:oddd/-:yN     　く　ん　だっ　る
 Ny------+++++++++++::+++:---dN    　がとで　　てと
Ndo--ydy-ddo/dd/-/dd/oddd/---y N   　あんく　　くん
 s:--/+/-//::++:-/hh/:///:---:yN   　るでる　　るで
Nho:-+osooosssss/--------yo--:yN   　　く　　　　く
 Nh+--:+dsssyss/:-------h+:--+hN   　　る　　　　る
   Nyyyyd++/:-sssss:-/ssd+:::dN    　　ん　　　　ん
      o-----+d`````osyddsh         　　だ　　　　だ
      o-----/hss/---ohdh/hN
      o---------/ooooo+--yN
      o--------s+--------yN
      s:------:yo:------:yN
      s:----::dNNy:-----:yN
      s///////dNNh///////hN
      NNNNNNNNN NNNNNNNNNNN
-->
<html>
<head>
<meta charset="<?php $this->options->charset(); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="keywords" content="<?php $this->keywords() ?>" />
<script src="//at.alicdn.com/t/font_0l099gu8m5nrk9.js"></script>
<?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
<!--[if lt IE 9]>
	<script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
	<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php if($this->options->favicon): $this->options->favicon(); else: $this->options->themeUrl('images/touxiang.png'); endif; ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css?v=170120'); ?>">
<title><?php $this->archiveTitle(array(
	'category'  =>  _t(' %s '),
	'search'    =>  _t(' %s '),
	'tag'       =>  _t(' %s '),
	'author'    =>  _t(' %s ')
	), '', ' - '); ?><?php $this->options->title(); ?></title>
</head>
<body>
<!--[if lt IE 9]>
	<div class="browsehappy" role="dialog">你正在使用一个过时的浏览器，为了正常的访问, 请<a href="http://browsehappy.com/" target="_blank">升级你的浏览器</a>以查看此页面。</div>
<![endif]-->
<div class="container">
    <div class="left-col" style="background: #404040 <?php if($this->options->iosicon): echo 'url('.$this->options->iosicon.')'; endif; ?>; background-size: cover">
        <header id="header">
            <div class="profilepic"><a href="/" style="background-image: url(<?php if($this->options->touxiang): $this->options->touxiang(); else: $this->options->themeUrl('images/touxiang.png');endif; ?>);"></a></div>
            <div id="navi">
            <h1><a href="/"><?php $this->options->title() ?></a></h1>
            <p class="subtitle"><?php $this->options->slogan(); ?></p>
            <nav id="main-nav">
                <ul>
                   <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
                   <li><a href="<?php $this->options->siteUrl(); ?>music">音乐</a></li>
                   <li><a href="<?php $this->options->siteUrl(); ?>archive">归档</a></li>
                   <li><a href="<?php $this->options->siteUrl(); ?>about">关于</a></li>
                </ul>
            </nav>
            <nav id="sub-nav">
                <div class="social">
                    <?php if ($this->options->socialgithub): ?>
                    <a class="social github" target="blank" href="<?php $this->options->socialgithub(); ?>"><i class="iconfont icon-github"></i></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialgoogle): ?>
                    <a class="social google-plus" target="blank" href="<?php $this->options->socialgoogle(); ?>"><i class="iconfont icon-google"></i></a>
                    <?php endif; ?>
                    <a class="social rss" target="blank" href="<?php $this->options->siteUrl(); ?>feed/"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-mes-rss"></use></svg></a>
                    <a class="social niconico" target="blank" href="http://www.nicovideo.jp/mylist/35792174"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-niconico"></use></svg></a>
                    <?php if ($this->options->socialtwitter): ?>
                    <a class="social twitter" target="blank" href="<?php $this->options->socialtwitter(); ?>"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-icon_twitter"></use></svg></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialwechat): ?>
                    <a id="wechat-toggle" class="social wechat" href="javascript:"><i class="iconfont icon-wechat"></i></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialqq): ?>
                    <a class="social qq" target="blank" href="tencent://message/?uin=<?php $this->options->socialqq(); ?>&Site=junichi&Menu=yes"><i class="iconfont icon-qq"></i></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialweibo): ?>
                    <a class="social weibo" target="blank" href="<?php $this->options->socialweibo(); ?>"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-icon_xinlang1"></use></svg></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialmusic): ?>
                    <a class="social music" target="blank" href="<?php $this->options->socialmusic(); ?>"><i class="iconfont icon-music"></i></a>
                    <?php endif; ?>
                    <a id="search-toggle" class="social search" href="javascript:"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-search1"></use></svg></a>
                    <form id="search" method="post" action="/" role="search">
                        <input type="text" class="input" name="s" required="true" placeholder="...Search">
                    </form>
                    <div id="wechat">
                        <img src="<?php $this->options->socialwechat(); ?>" />
                    </div>
                </div>
            </nav>
            </div>
</header>
</div>
