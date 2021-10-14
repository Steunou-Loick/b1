<pre>
<?php
require("./connect.php");
$sql="Select TitreInfo,
            DateDebutParutionInfo As DateDebut,
            ContenuInfo,
            UrlPhotoInfo As UrlPhoto
        From salac_news;";
$reponse = $bdd->query($sql);
$infos = $reponse->fetchall(PDO::FETCH_ASSOC);
?>
<!--Mise en page ds news-->
</pre>
<div class="container">
    <ul class="list-unstyled">
    <?php   
        foreach ($infos as $info){
    ?>
            <li class="media">
                <img src="./Photos/news/<?php echo $info["UrlPhoto"]?>"
                     class="mr-3 img-thumbnail"
                     style="width:12rem"
                     alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 mn-1">
                        <?php $info ["TitreInfo"] ?>
                            <span class="badge badge-info">News</span>
                        <small class="text-muted">
                            <?php $info["DateDebut"]."<br>";?></h5>
                        </small>
                        <p><?php echo $info["ContenuInfo"] ?></p>
                     </div>
            </li>
    <?php
    }
    ?>
    </ul>
</div>