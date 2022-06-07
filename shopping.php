<?php

date_default_timezone_set("Asia/Taipei");
mysql_connect('localhost', 'abcabc', '123')or die('Error');
mysql_select_db('ncue');
mysql_query("SET NAMES UTF8");
if (is_null($_COOKIE["user"])){

  header('Location:http://localhost:8080/project/moban2377/login2.php');

}



 function fetch_data()  
 {  
      $user=$_COOKIE["user"];
      $output = ''; 
      $sql = "SELECT * FROM `$user` ORDER BY item";  
      $result = mysql_query($sql); 
      while($row = mysql_fetch_array($result))  
      {       
      $output .= '<tr>  
                           
                          <td>'.$row["item"].'</td>  
                          <td>'.$row["number"].'</td>  
                          <td>'.$row["price"].'元</td>  
                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["generate_pdf"]))  
 {  
      require_once('tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("MENU");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('bkai00mp');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('bkai00mp', '',12, '',false);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h4 align="center">您的購物清單</h4><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                 
                <th width="30%">名稱</th>  
                <th width="15%">數量</th>  
                <th width="50%">價格</th>  
           </tr>  
      ';  
      $str = fetch_data();
      $content .= $str;  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('file.pdf', 'I');  
 }  
 ?>  
 