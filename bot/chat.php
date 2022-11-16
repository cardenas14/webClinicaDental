<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //name
    "quienes son" =>  "Somos un centro odontológico, especializado en el cuidado de tus dientes, contamos con personal altamente calificado para brindarte el mejor servicio, te lo garantizamos. ♥", 

    "que especialidades tienen" => "Contamos con diversas especialidades, en total 9 de ellas, las cuales son: odontopediatra, ortodoncia, implantes dentales, diseño de sonrisa, ortopedia maxilar, blanqueamiento, periodoncia, endodoncia, cirugía dental.",

    "hasta que hora me puedo atender" => "Contamos con una disponibilidad amplia de 24 horas, puedes reservar tu cita con nosotros cuando lo necesites.",
    "tienen algún numero de contacto" => "Por supuesto, el número de contacto es +51 9932288642",

    "puede un niño atenderse también" => "Atendemos a cualquier niño que lo necesite, estamos al cuidado de la salud dental de los más pequeños.",

    "donde puedo reservar una cita" => "Puedes reservarlo a través de nuestra página web “Dientes Felices”, en la última página, reserva tu cita en el día que más quieras.",

    "si, no puedo ir a una cita que programe, puedo reservarla otra vez" => "Puedes reservar tu cita cuando dispongas de tiempo, los doctores siempre estarán disponibles de tu atención",

    "puedo elegir al doctor que me atenderá o ustedes los asignan" => "Para una mejor experiencia, nuestros pacientes pueden elegir a su doctor en consulta, te aseguramos que tenemos a un personal A1 en nuestra clínica.",

    "eL costo de la atención es muy cara" => "Nos caracterizamos por ser flexibles con los costos, así que en mejor cuidado, calidad y precio está garantizado.",

    "como puedo hacer seguimiento a mi cita" => "Puedes consultarlo, registrándote en nuestra página y tendrás disponible todas las citas médicas agendadas y tu historial clínico",

    "como me registro en la pagina web" => "Es totalmente fácil, solo debes dirigirte a inicio, en la parte inferior, veras como puedes iniciar sesión, te pedirá algunos datos para el registro y listo, eres parte de nuestra familia Dientes Felices.",

    "si me piden algún examen dental, también lo hacen ustedes" => "Si, contamos con una variedad de exámenes a tu disposición dependiendo a tus necesidades dentales",


    "como te llamas?" =>"Soy DientesBot y estoy para servirte",
    "cual es tu nombre?" =>"Soy DientesBot y estoy para servirte",
    "tienes nombre?" =>"Soy DientesBot y estoy para servirte",


    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is DientesBot",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy una " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Tu pregunta no la tengo registrada en mi base de datos comunicate con +51 915972469 para mas informacion");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
