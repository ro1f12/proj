<?php
                                //code for fetching the suppliers' information
                                require_once '../connection.php';
                                $sql1 = "SELECT * FROM `department`";


                                $query = $db->query($sql1);
                                echo "<select class='form-control' id='dept_id' name='dept_id'>";
                                while($row = $query->fetch_assoc()){
                                    echo"<option value='".$row['dept_id']."'>".$row['dept_name']."</option>";
                                }
                                echo"</select>";
                                $db->close();
                ?>
                                 