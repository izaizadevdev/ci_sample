<?php /* Smarty version 3.1.27, created on 2016-01-04 16:34:29
         compiled from "D:\projects\ci_sample\application\views\templates\ws\test.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5847568a3ca518afc9_65439908%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e83b14a54107dd6750dcc38f2528015888118a2a' => 
    array (
      0 => 'D:\\projects\\ci_sample\\application\\views\\templates\\ws\\test.tpl',
      1 => 1451900062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5847568a3ca518afc9_65439908',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_568a3ca51ba402_43478457',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_568a3ca51ba402_43478457')) {
function content_568a3ca51ba402_43478457 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5847568a3ca518afc9_65439908';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<style>
		
		.chat_wrapper {
			width: 500px;
			margin-right: auto;
			margin-left: auto;
			background: #CCCCCC;
			border: 1px solid #999999;
			padding: 10px;
			font: 12px 'lucida grande',tahoma,verdana,arial,sans-serif;
		}
		.chat_wrapper .message_box {
			background: #FFFFFF;
			height: 150px;
			overflow: auto;
			padding: 10px;
			border: 1px solid #999999;
		}
		.chat_wrapper .panel input{
			padding: 2px 2px 2px 5px;
		}
		.system_msg{color: #BDBDBD;font-style: italic;}
		.user_name{font-weight:bold;}
		.user_message{color: #88B6E0;}
		
	</style>
</head>
<body>
	<?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		
		$(document).ready(function(){
			//create a new WebSocket object.
			//var wsUri = "ws://localhost:9000/demo/server.php"; 	
			var wsUri = "ws://cisample.localhost:9000/jp/ws/server"; 	
			websocket = new WebSocket(wsUri); 

			websocket.onopen = function(ev) { // connection is open 
				$('#message_box').append("<div class=\"system_msg\">Connected!</div>"); //notify user
			}

			$('#send-btn').click(function(){ //use clicks message send button	
				var mymessage = $('#message').val(); //get message text
				var myname = $('#name').val(); //get user name

				if (myname == "") { //empty name?
					alert("Enter your Name please!");
					return;
				}

				if (mymessage == "") { //emtpy message?
					alert("Enter Some message Please!");
					return;
				}

				//prepare json data
				var msg = {
					message: mymessage,
					name: myname,
					color : '{$user_color}'
				};
				//convert and send data to server
				websocket.send(JSON.stringify(msg));
			});

			//#### Message received from server?
			websocket.onmessage = function(ev) {
				var msg = JSON.parse(ev.data); //PHP sends Json data
				var type = msg.type; //message type
				var umsg = msg.message; //message text
				var uname = msg.name; //user name
				var ucolor = msg.color; //color

				if (type == 'usermsg') {
					$('#message_box').append("<div><span class=\"user_name\" style=\"color:#"+ucolor+"\">"+uname+"</span> : <span class=\"user_message\">"+umsg+"</span></div>");
				}

				if (type == 'system') {
					$('#message_box').append("<div class=\"system_msg\">"+umsg+"</div>");
				}

				$('#message').val(''); //reset text
			};

			websocket.onerror	= function(ev){$('#message_box').append("<div class=\"system_error\">Error Occurred - "+ev.data+"</div>");}; 
			websocket.onclose 	= function(ev){$('#message_box').append("<div class=\"system_msg\">Connection Closed</div>");}; 
		});
		
	<?php echo '</script'; ?>
>
	
	<div class="chat_wrapper">
		<div class="message_box" id="message_box"></div>
		<div class="panel">
			<input type="text" name="name" id="name" placeholder="Your Name" maxlength="10" style="width:20%" >
			<input type="text" name="message" id="message" placeholder="Message" maxlength="80" style="width:60%" >
			<button id="send-btn">Send</button>
		</div>
	</div>
</body>
</html><?php }
}
?>