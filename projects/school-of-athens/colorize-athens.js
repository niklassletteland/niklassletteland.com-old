/**
 * file colorize-athens.js
 *
 * contains the functions that allow for the interactive colorization of the home page image on paulmartinus.com
 *
 * @author     - Niklas Sletteland
 * @author URI - http://niklassletteland.com/
 *
 * copyright paulmartinus.com 2013
 *
 * description of global vars:
 * -----------------------------
 * current_mask_color - defaults to white - the color under the user's mouse on the shadow canvas, used in a hash-table
 *                      lookup do determine which image zone(s) to colorize
 *
 * active_hotspots - keeps track of the zones that are actively colorized - used to reference them so they can be removed
 *
 * active_stars -  an array that keeps track of actively colorized stars, so they can be removed as they fade in and out
 *
 * counter - an increasing counter used to give each new canvas a unique identifying id
 *
 * timeouts - keeps track of the timeouts that are running. necessary to prevent an amiation that takes a few seconds to complete from 
 *            continuing to run after the user has moved the mouse away from that zone
 *
 * color_img - the background image that the temp canvases use - this is the color version of the home page image, so the color will show
 *             through in the region that is being colorized
 *
 */
 


/**
 * hot-spot definitions
 * includes paths and mask colors
 * will be extracted and dynamically applied to <canvas> paths
 */
hotspots = new Array();





// baby at far bottom left
one = {
	coords : [ "31,332|30,300|31,293|36,291|40,292|45,294|44,298|42,303|41,305|46,310|46,310|49,311|53,307|58,309|58,313|54,313|52,316|48,317|45,318|46,326|41,328|38,331|35,333" ],
	mask   : '#291000'
};
hotspots.push(one);

// little guy with beard on left
two = {
	coords : [ "36,290|40,285|45,284|50,286|53,286|53,290|54,294|53,298|54,300|53,302|50,302|48,304|46,306|44,301|45,296|45,293|42,292|38,290" ],
	mask   : '#3b1800'
};
hotspots.push(two);

// shirtless guy at far left
three = {
	coords : [ "38,288|33,286|36,282|40,280|40,276|31,276|32,268|33,258|36,258|36,257|34,252|37,246|41,244|48,242|54,241|61,239|64,234|64,230|70,229|77,229|79,233|78,236|77,239|76,245|79,249|79,254|78,257|80,261|78,265|75,269|72,271|69,271|67,273|65,276|65,281|66,284|65,287|65,292|64,296|62,301|55,301|56,296|54,290|53,286|49,285|45,284|40,285" ],
	mask   : '#542200'
};
hotspots.push(three);

// person only top of head visible above three
four = {
	coords : [ "43,243|46,238|48,235|50,232|56,233|60,233|60,236|60,239|56,239|51,241|46,243" ],
	mask   : '#662900'
};
hotspots.push(four);

// lady to right of shirtless guy (#3)
five = {
	coords : [ "73,285|74,282|71,279|70,276|69,272|74,270|80,266|80,262|80,260|78,258|79,255|79,250|79,246|83,245|82,242|83,235|84,232|87,230|92,231|94,235|94,237|94,242|92,244|94,249|98,250|100,254|101,257|104,261|109,262|113,264|117,268|114,268|111,268|103,269|99,269|97,268|98,273|98,277|97,282|97,289|93,286|87,282|79,284|77,286" ],
	mask   : '#803300'
};
hotspots.push(five);

// head visible below between 3 and 5
six = {
	coords : [ "66,298|66,295|66,290|68,288|72,286|78,286|81,291|80,294|79,300|74,299" ],
	mask   : '#913a00'
};
hotspots.push(six);

// guy in blue writting stuff on a pad against the pillar at bottom left (Democritus!)
seven = {
	coords : [ "53,303|64,302|72,301|74,299|78,298|78,294|79,286|86,282|95,287|98,292|100,294|99,297|96,298|94,302|96,306|99,308|101,312|102,314|102,319|101,322|98,327|96,331|92,331|88,327|83,325|81,322|78,315|76,312|69,313|56,313|60,309|57,306|53,308|50,309|49,305|50,303" ],
	mask   : '#a14000'
};
hotspots.push(seven);

// head visible to top right of 7
eight = {
	coords : [ "94,300|98,301|100,305|106,302|113,304|115,308|114,314|108,320|113,322|110,326|105,324|101,324|100,321|102,318|104,315|104,311|103,308|100,307|96,306" ],
	mask   : '#b34800'
};
hotspots.push(eight);

// lady's head visible below 8
nine = {
	coords : [ "99,331|102,324|110,328|110,335|106,340|104,341|102,346|96,347|95,340|100,337|102,333|99,332" ],
	mask   : '#c24e00'
};
hotspots.push(nine);

// guy leaning to right of 7 and 8, wearing green and a turban(?)
ten = {
	coords : [ "114,322|118,318|125,316|133,316|134,311|138,307|146,307|150,309|153,312|151,318|148,321|146,323|142,324|142,328|139,333|136,336|134,340|132,346|128,351|125,346|120,342|114,342|108,344|112,337|112,327" ],
	mask   : '#d15400'
};
hotspots.push(ten);

