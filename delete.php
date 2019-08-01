                  <?php
                        include("config.php");
                        if(isset($_POST['dd']))
                        {
                          $de = $_POST['dd'];  
                          $del =$mysqli->query("DELETE FROM usercon WHERE id='$de'");
                       }


                       if(isset($_POST['dds']))
                        {
                          $de = $_POST['dds'];  
                          $del =$mysqli->query("DELETE FROM containt WHERE id='$de'");
                       }
                       
                         ?>