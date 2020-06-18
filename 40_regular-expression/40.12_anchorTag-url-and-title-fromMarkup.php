<?php
$markup = <<<STR
<li id="menu-item-13887" class="darkmode_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-13887"><a href="?darkmode"><i class="fas fa-moon"></i> Dark mode</a></li>
<li id="menu-item-13888" class="darkmode_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-13888"><a href="?lightmode"><i class="fas fa-sun"></i> Light mode</a></li>

<div class="cleaner"></div>
</div>
<div class="istck_wrap_header">
<a target="_blank" href="https://iStockphoto.6q33.net/ZDYog" rel="nofollow" class="istck_logo"><img src="https://picjumbo.com/wp-content/themes/picjumbofree/data/istock-logo.jpg?v=2.1" alt="Stock Photo Selection from iStock" /></a>
<istock-affiliate api-key="2kqxadg4psxravjzbkebquuf" affiliate-id="1982588" search-phrase="healthy" item-count="9" orientation="horizontal" image-style="photography" title="" />
</div>
<div class="big_header">
<div class="container">
<h1>Beautiful free stock photos</h1>
<h2>Download <strong>free stock photos</strong>, <strong>backgrounds</strong> and <strong>free high-resolution images</strong> for&nbsp;personal and&nbsp;commercial&nbsp;use</h2>
<div class="tag_cloud">
<a href="https://picjumbo.com/free-stock-photos/business/" title="Free Business Photos">Business</a>
<a href="https://picjumbo.com/free-stock-photos/abstract/" title="Free Abstract Photos">Abstract</a>
<a href="https://picjumbo.com/free-photos/backgrounds/" title="Free Backgrounds">Backgrounds</a>

<a href="https://picjumbo.com/free-photos/winter/" title="Free Winter Photos">Summer</a>
<a href="https://picjumbo.com/free-stock-photos/food-and-drink/" title="Free Food Photos">Food</a>
<a href="https://picjumbo.com/free-stock-photos/nature/" title="Nature Images">Nature</a>
<a href="https://picjumbo.com/free-stock-photos/animals/" title="Animals Photos">Animals</a>
<a href="https://picjumbo.com/free-photos/flatlay/" title="Free Flat Lay Images">Flatlay</a>
<a href="https://picjumbo.com/free-photos/winter/" title="Free Winter Photos">Winter</a>
<a href="https://picjumbo.com/free-photos/room-for-text/" title="Photos with Room for Text">Space for Text</a>
<a href="https://picjumbo.com/free-photos/vintage/" title="Free Vintage Photos">Vintage</a>
</div>
STR;

$markup2 = file_get_contents( "https://picjumbo.com" );
// preg_match_all( '-<a href="(https?://[^"]+)" title="([^"]+)-', $markup, $matches );
// preg_match_all( '/<a href="(https?:\/\/[^"]+)" title="([^"]+)/', $markup, $matches );
preg_match_all( '/<a href="(https?:\/\/[^"]+)" title="([^"]+)/', $markup2, $matches );
print_r( $matches[1] );
print_r( $matches[2] );