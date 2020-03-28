<?php if ( is_active_sidebar( 'sidebar-1' ) ) : dynamic_sidebar( 'sidebar-1' ); endif; ?>
<div class="widget-newsletter">
	<h3>Langganan, Mau?</h3>
	<p>Untuk mendapatkan update artikel terbaru dari blog ini melalui inbox, Masukan Email kalian disini lalu klik SUBSCRIBE !</p>
	<form onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=muhammadniko', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow">
        <input style="width:70%" name="email" type="text">
        <input value="muhammadniko" name="uri" type="hidden">
        <input name="loc" value="en_US" type="hidden">
        <input style="width:70%" value="SUBSCRIBE" type="submit">
      </form>
</div>