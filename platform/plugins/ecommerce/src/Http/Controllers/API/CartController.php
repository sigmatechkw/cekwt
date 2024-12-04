<?php

namespace Botble\Ecommerce\Http\Controllers\API;

use Botble\Ecommerce\Http\Controllers\BaseController;
use Botble\Ecommerce\Http\Requests\API\AddCartRequest;
use Botble\Ecommerce\Http\Requests\API\CartRefreshRequest;
use Botble\Ecommerce\Http\Resources\API\ProductCartResource;
use Botble\Ecommerce\Models\Product;
use Illuminate\Http\JsonResponse;

class CartController extends BaseController
{
    /**
     * Add product to cart
     *
     * @group Cart
     * @param AddCartRequest $request
     * @bodyParam product_id integer required ID of the product. Example: 1
     * @bodyParam quantity integer required Quantity of the product. Default: 1. Example: 1
     *
     * @return JsonResponse
     */

    public function store(AddCartRequest $request)
    {
        /**
         * @var Product $product
         */
        $product = Product::query()->findOrFail($request->input('product_id'));

        $quantity = $request->input('quantity');

        if (! $this->validateStock($product, $quantity)) {
            return $this
                ->httpResponse()
                ->setError()
                ->setData(new ProductCartResource($product))
                ->setMessage(__('Not able to add to cart. The maximum quantity to add to cart is :count', ['count' => $product->quantity]))
                ->toApiResponse();
        }

        $price = $product->price()->getPrice() * $quantity;

        return $this
            ->httpResponse()
            ->setData(new ProductCartResource($product))
            ->setAdditional([
                'cart_total' => $price,
                'cart_total_formatted' => format_price($price),
            ])
            ->toApiResponse();
    }

    /**
     * Refresh cart items
     *
     * @group Cart
     * @param CartRefreshRequest $request
     * @bodyParam products array required List of products. Example: [{"product_id": 1, "quantity": 1}]
     * @bodyParam products.*.product_id integer required ID of the product. Example: 1
     * @bodyParam products.*.quantity integer required Quantity of the product. Example: 1
     *
     * @return JsonResponse
     */
    public function refresh(CartRefreshRequest $request)
    {
        $products = Product::query()
            ->whereIn('id', collect($request->input('products'))->pluck('product_id'))
            ->get();

        $cartTotal = 0;

        $outOfStockProducts = collect();
        foreach ($request->input('products') as $item) {
            /**
             * @var Product $product
             */
            $product = $products->firstWhere('id', $item['product_id']);
            if (! $this->validateStock($product, $item['quantity'])) {
                $outOfStockProducts->push($product);
            } else {
                $cartTotal += $product->price()->getPrice() * $item['quantity'];
            }
        }

        return $this
            ->httpResponse()
            ->setData(ProductCartResource::collection($products))
            ->setAdditional([
                'out_of_stock_products' => ProductCartResource::collection($outOfStockProducts),
                'cart_total' => $cartTotal,
                'cart_total_formatted' => format_price($cartTotal),
            ])
            ->toApiResponse();
    }

    protected function validateStock($product, $quantity = null): bool
    {
        if (! $product) {
            return false;
        }

        if ($quantity === null) {
            return ! $product->isOutOfStock();
        }

        if ($product->isOutOfStock() || $product->quantity < $quantity) {
            return false;
        }

        return true;
    }

}
