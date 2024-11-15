<style>
*{
   font-family:'courier new'
}
</style>

    <?php
    function starts($shape,$line){
      switch($shape){
    case "正三角形":
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
    break;
    case "菱形";
    for($i=0;$i<$line;$i++){
      if($i>floor($line/2)){
          $k1=$i-(floor($line/2));
          $j1=2*($i-(2*($i-(floor($line/2)))))+1;
      }else{
          $k1=(floor($line/2))-$i;
          $j1=(2*$i+1);
      }
  
      for($k=0;$k<$k1;$k++){
          echo "&nbsp;";
      }
  
      for($j=0;$j<$j1;$j++){
          echo "*";
      }
      echo "<br>";
  
  }
    
  break;
    }
    }
    $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
    $pdo= new PDO($dsn,'root','');
    /**
     * 建立資料庫的連線變數
     * @parem
     * @return object
      */
    function pdo($db){
      $dsn="mysql:host=localhost;charset=utf8;dbname=$db";
      $pdo=new PDO($dsn,'root','');
      return $pdo;
      }
     /***
     * 回傳指定資料表的所有資料
     * @parem string $table 資料表名稱
     * @return array
     * 
     */
    function all($table){
      global $pdo;
      
      $rows=$pdo->query("select * from $table")->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }
   /***
    * 

    回傳指定資料表的特定ID的單筆資料
    @parem string $table 資料表名稱
    @parem interger $id || array $id 資料表ID
    @return array
    */
    function find($table,$id){
     global $pdo;
     if(is_array($id)){
      $tmp=[];
      foreach($id as $key => $value){
        $tmp[]=sprintf("'%s'='%s'",$key,$value);
      }
      $sql ="select * from $table where ".join("&&",$tmp);
     }else{
     $sql="select * from $table where id='$id'";
     }
     $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
     RETURN $row;
    }
    /**
     * 
     * 
     * 列出陣列內容
     */
    function dd($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    
    ?>