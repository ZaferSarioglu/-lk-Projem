<?php
if (isset($_POST['iletisimGonder'])) {
    $adSoyad = $_POST['adinizsoyadiniz'];
    $eMail = $_POST['epostaadresiniz'];
    $tel = $_POST['ceptelefonunumaraniz'];
    $konu = $_POST['konu'];
    $mesaj = $_POST['mesajiniz'];
    $tarih = date("d/m/Y h:i:s");
    $toplam = $_POST['toplam'];
    $sonuc = $_POST['sonuc'];
    if($sonuc == $toplam) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo 'Mesajınız gönderilmiştir.';
            $MailHost = 'mail.broexport.com';
            $SiteMaili = 'info@broexport.com';
            $MailSifre = "xhbwxUib";
            $MailiGonder = 'zafersar24@gmail.com';
            $MailKonu = 'Web Sitenizden Mesajınız Var [-İletişim Kutusu-]'. $tarih;
            $MesajMetni = '<strong>[-İletişim Kutusu-]</strong><br>';
            $MailPort = 587;
            $MailGuvenlik = 'tls';
            foreach ($_POST as $input => $value) {
                $MesajMetni .= '<br/><b>' . $input . ': </b>' . $value;
            }
            include("mail_ayar.php");
        }
    } else {
        $_GET['sonuc'] = 'no'; /*Toplam ve sonuç eşit değilse sonuç = no get değeri gönder */
    }
}

?>