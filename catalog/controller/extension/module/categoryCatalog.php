<?php
class ControllerExtensionModuleCategoryCatalog extends Controller {
	public function index() {

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(59);

		foreach ($categories as $category) {
			$filter_data = array(
				'filter_category_id'  => $category['category_id'],
				'filter_sub_category' => true
			);

			if ($category['image']) {
				$cat_image = 'image/' . $category['image'];
			} else {
				$cat_image = '';
			}				

			$data['categories'][] = array(
				'category_id' => $category['category_id'],
				'image' 	  => $cat_image,
				'totals'	 => $this->model_catalog_product->getTotalProducts($filter_data) . ' позиций',
				'name'        => $category['name'],
				'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
			);
		}

		return $this->load->view('extension/module/categoryCatalog', $data);
	}
}