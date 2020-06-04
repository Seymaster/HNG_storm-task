
<?php require 'header.php'?>
<div class='table-container'>
    <table>
        <thead>
            <tr>
                <th>HNGID</th>
                <th>Name</th>
                <!-- <th>Email</th> -->
                <th>Message</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- use bg-green-500 class for passed -->

            <?php foreach ($messages as $output): ?>


                <?php if ($output['pass'] === true): ?>


                    <tr>
                        <td><?=$output['id']?></td>
                        <td><?=$output['name']?></td>
                        <td><?=$output['message']?></td>
                        <td>
                            <div class='pass'>Pass</div>
                        </td>
                    </tr>
                <?php elseif ($output['pass'] === false): ?>

                    <tr>
                        <td><?=$output['id']?></td>
                        <td><?=$output['filename']?></td>
                        <td><?=$output['message']?></td>
                        <td>
                            <div class='fail'>Fail</div>
                        </td>
                    </tr>

                <?php endif;?>
            <?php endforeach;?>
            <!-- <tr>
                            <td>12334455</td>
                            <td>Adedeji Abiola</td>
                            <td>Dejiabiola@yahoo.com</td>
                            <td>Hello World</td>
                            <td>
                                <div class='pass'>Pass</div>
                            </td>
                        </tr>
                        <tr>
                            <td>12334455</td>
                            <td>Adedeji Abiola</td>
                            <td>Dejiabiola@yahoo.com</td>
                            <td>Hello World</td>
                            <td>
                                <div class='pass'>Pass</div>
                            </td>
                        </tr>
                        <tr>
                            <td>12334455</td>
                            <td>Adedeji Abiola</td>
                            <td>Dejiabiola@yahoo.com</td>
                            <td>Hello World</td>
                            <td>
                                <div class='pass'>Pass</div>
                            </td>
                        </tr>
                        <tr>
                            <td>12334455</td>
                            <td>Adedeji Abiola</td>
                            <td>Dejiabiola@yahoo.com</td>
                            <td>Hello World</td>
                            <td>
                                <div class='fail'>Fail</div>
                            </td>
                        </tr> -->
        </tbody>
    </table>
</div>
<?php require 'footer.php'?>

