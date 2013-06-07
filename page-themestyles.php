<?php
/**
 * Template Name: Theme Styles
 *
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
                    var styleTarget = $('body');

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
        
        ul.examples {
        	list-style: none;
        	margin: 0;
        	padding: 0;
        	text-align: center;
        }
        
        ul.examples li {
        	display: inline-block;
        	margin: 0 .3em;
        }

    </style>

</head>

<body>

    <div class="prometheus-header" style="margin: 2% 2% 0 2%">
        <input style="width:50%;" id="prometheus-class" type="text" placeholder="Enter a class to wrap content in (i.e. 'post' or 'page')" value="" />
    </div>

    <div class="container">
    
    <div class="row">
    
    	<h1 class="prometheus-underline">Typography</h1>
    	
    	<h3>Page Header</h3>
            
            <div class="page-header">
              <h1>Example page header <small>Subtext for header</small></h1>
            </div>
    	
    	<h3>Hero Unit</h3>
          
          <div class="hero-unit">
              <h1>Hello, world!</h1>
              <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
              <p><a class="btn btn-primary btn-large">Learn more</a></p>
            </div>
            
            
    
    </div>

	<div class="row">

        <div class="span6">

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

        <div class="span6">

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
        
        </div>
        
        <div class="row">
        
        <div class="span6">

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
        <div class="span6">

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
        
        </div>
        
        <div class="row">
        
        <div class="span6">

            <h1 class="prometheus-underline">Images</h1>

            <div class="prometheus-label prometheus-div" style="font-weight:bold">200px img with class .alignleft</div>

            <p><img class="pull-left" src="<?php echo get_template_directory_uri(); ?>/images/sample-inline.jpg" /> Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris.</p>

            <div class="prometheus-label prometheus-div" style="font-weight:bold">200px img with class .alignright</div>

            <p><img class="pull-right" src="<?php echo get_template_directory_uri(); ?>/images/sample-inline.jpg" /> Paragraph - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras porttitor vestibulum leo, in interdum dui venenatis sed. Proin cursus ultricies fermentum. Aliquam id sapien at lectus auctor sodales. Aliquam lectus metus, ornare non dapibus ut, molestie a nibh. Maecenas quis diam mauris.</p>

            <div class="prometheus-label prometheus-div" style="font-weight:bold">940px img</div>

            <img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg" />

            <div class="prometheus-label prometheus-div" style="font-weight:bold">940px img in 50% width div and class .aligncenter</div>

            <div class="aligncenter" style="width:50%">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg" />
            </div>

        </div>

        <div class="span6">

        <h1 class="prometheus-underline">Breadcrumbs and Pagination</h1>

            <h3>Breadcrumbs</h3>

                <ul class="breadcrumb">
				  <li><a href="#">Home</a> <span class="divider">/</span></li>
				  <li><a href="#">Library</a> <span class="divider">/</span></li>
				  <li class="active">Data</li>
				</ul>
                
            <h3>Pagination</h3>
            
            <h4>Normal</h4>
            
            <div class="pagination">
			  <ul>
				<li><a href="#">Prev</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">Next</a></li>
			  </ul>
			</div>

            <h4>Large</h4>
            
            <div class="pagination pagination-large">
			  <ul>
				<li><a href="#">Prev</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">Next</a></li>
			  </ul>
			</div>
            
            <h4>Small</h4>
            
            <div class="pagination pagination-small">
			  <ul>
				<li><a href="#">Prev</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">Next</a></li>
			  </ul>
			</div>
            
            <h4>Mini</h4>
            
            <div class="pagination pagination-mini">
			  <ul>
				<li><a href="#">Prev</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">Next</a></li>
			  </ul>
			</div>

        </div>
        
        </div>
        
        <div class="row">
        
        	<h1 class="prometheus-underline">Thumbnails</h1>
        </div>
        
        	<div class="row">
        	
        	<h3>Default</h3>
            <ul class="thumbnails">
              <li class="span3">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px; " src="data:image/png;base64,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">
                </a>
              </li>
              <li class="span3">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAggAAAFoCAYAAAAy4AOkAAAr7ElEQVR4Ae3d93fcxnrG8Zdc9t7EokZJVJft3OQ6J///b0lurn1lybYKRUkUKZJi753M8wKLLRxRxSPfkwy/60NzicVgMR/AngeDAdCwsrJyarwQQAABBBBAAIEagcaa97xFAAEEEEAAAQQyAQICOwICCCCAAAIIBAIEhICECQgggAACCCBAQGAfQAABBBBAAIFAgIAQkDABAQQQQAABBAgI7AMIIIAAAgggEAgQEAISJiCAAAIIIIAAAYF9AAEEEEAAAQQCAQJCQMIEBBBAAAEEECAgsA8ggAACCCCAQCBAQAhImIAAAggggAACBAT2AQQQQAABBBAIBAgIAQkTEEAAAQQQQICAwD6AAAIIIIAAAoEAASEgYQICCCCAAAIIEBDYBxBAAAEEEEAgECAgBCRMQAABBBBAAAECAvsAAggggAACCAQCBISAhAkIIIAAAgggQEBgH0AAAQQQQACBQICAEJAwAQEEEEAAAQQICOwDCCCAAAIIIBAIEBACEiYggAACCCCAAAGBfQABBBBAAAEEAgECQkDCBAQQQAABBBAgILAPIIAAAggggEAgQEAISJiAAAIIIIAAAgQE9gEEEEAAAQQQCAQICAEJExBAAAEEEECAgMA+gAACCCCAAAKBAAEhIGECAggggAACCBAQ2AcQQAABBBBAIBAgIAQkTEAAAQQQQAABAgL7AAIIIIAAAggEAgSEgIQJCCCAAAIIIEBAYB9AAAEEEEAAgUCAgBCQMAEBBBBAAAEECAjsAwgggAACCCAQCBAQAhImIIAAAggggAABgX0AAQQQQAABBAIBAkJAwgQEEEAAAQQQICCwDyCAAAIIIIBAIEBACEiYgAACCCCAAAIEBPYBBBBAAAEEEAgECAgBCRMQQAABBBBAgIDAPoAAAggggAACgQABISBhAgIIIIAAAggQENgHEEAAAQQQQCAQICAEJExAAAEEEEAAAQIC+wACCCCAAAIIBAIEhICECQgggAACCCBAQGAfQAABBBBAAIFAgIAQkDABAQQQQAABBAgI7AMIIIAAAgggEAgQEAISJiCAAAIIIIAAAYF9AAEEEEAAAQQCAQJCQMIEBBBAAAEEECAgsA8ggAACCCCAQCBAQAhImIAAAggggAACBAT2AQQQQAABBBAIBAgIAQkTEEAAAQQQQICAwD6AAAIIIIAAAoEAASEgYQICCCCAAAIIEBDYBxBAAAEEEEAgECAgBCRMQAABBBBAAAECAvsAAggggAACCAQCBISAhAkIIIAAAgggQEBgH0AAAQQQQACBQICAEJAwAQEEEEAAAQQICOwDCCCAAAIIIBAIEBACEiYggAACCCCAAAGBfQABBBBAAAEEAgECQkDCBAQQQAABBBAgILAPIIAAAggggEAgQEAISJiAAAIIIIAAAgQE9gEEEEAAAQQQCAQICAEJExBAAAEEEECAgMA+gAACCCCAAAKBAAEhIGECAggggAACCBAQ2AcQQAABBBBAIBAgIAQkTEAAAQQQQAABAgL7AAIIIIAAAggEAgSEgIQJCCCAAAIIIEBAYB9AAAEEEEAAgUCAgBCQMAEBBBBAAAEECAjsAwgggAACCCAQCBAQAhImIIAAAggggAABgX0AAQQQQAABBAIBAkJAwgQEEEAAAQQQICCwDyCAAAIIIIBAIEBACEiYgAACCCCAAAIEBPYBBBBAAAEEEAgECAgBCRMQQAABBBBAgIDAPoAAAggggAACgQABISBhAgIIIIAAAggQENgHEEAAAQQQQCAQICAEJExAAAEEEEAAAQIC+wACCCCAAAIIBAIEhICECQgggAACCCBAQGAfQAABBBBAAIFAgIAQkDABAQQQQAABBAgI7AMIIIAAAgggEAgQEAISJiCAAAIIIIAAAYF9AAEEEEAAAQQCAQJCQMIEBBBAAAEEECAgsA8ggAACCCCAQCBAQAhImIAAAggggAACBAT2AQQQQAABBBAIBAgIAQkTEEAAAQQQQICAwD6AAAIIIIAAAoEAASEgYQICCCCAAAIIEBDYBxBAAAEEEEAgECAgBCRMQAABBBBAAAECAvsAAggggAACCAQCBISAhAkIIIAAAgggQEBgH0AAAQQQQACBQICAEJAwAQEEEEAAAQQICOwDCCCAAAIIIBAIEBACEiYggAACCCCAAAGBfQABBBBAAAEEAgECQkDCBAQQQAABBBAgILAPIIAAAggggEAgQEAISJiAAAIIIIAAAgQE9gEEEEAAAQQQCAQICAEJExBAAAEEEECAgMA+gAACCCCAAAKBAAEhIGECAggggAACCBAQ2AcQQAABBBBAIBAgIAQkTEAAAQQQQAABAgL7AAIIIIAAAggEAgSEgIQJCCCAAAIIIEBAYB9AAAEEEEAAgUCAgBCQMAEBBBBAAAEECAjsAwgggAACCCAQCBAQAhImIIAAAggggAABgX0AAQQQQAABBAIBAkJAwgQEEEAAAQQQICCwDyCAAAIIIIBAIEBACEiYgAACCCCAAAIEBPYBBBBAAAEEEAgECAgBCRMQQAABBBBAgIDAPoAAAggggAACgQABISBhAgIIIIAAAggQENgHEEAAAQQQQCAQICAEJExAAAEEEEAAAQIC+wACCCCAAAIIBAIEhICECQgggAACCCBAQGAfQAABBBBAAIFAgIAQkDABAQQQQAABBAgI7AMIIIAAAgggEAgQEAISJiCAAAIIIIAAAYF9AAEEEEAAAQQCAQJCQMIEBBBAAAEEECAgsA8ggAACCCCAQCBAQAhImIAAAggggAACBAT2AQQQQAABBBAIBAgIAQkTEEAAAQQQQICAwD6AAAIIIIAAAoEAASEgYQICCCCAAAIIEBDYBxBAAAEEEEAgECAgBCRMQAABBBBAAAECAvsAAggggAACCAQCBISAhAkIIIAAAgggQEBgH0AAAQQQQACBQICAEJAwAQEEEEAAAQSaIEAAgS8XaGhoqMx8enpaef+1b2qX42X/6LK+1XK+dv3/7Plr6/VHbXwda5cjZTn/2WvO8hFIR4CAkM62pCZ/kkBDQ6MaGrPjoyM7Ojm2k5PTrOFpbGy0UlOTlRob7OT4RM3P519e5kTLONjft4PDo6yAL6O5qdmampusQS3YyWdaMW/0/MfX51A/xycnWk6DlUqlbBmlUqOdfuH6fH6Nv34Or19tFRobS5nf55bUIBuPX0eq04nq5D9esFR2btT7bNpnFlRsr6Ojw8zoWNsr82mSjzuXvnx7fear+BiBpAUICElvXioXK9Coxn93a93m5xdscXHJtvf28sbPG65Ss/X09dng4JCNjlyyFjXM5zbumr/h9MSW52dtenbWVtc3axrRBmtubbOhS8N25coV6+1qP7ch9ICxt7Npc+/f24clrc/OfrmKagQbStbd02fDoyM2NjKi9VFDWNtSx2J8QfmG02N79vjvtri5Z1mDbo1297t/tauDnQoy50WoBnPnrfUVOc/b8sqq7ewdyCefv9TUYj29fTY0PGKjw0PWrBOj59XLfXY2121u7r0tLi1ny8lXW6GusUnL6ZfPqJZzyZq0nOI7vqBqzILAhRNoWFlZOe+/2guHQYURqBXwRmtx7q39+tuk7R4cqoHJj3Br5zlVo3+qRrCn75I9ePjABno+0rgrHNjJgU3+9qu9mV2wEx0nF70AvqyikfKj45a2Lrv74JFdHR2w06xnoPpt/v1bK/P2+Jentrl73vrk3eh9Q2P2ww+PrKOlVFl+dUl/zjvvKdjbXLT/+q+fbO84/9/KiWwe/uU/7MZI97kBQf0d9n76lT2ffGt76lXxRv7sy51Nyxq4dNkefXdf9WoK6tWogLY6/86e/PrMtvePzt9epw02OHrNfvj+vrUqRP2TM9TZqvE3Av9nBcL/Ev/PriorhsA/T6BojJ8+fW57R8dZ970fEWcNu1ajaOC9UfRTDJtrC/bzzz/bih856+/qS2UUCV7//tSmZhbUxpWyBtDLezAoutH9bz9FcLS/bb89+cUWVrfqGkrvNj/YXrUnTxQO9urXp/guX4Y3rn6KYX3pvT357aUdqZ2uXZti3m/1u+KgdT852rVXLxWmjhSBCiv//Ykvc6sPM6/s6fMpO1CocIO8bLVQXi93a7DlD+/s8ZNn2bxadOXl22tnbdGe/vq77Ryc1G2vYqZiOe6zPD9tvz17rS0Thr5ifn4jcNEFCAgXfQ+g/h8XONqzly9e6khYbXq5JfIG3Y+LS83NWQOU9x7kxT0oHO6s2/OXr9QoV1sub9RW5qZtanZRZwBK5e/Kj/LbO7ptYKDPmjR70YvgDd3p8a5Nvpyyw/JRuBfSiAObnpq09Z2jLJBkC8oOfRusvaPT2tpaKsvwzxr1XasLMzY9t5IdSWfzf+N/HR8fZWMptrc2bWH2nf38P3+3mQ9rdcHmk18p16PdTZucmi73quRzu2ujTt909/RYe2t9vUqlJltffK96LStIVP/31XByZK8nX9qWwkER0DJTzeM+ra3NdT4+ruHD7BubW1r/03w+WXc+ROD/gQBjEP4fbCRW8Z8r4I305vKSLa/vZAPk/Nu9sWlq67SJ23dsdKhPpwyO1C0+ZVPT7+1YgcAjgXdxry/P24fVG3ZloCPrUj9R0Hj7ZjqbJ+9Y8JDRZDfvPrCbV4ezo/3N5Tl78vR3NW7HWRjxXoDt9WVb2923S52tWeN5sLtqc7WNr9anobnN7j18ZGPl9Zl5/dJevplVmsgbTjW/Nj83Z+NjgzpOrvZ6eH1qX1nwycJGdWrRA1Cdkr8rejxOVa9f/udvtqbAIoxsYOGpHD52euDsMoq/vYFfW5y3rf1D1TsPT74unb2X7NGjB9bTobrLefbNpL14PaNiefBqbDjJxoTcuDxkOkOQNfC7G0ty36x+v5ZTau2yh48e2nB/t0LXgb2ZfJ714mTBwkPf8aHNzi3Ir/eTvRzF+vIbgYsmQEC4aFuc+n5WoLHh1NbW1+xQg+oqB/1qYm/eeWi3rg7asa4QMGuxiXvfqeE5tJfTH8pHoTptoBH4y4vLdlmD8hqUCLZWlm11a7fScPkVEMPXbtqdW1fVrvpo/1PrH7lqN7c27PfJmezI31fQx/Nt7xzYcFerqdNdA/dWsvPzDeqpKD6/cvWWjV8e1mLUSJfa7Mbtu7amAX4LG/o+NYDeWO9urNqmGuD+9iYNbtyy9c2drAs/W0j5Xx3dvdZZ0wPh4WB3e9O2tnc9VVRmVSSxvv4Ba1GXh+eJo/0DXYnhocZny6/0qMz8BW/ceWtnTyEgO/OSl1DPwe17D2ywp8OO5NykAYo3J+7a+uqKza3uZPXydTpSePKBit774qu4KvMDP7VR4zN+87ZdGRlUlnOfDpu4e89WV9dsZdsDib6zvH12NO6hSyMfvU68EECgKkBAqFrwDoFMwAcH7m1tVRtHdXmXWnttZKgnCwfeqPvrREe9I5dG7M3MBx2ra/bs51SXHqrx0l8lHemurq1kpwrydkvDGZva7Nr1y7qiQZdLajneGHvgGL12RwPnblS+07+iSacyfOR/qeHINtTQe09FcZKiUZfrXdKVE6eVSwq1jk2tdkmj/BfWptUg5mtzpHVZXd22wc5+Oz7YtedPH2uMQOVrsoGQfSPj9uNfHigCqXdD63N6vJ/Nt7CmBtlbUr3cpKNv1H7862D2dzZNK5n1PvjnZZPzeh4qhereeG+Kv/Lv8Ba6qdRineo5yC/dLC9XKa2zq8tsebtcr9qFqPdGvQxrunLhpPDRckotuipkqF91UQjz2X0btrTboE7prGxqLIh6e5Qm7PBgx9Y39qxnSFdZlOtQu3TeI3CRBQgIF3nrU/ePCnhjd3BwoM/KjaPeNbW26mjVO+rzJq0o6Kcj/Ai2dnK5uVPjdGLbGxtqdL2cz3NqzW3d6jpv05I1QFGNV3G5no8ZaO/oyBvcckNVNLrHmm97YyvrkcgX5IPw2qyrzUfy51P83x5K2tva1fYVDa++UmV31DtxctpvXbrSYuLmVQ0IfKsGMo8a3suxujirsQNjNj7SlwWWhem3tri2Xen1yL5E33fn3h1rb/Z7EejLdMng+J17NqpRkFn9fZIqvrigywuXN2rW1dfs46/T00brUhho1PoWr2P1yOzsHliv6uE9CB44dDMD295WOCi+SJUuqccjGxuij/1+Bztb6hnRtvCXL625qd06WuuvdPCrTTrb21Wu+n3us6tln17qVikNOOGFAAIVAQJChYI3COQC3pV+5dZ9G7h2nEcENUhNre06us3a+AqTN4g721tqyFSinAHyD31MgvcM7Nnm1n7WcPp0DwPtusfB3taqvZ6ZsWV1d+/75ZNq+FrbO2xw6JKNjo6duQ+CN8hqAPerjZeHgpLWp9kbRP+jeOltqzecml6Mb/QrKPYP1I2vz7xdvHx9Qvdz0P0G1KuQ9w7kR+Bvpl6ph+Sv1ny4YVNvZ9U7olMU5eWqnbbx27dtpL9T6+LpwA++SzZ2dbzSZvu0knotjnbXdH8GDfzL5XzyuS/36NU9JNqaptWr4UHDT9Hs2+SLZ9amMQhdqovX/d3bVxpfUKyvOzbonhGD2h5e/xPlh0Pb0/iNyst7C+TZ7MurTW6qvw/m9HrntfASCghln0p53iCAQCZAQGBHQCAQ0Ln2oWHrr5vulySqhSm//Jz70d6WvXmnxlRNadGYnqpx9nP63l1/rNMIdVci6JTEgcLBz3+fs12dv68d0HdwsJ+dZ383PWN3dB+E6xpYmN0HQSFE3QDZeIhKo6vVKCmt5A18dZ08LDTrtETW0GqyF1UbqXXQnQn1WaN+GnQa4u79e7b+3z/bnlpJ/9yPvHc1KPLtzJy17y/pSgmFmvK5fF+H7oExmxi/kjXGRf39t98xsf6lBlnf8cUvNeQtHQN24/qY/T41o2LqjdG6bK0u2N/+c926uzs1zmFH4xR2tZ65sF/h0DVwya5fHimvj3+n3+Eyr0vx3U26O2XW+1ATEDwstOiqiKzS5dV0owMfo/A16118Cb8RSFyg+P9a4tWkegh8nYA3jH60XP2pNnzeiJ0e6nz+r7/a8qY3pt7M6KXGq6mlQ0fifR9tKL0x3lWPw74G9vn1/sXLGzJvAH3a8eGOPfvlsU3Pr1YChA9CLE5F5GXUo6EbBfnpgepaFZ8US63+PlbrWbR/2ViC3iG77YMktb7Fy7vd3716ZpPT81nvQDY9CxTtChR3TL31lWUUZb7Fb89c4xr8ebMIRFqoW5z42AkN8PRBjEU48BXwsSDff/+9dbf6oMK89j4IsfZG1z65RZc15gGhfi3Pevmnx9oeH5teX5K/ELh4AgSEi7fNqXGEgF/KuL+9bv/4x0/29sNKNRxomccnDTZ2bdx6O/yaezWousHS2YFvlaNaNYIdHV0aM9CqeasNeNYYnh7ohkMvbbt82aMHhGw55RzyqdX3I//ivg3ZfAofR1rOqVriorg3ypfHJ3TKoKvaK6L5To4OdCRenc9PU1ybuGOX+jqq833qy//AZx6uVj/M2QeNW1AyqS5BKxs08FrHY91IaurVW9PtDvL6aD5fbw9QRf2KhdSdXihPbNR9FGq+Rd/hV2PkV5MU5fiNAAK5AKcY2BMQ+BIBtSTeUbAy985+f/ZCdzM8rNwjwYv7qPuhK7fsngYB5kfmfhSshwVlR+nVpsvDQFtXv92/rzEOvV3ZCPyF92/t2cs3lW5y76HY316z2fllu3djVEuvlv/cqnqPR3FkXZm3tkX0iZ5eslMNunzwb//IbgblDWXt93hPQ++lq3ZL3f9KB/7hN395PXfWPujukL/atsYgFMHGv7tRp0o69HyKYzX+e3oug+P7KjboypCFmSkN9myz7+5cK6/T2Qr6jB9f3Wxg6NmPPlL87Cz8jcBFFCAgXMStTp2/SiA/pbBnryZf2Ot3c9ntiyvjB9TY+hH5yNUJ++7BhB4ApONW/e0NlN85sdJjkH2jjnIbNQbg4Xc2NtClwY0aBKnL+q7dvGsnhwf22yudhy8fRftlkGu6RPL4ZFSXO7ZowJ0uyfOwUW7Is6dH6nv8T/+66uvMcbNWxrvbG7NnDlTn9Ea4s3fY7kxct6cv3qh4TSupMo2t3Xbv3m1TT35Wv+ryv907vzzRB0f63Q/99sf+8p6OPj1v4d7d29bVrrsoap6F2bfZcxqK20b7rHPTr+3y2LANdbdVrjDZ13q7h4cdP21wBiZb/tmJvq1a9D1ZOPE/eCGAQEWg5v8KlWm8QQCBsoCHgwPdQvnxz3/P7lLo1zXUHul6A3/r/nf2Lw9vZ08ZrLYxamT90cJZg583PN570N43YEM9GnyncOAvP9r3rvyRsTFrq7lZj48v2NP5dx8/4KHhbHf70cFR1piWV/PcX/7Nvr6VAY41c/o9D3p6uutOk+Qf+7q3WFtLs/78cxpNP5Wyv7tuizV3P3Sfpo5e3f3wkfV3d2RjMJqaW+36rXt284rf86Hck6H19ns6LC2v5mkgq19NxfT2wH2qG6P+wzN/+bM0slRxZjp/InDRBQgIF30PoP7nCmRd/Zur9vinn21+Rbfx9R6BbG416tkR+JD95cd/t7s3rmZXLdS1R2pXGxqbs0cuV75A05oUGsoLqU5WwUY1xqXylQPFB94een+AP5eg3e9eWG6s1R7akXocstMX+QrlRfTB/q7fmdDviFB+6ZLAtha/tK+YUP6teU90Pv/FCz07Is8q1Rm8t2J72V5Ovavew6H66bd5p+8/0IDNw+xeB/kivUHvHhiyTo2IrL1Rkt8galg3gPLHMxcvv1BxU3eG9EswS6VWDaL0qxnKn2rZx/v5nRYrDvrIQ9ae7g5ZCRqa5n0O7fLRR7wQQOCMQM1/cmc+4U8ELrCANyZHe5v2RFcULOsJjf5wH395I+bX4V+9cdf+/cd/1QA+vzfAx0bBa8S9GvYuf5ZC0XCVy3/0eF7z1Mzmc+ooXq2W1qOkmxJ1drXVNYAnutphV7cIru0Z8CsRdnZ3df+F6pL8Jk2teiaBX3ZZ+/KD5hk94+BDzd0S6z7XDPN6BPPs4kal7rWff4v3h7oHRKVRLy/Qezvq19Q/cIvidE31m72shyYPXe0d1Yc6ucnRwZbGVviNlqrz+5L9qggPFZWXLj1ta+1QifBbK/PwBoELKkBAuKAbnmp/WsAbjGmNOVjScw2K8+PemvlljI/+5a/2vU4ptDX7pYr5Mw98TELxUzkdoB6B7j7dndDHDvicaqx39IyHbd0DwU8hFC8vt7uxrssf1eCXJ3uRjnadX/dbJqvnoqunuhz/Tr850IpuHlS7HH+2w4aW7/dlKF4l3Q+gxx9WVNMSe8/I5vJ7m3w7p/LVeWuvpvDvaNBNiiZfPM8eIlWpU7Hgb/Db7+Wgr6m8vGHfV8Dxda2ZnLntbm1nPSOVmYs3atcbFBC6unoqzo54dKj7SmxU767oX3Sqq0E2NmuvllCI02DIbp3yqUtxxbL5jcAFF6j+3+GCQ1B9BAoBbzR315fs3fySGv3q/Qr8aHzs2nXraS/ZyuKizoEv2/JHfjZ029+sQVKjNDgwaM0aVZcdn3rDtb9lz19Mmd/4z+974D8neh7A1Ovp7CqGYh1O9b19fYN6pELeY9GnoNGcPV8hn8MHMc7P6A6Eh95ToeUoCGxpnecX17MBiT6XN/jNGmzY770PRTeG1sG/78XzyWwdikDiN4Ea0kOjuturj0V2h72NZXvxalrV+cb/q1AIaOvu1riNUuXY3b9va2Xe3i3oUc66HNHr5Tc8OtJYhSmFGT0WquBRmUbr1mWi2W2ldcvmwYFezV8TKzS4cUY3nXLnpmw5JdvQshdXt7RN8/ncpLWjT7e+rta58gW8QQABPXeWFwII1Al4c764uKCnJ+pYXI1L8fJehfdvXtrs6/O7o/3hSd0j1+zHHx5Zk8YCtPcO6nHDXTazvJl11XvjtDL/xv6m8/9XRi/p4UvH9mFu1pbODNZrae+z0eF+dQrktwDq6O23vs42WyzfmMkb021dIvjTTz/ZmD+06XDP5t7PqFtdR9/lVt8b/T7dvjkb/OgDGvTywPF66oUtruuJj8WVAx4kNDjw/sOHtvn+uT1+9laBIG9EfX0X3k3Z7NCgXdPzCvzhUd/i5eGltb3XBnWKZmapehrDg8/LXx/bxvKY9ftgTt0GeWF+zja29qoNu8JFU2unHpQ1kF2C6SMuunV3xe62KT0i+ygblOm9MutLM/bTzwfZfMd7O/Z+dlZ3pKxULes0uDQynAe4ss+3qBvLQCAVAQJCKluSenwjAR1h64FBqxohX3nIUs2SfQDgp17ePV7bna8L+u3W7QlbXv/F9suNt59n31r5YM9WFr3jW//kpymK5Z7oiPja+E09i0C9C+UT5o16+NCNm9dt5ZcXOoWQjzzwNnxTy9jQj788GBThILsioL1HtzH2J0fmIcOfn7C+9M5evVs4c2qhUWMqJqyrVQ+MunrDht5/sEU94TA70vZl6lTDS51q6O/9N+v0hzV9m4ygyyuaVadxW1x5oks4yw23V0rfN/furc15RpGnh6HqqRQfIKobON24pcDkz2rw7aFelJYu1fWK/fLstRaUhzrvKFhdnM9+cp/q1SA+ULFF96O4psdlq3vFP+aFAAJnBKp9dmc+4E8ELqrAiR53vKknCmaNd7nBLxr+L/pdA5fdb6B/xB7ev6Uj2+rzHLzR8wa4+O1FfNl+hD56bcJuXRuuG23vvQEDY+M2cX0kO5dehJC8fD7+oRIOvNFsaNbTFx9Yvzei3qCr4T3Z37Tnz16q290n5EHGB1h26imPN3QZod9EyIPIxK0bujwz/zz7HpXd21iyF5PTdeMbfJ0/9jpr9LF5fJo37t2DY/bg3q38VEq2ov6JApN6N7IxHerBqdRLDbnfrfLyjdt250b9DZz8ToojehDV+NiQBmlWL3EsxoX4b88e/squ8tBjt+8/eKBeh/onYuZz8G8EEHABehDYDxCoFVAj4o16SQPfWnQkXzROtbN86r03uC0+4l4zeTPsL2/ch69M2L81t9nkq9e2vrmjhq7+qNXHOrS0ddiV8Vs2ce1yFibU5tW8vKeh0W7ongvNGnX/Zua97eoOg/XL0RUPalA7ewfs5sQdu+ynKMrf40fT79+/s429Y43aby0v15dZspvq4WjT+XsPJ9mNioav2NXRDzarrn9vWLOXVmblw4wt6Yh7uFe3Xq5fucp6+q2MW/yyyvLpCx8wWTc2oDJn/sZXb+y6nvXQ3mmTk7LR+A1/vHVd1aXpAxrbdRpk/OaEXb18SUv1AFOzMP1x2tBkt7/7Qct6ZW9n5/WEx8NK/fM5fTkatKmxHRN379jwQM+Zz2uWx1sEELCGlZWV2v/MIEEAATU+WSP1B//L8KP64rLIWkxvbP3WweurKwoJ27r/QB4SvFHt6OzSoMRea9fTBj2gnP/VfjpC9xDY37X1tTXb0nX9RUgo6eZG3T091qubHzWrQS3CQbEO+ZF18Vf+2wOQN5r1ra3/qaP18vrVlsie9eBp45yXf2f992r5CgufC1q5zaFt6WqO9Y0tPWGxfAmk1q9Zd5Ls6u6xnu4ua2luOrP8Myui+X31DvZ2bVWP097WVREe0LxXosmvWOjts14txx8VXb+eZ5bDnwggQEBgH0DgPIHPNWrnlSu6/z/+ed7A+7J9vqypLb8vuuY/Xq5+qpcvfmo/8YY9bxBrp1bfn63Tp9b17LzeJ1J31F5dbN27+nJfVqZYQHbKRHXLvkv/Vi2zjzKbTwanYgn579ymelqh+PRzPsV8/EYAAU4xsA8gcK7ApxrPcwt99oPqOITPzvqJGb4mTNQu5mvq9DXz/tHvqC3n77335OyNHc/O8yV/5z7fYklf8m3Mg0CaAgxSTHO7UisEEEAAAQSiBAgIUXwURgABBBBAIE0BAkKa25VaIYAAAgggECVAQIjiozACCCCAAAJpChAQ0tyu1AoBBBBAAIEoAQJCFB+FEUAAAQQQSFOAgJDmdqVWCCCAAAIIRAkQEKL4KIwAAggggECaAgSENLcrtUIAAQQQQCBKgIAQxUdhBBBAAAEE0hQgIKS5XakVAggggAACUQIEhCg+CiOAAAIIIJCmAAEhze1KrRBAAAEEEIgSICBE8VEYAQQQQACBNAUICGluV2qFAAIIIIBAlAABIYqPwggggAACCKQpQEBIc7tSKwQQQAABBKIECAhRfBRGAAEEEEAgTQECQprblVohgAACCCAQJUBAiOKjMAIIIIAAAmkKEBDS3K7UCgEEEEAAgSgBAkIUH4URQAABBBBIU4CAkOZ2pVYIIIAAAghECRAQovgojAACCCCAQJoCBIQ0tyu1QgABBBBAIEqAgBDFR2EEEEAAAQTSFCAgpLldqRUCCCCAAAJRAgSEKD4KI4AAAgggkKYAASHN7UqtEEAAAQQQiBIgIETxURgBBBBAAIE0BQgIaW5XaoUAAggggECUAAEhio/CCCCAAAIIpClAQEhzu1IrBBBAAAEEogQICFF8FEYAAQQQQCBNAQJCmtuVWiGAAAIIIBAlQECI4qMwAggggAACaQoQENLcrtQKAQQQQACBKAECQhQfhRFAAAEEEEhTgICQ5nalVggggAACCEQJEBCi+CiMAAIIIIBAmgIEhDS3K7VCAAEEEEAgSoCAEMVHYQQQQAABBNIUICCkuV2pFQIIIIAAAlECBIQoPgojgAACCCCQpgABIc3tSq0QQAABBBCIEiAgRPFRGAEEEEAAgTQFCAhpbldqhQACCCCAQJQAASGKj8IIIIAAAgikKUBASHO7UisEEEAAAQSiBAgIUXwURgABBBBAIE0BAkKa25VaIYAAAgggECVAQIjiozACCCCAAAJpChAQ0tyu1AoBBBBAAIEoAQJCFB+FEUAAAQQQSFOAgJDmdqVWCCCAAAIIRAkQEKL4KIwAAggggECaAgSENLcrtUIAAQQQQCBKgIAQxUdhBBBAAAEE0hQgIKS5XakVAggggAACUQIEhCg+CiOAAAIIIJCmAAEhze1KrRBAAAEEEIgSICBE8VEYAQQQQACBNAUICGluV2qFAAIIIIBAlAABIYqPwggggAACCKQpQEBIc7tSKwQQQAABBKIECAhRfBRGAAEEEEAgTQECQprblVohgAACCCAQJUBAiOKjMAIIIIAAAmkKEBDS3K7UCgEEEEAAgSgBAkIUH4URQAABBBBIU4CAkOZ2pVYIIIAAAghECRAQovgojAACCCCAQJoCBIQ0tyu1QgABBBBAIEqAgBDFR2EEEEAAAQTSFCAgpLldqRUCCCCAAAJRAgSEKD4KI4AAAgggkKYAASHN7UqtEEAAAQQQiBIgIETxURgBBBBAAIE0BQgIaW5XaoUAAggggECUAAEhio/CCCCAAAIIpClAQEhzu1IrBBBAAAEEogQICFF8FEYAAQQQQCBNAQJCmtuVWiGAAAIIIBAlQECI4qMwAggggAACaQoQENLcrtQKAQQQQACBKAECQhQfhRFAAAEEEEhTgICQ5nalVggggAACCEQJEBCi+CiMAAIIIIBAmgIEhDS3K7VCAAEEEEAgSoCAEMVHYQQQQAABBNIUICCkuV2pFQIIIIAAAlECBIQoPgojgAACCCCQpgABIc3tSq0QQAABBBCIEiAgRPFRGAEEEEAAgTQFCAhpbldqhQACCCCAQJQAASGKj8IIIIAAAgikKUBASHO7UisEEEAAAQSiBAgIUXwURgABBBBAIE0BAkKa25VaIYAAAgggECVAQIjiozACCCCAAAJpChAQ0tyu1AoBBBBAAIEoAQJCFB+FEUAAAQQQSFOAgJDmdqVWCCCAAAIIRAkQEKL4KIwAAggggECaAgSENLcrtUIAAQQQQCBKgIAQxUdhBBBAAAEE0hQgIKS5XakVAggggAACUQIEhCg+CiOAAAIIIJCmAAEhze1KrRBAAAEEEIgSICBE8VEYAQQQQACBNAUICGluV2qFAAIIIIBAlAABIYqPwggggAACCKQpQEBIc7tSKwQQQAABBKIECAhRfBRGAAEEEEAgTQECQprblVohgAACCCAQJUBAiOKjMAIIIIAAAmkKEBDS3K7UCgEEEEAAgSgBAkIUH4URQAABBBBIU4CAkOZ2pVYIIIAAAghECRAQovgojAACCCCAQJoCBIQ0tyu1QgABBBBAIEqAgBDFR2EEEEAAAQTSFCAgpLldqRUCCCCAAAJRAgSEKD4KI4AAAgggkKYAASHN7UqtEEAAAQQQiBIgIETxURgBBBBAAIE0BQgIaW5XaoUAAggggECUAAEhio/CCCCAAAIIpClAQEhzu1IrBBBAAAEEogQICFF8FEYAAQQQQCBNAQJCmtuVWiGAAAIIIBAlQECI4qMwAggggAACaQoQENLcrtQKAQQQQACBKAECQhQfhRFAAAEEEEhTgICQ5nalVggggAACCEQJEBCi+CiMAAIIIIBAmgIEhDS3K7VCAAEEEEAgSoCAEMVHYQQQQAABBNIUICCkuV2pFQIIIIAAAlECBIQoPgojgAACCCCQpgABIc3tSq0QQAABBBCIEiAgRPFRGAEEEEAAgTQFCAhpbldqhQACCCCAQJQAASGKj8IIIIAAAgikKUBASHO7UisEEEAAAQSiBAgIUXwURgABBBBAIE0BAkKa25VaIYAAAgggECVAQIjiozACCCCAAAJpChAQ0tyu1AoBBBBAAIEoAQJCFB+FEUAAAQQQSFOAgJDmdqVWCCCAAAIIRAkQEKL4KIwAAggggECaAgSENLcrtUIAAQQQQCBKgIAQxUdhBBBAAAEE0hQgIKS5XakVAggggAACUQIEhCg+CiOAAAIIIJCmAAEhze1KrRBAAAEEEIgSICBE8VEYAQQQQACBNAUICGluV2qFAAIIIIBAlAABIYqPwggggAACCKQpQEBIc7tSKwQQQAABBKIECAhRfBRGAAEEEEAgTQECQprblVohgAACCCAQJUBAiOKjMAIIIIAAAmkKEBDS3K7UCgEEEEAAgSgBAkIUH4URQAABBBBIU+B/Ad/f6G5uHRROAAAAAElFTkSuQmCC">
                </a>
              </li>
              <li class="span3">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAggAAAFoCAYAAAAy4AOkAAAr7ElEQVR4Ae3d93fcxnrG8Zdc9t7EokZJVJft3OQ6J///b0lurn1lybYKRUkUKZJi753M8wKLLRxRxSPfkwy/60NzicVgMR/AngeDAdCwsrJyarwQQAABBBBAAIEagcaa97xFAAEEEEAAAQQyAQICOwICCCCAAAIIBAIEhICECQgggAACCCBAQGAfQAABBBBAAIFAgIAQkDABAQQQQAABBAgI7AMIIIAAAgggEAgQEAISJiCAAAIIIIAAAYF9AAEEEEAAAQQCAQJCQMIEBBBAAAEEECAgsA8ggAACCCCAQCBAQAhImIAAAggggAACBAT2AQQQQAABBBAIBAgIAQkTEEAAAQQQQICAwD6AAAIIIIAAAoEAASEgYQICCCCAAAIIEBDYBxBAAAEEEEAgECAgBCRMQAABBBBAAAECAvsAAggggAACCAQCBISAhAkIIIAAAgggQEBgH0AAAQQQQACBQICAEJAwAQEEEEAAAQQICOwDCCCAAAIIIBAIEBACEiYggAACCCCAAAGBfQABBBBAAAEEAgECQkDCBAQQQAABBBAgILAPIIAAAggggEAgQEAISJiAAAIIIIAAAgQE9gEEEEAAAQQQCAQICAEJExBAAAEEEECAgMA+gAACCCCAAAKBAAEhIGECAggggAACCBAQ2AcQQAABBBBAIBAgIAQkTEAAAQQQQAABAgL7AAIIIIAAAggEAgSEgIQJCCCAAAIIIEBAYB9AAAEEEEAAgUCAgBCQMAEBBBBAAAEECAjsAwgggAACCCAQCBAQAhImIIAAAggggAABgX0AAQQQQAABBAIBAkJAwgQEEEAAAQQQICCwDyCAAAIIIIBAIEBACEiYgAACCCCAAAIEBPYBBBBAAAEEEAgECAgBCRMQQAABBBBAgIDAPoAAAggggAACgQABISBhAgIIIIAAAggQENgHEEAAAQQQQCAQICAEJExAAAEEEEAAAQIC+wACCCCAAAIIBAIEhICECQgggAACCCBAQGAfQAABBBBAAIFAgIAQkDABAQQQQAABBAgI7AMIIIAAAgggEAgQEAISJiCAAAIIIIAAAYF9AAEEEEAAAQQCAQJCQMIEBBBAAAEEECAgsA8ggAACCCCAQCBAQAhImIAAAggggAACBAT2AQQQQAABBBAIBAgIAQkTEEAAAQQQQICAwD6AAAIIIIAAAoEAASEgYQICCCCAAAIIEBDYBxBAAAEEEEAgECAgBCRMQAABBBBAAAECAvsAAggggAACCAQCBISAhAkIIIAAAgggQEBgH0AAAQQQQACBQICAEJAwAQEEEEAAAQQICOwDCCCAAAIIIBAIEBACEiYggAACCCCAAAGBfQABBBBAAAEEAgECQkDCBAQQQAABBBAgILAPIIAAAggggEAgQEAISJiAAAIIIIAAAgQE9gEEEEAAAQQQCAQICAEJExBAAAEEEECAgMA+gAACCCCAAAKBAAEhIGECAggggAACCBAQ2AcQQAABBBBAIBAgIAQkTEAAAQQQQAABAgL7AAIIIIAAAggEAgSEgIQJCCCAAAIIIEBAYB9AAAEEEEAAgUCAgBCQMAEBBBBAAAEECAjsAwgggAACCCAQCBAQAhImIIAAAggggAABgX0AAQQQQAABBAIBAkJAwgQEEEAAAQQQICCwDyCAAAIIIIBAIEBACEiYgAACCCCAAAIEBPYBBBBAAAEEEAgECAgBCRMQQAABBBBAgIDAPoAAAggggAACgQABISBhAgIIIIAAAggQENgHEEAAAQQQQCAQICAEJExAAAEEEEAAAQIC+wACCCCAAAIIBAIEhICECQgggAACCCBAQGAfQAABBBBAAIFAgIAQkDABAQQQQAABBAgI7AMIIIAAAgggEAgQEAISJiCAAAIIIIAAAYF9AAEEEEAAAQQCAQJCQMIEBBBAAAEEECAgsA8ggAACCCCAQCBAQAhImIAAAggggAACBAT2AQQQQAABBBAIBAgIAQkTEEAAAQQQQICAwD6AAAIIIIAAAoEAASEgYQICCCCAAAIIEBDYBxBAAAEEEEAgECAgBCRMQAABBBBAAAECAvsAAggggAACCAQCBISAhAkIIIAAAgggQEBgH0AAAQQQQACBQICAEJAwAQEEEEAAAQQICOwDCCCAAAIIIBAIEBACEiYggAACCCCAAAGBfQABBBBAAAEEAgECQkDCBAQQQAABBBAgILAPIIAAAggggEAgQEAISJiAAAIIIIAAAgQE9gEEEEAAAQQQCAQICAEJExBAAAEEEECAgMA+gAACCCCAAAKBAAEhIGECAggggAACCBAQ2AcQQAABBBBAIBAgIAQkTEAAAQQQQAABAgL7AAIIIIAAAggEAgSEgIQJCCCAAAIIIEBAYB9AAAEEEEAAgUCAgBCQMAEBBBBAAAEECAjsAwgggAACCCAQCBAQAhImIIAAAggggAABgX0AAQQQQAABBAIBAkJAwgQEEEAAAQQQICCwDyCAAAIIIIBAIEBACEiYgAACCCCAAAIEBPYBBBBAAAEEEAgECAgBCRMQQAABBBBAgIDAPoAAAggggAACgQABISBhAgIIIIAAAggQENgHEEAAAQQQQCAQICAEJExAAAEEEEAAAQIC+wACCCCAAAIIBAIEhICECQgggAACCCBAQGAfQAABBBBAAIFAgIAQkDABAQQQQAABBAgI7AMIIIAAAgggEAgQEAISJiCAAAIIIIAAAYF9AAEEEEAAAQQCAQJCQMIEBBBAAAEEECAgsA8ggAACCCCAQCBAQAhImIAAAggggAACBAT2AQQQQAABBBAIBAgIAQkTEEAAAQQQQICAwD6AAAIIIIAAAoEAASEgYQICCCCAAAIIEBDYBxBAAAEEEEAgECAgBCRMQAABBBBAAAECAvsAAggggAACCAQCBISAhAkIIIAAAgggQEBgH0AAAQQQQACBQICAEJAwAQEEEEAAAQSaIEAAgS8XaGhoqMx8enpaef+1b2qX42X/6LK+1XK+dv3/7Plr6/VHbXwda5cjZTn/2WvO8hFIR4CAkM62pCZ/kkBDQ6MaGrPjoyM7Ojm2k5PTrOFpbGy0UlOTlRob7OT4RM3P519e5kTLONjft4PDo6yAL6O5qdmampusQS3YyWdaMW/0/MfX51A/xycnWk6DlUqlbBmlUqOdfuH6fH6Nv34Or19tFRobS5nf55bUIBuPX0eq04nq5D9esFR2btT7bNpnFlRsr6Ojw8zoWNsr82mSjzuXvnx7fear+BiBpAUICElvXioXK9Coxn93a93m5xdscXHJtvf28sbPG65Ss/X09dng4JCNjlyyFjXM5zbumr/h9MSW52dtenbWVtc3axrRBmtubbOhS8N25coV6+1qP7ch9ICxt7Npc+/f24clrc/OfrmKagQbStbd02fDoyM2NjKi9VFDWNtSx2J8QfmG02N79vjvtri5Z1mDbo1297t/tauDnQoy50WoBnPnrfUVOc/b8sqq7ewdyCefv9TUYj29fTY0PGKjw0PWrBOj59XLfXY2121u7r0tLi1ny8lXW6GusUnL6ZfPqJZzyZq0nOI7vqBqzILAhRNoWFlZOe+/2guHQYURqBXwRmtx7q39+tuk7R4cqoHJj3Br5zlVo3+qRrCn75I9ePjABno+0rgrHNjJgU3+9qu9mV2wEx0nF70AvqyikfKj45a2Lrv74JFdHR2w06xnoPpt/v1bK/P2+Jentrl73vrk3eh9Q2P2ww+PrKOlVFl+dUl/zjvvKdjbXLT/+q+fbO84/9/KiWwe/uU/7MZI97kBQf0d9n76lT2ffGt76lXxRv7sy51Nyxq4dNkefXdf9WoK6tWogLY6/86e/PrMtvePzt9epw02OHrNfvj+vrUqRP2TM9TZqvE3Av9nBcL/Ev/PriorhsA/T6BojJ8+fW57R8dZ970fEWcNu1ajaOC9UfRTDJtrC/bzzz/bih856+/qS2UUCV7//tSmZhbUxpWyBtDLezAoutH9bz9FcLS/bb89+cUWVrfqGkrvNj/YXrUnTxQO9urXp/guX4Y3rn6KYX3pvT357aUdqZ2uXZti3m/1u+KgdT852rVXLxWmjhSBCiv//Ykvc6sPM6/s6fMpO1CocIO8bLVQXi93a7DlD+/s8ZNn2bxadOXl22tnbdGe/vq77Ryc1G2vYqZiOe6zPD9tvz17rS0Thr5ifn4jcNEFCAgXfQ+g/h8XONqzly9e6khYbXq5JfIG3Y+LS83NWQOU9x7kxT0oHO6s2/OXr9QoV1sub9RW5qZtanZRZwBK5e/Kj/LbO7ptYKDPmjR70YvgDd3p8a5Nvpyyw/JRuBfSiAObnpq09Z2jLJBkC8oOfRusvaPT2tpaKsvwzxr1XasLMzY9t5IdSWfzf+N/HR8fZWMptrc2bWH2nf38P3+3mQ9rdcHmk18p16PdTZucmi73quRzu2ujTt909/RYe2t9vUqlJltffK96LStIVP/31XByZK8nX9qWwkER0DJTzeM+ra3NdT4+ruHD7BubW1r/03w+WXc+ROD/gQBjEP4fbCRW8Z8r4I305vKSLa/vZAPk/Nu9sWlq67SJ23dsdKhPpwyO1C0+ZVPT7+1YgcAjgXdxry/P24fVG3ZloCPrUj9R0Hj7ZjqbJ+9Y8JDRZDfvPrCbV4ezo/3N5Tl78vR3NW7HWRjxXoDt9WVb2923S52tWeN5sLtqc7WNr9anobnN7j18ZGPl9Zl5/dJevplVmsgbTjW/Nj83Z+NjgzpOrvZ6eH1qX1nwycJGdWrRA1Cdkr8rejxOVa9f/udvtqbAIoxsYOGpHD52euDsMoq/vYFfW5y3rf1D1TsPT74unb2X7NGjB9bTobrLefbNpL14PaNiefBqbDjJxoTcuDxkOkOQNfC7G0ty36x+v5ZTau2yh48e2nB/t0LXgb2ZfJ714mTBwkPf8aHNzi3Ir/eTvRzF+vIbgYsmQEC4aFuc+n5WoLHh1NbW1+xQg+oqB/1qYm/eeWi3rg7asa4QMGuxiXvfqeE5tJfTH8pHoTptoBH4y4vLdlmD8hqUCLZWlm11a7fScPkVEMPXbtqdW1fVrvpo/1PrH7lqN7c27PfJmezI31fQx/Nt7xzYcFerqdNdA/dWsvPzDeqpKD6/cvWWjV8e1mLUSJfa7Mbtu7amAX4LG/o+NYDeWO9urNqmGuD+9iYNbtyy9c2drAs/W0j5Xx3dvdZZ0wPh4WB3e9O2tnc9VVRmVSSxvv4Ba1GXh+eJo/0DXYnhocZny6/0qMz8BW/ceWtnTyEgO/OSl1DPwe17D2ywp8OO5NykAYo3J+7a+uqKza3uZPXydTpSePKBit774qu4KvMDP7VR4zN+87ZdGRlUlnOfDpu4e89WV9dsZdsDib6zvH12NO6hSyMfvU68EECgKkBAqFrwDoFMwAcH7m1tVRtHdXmXWnttZKgnCwfeqPvrREe9I5dG7M3MBx2ra/bs51SXHqrx0l8lHemurq1kpwrydkvDGZva7Nr1y7qiQZdLajneGHvgGL12RwPnblS+07+iSacyfOR/qeHINtTQe09FcZKiUZfrXdKVE6eVSwq1jk2tdkmj/BfWptUg5mtzpHVZXd22wc5+Oz7YtedPH2uMQOVrsoGQfSPj9uNfHigCqXdD63N6vJ/Nt7CmBtlbUr3cpKNv1H7862D2dzZNK5n1PvjnZZPzeh4qhereeG+Kv/Lv8Ba6qdRineo5yC/dLC9XKa2zq8tsebtcr9qFqPdGvQxrunLhpPDRckotuipkqF91UQjz2X0btrTboE7prGxqLIh6e5Qm7PBgx9Y39qxnSFdZlOtQu3TeI3CRBQgIF3nrU/ePCnhjd3BwoM/KjaPeNbW26mjVO+rzJq0o6Kcj/Ai2dnK5uVPjdGLbGxtqdL2cz3NqzW3d6jpv05I1QFGNV3G5no8ZaO/oyBvcckNVNLrHmm97YyvrkcgX5IPw2qyrzUfy51P83x5K2tva1fYVDa++UmV31DtxctpvXbrSYuLmVQ0IfKsGMo8a3suxujirsQNjNj7SlwWWhem3tri2Xen1yL5E33fn3h1rb/Z7EejLdMng+J17NqpRkFn9fZIqvrigywuXN2rW1dfs46/T00brUhho1PoWr2P1yOzsHliv6uE9CB44dDMD295WOCi+SJUuqccjGxuij/1+Bztb6hnRtvCXL625qd06WuuvdPCrTTrb21Wu+n3us6tln17qVikNOOGFAAIVAQJChYI3COQC3pV+5dZ9G7h2nEcENUhNre06us3a+AqTN4g721tqyFSinAHyD31MgvcM7Nnm1n7WcPp0DwPtusfB3taqvZ6ZsWV1d+/75ZNq+FrbO2xw6JKNjo6duQ+CN8hqAPerjZeHgpLWp9kbRP+jeOltqzecml6Mb/QrKPYP1I2vz7xdvHx9Qvdz0P0G1KuQ9w7kR+Bvpl6ph+Sv1ny4YVNvZ9U7olMU5eWqnbbx27dtpL9T6+LpwA++SzZ2dbzSZvu0knotjnbXdH8GDfzL5XzyuS/36NU9JNqaptWr4UHDT9Hs2+SLZ9amMQhdqovX/d3bVxpfUKyvOzbonhGD2h5e/xPlh0Pb0/iNyst7C+TZ7MurTW6qvw/m9HrntfASCghln0p53iCAQCZAQGBHQCAQ0Ln2oWHrr5vulySqhSm//Jz70d6WvXmnxlRNadGYnqpx9nP63l1/rNMIdVci6JTEgcLBz3+fs12dv68d0HdwsJ+dZ383PWN3dB+E6xpYmN0HQSFE3QDZeIhKo6vVKCmt5A18dZ08LDTrtETW0GqyF1UbqXXQnQn1WaN+GnQa4u79e7b+3z/bnlpJ/9yPvHc1KPLtzJy17y/pSgmFmvK5fF+H7oExmxi/kjXGRf39t98xsf6lBlnf8cUvNeQtHQN24/qY/T41o2LqjdG6bK0u2N/+c926uzs1zmFH4xR2tZ65sF/h0DVwya5fHimvj3+n3+Eyr0vx3U26O2XW+1ATEDwstOiqiKzS5dV0owMfo/A16118Cb8RSFyg+P9a4tWkegh8nYA3jH60XP2pNnzeiJ0e6nz+r7/a8qY3pt7M6KXGq6mlQ0fifR9tKL0x3lWPw74G9vn1/sXLGzJvAH3a8eGOPfvlsU3Pr1YChA9CLE5F5GXUo6EbBfnpgepaFZ8US63+PlbrWbR/2ViC3iG77YMktb7Fy7vd3716ZpPT81nvQDY9CxTtChR3TL31lWUUZb7Fb89c4xr8ebMIRFqoW5z42AkN8PRBjEU48BXwsSDff/+9dbf6oMK89j4IsfZG1z65RZc15gGhfi3Pevmnx9oeH5teX5K/ELh4AgSEi7fNqXGEgF/KuL+9bv/4x0/29sNKNRxomccnDTZ2bdx6O/yaezWousHS2YFvlaNaNYIdHV0aM9CqeasNeNYYnh7ohkMvbbt82aMHhGw55RzyqdX3I//ivg3ZfAofR1rOqVriorg3ypfHJ3TKoKvaK6L5To4OdCRenc9PU1ybuGOX+jqq833qy//AZx6uVj/M2QeNW1AyqS5BKxs08FrHY91IaurVW9PtDvL6aD5fbw9QRf2KhdSdXihPbNR9FGq+Rd/hV2PkV5MU5fiNAAK5AKcY2BMQ+BIBtSTeUbAy985+f/ZCdzM8rNwjwYv7qPuhK7fsngYB5kfmfhSshwVlR+nVpsvDQFtXv92/rzEOvV3ZCPyF92/t2cs3lW5y76HY316z2fllu3djVEuvlv/cqnqPR3FkXZm3tkX0iZ5eslMNunzwb//IbgblDWXt93hPQ++lq3ZL3f9KB/7hN395PXfWPujukL/atsYgFMHGv7tRp0o69HyKYzX+e3oug+P7KjboypCFmSkN9myz7+5cK6/T2Qr6jB9f3Wxg6NmPPlL87Cz8jcBFFCAgXMStTp2/SiA/pbBnryZf2Ot3c9ntiyvjB9TY+hH5yNUJ++7BhB4ApONW/e0NlN85sdJjkH2jjnIbNQbg4Xc2NtClwY0aBKnL+q7dvGsnhwf22yudhy8fRftlkGu6RPL4ZFSXO7ZowJ0uyfOwUW7Is6dH6nv8T/+66uvMcbNWxrvbG7NnDlTn9Ea4s3fY7kxct6cv3qh4TSupMo2t3Xbv3m1TT35Wv+ryv907vzzRB0f63Q/99sf+8p6OPj1v4d7d29bVrrsoap6F2bfZcxqK20b7rHPTr+3y2LANdbdVrjDZ13q7h4cdP21wBiZb/tmJvq1a9D1ZOPE/eCGAQEWg5v8KlWm8QQCBsoCHgwPdQvnxz3/P7lLo1zXUHul6A3/r/nf2Lw9vZ08ZrLYxamT90cJZg583PN570N43YEM9GnyncOAvP9r3rvyRsTFrq7lZj48v2NP5dx8/4KHhbHf70cFR1piWV/PcX/7Nvr6VAY41c/o9D3p6uutOk+Qf+7q3WFtLs/78cxpNP5Wyv7tuizV3P3Sfpo5e3f3wkfV3d2RjMJqaW+36rXt284rf86Hck6H19ns6LC2v5mkgq19NxfT2wH2qG6P+wzN/+bM0slRxZjp/InDRBQgIF30PoP7nCmRd/Zur9vinn21+Rbfx9R6BbG416tkR+JD95cd/t7s3rmZXLdS1R2pXGxqbs0cuV75A05oUGsoLqU5WwUY1xqXylQPFB94een+AP5eg3e9eWG6s1R7akXocstMX+QrlRfTB/q7fmdDviFB+6ZLAtha/tK+YUP6teU90Pv/FCz07Is8q1Rm8t2J72V5Ovavew6H66bd5p+8/0IDNw+xeB/kivUHvHhiyTo2IrL1Rkt8galg3gPLHMxcvv1BxU3eG9EswS6VWDaL0qxnKn2rZx/v5nRYrDvrIQ9ae7g5ZCRqa5n0O7fLRR7wQQOCMQM1/cmc+4U8ELrCANyZHe5v2RFcULOsJjf5wH395I+bX4V+9cdf+/cd/1QA+vzfAx0bBa8S9GvYuf5ZC0XCVy3/0eF7z1Mzmc+ooXq2W1qOkmxJ1drXVNYAnutphV7cIru0Z8CsRdnZ3df+F6pL8Jk2teiaBX3ZZ+/KD5hk94+BDzd0S6z7XDPN6BPPs4kal7rWff4v3h7oHRKVRLy/Qezvq19Q/cIvidE31m72shyYPXe0d1Yc6ucnRwZbGVviNlqrz+5L9qggPFZWXLj1ta+1QifBbK/PwBoELKkBAuKAbnmp/WsAbjGmNOVjScw2K8+PemvlljI/+5a/2vU4ptDX7pYr5Mw98TELxUzkdoB6B7j7dndDHDvicaqx39IyHbd0DwU8hFC8vt7uxrssf1eCXJ3uRjnadX/dbJqvnoqunuhz/Tr850IpuHlS7HH+2w4aW7/dlKF4l3Q+gxx9WVNMSe8/I5vJ7m3w7p/LVeWuvpvDvaNBNiiZfPM8eIlWpU7Hgb/Db7+Wgr6m8vGHfV8Dxda2ZnLntbm1nPSOVmYs3atcbFBC6unoqzo54dKj7SmxU767oX3Sqq0E2NmuvllCI02DIbp3yqUtxxbL5jcAFF6j+3+GCQ1B9BAoBbzR315fs3fySGv3q/Qr8aHzs2nXraS/ZyuKizoEv2/JHfjZ029+sQVKjNDgwaM0aVZcdn3rDtb9lz19Mmd/4z+974D8neh7A1Ovp7CqGYh1O9b19fYN6pELeY9GnoNGcPV8hn8MHMc7P6A6Eh95ToeUoCGxpnecX17MBiT6XN/jNGmzY770PRTeG1sG/78XzyWwdikDiN4Ea0kOjuturj0V2h72NZXvxalrV+cb/q1AIaOvu1riNUuXY3b9va2Xe3i3oUc66HNHr5Tc8OtJYhSmFGT0WquBRmUbr1mWi2W2ldcvmwYFezV8TKzS4cUY3nXLnpmw5JdvQshdXt7RN8/ncpLWjT7e+rta58gW8QQABPXeWFwII1Al4c764uKCnJ+pYXI1L8fJehfdvXtrs6/O7o/3hSd0j1+zHHx5Zk8YCtPcO6nHDXTazvJl11XvjtDL/xv6m8/9XRi/p4UvH9mFu1pbODNZrae+z0eF+dQrktwDq6O23vs42WyzfmMkb021dIvjTTz/ZmD+06XDP5t7PqFtdR9/lVt8b/T7dvjkb/OgDGvTywPF66oUtruuJj8WVAx4kNDjw/sOHtvn+uT1+9laBIG9EfX0X3k3Z7NCgXdPzCvzhUd/i5eGltb3XBnWKZmapehrDg8/LXx/bxvKY9ftgTt0GeWF+zja29qoNu8JFU2unHpQ1kF2C6SMuunV3xe62KT0i+ygblOm9MutLM/bTzwfZfMd7O/Z+dlZ3pKxULes0uDQynAe4ss+3qBvLQCAVAQJCKluSenwjAR1h64FBqxohX3nIUs2SfQDgp17ePV7bna8L+u3W7QlbXv/F9suNt59n31r5YM9WFr3jW//kpymK5Z7oiPja+E09i0C9C+UT5o16+NCNm9dt5ZcXOoWQjzzwNnxTy9jQj788GBThILsioL1HtzH2J0fmIcOfn7C+9M5evVs4c2qhUWMqJqyrVQ+MunrDht5/sEU94TA70vZl6lTDS51q6O/9N+v0hzV9m4ygyyuaVadxW1x5oks4yw23V0rfN/furc15RpGnh6HqqRQfIKobON24pcDkz2rw7aFelJYu1fWK/fLstRaUhzrvKFhdnM9+cp/q1SA+ULFF96O4psdlq3vFP+aFAAJnBKp9dmc+4E8ELqrAiR53vKknCmaNd7nBLxr+L/pdA5fdb6B/xB7ev6Uj2+rzHLzR8wa4+O1FfNl+hD56bcJuXRuuG23vvQEDY+M2cX0kO5dehJC8fD7+oRIOvNFsaNbTFx9Yvzei3qCr4T3Z37Tnz16q290n5EHGB1h26imPN3QZod9EyIPIxK0bujwz/zz7HpXd21iyF5PTdeMbfJ0/9jpr9LF5fJo37t2DY/bg3q38VEq2ov6JApN6N7IxHerBqdRLDbnfrfLyjdt250b9DZz8ToojehDV+NiQBmlWL3EsxoX4b88e/squ8tBjt+8/eKBeh/onYuZz8G8EEHABehDYDxCoFVAj4o16SQPfWnQkXzROtbN86r03uC0+4l4zeTPsL2/ch69M2L81t9nkq9e2vrmjhq7+qNXHOrS0ddiV8Vs2ce1yFibU5tW8vKeh0W7ongvNGnX/Zua97eoOg/XL0RUPalA7ewfs5sQdu+ynKMrf40fT79+/s429Y43aby0v15dZspvq4WjT+XsPJ9mNioav2NXRDzarrn9vWLOXVmblw4wt6Yh7uFe3Xq5fucp6+q2MW/yyyvLpCx8wWTc2oDJn/sZXb+y6nvXQ3mmTk7LR+A1/vHVd1aXpAxrbdRpk/OaEXb18SUv1AFOzMP1x2tBkt7/7Qct6ZW9n5/WEx8NK/fM5fTkatKmxHRN379jwQM+Zz2uWx1sEELCGlZWV2v/MIEEAATU+WSP1B//L8KP64rLIWkxvbP3WweurKwoJ27r/QB4SvFHt6OzSoMRea9fTBj2gnP/VfjpC9xDY37X1tTXb0nX9RUgo6eZG3T091qubHzWrQS3CQbEO+ZF18Vf+2wOQN5r1ra3/qaP18vrVlsie9eBp45yXf2f992r5CgufC1q5zaFt6WqO9Y0tPWGxfAmk1q9Zd5Ls6u6xnu4ua2luOrP8Myui+X31DvZ2bVWP097WVREe0LxXosmvWOjts14txx8VXb+eZ5bDnwggQEBgH0DgPIHPNWrnlSu6/z/+ed7A+7J9vqypLb8vuuY/Xq5+qpcvfmo/8YY9bxBrp1bfn63Tp9b17LzeJ1J31F5dbN27+nJfVqZYQHbKRHXLvkv/Vi2zjzKbTwanYgn579ymelqh+PRzPsV8/EYAAU4xsA8gcK7ApxrPcwt99oPqOITPzvqJGb4mTNQu5mvq9DXz/tHvqC3n77335OyNHc/O8yV/5z7fYklf8m3Mg0CaAgxSTHO7UisEEEAAAQSiBAgIUXwURgABBBBAIE0BAkKa25VaIYAAAgggECVAQIjiozACCCCAAAJpChAQ0tyu1AoBBBBAAIEoAQJCFB+FEUAAAQQQSFOAgJDmdqVWCCCAAAIIRAkQEKL4KIwAAggggECaAgSENLcrtUIAAQQQQCBKgIAQxUdhBBBAAAEE0hQgIKS5XakVAggggAACUQIEhCg+CiOAAAIIIJCmAAEhze1KrRBAAAEEEIgSICBE8VEYAQQQQACBNAUICGluV2qFAAIIIIBAlAABIYqPwggggAACCKQpQEBIc7tSKwQQQAABBKIECAhRfBRGAAEEEEAgTQECQprblVohgAACCCAQJUBAiOKjMAIIIIAAAmkKEBDS3K7UCgEEEEAAgSgBAkIUH4URQAABBBBIU4CAkOZ2pVYIIIAAAghECRAQovgojAACCCCAQJoCBIQ0tyu1QgABBBBAIEqAgBDFR2EEEEAAAQTSFCAgpLldqRUCCCCAAAJRAgSEKD4KI4AAAgggkKYAASHN7UqtEEAAAQQQiBIgIETxURgBBBBAAIE0BQgIaW5XaoUAAggggECUAAEhio/CCCCAAAIIpClAQEhzu1IrBBBAAAEEogQICFF8FEYAAQQQQCBNAQJCmtuVWiGAAAIIIBAlQECI4qMwAggggAACaQoQENLcrtQKAQQQQACBKAECQhQfhRFAAAEEEEhTgICQ5nalVggggAACCEQJEBCi+CiMAAIIIIBAmgIEhDS3K7VCAAEEEEAgSoCAEMVHYQQQQAABBNIUICCkuV2pFQIIIIAAAlECBIQoPgojgAACCCCQpgABIc3tSq0QQAABBBCIEiAgRPFRGAEEEEAAgTQFCAhpbldqhQACCCCAQJQAASGKj8IIIIAAAgikKUBASHO7UisEEEAAAQSiBAgIUXwURgABBBBAIE0BAkKa25VaIYAAAgggECVAQIjiozACCCCAAAJpChAQ0tyu1AoBBBBAAIEoAQJCFB+FEUAAAQQQSFOAgJDmdqVWCCCAAAIIRAkQEKL4KIwAAggggECaAgSENLcrtUIAAQQQQCBKgIAQxUdhBBBAAAEE0hQgIKS5XakVAggggAACUQIEhCg+CiOAAAIIIJCmAAEhze1KrRBAAAEEEIgSICBE8VEYAQQQQACBNAUICGluV2qFAAIIIIBAlAABIYqPwggggAACCKQpQEBIc7tSKwQQQAABBKIECAhRfBRGAAEEEEAgTQECQprblVohgAACCCAQJUBAiOKjMAIIIIAAAmkKEBDS3K7UCgEEEEAAgSgBAkIUH4URQAABBBBIU4CAkOZ2pVYIIIAAAghECRAQovgojAACCCCAQJoCBIQ0tyu1QgABBBBAIEqAgBDFR2EEEEAAAQTSFCAgpLldqRUCCCCAAAJRAgSEKD4KI4AAAgggkKYAASHN7UqtEEAAAQQQiBIgIETxURgBBBBAAIE0BQgIaW5XaoUAAggggECUAAEhio/CCCCAAAIIpClAQEhzu1IrBBBAAAEEogQICFF8FEYAAQQQQCBNAQJCmtuVWiGAAAIIIBAlQECI4qMwAggggAACaQoQENLcrtQKAQQQQACBKAECQhQfhRFAAAEEEEhTgICQ5nalVggggAACCEQJEBCi+CiMAAIIIIBAmgIEhDS3K7VCAAEEEEAgSoCAEMVHYQQQQAABBNIUICCkuV2pFQIIIIAAAlECBIQoPgojgAACCCCQpgABIc3tSq0QQAABBBCIEiAgRPFRGAEEEEAAgTQFCAhpbldqhQACCCCAQJQAASGKj8IIIIAAAgikKUBASHO7UisEEEAAAQSiBAgIUXwURgABBBBAIE0BAkKa25VaIYAAAgggECVAQIjiozACCCCAAAJpChAQ0tyu1AoBBBBAAIEoAQJCFB+FEUAAAQQQSFOAgJDmdqVWCCCAAAIIRAkQEKL4KIwAAggggECaAgSENLcrtUIAAQQQQCBKgIAQxUdhBBBAAAEE0hQgIKS5XakVAggggAACUQIEhCg+CiOAAAIIIJCmAAEhze1KrRBAAAEEEIgSICBE8VEYAQQQQACBNAUICGluV2qFAAIIIIBAlAABIYqPwggggAACCKQpQEBIc7tSKwQQQAABBKIECAhRfBRGAAEEEEAgTQECQprblVohgAACCCAQJUBAiOKjMAIIIIAAAmkKEBDS3K7UCgEEEEAAgSgBAkIUH4URQAABBBBIU4CAkOZ2pVYIIIAAAghECRAQovgojAACCCCAQJoCBIQ0tyu1QgABBBBAIEqAgBDFR2EEEEAAAQTSFCAgpLldqRUCCCCAAAJRAgSEKD4KI4AAAgggkKYAASHN7UqtEEAAAQQQiBIgIETxURgBBBBAAIE0BQgIaW5XaoUAAggggECUAAEhio/CCCCAAAIIpClAQEhzu1IrBBBAAAEEogQICFF8FEYAAQQQQCBNAQJCmtuVWiGAAAIIIBAlQECI4qMwAggggAACaQoQENLcrtQKAQQQQACBKAECQhQfhRFAAAEEEEhTgICQ5nalVggggAACCEQJEBCi+CiMAAIIIIBAmgIEhDS3K7VCAAEEEEAgSoCAEMVHYQQQQAABBNIUICCkuV2pFQIIIIAAAlECBIQoPgojgAACCCCQpgABIc3tSq0QQAABBBCIEiAgRPFRGAEEEEAAgTQFCAhpbldqhQACCCCAQJQAASGKj8IIIIAAAgikKUBASHO7UisEEEAAAQSiBAgIUXwURgABBBBAIE0BAkKa25VaIYAAAgggECVAQIjiozACCCCAAAJpChAQ0tyu1AoBBBBAAIEoAQJCFB+FEUAAAQQQSFOAgJDmdqVWCCCAAAIIRAkQEKL4KIwAAggggECaAgSENLcrtUIAAQQQQCBKgIAQxUdhBBBAAAEE0hQgIKS5XakVAggggAACUQIEhCg+CiOAAAIIIJCmAAEhze1KrRBAAAEEEIgSICBE8VEYAQQQQACBNAUICGluV2qFAAIIIIBAlAABIYqPwggggAACCKQpQEBIc7tSKwQQQAABBKIECAhRfBRGAAEEEEAgTQECQprblVohgAACCCAQJUBAiOKjMAIIIIAAAmkKEBDS3K7UCgEEEEAAgSgBAkIUH4URQAABBBBIU+B/Ad/f6G5uHRROAAAAAElFTkSuQmCC">
                </a>
              </li>
              <li class="span3">
                <a href="#" class="thumbnail">
                  <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px; " src="data:image/png;base64,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">
                </a>
              </li>
            </ul>
          </div>
          
          
          
          <div class="row">
          
          <h3>With Content</h3>
            <ul class="thumbnails">
              <li class="span4">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAGQCAYAAAByNR6YAAAy50lEQVR4Ae3dZ3ccR5Ym4IC3BEHQG0mQKFKUSHVPz3zYnzZf9//tjlreUKJEb0ECNPBu781CAQlDI3WI7D166hwKYJmbmU9FM9+OiIzsefLkyWbxIECAAAECBAgQqCbQW62SQgQIECBAgAABAo2AgKUhECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAEC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BKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBA4P8B5KQoVeNStNkAAAAASUVORK5CYII=">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAGQCAYAAAByNR6YAAAy50lEQVR4Ae3dZ3ccR5Ym4IC3BEHQG0mQKFKUSHVPz3zYnzZf9//tjlreUKJEb0ECNPBu781CAQlDI3WI7D166hwKYJmbmU9FM9+OiIzsefLkyWbxIECAAAECBAgQqCbQW62SQgQIECBAgAABAo2AgKUhECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAEC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BKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBA4P8B5KQoVeNStNkAAAAASUVORK5CYII=">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
                  </div>
                </div>
              </li>
              <li class="span4">
                <div class="thumbnail">
                  <img data-src="holder.js/300x200" alt="300x200" style="width: 300px; height: 200px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAlgAAAGQCAYAAAByNR6YAAAy50lEQVR4Ae3dZ3ccR5Ym4IC3BEHQG0mQKFKUSHVPz3zYnzZf9//tjlreUKJEb0ECNPBu781CAQlDI3WI7D166hwKYJmbmU9FM9+OiIzsefLkyWbxIECAAAECBAgQqCbQW62SQgQIECBAgAABAo2AgKUhECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAECBCoLCFiVQZUjQIAAAQIECAhY2gABAgQIECBAoLKAgFUZVDkCBAgQIECAgIClDRAgQIAAAQIEKgsIWJVBlSNAgAABAgQICFjaAAECBAgQIECgsoCAVRlUOQIECBAgQICAgKUNECBAgAABAgQqCwhYlUGVI0CAAAECBAgIWNoAAQIECBAgQKCygIBVGVQ5AgQIECBAgICApQ0QIECAAAEC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BKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBAQMDSBggQIECAAAEClQUErMqgyhEgQIAAAQIEBCxtgAABAgQIECBQWUDAqgyqHAECBAgQIEBAwNIGCBAgQIAAAQKVBQSsyqDKESBAgAABAgQELG2AAAECBAgQIFBZQMCqDKocAQIECBAgQEDA0gYIECBAgAABApUFBKzKoMoRIECAAAECBAQsbYAAAQIECBAgUFlAwKoMqhwBAgQIECBA4P8B5KQoVeNStNkAAAAASUVORK5CYII=">
                  <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          
          
          
        <div class="row">
        <h3>Variable Arrangements</h3>
          <ul class="thumbnails">
            <li class="span4">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/360x270" alt="360x270" style="width: 360px; height: 270px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAtAAAAIcCAYAAADffZlTAABAAElEQVR4Ae3diXNUR5o36hTa0YZA7KvBxnu3p3vm+/7/iIl7I+4svdhubDBmM7uQBNoX0H3fUwhVlUqCtN3ubvupHo1KVW+d5TkZ+Hey8uTpm5ub2y4eBAgQIECAAAECBAi8k8Chd6pSRIAAAQIECBAgQIBAIyBAawgECBAgQIAAAQIEKgQE6AospQQIECBAgAABAgQEaG2AAAECBAgQIECAQIWAAF2BpZQAAQIECBAgQICAAK0NECBAgAABAgQIEKgQEKArsJQSIECAAAECBAgQEKC1AQIECBAgQIAAAQIVAgJ0BZZSAgQIECBAgAABAgK0NkCAAAECBAgQIECgQkCArsBSSoAAAQIECBAgQECA1gYIECBAgAABAgQIVAgI0BVYSgkQIECAAAECBAgI0NoAAQIECBAgQIAAgQoBAboCSykBAgQIECBAgAABAVobIECAAAECBAgQIFAhIEBXYCklQIAAAQIECBAgIEBrAwQIECBAgAABAgQqBAToCiylBAgQIECAAAECBARobYAAAQIECBAgQIBAhYAAXYGllAABAgQIECBAgIAArQ0QIECAAAECBAgQqBAQoCuwlBIgQIAAAQIECBAQoLUBAgQIECBAgAABAhUCAnQFllICBAgQIECAAAECArQ2QIAAAQIECBAgQKBCQICuwFJKgAABAgQIECBAQIDWBggQIECAAAECBAhUCAjQFVhKCRAgQIAAAQIECAjQ2gABAgQIECBAgACBCgEBugJLKQECBAgQIECAAAEBWhsgQIAAAQIECBAgUCEgQFdgKSVAgAABAgQIECAgQGsDBAgQIECAAAECBCoEBOgKLKUECBAgQIAAAQIEBGhtgAABAgQIECBAgECFgABdgaWUAAECBAgQIECAgACtDRAgQIAAAQIECBCoEBCgK7CUEiBAgAABAgQIEBCgtQECBAgQIECAAAECFQICdAWWUgIECBAgQIAAAQICtDZAgAABAgQIECBAoEJAgK7AUkqAAAECBAgQIEBAgNYGCBAgQIAAAQIECFQICNAVWEoJECBAgAABAgQICNDaAAECBAgQIECAAIEKAQG6AkspAQIECBAgQIAAAQFaGyBAgAABAgQIECBQISBAV2ApJUCAAAECBAgQICBAawMECBAgQIAAAQIEKgQE6AospQQIECBAgAABAgQEaG2AAAECBAgQIECAQIWAAF2BpZQAAQIECBAgQICAAK0NECBAgAABAgQIEKgQEKArsJQSIECAAAECBAgQEKC1AQIECBAgQIAAAQIVAgJ0BZZSAgQIECBAgAABAgK0NkCAAAECBAgQIECgQkCArsBSSoAAAQIECBAgQECA1gYIECBAgAABAgQIVAgI0BVYSgkQIECAAAECBAgI0NoAAQIECBAgQIAAgQoBAboCSykBAgQIECBAgAABAVobIECAAAECBAgQIFAhIEBXYCklQIAAAQIECBAgIEBrAwQIECBAgAABAgQqBAToCiylBAgQIECAAAECBARobYAAAQIECBAgQIBAhYAAXYGllAABAgQIECBAgIAArQ0QIECAAAECBAgQqBAQoCuwlBIgQIAAAQIECBAQoLUBAgQIECBAgAABAhUCAnQFllICBAgQIECAAAECArQ2QIAAAQIECBAgQKBCQICuwFJKgAABAgQIECBAQIDWBggQIECAAAECBAhUCAjQFVhKCRAgQIAAAQIECAjQ2gABAgQIECBAgACBCgEBugJLKQECBAgQIECAAAEBWhsgQIAAAQIECBAgUCEgQFdgKSVAgAABAgQIECAgQGsDBAgQIECAAAECBCoEBOgKLKUECBAgQIAAAQIEBGhtgAABAgQIECBAgECFgABdgaWUAAECBAgQIECAgACtDRAgQIAAAQIECBCoEBCgK7CUEiBAgAABAgQIEBCgtQECBAgQIECAAAECFQICdAWWUgIECBAgQIAAAQICtDZAgAABAgQIECBAoEJAgK7AUkqAAAECBAgQIEBAgNYGCBAgQIAAAQIECFQICNAVWEoJECBAgAABAgQICNDaAAECBAgQIECAAIEKAQG6AkspAQIECBAgQIAAAQFaGyBAgAABAgQIECBQISBAV2ApJUCAAAECBAgQICBAawMECBAgQIAAAQIEKgQE6AospQQIECBAgAABAgQEaG2AAAECBAgQIECAQIWAAF2BpZQAAQIECBAgQICAAK0NECBAgAABAgQIEKgQEKArsJQSIECAAAECBAgQEKC1AQIECBAgQIAAAQIVAgJ0BZZSAgQIECBAgAABAgK0NkCAAAECBAgQIECgQkCArsBSSoAAAQIECBAgQECA1gYIECBAgAABAgQIVAgI0BVYSgkQIECAAAECBAgI0NoAAQIECBAgQIAAgQoBAboCSykBAgQIECBAgAABAVobIECAAAECBAgQIFAhIEBXYCklQIAAAQIECBAgIEBrAwQIECBAgAABAgQqBAToCiylBAgQIECAAAECBARobYAAAQIECBAgQIBAhYAAXYGllAABAgQIECBAgIAArQ0QIECAAAECBAgQqBAQoCuwlBIgQIAAAQIECBAQoLUBAgQIECBAgAABAhUCAnQFllICBAgQIECAAAECArQ2QIAAAQIECBAgQKBCQICuwFJKgAABAgQIECBAQIDWBggQIECAAAECBAhUCAjQFVhKCRAgQIAAAQIECAjQ2gABAgQIECBAgACBCgEBugJLKQECBAgQIECAAAEBWhsgQIAAAQIECBAgUCEgQFdgKSVAgAABAgQIECAgQGsDBAgQIECAAAECBCoEBOgKLKUECBAgQIAAAQIEBGhtgAABAgQIECBAgECFgABdgaWUAAECBAgQIECAgACtDRAgQIAAAQIECBCoEBCgK7CUEiBAgAABAgQIEBCgtQECBAgQIECAAAECFQICdAWWUgIECBAgQIAAAQICtDZAgAABAgQIECBAoEJAgK7AUkqAAAECBAgQIEBAgNYGCBAgQIAAAQIECFQICNAVWEoJECBAgAABAgQICNDaAAECBAgQIECAAIEKAQG6AkspAQIECBAgQIAAAQFaGyBAgAABAgQIECBQISBAV2ApJUCAAAECBAgQICBAawMECBAgQIAAAQIEKgQE6AospQQIECBAgAABAgQEaG2AAAECBAgQIECAQIWAAF2BpZQAAQIECBAgQICAAK0NECBAgAABAgQIEKgQEKArsJQSIECAAAECBAgQEKC1AQIECBAgQIAAAQIVAgJ0BZZSAgQIECBAgAABAgK0NkCAAAECBAgQIECgQkCArsBSSoAAAQIECBAgQECA1gYIECBAgAABAgQIVAgI0BVYSgkQIECAAAECBAgI0NoAAQIECBAgQIAAgQoBAboCSykBAgQIECBAgAABAVobIECAAAECBAgQIFAhIEBXYCklQIAAAQIECBAgIEBrAwQIECBAgAABAgQqBAToCiylBAgQIECAAAECBARobYAAAQIECBAgQIBAhYAAXYGllAABAgQIECBAgIAArQ0QIECAAAECBAgQqBAQoCuwlBIgQIAAAQIECBAQoLUBAgQIECBAgAABAhUCAnQFllICBAgQIECAAAECArQ2QIAAAQIECBAgQKBCQICuwFJKgAABAgQIECBAQIDWBggQIECAAAECBAhUCAjQFVhKCRAgQIAAAQIECAjQ2gABAgQIECBAgACBCgEBugJLKQECBAgQIECAAAEBWhsgQIAAAQIECBAgUCEgQFdgKSVAgAABAgQIECAgQGsDBAgQIECAAAECBCoEBOgKLKUECBAgQIAAAQIEBGhtgAABAgQIECBAgECFgABdgaWUAAECBAgQIECAgACtDRAgQIAAAQIECBCoEBCgK7CUEiBAgAABAgQIEBCgtQECBAgQIECAAAECFQICdAWWUgIECBAgQIAAAQICtDZAgAABAgQIECBAoEJAgK7AUkqAAAECBAgQIEBAgNYGCBAgQIAAAQIECFQICNAVWEoJECBAgAABAgQICNDaAAECBAgQIECAAIEKAQG6AkspAQIECBAgQIAAAQFaGyBAgAABAgQIECBQISBAV2ApJUCAAAECBAgQICBAawMECBAgQIAAAQIEKgQE6AospQQIECBAgAABAgQEaG2AAAECBAgQIECAQIWAAF2BpZQAAQIECBAgQICAAK0NECBAgAABAgQIEKgQEKArsJQSIECAAAECBAgQEKC1AQIECBAgQIAAAQIVAgJ0BZZSAgQIECBAgAABAgK0NkCAAAECBAgQIECgQkCArsBSSoAAAQIECBAgQECA1gYIECBAgAABAgQIVAgI0BVYSgkQIECAAAECBAgI0NoAAQIECBAgQIAAgQoBAboCSykBAgQIECBAgAABAVobIECAAAECBAgQIFAhIEBXYCklQIAAAQIECBAgIEBrAwQIECBAgAABAgQqBAToCiylBAgQIECAAAECBARobYAAAQIECBAgQIBAhYAAXYGllAABAgQIECBAgIAArQ0QIECAAAECBAgQqBAQoCuwlBIgQIAAAQIECBAQoLUBAgQIECBAgAABAhUCAnQFllICBAgQIECAAAECArQ2QIAAAQIECBAgQKBCQICuwFJKgAABAgQIECBAQIDWBggQIECAAAECBAhUCAjQFVhKCRAgQIAAAQIECAjQ2gABAgQIECBAgACBCgEBugJLKQECBAgQIECAAAEBWhsgQIAAAQIECBAgUCEgQFdgKSVAgAABAgQIECAgQGsDBAgQIECAAAECBCoE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tGZAgAABAgQIECBAoEJAgK7AUkqAAAECBAgQIEBAgNYGCBAgQIAAAQIECFQICNAVWEoJECBAgAABAgQICNDaAAECBAgQIECAAIEKAQG6AkspAQIECBAgQIAAAQFaGyBAgAABAgQIECBQISBAV2ApJUCAAAECBAgQICBAawMECBAgQIAAAQIEKgQE6AospQQIECBAgAABAgQEaG2AAAECBAgQIECAQIWAAF2BpZQAAQIECBAgQICAAK0NECBAgAABAgQIEKgQEKArsJQSIECAAAECBAgQEKC1AQIECBAgQIAAAQIVAgJ0BZZSAgQIECBAgAABAgK0NkCAAAECBAgQIECgQkCArsBSSoAAAQIECBAgQECA1gYIECBAgAABAgQIVAgI0BVYSgkQIECAAAECBAgI0NoAAQIECBAgQIAAgQoBAboCSykBAgQIECBAgAABAVobIECAAAECBAgQIFAhIEBXYCklQIAAAQIECBAgIEBrAwQIECBAgAABAgQqBAToCiylBAgQIECAAAECBARobYAAAQIECBAgQIBAhYAAXYGllAABAgQIECBAgIAArQ0QIECAAAECBAgQqBAQoCuwlBIgQIAAAQIECBAQoLUBAgQIECBAgAABAhUCAnQFllICBAgQIECAAAECArQ2QIAAAQIECBAgQKBCQICuwFJKgAABAgQIECBAQIDWBggQIECAAAECBAhUCAjQFVhKCRAgQIAAAQIECAjQ2gABAgQIECBAgACBCgEBugJLKQECBAgQIECAAAEBWhsgQIAAAQIECBAgUCEgQFdgKSVAgAABAgQIECAgQGsDBAgQIECAAAECBCoEBOgKLKUECBAgQIAAAQIEBGhtgAABAgQIECBAgECFgABdgaWUAAECBAgQIECAgACtDRAgQIAAAQIECBCoEBCgK7CUEiBAgAABAgQIEBCgtQECBAgQIECAAAECFQICdAWWUgIECBAgQIAAAQICtDZAgAABAgQIECBAoEJAgK7AUkqAAAECBAgQIEBAgNYGCBAgQIAAAQIECFQICNAVWEoJECBAgAABAgQICNDaAAECBAgQIECAAIEKAQG6AkspAQIECBAgQIAAAQFaGyBAgAABAgQIECBQISBAV2ApJUCAAAECBAgQICBAawMECBAgQIAAAQIEKgQE6AospQQIECBAgAABAgQEaG2AAAECBAgQIECAQIWAAF2BpZQAAQIECBAgQICAAK0NECBAgAABAgQIEKgQEKArsJQSIECAAAECBAgQEKC1AQIECBAgQIAAAQIVAgJ0BZZSAgQIECBAgAABAgK0NkCAAAECBAgQIECgQkCArsBSSoAAAQIECBAgQECA1gYIECBAgAABAgQIVAgI0BVYSgkQIECAAAECBAgI0NoAAQIECBAgQIAAgQoBAboCSykBAgQIECBAgAABAVobIECAAAECBAgQIFAhIEBXYCklQIAAAQIECBAgIEBrAwQIECBAgAABAgQqBAToCiylBAgQIECAAAECBARobYAAAQIECBAgQIBAhYAAXYGllAABAgQIECBAgIAArQ0QIECAAAECBAgQqBAQoCuwlBIgQIAAAQIECBAQoLUBAgQIECBAgAABAhUCAnQFllICBAgQIECAAAECArQ2QIAAAQIECBAgQKBCQICuwFJKgAABAgQIECBAQIDWBggQIECAAAECBAhUCAjQFVhKCRAgQIAAAQIECAjQ2gABAgQIECBAgACBCgEBugJLKQECBAgQIECAAAEBWhsgQIAAAQIECBAgUCEgQFdgKSVAgAABAgQIECAgQGsDBAgQIECAAAECBCoEBOgKLKUECBAgQIAAAQIEBGhtgAABAgQIECBAgECFgABdgaWUAAECBAgQIECAgACtDRAgQIAAAQIECBCoEBCgK7CUEiBAgAABAgQIEBCgtQECBAgQIECAAAECFQICdAWWUgIECBAgQIAAAQICtDZAgAABAgQIECBAoEJAgK7AUkqAAAECBAgQIEBAgNYGCBAgQIAAAQIECFQICNAVWEoJECBAgAABAgQICNDaAAECBAgQIECAAIEKAQG6AkspAQIECBAgQIAAAQFaGyBAgAABAgQIECBQISBAV2ApJUCAAAECBAgQICBAawMECBAgQIAAAQIEKgQE6AospQQIECBAgAABAgQEaG2AAAECBAgQIECAQIWAAF2BpZQAAQIECBAgQICAAK0NECBAgAABAgQIEKgQEKArsJQSIECAAAECBAgQEKC1AQIECBAgQIAAAQIVAgJ0BZZSAgQIECBAgAABAgK0NkCAAAECBAgQIECgQkCArsBSSoAAAQIECBAgQECA1gYIECBAgAABAgQIVAgI0BVYSgkQIECAAAECBAgI0NoAAQIECBAgQIAAgQoBAboCSykBAgQIECBAgAABAVobIECAAAECBAgQIFAhIEBXYCklQIAAAQIECBAgIEBrAwQIECBAgAABAgQqBAToCiylBAgQIECAAAECBARobYAAAQIECBAgQIBAhYAAXYGllAABAgQIECBAgIAArQ0QIECAAAECBAgQqBAQoCuwlBIgQIAAAQIECBAQoLUBAgQIECBAgAABAhUCAnQFllICBAgQIECAAAECArQ2QIAAAQIECBAgQKBCQICuwFJKgAABAgQIECBAQIDWBggQIECAAAECBAhUCAjQFVhKCRAgQIAAAQIECAjQ2gABFl4zYwAABxBJREFUAgQIECBAgACBCgEBugJLKQECBAgQIECAAAEBWhsgQIAAAQIECBAgUCEgQFdgKSVAgAABAgQIECAgQGsDBAgQIECAAAECBCoEBOgKLKUECBAgQIAAAQIEBGhtgAABAgQIECBAgECFgABdgaWUAAECBAgQIECAgACtDRAgQIAAAQIECBCoEBCgK7CUEiBAgAABAgQIEBCgtQECBAgQIECAAAECFQICdAWWUgIECBAgQIAAAQICtDZAgAABAgQIECBAoEJAgK7AUkqAAAECBAgQIEBAgNYGCBAgQIAAAQIECFQICNAVWEoJECBAgAABAgQICNDaAAECBAgQIECAAIEKAQG6AkspAQIECBAgQIAAAQFaGyBAgAABAgQIECBQISBAV2ApJUCAAAECBAgQICBAawMECBAgQIAAAQIEKgQE6AospQQIECBAgAABAgQEaG2AAAECBAgQIECAQIWAAF2BpZQAAQIECBAgQICAAK0NECBAgAABAgQIEKgQEKArsJQSIECAAAECBAgQEKC1AQIECBAgQIAAAQIVAgJ0BZZSAgQIECBAgAABAgK0NkCAAAECBAgQIECgQkCArsBSSoAAAQIECBAgQECA1gYIECBAgAABAgQIVAgI0BVYSgkQIECAAAECBAgI0NoAAQIECBAgQIAAgQoBAboCSykBAgQIECBAgAABAVobIECAAAECBAgQIFAhIEBXYCklQIAAAQIECBAgIEBrAwQIECBAgAABAgQqBAToCiylBAgQIECAAAECBARobYAAAQIECBAgQIBAhYAAXYGllAABAgQIECBAgIAArQ0QIECAAAECBAgQqBAQoCuwlBIgQIAAAQIECBAQoLUBAgQIECBAgAABAhUCAnQFllICBAgQIECAAAECArQ2QIAAAQIECBAgQKBCQICuwFJKgAABAgQIECBAQIDWBggQIECAAAECBAhUCAjQFVhKCRAgQIAAAQIECAjQ2gABAgQIECBAgACBCgEBugJLKQECBAgQIECAAAEBWhsgQIAAAQIECBAgUCEgQFdgKSVAgAABAgQIECAgQGsDBAgQIECAAAECBCoEBOgKLKUECBAgQIAAAQIEBGhtgAABAgQIECBAgECFgABdgaWUAAECBAgQIECAgACtDRAgQIAAAQIECBCoEBCgK7CUEiBAgAABAgQIEBCgtQECBAgQIECAAAECFQICdAWWUgIECBAgQIAAAQICtDZAgAABAgQIECBAoEJAgK7AUkqAAAECBAgQIEBAgNYGCBAgQIAAAQIECFQICNAVWEoJECBAgAABAgQICNDaAAECBAgQIECAAIEKAQG6AkspAQIECBAgQIAAAQFaGyBAgAABAgQIECBQISBAV2ApJUCAAAECBAgQICBAawMECBAgQIAAAQIEKgQE6AospQQIECBAgAABAgQEaG2AAAECBAgQIECAQIWAAF2BpZQAAQIECBAgQICAAK0NECBAgAABAgQIEKgQEKArsJQSIECAAAECBAgQEKC1AQIECBAgQIAAAQIVAgJ0BZZSAgQIECBAgAABAgK0NkCAAAECBAgQIECgQkCArsBSSoAAAQIECBAgQECA1gYIECBAgAABAgQIVAgI0BVYSgkQIECAAAECBAgI0NoAAQIECBAgQIAAgQoBAboCSykBAgQIECBAgAABAVobIECAAAECBAgQIFAhIEBXYCklQIAAAQIECBAgIEBrAwQIECBAgAABAgQqBAToCiylBAgQIECAAAECBARobYAAAQIECBAgQIBAhYAAXYGllAABAgQIECBAgIAArQ0QIECAAAECBAgQqBAQoCuwlBIgQIAAAQIECBAQoLUBAgQIECBAgAABAhUCAnQFllICBAgQIECAAAECArQ2QIAAAQIECBAgQKBCQICuwFJKgAABAgQIECBAQIDWBggQIECAAAECBAhUCAjQFVhKCRAgQIAAAQIECAjQ2gABAgQIECBAgACBCgEBugJLKQECBAgQIECAAAEBWhsgQIAAAQIECBAgUCEgQFdgKSVAgAABAgQIECAgQGsDBAgQIECAAAECBCoEBOgKLKUECBAgQIAAAQIEBGhtgAABAgQIECBAgECFgABdgaWUAAECBAgQIECAgACtDRAgQIAAAQIECBCoEBCgK7CUEiBAgAABAgQIEBCgtQECBAgQIECAAAECFQICdAWWUgIECBAgQIAAAQICtDZAgAABAgQIECBAoEJAgK7AUkqAAAECBAgQIEBAgNYGCBAgQIAAAQIECFQICNAVWEoJECBAgAABAgQICNDaAAECBAgQIECAAIEKAQG6AkspAQIECBAgQIAAAQFaGyBAgAABAgQIECBQISBAV2ApJUCAAAECBAgQICBAawMECBAgQIAAAQIEKgQE6AospQQIECBAgAABAgT+f+3YRofm578/AAAAAElFTkSuQmCC">
              </a>
            </li>
            <li class="span3">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/260x120" alt="260x120" style="width: 260px; height: 120px; " src="data:image/png;base64,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">
              </a>
            </li>
            <li class="span2">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/160x120" alt="160x120" style="width: 160px; height: 120px; " src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUAAAADwCAYAAABxLb1rAAAX+klEQVR4Ae2c+VcbR7bHrxASiN2AF/CCd8/zZBInmTnvvPf///ZmEmcSJzbGYJvN7DsIEOJ9bwl5wRi7MnPmRFWfTrCRqO6u+7nFx7e6ulVYXV09NjYIQAACGRJoyzBmQoYABCAQCCBABgIEIJAtAQSYbeoJHAIQQICMAQhAIFsCCDDb1BM4BCCAABkDEIBAtgQQYLapJ3AIQAABMgYgAIFsCSDAbFNP4BCAAAJkDEAAAtkSQIDZpp7AIQABBMgYgAAEsiWAALNNPYFDAAIIkDEAAQhkSwABZpt6AocABBAgYwACEMiWAALMNvUEDgEIIEDGAAQgkC0BBJht6gkcAhBAgIwBCEAgWwIIMNvUEzgEIIAAGQMQgEC2BBBgtqkncAhAAAEyBiAAgWwJIMBsU0/gEIAAAmQMQAAC2RJAgNmmnsAhAAEEyBiAAASyJYAAs009gUMAAgiQMQABCGRLAAFmm3oChwAEECBjAAIQyJYAAsw29QQOAQggQMYABCCQLQEEmG3qCRwCEECAjAEIQCBbAggw29QTOAQggAAZAxCAQLYEEGC2qSdwCEAAATIGIACBbAkgwGxTT+AQgAACZAxAAALZEkCA2aaewCEAAQTIGIAABLIlgACzTT2BQwACCJAxAAEIZEsAAWabegKHAAQQIGMAAhDIlgACzDb1BA4BCCBAxgAEIJAtAQSYbeoJHAIQQICMAQhAIFsCCDDb1BM4BCCAABkDEIBAtgQQYLapJ3AIQAABMgYgAIFsCSDAbFNP4BCAAAJkDEAAAtkSQIDZpp7AIQABBMgYgAAEsiWAALNNPYFDAAIIkDEAAQhkSwABZpt6AocABBAgYwACEMiWAALMNvUEDgEIIEDGAAQgkC0BBJht6gkcAhBAgIwBCEAgWwIIMNvUEzgEIIAAGQMQgEC2BBBgtqkncAhAAAEyBiAAgWwJIMBsU0/gEIAAAmQMQAAC2RJAgNmmnsAhAAEEyBiAAASyJYAAs009gUMAAgiQMQABCGRLAAFmm3oChwAEECBjAAIQyJYAAsw29QQOAQggQMYABCCQLQEEmG3qCRwCEECAjAEIQCBbAggw29QTOAQggAAZAxCAQLYEEGC2qSdwCEAAATIGIACBbAkgwGxTT+AQgAACZAxAAALZEkCA2aaewCEAAQTIGIAABLIlgACzTT2BQwACCJAxAAEIZEsAAWabegKHAAQQIGMAAhDIlgACzDb1BA4BCCBAxgAEIJAtAQSYbeoJHAIQQICMAQhAIFsCCDDb1BM4BCCAABkDEIBAtgQQYLapJ3AIQAABMgYgAIFsCSDAbFNP4BCAAAJkDEAAAtkSQIDZpp7AIQABBMgYgAAEsiXQnm3kuQReKFibvsJ2fGx1fZ23Fdra3rVXw+N6/TP76PhtBSucnONYx29+nXee3/szP8/pc33yWCexf9i+rv59cg/TwUP8H+7TiOmcvfhRixJAgC2auC/qtn6Zjw6qtrq5bf47Xyx3Wn9vjxXCqw+PUChoMnB8ZFvrq7ah9nWJr1Bst77+Aevr7dY++vEpc7RJlrXDA9tY27Sdvb0glnY/R3+fVTo73J7ny+bDLnz+leI5rO7a5vZuiKDU2WV93V3es1P7NqR8qNjXN7esun9gdbUoqW8D6ltHuRTEfnqvEM/BvvbZUDz74ZjlDp2jv9cqHb6PRHjqTLxsbQIIsLXzd27vixLU0ptp++m3Sf3iHlvvpev2t0dfWXt49W5Xr/oOdjZt/NlTW1hZt9qRi+s4VFrF9pINXhqx+/fuWk+nJHAiQa/6VnTs8eeTtl3dtyPt45sfq73UYSPXxuze7RvWLnP+u6Th8cy8nrTfpmZDBEPX79p3D+9Z4QMxq0KU7mZfTtrUq1nbc/np596koD53dHbbtbFbNnZ95AMO+pEtzEzZ88lXtlvVPvoHwDeXokv92tgduzM2am2n2IVG/NGyBBBgy6bu7I77L2xz+lbdWrdX07NWV+X0oSTe7etta9Ut+/mnH2xpo2rFou/v1Z7PBlUr1mu2OPvSdnf37PvvHlml5FPQNttYmrXHP/9qh0cuCZfOiei0X02V18uJp3Z03GZf3b9hssm7E0Z+9348O+vLNvNm0Y6bHTzjWArfZief2S/jr9x4IZYQTGhbsP29bRv/9Z+qcnfs6z/fDRJ0aS/PTdpPT8alTp8Cvzuwy/twf9cmnj3ReYv24OaVUD2+a8F3rUwAAbZy9k73XdZaX1kK07d9TRXn52Zta+8gXNNyoZ21FTRNffX86Vv5ebXU0zdog/3dtra8aNvav6ip8Pbakr2ceWMP71yz+uGevZiYsAPJryhb+KF7Lwxbd7lgy8urEp9Ze9FsXtXa5SuX7FJfxzsHnXSiWUk2+9SUdvO19/dYU/LVpSXbVRVXlbjmZ+f0fS3Eo9nox5uEt7+9Yi+mZiS/YkPkElpPX6+Vise2sbEZ/jHwvi3OTtn00KDdvjpsR/vbiuelKsXG1Fm1r10YGrJy25GtrKxpnzYrSo2vpybs8qVBG6i0q+3Hp+ed1iOAAFsvZ5/osZctNZv87Rd7s1UNFZlXT28XQM7Yyyu5g50Vm11cszZVfr7g0Td8zb579NAq5XbbWVu0f/zjse0eqi4qSK7r65LbDaturtna1p7k16bi7tiGR2/ao6/uSzIFW3j93H76VVNuVWlHh/u2uLBkF/uu2f6+rqnpvVApuiBLpXeVlt48PPCpamgi8R1bsb1sbfVDe/7kZ1vZO3wbz2lRvh+WV39rS4tWVVlaaHNlmY3d/S+771NX9X9hetJ+eToZJNhmRzY3t2A3Ry/a9uqSbfo/FCfxjNy8Z189uGVF7TM78av98mJaXdf1zuqOLekSwcCNy6Y5//un5vsWJYAAWzRxn+62VzHni6+5r18T29zYsP0TYRy3le3mndvWVZY8JMPugYv29TePbO+wFubExXJFldCRra2taup7LGl6odVuo9evWUnyOZLBhi6PWu+L17axfxSk49I82B+2J4//bmvbLhldoVO7yzckGZ8ea9vbWLQffvzFDsJMWdfrCiX786O/2uVeHVTqa9OJ3p+Whp3O+MOr2Y3tnVCBFtT/Uke/3bg2IlFrFq6eX9F1yfm5OXuzWdXxtKCyt6s+12x5dS30va1NMen65dVro0F+x6oIL129Zl2vVXnWvC6sh4rw9tVLQchndIG3WowAAmyxhH26u14+Fe3Wnx7aaK1xza2gKeTU+LhkdHj2bnWt+m5tSBgFK0oepa5eu9BdlhTXbGenql/3gnX39NmV4S5d/PdLeXpHwtjd8VXl8I6mx13WUyk3poSq3NqKZevt6bA1VUtFSWZ/Z8fqxQ67ffO6/f3xb3aoSsq3+ekpuzJyyS73le3V5GSYqvt0+kjnGLl5xy5d6NKidM3uPvzKDpulYe1A1+Ke2c5JfOFA7//h7bSVyqoeVVV2dmvqq298Oh2uUKo/xXad31+HUrRuR7VDXd/ckXR9eUP7tlesq0PLRDqWsKh9Z1j82dncD4soe9vbVlMfyyeH8SOztS4BBNi6uTuj5wUbGG5WJ/rtrR/Y/ORzW6969fLxdizpVXd2JYPGdTzVRPb05x9sZXVDQvOVYFVfxaINXhy1+/fvWG+lJAn6IoeEGgTit9ZUrKw2Das0Vk07Kp16ua0XOu6Rrt+pwhy8csNuXl22FzPLYbrt1xGnJl9b+0jF5pbWw3s+Be/qv2j37tzQoo3OLykNXdJ00zfvo/Z5NTGuvxtvnf5TE1+786dv7NaDhgh92urVn7/yqnjPp+6be6EKdSsWSmXVhT5V154BUN3addtLSW3DXtrRLw2UKrqG6QLUf8e1/SDksqb74cCnO8HrliKAAFsqXZ/vrEvk5NffS7bP/o422rpfpL/dLVvY1Tv+v77cA74KvDT30rZ3tuzbb7+z/g7dTH1Safm+LshwnbFRZp3RQW/lN+G02c17921F9wyu65qeC2ljcdoer+namkTrCj5W9Xj3wYOwmNI8R/N2lCBAt+9nNu+PV56+NRda/FyHexv266/jms6rJxKz37UzdHEoLNa8PYfH3N4eZOi9Pnv79E/Obs+7f2QC/k8dW5YEpBxNgau65+3EF6HK8qppYOiijWp6WvKFEZeCpLK7sWITU9OaLh9rQUOLEg3HfDE5l1Gps1+V5O2399/5Ku+BVnhdvi68kbG7NjrU+1awX3zwUw39XA35acor+W2v6xrjDz/a4vp2kJ/H3dFzwcZ0fbB+dGj7Ws5uLM+cOhAvkydABZh8is8JUOJ5f1XVZXf93kN7cOuqqiizjeU5e/z4iVVPbndZXXxju7d0A7HfR6LpcuxWl3iGLt+wW9fWbGJ6IZSYfn6vWnsGr9i9W9e85Iw97Jnt/bg+jZ7RDdHPX0xpGq6VZcnQ+1DqGrCvv/6L9XW260kZv80n1J+SIFtuBKgAc8v423h1DUzVXodf8Jf4QoUmMdy8rhVQtfGK7MLwiF0dGdT3kpJXabWqVWuqnrRK7NNkF0ZdCxXh+eIvtIffTHzp8nC4Ntfsip9/4MKQbr0phr403/+9f3tc3tff/vmDbnt5Ybp1MEznfYGlT6L9/rtvbbi/Evrtt8uUSh6xNsVQr9VCH74wnMZ+/NmyBBBgy6buX++4T/uKYQHDj6VrY7r3rvHomozk70h6la4utWq89jb1ekG3l5QbopIl/Fnjg3BPXEMZLsv93WoQpjcqFDutI5zDjakjSUyTWvyo6TjNza/Jzc+8spWNkwWK5g9+x99hOn24a7/8+KO9ml/Ryq0PcRd40W7qnsC/fv+NDXR3BMF7WH59sN2fDQ4h6nqknvo4dOH7pi7WdbHwQM8Fq+vanFElrCy/ReJvs7UsAQTYsqn7N3Rc1/i6e/vCVNF/w4PMVPm9vR4mKez7hxw0fvtdl3qWtmQV3V7i98RJH7ofeN+2dv1pE71Uu7pWfbd298PCiFeVHT1aVZUAXTA+rZ59NWHzK5vhWpy/Ga7VhXNv2bPxxtMlwTW/Kzzved0mnz6xuZWNxsqy96H7gn3z/X/bw/u3JGMNeZ3Pxedu9PsYuyv6sAdNlz3MWm3Pdqp62kQB+X9H4bVf8/Sp+rFV+nq0cNK4ZeZ3dZGd/lAEEOAfKh3/2c74bS4XNPUMt3Tol/2wumGTU6/DfYHt/vibnr2dfbMaZOG//CWJolMfjtDf3x+e+vDeHmsRYX5mRlWTV5MFW12Ys61qY5GkrmeB+/sG1LZRaW3ryZIJfZCBTztdfO36YILe7s7wvd/svLE8a1MzCydVWzwLr/Z21hZs2vt8UnX6fYljYzesZAe2tLBgi3q0bunka3lVH/wgBoMX+jUlDwbXY377ekJkXrd7uyCPtQI+qydhfJEk1H82ODDwwfQ9vpfs8UciwCLIHykb/+G+hPvuBgZ103GfTasq80WC+ZfPbU8fotDXVbZlLXrs6DE4v83Fb5a+PDpqHZojl/Ss8EBPpy3p3jivpFbevLJ/HOyG21cWF5fCs7M+bfYptV/vc3n4Nbnnz8Z1DbFxG4rPMkf1yNlI5cD+78cnEo6qMjV8rfv8hgYHbFg3U3/uswtP41IvbeHNgqbk6nMQoFdtNXvhH2TgJeh7WxBwucv+9r//Y31Dl7QgMqWbt/32nIK9UZV6sLthnXoWeHFhWWWir4b7PYLdNjw0oGBOpsjvHY9vW5MAFWBr5u2Le+2/6G+/ztpLj7/deXDPek4ef/Np4Nrygr189frkgwf8sdeaJHFZCyT+SSiqjfR0xJ27d3QtrHFPoAvO95mefRMekfNPnqnpUbkr12/ZRS02qJXNTD23N2tbYZrpx6j0DduYHikbuDhioxcHwrU2797RwbY9e/rc9sNU/OMOv43F4/rgx359sWabW5t6X9+/jVtPe+gapV+b/PhLR1C7osR2Rzdfa+kk7OciXVmYt5n5RT1drU1tjlThXtMTKgN6UkZdY0uEABVgIok8MwyZyS/wl8tSgiqYUrh95cOWXgVW+i7ao2+/sadPx219S0+GnKjFf8/b2tpVxV23Bw/uW6emuA2x1CWuq/b1X+o2PjGlT585CAd1efq+RT1PO3p1zO7f1RMdeqe6tWav55as3FGRAF3IWpC4fdcqqiZVV4Xnj9e2npgeHw6C3NtcsvmFNX1QwZCE+361VVA8ZStLoP7hrX5t8f3N++bXJctapDnvQyB8H2/rxwqLJjLa8NXb9hdVuROT0/oMwcaHoZ6Eo0Wfio3duG33bo5Q/b0PPIHvC6urq/x7lkAiPxVC3aufIAafyfmjYWcX/f6zup6L3dxY11Mf/iEBEoQeFevVJ0L3dFeklYY03j+PT39r+gTlzfAJylUvlPQcbkf4FOku/0ToUFFpP0nMb0F5u8mUfo1RPwlvuThrur2mIbBGK7+VxT+b8PTm1Vyz3VnxeLV6Eu7pXT967fJ7twruCyO6Drpf1cdmbdiePuTVe+fS7tM1z0pnOciPX5aPMLb0GwiwpdP3ZZ33X3TfmuI4by+XWrO9t/Np47n76dhebTX38bbNrw/P431wfTT//vCn/sq76fLyY513Tm/nx/lUm8/t3zjXJ/bXwb8sHj8KW6sTYArc6hn8gv5/ShRn7erCi9pkrGaFef5+zdqp+ffHrZuV2+f622h33nE+/bPmWT95ji+Op3kk/m5lAh/PMVo5GvoOAQhAIIIAAoyARVMIQCAtAggwrXwSDQQgEEEAAUbAoikEIJAWAQSYVj6JBgIQiCCAACNg0RQCEEiLAAJMK59EAwEIRBBAgBGwaAoBCKRFAAGmlU+igQAEIgggwAhYNIUABNIigADTyifRQAACEQQQYAQsmkIAAmkRQIBp5ZNoIACBCAIIMAIWTSEAgbQIIMC08kk0EIBABAEEGAGLphCAQFoEEGBa+SQaCEAgggACjIBFUwhAIC0CCDCtfBINBCAQQQABRsCiKQQgkBYBBJhWPokGAhCIIIAAI2DRFAIQSIsAAkwrn0QDAQhEEECAEbBoCgEIpEUAAaaVT6KBAAQiCCDACFg0hQAE0iKAANPKJ9FAAAIRBBBgBCyaQgACaRFAgGnlk2ggAIEIAggwAhZNIQCBtAggwLTySTQQgEAEAQQYAYumEIBAWgQQYFr5JBoIQCCCAAKMgEVTCEAgLQIIMK18Eg0EIBBBAAFGwKIpBCCQFgEEmFY+iQYCEIgggAAjYNEUAhBIiwACTCufRAMBCEQQQIARsGgKAQikRQABppVPooEABCIIIMAIWDSFAATSIoAA08on0UAAAhEEEGAELJpCAAJpEUCAaeWTaCAAgQgCCDACFk0hAIG0CCDAtPJJNBCAQAQBBBgBi6YQgEBaBBBgWvkkGghAIIIAAoyARVMIQCAtAggwrXwSDQQgEEEAAUbAoikEIJAWAQSYVj6JBgIQiCCAACNg0RQCEEiLAAJMK59EAwEIRBBAgBGwaAoBCKRFAAGmlU+igQAEIgggwAhYNIUABNIigADTyifRQAACEQQQYAQsmkIAAmkRQIBp5ZNoIACBCAIIMAIWTSEAgbQIIMC08kk0EIBABAEEGAGLphCAQFoEEGBa+SQaCEAgggACjIBFUwhAIC0CCDCtfBINBCAQQQABRsCiKQQgkBYBBJhWPokGAhCIIIAAI2DRFAIQSIsAAkwrn0QDAQhEEECAEbBoCgEIpEUAAaaVT6KBAAQiCCDACFg0hQAE0iKAANPKJ9FAAAIRBBBgBCyaQgACaRFAgGnlk2ggAIEIAggwAhZNIQCBtAggwLTySTQQgEAEAQQYAYumEIBAWgQQYFr5JBoIQCCCAAKMgEVTCEAgLQIIMK18Eg0EIBBBAAFGwKIpBCCQFgEEmFY+iQYCEIgggAAjYNEUAhBIiwACTCufRAMBCEQQQIARsGgKAQikRQABppVPooEABCIIIMAIWDSFAATSIoAA08on0UAAAhEEEGAELJpCAAJpEUCAaeWTaCAAgQgCCDACFk0hAIG0CCDAtPJJNBCAQAQBBBgBi6YQgEBaBBBgWvkkGghAIIIAAoyARVMIQCAtAggwrXwSDQQgEEEAAUbAoikEIJAWAQSYVj6JBgIQiCCAACNg0RQCEEiLAAJMK59EAwEIRBBAgBGwaAoBCKRFAAGmlU+igQAEIgggwAhYNIUABNIigADTyifRQAACEQQQYAQsmkIAAmkRQIBp5ZNoIACBCAL/Dw425RQ3xa/8AAAAAElFTkSuQmCC">
              </a>
            </li>
            <li class="span3">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/260x120" alt="260x120" style="width: 260px; height: 120px; " src="data:image/png;base64,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">
              </a>
            </li>
            <li class="span2">
              <a href="#" class="thumbnail">
                <img data-src="holder.js/160x120" alt="160x120" style="width: 160px; height: 120px; " src="data:image/png;base64,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">
              </a>
            </li>
          </ul>
        
        </div>
        
        <div class="row">
        
        	<div class="span6">
        	
        	<h1 class="prometheus-underline">Badges and Labels</h1>
        	
        	<h3>Labels</h3>
        	
        	<table class="table table-bordered table-striped">
        		<thead>
        			<tr>
        				<th>Labels</th>
        				<th>Markup</th>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td>
        					<span class="label">Default</span>
        				</td>
        				<td>
        					<code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
        				</td>
        			</tr>
        			<tr>
        				<td>
        					<span class="label label-success">Success</span>
        				</td>
        				<td>
        					<code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
        				</td>
        			</tr>
        			<tr>
        				<td>
        					<span class="label label-warning">Warning</span>
        				</td>
        				<td>
        					<code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
        				</td>
        			</tr>
        			<tr>
        				<td>
        					<span class="label label-important">Important</span>
        				</td>
        				<td>
        					<code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
        				</td>
        			</tr>
        			<tr>
        				<td>
        					<span class="label label-info">Info</span>
        				</td>
        				<td>
        					<code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
        				</td>
        			</tr>
        			<tr>
        				<td>
        					<span class="label label-inverse">Inverse</span>
        				</td>
        				<td>
        					<code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code>
        				</td>
        			</tr>
        		</tbody>
        	</table>
        	
        	<h3>Badges</h3>
        	
        	<table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Example</th>
                <th>Markup</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Default
                </td>
                <td>
                  <span class="badge">1</span>
                </td>
                <td>
                  <code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  Success
                </td>
                <td>
                  <span class="badge badge-success">2</span>
                </td>
                <td>
                  <code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  Warning
                </td>
                <td>
                  <span class="badge badge-warning">4</span>
                </td>
                <td>
                  <code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  Important
                </td>
                <td>
                  <span class="badge badge-important">6</span>
                </td>
                <td>
                  <code>&lt;span class="badge badge-important"&gt;6&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  Info
                </td>
                <td>
                  <span class="badge badge-info">8</span>
                </td>
                <td>
                  <code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  Inverse
                </td>
                <td>
                  <span class="badge badge-inverse">10</span>
                </td>
                <td>
                  <code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>
                </td>
              </tr>
            </tbody>
          </table>
        	
        	</div>
        	
        	<div class="span6">
        	
        	<h1 class="prometheus-underline">Alerts</h1>
        	
        	<h3>General</h3>
        	
        	<div class="alert alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <h4>Warning!</h4>
              <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </div>
            
            <h3>Error</h3>
            
            <div class="alert alert-error">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Oh snap!</strong> Change a few things up and try submitting again.
            </div>
            
            <h3>Success</h3>
            
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Well done!</strong> You successfully read this important alert message.
            </div>
            
            <h3>Information</h3>
            
            <div class="alert alert-info">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
            </div>
        	
        	</div>
        
        </div>
        
        <div class="row">
        
        	<div class="span6">
        	
        		<h1 class="prometheus-underline">Buttons</h1>
        		
        		<table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Button</th>
                <th>class=""</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><button type="button" class="btn">Default</button></td>
                <td><code>btn</code></td>
                <td>Standard gray button with gradient</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-primary">Primary</button></td>
                <td><code>btn btn-primary</code></td>
                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-info">Info</button></td>
                <td><code>btn btn-info</code></td>
                <td>Used as an alternative to the default styles</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-success">Success</button></td>
                <td><code>btn btn-success</code></td>
                <td>Indicates a successful or positive action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-warning">Warning</button></td>
                <td><code>btn btn-warning</code></td>
                <td>Indicates caution should be taken with this action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-danger">Danger</button></td>
                <td><code>btn btn-danger</code></td>
                <td>Indicates a dangerous or potentially negative action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-inverse">Inverse</button></td>
                <td><code>btn btn-inverse</code></td>
                <td>Alternate dark gray button, not tied to a semantic action or use</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-link">Link</button></td>
                <td><code>btn btn-link</code></td>
                <td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
              </tr>
            </tbody>
          </table>
          
          <h3>Button Sizes</h3>
          
          <div class="">
            <p>
              <button type="button" class="btn btn-large btn-primary">Large button</button>
              <button type="button" class="btn btn-large">Large button</button>
            </p>
            <p>
              <button type="button" class="btn btn-primary">Default button</button>
              <button type="button" class="btn">Default button</button>
            </p>
            <p>
              <button type="button" class="btn btn-small btn-primary">Small button</button>
              <button type="button" class="btn btn-small">Small button</button>
            </p>
            <p>
              <button type="button" class="btn btn-mini btn-primary">Mini button</button>
              <button type="button" class="btn btn-mini">Mini button</button>
            </p>
          </div>
          
          <h3>Block Level</h3>
          
          <div class="bs-docs-example">
            <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
              <button type="button" class="btn btn-large btn-block btn-primary">Block level button</button>
              <button type="button" class="btn btn-large btn-block">Block level button</button>
            </div>
          </div>
          
          <h3>Disabled</h3>
          
          <p class="bs-docs-example">
            <a href="#" class="btn btn-large btn-primary disabled">Primary link</a>
            <a href="#" class="btn btn-large disabled">Link</a>
          </p>
          
          <h3>Button Groups</h3>
          
          <div class="btn-toolbar" style="margin: 0;">
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Inverse <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div>
            
            <h3>Split Button Dropdowns</h3>
            
            <div class="btn-toolbar" style="margin: 0;">
              <div class="btn-group">
                <button class="btn">Action</button>
                <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-primary">Action</button>
                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-danger">Danger</button>
                <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-warning">Warning</button>
                <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-success">Success</button>
                <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-info">Info</button>
                <button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <div class="btn-group">
                <button class="btn btn-inverse">Inverse</button>
                <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div>
            
            <h3>Single Button Group</h3>
            
            <div class="btn-group">
			  <button class="btn">Left</button>
			  <button class="btn">Middle</button>
			  <button class="btn">Right</button>
			</div>
			
			<h3>Multiple button groups</h3>
			
			<div class="btn-toolbar" style="margin: 0;">
              <div class="btn-group">
                <button class="btn">1</button>
                <button class="btn">2</button>
                <button class="btn">3</button>
                <button class="btn">4</button>
              </div>
              <div class="btn-group">
                <button class="btn">5</button>
                <button class="btn">6</button>
                <button class="btn">7</button>
              </div>
              <div class="btn-group">
                <button class="btn">8</button>
              </div>
            </div>
            
            <h3>Vertical Button Groups</h3>
            
            <div class="btn-group btn-group-vertical">
              <button type="button" class="btn"><i class="icon-align-left"></i></button>
              <button type="button" class="btn"><i class="icon-align-center"></i></button>
              <button type="button" class="btn"><i class="icon-align-right"></i></button>
              <button type="button" class="btn"><i class="icon-align-justify"></i></button>
            </div>
        	
        	</div>
        	
        	<div class="span6">
        	
        		<h1 class="prometheus-underline">Tables</h1>
        	
        		<h3>Normal</h3>
        	
        		<table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            
            <h3>Striped</h3>
            
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            
            <h3>Bordered</h3>
            
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td rowspan="2">1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@TwBootstrap</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            
            <h3>Hoverable</h3>
            
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            
            <h3>Condensed</h3>
            
            <table class="table table-condensed">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            
            <h3>Contextualized Row Classes</h3>
            
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Product</th>
                  <th>Payment Taken</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr class="success">
                  <td>1</td>
                  <td>TB - Monthly</td>
                  <td>01/04/2012</td>
                  <td>Approved</td>
                </tr>
                <tr class="error">
                  <td>2</td>
                  <td>TB - Monthly</td>
                  <td>02/04/2012</td>
                  <td>Declined</td>
                </tr>
                <tr class="warning">
                  <td>3</td>
                  <td>TB - Monthly</td>
                  <td>03/04/2012</td>
                  <td>Pending</td>
                </tr>
                <tr class="info">
                  <td>4</td>
                  <td>TB - Monthly</td>
                  <td>04/04/2012</td>
                  <td>Call in to confirm</td>
                </tr>
              </tbody>
            </table>
            
            
        	
        	</div>
        
        </div>
        
        <div class="row">
        
        	<div class="span6">
        	
        		<h1 class="prometheus-underline">Tabs</h1>
        		
        		<h3>Normal</h3>
        		
        		<div class="tabbable">
					<ul id="myTab" class="nav nav-tabs">
					  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
					  <li><a href="#profile" data-toggle="tab">Profile</a></li>
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
						  <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
						</ul>
					  </li>
					</ul>
					<div id="myTabContent" class="tab-content">
					  <div class="tab-pane fade in active" id="home">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					  </div>
					  <div class="tab-pane fade" id="profile">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
					  </div>
					  <div class="tab-pane fade" id="dropdown1">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
					  </div>
					  <div class="tab-pane fade" id="dropdown2">
						<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
					  </div>
					</div>
				  </div>
				  
				  <h3>Tabs Left</h3>
				  
				  <div class="tabbable tabs-left">
					<ul id="myTab" class="nav nav-tabs">
					  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
					  <li><a href="#profile" data-toggle="tab">Profile</a></li>
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
						  <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
						</ul>
					  </li>
					</ul>
					<div id="myTabContent" class="tab-content">
					  <div class="tab-pane fade in active" id="home">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					  </div>
					  <div class="tab-pane fade" id="profile">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
					  </div>
					  <div class="tab-pane fade" id="dropdown1">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
					  </div>
					  <div class="tab-pane fade" id="dropdown2">
						<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
					  </div>
					</div>
				  </div>
				  
				  <h3>Tabs Right</h3>
				  
				  <div class="tabbable tabs-right">
					<ul id="myTab" class="nav nav-tabs">
					  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
					  <li><a href="#profile" data-toggle="tab">Profile</a></li>
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
						  <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
						</ul>
					  </li>
					</ul>
					<div id="myTabContent" class="tab-content">
					  <div class="tab-pane fade in active" id="home">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					  </div>
					  <div class="tab-pane fade" id="profile">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
					  </div>
					  <div class="tab-pane fade" id="dropdown1">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
					  </div>
					  <div class="tab-pane fade" id="dropdown2">
						<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
					  </div>
					</div>
				  </div>
				  
				  <h3>Tabs Below</h3>
				  
				  <div class="tabbable tabs-below">
					<div id="myTabContent" class="tab-content">
					  <div class="tab-pane fade in active" id="home">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					  </div>
					  <div class="tab-pane fade" id="profile">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
					  </div>
					  <div class="tab-pane fade" id="dropdown1">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
					  </div>
					  <div class="tab-pane fade" id="dropdown2">
						<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
					  </div>
					</div>
					<ul id="myTab" class="nav nav-tabs">
					  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
					  <li><a href="#profile" data-toggle="tab">Profile</a></li>
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
						  <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
						</ul>
					  </li>
					</ul>
				  </div>
				  
				  <h3>Pills</h3>
				  
				  <div class="tabbable">
					<ul id="myTab" class="nav nav-pills">
					  <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
					  <li><a href="#profile" data-toggle="tab">Profile</a></li>
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
						  <li><a href="#dropdown1" data-toggle="tab">@fat</a></li>
						  <li><a href="#dropdown2" data-toggle="tab">@mdo</a></li>
						</ul>
					  </li>
					</ul>
					<div id="myTabContent" class="tab-content">
					  <div class="tab-pane fade in active" id="home">
						<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					  </div>
					  <div class="tab-pane fade" id="profile">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
					  </div>
					  <div class="tab-pane fade" id="dropdown1">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
					  </div>
					  <div class="tab-pane fade" id="dropdown2">
						<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
					  </div>
					</div>
				  </div>
        	
        	</div>
        	
        	<div class="span6">
        	
        		<h1 class="prometheus-underline">Misc</h1>
        		
        		<h3>Tooltips</h3>
        		
        		<ul class="examples">
				  <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Tooltip on top</a></li>
				  <li><a href="#" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</a></li>
				  <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</a></li>
				  <li><a href="#" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</a></li>
				</ul>
				
				<h3>Popovers</h3>
				
				<ul class="examples">
					<li><a href="#" class="btn" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover on top">Popover on top</a></li>
					<li><a href="#" class="btn" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover on right">Popover on right</a></li>
					<li><a href="#" class="btn" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover on bottom">Popover on bottom</a></li>
					<li><a href="#" class="btn" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover on left">Popover on left</a></li>
				  </ul>
				  
				  <h3>Collapse</h3>
				  
				  <div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      Collapsible Group Item #1
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse in">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                      Collapsible Group Item #2
                    </a>
                  </div>
                  <div id="collapseTwo" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                      Collapsible Group Item #3
                    </a>
                  </div>
                  <div id="collapseThree" class="accordion-body collapse">
                    <div class="accordion-inner">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
              
              <h3>Modals</h3>
              
              <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel">Modal Heading</h3>
            </div>
            <div class="modal-body">
              <h4>Text in a modal</h4>
              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem.</p>

              <h4>Popover in a modal</h4>
              <p>This <a href="#" role="button" class="btn popover-test" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on click.</p>

              <h4>Tooltips in a modal</h4>
              <p><a href="#" class="tooltip-test" title="" data-original-title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>

              <hr>

              <h4>Overflowing text to show optional scrollbar</h4>
              <p>We set a fixed <code>max-height</code> on the <code>.modal-body</code>. Watch it overflow with all this extra lorem ipsum text we've included.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Close</button>
              <button class="btn btn-primary">Save changes</button>
            </div>
          </div>
          
          <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">Launch demo modal</a>
          
          <h3>Wells</h3>
            
            <h4>Normal</h4>
            
            <div class="well">
              Look, I'm in a well!
            </div>
            
            <h4>Large</h4>
            
            <div class="well well-large">
              Look, I'm in a well!
            </div>
            
            <h4>Small</h4>
            
            <div class="well well-small">
              Look, I'm in a well!
            </div>
        	
        	</div>
        
        </div>
        
            
        
    </div>
    


<?php wp_footer(); ?>

</body>