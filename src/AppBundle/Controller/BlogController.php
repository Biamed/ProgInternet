<?php 
	namespace AppBundle\Controller;
	use Symfony\Bundle\FrameworkBundle\Controller\Controller;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\HttpFoundation\Request;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class BlogController extends Controller
{
	/**
	* @Route("/blog", name="index")
	*/
	public function indexAction(Request $request){
		//return new Response("Pagina Inicial");

		$nome = $request->request->get('nome');
		$senha = $request->request->get('senha');

		if($nome == 'Beatriz' && $senha == '123'){
			return redirectToRoute(
				'home_page',
				array('request' => $request),
				307
				);
		}

		return $this->render(
			'bia/index.html.php', array()
			);
	}
	/**
	* @Route("/bia/home", name="home_page")
	*/
	public function homeAction(){

		$request = Request::createFromGlobals();
		$nome = $request->request->get('nome');
		$senha = $request->request->get('senha');

		return $this->render(
			'bia/home.html.php',
			array('nome'=>$nome, 'senha'=>$senha)
		);
	}
	/**
	* @Route("/bia/home/detalhe", name="blog_detalhe")
	*/
	public function detalheAction(){
		$req = Request::createFromGlobals();
		$id = $req->query->get('id');
		return new Response("Detalhes: ". $id);
	}
}
?>