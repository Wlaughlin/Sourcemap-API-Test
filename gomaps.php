<?php require('lib/src-client.php'); include('lib/extra/class.krumo.php');?>
<?php $src = new SrcClient('5257d32745ffdc33c253fff73a5e5b31', 'b01975255a8be1d7afda88c228c19b47'); ?>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
Heylo thur
<button onclick="importSourceMap(data2)">Wanna import?</button>
<button onclick="importSourceMap(data)">Import more?</button>
<button onclick="importSourceMap(data3)">No way, you want more!?</button>
<button onclick="someFunc()">Fun Mode</button>
<style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBV7iV0eIHKxPkBIGtJb0020G-X1g4wg8E&sensor=false">
    </script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">

function someFunc() { 
jQuery(function ($) {

    $("*").css({'font-family': "Comic Sans MS", 'font-size': "large"});

    $("p, #_webr_EntityView").wrap($("<marquee>")).wrap($("<blink>"));

    $("img[src$='spacer.gif']").after(

        $('<img src="http://textfiles.com/underconstruction/CoColosseumField3807construction2.gif" width="40" height="40">')

    );

    $("table").attr("border", "2");

    window.alert("FUN MODE ACTIVATED");

});
}

var map;
var supplylines;


var data2 = {"supplychain":{"category":35,"created":1323036795,"enable_comments":true,"flags":8,"id":1438,"modified":1331924144,"other_perms":1,"passcode":null,"user_featured":false,"usergroup_id":null,"usergroup_perms":0,"user_id":882,"owner":{"id":882,"name":"smalik78643","avatar":"http:\/\/sourcemap.com\/assets\/images\/default-user.png","banner_url":null,"display_name":null},"taxonomy":[{"description":"Clothing, Shoes & Jewelry","id":8,"left":1,"name":"clothing-shoes","right":12,"title":"Clothing, Shoes & Jewelry"},{"description":"","id":49,"left":3,"name":"apparel","right":8,"title":"Apparel"},{"description":"","id":50,"left":4,"name":"outerwear","right":5,"title":"Outerwear"},{"description":"Shoes","id":35,"left":4,"name":"shoes","right":5,"title":"Shoes"}],"attributes":{"description":"The road to creating Toms","tags":"","title":"Toms"},"stops":[{"local_stop_id":29,"id":29,"geometry":"POINT(11598978.535428 4281602.6590309)","attributes":{"youtube:link":"","co2e":"0","weight":"0","unit":"kg","qty":"0","supplychain_instance_id":"supplychain-1","stop_instance_id":"stop-7","description":"TOMS shoes are made of low environment friendly materials. The canvas portion is made of Texture Twill material (67% hemp, 33% recycled plastics). The soft insole is made of micro fiber as opposed to suede in the regular line. The sole is made of part recycled rubber.  Minimal glue is used to put the shoe together.","address":"China","title":"Recycled materials "}},{"local_stop_id":28,"id":28,"geometry":"POINT(4507289.7801187 1022366.8860381)","attributes":{"youtube:link":"","co2e":"0","weight":"0","unit":"kg","qty":"0","supplychain_instance_id":"supplychain-1","stop_instance_id":"stop-6","description":"We require the factories operate under sound labor conditions, pay fair wages and follow the International Labor Standards set by the International Labor Organization. A code of conduct is signed by all factories. Our production staff regularly visits these factories to make sure they are maintaining these working standards. We also have third parties audit the factories at least once a year to ensure they adhere to proper labor regulations. \nhttp:\/\/www.intertek-labtest.com\/services\/auditing\/intertek_compliance\/?lang=en","address":"Ethiopia","title":"Manufactured"}},{"local_stop_id":27,"id":27,"geometry":"POINT(11598978.535428 4281602.6590309)","attributes":{"youtube:link":"","co2e":"0","weight":"0","unit":"kg","qty":"0","supplychain_instance_id":"supplychain-1","stop_instance_id":"stop-5","description":"We require the factories operate under sound labor conditions, pay fair wages and follow the International Labor Standards set by the International Labor Organization. A code of conduct is signed by all factories. Our production staff regularly visits these factories to make sure they are maintaining these working standards. We also have third parties audit the factories at least once a year to ensure they adhere to proper labor regulations. \nhttp:\/\/www.intertek-labtest.com\/services\/auditing\/intertek_compliance\/?lang=en\nhttp:\/\/www.toms.com\/manufacturing-practices","address":"China","title":"Manufactured"}},{"local_stop_id":26,"id":26,"geometry":"POINT(-7081775.5320169 -4638374.2744388)","attributes":{"supplychain_instance_id":"supplychain-1","stop_instance_id":"stop-4","description":"","address":"Argentina","title":"Manufactured "}},{"local_stop_id":25,"id":25,"geometry":"POINT(-13190379.066036 4031414.5619801)","attributes":{"youtube:link":"http:\/\/www.youtube.com\/watch?v=8pKoNdvz5bs","co2e":"0","weight":"0","unit":"kg","qty":"0","supplychain_instance_id":"supplychain-1","stop_instance_id":"stop-3","description":"TOMS was founded on a simple premise: With every product you purchase, TOMS will help a person in need. One for One\u2122. Using the purchasing power of individuals to benefit the greater good is what we're all about. ","address":"Santa Monica, CA, USA","title":"Head Quarters "}},{"local_stop_id":24,"id":24,"geometry":"POINT(4507289.7801187 1022366.8860381)","attributes":{"title":"Recycled Materials ","address":"Ethiopia","description":"TOMS shoes are made of low environment friendly materials. The canvas portion is made of Texture Twill material (67% hemp, 33% recycled plastics). The soft insole is made of micro fiber as opposed to suede in the regular line. The sole is made of part recycled rubber.  Minimal glue is used to put the shoe together.","stop_instance_id":"stop-6","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":23,"id":23,"geometry":"POINT(-7081775.5320169 -4638374.2744388)","attributes":{"title":"Recycled Materials","address":"Argentina","description":"TOMS shoes are made of low environment friendly materials. The canvas portion is made of Texture Twill material (67% hemp, 33% recycled plastics). The soft insole is made of micro fiber as opposed to suede in the regular line. The sole is made of part recycled rubber.  Minimal glue is used to put the shoe together.","stop_instance_id":"stop-8","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":22,"id":22,"geometry":"POINT(-10026717.10921 3497261.3573862)","attributes":{"title":"One for One: Shoe drops","address":"New Orleans, LA, USA","description":"First US Shoe drop\nOctober 2008\n\nShoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n","stop_instance_id":"stop-9","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":"http:\/\/www.youtube.com\/watch?v=dXDWXX5NzXI&feature=relmfu"}},{"local_stop_id":21,"id":21,"geometry":"POINT(-7081775.5320169 -4638374.2744388)","attributes":{"title":"One for One: Shoe drops","address":"Argentina","description":"First shoe drop\nAugust 2006\n\n\nShoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n","stop_instance_id":"stop-10","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":"http:\/\/www.youtube.com\/watch?v=L83A-wbgMZM"}},{"local_stop_id":20,"id":20,"geometry":"POINT(-9600404.9483055 1712260.1402682)","attributes":{"title":"One for One: Shoe drops","address":"Honduras","description":"Shoe drop\nJuly 2011\n\nShoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.","stop_instance_id":"stop-12","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":"http:\/\/www.youtube.com\/watch?v=7_ev78xM3dk"}},{"local_stop_id":19,"id":19,"geometry":"POINT(3325545.9997124 -216032.0533224)","attributes":{"title":"One to One: Shoe drop","address":"Rwanda","description":"Shoe Drop\nMarch 2011\n\nShoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.","stop_instance_id":"stop-13","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":"http:\/\/www.youtube.com\/watch?v=AV0SaOthZSE"}},{"local_stop_id":18,"id":18,"geometry":"POINT(-8046753.3245622 2151543.9444501)","attributes":{"title":"One to One: Shoe drops","address":"Haiti","description":"Shoe drop with the help of IMF\n800,000\n\nShoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-14","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":"http:\/\/www.youtube.com\/watch?v=jiBG86qroug"}},{"local_stop_id":17,"id":17,"geometry":"POINT(-10044442.144372 1779661.0115165)","attributes":{"title":"One to One: shoe drop","address":"Guatemala","description":"Shoe drop\nAugust 2010\n\n\nShoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-15","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":"http:\/\/www.youtube.com\/watch?v=t-PbD9OLvHY&feature=results_main&playnext=1&list=PL60707BCBDE924F96"}},{"local_stop_id":16,"id":16,"geometry":"POINT(-9895916.4515114 1550614.4482931)","attributes":{"title":"One to One: Shoe drop","address":"El Salvador","description":"Shoe drops\nAugust 2010\n\nAmeriCares is a non-profit global health and disaster relief organization working to provide immediate response to emergency medical needs and long-term humanitarian assistance programs for all people around the world. Their extensive network of partner organizations is comprised of institutions seeking to directly benefit children's health and well-being.\n distributes TOMS in conjunction with their established clinical and educational pediatric programs to a population of which over half live below the poverty line.","stop_instance_id":"stop-16","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":15,"id":15,"geometry":"POINT(-8350648.5212576 -1027437.3556249)","attributes":{"title":"One to One: Shoe drop","address":"Peru","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-17","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":14,"id":14,"geometry":"POINT(899646.94375608 1991691.5581079)","attributes":{"title":"One to One: shoe drop","address":"Niger","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-18","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":13,"id":13,"geometry":"POINT(-444851.16418347 1987359.3993266)","attributes":{"title":"One to One: shoe drop","address":"Mali","description":"","stop_instance_id":"stop-19","supplychain_instance_id":"supplychain-1"}},{"local_stop_id":12,"id":12,"geometry":"POINT(3594536.9700744 152893.3710229)","attributes":{"title":"One to One: shoe drop","address":"Uganda","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-20","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":11,"id":11,"geometry":"POINT(3330555.1541584 -375703.95730778)","attributes":{"title":"One to One: shoe drop","address":"Burundi","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-21","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":10,"id":10,"geometry":"POINT(3100173.4567413 -1475033.8314531)","attributes":{"title":"One to One: Shoe drop","address":"Zambia","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-22","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":9,"id":9,"geometry":"POINT(3502764.1800018 -3063940.4257334)","attributes":{"title":"One to One: Shoe Drop","address":"Swaziland","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-23","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":8,"id":8,"geometry":"POINT(3142950.8653794 -3453515.3049818)","attributes":{"title":"One to One: Shoe drop","address":"Lesotho","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-24","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":7,"id":7,"geometry":"POINT(4507289.7801187 1022366.8860381)","attributes":{"title":"One to One: Shoe drop","address":"Ethiopia","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-25","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":6,"id":6,"geometry":"POINT(2553391.4876322 -3575670.6750294)","attributes":{"title":"One to One: Shoe drop","address":"South Africa","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-26","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":5,"id":5,"geometry":"POINT(-6004647.0813238 -2936824.4185198)","attributes":{"title":"One to One: Shoe drop","address":"Ruta Provincial 25, Misiones Province, Argentina","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-27","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":4,"id":4,"geometry":"POINT(5013628.2650333 4875988.6437361)","attributes":{"title":"One to One: Shoe drop","address":"Armenia","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-28","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":3,"id":3,"geometry":"POINT(11560156.864895 5919658.7289371)","attributes":{"title":"One to One: Shoe drop","address":"Mongolia","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-29","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":2,"id":2,"geometry":"POINT(11598978.535428 4281602.6590309)","attributes":{"title":"One to One: shoe drop","address":"China","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-30","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}},{"local_stop_id":1,"id":1,"geometry":"POINT(11687540.537429 1410155.0120853)","attributes":{"title":"One to One: Shoe drop","address":"Cambodia","description":"Shoe Drops are a unique program here at TOMS, where we invite staff, volunteers and other members of the TOMS family to go for about one week to a country where our Giving Partners are distributing shoes. Shoe Drop participants have the powerful experience of hand-placing shoes on children\ufffds feet, engaging with a different and new culture and learning about the important work our Giving Partners do in their communities.\n\nAnd it\ufffds way more than a trip. It can be a life-changing experience. TOMS began when our founder Blake Mycoskie was on a trip to Argentina and saw children there needed shoes. He was inspired into action \ufffd a decision that has affected children\ufffds lives across the globe. Our hope at TOMS is that those who come with us on Shoe Drops will return home with a renewed sense of commitment to influencing their world for good.","stop_instance_id":"stop-32","supplychain_instance_id":"supplychain-1","qty":"0","unit":"kg","weight":"0","co2e":"0","youtube:link":""}}],"hops":[{"from_stop_id":27,"to_stop_id":25,"geometry":"MULTILINESTRING((11598978.535428 4281602.6590309,-13190379.066036 4031414.5619801))","attributes":{"title":"Manufactured to Head Quarters ","distance":"11070.119030"}},{"from_stop_id":26,"to_stop_id":25,"geometry":"MULTILINESTRING((-7081775.5320169 -4638374.2744388,-13190379.066036 4031414.5619801))","attributes":{"distance":"9841.780059","title":"Manufactured  to Head Quarters "}},{"from_stop_id":28,"to_stop_id":25,"geometry":"MULTILINESTRING((4507289.7801187 1022366.8860381,-13190379.066036 4031414.5619801))","attributes":{"distance":"14727.739297","title":"Manufactured to Head Quarters "}},{"from_stop_id":29,"to_stop_id":25,"geometry":"MULTILINESTRING((11598978.535428 4281602.6590309,-13190379.066036 4031414.5619801))","attributes":{"distance":"11070.119030","title":"Recycled materials  to Head Quarters "}},{"from_stop_id":25,"to_stop_id":22,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,-10026717.10921 3497261.3573862))","attributes":{"description":"October 2008\n7,000 pairs of shoes","youtube:link":"","transportcat":"undefined","title":"Head Quarters  to One for One: Shoe drops","qty":"0","distance":"2709","co2e":"0"}},{"from_stop_id":25,"to_stop_id":21,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,-7081775.5320169 -4638374.2744388))","attributes":{"title":"Head Quarters  to One for One: Shoe drops","distance":"9841.780059"}},{"from_stop_id":25,"to_stop_id":20,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,-9600404.9483055 1712260.1402682))","attributes":{"title":"Head Quarters  to One for One: Shoe drops","distance":"3847.188869"}},{"from_stop_id":25,"to_stop_id":19,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,3325545.9997124 -216032.0533224))","attributes":{"title":"Head Quarters  to One to One: Shoe drop","distance":"15167.478889"}},{"from_stop_id":25,"to_stop_id":18,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,-8046753.3245622 2151543.9444501))","attributes":{"title":"Head Quarters  to One to One: Shoe drops","distance":"4846.525753"}},{"from_stop_id":25,"to_stop_id":17,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,-10044442.144372 1779661.0115165))","attributes":{"title":"Head Quarters  to One to One: shoe drop","distance":"3477.372013"}},{"from_stop_id":25,"to_stop_id":16,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,-9895916.4515114 1550614.4482931))","attributes":{"title":"Head Quarters  to One to One: Shoe drop","distance":"3731.456926"}},{"from_stop_id":25,"to_stop_id":15,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,-8350648.5212576 -1027437.3556249))","attributes":{"distance":"6639.349354","title":"Head Quarters  to One to One: Shoe drop"}},{"from_stop_id":25,"to_stop_id":14,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,899646.94375608 1991691.5581079))","attributes":{"title":"Head Quarters  to One to One: shoe drop","distance":"11958.666140"}},{"from_stop_id":25,"to_stop_id":13,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,-444851.16418347 1987359.3993266))","attributes":{"title":"Head Quarters  to One to One: shoe drop","distance":"11023.066515"}},{"from_stop_id":25,"to_stop_id":12,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,3594536.9700744 152893.3710229))","attributes":{"distance":"15035.373429","title":"Head Quarters  to One to One: shoe drop"}},{"from_stop_id":25,"to_stop_id":11,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,3330555.1541584 -375703.95730778))","attributes":{"title":"Head Quarters  to One to One: shoe drop","distance":"15293.505565"}},{"from_stop_id":25,"to_stop_id":10,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,3100173.4567413 -1475033.8314531))","attributes":{"title":"Head Quarters  to One to One: Shoe drop","distance":"15904.416416"}},{"from_stop_id":25,"to_stop_id":9,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,3502764.1800018 -3063940.4257334))","attributes":{"title":"Head Quarters  to One to One: Shoe Drop","distance":"17024.197849"}},{"from_stop_id":25,"to_stop_id":8,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,3142950.8653794 -3453515.3049818))","attributes":{"title":"Head Quarters  to One to One: Shoe drop","distance":"16847.042202"}},{"from_stop_id":25,"to_stop_id":7,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,4507289.7801187 1022366.8860381))","attributes":{"title":"Head Quarters  to One to One: Shoe drop","distance":"14727.739297"}},{"from_stop_id":25,"to_stop_id":6,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,2553391.4876322 -3575670.6750294))","attributes":{"title":"Head Quarters  to One to One: Shoe drop","distance":"16390.298564"}},{"from_stop_id":25,"to_stop_id":5,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,-6004647.0813238 -2936824.4185198))","attributes":{"title":"Head Quarters  to One to One: Shoe drop","distance":"16429.663995"}},{"from_stop_id":25,"to_stop_id":4,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,5013628.2650333 4875988.6437361))","attributes":{"title":"Head Quarters  to One to One: Shoe drop","distance":"11605.024279"}},{"from_stop_id":25,"to_stop_id":3,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,11560156.864895 5919658.7289371))","attributes":{"title":"Head Quarters  to One to One: Shoe drop","distance":"10075.454994"}},{"from_stop_id":25,"to_stop_id":2,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,11598978.535428 4281602.6590309))","attributes":{"title":"Head Quarters  to One to One: shoe drop","distance":"11070.119030"}},{"from_stop_id":25,"to_stop_id":1,"geometry":"MULTILINESTRING((-13190379.066036 4031414.5619801,11687540.537429 1410155.0120853))","attributes":{"distance":"13090.786128","title":"Head Quarters  to One to One: Shoe drop"}}]},"editable":false};




