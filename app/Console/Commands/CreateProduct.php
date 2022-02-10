<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ProductService;
use App\Rules\ProductValidationRules;
use Illuminate\Support\Facades\Validator;

class CreateProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'product:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to create a new Product';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ProductService $productService)
    {
        parent::__construct();
        $this->productService = $productService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $attributes = [];
        $attributes['name'] = $this->ask('Enter product name: ');
        $attributes['description'] = $this->ask('Enter product description: ');
        $attributes['price'] = $this->ask('Enter product price: ');
        $attributes['category_id'] = $this->ask('Enter category ID of the product: ');
        $attributes['image_url'] = $this->ask('Enter the absolute path of the product image: ');

        $validator = Validator::make($attributes, ProductValidationRules::RULES);

        if ($validator->fails()) {
            return $this->info('invalid data was provided.');
        }

        $product = $this->productService->create($attributes);

        if ($product) {
            return $this->info('Product was created sucessfully.');
        }

        return $this->error('Something went wrong !, try again.');
    }
}
