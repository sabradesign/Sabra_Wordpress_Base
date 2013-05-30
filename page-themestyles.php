<?php
/**
 * Template Name: Theme Styles
 *
 * @package NT
 * @since NT 1.0
 */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>

    <!-- prometheus scripts -->

    <script>

        if (jQuery) {

            console.log('Prometheus - jQuery Loaded');

            jQuery(document).ready(function($) {

                    var styleValue = $('input#prometheus-class');
                    var styleTarget = $('#prometheus-wrap');

                    $(styleValue).bind("focusout", function(event){

                        $(styleTarget).removeClass();
                        $(styleTarget).addClass(styleValue.val());

                    });
                });

        } else {
            console.log('Prometheus - jQuery Not Loaded');
        }

    </script>

    <!-- prometheus styles -->

    <style>

        body {

        }

        .prometheus-block {
            margin:2%;
            width:46%;
            float:left;
        }

        @media all and (max-width: 640px) {
            .prometheus-block {
                margin:2%;
                width:96%;
            }
        }

        .prometheus-div {
            margin:0.8em 0;
        }

        .prometheus-underline {
            font-family:'Maven Pro', sans-serif;
            text-transform:uppercase;
            opacity:0.5;
            border-bottom-width: 1px;
            border-bottom-color: inherit;
            border-bottom-style: solid;
        }

        .prometheus-label {
            font-family:'Maven Pro', sans-serif;
            text-transform:uppercase;
            opacity:0.5;
        }

        .prometheus-table {
            width:100%;
        }

        .prometheus-table td {
            padding:0.4em 0;
            width:50%!important;
        }

    </style>

</head>