// bearded guy in orange below 10
eleven = {
	coords : [ "81,370|82,365|86,360|90,352|96,351|101,348|106,348|108,345|112,342|118,342|122,344|125,348|126,351|126,356|126,365|125,372|122,378|120,380|122,384|124,390|122,394|122,401|120,404|120,408|118,412|113,417|114,424|111,428|106,427|104,422|100,421|100,373|98,372|83,370" ],
	mask   : '#e65c00'
};
hotspots.push(eleven);

// guy in pink and white robes at feet writing on tablet to right of 11 (Pythagoras!)
twelve = {
	coords : [ "141,336|143,328|149,326|158,328|163,332|164,336|163,340|160,344|164,349|170,345|175,352|177,358|177,360|172,367|178,372|179,384|178,392|179,399|181,404|186,408|187,414|181,416|180,411|171,410|170,417|167,421|163,423|155,424|146,423|136,421|130,417|127,416|121,423|116,424|116,416|121,410|122,404|123,396|126,392|124,383|126,378|127,374|128,366|130,355|130,349|133,344|133,341|136,340|137,338" ],
	mask   : '#f06000'
};
hotspots.push(twelve);

// lady to right of 12 holding tablet leaning on ground
thirteen = {
	coords : [ "167,335|170,332|175,330|179,331|182,336|183,346|182,352|186,360|191,368|194,371|194,380|200,382|196,393|194,399|188,412|184,407|180,404|179,401|181,394|184,388|180,392|180,384|180,377|180,370|176,368|174,366|179,360|176,349|174,345|170,343|165,347|162,343" ],
	mask   : '#ff6600'
};
hotspots.push(thirteen);

// lady in white robe (Hypatia)
fourteen = {
	coords : [ "163,326|166,317|171,306|175,300|177,298|181,289|184,284|188,282|192,284|194,288|193,292|192,296|193,302|199,310|201,318|203,324|202,328|200,332|196,337|197,342|196,347|196,354|198,362|198,369|200,373|195,371|191,366|190,362|187,355|184,350|185,343|185,336|181,331|173,327|166,327" ],
	mask   : '#eaff00'
};
hotspots.push(fourteen);

// guy in blue, yellow, and red next to lady in white (14) and moody guy (16) (Heraclitus)
fifteen = {
	coords : [ "204,304|200,300|198,297|198,290|202,287|208,287|213,288|215,292|215,297|221,298|227,300|230,303|233,307|238,314|242,316|244,318|247,322|245,326|249,332|245,336|244,343|244,350|240,360|238,366|238,370|232,383|232,394|230,401|219,400|217,402|216,408|207,411|204,411|205,407|207,406|202,402|204,394|201,390|200,384|200,378|202,374|199,369|198,362|197,355|197,350|197,346|198,342|198,337|205,328|202,320|200,314|201,310|202,307" ],
	mask   : '#c7d900'
};
hotspots.push(fifteen);

// moody motherfucker (Parmenides)
sixteen = {
	coords : [ "270,336|271,332|274,329|277,326|283,326|286,328|288,333|289,336|296,340|300,344|304,350|306,354|305,359|302,363|300,366|298,367|292,370|287,372|283,376|278,378|282,390|279,399|273,412|266,414|269,418|268,424|265,424|254,424|248,418|252,412|255,406|252,400|250,395|248,389|244,386|239,390|235,388|232,383|236,374|242,370|248,364|252,358|252,354|254,349|256,344|259,340|264,338|266,338|269,337" ],
	mask   : '#afbf00'
};
hotspots.push(sixteen);

// guy at left of top line with arm outstretched to the left
seventeen = {
	coords : [ "142,306|140,298|142,291|135,289|135,281|136,274|132,270|135,264|140,258|139,252|128,246|124,244|120,239|114,236|112,234|115,233|123,236|128,238|134,241|141,241|141,237|140,233|145,231|150,229|154,235|154,240|150,244|145,250|142,252|145,257|147,262|150,267|151,272|151,280|152,288|149,290|148,295|148,300|148,304|145,306" ],
	mask   : '#98a600'
};
hotspots.push(seventeen);

// person in armor(?) and weird hat
eighteen = {
	coords : [ "154,322|156,316|154,308|154,302|156,297|157,296|154,292|153,286|152,282|151,276|151,273|150,269|150,265|147,262|143,260|143,258|145,254|147,251|149,248|152,243|155,241|157,238|158,236|157,234|154,230|157,228|161,226|168,225|168,230|170,233|170,236|167,241|168,248|171,253|174,257|177,260|180,262|180,267|180,270|179,278|179,283|178,286|177,289|173,293|172,297|169,301|165,306|165,310|164,317|161,322" ],
	mask   : '#7c8700'
};
hotspots.push(eighteen);

