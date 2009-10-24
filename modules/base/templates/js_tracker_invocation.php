// set base URL
OWA.setSetting('baseUrl', '<?php echo owa_coreAPI::getSetting('base', 'public_url');?>');
// Create a tracker
OWATracker = new OWA.tracker(<?php if ($params_object): echo $params_object; ?><?php endif;?>);
<?php if ($endpoint): ?>
OWATracker.setEndpoint('<?php echo $endpoint;?>');
<?php endif;?>
OWATracker.setSiteId('<?php echo $site_id;?>');
<?php if (!$do_not_log_pageview): ?>
OWATracker.trackPageView();
<?php endif;?>
<?php if (!$do_not_log_clicks): ?>
OWATracker.trackClicks();
<?php endif;?>
<?php if (!$do_not_log_domstream): ?>
OWATracker.trackDomStream();
<?php endif;?>