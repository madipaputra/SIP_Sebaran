<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//Default Controller. Controller Utama
$route['default_controller']	=	'sip_sebaran/loginPage';
$route['index']					=	'sip_sebaran/loginPage';
$route['Login/prosesLogin']		=	'sip_sebaran/doLogin';
$route['logout']				=	'AkunController/logout';


//Routing URL Pendaftaran
$route['Daftar'] 							= 'sip_sebaran/registerPage';
$route['Daftar/prosesDaftar'] 				= 'AkunController/doRsegister'; 

//Controller Dashboard Prodi atau Akademik
$route['dashboard']				=	'PageDashBoard/DashBoardPage';
$route['dashboard/akademik']	=	'PageDashBoard/DashBoardPage';
$route['dashboard/prodi']		=	'PageDashBoard/DashBoardPage';

	// Controller Manage Data (Prodi)
	$route['dashboard/prodi/manageProdi']				=	'PageDashBoard/ManageProdiPage';

	// Controller Manage Data (Akademik)
		//Manage Prodi
		$route['dashboard/akademik/manageProdi']			=	'ManageProdi/ManageProdiPage';
		$route['dashboard/akademik/manageProdi/Add']		=	'ManageProdi/ManageProdiAdd';
		$route['dashboard/akademik/manageProdi/Search']		=	'ManageProdi/ManageProdiSearch';
		$route['dashboard/akademik/manageProdi/Delete']		=	'ManageProdi/ManageProdiDelete';
		$route['dashboard/akademik/manageProdi/Edit']		=	'ManageProdi/ManageProdiEdit';

		//Manage Dosen
		$route['dashboard/akademik/manageDosen']			=	'ManageDosen/ManageDosenPage';
		$route['dashboard/akademik/manageDosen/Add']		=	'ManageDosen/ManageDosenAdd';
		$route['dashboard/akademik/manageDosen/Delete']		=	'ManageDosen/ManageDosenDelete';
		$route['dashboard/akademik/manageDosen/Edit']		=	'manageDosen/ManageDosenEdit';
		$route['dashboard/akademik/manageDosen/Search']		=	'manageDosen/ManageDosenSearch';

		//Manage Matakuliah
		$route['dashboard/akademik/manageMatkul']					=	'ManageMatkul/ManageMatkulPage'; //Halaman List Matkul untuk setiap prodi
		$route['dashboard/akademik/manageMatkulProdi']				=	'ManageMatkul/AKAManageMatkulProdiPage'; //Detail Matkul Untuk Prodi tertentu
		$route['dashboard/akademik/manageMatkul/Add']				=	'ManageMatkul/ManageMatkulAdd';
		$route['dashboard/akademik/manageMatkul/Delete']			=	'ManageMatkul/ManageMatkulDelete';

		$route['dashboard/akademik/manageMatkul/verify']			=	'ManageMatkul/ManageMatkulVerifyPage';
		$route['dashboard/akademik/manageMatkul/verifyMatkulProdi']	=	'ManageMatkul/MatkulProdiVerifyPage';
		$route['dashboard/akademik/manageMatkul/verifyMatkulProdi/VerifyNow'] = 'ManageMatkul/MatkulProdiVerifyNOW';
		$route['dashboard/akademik/manageMatkul/verifyMatkulProdi/AbortNow'] = 'ManageMatkul/MatkulProdiAbortNOW';

		$route['dashboard/akademik/manageMatkul/Search'] = 'ManageMatkul/ManageMatkulSearch';

		//Manage Sebaran
		$route['dashboard/akademik/manageSebaran'] =	'ManageSebaran/SebaranPage';
		$route['dashboard/akademik/manageSebaranProdi'] = 'ManageSebaran/AKASebaranProdiPage';
		$route['dashboard/akademik/manageSebaran/AddPreview'] = 'ManageSebaran/AKASebaranPagePrev';
		$route['dashboard/akademik/manageSebaran/Add']	=	'ManageSebaran/AddSebaran';

	// Controller Manage Data (prodi)
		//manage matakuliah
		$route['dashboard/prodi/manageMatkul']			=	'ManageMatkul/ManageMatkulPage';
		$route['dashboard/prodi/manageMatkul/Search']	=	'ManageMatkul/ManageMatkulSearch';
		$route['dashboard/prodi/manageSebaran'] =	'ManageSebaran/PRODISebaranProdiPage';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;