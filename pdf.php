<?php
require('fpdf/fpdf.php');

class PDF extends FPDF

{
// Cabecera de página
function Header()
{
    //logo
    $this->Image('image/Logo3.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(80,15,'REPORTE DEL PACIENTE',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}

}

$mysqli = new mysqli("localhost","root","","dientesfelices");
session_start();
$varDniPaciente=$_SESSION["DniPaciente"];
$consulta = "SELECT * FROM historial_paciente hp 
inner join login_paciente lp on hp.DniPaciente=lp.DniPaciente
inner join login_doctores pd on hp.CodDoctor=pd.CodDoctor
inner join especialidades es on hp.IdEspecialidad=es.IdEspecialidad 
where lp.DniPaciente='$varDniPaciente'";


$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->Cell(20,10, 'DNI:',    0, 0 , 'C', 0);
$pdf->Cell(20,10, $varDniPaciente, 0, 0 , 'C', 0);

$pdf->Ln(15);
$pdf->Cell(20,10, 'Historial', 1, 0 , 'C', 0);
$pdf->Cell(50,10, 'Especialidad', 1, 0 , 'C', 0);
$pdf->Cell(30,10, 'Doctor', 1, 0 , 'C', 0);
$pdf->Cell(30,10, 'Fecha Atencio', 1, 0 , 'C', 0);
$pdf->Cell(40,10, 'Consulta', 1, 0 , 'C', 0);
$pdf->Ln(10);

while($row = $resultado->fetch_assoc()){

    $pdf->Cell(20,10, $row['ID_historial'], 1, 0 , 'C', 0);
    $pdf->Cell(50,10, $row['Descripcion'], 1, 0 , 'C', 0);
    $pdf->Cell(30,10, $row['Nombre'], 1, 0 , 'C', 0);
    $pdf->Cell(30,10, $row['Fecha_Atencio'], 1, 0 , 'C', 0);
    $pdf->Cell(40,10, $row['Receta'], 1, 0 , 'C', 0);
    $pdf->Ln(10);
}


$pdf->Output();
?>


