<?php defined('DIR') OR exit; ?>
<div class="section-title title">
    <h2><?php echo $title ?></h2>
</div>
<div id="photos" class="row content-lists">
<?php
    foreach ($children as $item):
    	$image = db_retrieve('image1', c("table.galleries"), 'menuid', $item['menutype'], 'and visibility=1 and deleted=0 and language="'.l().'" order by position desc');
    	$link = href($item['id']);
?>
    <div class="photoe col-md-3">
        <div class="photos-img">
            <a href="<?php echo $link ?>"><img src="<?php echo 'crop.php?img='.$image.'&n=6' ?>" alt="<?php echo $item['title'] ?>"></a>
        </div>
        <div class="title">
            <h3><a href="<?php echo $link ?>"><?php echo $item['title'] ?></a></h3>
        </div>
        <div class="date bl-color">
            <span><?php echo date('d.m.Y', strtotime($item['postdate'])) ?></span>
        </div>
    </div>
<?php
    endforeach;
?>
</div>