<pre>
HTTP_X_REAL_IP:       <?php echo $_SERVER["HTTP_X_REAL_IP"]; ?><br>
HTTP_X_FORWARDED_FOR: <?php echo $_SERVER["HTTP_X_FORWARDED_FOR"]; ?><br>
HTTP_TRUE_CLIENT_IP:  <?php echo isset($_SERVER["HTTP_TRUE_CLIENT_IP"]) ? $_SERVER["HTTP_TRUE_CLIENT_IP"] : 'null' ?><br>
REMOTE_ADDR:          <?php echo $_SERVER["REMOTE_ADDR"] ?><br>
<hr>
<?php echo date("Y-m-d H:i:s"); ?>
</pre>
