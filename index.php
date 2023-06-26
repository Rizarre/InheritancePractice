<html>
  <head>
    <title>Lab Activity#2 Group 6</title>
  </head>
  <link rel="stylesheet" href="styles.css">
  <body>
      <header>
    <div class="navbar">
      <img src="images/grp6_logo.png">
      <a href="#to-arrive">To Arrive</a>
      <a href="#in-stock">In Stock</a>
    </div>
    <h1>APPLIANCES & FURNITURE WAREHOUSE</h1>
  </header>
    <div id="in-stock"><h1>In Stock</h1></div>
    <div class='line'></div>
    <?php
      //PARENT CLASS - Single Inheritance
      class storage{
        public $elecStock;
        public $bedStock;
        public $sofaStock;
        public $tableStock;
        public $total;

        //setters
        function setElecStock($celec){
          return $this->elecStock = $celec;
        }

        function setBedStock($cbed){
          return $this->bedStock = $cbed;
        }

        function setSofaStock($csofa){
          return $this->sofaStock = $csofa;
        }

        function setTableStock($ctable){
          return $this->tableStock = $ctable;
        }

        //getters
        function getElecStock(){
          return $this->elecStock;
        }

        function getbedStock(){
          return $this->bedStock;
        }

        function getSofaStock(){
          return $this->sofaStock;
        }

        function getTableStock(){
          return $this->tableStock;
        }

        public function total(){
          
          echo "<div class='total-stock'><h3>Total Number of Stock: " . $this->total = $this->elecStock + $this->bedStock + $this->sofaStock + $this->tableStock . "</h3></div><br><br>";
          echo "<div class='stock-container'>";
          echo "<div class='box box-down cyan'><p> Bed Stock: " . $this->bedStock . "</p></div><br>";
          echo "<div class='box box-down blue'><p>Electronic Stock: " . $this->elecStock . "</p></div><br>";
          echo "<div class='box red'><p>Sofa Stock: " . $this->sofaStock . "</p></div><br>";
          echo "<div class='box orange'><p>Table Stock: " . $this->tableStock."</p></div>";
          echo "</div>";
       

        }
      }

      //CHILD CLASS - Single Inheritance
      class products extends storage{
        public $image;
        public $name;
        public $id;
        public $category;

        //setters
        function setImage($cimage){
          return $this->image = $cimage;
        }
        
        function setName($cname){
          return $this->name = $cname;
        }

        function setID($cid){
          return $this->id = $cid;
        }

        function setCategory($ccategory){
          return $this->category = $ccategory;
        }

        //getters
        function getImage(){
          return $this->image;
        }
        
        function getName(){
          return $this->name;
        }

        function getID(){
          return $this->id;
        }

        function getCategory(){
          return $this->category;
        }

        //products
        function product1(){
          $item = new products();
          $item->setImage("images/product1.png");
          $item->setName("Sofa Bed");
          $item->setID(1010);
          $item->setCategory("Sofa");
          $item->displayStorage();
        }

        function product2(){
          $item = new products();
          $item->setImage("images/product2.png");
          $item->setName("Queen's Bed");
          $item->setID(2011);
          $item->setCategory("Bed");
          $item->displayStorage();
        }

        function product3(){
          $item = new products();
          $item->setImage("images/product3.png");
          $item->setName("Dining Table");
          $item->setID(4012);
          $item->setCategory("Table");
          $item->displayStorage();
        }

        function product4(){
          $item = new products();
          $item->setImage("images/product4.png");
          $item->setName("Ceiling Fan");
          $item->setID(3013);
          $item->setCategory("Electronics");
          $item->displayStorage();
        }

        function product5(){
          $item = new products();
          $item->setImage("images/product5.png");
          $item->setName("Aircon");
          $item->setID(3014);
          $item->setCategory("Electronics");
          $item->displayStorage();
        }
        function displayStorage(){
          echo "<div class='card'>
              <div class='container'>";
                echo "<center><img src = '" . $this->image . "' width='250'></center><br>";
                echo "<p>Product Name: <br>" . $this->name . "<br><br>";
                echo "Product ID: <br>" . $this->id . "<br><br>";
                echo "Category: <br>" . $this->category .  
              "</p></div>
          </div>";
        }

        function stock(){
          $stock = new storage();
          $stock->setElecStock(50);
          $stock->setBedStock(35);
          $stock->setSofaStock(35);
          $stock->setTableStock(50);
          $stock->total();
        }
      }

      //PARENT CLASS - Hierarchical Inheritance
      class deliver{
        public $category;
        public $brand;
        public $prodnum;
        public $arrivaldate;
        public $total;
        public $elecnum = 79;
        public $cabinetnum = 69;
        public $shelfnum = 50;

        //setters
        function setCategory($ccategory){
          return $this->category = $ccategory;
        }

        function setBrand($cbrand){
          return $this->brand = $cbrand;
        }

        function setProdNum($cprodnum){
          return $this->prodnum = $cprodnum;
        }

        function setArrival($carrivaldate){
          return $this->arrivaldate = $carrivaldate;
        }

        //getters
        function getCategory(){
          return $this->category;
        }

        function getBrand(){
          return $this->brand;
        }

        function getProdNum(){
          return $this->prodnum;
        }

        function getArrival(){
          return $this->arrivaldate;
        }
        
        function title(){
          ?><div id="to-arrive"><h1>To Arrive<div class='line'></div><br></h1></div><?php
        }

        function totalItemNum(){
          echo "<h3>Total Product Number: " . $this->total = $this->elecnum + $this->cabinetnum + $this->shelfnum . "</h3>";
        }
      }
      
      //CHILD CLASS - Hierarchical Inheritance
      class electronics extends deliver{
        public $prodname;
        public $warranty;
        public $elecnum;

        //setters
        function setProdName($cprodname){
          return $this->prodname = $cprodname;
        }

        function setWarranty($cwarranty){
          return $this->warranty = $cwarranty;
        }

        function setElecNum($celecnum){
          return $this->elecnum = $celecnum;
        }

        //getters
        function getProdName(){
          return $this->prodname;
        }

        function getWarranty(){
          return $this->warranty;
        }

        function getElecNum(){
          return $this->elecnum;
        }

        function values(){
          $electronics = new electronics();
          $electronics->setProdName("Refrigerator");
          $electronics->setWarranty("1 year after purchase.");
          $electronics->setElecNum(79);
          $electronics->displayElectronics();
        }
        
        function displayElectronics(){
          echo "<div class='card'>
              <div class='container'>";
                echo "<center><img src = 'images/product6.png' width = '250'></center>";
                echo "<p>Product Name: " . $this->prodname . "<br><br>";
                echo "Warranty: " . $this->warranty . "<br><br>";
                echo "Number of Items: " . $this->elecnum . "<br></p>";
          echo "</div></div>";
        }
      }

        //CHILD CLASS - Hierarchical Inheritance
        class cabinet extends deliver{
        public $prodname;
        public $material;
        public $cabinetnum;

        //setters
        function setProdName($cprodname){
          return $this->prodname = $cprodname;
        }

        function setMaterial($cmaterial){
          return $this->material = $cmaterial;
        }

        function setCabinetNum($ccabinetnum){
          return $this->cabinetnum = $ccabinetnum;
        }

        //getters
        function getProdName(){
          return $this->prodname;
        }

        function getMaterial(){
          return $this->material;
        }

        function getCabinetNum(){
          return $this->cabinetnum;
        }

        function values(){
          $Cabinet = new cabinet();
          $Cabinet->setProdName("Cabinet");
          $Cabinet->setMaterial("Oak Wood");
          $Cabinet->setCabinetNum(69);
          $Cabinet->displayCabinet();
        }

        function displayCabinet(){
          echo "<div class='card'>
              <div class='container'>";
              echo "<center><img src = 'images/product7.png' width = '250'></center>";
              echo "<p>Product Name: " . $this->prodname . "<br><br>";
              echo "Material: " . $this->material . "<br><br>";
              echo "Number of Items: " . $this->cabinetnum . "<br></p>";
          echo "</div></div>";
        }
      }

        //CHILD CLASS - Hierarchical Inheritance
        class shelf extends deliver{
        public $prodname;
        public $material;
        public $shelfnum;

        //setters
        function setProdName($cprodname){
          return $this->prodname = $cprodname;
        }

        function setMaterial($cmaterial){
          return $this->material = $cmaterial;
        }

        function setShelfNum($cshelfnum){
          return $this->shelfnum = $cshelfnum;
        }

        //getters
        function getProdName(){
          return $this->prodname;
        }

        function getMaterial(){
          return $this->material;
        }

        function getShelfNum(){
          return $this->shelfnum;
        }

        function values(){
          $Shelf = new shelf();
          $Shelf->setProdName("Shelf");
          $Shelf->setMaterial("Oak Wood");
          $Shelf->setShelfNum(50);
          $Shelf->displayShelf();
        }

        function displayShelf(){
          echo "<div class='card'>
            <div class='container'>";
            echo "<center><img src = 'images/product8.png' width = '250'></center>";
            echo "<p>Product Name: " . $this->prodname . "<br><br>";
            echo "Material: " . $this->material . "<br><br>";
            echo "Number of Items: " . $this->shelfnum . "<br></p>";
          echo "</div></div>";
        }
      }

    //Single Inheritance obj
    $Storage = new storage();
    $Products = new products();

    $Products->stock();
    $Products->product1();
    $Products->product2();
    $Products->product3();
    $Products->product4();
    $Products->product5();

    //Hierarchical Inheritance obj
    $Deliver = new deliver();
    $Electronics = new electronics();
    $Cabinet = new cabinet();
    $Shelf = new shelf();

    $Deliver->title();
    $Electronics->values();
    $Cabinet->values();
    $Shelf->values();
    $Deliver->totalItemNum();

?> 
  </body>
</html>