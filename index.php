<!DOCTYPE html>
<html lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="火舞,愛工火舞,愛知工業大学,パフォーマンス,愛知">  
	<meta name="description" content="愛知工業大学火舞部のページです"> 
	<title>愛工火舞</title>
	<link href="img/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/ait-himai.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/ait-himai.js"></script>
	<script type="text/javascript"> var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-34540801-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })(); </script>
</head>
<body data-spy="scroll" data-target=".navbar">
	<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="#top">愛工火舞</a>
				<div class="nav-collapse">
					<ul class="nav">
						<li><a href="#about">What's 火舞 ？</a></li>
						<li><a href="#event">出演予定</a></li>
					</ul>
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								問い合わせ
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a href="https://twitter.com/hoto17296" target="_blank">Twitter (@hoto17296)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
	
	    <div id="top">
		    <h1><img src="img/logo.png" alt="愛工火舞" /></h1>
			<ul id="topNav">
				<li><a href="#about">What's 火舞 ？</a></li>
				<li><a href="#event">出演予定</a></li>
			</ul>
			
			<div class="ninja_onebutton" id="social">
				<script type="text/javascript">
					//<![CDATA[
					(function(d){
					if(typeof(window.NINJA_CO_JP_ONETAG_BUTTON_b5294f29246aee84ffc5086ffd682ef4)=='undefined'){
					    document.write("<sc"+"ript type='text\/javascript' src='http:\/\/omt.shinobi.jp\/b\/b5294f29246aee84ffc5086ffd682ef4'><\/sc"+"ript>");
					}else{ 
					    window.NINJA_CO_JP_ONETAG_BUTTON_b5294f29246aee84ffc5086ffd682ef4.ONETAGButton_Load();}
					})(document);
					//]]>
				</script>
				<span class="ninja_onebutton_hidden" style="display:none;"></span><span style="display:none;" class="ninja_onebutton_hidden"></span>
			</div>
			
	    </div>
		
		<div class="box" id="about">
			<h1>What's 火舞 ？</h1>
			<p>
				<strong><ruby>火舞<rp>(</rp><rt>ひまい</rt><rp>)</rp></ruby></strong>とは、
				トーチを使って行うファイヤーパフォーマンスです。
			</p>
			<p>
				<strong>愛知工業大学火舞部</strong>では、毎年10月初旬に開催される大学祭の後夜祭で火舞のパフォーマンスを行なっています。
			</p>
			<iframe width="640" height="480" src="http://www.youtube.com/embed/ZicTY_TPJQk?rel=0" frameborder="0" allowfullscreen></iframe>
		</div>
		
    <div class="box" id="event">
			<h1>出演予定</h1>
<?php
$event = array(
/*  array(
    'date' => '9月28日(土)',
    'time' => '未定',
    'name' => 'なやばし夜イチ',
    'official' => array( 'title' => 'なやばし夜イチ 公式ブログ', 'url' => 'http://natsu1yoichi.blog133.fc2.com/' ),
    'location' => array( 'text' => '名古屋の真ん中を流れる堀川の西側遊歩道', 'url' => 'http://natsu1yoichi.blog133.fc2.com/blog-entry-151.html' )
  ),*/
  array(
    'date' => '10月13日(日)',
    'time' => '未定',
    'name' => '第53回愛工大祭 後夜祭',
    'official' => array( 'title' => '愛知工業大学大学祭', 'url' => 'http://aitech.ac.jp/~festival/' ),
    'location' => array( 'text' => '愛知工業大学', 'url' => 'http://aitech.ac.jp/~festival/Support/access.html' )
  ),
  array(
    'date' => '11月3日(日)',
    'time' => '未定',
    'name' => '第38回淑楓祭 後夜祭',
    'official' => array( 'title' => '第38回淑楓祭 星が丘キャンパス', 'url' => 'http://shukufuweb38.wix.com/shukutoku' ),
    'location' => array( 'text' => '愛知淑徳大学 星が丘キャンパス', 'url' => 'http://shukufuweb38.wix.com/shukutoku#!access/cjwh' )
  )
);

foreach ($event as $e): ?>

      <h2><?=$e['date']?> <?=$e['name']?></h2>
      <div class="form-horizontal">
        <div class="control-group">
          <label class="control-label">公式サイト</label>
          <div class="controls">
            <a href="<?=$e['official']['url']?>" target="_blank"><?=$e['official']['title']?></a>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label"><i class="icon-map-marker icon-white"></i>場所</label>
          <div class="controls">
            <?=$e['location']['text']?>(<a href="<?=$e['location']['url']?>" target="_blank">アクセス</a>)
          </div>
        </div>
        <div class="control-group">
          <label class="control-label"><i class="icon-time icon-white"></i>時間</label>
          <div class="controls"><?=$e['time']?></div>
        </div>
      </div>

<?php endforeach; ?>
		</div>
		
		<p id="goTop"><a href="#top"><i class="icon-arrow-up icon-white"></i> ページトップへ</a></p>

	</div>
</body>
</html>
