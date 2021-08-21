<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
    $address = $_POST['address'];
      $mailFrom = $_POST['e-mail'];
        $order = $_POST['order'];

        $mailTo = "mpmccambridge@outlook.com";
        $headers = "From: ".$mailFrom;
        $txt = "You have recieved an e-mail from ".$name.".\n\n".$order;

    mail($mailTo, $address, $txt, $headers);
    header("Location: Order.php?mailsend");
}
 ?>