// person in scarlet robe thinly visible to right of 18
nineteen = {
	coords : [ "169,240|171,236|176,237|177,241|178,246|180,254|185,258|188,266|185,270|184,278|183,283|181,286|180,291|178,296|174,301|171,304|169,309|167,306|169,302|172,299|172,294|174,291|178,288|178,285|180,268|181,266|181,263|177,261|174,258|173,253|172,248|170,246|170,243|169,242" ],
	mask   : '#606900'
};
hotspots.push(nineteen);

// head barely visible above 19
twenty = {
	coords : [ "173,235|177,230|183,230|184,236|181,242|178,238|174,236" ],
	mask   : '#484f00'
};
hotspots.push(twenty);

// lady in green with blue shawl with arm to her head who look bored as fuck
twenty_one = {
	coords : [ "185,247|188,241|193,236|196,233|199,232|204,232|206,235|208,237|207,241|209,246|211,250|213,251|213,257|210,257|206,256|201,256|199,258|201,261|204,264|208,265|209,269|209,273|209,278|210,282|210,286|205,287|201,287|200,289|197,292|199,297|200,301|203,302|203,304|200,308|194,302|194,297|193,288|193,281|192,273|190,268|189,262|187,260|184,257|184,254|185,249" ],
	mask   : '#2f3300'
};
hotspots.push(twenty_one);

// balding guy in beige robe talking to 21 (he is Socrates!)
twenty_two = {
	coords : [ "212,256|215,254|216,249|217,244|217,240|217,234|220,232|225,232|228,236|228,241|231,244|233,248|234,253|234,257|232,261|233,270|236,282|238,292|238,300|240,308|240,314|233,306|227,300|224,297|218,296|216,296|215,289|212,285|210,284|210,278|209,274|210,268|212,266|208,265|202,263|201,259|201,256|204,255|208,257|212,257" ],
	mask   : '#043300'
};
hotspots.push(twenty_two);

// guy with crossed arms, big bear, and purple robes
twenty_three = {
	coords : [ "234,245|236,244|236,238|241,235|245,234|250,239|249,245|255,250|252,256|252,262|254,266|255,270|254,277|255,282|254,289|253,295|250,295|248,303|246,309|244,315|240,309|238,300|238,292|238,287|236,280|234,272|233,268|233,265|232,263|234,259|235,254|235,250|234,248" ],
	mask   : '#054000'
};
hotspots.push(twenty_three);

// person with white robes and blue trim
twenty_four = {
	coords : [ "247,319|249,312|248,306|252,300|254,292|256,282|256,277|256,268|255,264|253,259|255,254|258,253|260,252|261,246|265,241|270,241|273,244|273,249|270,252|273,256|276,261|277,264|279,269|278,271|276,270|276,273|278,277|275,281|274,288|274,292|273,296|272,300|270,303|270,309|268,313|266,319|270,320|268,324|261,321|260,320|261,315|261,307|258,310|255,316|252,321|249,322" ],
	mask   : '#075200'
};
hotspots.push(twenty_four);

// person standing sideways (green bottom robes, blueish at top) to left of guy with dirty orange robe
twenty_five = {
	coords : [ "271,239|274,236|280,241|281,246|276,251|282,256|284,262|284,270|284,278|283,286|283,294|282,303|279,309|279,313|281,318|273,318|268,318|268,315|269,310|268,306|271,306|272,300|274,297|273,289|275,282|277,280|276,276|276,273|277,271|280,272|277,264|274,260|273,257|272,253|272,251|273,249|273,245|273,243" ],
	mask   : '#086300'
};
hotspots.push(twenty_five);

// guy with dark orange robe
twenty_six = {
	coords : [ "278,237|282,236|286,237|287,241|285,244|285,249|288,253|291,257|292,262|292,266|293,270|293,276|290,281|293,286|292,292|291,298|290,302|288,307|289,310|284,312|284,305|284,299|284,292|284,284|284,279|284,274|284,269|284,265|284,260|282,256|279,251|280,249|280,245|279,240" ],
	mask   : '#0a7800'
};
hotspots.push(twenty_six);

// lady in dark magenta robe thinly visible to left of main guy in middle (Plato)
twenty_seven = {
	coords : [ "285,242|291,245|292,252|293,260|296,262|298,268|297,274|296,280|296,288|295,296|294,304|296,309|292,312|287,308|288,304|292,297|293,293|293,290|292,285|290,282|292,277|292,273|292,269|292,264|292,261|288,253|286,249|285,246" ],
	mask   : '#0b8700'
};
hotspots.push(twenty_seven);

// Plato (in middle, arms outstretched)
twenty_eight = {
	coords : [ "301,246|304,242|305,237|306,234|309,233|313,233|314,236|315,239|316,244|320,246|324,249|324,254|322,258|325,262|326,265|325,274|324,281|323,288|322,297|322,302|319,309|316,313|319,314|318,318|310,322|298,317|303,316|301,305|300,297|299,290|298,284|298,277|298,274|297,269|297,263|294,264|293,260|292,256|292,252|292,246|292,242|293,239|293,238|294,239|296,241|296,244|296,249|300,247" ],
	mask   : '#0d9600'
};
hotspots.push(twenty_eight);

