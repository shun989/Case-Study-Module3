<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
//        $products = $this->productService->getAll();
        $products = Product::paginate(3);
        return view('products-manager.index',compact('products'));
    }

    public function indexHome()
    {
        $products = $this->productService->getAll();
        return view('home',compact('products'));
    }

    public function indexUser()
    {
        $products = $this->productService->getAll();
        return view('products.index',compact('products'));
    }

    public function showCard()
    {
        $products = $this->productService->getAll();
        return view('products-manager.card',compact('products'));
    }

    public function show($id)
    {
//        $dataProduct = $this->productService->findById($id);
        $dataProduct = Product::find($id);
        return view('products.item',compact('dataProduct'));
    }

    public function createForm()
    {
        return view('products-manager.create');
    }

    public function create(Request $request)
    {
        $dataProduct = $this->productService->create($request->all());
        return redirect()->route('admin.index');
    }

    public function updateForm($id)
    {
        $oldProduct = Product::find($id);
        return view('products-manager.update',compact('oldProduct'));
    }

    public function update(Request $request, $id)
    {
        $dataProduct = $this->productService->update($request->all(), $id);
        return redirect()->route('admin.index');
    }

    public function delete($id)
    {
        $dataProduct = $this->productService->destroy($id);
        return redirect()->back();
    }

    public function getSearch(Request $request)
    {
        $data = Product::where('name','like','%'.$request->key.'%')
            ->orWhere('price',$request->key)
            ->orWhere('category',$request->key)
            ->orWhere('created_at',$request->key)
            ->orWhere('updated_at',$request->key)
            ->get();
        return view('products.search',compact('data'));
    }

    public function getSearchAdmin(Request $request)
    {
        $data = Product::where('name','like','%'.$request->key.'%')
            ->orWhere('price',$request->key)
            ->orWhere('category',$request->key)
            ->orWhere('created_at',$request->key)
            ->orWhere('updated_at',$request->key)
            ->get();
        return view('products-manager.search',compact('data'));
    }


}
