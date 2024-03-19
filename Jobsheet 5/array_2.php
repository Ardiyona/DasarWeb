<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .judulTabel {
                background-color: lightgrey;
            }
        </style>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan',
            ];
        ?>
        <table border ='1' cellspacing="0" cellpadding="4">
            <tr class='judulTabel'>
                <td align="center" colspan="3">
                    Informasi Dosen Pengajar
                </td>
            </tr>
            <tr align="center">
                <td>Nama</td>
                <td>Domisili</td>
                <td>Jenis Kelamin</td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo "{$Dosen ['nama']}";
                    ?>
                </td>
                <td>
                    <?php
                        echo "{$Dosen ['domisili']}";
                    ?>
                </td>
                <td>
                    <?php
                        echo "{$Dosen ['jenis_kelamin']}";
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>