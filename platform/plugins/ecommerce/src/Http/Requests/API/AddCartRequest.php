<?php

namespace Botble\Ecommerce\Http\Requests\API;

use Botble\Ecommerce\Models\Product;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AddCartRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        $quantity = $this->input('quantity');

        return [
            'product_id' => [
                'required',
                Rule::exists(Product::class, 'id'),
            ],
            'quantity' => [
                'required_with:product_id',
                'integer',
                'min:1',
            ],
        ];
    }
}
