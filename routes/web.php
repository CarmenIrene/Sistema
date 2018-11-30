<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'principalController@principal');
Route::get('/inicioSesion/', 'inicioSesionController@inicioSesion');
Route::post('/GuardaSesion', 'inicioSesionController@GuardaSesion');
Route::get('/MenuAlumno/{clave}', 'MenuAlumnoController@menuAlumno');

Route::get('/llenarSolicitud/{clave}', 'llenarSolicitudController@llenarSolicitud');
Route::post('/GuardaSolicitud/{clave}', 'llenarSolicitudController@GuardaSolicitud');
Route::post('/GuardaEmpresa', 'llenarSolicitudController@GuardaEmpresa');
Route::post('/GuardaEmpresaDireccion', 'llenarSolicitudController@GuardaEmpresaDireccion');

Route::get('/subirReportesAlumno/{clave}', 'subirReportesAlumnoController@subirReportes');

Route::post('/GuardaAlumno', 'inicioSesionController@GuardaAlumno');
Route::get('/principal', 'principalController@principal');


Route::get('/AlumnoSeleccionaEstadisticasEmpresa/{clave}', 
	'AlumnoSeleccionaEstadisticasEmpresaController@AlumnoEstadisticasEmpresa');
/** parte donde el alumno visualiza la grafica de estadisticas de la empresa de la empresa que
seleccionó en la vista anterior **/
Route::get('/AlumnoVisualizaEstadisticasEmpresa/{clave}', 'AlumnoVisualizaEstadisticasEmpresaController@AlumnoVisualizaEstadisticas');
/** parte donde el alumno selecciona estadisticas de la empresa, para poder seleccionar una empresa del catalogo y asi visualizar los reportes que hay **/

Route::get('/AlumnoSeleccionaReportesEmpresa/{clave}', 'AlumnoSeleccionaReportesEmpresaController@AlumnoSeleccionaReportesEmpresa');
/** parte donde el alumno visualiza los reportes  de la empresa que
seleccionó en la vista anterior **/
Route::get('/AlumnoVisualizaReportesEmpresa/{clave}', 'AlumnoVisualizaReportesEmpresaController@AlumnoVisualizaReportesEmpresa');
/** Vista donde el alumno podrá consultar las autorizaciónes **/
Route::get('/AlumnoAutorizaciones/{clave}', 'AlumnoAutorizacionesController@AlumnoAutorizaciones');

Route::get('/EvaluacionAlumnoEmpresa/{clave}', 'EvaluacionAlumnoEmpresaController@EvaluacionAlumno');
Route::get('/EvaluacionEmpresaAlumno/{clave}', 'EvaluacionEmpresaAlumnoController@EvaluacionEmpresa');

// -----------------------------SECRETARIA ACADEMICA -------------------------------------------------------------------------------------------------------------------------------------------------//

// parte donde el encargado de secretaria academica puede ver y registrar a los encargados de
//practicas de toda la facultad//

Route::get('/', 'principalSecretariaController@principalSecretaria');

Route::get('/inicioSesionSecretaria', 'inicioSesionSecretariaController@inicioSesionSecretaria');

Route::post('/GuardaSesionSecretaria', 'inicioSesionSecretariaController@GuardaSesionSecretaria');

Route::get('/MenuSecretaria/{rpe}', 'MenuSecretariaController@MenuSecretaria');

Route::get('/SecretariaRegistroEncargadoPracticas/{rpe}', 
'SecretariaRegistroEncargadoPracticasController@RegistroEncargadoPracticas');//despues del arroba es el nombre de la tabla en el controller


// parte donde el encargado de secretaria academica puede consultar a los alumnos por clave o nombre//
Route::get('/SecretariaConsultaAlumno/{rpe}','SecretariaConsultaAlumnoController@SecretariaConsultaAlumno');

// parte donde el encargado de secretaria academica puede visualizar el resultado de la consulta de la bÃºsqueda por nombre o clave//
Route::get('/SecretariaResultadoConsultaAl/{rpe}','SecretariaResultadoConsultaAlController@SecretariaResBuscarAl');

