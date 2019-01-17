<!DOCTYPE html>
<html>
	<head>
		<title>嘰咕 Park – 大學生論壇</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<style>
			html{
				margin: 0px;
			}


			body {
				margin: 0px;
				width: 375px;
				
			}

			<?php if($top_sex == "M" && $bottom_sex == "M"):?>

			.top-image-block
			{
				background-image: url(http://forum.public.s3.hicloud.net.tw/public/system/cp_image/04-a.png);	
			}	

			.bottom-image-block
			{
				background-image: url(http://forum.public.s3.hicloud.net.tw/public/system/cp_image/04-b.png);	
			}

			<?php elseif($top_sex == "F" && $bottom_sex == "F"):?>

			.top-image-block
			{
				background-image: url(http://forum.public.s3.hicloud.net.tw/public/system/cp_image/03-a.png);	
			}	

			.bottom-image-block
			{
				background-image: url(http://forum.public.s3.hicloud.net.tw/public/system/cp_image/03-b.png);	
			}
			<?php else: ?>
			.top-image-block
			{
				background-image: url(http://forum.public.s3.hicloud.net.tw/public/system/cp_image/01-a.png);	
			}	

			.bottom-image-block
			{
				background-image: url(http://forum.public.s3.hicloud.net.tw/public/system/cp_image/01-b.png);	
			}


			<?php endif; ?>


			.top-image-block,.bottom-image-block
			{
				width: 327px;
			    height: 222px;
			    padding: 24px;
			    
		        background-repeat: no-repeat;
		        background-size: auto 100%;
		        background-position: center center;
			}

			.bottom-image-block
			{
				position: relative;
			}

			.to_bottom
			{
				position: absolute;
			    bottom: 0px;
			    padding-bottom: 24px;
			}

			.top-image-block{
				
				margin-bottom: 2px;
		        
			}
			.t-i-title,.b-i-title{
				
				line-height: 22px;
				font-size: 14px;
 				font-weight: 500;
				
				color: rgba(255, 255, 255, 0.5);
			}
			.t-i-star-block{
				padding-top: 8px;
			}

			.b-i-star-block{
				padding-top: 8px;
				height: 30px;
			}
			
			.t-i-star,.b-i-star{
				width: 24px;
			    height: 24px;
			    float: left;
			    margin-right: 8px;
		        background-repeat: no-repeat;
		        background-size: auto 100%;
		        background-position: center center;
		        background-image: url(http://forum.public.s3.hicloud.net.tw/public/system/cp_image/star.png);	
			}
			.t-i-line-1{
				padding-top: 27px;
			}

			
			
			.t-i-l-1-line,.b-i-l-1-line
			{
				font-size: 16px;
			    font-weight: 300;
			    line-height: 1.5;
			    text-align: left;
			    color: #ffffff;
			    word-wrap: break-word;
			    width: 230px;
			}
			.b-i-l-1-line
			{
				padding-top: 34px;
			}
			.t-i-line-2{
				padding-top: 108px;
				max-width: 300px;
				margin: 0px auto;
			}
			.t-i-l-2-line{
				font-size: 24px;
				font-weight: 300;
				line-height: 1.5;
				text-align: center;
				color: #ffffff;
				word-wrap: break-word;
			}
			.t-i-line-3{
				padding-top: 108px;
				max-width: 330px;
				margin: 0px auto;
			}
			.t-i-l-3-line{
				font-size: 16px;
				font-weight: 300;
				line-height: 1.5;
				text-align: center;
				color: #ffffff;
				word-wrap: break-word;
			}
			
			.b-i-line-2{
				height: 72px;
				max-width: 300px;
				margin: 0px auto;
			}
			.b-i-l-2-line{
				font-size: 24px;
				font-weight: 300;
				line-height: 1.5;
				text-align: center;
				color: #ffffff;
				word-wrap: break-word;
			}
			.b-i-line-3{
				height: 72px;
				max-width: 330px;
				margin: 0px auto;
			}
			.b-i-l-3-line{
				font-size: 16px;
				font-weight: 300;
				line-height: 1.5;
				text-align: center;
				color: #ffffff;
				word-wrap: break-word;
			}

			
			
			
			

		</style>
	</head>
	<body>
		<div class="top-image-block">
			<div class="t-i-title"><span><?= $schoolA ?></span>&nbsp;<span><?= $studentA ?></span>&nbsp;<span>給</span><br/><span><?= $schoolB ?></span>&nbsp;<span><?= $studentB ?></span></div>
			<div class="t-i-star-block">
				<?php for ($i = 0 ; $i < $top_star ; $i ++ ): ?>
					<div class="t-i-star"></div>
				<?php endfor; ?>
				<div class="clear"></div>
			</div>
			
			<div class="t-i-line-1">
				<div class="t-i-l-1-line"><?= $top_line ?></div>
			</div>
			
		</div>

		<?php if(!$half): ?> 
		<div class="bottom-image-block">
			
				<div class="b-i-line-1">
					<div class="b-i-l-1-line"><?= $bottom_line ?></div>
				</div>
		
			<div class="to_bottom" >
				<div class="b-i-star-block">
					<?php for ($i = 0 ; $i < $bottom_star ; $i ++ ): ?>
						<div class="b-i-star"></div>
					<?php endfor; ?>
					<div class="clear"></div>
				</div>


				<div class="b-i-title"><span><?= $schoolB ?></span>&nbsp;<span><?= $studentB ?></span>&nbsp;<span>給</span><br/><span><?= $schoolA ?></span>&nbsp;<span><?= $studentA ?></span></div>
			</div>
		</div>

		<?php endif; ?>
	</body>
</html>