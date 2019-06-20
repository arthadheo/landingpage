
<!-- section one -->
<section class="section-one zm-bg-light" id="home1">
	<div class="container">
		<div class="zm-content-one">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="zm-content-title">Blog</h1>
					<p class="zm-content-subtitle zm-mb_r-3">Temukan artikel menarik
                        tentang gamifikasi disini.
                    </p>
				</div>
            </div>
            <div class="row">
            <?php
                $rss_feed = simplexml_load_file("https://medium.com/feed/@jeageriiot");
                if(!empty($rss_feed)) {
                    $i=0;
                    foreach ($rss_feed->channel->item as $feed_item) {
                        // if($i>=10) break;
                    ?>
                    <div><a class="feed_title" href="<?php echo $feed_item->link; ?>"><?php echo $feed_item->title; ?></a></div>
                    <div><?php echo implode(' ', array_slice(explode(' ', $feed_item->description), 0, 14)) . "..."; ?></div>
                    <br />
                    <br />
                    <?php		
                    $i++;	
                    }
                    print_r($rss_feed);
                }
            ?>
            </div>
		</div>
	</div>
</section>
<!-- /section one -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124227942-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124227942-1');
</script>
