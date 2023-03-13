<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HomePage</title>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="test.css" >
	<link rel="stylesheet" href="fontawesome-free/css/all.min.css">
	
</head>
<body>

	<header>
	<div class="topnav" id="myTopnav">
            <a class="active" href="index.php"><i class="fa-sharp fa-solid fa-building-columns"></i>Universal<span>Bank</span></a>
            <a class="link" href="#pop_up" id="open_pop_up">Про сайт</a>
            <a class="link" href="#pop_up2" id="open_pop_up2">Допомога</a>
			<a class="link" href="#pop_up3" id="open_pop_up3">TelegremBot</a>
			<a class="link" href="#pop_up4" id="open_pop_up4">ViberBot</a>
            <a class="login" href="#pop_up5" id="open_pop_up5"><i class="fa-solid fa-user"></i></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </div>



<div class="pop_up" id="pop_up">
	<div class="pop_up_container">
		<div class="pop_up_body" id="pop_up_body">
			<h2>Про сайт</h2>
			<p>Даний сайт був розроблений працівниками ІТ-підрозділу для поліпшення виконання процессу заміни/видалення тексту у чат боті Viber або Telegram </p>
			<div class="pop_up_close" id="pop_up_close">&#10006</div>
		</div>
	</div>
</div>
<div class="pop_up2" id="pop_up2">
	<div class="pop_up_container2">
		<div class="pop_up_body2" id="pop_up_body2">
			<h2>Допомога</h2>
			<p>Щоб виконати заміну тексту або зробити видалення тексту з чат-боту, Вам необхідно вибрати потрібній Вам чат-бот(Viber або Telegram) та вибрати функцію, яку вам необхідно виконати(Заміна або видалення тексту)</p>
			<div class="pop_up_close2" id="pop_up_close2">&#10006</div>
		</div>
	</div>
</div>
<div class="pop_up3" id="pop_up3">
	<div class="pop_up_container3">
		<div class="pop_up_body3" id="pop_up_body3">
			<h2>TelegremBot</h2>
			<p>Виберіть варіант роботи</p>
			<button onclick="document.location='telegramreplace.php'">Заміна тексту</button>
			<button onclick="document.location='telegramdelete.php'">Видалення тексту</button>
			<div class="pop_up_close3" id="pop_up_close3">&#10006</div>
		</div>
	</div>
</div>
<div class="pop_up4" id="pop_up4">
	<div class="pop_up_container4">
		<div class="pop_up_body4" id="pop_up_body4">
			<h2>ViberBot</h2>
			<p>Виберіть варіант роботи</p>
			<button onclick="document.location='viberreplace.php'">Заміна тексту</button>
			<button onclick="document.location='viberdelete.php'">Видалення тексту</button>
			<div class="pop_up_close4" id="pop_up_close4">&#10006</div>
		</div>
	</div>
</div>
<div class="pop_up5" id="pop_up5">
	<div class="pop_up_container5">
		<div class="pop_up_body5" id="pop_up_body5">
			<h2>Вітаю, <?php echo $user_data['user_name'];?>
			<?php echo $user_data['usersec_name'];?><br>
			</h2>
			<h3>Ваша поль на сайті, <?php echo $user_data['role'];?></h3>
			<button onclick="document.location='logout.php'">Вийти з системи</button>
			<div class="pop_up_close5" id="pop_up_close5">&#10006</div>
		</div>
	</div>
</div>

</header>
<script>
	function myFunction(){
        document.getElementById('myTopnav').classList.toggle('responsive')
    }
	
	const openPopUp = document.getElementById("open_pop_up");
	const closePopUp = document.getElementById("pop_up_close");
	const popUp = document.getElementById("pop_up");

	openPopUp.addEventListener('click',function(e){
		e.preventDefault();
		popUp.classList.add('active');

	})
	closePopUp.addEventListener('click', () =>{
		popUp.classList.remove('active');
	})
	
	const openPopUp2 = document.getElementById("open_pop_up2");
	const closePopUp2 = document.getElementById("pop_up_close2");
	const popUp2 = document.getElementById("pop_up2");

	openPopUp2.addEventListener('click',function(e){
		e.preventDefault();
		popUp2.classList.add('active');

	})

	closePopUp2.addEventListener('click', () =>{
		popUp2.classList.remove('active');
	})

	const openPopUp3 = document.getElementById("open_pop_up3");
	const closePopUp3 = document.getElementById("pop_up_close3");
	const popUp3 = document.getElementById("pop_up3");

	openPopUp3.addEventListener('click',function(e){
		e.preventDefault();
		popUp3.classList.add('active');

	})

	closePopUp3.addEventListener('click', () =>{
		popUp3.classList.remove('active');
	})
	const openPopUp4 = document.getElementById("open_pop_up4");
	const closePopUp4 = document.getElementById("pop_up_close4");
	const popUp4 = document.getElementById("pop_up4");

	openPopUp4.addEventListener('click',function(e){
		e.preventDefault();
		popUp4.classList.add('active');

	})

	closePopUp4.addEventListener('click', () =>{
		popUp4.classList.remove('active');
	})
	const openPopUp5 = document.getElementById("open_pop_up5");
	const closePopUp5 = document.getElementById("pop_up_close5");
	const closePopUp6 = document.getElementById("close");
	const popUp5 = document.getElementById("pop_up5");

	openPopUp5.addEventListener('click',function(e){
		e.preventDefault();
		popUp5.classList.add('active');

	})
	closePopUp5.addEventListener('click', () =>{
		popUp5.classList.remove('active');
	})
	closePopUp6.addEventListener('click', () =>{
		popUp5.classList.remove('active');
	})
	

</script>

</body>
</html>