<?php
include ("header.php");
include ("cteniAzapis.php");
?>
<p> Ahoj</p>

<div class="hlavni_obrazek"></div>
<div class="uvodni_text1">
    <div class="uvodni_text2">
        <p>
            <?php
            cteniAzapis("uvod");
            ?>
        </p>
    </div>
</div>

<div class="hl_oznameni" style="background-color: lightblue;">
    <p>
        <?php
        cteniAzapis("oznameni");
        include ("kalendar.html");
        ?>
        
    </p>
       
</div>

<div class="hl_kazani" style="background-color: aqua;">

    <p>
        <?php
        cteniAzapis("kazani");
        ?>
    </p>


</div>


<div class="hl_sluzby" style="background-color: cornflowerblue;">
    <p>
        <?php
        cteniAzapis("sluzby");
        ?>
    </p>

</div>

<?php
include("footer.php");
?>