<?php defined('DIR') OR exit();
    if (empty($storage->product)) {
        $section = $storage->section;
    } else {
        $section = $storage->product;
    }
    $section['pid'] = $storage->product['id'];
    $section['id'] = $storage->section['id'];
    empty($section["meta_keys"]) AND $section["meta_keys"] = s('keywords');
    empty($section["meta_desc"]) AND $section["meta_desc"] = s('description');
?>
<?php
	$url="";
	$urlparts=array();
	foreach($_GET as $k=>$v) {
        if($k!='product')
		  $urlparts[]=$k."=".$v;
	}
	if(count($urlparts)>0)
		$url='?'.implode("&",$urlparts);
    $product=NULL;
    if(isset($_GET["product"])) 
        $product=$_GET["product"];

	$photo = "";
	$desc = "";
	$producttitle = "";
	$prod = 0;
	if(isset($_GET["product"])) {
		$prod = $_GET["product"];
		$cat = db_fetch("select * from catalogs where id = '".$_GET["product"]."' and language = '".l()."'");
		$photo = $cat["photo1"];
		$producttitle = $cat["title"];
		$desc = $cat["description"];
		if($desc=="") $desc = $producttitle;
	}
	if($photo=="") $photo = href().WEBSITE."/images/logo.png";
	$pageid = href($storage->section['id']).(($prod>0) ? "?product=".$_GET["product"]:"");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=360, user-scalable=no" />
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->

	<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
    
    <base href="<?php echo href(); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="_website/img/favicon.ico">
    <title><?php echo strip_tags(s('sitetitle').' - '.$section["title"]); ?></title>
    <meta name="keywords" content="<?php echo s('keywords').', '.$section["meta_keys"] ?>" />
    <meta name="description" content="<?php echo s('description').', '.$section["meta_desc"] ?>" />
    <meta name="robots" content="index, follow" />
    
    <meta property="og:title" content="<?php echo strip_tags($section["title"]).' - '.s('sitetitle');?>" />
    <meta property="og:image" content="<?php echo (!empty($section["image1"])) ? $section["image1"] : href().WEBSITE."/_website/img/logo.png";?>" />
    <meta property="og:description" content="<?php echo $section["meta_desc"] ?>"/>
    <meta property="og:url" content="<?php echo href($storage->section['id'], array(), '', $section["pid"]);?>" />
    <meta property="og:site_name" content="<?php echo s('sitetitle'); ?>" />
    <meta property="og:type" content="Website" />

	<script src="_website/js/jquery-2.2.4.min.js"></script> 
    <script src="_website/js/jquery.easing.min.js"></script> 
    <script src="_website/js/bootstrap.js" type="text/javascript"></script>
    <script src="_website/js/wow.min.js" type="text/javascript"></script>
    <script src="_website/js/slick.min.js" type="text/javascript"></script>
    <script src="_website/js/fancybox.min.js" type="text/javascript"></script>
    <!-- <script src="http://bellevuebatumi.com/_website/js/imagesloaded.pkgd.min.js" type="text/javascript"></script> -->
    <script src="_website/js/jquery.maphilight.js" type="text/javascript"></script>
    <script src="_website/js/jquery.rwdImageMaps.min.js" type="text/javascript"></script>
    <script src="_website/js/parallax.js" type="text/javascript"></script>
    <script src="_website/js/scripts.js" type="text/javascript"></script>
	
	
    <link href="_website/css/bootstrap.css" type="text/css" rel="stylesheet" media="all" />
    <link href="_website/css/font-awesome.css" type="text/css" rel="stylesheet" media="all" />
    <link href="_website/css/fancybox.min.css" type="text/css" rel="stylesheet" media="all" />
    <link href="_website/css/animate.css" type="text/css" rel="stylesheet" media="all" />
    <link href="_website/css/slick.css" type="text/css" rel="stylesheet" media="all" />
    <link href="_website/css/fonts.css" type="text/css" rel="stylesheet" media="all" />
    <link href="_website/css/style.css" type="text/css" rel="stylesheet" media="all" /> 
    <link href="_website/css/responsive.css" type="text/css" rel="stylesheet" media="all" />   
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">	
 
	<?php if(l()=='ge'){?>
	 
	<?php }else if(l()=='en'){ ?>
		<link href="_website/css/en.css" type="text/css" rel="stylesheet" media="all" />
	<?php }else{ ?>
		<link href="_website/css/ru.css" type="text/css" rel="stylesheet" media="all" />
	<?php } ?>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PQSVW9D');</script>
    <!-- End Google Tag Manager -->

	<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5cacdc3e2c4f3b001126f188&product=inline-share-buttons' async='async'></script>
    