var data3 = { "supplychain":{ "category":null,"created":1298652652, "flags":32,"id":1,"modified":1306106036, "other_perms":1,"usergroup_id":null, "usergroup_perms":0,"user_id":234, "owner":{ "id":444,"name":"somefakeuserguy", "avatar":"http:\/\/www.gravatar.com\/avatar\/..." }, "taxonomy":null, "attributes":{}, "stops":[ { "local_stop_id":5,"id":5,"geometry": "POINT(-9349165.430522 4044184.943345)", "attributes":{ "name":"Facility #5" } },{ "local_stop_id":4,"id":4,"geometry": "POINT(-10634992.255936 3485526.892738)", "attributes":{ "name":"Facility #4" } },{ "local_stop_id":3,"id":3,"geometry": "POINT(-12489606.041822 3954200.282625)", "attributes":{ "name":"Facility #3" } },{ "local_stop_id":2,"id":2,"geometry": "POINT(-7929147.678904 5239202.289146)", "attributes":{ "name":"Facility #2" } },{ "local_stop_id":1,"id":1,"geometry": "POINT(-10804007.180522 3869332.593955)", "attributes":{ "name":"Facility #1" } } ], "hops":[ { "from_stop_id":3,"to_stop_id":1, "geometry": "MULTILINESTRING((-12489606.041822 3954200.282625, -10804007.180522 3869332.593955))", "attributes":{} },{ "from_stop_id":3,"to_stop_id":2, "geometry": "MULTILINESTRING((-12489606.041822 3954200.282625, -7929147.678904 5239202.289146))", "attributes":{} },{ "from_stop_id":3,"to_stop_id":4, "geometry": "MULTILINESTRING((-12489606.041822 3954200.282625, -10634992.255936 3485526.892738))", "attributes":{} },{ "from_stop_id":3,"to_stop_id":5, "geometry": "MULTILINESTRING((-12489606.041822 3954200.282625, -9349165.430522 4044184.943345))", "attributes":{} } ] },"editable":false };


