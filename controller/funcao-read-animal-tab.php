<?php
    function funcaoTab(){
        include("../model/connect.php");
        $query = mysqli_query($conexao,"SELECT * FROM denuncia ORDER BY nome DESC");
            while($exibe = mysqli_fetch_array($query)){
            echo "<tr>
                    <th>$exibe[1]</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>";       
            }
    }   
 ?>