<body>

    <div class="prometheus-header" style="margin: 2% 2% 0 2%">
        <input style="width:50%;" id="prometheus-class" type="text" placeholder="Enter a class to wrap content in (i.e. 'post' or 'page')" value="" />
    </div>

    <div id="prometheus-wrap">

        <div class="prometheus-block">

        <h1 class="prometheus-underline">Text Formatting</h1>

        <div class="prometheus-label prometheus-div" style="font-weight:bold;margin:1.2em 0;">Standard</div>

        <div class="prometheus-div">This is <a href="#">link</a> text.</div>
        <div class="prometheus-div">This is <strong>strong</strong> text.</div>
        <div class="prometheus-div">This is <em>italic</em> text.</div>
        <div class="prometheus-div">This is <small>small</small> text.</div>
        <div class="prometheus-div">This is <u>underline</u> text.</div>
        <div class="prometheus-div">This is <code>code is poetry</code> text.</div>

        <div class="prometheus-label prometheus-div" style="font-weight:bold;margin:1.2em 0;">Font Character Tests</div>

        <table class="prometheus-table">

            <tbody>
            <tr>
                <td>Double Quotes</td>
                <td>&ldquo;double quotes&rdquo;</td>
            </tr>
            <tr>
                <td>Ampersand</td>
                <td>&amp;</td>
            </tr>
            <tr>
                <td>Copyright</td>
                <td>&copy;</td>
            </tr>
            <tr>
                <td>Trademark</td>
                <td>&trade;</td>
            </tr>
            <tr>
                <td>Registered Symbol</td>
                <td>&reg;</td>
            </tr>
            <tr>
                <td>Superscript 1,2,3</td>
                <td>&sup1; &sup2; &sup3;</td>
            </tr>

            </tbody>

        </table>

        <div class="prometheus-label prometheus-div" style="font-weight:bold;margin:1.2em 0;">Font Size Tests</div>

            <h1 style="font-size:72px;margin:5px 0;line-height:1em;">Display 72px</h1>
            <h1 style="font-size:48px;margin:5px 0;line-height:1em;">Display 48px</h1>
            <h1 style="font-size:36px;margin:5px 0;line-height:1em;">Display 36px</h1>
            <p style="font-size:16px;margin:5px 0;line-height:1em;">Body text 16px</p>
            <p style="font-size:15px;margin:5px 0;line-height:1em;">Body text 15px</p>
            <p style="font-size:14px;margin:5px 0;line-height:1em;">Body text 14px</p>
            <p style="font-size:13px;margin:5px 0;line-height:1em;">Body text 13px</p>
            <p style="font-size:12px;margin:5px 0;line-height:1em;">Body text 12px</p>
            <p style="font-size:11px;margin:5px 0;line-height:1em;">Body text 11px</p>
            <p style="font-size:10px;margin:5px 0;line-height:1em;">Body text 10px</p>

        </div>

        <div class="prometheus-block">

        <h1 class="prometheus-underline">General Flow / Legibility</h1>

        <h1>Header 1</h1>

        <p>Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. </p>

        <h2>Header 2</h2>

        <p>Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. </p>

        <h3>Header 3</h3>

        <p>Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. </p>

        <h4>Header 4</h4>

        <p>Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. </p>

        <h5>Header 5</h5>

        <p>Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. </p>
        <blockquote>Blockquote - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. </blockquote>
        <p>Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. </p>

        </div>
        <div class="prometheus-block">

        <h1 class="prometheus-underline">Lists</h1>

        <p>Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. </p>

        <ul>
            <li>Unordered list item</li>
            <li>Unordered list item</li>
            <li>Unordered list item</li>
            <li>Unordered list item</li>
        </ul>

        <p>Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. </p>

        <ol>
            <li>Ordered list item</li>
            <li>Ordered list item</li>
            <li>Ordered list item</li>
            <li>Ordered list item</li>
        </ol>

        </div>
        <div class="prometheus-block">

        <h1 class="prometheus-underline">Forms</h1>

        <div class="prometheus-label prometheus-div" style="font-weight:bold">Standard</div>

        <table class="prometheus-table">
            <tbody>
            <tr>
                <td>Label</td>
                <td><label>Label</label></td>
            </tr>
            <tr>
                <td>Text</td>
                <td><input type="text" value="#75FFFF"></td>
            </tr>
            <tr>
                <td>Textarea</td>
                <td><textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum.</textarea></td>
            </tr>
            <tr>
                <td>Select</td>
                <td><select><option>Option 1</option><option>Option 2</option><option>Option 3</option></select></td>
            </tr>

            <tr>
                <td>Submit & Button</td>
                <td><input type="submit" value="Submit"> <input type="button" value="Button"></td>
            </tr>

            </tbody>
        </table>

        <div class="prometheus-label prometheus-div" style="font-weight:bold">Special</div>

        <table class="prometheus-table">
            <tbody>
            <tr>
                <td>Color</td>
                <td><input type="color" value="#75FFFF"></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="date" value="2011-06-08"></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="email" value="hello@noeltock.com"></td>
            </tr>
            <tr>
                <td>Month</td>
                <td><input type="month" value="2011-06"></td>
            </tr>
            <tr>
                <td>Number</td>
                <td><input type="number" value="4"></td>
            </tr>
            <tr>
                <td>Search</td>
                <td><input type="search" value="[Any search text]"></td>
            </tr>
            <tr>
                <td>URL</td>
                <td><input type="url" value="http://www.noeltock.com"></td>
            </tr>
            </tbody>
        </table>

        </div>
        <div class="prometheus-block">

            <h1 class="prometheus-underline">Images</h1>

            <div class="prometheus-label prometheus-div" style="font-weight:bold">200px img with class .alignleft</div>

            <p><img class="alignleft" src="<?php echo get_template_directory_uri(); ?>/prometheus/images/sample-inline.jpg" /> Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris.</p>

            <div class="prometheus-label prometheus-div" style="font-weight:bold">200px img with class .alignright</div>

            <p><img class="alignright" src="<?php echo get_template_directory_uri(); ?>/prometheus/images/sample-inline.jpg" /> Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris.</p>

            <div class="prometheus-label prometheus-div" style="font-weight:bold">940px img</div>

            <img src="<?php echo get_template_directory_uri(); ?>/prometheus/images/sample.jpg" />

            <div class="prometheus-label prometheus-div" style="font-weight:bold">940px img in 50% width div and class .aligncenter</div>

            <div class="aligncenter" style="width:50%">
                <img src="<?php echo get_template_directory_uri(); ?>/prometheus/images/sample.jpg" />
            </div>

        </div>

        <div class="prometheus-block">

        <h1 class="prometheus-underline">Plugins</h1>

            <p>WP SEO Breadcrumbs</p>

                <p id="breadcrumbs"><span xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a href="#" rel="v:url" property="v:title">Home</a></span>   »   <span typeof="v:Breadcrumb"><a href="#" rel="v:url" property="v:title">Category</a></span>   »   <span typeof="v:Breadcrumb"><span class="breadcrumb_last" property="v:title">Page</span></span></span></p>

            <p>WP-Paginate</p>

            <ol class="wp-paginate">
                <li><a href="#" class="prev">&laquo;</a></li>
                <li><span class='page current'>1</span></li>
                <li><a href='#' title='2' class='page'>2</a></li>
                <li><a href='#' title='3' class='page'>3</a></li>
                <li><a href='#' title='4' class='page'>4</a></li>
                <li><a href='#' title='5' class='page'>5</a></li>
                <li><a href='#' title='6' class='page'>6</a></li>
                <li><a href="#" class="next">&raquo;</a></li>
            </ol>

        </div>

</body>