// Aristotle (blue and brown robes in middle)
twenty_nine = {
	coords : [ "334,244|333,242|334,240|333,237|334,233|338,232|342,233|345,235|345,238|346,242|343,245|345,247|349,247|351,251|354,255|355,260|358,263|359,264|360,268|361,274|358,277|358,282|358,286|358,289|356,292|355,297|353,299|354,304|356,310|356,313|353,316|350,316|355,317|356,320|352,320|349,318|346,317|343,314|341,314|344,319|339,319|336,320|336,315|331,314|331,309|331,305|329,299|329,296|328,292|328,289|328,285|323,283|325,278|326,272|327,268|327,265|324,263|323,260|324,257|324,254|326,249|328,248|330,246|331,246" ],
	mask   : '#0ea300'
};
hotspots.push(twenty_nine);

// heads barely visible top right of Aristotle
thirty = {
	coords : [ "358,250|356,244|361,239|365,234|366,239|366,242|367,249|361,250" ],
	mask   : '#0fb300'
};
hotspots.push(thirty);

// guy with curly hair in green to right of Aristotle 
thirty_one = {
	coords : [ 
		      	"355,258|358,252|362,250|367,248|366,244|366,238|371,237|375,239|375,241|372,243|372,247|371,250|367,253|362,256|360,259", // head and chest
				"358,312|359,304|360,295|358,290|358,284|359,277|362,274|364,284|365,291|364,296|365,301|365,306|364,310" // foot and robe
			 ],
	mask   : '#10c400'
};
hotspots.push(thirty_one);

// 'dat lady in red who is being divided into two sections by the hand of the bitch in blue to her right
thirty_two = {
	coords : [ 
	        	"367,252|370,250|371,244|373,240|377,240|377,246|377,250|375,252|371,255|370,260|367,258", // head
				"362,312|365,305|365,298|364,293|363,286|361,278|362,273|361,266|360,262|362,259|368,267|369,269|366,279|370,284|370,289|370,293|369,301|369,306" // feet and robes
			 ],
	mask   : '#12d400'
};
hotspots.push(thirty_two);

// the aforementioned bitch in blue
thirty_three = {
	coords : [ "371,260|373,255|376,251|379,249|377,245|377,241|377,238|382,238|384,239|383,245|384,248|385,251|383,255|379,259|377,262|377,264|378,270|377,277|379,280|379,287|381,290|382,299|382,301|383,306|384,312|382,315|377,316|375,312|373,310|372,309|368,308|369,305|370,297|371,294|371,290|372,286|371,284|368,280|368,276|369,273|370,270|366,265|364,261|363,258|363,255|363,251|364,251|366,253|367,258|369,260" ],
	mask   : '#13de00'
};
hotspots.push(thirty_three);

// guy with beard in big billowing orange robes
thirty_four = {
	coords : [ "382,318|383,310|381,290|380,285|378,276|377,270|378,264|378,259|382,256|385,248|382,242|384,238|385,235|387,232|389,231|392,232|395,234|395,237|394,240|398,244|400,245|404,249|406,252|405,257|407,258|407,265|407,272|406,276|408,281|407,284|409,289|410,297|410,300|408,305|408,310|411,309|412,306|413,304|416,305|416,309|414,313|415,318|416,325|405,324|398,325|385,324|382,318|381,314" ],
	mask   : '#14ed00'
};
hotspots.push(thirty_four);

// guy in red facing away to right of 34
thirty_five = {
	coords : [ 
				"406,257|408,250|409,247|409,242|409,238|411,237|416,237|419,239|418,243|419,246|421,248|424,251|427,257|427,260|425,257|421,257|419,258|417,262|413,263|409,263", // head and upper torso
				"408,287|407,278|407,273|406,265|408,267|412,267|413,270|415,271|416,274|416,277|414,280|414,283|412,286|411,288" // lower torso (robe)
			 ],
	mask   : '#14f500'
};
hotspots.push(thirty_five);

// guy in yellow to right of 35, also walking away
thirty_six = {
	coords : [ "427,259|426,254|424,250|421,247|419,243|420,240|424,237|427,237|429,240|430,241|429,245|430,247|428,249|428,253" ],
	mask   : '#15ff00'
};
hotspots.push(thirty_six);

// lady in aqua and white, gesticulating with hands and facing away
thirty_seven = {
	coords : [ "416,276|417,271|417,263|418,259|420,258|422,257|425,258|428,259|427,263|428,267|432,271|434,271|437,275|441,282|443,287|445,292|443,294|442,302|441,309|441,316|441,322|442,326|441,333|441,337|440,342|439,347|439,350|442,354|442,357|440,357|437,357|435,353|435,346|429,349|425,341|417,340|421,336|418,330|416,322|415,318|413,314|417,310|414,305|412,307|411,311|408,313|407,309|408,306|409,303|411,301|411,300|410,296|407,298|405,299|403,297|404,294|406,292|409,290|411,288|413,283|415,279" ],
	mask   : '#00e1ff'
};
hotspots.push(thirty_seven);

