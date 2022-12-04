<!DOCTYPE html>
<html>
<head>
    <title>Cara Menghitung Akar Kuadrat di PHP</title>
</head>
<body>
    <h3>Script PHP Menghitung Akar Kuadrat dengan Fungsi sqrt()</h3>
    <form method="POST">
        <table>
            <tr>
                <td>Nilai Bilangan</td>
                <td>:</td>
                <td><input name="bilangan" type="float"/></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input name="submit" type="submit" value="SUBMIT"/></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                <?php
                    if(isset($_POST['submit'])){
                        $bilangan	=$_POST["bilangan"];
                        $hasil	=sqrt($bilangan);
                        echo '<br />';
                        echo 'Akar kuadrat '.$bilangan.' adalah '.$hasil;
                    }
                ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>