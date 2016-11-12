<?php 
	namespace AppBundle\Controller;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogController extends Controller
{


	
	/**
	* @Route("/bia", name="blog_home")
	*/
	public function indexAction()
	{

		$link = $this->generateUrl(
			'descricao',
			array("nome" => 'Eu mesmo!')
			);

		return $this->render (
			'bia/index.html.php',
			array(
				"nome" => 'Beatriz',
				"link" => $link
				)
			);
	}

	/**
	* @Route('/detalhe/{nome}', name="descricao")
	*/

	public function detalheAction($nome){
		
		return new Response($nome);
	}

}
?>