// guy with blue robe and light pink shawl pointing towards Aristotle
thirty_eight = {
	coords : [ "426,263|429,258|426,249|432,247|437,246|441,249|442,254|444,256|451,259|457,265|462,271|465,278|462,283|462,291|460,296|462,306|461,315|455,319|450,325|448,329|443,327|441,321|441,314|441,310|443,302|443,296|443,294|445,291|443,286|440,280|438,274|433,270|430,270|428,266" ],
	mask   : '#00d1ed'
};
hotspots.push(thirty_eight);

// guy near right against wall leaning over and writing something
thirty_nine = {
	coords : [ "472,317|470,315|472,309|473,301|473,297|472,295|470,299|467,294|465,290|464,283|462,278|462,274|460,267|464,262|466,257|472,254|477,256|480,258|481,261|486,264|490,269|491,274|488,279|486,284|487,288|492,291|496,297|491,301|488,295|484,293|481,298|480,304|478,308|476,313|478,317" ],
	mask   : '#00bbd4'
};
hotspots.push(thirty_nine);

// Pyrrho - guy on right hand side with legs crossed, to right of 39
fourty = {
	coords : [ "479,252|483,250|487,249|485,246|483,243|484,238|494,237|498,242|506,243|513,249|519,258|521,265|523,272|520,281|519,290|517,300|526,307|521,311|516,309|512,308|511,312|501,314|506,306|499,301|497,297|495,291|495,284|494,271|493,265|492,260|487,260|485,256|479,254" ],
	mask   : '#00b0c7'
};
hotspots.push(fourty);

// guy with maroon beard and a robe on right-hand side
fourty_one = {
	coords : [ "542,239|542,234|541,233|544,229|547,228|552,230|554,233|553,237|558,242|562,248|564,252|566,258|567,262|567,265|566,267|566,275|565,285|565,292|564,298|563,303|562,309|555,312|553,309|558,307|560,302|559,297|556,293|553,292|548,293|544,295|540,298|541,304|542,307|546,309|545,315|549,317|550,322|547,322|543,323|539,320|537,314|535,307|534,299|533,292|531,286|531,280|531,272|532,267|532,262|531,254|533,249|536,245|537,242|540,240" ],
	mask   : '#00a3b8'
};
hotspots.push(fourty_one);

// emerald green robe right-hand side
fourty_two = {
	coords : [ "575,280|575,272|576,268|572,267|568,274|568,265|570,260|571,257|576,258|580,259|583,251|585,244|586,238|588,232|592,232|598,234|599,235|597,241|598,245|600,248|597,250|594,255|592,260|593,262|593,267|589,270|587,273|584,276|581,279|577,279|575,281|575,276|575,272" ],
	mask   : '#009bb0'
};
hotspots.push(fourty_two);

// buy with beard leaning backward on right-hand side
fourty_three = {
	coords : [ "583,281|587,273|593,266|592,263|594,255|596,251|600,247|600,245|599,244|598,240|600,235|602,234|607,234|609,236|609,239|610,244|613,246|616,250|618,252|620,253|620,260|615,259|614,263|614,264|617,270|618,276|615,281|612,281|609,280|607,281|603,285|599,288|597,285|596,285|588,289|586,284" ],
	mask   : '#0090a3'
};
hotspots.push(fourty_three);

// guy's head visible at far right hand side
fourty_four = {
	coords : [ "611,245|610,238|611,234|614,233|616,237|619,243|617,246" ],
	mask   : '#008596'
};
hotspots.push(fourty_four);

// guy in dark green robe, left side of the bottom-right group
fourty_five = {
	coords : [ "440,377|444,370|445,362|446,356|448,352|445,347|445,342|446,339|450,336|453,333|456,330|459,326|462,323|466,322|474,322|479,322|481,317|485,317|487,316|492,314|496,316|500,318|502,320|502,324|500,325|500,329|494,333|490,332|489,338|496,342|495,348|489,350|485,350|480,344|476,345|480,351|480,358|483,362|481,366|478,369|474,368|470,372|465,373|460,378|453,383|448,383|443,380" ],
	mask   : '#007c8c'
};
hotspots.push(fourty_five);

// lady in blue leaned over to right of 45
fourty_six = {
	coords : [ "494,365|496,362|504,360|510,362|514,368|512,374|512,377|507,379|504,381|500,386|497,394|495,398|493,402|496,409|500,416|496,420|488,422|481,421|468,420|457,419|454,413|458,406|458,395|450,395|450,389|457,386|458,380|463,377|467,374|472,372|476,370|482,368|484,365|488,365" ],
	mask   : '#007180'
};
hotspots.push(fourty_six);

