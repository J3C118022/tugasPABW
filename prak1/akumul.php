<form method="GET"> 
    <input type="number" name="bil1"/>
    <input type="submit" value="jumlahkan"/>
    <?php
        if (isset($_GET['bil1'])){
            if(isset($_GET['bils']))
                $data = $_GET['bils'];
            else
                $data = array();
            array_push($data, $_GET['bil1']);
            foreach($data as $x)
                echo '<input type="hidden" name="bils[]" value="'.$x.'"/>';
            echo "<p>";
            $sum = 0;
            foreach($data as $x){
                echo "$x <br>";
                $sum += $x;
            }
            echo "------ + <br> $sum";
        //print_r($data);
        }
        

    ?>
</form>