<?php

if(isset($_POST[submit])){

    $username=$_POST['username'];
    $pass=$_POST['pass'];
    if(($username=='G221210577@sakarya.edu.tr')&& ($pass=="G221210577")){
        echo "Hoş Geldiniz G221210577";
    }

    elseif(condition){
        echo "Lütfen Tekrar Girin :(";
    }

}

if(empty($_POST['username'])or empty($_POST['pass'])){
    echo"<script type='text/javascript'>alert("Lütfen Boş Bırakmayın...") </script>";
    echo"<script>window.location.assign('login.html')</script>"
}

else(isset($_POST['username'], $_POST['pass'] )
&& ($_POST['username']!='G221210577@sakarya.edu.tr')
&& ($_POST['pass']!='G221210577')){

    echo "Hoş Geldiniz G221210577...";
    echo "<b>".$_POST['username'] . ' ' . $_POST['pass']."</b>";
    }else{
    echo"Bilgilerinizi Kontrol Edip Tekrar Giriş Yapın.<br>
    Eksik Bilgi Girdiniz...";
    }
    echo "<p> <a href='login.html'>&lt;GERİ DÖN&gt;</a></p> ";

?>
