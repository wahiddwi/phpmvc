<?php

class Product extends Controller {
    public function index() {
        $data['title'] = 'List Products';
        $data['product'] = $this->model('Product_model')->getAllProduct();
        $this->view('layouts/header', $data);
        $this->view('product/index', $data);
        $this->view('layouts/footer');
    }

    public function detail($id) {
        $data['title'] = 'Detail Product';
        $data['product'] = $this->model('Product_model')->getProductById($id);
        $this->view('layouts/header', $data);
        $this->view('product/detail', $data);
        $this->view('layouts/footer');
    }

    public function create()
    {
        if ($this->model('Product_model')->createProduct($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/product');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/product');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Product_model')->deleteProduct($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/product');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/product');
            exit;
        }
    }

    public function getEditData()
    {
        echo json_encode($this->model('Product_model')->getProductById($_POST['id']));
    }

    public function update()
    {
        if ($this->model('Product_model')->updateProductData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/product');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/product');
            exit;
        }
    }
}