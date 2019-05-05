<?php
  $debug = false;
  function makeQuery($myConnection, $myQuery) {
      $result = $myConnection->query($myQuery);
      if($result === TRUE) {
          logVariable("Successful query");
      }
      else if($result->error) {
          logVariableWithContext("Error in query: ", $myConnection->error);
      }
      else {
          logVariable("query didn't return TRUE or an error");
      }
      return $result;
  }
  function logVariable($var) {
      if($GLOBALS['debug']) {
      ?><script>console.log("<?php echo $var?>");</script><?php
      }
  }
  function logVariableWithContext($context, $var) {
      if($GLOBALS['debug']) {
      ?><script>console.log("<?php echo $context . $var?>");</script><?php
      }
  }
  $tables = array("Member");
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbName = "tyvonnis";
?>