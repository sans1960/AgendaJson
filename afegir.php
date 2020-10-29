<?php
                if(isset($_POST['guardar'])){
                     $data = file_get_contents('contactes.json');
		             $data = json_decode($data,true);
                    $input = array(
                        'id' => $_POST['id'],
                        'nom' => $_POST['nom'],
                        'cognom' => $_POST['cognom'],
                        'poblacio' => $_POST['poblacio'],
                        'email' => $_POST['email']
                    );
                    $data[] = $input;
                    $data = json_encode($data, JSON_PRETTY_PRINT);
                     file_put_contents('contactes.json', $data);

                     header('location: index.php');
                    // print_r($data);
                }
                
                ?>