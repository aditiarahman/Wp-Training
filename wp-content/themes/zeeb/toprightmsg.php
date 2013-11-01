<div id="topmsg">
					
<?
/* This code retrieves all our admin options. */
global $options;
foreach ($options as $value) {
	if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>

<? /* If the welcome message ISN'T disabled */
if ($zeeb_welcome_disable == "false") { ?>

    
    <? /* Same again for the message. */
	if ($zeeb_welcome_message) { ?>
        <p><? print $zeeb_welcome_message; ?></p>
    <? } else { ?>
    	<p>You can update this text in your control panel, under Theme Options. Nam massa. Ut tempor augue non sapien lobortis aliquam. Maecenas.</p>
    <? } ?>
    
<? } else { ?>

	<!-- You could insert something here which will display when the box IS checked. -->

<? } ?>

<!-- end header -->
				
					</div>