// parte donde el encargado de secretaria academica puede visualizar el resultado de la consulta de la bÃºsqueda de los alumnos que estÃ¡n en proceso de prÃ¡cticas//
Route::get('/SecretariaConsAlumnosEnProceso/{rpe}', 'SecretariaConsAlumnosEnProcesoController@SecretariaAlumnosEnProceso');

// parte donde el encargado de secretaria academica puede visualizar el resultado de la consulta de los alumnos que estÃ¡n en finalizaron prÃ¡cticas//
Route::get('/SecretariaConsAlumnosFinalizaron/{rpe}', 'SecretariaConsAlumnosFinalizaronController@SecretariaAlumnosFinalizaron');

// parte donde el encargado de secretaria registra una nueva empresa//
Route::get('/SecretariaRegistraEmpresa/{rpe}','SecretariaRegistraEmpresaController@SecretariaRegistraEmpresa');

// parte donde el encargado de secretaria selecciona una empresa para posterormente ver su grÃ¡fica//
Route::get('/SecretariaSeleccionaEmpresaGrafica/{rpe}','SecretariaSeleccionaEmpresaGraficaController@SecretariaEstadisticasEmpresa');
// parte donde el encargado de secretaria visualiza la grÃ¡fica de la empresa que seleccionÃ³ anteriormente//
Route::get('/SecretariaVisualizaEmpresaGrafica/{rpe}', 'SecretariaVisualizaEmpresaGraficaController@SecretariaVisualizaGrafica');

// secretaria visualiza los nombres de los alumnos que pueden generar su constancia de validaciÃ³n//
Route::get('/SecretariaGenerarConstanciaValidacion/{rpe}', 'SecretariaGenerarConstanciaValidacionController@SecretariaGenerarConstancia');

// secretaria visualiza la constancia de validaciÃ³n en formato pdf  del alumno que consulto anteriormente//
Route::get('/SecretariaVisualizarConstanciaValidacion/{rpe}', 'SecretariaVisualizarConstanciaValidacionController@SecretariaVisualizarConstancia');


Route::get('/autorizacionSolicitudEncargado/{clave}', 'autorizarSolicitudEncargadoController@autorizarSolicitudEncargado');
// -----------------------------ASESOR DE LA EMPRESA----------------------------------------------------------------------------------------------------------------------------------//

Route::get('/', 'principalAsesorController@principalAsesor');

Route::get('/inicioSesionAsesor', 'inicioSesionAsesorController@inicioSesionAsesor');

Route::post('/GuardaSesionAsesor', 'inicioSesionAsesorController@GuardaSesionAsesor');

Route::get('/MenuAsesor/{clave}', 'MenuAsesorController@MenuAsesor');
// -----------------------------TUTOR ACADÉMICO----------------------------------------------------------------------------------------------------------------------------------//

Route::get('/', 'principalTutorAcademicoController@principalTutorAcademico');

Route::get('/inicioSesionTutorAcademico', 'inicioSesionTutorAcademicoController@inicioSesionTutorAcademico');

Route::post('/GuardaSesionTutorAcademico', 
	'inicioSesionTutorAcademicoController@GuardaSesionTutorAcademico');

Route::get('/MenuTutorAcademico/{rpe}', 'MenuTutorAcademicoController@MenuTutorAcademico');
Route::get('/TutorAcademicoSolicitudesPendientes/{rpe}', 'TutorAcademicoSolicitudesPendientesController@TutorAcademicoSolicitudesPendientes');

Route::get('/TutorAcademicoAutorizaSolicitud/{rpe}', 'TutorAcademicoAutorizaSolicitudController@TutorAcademicoAutorizaSolicitud');

Route::get('/TutorAcademicoReportesPendientes/{rpe}', 'TutorAcademicoReportesPendientesController@TutorAcademicoReportesPendientes');

Route::get('/TutorAcademicoAutorizaReportes/{rpe}', 'TutorAcademicoAutorizaReportesController@TutorAcademicoAutorizaReportes');
