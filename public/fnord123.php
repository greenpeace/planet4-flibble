<?php echo DateTime::createFromFormat('U', $_SERVER["REQUEST_TIME"]); ?>
<hr>
<pre>
HTTP_X_REAL_IP:       <?php echo $_SERVER["HTTP_X_REAL_IP"]; ?>
HTTP_X_FORWARDED_FOR: <?php echo $_SERVER["HTTP_X_FORWARDED_FOR"]; ?>
HTTP_TRUE_CLIENT_IP:  <?php isset($_SERVER["HTTP_TRUE_CLIENT_IP"]) ? echo $_SERVER["HTTP_TRUE_CLIENT_IP"]; : 'null' ?>
REMOTE_ADDR:          <?php echo $_SERVER["REMOTE_ADDR"]; : 'null' ?>
</pre>
