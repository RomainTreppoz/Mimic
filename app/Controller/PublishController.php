<?php

namespace Controller;

use \W\Controller\Controller;

class PublishController extends Controller
{


	/**
	 * Page d'index de publication
	 */
	public function index()
	{
		$this->show('publish/index');
	}

	public function submit()
	{
		$texte1 = htmlentities(trim($_POST['texte1']));
		$texte2 = htmlentities(trim($_POST['texte2']));
		$texte3 = htmlentities(trim($_POST['texte3']));
		$image1 = htmlentities(trim($_POST['snapPhotoData-1']));
		$image2 = htmlentities(trim($_POST['snapPhotoData-2']));
		$image3 = htmlentities(trim($_POST['snapPhotoData-3']));

echo $image3;

die;
		$errors=[];
		if (!empty($image1) || !empty($image2) || !empty($image3)) {
			$errors['image']="Toutes les images sont obligatoires";
		}

		if (empty($errors)) {
			// j'insère en bdd s'il n'y a pas d'erreur
			$this->redirectToRoute('home');
		}
		else {
			$this->show('publish/index', ['errors' => $errors]);

		}
	}

}