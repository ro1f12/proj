<?php
                                
                                //$emp_id = $_GET['emp_id'];
                                $emp_id =  1;
                                //code for fetching the employee information
                                require '../connection.php';
                                $sql = "SELECT * FROM `employee` WHERE `emp_id`= ".$emp_id;
                                //print_r($sql);

                                $query = $db->query($sql);
                                $row1 = $query->fetch_array();

                                var_dump($row1);
                                
                                $db->close();
                
            