// crouching lady in green looking upwards
fourty_seven = {
	coords : [ "493,362|492,356|497,353|498,345|502,337|506,334|513,334|516,341|515,349|522,347|524,348|524,354|525,361|524,362|526,370|524,376|521,382|520,392|517,398|518,403|524,397|524,392|526,388|530,384|532,392|531,402|528,408|519,412|514,409|506,412|503,410|498,412|493,402|499,393|501,389|506,384|508,379|512,373|515,369|517,366|514,363|508,360|504,358|498,360|497,361" ],
	mask   : '#006775'
};
hotspots.push(fourty_seven);

// lady leaning forward, facing forard, in blue and light pink
fourty_eight = {
	coords : [ 
				"502,324|506,322|507,315|513,311|523,308|533,308|536,316|541,323|545,329|548,336|537,338|532,342|525,346|525,353|518,352|517,344|514,338|518,334|515,328|512,330|506,326", // head and torso
				"531,378|533,373|536,367|543,358|545,366|544,375|539,378|538,385|534,392|536,400|530,404|529,397|530,390|530,385" // foot visible below guy leaning over
			 ],
	mask   : '#005661'
};
hotspots.push(fourty_eight);

// guy in red pointing to tablet on the ground (Euclid!)
fourty_nine = {
	coords : [ "517,402|517,396|521,388|522,377|525,372|525,368|524,362|525,359|524,353|525,348|528,345|533,342|534,338|543,336|552,334|561,332|567,338|574,341|570,349|569,359|573,372|574,386|571,396|576,402|570,406|559,404|558,397|555,402|556,410|547,415|544,411|542,405|539,397|542,389|545,382|545,377|545,369|545,363|546,358|541,357|538,362|534,368|532,374|529,380|526,384|524,390|522,396|521,400" ],
	mask   : '#004852'
};
hotspots.push(fourty_nine);

// guy with beard holding globe (Zoroaster!)
fifty = {
	coords : [ "545,310|542,306|541,300|544,296|548,293|552,292|557,294|558,297|559,301|560,306|556,308|552,310|554,312|558,312|560,310|564,301|570,297|573,296|572,292|569,287|573,283|577,280|582,282|585,286|585,292|585,296|587,300|589,302|589,307|581,310|577,316|572,316|569,313|564,312|561,313|557,316|556,320|557,323|558,326|559,330|552,329|550,325|549,321|549,318|545,313" ],
	mask   : '#003a42'
};
hotspots.push(fifty);

// lady in dark yellow robe w/ blue trim, right hand side, holding a globe
fifty_one = {
	coords : [ "558,329|559,325|557,320|558,314|561,312|566,312|570,314|575,317|579,315|581,309|586,308|589,305|588,301|586,300|587,294|589,289|592,285|597,286|601,290|600,294|600,300|597,302|600,306|606,309|612,314|611,320|613,328|613,337|615,344|613,348|610,356|612,369|614,382|616,392|617,400|617,404|620,408|622,412|619,415|617,420|611,423|605,421|604,414|602,405|600,406|599,411|597,417|582,415|583,410|588,409|592,402|588,403|583,407|576,404|573,394|573,385|572,373|571,363|572,354|572,346|571,340|568,337|562,333|558,330" ],
	mask   : '#002d33'
};
hotspots.push(fifty_one);

// second-to-rightmost guy (Raphael - the painter himself!)
fifty_two = {
	coords : [ "601,304|608,301|603,298|602,289|602,284|607,280|613,282|610,285|613,288|610,293|612,298|616,301|613,306|609,311" ],
	mask   : '#002429'
};
hotspots.push(fifty_two);

// very right-most guy in white
fifty_three = {
	coords : [ "605,306|613,301|613,298|610,293|612,290|613,284|620,282|623,286|624,294|625,300|623,336|625,365|624,394|615,383|612,370|610,359|612,353|616,348|614,342|613,334|612,324|612,317" ],
	mask   : '#001b1f'
};
hotspots.push(fifty_three);

// scantily-clad fellow in blue in the very middle (Diogenes)
fifty_four = {
	coords : [ "333,341|333,335|339,333|342,332|346,332|350,334|351,329|354,326|356,321|360,320|361,319|362,316|365,312|369,310|372,310|376,313|376,316|376,319|377,323|381,325|385,328|390,337|396,340|401,338|401,342|401,345|405,349|410,350|423,352|428,354|426,358|421,358|413,358|409,358|405,358|402,358|399,358|393,358|388,357|390,360|395,363|402,368|408,372|402,374|398,371|390,369|384,366|380,363|372,372|368,372|368,365|366,358|358,358|347,358|343,350|341,344|338,344" ],
	mask   : '#00171a'
};
hotspots.push(fifty_four);


/**
 * hot-spot mask color lookup table
 */
