/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

$('.currency').toArray().forEach(function(field){
new Cleave(field, {
  numeral: true,
  numeralThousandsGroupStyle: 'thousand'
	});
});

function add_commas(nStr)
{
	var x,x1,x2 = '';
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
      x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

function raw_number(nStr)
{
	var x = '';
    x = nStr.replace(/,/g, '');
    return Number(x);
}