var data = 
    { "supplychain":{ "attributes":{"title": "API Test"}, 
           "stops":[
               {"local_stop_id":1,"id":1,"geometry":"POINT(-7910337.7674084 5214822.776215)","attributes":{"title":"Facility #1", "address":"Boston, MA, USA"}},
               {"local_stop_id":2,"id":2,"geometry":"POINT(-8238307.2400059 4970299.6279391)","attributes":{"title":"Facility #2", "address":"New York, NY, USA"}}
           ],
           "hops":[
               {"from_stop_id":2,"to_stop_id":1,"geometry":"MULTILINESTRING((-8238307.2400059 4970299.6279391,-7910337.7674084 5214822.776215))","attributes":{"title":"Facility #2 to Facility #1"}}
           ] }
    };

   function initialize() {
        var myOptions = {
          center: new google.maps.LatLng(40, -20),
          zoom: 3,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

       
   map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
   
   var lineOptions = {
       strokeColor: "black",
       strokeOpacity: 1.0,
       strokeWeight: 3,
       map: map  
  }
  

  supplylines = new google.maps.Polyline(lineOptions);

  google.maps.event.addListener(map, 'dblclick', addStop);
}

  function addHopFromImport(supplyHop){
    var hopStrip = supplyHop.geometry.split("(");
    var hopStrip1 = hopStrip[2].split(")");
    var hopStrip2 = hopStrip1[0].split(", ");
    if (hopStrip2.length==1) hopStrip2 = hopStrip1[0].split(",");
    var fromStrip = hopStrip2[0].split(" ");
    var toStrip = hopStrip2[1].split(" ");
    var fromLatLng = MercatorToLatLon(fromStrip[0], fromStrip[1]);
    var toLatLng = MercatorToLatLon(toStrip[0], toStrip[1]);
    var fromLL = new google.maps.LatLng(fromLatLng.Lat, fromLatLng.Lon);
    var toLL = new google.maps.LatLng(toLatLng.Lat, toLatLng.Lon);
    var myLineOptions = {
        strokeColor: "black",
        strokeOpacity: 1.0,
        strokeWeight: 2,
        map: map,
        path: [fromLL, toLL]
}   
    var myNewHop = new google.maps.Polyline(myLineOptions);
}    



  function addStopFromImport(supplyStop, stopID){
      var markerName = supplyStop.attributes.title;
      var markerAddress= supplyStop.attributes.address;
      var markerDescription = supplyStop.attributes.description;
      var markerSplit = supplyStop.geometry.split("(");
      markerSplit1 = markerSplit[1].split(")");
      markerSplit2 = markerSplit1[0].split(" ");
      var markerLat = markerSplit2[0]; 
      var markerLng = markerSplit2[1];
      var myLatLng = MercatorToLatLon(markerLat, markerLng);
      var myLL = new google.maps.LatLng(myLatLng.Lat, myLatLng.Lon);
      var myNewMarker = new google.maps.Marker({
          position: myLL,
          title: markerName,
          map: map,
          id: stopID,
          description: markerDescription,
          animation: google.maps.Animation.DROP
      });
      if (!myNewMarker.title) myNewMarker.title = supplyStop.attributes.name;
      if (!myNewMarker.title) myNewMarker.title = "Untitled Location";          
      if (!myNewMarker.description) myNewMarker.description = "";
      var myInfoWindow = new google.maps.InfoWindow({
            content: '<b>' + myNewMarker.title + '</b><br/><i>Lat/Long Coords:' + myNewMarker.position + '</i><br/>' + myNewMarker.description
 + '<br/><div id="addingHop"><button onclick="addHopFromHere(' + myNewMarker + ')">Add Hop?</button></div>'});
      google.maps.event.addDomListener(myNewMarker, 'click', function() {
         myInfoWindow.open(map, myNewMarker);
        });

}


  function addStop(event) {
      var markerName =  prompt("What is the name of this location?", "Type location name here");
      if (markerName!=null){
          if (markerName=="Type location name here") markerName="Untitled Location";
          var newMarker = new google.maps.Marker({
          position: event.latLng,
          title: markerName,
          map:map
      });
          var descriptionInfo = prompt("Would you like to add a description?", "Type description here");
          if (descriptionInfo==null || descriptionInfo=="Type description here") descriptionInfo="";
          var infowindow = new google.maps.InfoWindow({
              content: '<b>' + markerName + '</b><br/><i>Lat/Long Coords:' + newMarker.getPosition() + '</i><br/>' + descriptionInfo
          + '<br/><div id="addingHop"><button onclick="addHopFromHere(' + newMarker + ')">Add Hop?</button></div>'
         });
          
      var path = supplylines.getPath();
      path.push(event.latLng);
     
      google.maps.event.addListener(newMarker, 'click', function() {
          infowindow.open(map,newMarker);
      });
      }
  // new google.maps.LatLng = google.maps.Projection.fromPointToLatLng("POINT(-7910337.7674084 5214822.776215)");

    
  }

function MercatorToLatLon(mercX, mercY) {
 
    var rMajor = 6378137; //Equatorial Radius, WGS84
    var shift  = Math.PI * rMajor;
    var lon    = mercX / shift * 180.0;
    var lat    = mercY / shift * 180.0;
    lat = 180 / Math.PI * (2 * Math.atan(Math.exp(lat * Math.PI / 180.0)) - Math.PI / 2.0);
 
    return { 'Lon': lon, 'Lat': lat };
}






function importSourceMap(sourceData) {
    var r=confirm("Import from SourceMap?");
    if (r==true) {
        for (var sstops in sourceData.supplychain.stops) {
        addStopFromImport(sourceData.supplychain.stops[sstops], sstops);
}
        for (var hhops in sourceData.supplychain.hops) {
        addHopFromImport(sourceData.supplychain.hops[hhops]);
}
}
else {
}
}

/* function addHopFromHere(startMarker) {    
    google.maps.event.addListenerOnce(map, 'click', alert("hey"));
}       
       


function placeHop(event, startMarker) { 
       var tempReply = confirm("Would you like to add a hop to here?");
        if (tempReply==true) {
           var newHop = google.maps.Polyline(lineOptions);
           var startStop = newHop.getPath();
           startStop.push(startMarker.getPosition());
           startStop.push(event.latLng);
        }
}
*/
    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%"></div>
  </body>
</html>

 <?php
    $data = 
    '{ "supplychain":{ "attributes":{"title": "API Test"}, 
           "stops":[
               {"local_stop_id":1,"id":1,"geometry":"POINT(-7910337.7674084 5214822.776215)","attributes":{"title":"Facility #1", "address":"Boston, MA, USA"}},
               {"local_stop_id":2,"id":2,"geometry":"POINT(-8238307.2400059 4970299.6279391)","attributes":{"title":"Facility #2", "address":"New York, NY, USA"}}
           ],
           "hops":[
               {"from_stop_id":2,"to_stop_id":1,"geometry":"MULTILINESTRING((-8238307.2400059 4970299.6279391,-7910337.7674084 5214822.776215))","attributes":{"title":"Facility #2 to Facility #1"}}
           ] }
    }';