mask_table = {
	'#291000' : one,
	'#3b1800' : two,
	'#542200' : three,
	'#662900' : four,
	'#803300' : five,
	'#913a00' : six,
	'#a14000' : seven,
	'#b34800' : eight,
	'#c24e00' : nine,
	'#d15400' : ten,
	'#e65c00' : eleven,
	'#f06000' : twelve,
	'#ff6600' : thirteen,
	'#eaff00' : fourteen,
	'#c7d900' : fifteen,
	'#afbf00' : sixteen,
	'#98a600' : seventeen,
	'#7c8700' : eighteen,
	'#606900' : nineteen,
	'#484f00' : twenty,
	'#2f3300' : twenty_one,
	'#043300' : twenty_two,
	'#054000' : twenty_three,
	'#075200' : twenty_four,
	'#086300' : twenty_five,
	'#0a7800' : twenty_six,
	'#0b8700' : twenty_seven,
	'#0d9600' : twenty_eight,
	'#0ea300' : twenty_nine,
	'#0fb300' : thirty,
	'#10c400' : thirty_one,
	'#12d400' : thirty_two,
	'#13de00' : thirty_three,
	'#14ed00' : thirty_four,
	'#14f500' : thirty_five,
	'#15ff00' : thirty_six,
	'#00e1ff' : thirty_seven,
	'#00d1ed' : thirty_eight,
	'#00bbd4' : thirty_nine,
	'#00b0c7' : fourty,
	'#00a3b8' : fourty_one,
	'#009bb0' : fourty_two,
	'#0090a3' : fourty_three,
	'#008596' : fourty_four,
	'#007c8c' : fourty_five,
	'#007180' : fourty_six,
	'#006775' : fourty_seven,
	'#005661' : fourty_eight,
	'#004852' : fourty_nine,
	'#003a42' : fifty,
	'#002d33' : fifty_one,
	'#002429' : fifty_two,
	'#001b1f' : fifty_three,
	'#00171a' : fifty_four
}




/*****************************************************************************************************************************************
 *****************************************************************************************************************************************
 *****************************************************************************************************************************************
 *****************************************************************************************************************************************/
 
 
// delare and initialize global vars 
var current_mask_color = '#fff';
var active_hotspots = [];
var counter = 0;
var star_counter = 0;
var timeouts = [];
var color_img = new Image();
color_img.src = "school-of-athens-color.jpg";


function clear_hotspots() {

	for (var i = 0; i < timeouts.length; i++) {
		clearTimeout(timeouts[i]);
	}
	timeouts = []; 
	
	// empty the active hotspots array since all active hotspots were faded out in the preceding 'for' loop
	active_hotspots = []; 
	
	$('.tmp_canvas_athens').show();
	
	$('.tmp_canvas_athens').fadeOut(700, function() {
		$(this).remove(); // and get rid of the canvas to conserve memory
	}); 
}

$(document).ready( function() {
	initialize_shadow_canvas();
	
	// clear all hotspots when user moves mouse out of image 
	$('#cloak-athens').mouseout( function() {
		window.setTimeout(function() {
			clear_hotspots();
		}, 2000);
	});

/*	$('#cloak-athens').mousemove(function(e) {
	
	    var pos = find_position(this);
	    var x = e.pageX - pos.x;
	    var y = e.pageY - pos.y;
	    var coord = "x=" + x + ", y=" + y;
		$('#status').html(coord);
		
	}); */
	
	// check if the user is logged in or not to correct for offset caused by the admin bar if they are
	var user_logged_in = false;
	if( $("#wpadminbar").length != 0 ) { // check for the #wpadminbar div, if it's there:
		user_logged_in = true; // set this to true; it will later be corrected for
	}	

	$('#cloak-athens').mousemove(function(e) {
	
	    var pos = find_position(this);
	    var x = e.pageX - pos.x;
	    var y = e.pageY - pos.y;

		//correct if logged in
		if (user_logged_in === true) {
			y = y - $("#wpadminbar").height() - 2; // we offset the y variable by it's height to correct
		}
		
		var shadow_canvas = $('#shadow_canvas')[0];
	    var ctx = shadow_canvas.getContext('2d');
	    var p = ctx.getImageData(x, y, 1, 1).data; 
	    var hex = "#" + ("000000" + rgbToHex(p[0], p[1], p[2])).slice(-6);
		
		// check to see if the mask color on the shadow div is different from the current one
		// if this is the case, it means that a new hot-spot is being hovered over
		// thus, the function will stop the last animation and initiate a new one with the 
		// current hot-spot
		if (hex != current_mask_color) {
		
			clear_hotspots();
			
			// if the mouse is hovering over a hotspot, hex will register a color other than white, and we proceed to 
			// visually activate the hotspot they are over. otherwise nothing needs to be done. 
			if (hex != '#000000') {
					
				var hotspot = mask_table[hex]; // determine which hotspot the color mask refers to
				
				// make sure the hotspot was properly determined from the mask table, so it doesn't throw a million errors
				if (hotspot) {
					change_state(hotspot);
				}
					
			} // close 'if (hex != '#000000')' 
			
			current_mask_color = hex;
		} // close 'if (hex != current_mask_color)'
	});		
});

