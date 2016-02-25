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

		$errors=[];

		if (empty($image1) || empty($image2) || empty($image3)) {
			$errors['image']="Toutes les images sont obligatoires";
			$this->show('publish/index', ['errors' => $errors]);
		}

		if (empty($errors)) {
			/* Image1 */
			list($type, $data) = explode(';', $image1);
			list(, $data)      = explode(',', $data);
			$data = base64_decode($data);

				/* On génère un nom aléatoire pour l'image 1 */
				$tmpfname1 = tempnam(__DIR__.'/../../uploads/', "");
				file_put_contents($tmpfname1.'.png', $data);

			/* Image2 */

			list($type, $data) = explode(';', $image2);
			list(, $data)      = explode(',', $data);
			$data = base64_decode($data);

				/* On génère un nom aléatoire pour l'image 2 */
				$tmpfname2 = tempnam(__DIR__.'/../../uploads/', "");
				file_put_contents($tmpfname2.'.png', $data);

			/* Image3 */
			list($type, $data) = explode(';', $image3);
			list(, $data)      = explode(',', $data);
			$data = base64_decode($data);

				/* On génère un nom aléatoire pour l'image 3 */
				$tmpfname3 = tempnam(__DIR__.'/../../uploads/', "");
				file_put_contents($tmpfname3.'.png', $data);			


			// j'insère en bdd s'il n'y a pas d'erreur
			$_SESSION['message']="Votre stip a bien été enregistré";
			$this->redirectToRoute('home');
		}
		
	}

}