<?php
	include_once('template/header.php');
?>
	<section id="regras" class="clean-block features bloco">
		<div class="bloco">
        <div class="container" style="height: 100%; padding: 50px;">
        	<div class="block-heading">
			    <h2 class="text-info">Lista</h2>

			    <p>Lista de selos encaminhados aos colaboradores.</p>
			    </br>
			    <a class="btn btn-outline-dark btn-lg" role="button" href="download-csv.php">Download Lista</a>
			</div>

			<table class="table table-hover table-dark">
				<thead align="center">
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">data</th>
				      <th scope="col">de</th>
				      <th scope="col">para</th>
				      <th scope="col">email</th>
				      <th scope="col">selo</th>
				      <th scope="col">mensagem</th>
				    </tr>
				</thead>
				<tbody>
<?php

$handle = fopen("selo.csv", "r");
$row = 0;
while ($line = fgetcsv($handle, 1000, ",")) {
	if ($row++ == 0) {
		continue;
	}
	
	$people[] = [
		'data' => $line[0],
		'de' => $line[1],
		'para' => $line[2],
		'email' => $line[3],
		'selo' => $line[4],
		'mensagem' => $line[5]
	];

			echo "<tr>";
			echo "<td>";
				print_r($row -1);
			echo "</td>";
			echo "<td>";
				print_r($line[0]);
			echo "</td>";
			echo "<td>";
				print_r($line[1]);
			echo "</td>";
			echo "<td>";
				print_r($line[2]);
			echo "</td>";
			echo "<td>";
				print_r($line[3]);
			echo "</td>";
			echo "<td>";
				print_r($line[4]);
			echo "</td>";
			echo "<td>";
				print_r($line[5]);
			echo "</td>";
			echo "</tr>";
}

fclose($handle);
?>
				</tbody>
			</table>
		<!--
			<nav aria-label="...">
			  <ul class="pagination">
			    <li class="page-item">
			      <span class="page-link"><a href="open-csv.php?pagina=0">Antes</a></span>
			    </li>
			    <?php
			    	$itens_por_pagina = 2;
					$pagina = intval($_GET['pagina']);
					$num_paginas = ceil($row/$itens_por_pagina);
					for($i=0;$i<$num_paginas;$i++){
						$estilo = "";
			    		if($pagina == $i)
			    			$estilo ="class=\"active\"";
			    ?>
			    <li class="page-item"><a class="page-link" href="open-csv.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
			    
			    <?php
			    }
			    ?>
			    <li class="page-item">
			      <a class="page-link" href="open-csv.php?pagina=<?php echo $num_paginas-1; ?>">Depois</a>
			    </li>
			  </ul>
			</nav>
		-->
		</div>
	</div>
	</section>

	<div id='table-container'></div>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.csv.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/csv_to_html_table.js"></script>


    <script type="text/javascript">
      function format_link(link){
        if (link)
          return "<a href='" + link + "' target='_blank'>" + link + "</a>";
        else
          return "";
      }

      CsvToHtmlTable.init({
        csv_path: 'selo.csv',
        element: 'table-container', 
        allow_download: true,
        csv_options: {separator: ',', delimiter: '"'},
        datatables_options: {"paging": false},
        custom_formatting: [[4, format_link]]
      });
    </script>