$data2 = '{ "supplychain":{ "category":null,"created":1298652652, "flags":32,"id":1,"modified":1306106036, "other_perms":1,"usergroup_id":null, "usergroup_perms":0,"user_id":234, "owner":{ "id":444,"name":"somefakeuserguy", "avatar":"http:\/\/www.gravatar.com\/avatar\/..." }, "taxonomy":null, "attributes":{}, "stops":[ { "local_stop_id":5,"id":5,"geometry": "POINT(-9349165.430522 4044184.943345)", "attributes":{ "name":"Facility #5" } },{ "local_stop_id":4,"id":4,"geometry": "POINT(-10634992.255936 3485526.892738)", "attributes":{ "name":"Facility #4" } },{ "local_stop_id":3,"id":3,"geometry": "POINT(-12489606.041822 3954200.282625)", "attributes":{ "name":"Facility #3" } },{ "local_stop_id":2,"id":2,"geometry": "POINT(-7929147.678904 5239202.289146)", "attributes":{ "name":"Facility #2" } },{ "local_stop_id":1,"id":1,"geometry": "POINT(-10804007.180522 3869332.593955)", "attributes":{ "name":"Facility #1" } } ], "hops":[ { "from_stop_id":3,"to_stop_id":1, "geometry": "MULTILINESTRING((-12489606.041822 3954200.282625, -10804007.180522 3869332.593955))", "attributes":{} },{ "from_stop_id":3,"to_stop_id":2, "geometry": "MULTILINESTRING((-12489606.041822 3954200.282625, -7929147.678904 5239202.289146))", "attributes":{} },{ "from_stop_id":3,"to_stop_id":4, "geometry": "MULTILINESTRING((-12489606.041822 3954200.282625, -10634992.255936 3485526.892738))", "attributes":{} },{ "from_stop_id":3,"to_stop_id":5, "geometry": "MULTILINESTRING((-12489606.041822 3954200.282625, -9349165.430522 4044184.943345))", "attributes":{} } ] },"editable":false }';

?>


"gomaps.html" 43L, 1926C               

