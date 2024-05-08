<html>
    <style>
        .notice { color: yellow; }
        .warning { color: red; }
    </style>
    <body>
        <?php
        //exception handling
          function abc($num){
            if($num>1){
                throw new Exception("value must be 1 or below");
            }
          }
          try{
            abc(4);
          }catch(Exception $e){
            echo "Error!!!!! ".$e->getMessage();
          }
          

        ?>
    </body>
</html>