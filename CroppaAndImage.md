// open an image file
$img = Image::make('public/foo.jpg');

// resize image instance
$img->resize(320, 240);

// insert a watermark
$img->insert('public/watermark.png');

// save image in desired format
$img->save('public/bar.jpg');


//Croppa Image manipulation
<img src="<?=Croppa::url($url, $width, $height, $options)?>" />

These are the arguments that Croppa::url() takes:

    $url : The URL of your source image. The path to the image relative to the src_dir will be extracted using the path config regex.
    $width : A number or null for wildcard
    $height : A number or null for wildcard
    $options - An array of key value pairs, where the value is an optional array of arguments for the option. Supported option are:
        resize - Make the image fit in the provided width and height through resizing. When omitted, the default is to crop to fit in the bounds (unless one of sides is a wildcard).
        pad - Pad an image to desired dimensions. Moves the image into the center and fills the rest with given color. If no color is given, it will use white [255,255,255]
        quadrant($quadrant) - Crop the remaining overflow of an image using the passed quadrant heading. The supported $quadrant values are: T - Top (good for headshots), B - Bottom, L - Left, R - Right, C - Center (default). See the PHPThumb documentation for more info.
        trim($x1, $y1, $x2, $y2) - Crop the source image to the size defined by the two sets of coordinates ($x1, $y1, ...) BEFORE applying the $width and $height parameters. This is designed to be used with a frontend cropping UI like jcrop so that you can respect a cropping selection that the user has defined but then output thumbnails or sized down versions of that selection with Croppa.
        trim_perc($x1_perc, $y1_perc, $x2_perc, $y2_perc) - Has the same effect as trim() but accepts coordinates as percentages. Thus, the the upper left of the image is "0" and the bottom right of the image is "1". So if you wanted to trim the image to half the size around the center, you would add an option of trim_perc(0.25,0.25,0.75,0.75)
        quality($int) - Set the jpeg compression quality from 0 to 100.
        interlace($bool) - Set to 1 or 0 to turn interlacing on or off
        upscale($bool) - Set to 1 or 0 to allow images to be upscaled. If falsey and you ask for a size bigger than the source, it will only create an image as big as the original source.

Croppa::render($cropurl)

If you want to create the image programmatically you can pass to this function the url generated by Croppa::url. This will only create the thumbnail and exit.

Croppa::render('/uploads/image-300x200.png');

or

Croppa::render(Croppa::url('/uploads/image.png', 300, 200));

Croppa::delete($url)

You can delete a source image and all of it's crops (like if a related DB row was deleted) by running:

Croppa::delete('/path/to/src.png');

Croppa::reset($url)

Similar to Croppa::delete() except the source image is preserved, only the crops are deleted.

Croppa::reset('/path/to/src.png');

Console commands
croppa:purge

Deletes ALL crops. This works by scanning the crops_dir recursively and matching all files that have the Croppa naming convention where a corresponding src file can be found. Accepts the following options:

    --filter - Applies a whitelisting regex filter to the crops. For example: --filter=^01/ matches all crops in the "./public/uploads/01/" directory
    --dry-run - Ouputs the files that would be deleted to the console, but doesn't actually remove

croppa.js

A module is included to prepare formatted URLs from JS. This can be helpful when you are creating views from JSON responses from an AJAX request; you don't need to format the URLs on the server. It can be loaded via Require.js, CJS, or as browser global variable.
croppa.url(url, width, height, options)

Works just like the PHP Croppa::url except for how options get formatted (since JS doesn't have associative arrays).

croppa.url('/path/to/img.jpg', 300, 200, ['resize']);
croppa.url('/path/to/img.jpg', 300, 200, ['resize', {quadrant: 'T'}]);
croppa.url('/path/to/img.jpg', 300, 200, ['resize', {quadrant: ['T']}]);

Run php artisan asset:publish bkwld/croppa to have Laravel copy the JS to your public directory. It will go to /public/packages/bkwld/croppa/js by default.