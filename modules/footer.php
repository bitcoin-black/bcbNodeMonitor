<footer id="footer">

  <hr class="light">

  <small>

    <?php
      // switch Nano / Banano rep accounts & explorer
      $repAccount = NODEMON_REP_ACCOUNT;
      $donAccount = NODEMON_DON_ACCOUNT;
      $repExplorer = 'ninja';

      if ($currency == "banano")
      {
        $repAccount = NODEMON_BAN_REP_ACCOUNT;
        $donAccount = NODEMON_BAN_DON_ACCOUNT;
        $repExplorer = 'banano';
      }
    ?>

    <ul>
      <li class="version">
         <?php
         global $versionCache;
         $versionCache = new FileCache(["ttl" => 10*60]); // cache for 10 minutes

         // set an API name so multiple monitors don't mix
         $apiName = "footer-$nanoNodeAccount";

         // get cached response
         $versionData = $versionCache->fetch($apiName, function () {
             $versionData = new stdClass();
             $versionData->latestVersion  = getLatestReleaseVersion();
             return $versionData;
         });
         echo getVersionInformation($versionData->latestVersion);
         ?>
      </li>
    </ul>
  </small>
</footer>

</div><!-- /container -->

<script src="static/js/axios.min.js?v=<?php echo PROJECT_VERSION; ?>"></script>
<script src="static/js/bootstrap-native-v4.min.js?v=<?php echo PROJECT_VERSION; ?>"></script>
<script src="static/js/handlebars-v4.1.2.js?v=<?php echo PROJECT_VERSION; ?>"></script>
<script src="static/js/main.js?v=<?php echo PROJECT_VERSION; ?>"></script>

<?php
  if (strlen($googleAnalyticsId))
  {
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalyticsId; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?php echo $googleAnalyticsId; ?>');
</script>
<?php
  }
?>



</body>
</html>
