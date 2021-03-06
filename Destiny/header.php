<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $page_title; ?></title>

<style>
body		{font-family: 'Arial', sans-serif; font-size: 75%;}
#msgbox	{background: #CCE5AD; border-bottom: 2px solid #56B96B ;color: #4a4a4a; width: 100%; height: 30px;
		 position: absolute; top: 0; left: 0; cursor: pointer;}

#msgbox,#msg	{line-height:30px; padding-left:10px;}

#commentForm {margin-top: 35px;







}
</style>
<style type="text/css">

.buttons {
    float: left;
    padding-bottom: 20px;
    clear: both;
}
a.button {
    color: #6e6e6e;
    font: bold 12px Helvetica, Arial, sans-serif;
    text-decoration: none;
    padding: 7px 12px;
    position: relative;
    display: inline-block;
    text-shadow: 0 1px 0 #fff;
    -webkit-transition: border-color .218s;
    -moz-transition: border .218s;
    -o-transition: border-color .218s;
    transition: border-color .218s;
    background: #f3f3f3;
    background: -webkit-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    background: -moz-linear-gradient(linear,0% 40%,0% 70%,from(#F5F5F5),to(#F1F1F1));
    border: solid 1px #dcdcdc;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    margin-right: 10px;
}
a.button:hover {
    color: #333;
    border-color: #999;
    -moz-box-shadow: 0 2px 0 rgba(0, 0, 0, 0.2); 
	-webkit-box-shadow:0 2px 5px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
}
a.button:active {
    color: #000;
    border-color: #444;
}
a.left {
    -webkit-border-top-right-radius: 0;
    -moz-border-radius-topright: 0;
    border-top-right-radius: 0;
    -webkit-border-bottom-right-radius: 0;
    -moz-border-radius-bottomright: 0;
    border-bottom-right-radius: 0;
    margin: 0;
}
a.middle {
    border-radius: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-left: solid 1px #f3f3f3;
    margin: 0;
    border-left: solid 1px rgba(255, 255, 255, 0);
}
a.middle:hover,
a.right:hover { border-left: solid 1px #999 }
a.right {
    -webkit-border-top-left-radius: 0;
    -moz-border-radius-topleft: 0;
    border-top-left-radius: 0;
    -webkit-border-bottom-left-radius: 0;
    -moz-border-radius-bottomleft: 0;
    border-bottom-left-radius: 0;
    border-left: solid 1px #f3f3f3;
    border-left: solid 1px rgba(255, 255, 255, 0);
}
a.big {
    font-size: 16px;
    padding: 10px 15px;
}
a.supersize {
    font-size: 20px;
    padding: 15px 20px;
}
a.save {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png) 10px 7px no-repeat #f3f3f3;
    padding-left: 30px;
}

.btn-primary {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png) 10px 7px no-repeat #f3f3f3;
    padding-left: 30px;
}

a.add {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png)  10px -27px no-repeat #f3f3f3;
    padding-left: 30px;
}
a.delete {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png)  10px -61px no-repeat #f3f3f3;
    padding-left: 30px;
}
a.flag {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png)  10px -96px no-repeat #f3f3f3;
    padding-left: 30px;
}
a.up {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png)  13px -133px no-repeat #f3f3f3;
    width: 18px;
}
a.down {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png)  13px -168px no-repeat #f3f3f3;
    width: 18px;
}
a.save-big {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png) 15px 11px no-repeat #f3f3f3;
    font-size: 16px;
    padding: 10px 15px 10px 35px;
}
a.add-big {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png)  15px -23px no-repeat #f3f3f3;
    font-size: 16px;
    padding: 10px 15px 10px 35px;
}
a.delete-big {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png)  15px -57px no-repeat #f3f3f3;
    font-size: 16px;
    padding: 10px 15px 10px 35px;
}
a.flag-big {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png)  15px -92px no-repeat #f3f3f3;
    font-size: 16px;
    padding: 10px 15px 10px 35px;
}
a.up-big {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png)  15px -128px no-repeat #f3f3f3;
    width: 18px;
    font-size: 16px;
    padding: 10px 15px;
}
a.down-big {
    background: url(http://cssdeck.com/uploads/media/items/5/5Fm069k.png)  15px -163px no-repeat #f3f3f3;
    width: 18px;
    font-size: 16px;
    padding: 10px 15px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type = "text/javascript">
$(document).ready(function(){

$("#msgbox").hide();
$("#addComment").click(function(){

	$.post('create_armor.php',{name:$("#name").val(),atype:$("#atype").val(),ctype:$("#ctype").val(),def:$("#def").val(),
light:$("light").val(), intel:$("#intel").val(), disc:$("disc").val(), str:$("str").val()

	},
	function(response){

	$("#msgbox #msg").html("Armor Added Successfully!");
	$("#msgbox").slideUp().slideDown("normal");
	}
	);
	return false;

});
$("#msgbox").click(function(){
	$(this).slideUp("normal");
});

});


</script>
</head>
<body>
<div id="msgbox"><span id="msg"> </span></div>

<div class="container">
<?php
echo "<div class='page-header'>";
	echo "<h1>{$page_title}</h1>";
echo "</div>";
?>