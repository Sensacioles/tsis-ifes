<?php require 'header.php'; include_once 'banco.php';?>

<!--BOOTSTRAP PRODUTOS-->
<div class="m-5 ">
    <div class="fs-1 mb-5">
        <h1>Lista de Produtos</h1>
    </div>
    <div class="table-responsive">            
        <table class="table  table-hover ">
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data inclusão</th>
                    <th scope="col">Preço</th>                   
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php 
                    $sql="SELECT * FROM produto";
                    $res=mysqli_query($connect,$sql);
                    if(mysqli_num_rows($res)>0):
                        while($linha=mysqli_fetch_array($res));
                ?>
    </div>
</div>

<?php include_once 'footer.php';?>

     
 