</head>
<body class="<?php echo (($storage->section['id']!= '1') ? '' : 'HomeBody'); ?>">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQSVW9D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

<div class="modal fade" id="CallModal" tabindex="-1" role="dialog" aria-labelledby="CallModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content"> 
            <div class="modal-body"> 
            	<div class="Head">
            		<?php echo l('Request.a.call');?>
            		<div class="CloseModal" data-dismiss="modal" aria-label="Close"></div>
            	</div> 
            	<div id="gRequestACall"></div>
            	<?php $_SESSION["token"] = md5(time()."MziuriGardens"); ?>
            	<input type="hidden" class="token"  id="token" value="<?=$_SESSION["token"]?>">
                <div class="RequestACall">
                	<div class="form-group">
                		<input type="text" placeholder="<?php echo l('name');?>" class="InputStyle gname">
                	</div>
                	<div class="form-group">
                		<select class="country_code InputStyle" id="country_code" style="width: 45%; float: left; background-color: white">
                		</select>
                		<input type="text" placeholder="<?php echo l('phone.number');?>" class="InputStyle gphone" style="width: 50%; float: right">
                	</div>
                	<div class="form-group">
                		<button type="button" class="SubmitButton gsubmit" data-success="<?php echo l('success.message');?>"><?php echo l('send');?> <label><?php echo l('messages');?></label><span></span></button>
                	</div>
                </div>
            </div> 
        </div>
    </div>
</div>

<div class="modal fade" id="PDFModal" tabindex="-1" role="dialog" aria-labelledby="PDFModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content"> 
            <div class="modal-body"> 
            	<div class="Head">
            		<?php echo l('request.presentation');?>
            		<div class="CloseModal" data-dismiss="modal" aria-label="Close"></div>
            	</div> 
                
 					<div class="ml-form-embed"
					  data-account="1480552:j7b3o1n7i8"
					  data-form="1298288:k3v6j3">
					</div>
                 
            </div> 
        </div>
    </div>
</div>
 

<div class="HeaderDiv InlineFlex HeaderActive"><!--  -->
	<div class="container-fluid Padding0">
		<div class="container Padding0">
			<a href="<?php echo href('1'); ?>" class="Logo InlineBlock"></a>
			<a href="javascript: history.go(-1)" class="BackIcon"><?php echo l('back');?></a>
			<div class="MainMenu InlineBlock">
				<div class="MobileFlex">
					<?php echo main_menu(); ?>
					<div class="MobileLang">
						<?php if(l()=='ge'){?>
							<a href="<?php echo href($storage->section['id'], array(), 'en', $product).$url;?>">en</a>
							<a href="<?php echo href($storage->section['id'], array(), 'ru', $product).$url;?>">ru</a>
						<?php }else if(l()=='en'){ ?>
							<a href="<?php echo href($storage->section['id'], array(), 'ge', $product).$url;?>">ge</a>
							<a href="<?php echo href($storage->section['id'], array(), 'ru', $product).$url;?>">ru</a>
						<?php }else{ ?>
							<a href="<?php echo href($storage->section['id'], array(), 'ge', $product).$url;?>">ge</a>
							<a href="<?php echo href($storage->section['id'], array(), 'en', $product).$url;?>">en</a>
						<?php } ?>
					</div>
				</div> 
			</div>			
			<div class="HeadRight">
				<a href="#" class="CamIcon"></a>
				<div class="LanguageDiv">
					<input type="hidden" name="input_lang" id="input_lang" value="<?=l()?>" />
					<?php if(l()=='ge'){?>
						<a href="<?php echo href($storage->section['id'], array(), 'en', $product).$url;?>">en</a>
						<a href="<?php echo href($storage->section['id'], array(), 'ru', $product).$url;?>">ru</a>
					<?php }else if(l()=='en'){ ?>
						<a href="<?php echo href($storage->section['id'], array(), 'ge', $product).$url;?>">ge</a>
						<a href="<?php echo href($storage->section['id'], array(), 'ru', $product).$url;?>">ru</a>
					<?php }else{ ?>
						<a href="<?php echo href($storage->section['id'], array(), 'ge', $product).$url;?>">ge</a>
						<a href="<?php echo href($storage->section['id'], array(), 'en', $product).$url;?>">en</a>
					<?php } ?>
				</div>
				<div class="ButtonPDF Tooltip" data-toggle="modal" data-target="#PDFModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo l('request.presentation');?>"></div>
			<!-- fancybox -->	<a href="#" class="ButtonVideo Tooltip" data-toggle="modal" data-target="#VideoModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo l('watch.video');?>"></a>
				<div class="ButtonCall RequestCallButton Tooltip" data-toggle="modal" data-target="#CallModal" data-toggle="tooltip" data-placement="bottom" title="<?php echo l('Request.a.call');?>"></div>
                
