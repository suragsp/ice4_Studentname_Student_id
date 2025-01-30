<?php include 'header.php'; ?>
<main>
    <h1>About Us</h1>
    <img src="my.png" alt="profile" width="200" height="200"> 
    <p> This is my About us page</p>

    <?php
        $team = ["Pushti - Developer","Manoj - Designer","Maria - Project Manager","Khushi - Designer","Suzal - Admin"];
    ?>

    <ul>
        <?php foreach($team as $member) : ?>
            <li><?php echo $member; ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include 'footer.php'; ?>