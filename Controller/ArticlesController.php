<?php
App::uses('AppController', 'Controller');
/**
 * Articles Controller
 *
 * @property Article $Article
 * @property PaginatorComponent $Paginator
 */
class ArticlesController extends AppController {

/**
 * Components
 *
 * @var array
 */

	public $uses = array('Article','Tag', 'Category');

	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		//$this->Article->recursive = 0;
		$this->Paginator->settings = array(
			'order' => array('Article.created' => 'desc')
		);
		$this->set('articles', $this->Paginator->paginate());
		$this->set('tags', $this->Tag->find('all'));

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
		$this->set('article', $this->Article->find('first', $options));

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('tags', $this->Tag->find('list'));
		$this->set('categories', $this->Category->find('list'));
		
		if ($this->request->is('post')) {
			$this->Article->create();
			$data = $this->request->data;

			 $url = strtolower($data['Article']['title']);
			 //Reemplazamos caracteres especiales latinos
			 $find = array('á','é','í','ó','ú','â','ê','î','ô','û','ã','õ','ç','ñ');
			 $repl = array('a','e','i','o','u','a','e','i','o','u','a','o','c','n');
			 $url = str_replace($find, $repl, $url);
			 //Añadimos los guiones
			 $find = array(' ');
			 $url = str_replace($find, '-', $url);
			 // $url = str_replace(" ", '-', $url);
			 //Eliminamos y Reemplazamos los demas caracteres especiales
			 $find = array('/[^a-z0-9\-&lt;&gt;]/', '/&lt;{^&gt;*&gt;/');
			 $repl = array('-');
			 $url = preg_replace($find, $repl, $url);


			$data['Article']['url'] = $url;

			if ($this->Article->save($data)) {
				$this->Session->setFlash(__('The article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		}

	}

	public function add_tag() {
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$this->Tag->create();
			if ($this->Tag->save($this->request->data)) {
				return json_encode ( $this->Tag->getLastInsertId() );//$this->redirect(array('action' => 'index'));
			} else {
				json_encode ( false );//$this->Session->setFlash(__('The Tag could not be saved. Please, try again.'));
			}
		}

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('categories', $this->Category->find('list'));
		$this->set('tags', $this->Tag->find('list'));
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is(array('post', 'put'))) {

			$data = $this->request->data;

			 $url = strtolower($data['Article']['title']);
			 //Reemplazamos caracteres especiales latinos
			 $find = array('á','é','í','ó','ú','â','ê','î','ô','û','ã','õ','ç','ñ');
			 $repl = array('a','e','i','o','u','a','e','i','o','u','a','o','c','n');
			 $url = str_replace($find, $repl, $url);
			 //Añadimos los guiones
			 $find = array(' ');
			 $url = str_replace($find, '-', $url);
			 //Eliminamos y Reemplazamos los demas caracteres especiales
			 $find = array('/[^a-z0-9\-&lt;&gt;]/', '/&lt;{^&gt;*&gt;/');
			 $repl = array('-');
			 $url = preg_replace($find, $repl, $url);


			$data['Article']['url'] = $url;


			if ($this->Article->save($data)) {
				$this->Session->setFlash(__('The article has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
			$this->request->data = $this->Article->find('first', $options);
		}

	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		//$this->request->allowMethod('post', 'delete');
		if ($this->Article->delete()) {
			$this->Session->setFlash(__('The article has been deleted.'));
		} else {
			$this->Session->setFlash(__('The article could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function desactive($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		//$this->request->allowMethod('post', 'delete');
		if ($this->Article->saveField('active', '0')) {
			$this->Session->setFlash(__('The article has been deactivated.'));
		} else {
			$this->Session->setFlash(__('The article could not be deactivated. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function active($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->Article->saveField('active', '1')) {
			$this->Session->setFlash(__('The article has been activated.'));
		} else {
			$this->Session->setFlash(__('The article could not be activated. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function upload() {
		$this->autoRender = false;
		$time = strtotime ( "now" );
		$targetFolder = '../webroot/files/'; // Relative to the root
		if (! empty ( $_FILES )) {
			$tempFile = $_FILES ['file'] ['tmp_name'];
			$targetPath = $targetFolder;
			// Validate the file type
			$fileTypes = array (
					'jpg',
					'jpeg',
					'gif',
					'png',
					'JPG',
					'JPEG',
					'GIF',
					'PNG'
			); // File extensions
			$fileParts = pathinfo ( $_FILES ['file'] ['name'] );
			if (in_array ( $fileParts ['extension'], $fileTypes )) {
				$name = "img" . $time . $this->__randomStr ( 3 );
				$targetFile = rtrim ( $targetPath, '/' ) . '/' . $name . "." . $fileParts ['extension'];
				if (move_uploaded_file ( $tempFile, $targetFile )) {
					$namepath = $name . "." . $fileParts ['extension'];
					return json_encode ( array (
							1,
							$namepath 
					) );
				} else {
					return json_encode ( array (
							false,
							false 
					) );
				}
			} else {
				echo 'Imagen no valida';
			}
		}
	
	}

	function __randomStr($length) {
		$str = '';
		$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	
		$size = strlen ( $chars );
		for($i = 0; $i < $length; $i ++) {
			$str .= $chars [rand ( 0, $size - 1 )];
		}
	
		return $str;
	}

	public function applyFilter(){

		$limit = '';
		$conditions = array();
		$tags = array();
		$search = '';
		$conditions[1] = array('Article.active' => 1);
		if(!empty($_GET['tag'])) $tags = $_GET['tag'];

		if(!empty($_GET['search'])){
			$search = $_GET['search'];
			$conditions[2] = array('Article.url LIKE %'.$search.'%');
		} 
		
	  if($_GET['premium'] != 'P') $conditions[0] = array('Article.premium' => $_GET['premium']);

		$this->set('articles', $this->__get_all_articles($conditions,$tags,$limit));

		$this->set('tags', $this->Tag->find('all'));
		$this->render('index');
	}

	public function search(){

		$limit = '';
		$conditions = array();
		$tags = array();
		$search = '';

		if(!empty($_GET['search'])){
			$search = $_GET['search'];
			$conditions[2] = array('Article.title LIKE "%'.$search.'%"');
		} 

		$this->set('articles', $this->__get_all_articles($conditions,$tags,$limit));

		$this->set('tags', $this->Tag->find('all'));
		$this->render('index');
	}


	public function getArticles($tag = '', $limit = 10, $categories = null, $id = null){
		$this->autoRender = false;
		$conditions = array('Article.active'=>1);
		$categories = str_replace("_", " ", $categories);

		if($categories != 'null'){
			$categ = $this->Category->findByName($categories);
			array_push($conditions, array('Article.category_id' => $categ['Category']['id']));
		}

		if($id != ''){
			array_push($conditions, array('Article.id <>' => $id));
		}

		if($tag == 'null'){
			$result_articles = $this->__get_all_articles($conditions,null,$limit);
		}
		else{
			$tag = $this->Tag->findByName($tag);
			$result_articles = $this->__get_all_articles($conditions,$tag['Tag']['id'],$limit);	
		}
	

		echo json_encode($result_articles);
	}

	function  __get_all_articles($filter, $tags, $limit){

		$relacion = '';

		if(!empty($tags)){
			$relacion = array(
				array( 
			      'table' => 'articles_tags', 
			      'alias' => 'ArticlesTags', 
			      'type' => 'inner',  
			      'conditions'=> array('ArticlesTags.tag_id'=>$tags,'ArticlesTags.article_id = Article.id') 
		  		)
			);
		}

		$this->log($filter);

		$this->Paginator->settings = array(
			'fields' => array('DISTINCT *'),
			'joins'	=> $relacion,
			'conditions' => $filter,
			'recursive' => 2,
			'order' => array('Article.created' => 'desc'),
			'limit' => $limit
		);
		
		$article = $this->Paginator->paginate('Article');
		
		return $article;
	}


}