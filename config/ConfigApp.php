<?php
class ConfigApp{
  public static $ACTION = 'action';

  // Acciones de Mostrar
  public static $ACTION_MOSTRAR_INICIO = 'inicio';
  public static $ACTION_MOSTRAR_HOME = 'home';
  public static $ACTION_MOSTRAR_FIXTURE = 'fixture';
  public static $ACTION_MOSTRAR_EQUIPOS = 'equipos';
  public static $ACTION_MOSTRAR_CONTACTO = 'contacto';
  public static $ACTION_MOSTRAR_JUGADORES_GRAL = 'jugadores';
  public static $ACTION_MOSTRAR_ADM = 'adminjugadores';
  public static $ACTION_MOSTRAR_ADM_TEAM = 'adminequipos';

  // Acciones respecto a las Posiciones en los Equipos
  public static $ACTION_AGREGAR_POSICION = 'agregar_posicion';
  public static $ACTION_BORRAR_POSICION = 'borrar_posicion';
  public static $ACTION_MODIFICAR_POSICION = 'modificar_posicion';

  // Acciones respecto a los Jugadores
  public static $ACTION_AGREGAR_JUGADOR = 'agregar_jugador';
  public static $ACTION_BORRAR_JUGADOR = 'borrar_jugador';
  public static $ACTION_MODIFICAR_JUGADOR = 'modificar_jugador';
  public static $ACTION_GUARDAR_EDICION_JUGADOR = 'guardar_mod_jugador';
  public static $ACTION_ADM_JUGADOR_TEAM = 'adm_jugador_team';
  // Acciones respecto a los Jugadores
  public static $ACTION_AGREGAR_IMAGEN = 'agregar_imagen';
  public static $ACTION_BORRAR_IMAGEN = 'borrar_imagen';
  // Seccion de vistas
  public static $ACTION_VER_JUGADORES_EQUIPO = 'ver_jugadores_equipo';
  public static $ACTION_VER_JUGADORES = 'ver_jugadores';

  //En cuanto a equipos
  public static $ACTION_LISTA_EQUIPOS = 'lista_equipos';

  //En cuanto a posiciones
  public static $ACTION_VER_POSICIONES = 'ver_posiciones';
  public static $ACTION_VMODIFICAR_POSICION = 'vista_mod_posicion';

  //En cuanto a los directorios
  public static $DIRECTORIO_DE_IMAGENES = 'images/';

  //seccion de comentarios de jugadores
  public static $ACTION_COMENTARIOS_JUGADOR = 'comentarios_jugador';
  public static $ACTION_IR_ADM_COMENTARIOS = 'admincomentarios';

  //con respecto a  sesiones de usuario
  public static $ACTION_IR_A_LOGIN = "ingresar";
  public static $ACTION_IR_A_REGISTRO  = "ir_registrarse";
  public static $ACTION_REGISTRAR_USER = "guardar_user";
  public static $ACTION_LOGIN = "login_user";
  public static $ACTION_CERRAR_SESION = "cerrar_sesion";

  //config de tipos de usuario
  public static $USER_COMUN = 1;
  public static $USER_ADMIN = 2;
  public static $USER_DUENIO = 3;

  //Instalacion de la web
  public static $ARCHIVO_SQL = "sql/NBAPlayoff.sql";
}

 ?>
