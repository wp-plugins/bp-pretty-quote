=== BP Pretty Quote ===
Contributors: densey
Donate Link: http://beyond-paper.com/bp-pretty-quote-wordpress-plugin/
Tags: shortcode,quotes,pullquotes
Requires at least: 4.0
Tested up to: 4.2.1
Stable tag: /trunk/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

BP Pretty Quote provides shortcodes that result in nicely formatted quote blocks.  

== Description ==

BP Pretty Quote provides shortcodes that result in nicely formatted quote blocks.  

Seven styles are available:

1. Default
2. Leather
3. Swoosh
4. Balloon
5. Vinyl
6. Polaroid
7. Playbill

Thanks to [msurguy](http://bootsnipp.com/snippets/featured/dynamic-avatar-blur) on Bootsnipp for #1.

Numbers 2-7 are via [CoDrops](http://tympanus.net/codrops/2012/07/25/modern-block-quote-styles/) with some minor changes.

[Visit BP Pretty Quote]
(http://beyond-paper.com/bp-pretty-quote-wordpress-plugin/) for more information and support.
 

== Installation ==

From your WordPress dashboard

1. Visit 'Plugins->Add New'
2. Search for 'BP Pretty Quote'
3. Activate BP Pretty Quote from your Plugins page

From WordPress.org

1. Download BP Pretty Quote
2. Extract the folder 'bp-pretty-quote' to your desktop
3. Upload the folder 'bp-pretty-quote' to your '/wp-content/plugins' directory, using your favorite method (ftp, sftp, scp, etc...)
4. Activate BP Pretty Quote from your Plugins page. 

**To Use**

BP Pretty Quote can be put on a Post or Page using the following code:

[bpiq style = "leather" width="width" position="float position" color="background color" textcolor="text color" image="theimage.jpg" alt="alt text for image" sourcename="the name of the source" source="the_source.html"  author="The Author"]The Quotation Body[/bpiq]

The options are as follows:

-**style**:  default | leather | swoosh | balloon | vinyl | polaroid | playbill  *(Default is default)*

-**align**: left | right | center  *(Default is right)*

-**width**:  width in px or %. *(Default is 30%)*

-**author**: The author of the quote  *(Required)*

-**sourcename**: The name of the source of the quote (i.e. a book title)

-**source**:  The url for the sourcename (i.e. link to book on Amazon)

-**image**: The url to the image.  Use full url. (i.e. http://something.com/myurl.jpg)

-**alt**:  The alt text for the image

-**color**: Background color for the block.  Only for default style currently.

-**textcolor**: Text color for the block.  Only for default style currently.

The quotation itself goes between the [bpiq] [/bpiq] tags.

Required for all styles: quote and the author.  If not provided, a Mark Twain quote appears.

Required for Default, Leather, Balloon and Playbill: image.

**Styling**

Vinyl and Playbill split the quote using <span> tags.  Apply the <span></span> around the last part of the quote, like this:

Quotation, n: The act of repeating erroneously <span>the words of another.</span>  (see screenshot for Vinyl) or like this:

Quotation, n: <span>The act of repeating erroneously the words of another.</span>  (see screenshot for Playbill)

Both Polaroid and Playbill may need some tweaking, depending on your content.  

*Polaroid*

Sometimes the author and source fall off the bottom.  To tweak, apply your styles to:

.bp-attribution  to move the entire block up apply a negative top margin.

.bp-wrap cite to change the text styling for the source

.polaroid .bp-author to change the text styling for the author.

*Playbill*

The author and source in the diagonal bar may need adjusting.  I've found that playing around with this style will fix issues:

.playbill .bp-attribution {
     transform: rotate(-40deg) translate(190px, 90px);
}

Specifically, change the translate dimensions.  The first (190px) moves the bar left and right so the text is better centered.  The second number (90px) moves the bar farther up & left (smaller number) or down & right(bigger number).  

== Frequently Asked Questions ==

To come



== Screenshots ==

1. Default
2. Leather
3. Swoosh
4. Balloon
5. Vinyl
6. Polaroid
7. Playbill

== Changelog ==

= 1.0 =
* Initial release.

== Upgrade Notice ==
= =