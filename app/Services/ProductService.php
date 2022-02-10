<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Http\UploadedFile;
use Illuminate\Filesystem\Filesystem;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    private const PRODUCT_IMAGES_PATH = '/products';

    /** @var ProductRepository  */
    private $productRepository;

    /** @var Filesystem */
    private $filesystem;

    public function __construct(ProductRepository $productRepository, Filesystem $filesystem)
    {
        $this->productRepository = $productRepository;
        $this->filesystem = $filesystem;
    }

    public function all()
    {
        return $this->productRepository->getPaginatedProducts();
    }

    public function create(array $attributes): Product
    {
        /** @var UploadedFile $productImage */
        $productImage = Arr::get($attributes, 'image');
        $newImagePath = null;

        if ($productImage !== null) {
            $newImagePath = Storage::disk('public')->put(self::PRODUCT_IMAGES_PATH, $productImage);
        }

        $attributes['image'] = $newImagePath;

        return $this->productRepository->create($attributes);
    }

    public function getProductsFilteredByCategory($category)
    {
        return $this->productRepository->filterByCategory($category);
    }
}
