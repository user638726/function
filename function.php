<style>
*{
   font-family:'courier new'
}
</style>
<h2>正三角形</h2>
    <?php
    function starts($line){
    for ($i=0;$i<$line;$i++){
      for($k=0;$k<$line-1-$i;$k++){
        echo "&nbsp;";
        //0 1 2 3 4 是星星旁邊的空格(由上至下)
      }
      for($j=0;$j<(2*$i+1);$j++){
        echo "*";
        //1 3 5 7 9　星星數
    }
        echo "<br>";
    }    
    }
    ?>