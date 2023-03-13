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
<div class="h_logo">
<div class="topnav" id="myTopnav">
            <a class="active" href="index.php"><i class="fa-sharp fa-solid fa-building-columns"></i>Universal<span>Bank</span></a>
            <a class="link" href="#pop_up" id="open_pop_up">Допомога
            <a class="login" href="#pop_up2" id="open_pop_up2">На головну сторінку</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
</div>
<div class="alert" id="alert1" hidden>
        <span class="closebtn">&times;</span>
        <strong>Помилка!<br></strong> Текст у файлі не знайдено.
</div>
<div class="alert_success" id="alert2" hidden>
        <span class="closebtn">&times;</span>
        <strong>Успіх!<br></strong> Текст у файлі знайдено.
</div>
<div class="alert_success2" id="alert3" hidden>
        <span class="closebtn">&times;</span>
        <strong>Успіх!<br></strong> Текст у файлі замінено.
</div>

<div id= "first" class="find" >
    <form method="post" action="">
        <label>Текст який потрібно замінити:</label><br>
        <textarea  type="text" id="find" name="search_string" class="txta"><?php echo htmlspecialchars("");
        if(isset($_POST['start'])){
            $find = $_POST['search_string'];
            $findr = str_replace(PHP_EOL, '\\n', $find);
            echo htmlspecialchars($find);
        }
        if(isset($_POST['finish'])){
            $find = $_POST['search_string'];
            $findr = str_replace(PHP_EOL, '\\n', $find);
            echo htmlspecialchars($findr);
        }?></textarea><br>
        <button type="submit"  name="start"  id="button_find" class="btn_find" >Пошук тексту</button>
</div>
<div id="second" class="replace" hidden>
        <form method="post" action="">
            <button type="submit"  name="deletebtn"  id="button_find" class="btn_find" >Видалити текст</button>
            <button type="submit"  name="returnstart"  id="button_find" class="btn_find" formaction="index.php">Не видаляти текст</button>
        </form>
</div>
<div id= "button_close" class="final" hidden>
        <form method="post" action="index.php">
            <button type="submit"  name="text2"  id="button_text2" class="btn2">Закінчити роботу</button>
</div>
</div>
    <div class="pop_up" id="pop_up">
	<div class="pop_up_container">
		<div class="pop_up_body" id="pop_up_body">
			<h2>Допомога</h2>
			<p>На даному етапі Вам потрібно ввести текст, який Ви бажаєте видалити, якщо текст буде знайдено у Вас з'яветься кнопки для видалення тексту</p>
			<div class="pop_up_close" id="pop_up_close">&#10006</div>
		</div>
	</div>
</div>
<div class="pop_up2" id="pop_up2">
	<div class="pop_up_container2">
		<div class="pop_up_body2" id="pop_up_body2">
            <h2>Повернутися на головну сторінку?</h2>
			<button onclick="document.location='index.php'">Так</button>
			<div class="pop_up_close2" id="pop_up_close2">&#10006</div>
		</div>
	</div>
</div>
<script>
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

    let textareas = document.querySelectorAll('.txta'),
        hiddenDiv = document.createElement('div'),
        content = null;

    for (let j of textareas) {
        j.classList.add('txtstuff');
    }
    hiddenDiv.classList.add('txta');
    hiddenDiv.style.display = 'none';
    hiddenDiv.style.whiteSpace = 'pre-wrap';
    hiddenDiv.style.wordWrap = 'break-word';

    for(let i of textareas) {
        (function(i) {
            i.addEventListener('input', function() {
                i.parentNode.appendChild(hiddenDiv);
                i.style.resize = 'none';
                i.style.overflow = 'hidden';
                content = i.value;
                content = content.replace(/\n/g, '<br>');
                hiddenDiv.innerHTML = content + '<br style="line-height: 3px;">';
                hiddenDiv.style.visibility = 'hidden';
                hiddenDiv.style.display = 'block';
                i.style.height = hiddenDiv.offsetHeight + 'px';
                hiddenDiv.style.visibility = 'visible';
                hiddenDiv.style.display = 'none';
            });
        })(i);
    }

    var close = document.getElementsByClassName("closebtn");
    var i;
    for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }

    var find = document.getElementById("button_find");
    var textarea = document.getElementById("find");
    find.disabled = true;
    textarea.addEventListener("change", function(){
        find.disabled = this.value.length <= 0;
    });

    var replace = document.getElementById("button_replace");
    var textarea = document.getElementById("replace");
    replace.disabled = true;
    textarea.addEventListener("change", function(){
        replace.disabled = this.value.length <= 0;
    });
</script>
</body>
<?php
$file = 'C:/Test/TG_Test.json';
$file_contents = file_get_contents($file);

$newDir = 'C:/Work/' . date("d.m.Y");

if (!file_exists($newDir)) {
    mkdir($newDir);
    mkdir($newDir . '/Old_File');
    mkdir($newDir . '/New_File');
}
copy('C:/Test/TG_Test.json', $newDir . '/Old_File/TG_Test_' .date("d.m.Y").'.json');
copy('C:/Test/TG_Test.json', $newDir . '/New_File/TG_Test.json');
?>
<?php
if(isset($_POST['start'])) {

    $find = $_POST['search_string'];
    $findr = str_replace(PHP_EOL, '\\n', $find);
    $file = file_get_contents($newDir . '/New_File/TG_Test.json');

    if (!strpos($file, $findr)) {
        echo '<script>
    document.getElementById("alert1").hidden = false;
    document.getElementById("first").hidden = false;   
</script>';
    } else {
        echo '<script>
    document.getElementById("alert2").hidden = false;
    document.getElementById("first").hidden = false;
    document.getElementById("second").hidden = false;
    document.getElementById("button_find").hidden = true;
</script>';}
}
if(isset($_POST['deletebtn'])) {
    $find = $_POST['search_string'];
    $findr = str_replace(PHP_EOL, '\\n', $find);

    $file = $newDir . '/New_File/TG_Test.json';
    $file_contents = file_get_contents($file);
    $file_contents = str_replace($findr, "", $file_contents);
    file_put_contents($file, $file_contents);
    echo '<script>
                    document.getElementById("alert3").hidden = false;
                    document.getElementById("button_close").hidden = false;
                    document.getElementById("first").hidden = true; 
                    document.getElementById("second").hidden = true;                             
</script>';
}
?>
</html>
