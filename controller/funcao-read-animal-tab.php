<?php
    function funcaoTab(){
        include("../model/connect.php");
        $query = mysqli_query($conexao,"SELECT * FROM denuncia ORDER BY id DESC");
            while($exibe = mysqli_fetch_array($query)){
            echo "<tr>
                    <th>$exibe[6]</th>
                    <td>$exibe[2]</td>
                </tr>";       
            }
    }   
 ?>