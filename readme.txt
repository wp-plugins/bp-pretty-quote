=== BP Pretty Quote ===
Contributors: densey
Donate Link: http://beyondpaper.com/bpprettyquotewordpressplugin/
Tags: shortcode,quotes,pullquotes
Requires at least: 4.0
Tested up to: 4.2.1
Stable tag: /trunk/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl2.0.html

BP Pretty Quote provides shortcodes that result in nicely formatted quote blocks.  

== Description ==

BP Pretty Quote provides shortcodes that result in nicely formatted quote blocks for your WordPress Posts and Pages.  

Eight styles are available:

1. Default
2. Leather
3. Swoosh
4. Balloon
5. Vinyl
6. Polaroid
7. Playbill
8. Pullquote

Thanks to [msurguy](http://bootsnipp.com/snippets/featured/dynamicavatarblur) on Bootsnipp for #1.

Numbers 2-7 are via [CoDrops](http://tympanus.net/codrops/2012/07/25/modernblockquotestyles/) with some minor changes.

Number 8 is via [CSS-Tricks](https://css-tricks.com/better-pull-quotes/)

[Visit BP Pretty Quote](http://beyond-paper.com/bp-pretty-quote-wordpress-plugin/) for more information and support.

=Find more BP plugins=
[BP Post to Google Map](https://wordpress.org/plugins/bp-post-to-google-map/) - Add lat/lng to posts and display on Google Map.  Premium version adds custom map markers and polylines!
[BP Expire Category](https://wordpress.org/plugins/bp-expire-category/) - Set an expiration date for a category on a Post.  Category is removed from post on that date.
[BP Filter Child Pages]() - Adds a filter to the page list to view only child pages of a particular parent.

 

== Installation ==

From your WordPress dashboard

1. Visit 'Plugins>Add New'
2. Search for 'BP Pretty Quote'
3. Activate BP Pretty Quote from your Plugins page

From WordPress.org

1. Download BP Pretty Quote
2. Extract the folder 'bpprettyquote' to your desktop
3. Upload the folder 'bpprettyquote' to your '/wpcontent/plugins' directory, using your favorite method (ftp, sftp, scp, etc...)
4. Activate BP Pretty Quote from your Plugins page. 

=To Use=

BP Pretty Quote can be put on a Post or Page using the following code:

`[bpiq style = "leather" width="width" position="float position" color="background color" textcolor="text color" image="theimage.jpg" alt="alt text for image" sourcename="the name of the source" source="the_source.html"  author="The Author"]The Quotation Body[/bpiq]`

The options are as follows:

**style**:  default | leather | swoosh | balloon | vinyl | polaroid | playbill | pullquote  *(Default is default)*

**align**: left | right | center  *(Default is right)*

**width**:  width in px or %. *(Default is 30%)*

**author**: The author of the quote  *(Required)*

**sourcename**: The name of the source of the quote (i.e. a book title)

**source**:  The url for the sourcename (i.e. link to book on Amazon)

**image**: The url to the image.  Use full url. (i.e. http://something.com/myurl.jpg)

**alt**:  The alt text for the image

**color**: Background color for the block.  Only for default style currently.

**textcolor**: Text color for the block.  Only for default style currently.

The quotation itself goes between the [bpiq] [/bpiq] tags.

Required for styles 1-7: **quote** and the **author**.  If not provided, a Mark Twain quote appears.

Required for **Default**, **Leather**, **Balloon** and **Playbill**: image.

**Pullquote** is slightly different in that the quote is being pulled out of the text on your page.  The quoted text stays inline in your content AND is pulled out to the side.  Just add the shortcode within your paragraph.

*Example:* **Bold added to show the quote**
`[bpiq style = "pullquote" position="right"]**Cras finibus, diam et rhoncus egestas, est leo faucibus ex, quis malesuada ante nulla quis nisi.**[/bpiq]` Sed interdum metus augue, eget pharetra tortor tincidunt vitae. Sed laoreet tincidunt vulputate. Vestibulum eleifend auctor justo. Fusce ac sapien nec tellus rhoncus vehicula. Vivamus vel arcu dapibus, rutrum nulla ut, vestibulum turpis. Vivamus tempus vehicula tortor, nec accumsan urna ultrices nec. Vivamus sollicitudin nisi et orci laoreet pulvinar. Maecenas tempor placerat gravida. Pellentesque felis neque, tristique id lacus in, vulputate vehicula ex.

=Styling=

Vinyl and Playbill split the quote using <span> tags.  Apply the <span></span> around the last part of the quote, like this:

Quotation, n: The act of repeating erroneously <span>the words of another.</span>  (see screenshot for Vinyl) or like this:

Quotation, n: <span>The act of repeating erroneously the words of another.</span>  (see screenshot for Playbill)

Both Polaroid and Playbill may need some tweaking, depending on your content.  

**Polaroid**

Sometimes the author and source fall off the bottom.  To tweak, apply your styles to:

.bpattribution  to move the entire block up apply a negative top margin.

.bpwrap cite to change the text styling for the source

.polaroid .bpauthor to change the text styling for the author.

**Playbill**

The author and source in the diagonal bar may need adjusting.  I've found that playing around with this style will fix issues:

.playbill .bpattribution {
     transform: rotate(40deg) translate(190px, 90px);
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
8. Pullquote

== Changelog ==

=2.0=
*Add Pullquote style

= 1.0 =
* Initial release.

== Upgrade Notice ==
= =