function find_position(obj) {
    var curleft = 0, curtop = 0;
    if (obj.offsetParent) {
        do {
            curleft += obj.offsetLeft;
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
        return { x: curleft, y: curtop };
    }
    return undefined;
}

function rgbToHex(r, g, b) {
    if (r > 255 || g > 255 || b > 255)
        throw "Invalid color component";
    return ((r << 16) | (g << 8) | b).toString(16);
}



/**
 * function initialize_shadow_canvas()
 * params - none
 * adds hotspot masks to the shadow canvas
 */
function initialize_shadow_canvas() {	
		
	var shadow_canvas = $('#shadow_canvas')[0];
	if (shadow_canvas.getContext) {
		var ctx = shadow_canvas.getContext('2d');
		
		// create the paths!
		for (var i = 0; i < hotspots.length; i++) {
			
			// define the color with which to mask the hot-spot
			ctx.fillStyle = hotspots[i].mask;
			
			// pass coords to function to draw the actual path
			for (var j = 0; j < hotspots[i].coords.length; j++) {
				draw_path(hotspots[i].coords[j], ctx); 
				ctx.fill() 
			}
		}
		
	} else {
		alert('your browser does not support canvas');
	}
} // end of initialize_shadow_canvas()







/**
 * function draw_path()
 * parameters: - coords - a string of the coordinates in the path, each coordinat should be 
 *                      comma-separated; each coordinate pair is delimited by |
 *                      ex: "377,319|386,309|386,288|389,268|385,240|364,234|345,237|345"
 *             - ctx - the 2d canvas context to draw on
 * This function draws a path using lineTo() to go between coordinates. It does not fill or
 * stroke the path; that must be done by the calling function, depending on the desired behavior
 */
function draw_path (new_coords, ctx) {

	// extract coordinate data from string into array
	coords = new_coords.split('|'); // split separate coordinate pairs
	for (var j = 0; j < coords.length; j++) { //split x and y coords in each coordinate pair
		coords[j] = coords[j].split(',');
	}
	
	ctx.beginPath(); // start the path! 
	
	// the first coordinate uses moveTo() instead of lineTo(), so shift it off and use it
	var first_coord = coords.shift();
	ctx.moveTo(first_coord[0], first_coord[1]);
	
	// now the rest!
	for (var j = 0; j < coords.length; j++) {
		ctx.lineTo(coords[j][0], coords[j][1]);
	}

	ctx.closePath();
}


function change_state(hotspot) {

	function delay_generation(delay, coords, img) {
		timeouts.push( setTimeout(function() {
			if (img !== undefined) {
				generate_canvas(coords, img);
			} else {
				generate_canvas(coords);
			}
		}, delay) );
	}
	
	// check to see if there is any special animation info to process, such as multi-phase fade ins
	if (hotspot.animation_info) {
		var delay = 0;
		var increment = hotspot.animation_info.delay;
		if (hotspot.animation_info.img) {
			var img = hotspot.animation_info.img;
			for (var j = 0; j < hotspot.animation_info.animation_coords.length; j++) {	
				delay_generation(delay, hotspot.animation_info.animation_coords[j], img);
				delay += increment;
			} 
		} else {
			for (var j = 0; j < hotspot.animation_info.animation_coords.length; j++) {	
				delay_generation(delay, hotspot.animation_info.animation_coords[j]);
				delay += increment;
			} 
		}

	} else {
		// in this case, it is a simple single zone fade in, so we proceed to draw it, which only takes
		// one call to generate_canvas
		generate_canvas( hotspot.coords );
	}
}


function generate_canvas (hotspot_coords, img) {

	if (img === undefined) {
		img = color_img;
	}
	
	// create unique id using increasing counter variable so we can referecne the canvas later
	var canvas_id = 'canvas' + counter; 
	counter++;
	
	// add to active_hotspots array to keep track of what is currently colorized
	active_hotspots.push(canvas_id);

	$('<canvas>').attr({
		id     : canvas_id,
	    class  : 'tmp_canvas_athens',
		width  : '660',
		height : '440'
	}).appendTo('#image-athens');	
	
	// fade in the canvas
	var canvas = $('#' + canvas_id)[0];
	$(canvas).hide();
	$(canvas).fadeIn(600);
	
	if (canvas.getContext) {
		var ctx = canvas.getContext('2d');
		
		// set strokeStyle to be transparent so there will not be a visible border
		ctx.strokeStyle = "rgba(1, 1, 1, 0)";

		for (var i = 0; i < hotspot_coords.length; i++) {

			// draw the path using the hostpot coordinates
			draw_path(hotspot_coords[i], ctx);
			
			// insert background image inside path
			ctx.save(); 
			ctx.clip();
			ctx.drawImage(img,0,0,660,440); // draw image inside path
			ctx.restore(); //restore path
		}
			
	} else {
		alert('your browser does not support canvas');
	} // end if (convas.getContext) 
	
} // end draw_canvas()