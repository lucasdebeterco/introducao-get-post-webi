<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $matriz  = [[]];
        $table = '';
        $table .= '<table border="1px">'; 
        $tamanho = 30;
       
        for ($linha=0; $linha<$tamanho; $linha++) {
            for ($coluna=0; $coluna<5; $coluna++) {
                $matriz[$linha][$coluna] = rand(0,100);
            }
        }

        if (isset($_GET["pagina"])) {
            for($i = 0;$i <= $tamanho/10; $i++) {
                if ($_GET["pagina"] == $i) {
    
                    for ($linha = ($i*10)-10 ; $linha <= ($i*10)-1 ; $linha++) {
                        $table .= '<tr>';
                        $table .= '<td>' . $linha . '</td>';
                        for ($coluna=0; $coluna<5; $coluna++) {
                            $table .= '<td>' . $matriz[$linha][$coluna] . '';
                        }
                        $table .= '</tr>';
                    }
                }
            }
        }

        $table .= '</table>';
        echo $table;
    ?>
    <div class="paginacao">
        <?php 
            for($i = 1;$i <= $tamanho/10; $i++) {
                echo '<a href="?pagina=' . $i . '">' . $i . '</a>';
                echo ' ';
            }
        ?>
    </div>
</body>
</html>