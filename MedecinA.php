<div class="Boites">
    <div class="SousBoites">
        <h3>Discussion avec les Patients</h3>
        <?php include 'queryMedecin.php' ?>
        <?php $result2 = getUsers(); ?>
        <table class="table">
            <thead>
                <tr>
                    <td>Prénom</td>
                    <td>Nom</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
            <?php $tempP=$_SESSION["Prenom"];?>
                <?php foreach ($result2 as $res) : ?>
                    <tr>
                        <td><?php echo ($res["Prenom"]); ?></td>
                        <td><?php echo ($res["Nom"]); ?></td>
                        <?php 
                        $tempID=$res["ID"];
                        $id = $_SESSION["ID"];
                        ?>
                        <td>
                            <button id="button" type="button" data-toggle="modal" data-target=<?php echo('"#staticBackdrop'.$res["ID"] .'"') ?>>Communiquez avec le Patient</button>
                            <?php include 'chat.php';?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>