<!--				<div class="Button" data-toggle="modal" data-target="#CallModal">
					<div><span><?php echo s('telephone'); ?></span><label><?php echo l('Request.a.call2');?></label></div>
				</div> -->               
                
			</div>
		</div>
		<div class="Hamburger"></div>
		<div class="CallMobile" data-toggle="modal" data-target="#CallModal"></div>
		<div class="VideoMobile" data-toggle="modal" data-target="#VideoModal"></div>
		<div class="PDFMobile" data-toggle="modal" data-target="#PDFModal"></div>
	</div>
</div>

<?php echo html_decode($storage->content); ?>

<div class="FooterContact InlineBlock">
	<div class="container Padding0">
		<div class="row">
			<div class="col-sm-3">
				<div class="Contact1">
					<a href="<?php echo href('1');?>" class="FootLogo InlineBlock"></a>
					<div class="Title InlineBlock"><?php echo l('Sales_offices');?><span><?php echo l('contacts');?></span></div>
					<div class="ContactInfo InlineBlock">
						<li class="Mobile"><span><i class="fas fa-phone-volume"></i></span>						
							<a href="tel:<?php echo s('telephone'); ?>"><?php echo s('telephone'); ?></a>
						</li>
						<li class="Mobile"><span><i class="fab fa-viber"></i></span>
							<a href="viber://add?number=<?php echo s('viber'); ?>"><?php echo s('viber'); ?></a>
						</li>
						<li class="Mobile"><span><i class="fab fa-whatsapp"></i></span>
							<a href="https://wa.me/<?php echo s('whatsapp'); ?>"><?php echo s('whatsapp'); ?></a>
						</li>
						<li class="Email"><?php echo s('mail'); ?></li>
						<li class="Address"><?php echo s('address'); ?></li> 
					</div>
					<div class="FootSocial InlineBlock">
						<a href="<?php echo s('facebook');?>" target="_blank">Facebook</a>
						<a href="<?php echo s('instagram');?>" target="_blank">Instagram</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="<?php echo s('map.alphabet'); ?>" class="MapLink1" target="_blank"></a>
	<a href="<?php echo s('map.makhinjauri'); ?>" class="MapLink2" target="_blank"></a>
</div>





<div class="FooterDiv InlineFlex">
	<div class="ScrollTop"><div class="Text">back to <span>up</span></div></div>
	<div class="container">
		<div class="col-sm-6">
			<div class="CopyRight ColorWhite">&copy; mziuri <span>gardens</span> 2019</div>
		</div>
		<div class="col-sm-6 text-right">
			<div class="CreadetBy ColorWhite"><span class="InlineBlock">created</span> <a href="http://shindi.ge/" class="InlineBlock" target="_blank"></a></div>
		</div>
	</div>
</div>

<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.com/b10586129/crm/site_button/loader_1_yd8pq4.js');
</script>
<script src="_website/js/gscript.js?t=<?=time()?>" charset="utf-8" type="text/javascript"></script>

<!-- MailerLite Universal -->
<script>
(function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
_.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

var ml_account = ml('accounts', '1480552', 'j7b3o1n7i8', 'load');
</script>
<!-- End MailerLite Universal -->


<style>
#mlb2-1298288.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody, #mlb2-1298288.ml-form-embedContainer .ml-form-embedWrapper .ml-form-successBody {
	padding:0 !important
}
#mlb2-1298288.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-fieldRow input {
	border:none !important;
	border-bottom:solid #302d23 1px !important;
	width:100% !important;
	height:50px !important;
	line-height:50px !important;
	color:#3a3c3e !important;
	font-size:14px !important;
	font-family:RobotoNusx !important;
	padding-left:0 !important;
}
#mlb2-1298288.ml-form-embedContainer .ml-form-embedWrapper .ml-form-embedBody .ml-form-embedSubmit button {
	height:60px;
}
</style>

</body>
</html>