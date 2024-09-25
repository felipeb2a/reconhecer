<?php
	include_once('template/header.php');
  //session
  require_once('includes/session.php');
  //valida logado
  require_once('functions/validacargo.php');
?>
  <div class="spacing" style="min-height: 15vh;">
  </div>
	<section id="" class="clean-block features bloco">
		<div class="bloco">
      <div class="container" style="height: 100%;">
        <div class="block-heading">
			    <h2 class="text-info">Lista</h2>

			    <p>Lista de selos encaminhados aos colaboradores.</p>
			    </br>
          <p><a class="btn btn-outline-dark btn-lg" href="selo.csv">Download as CSV</a></p>
			  </div>
			  <div id='table-container'></div>
		  </div>
	  </div>
	</section>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.csv.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/csv_to_html_table.js"></script>

    <script type="text/javascript">
      function format_link(link){
        if (link)
          return "<i" + link + ">" + link + "</i>";
        else
          return "";
      }

      CsvToHtmlTable.init({
        csv_path: 'selo.csv',
        element: 'table-container', 
        allow_download: true,
        csv_options: {separator: ',', delimiter: '"'},
        datatables_options: {"paging": true},
        custom_formatting: [[4, format_link]]
      });
    </script>
